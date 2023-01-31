<?php
namespace Exercises;

use Utilities\Utilities;
use PDO;

/*
 * The class Register implements a registration of a user at WebShop.
 *
 * If user credentials are valid, they are stored in the table onlineshop.user.
 *
 * @author Martin Harrer <martin.harrer@fh-hagenberg.at>
 */
final class addPicture
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
     * Register Constructor.
     *
     * Initializes Twig
     * Creates a database handler for the database connection.
     */
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

    /**
     * Validates the user input
     *
     * name of country and ISOcode are validated with a regex. You can use Utilities::isString() to do so.
     *
     * Error messages are stored in the array $messages[].
     * Calls AddCountry::business() if all input fields are valid.
     *
     * @return void Returns nothing
     */
    public function isValid(): void
    {
        echo "<p>" . $_FILES['image']['size'] . "</p>";
        if ($_FILES['image']['size'] === 0) {
            $this->messages['image'] = "The Image is empty";
        }
        if ($_FILES['image']['type'] != "image/jpeg" && $_FILES['image']['type'] != "image/png" ) {
            $this->messages['image'] = "It is not an PNG or JPG. It is a " . $_FILES['image']['type'];
        }

        if ((count($this->messages) === 0)) {
            $this->business();
        } else {
            $this->twigParams['messages']= $this->messages;
            $this->twig->display("addPicture.html.twig", $this->twigParams);
        }
    }

    /**
     * Process the user input, sent with a POST request
     *
     * Writes the data with addUser() into table onlineshop.user.
     * On success the user is redirected to index.html.twig.
     *
     * @return void Returns nothing
     */
    protected function business(): void
    {

        $percent = 0.5;
        $filename = $_FILES["image"]["name"];

        $filename = substr_replace($filename,"",strripos($filename, "."), 5);

        echo "<p>" . $filename . "</p>";

        if (!move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . "/../../views/images/" . $filename . "3x.jpg")) {
            $this->messages['image'] = "Upload did not work";
        }
        list($width, $height) = getimagesize(__DIR__ . "/../../views/images/" . $filename  . "3x.jpg");
        if ($width >= 1500 && $height >= 1000) {
            $new_width = round($width * $percent);
            $new_height = round($height * $percent);

            // Resample
            $image_p = imagecreatetruecolor($new_width, $new_height);
            $image = imagecreatefromjpeg(__DIR__ . "/../../views/images/" . $filename  . "3x.jpg");
            imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

            // Output
            if (!imagejpeg($image_p, __DIR__ . "/../../views/images/" . $filename  . "2x.jpg", 100)) {
                $this->messages['image'] = "Upload did not work";
                echo "<p>Upload did not work >1500p </p>";
            }

            $new_width = round($new_width * $percent);
            $new_height = round($new_height * $percent);

            // Resample
            $image_p = imagecreatetruecolor($new_width, $new_height);
            $image = imagecreatefromjpeg(__DIR__ . "/../../views/images/" . $filename  . "3x.jpg");
            imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

            // Output
            if (!imagejpeg($image_p, __DIR__ . "/../../views/images/" . $filename  . "1x.jpg", 100)) {
                $this->messages['image'] = "Upload did not work";
            }
        } else {

            $new_width = $width;
            $new_height = $height;

            // Resample
            $image_p = imagecreatetruecolor($new_width, $new_height);
            $image = imagecreatefromjpeg(__DIR__ . "/../../views/images/" . $filename  . "3x.jpg");
            imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

            if (!imagejpeg($image_p, __DIR__ . "/../../views/images/" . $filename  . "2x.jpg", 100)) {
                $this->messages['image'] = "Upload did not work";
                echo "<p>Upload did not work <1499p </p>";
            }
            $new_width = round($width * $percent);
            $new_height = round($height * $percent);

            // Resample
            $image_p = imagecreatetruecolor($new_width, $new_height);
            $image = imagecreatefromjpeg(__DIR__ . "/../../views/images/" . $filename  . "3x.jpg");
            imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

            // Output
            if (!imagejpeg($image_p, __DIR__ . "/../../views/images/" . $filename  . "1x.jpg", 100)) {
                $this->messages['image'] = "Upload did not work";
            }
        }

        $this->addPicture();
    }

    public function fillImage(): array
    {
        $result = [];
        $query = <<<SQL
                 SELECT image_id, room_id, image
                 FROM images
        SQL;
        if ($this->dbh) {
            $this->stmt = $this->dbh->prepare($query);
            $this->stmt->execute();
            $result = $this->stmt->fetchAll();
        }
        return $result;
    }

    private function addPicture(): void
    {
        $query = /** @lang MySQL */
            <<<SQL
                 INSERT INTO images 
                 SET room_id = :room_id,
                     image = :image
        SQL;
        if ($this->dbh) {
            $this->stmt = $this->dbh->prepare($query);
            $params = [":room_id" => $_POST['room_id'], ":image" => $_FILES["image"]["name"]];
            $this->stmt->execute($params);
        }
    }
}
