<?php
namespace Exercises;

use _PHPStan_3e014c27f\Nette\Utils\DateTime;
use PDO;
use Utilities\Utilities;

final class EditRoom
{
    /**
     * @var array messages is used to display error and status messages after a form was sent an validated
     */
    private array $messages = [];

    /**
     * @var object twig provides a Twig object to display hmtl templates
     */
    private object $twig;

    /**
     * @var array twigParams is used to set variables passed to Twig
     */
    private array $twigParams = [];

    /**
     * Product constructor.
     *
     * Initializes Twig
     * Creates a database handler for the database connection.
     */

    private function initDB(): void
    {
        $charsetAttr="SET NAMES utf8 COLLATE utf8_general_ci";
        $dsn="mysql:host=db;port=3306;dbname=rooms";
        $mysqlUser="onlineshop";
        $mysqlPwd="geheim";
        $multi=false;
        $options = array(
            // A warning is given for persistent connections in case of a interrupted database connection.
            // This warning is shown on the web page if error_reporting=E_ALL is set in php.ini
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,
            // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH,
            PDO::MYSQL_ATTR_INIT_COMMAND => $charsetAttr,
            PDO::MYSQL_ATTR_MULTI_STATEMENTS => $multi
        );
        $this->dbh = new PDO($dsn, $mysqlUser, $mysqlPwd, $options);
    }

    public function __construct($twig)
    {
        $this->twig=$twig;
        $this->initDB();
    }

    /*
     * Initialize database connection
     *
     * @return void Returns nothing
     */

    /**
     * Validates the user input
     *
     * All fields are required.
     * product_name is checked for uniqueness against onlineshop.product.product_name.
     *
     * @return void Returns nothing
     *@see EditRoom::isValidCategory().
     *
     * Error messages are stored in the array $messages[].
     * Calls Login::business() if all input fields are valid.
     *
     * @see EditRoom::isUniqueProductName().
     * Price can be validated with Utilities::isPrice().
     * ptype is checked against onlineshop.product_category, if it exists.
     */
    public function isValid(): void
    {
        $price = $_POST['price'];

        if (Utilities::isEmptyString($price)) {
            $this->messages[] = "Enter a price";
        }
        if (!preg_match_all("/((( |^)([1-9])([0-9]*))| 0),([0-9])([0-9])\b|( |^)([1-9])([0-9]*),-|( |^)([0-9])([0-9]*)\b/", $price)) {
            $this->messages[] = "The Price is not correct " . $price;
        } else {
            $price = str_replace(",", ".", $price);
            $price = str_replace(".-" , ".00", $price);
        }

        if (Utilities::isEmptyString($_POST['short_description'])) {
            $this->messages[] = "Enter a short description";
        }

        if (Utilities::isEmptyString($_POST['long_description'])) {
            $this->messages[] = "Enter a long description";
        }

        if ((count($this->messages) === 0)) {
            $this->business($price);
        } else {
//            $this->twigParams['product_name']= $_POST['product_name'];
//            $this->twigParams['price']= $_POST['price'];
//            $this->twigParams['short_description']= $_POST['short_description'];
//            $this->twigParams['long_description']= $_POST['long_description'];
//            $this->twigParams['selected']= Utilities::sanitizeFilter($_POST['product_category_name']);
//            if (isset($_POST['active']) === true) {
//                $this->twigParams['active']= $_POST['active'];
//            }
            $this->twigParams['messages']= $this->messages;
            $this->twigParams['room']= $this->fillRoomCategory();;
            $this->twig->display("editRoom.html.twig", $this->twigParams);
        }
    }

    /**
     * Process the user input, sent with a POST request
     *
     * Calls Product::addProduct(), to store the validated data in the table onlineshop.product.
     * On success $this->message['status'] is set and sent to the template.
     */
    protected function business($price): void
    {
        $_result = $this->fillRoomCategory();;
        $this->editRoom($_POST['short_description'], $_POST['long_description'], $price, $_POST['room_id']);
        $this->messages['status'] = "Your product has been changed successfully";
        $this->twigParams['messages']= $this->messages;
        $this->twigParams['room']= $this->fillRoomCategory();
        $this->twig->display("editRoom.html.twig", $this->twigParams);
    }

    /**
     * Returns all entries of the table onlineshop.product_category in an array.
     *
     * @return mixed Array that returns rows of onlineshop.product_category. false in case of error
     */
    public function fillRoomCategory(): array
    {
        $result = [];
        $query = <<<SQL
                 SELECT *
                 FROM room_category
SQL;
        if ($this->dbh) {
            $this->stmt = $this->dbh->prepare($query);
            $this->stmt->execute();
            $result = $this->stmt->fetchAll();
        }
        return $result;
    }

    /**
     * product_category in $_POST is checked against the table onlineshop.product_category, if it already exists.
     *
     * @return bool true, if product category exists, otherwise false.
     */
    private function isValidCategory(): bool
    {
        $query = <<<SQL
                 SELECT class
                 FROM room_category
        SQL;
        if ($this->dbh) {
            $this->stmt = $this->dbh->prepare($query);
            $this->stmt->execute();
            $result = $this->stmt->fetchAll();

            foreach ($result as $x) {
                if (strcmp(implode(" ",$x), $_POST['room_category']) == 0) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * product_name is checked for uniqueness against the table onlineshop.product.
     *
     * @return bool false, if product_name in table onlineshop.product already exist, else true.
     */
//    private function isUniqueProductName(): bool
//    {
//        $product_name = $_POST['product_name'];
//        $query = <<<SQL
//                 SELECT product_name
//                 FROM product
//        SQL;
//        if ($this->dbh) {
//            $this->stmt = $this->dbh->prepare($query);
//            $this->stmt->execute();
//            $result = $this->stmt->fetchAll();
//
//            foreach ($result as $x) {
//                if (strcmp(implode(" ",$x), $product_name) == 0) {
//                    return false;
//                }
//            }
//        }
//        return true;
//    }

    /**
     * Stores the product data in the table onlineshop.product.
     *
     * @return void Returns nothing
     */
    private function editRoom($short, $long, $price, $room_id): void
    {
        $query = /** @lang MySQL */
            <<<SQL
                 UPDATE room_category 
                 SET short_description = :short_description,
                     long_description  = :long_description,
                     price = :price
                 WHERE room_id = :room_id;
SQL;
        if ($this->dbh) {
            $this->stmt = $this->dbh->prepare($query);
            // PDO::PARAM_FLOAT/DECIMAL/DATE do not exist, PDO::PARAM_INT is only relevant for PK/FK
            // oder wenn die Datenbank keine Implizite Typkonvertierung entsprechend der Tabellendefinition vornimmt
            // You can omit bindValue, because the default type in $stmt->execute() is PDO::PARAM_STR
            // You definitely need bindValue for a LIMIT clause,  PDO::PARAM_INT is required for offset and rowcount.
            // --> executeStmt($params)
            // bindValue() is used instead of bindParam(),
            // because bindParam() is only needed for INPUT/OUTPUT parameters f.e. used in stored procedures
            // With bindParam() values can be overwritten between bind() and execute().
            // That is not, what we need in our use cases.
            $this->stmt->bindValue(':short_description' , $short, PDO::PARAM_STR);
            $this->stmt->bindValue(':long_description' , $long, PDO::PARAM_STR);
            $this->stmt->bindValue(':price' , $price, PDO::PARAM_STR);
            $this->stmt->bindValue(':room_id' , $room_id, PDO::PARAM_STR);
            $this->stmt->execute();
        }


    }
}
