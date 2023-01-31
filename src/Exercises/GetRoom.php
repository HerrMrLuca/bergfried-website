<?php

namespace Exercises;

use PDO;

class GetRoom
{
    /**
     * @var array messages is used to display error and status messages after a form was sent an validated
     */
    private array $messages = [];

    private string $contentType;
    /**
     * Product constructor.
     *
     * Initializes Twig
     * Creates a database handler for the database connection.
     */

    public function __construct()
    {
        $this->initDB();
        $this->contentType = "application/json";
    }

    private function initDB(): void
    {
        $charsetAttr = "SET NAMES utf8 COLLATE utf8_general_ci";
        // DSN for Docker
        $dsn = "mysql:host=db;port=3306;dbname=rooms";
        // DSN for Vagrant
        // $dsn = "mysql:host=localhost;port=3306;dbname=ue08_users";
        $mysqlUser = "onlineshop";
        $mysqlPwd = "geheim";
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::MYSQL_ATTR_INIT_COMMAND => $charsetAttr,
            PDO::MYSQL_ATTR_MULTI_STATEMENTS => false
        ];
        $this->dbh = new PDO($dsn, $mysqlUser, $mysqlPwd, $options);
    }

    /**
     * Returns all entries of the table onlineshop.product_category in an array.
     *
     * @return mixed Array that returns rows of onlineshop.product_category. false in case of error
     */
    public function getRoom(): void
    {
        $result = [];
        $query = <<<SQL
                 SELECT *
                 FROM room_category WHERE room_id = :room_id
SQL;
        if ($this->dbh) {
            $this->stmt = $this->dbh->prepare($query);
            $this->stmt->bindValue(':room_id' , $_POST['class'], PDO::PARAM_STR);
            $this->stmt->execute();
            $result = $this->stmt->fetchAll();
        }
        if (count($result) > 0) {

            $json_response = [
                "room_id" => $result[0]->room_id,
                "class" => $result[0]->class,
                "price" => $result[0]->price,
                "short" => $result[0]->short_description,
                "long" => $result[0]->long_description
            ];
            $this->showResponse(201, $json_response);
        } else {
            $json_response = [
                "result" => "problem",
                "message" => "fuck"
            ];
            $this->showResponse(499, $json_response);
        }

    }

public function showResponse(int $statusCode, ?array $content = null): void
{
    // If the request's Accept header contains our content type
    header("Content-Type: " . $this->contentType);
    if (str_contains($_SERVER["HTTP_ACCEPT"], $this->contentType)) {
        http_response_code($statusCode);
        if (isset($content)) {
            echo json_encode($content, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }
    } else {
        http_response_code(406);
        echo json_encode([
            "result" => "The provided content type is not supported.",
            "message" => "You provided " . $_SERVER["HTTP_ACCEPT"] . " but this server only serves " . $this->contentType . "."
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}
}