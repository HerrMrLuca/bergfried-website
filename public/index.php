<?php


declare(strict_types=1);

use Exercises\GetRoom;
use Fhooe\Router\Router;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFunction;
use Utilities\Utilities;
use Exercises\AddRoom;
use Exercises\Login;
use Exercises\Register;
use Exercises\EditRoom;

require "../vendor/autoload.php";


session_start();

/**
 * Turn on debugging output to get more useful error messages while developing.
 */
const DEBUG = false;
if (DEBUG) {
    echo "<br>WARNING: Debugging is enabled. Set DEBUG to false for production use in " . __FILE__;
    echo "<br>Connect via SSH and send tail -f /var/log/apache2/error.log";
    echo " to see errors not displayed in Browser<br><br>";
    error_reporting(E_ALL);
    ini_set("html_errors", "1");
    ini_set("display_errors", "1");
    ini_set("display_startup_errors", "1");
}

try {
    /**
     * Instantiated Router invocation. Create an object, define the routes and run it.
     */
// Create a new Router object.
    $router = new Router();
#    $utilties = new Utilities();

// Create a monolog instance for logging in the skeleton. Pass it to the router to receive its log messages too.
    $logger = new Logger("skeleton-logger");
    $logger->pushHandler(new StreamHandler(__DIR__ . "/../logs/router.log"));
    $router->setLogger($logger);

// Create a new twig instance for advanced templates.
    $twig = new Environment(
        new FilesystemLoader("../views"),
        [
            "cache" => "../cache",
            "auto_reload" => true,
            "debug" => true
        ]
    );
    $twig->addFunction(new TwigFunction("url_for", [Router::class, "urlFor"]));
    $twig->addFunction(new TwigFunction("get_base_path", [Router::class, "getBasePath"]));
    $twig->addExtension(new \Twig\Extension\DebugExtension());

    if (isset($_SESSION)) {
        $twig->addGlobal("_session", $_SESSION);
    }

// Set a base path if your code is not in your server's document root.
    $router->setBasePath("/bergfried/public");

// Set a 404 callback that is executed when no route matches.
    $router->set404Callback(fn() => $twig->display("404.html.twig"));

// Set specific routes for WebShop
    $router->get("/", function () use ($twig) {
        $twig->display("index.html.twig");
    });

    $router->get("/imprint", function() use ($twig) {
        $imprint = <<<IMPRINT
    <pre class="important">
    4020 Linz
    Harrachstraße 33
    Gianluca Wassermeyer
    </pre>
    IMPRINT;
        $twig->display("imprint.html.twig", ["imprint" => $imprint]);
    });

    $router->get("/addRoom", function () use ($twig) {
        $addRoom = new AddRoom($twig);
        $rooms = $addRoom->fillRoom();
        $product = new EditRoom($twig);
        $room = $product->fillRoomCategory();
        $twig->display("addRoom.html.twig", ["rooms" => $rooms, "room" => $room]);
    });

    $router->get("/addPicture", function () use ($twig) {
        $product = new EditRoom($twig);
        $room = $product->fillRoomCategory();
        $twig->display("addPicture.html.twig", ["room" => $room]);
    });

    $router->post("/addPicture", function () use ($twig) {
        $product = new \Exercises\addPicture($twig);
        $product->isValid();
    });

    $router->post("/addRoom", function () use ($twig) {
        $addRoom = new AddRoom($twig);
        $addRoom->isValid();
    });

    $router->get("/login", function () use ($twig) {
        $twig->display("login.html.twig");
    });

    $router->post("/login", function () use ($twig) {
        $user = new Login($twig);
        $user->isValid();
    });

    $router->get("/logout", function () use ($twig) {
        $_SESSION = [];
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), "", time() - 86400, "/");
        }
        session_destroy();
        Router::redirectTo("/");
    });

    $router->get("/editRoom", function () use ($twig) {
        if (!isset($_SESSION['isloggedin']) || $_SESSION['isloggedin'] !== Utilities::generateLoginHash()) {
            // Use this method call to enable login protection for this page
            $_SESSION['redirect'] = "/product";
            Router::redirectTo("/login");
        }
        $product = new EditRoom($twig);
        $room = $product->fillRoomCategory();
        $twig->display("editRoom.html.twig", ["room" => $room]);
    });

    $router->post("/editRoom", function () use ($twig) {
        $product = new EditRoom($twig);
        $product->isValid();
    });

    $router->post("/getRoom", function () use ($twig) {
        $product = new GetRoom();
        $product->getRoom();
    });

    $router->get("/index", function () use ($twig) {
        $twig->display("home.html.twig");
    });

    $router->get("/img", function () use ($twig) {
        $twig->display("img.html.twig");
    });

    $router->get("/contact", function () use ($twig) {
        $twig->display("contact.php.twig");
    });

    $router->get("/about", function () use ($twig) {
        $twig->display("about.html.twig");
    });

    $router->get("/room", function () use ($twig) {
        $addRoom = new AddRoom($twig);
        $addImage = new \Exercises\addPicture($twig);
        $rooms = $addRoom->fillRoom();
        $images = $addImage->fillImage();
        $interior = $addRoom->fillInterior();
        $twig->display("room.html.twig", ["room" => $rooms, "images" => $images, "interior" => $interior]);
    });

    $router->get("/arrival", function () use ($twig) {
        $twig->display("arrival.html.twig");
    });


    // Define all routes here.
    $router->get("/weather", function () use ($twig) {
        $twig->display("weather.html.twig");
    });

    $router->post("/weather", function () use ($twig) {
        $weatherGenerator = new \Exercises\Weather($twig);
        $imageName = $weatherGenerator->getWeatherFromCoordinates();
        $weatherGenerator->displayOutput("Hallstatt", $imageName);
    });


// Run the router to get the party started.
    $router->run();

} catch (Exception $e) {
    echo "<h1>Error Page for Debugging</h1>.";
    echo "<p><strong>Don't use that in a production environment!</strong></p>";
    echo "<p>There is an error in " . $e->getFile() . " on line " . $e->getLine() . ".</p>";
    echo "<p>Message: " . $e->getMessage() . "</p>";
    echo "<p>Code: " . $e->getCode() . "</p>";
    echo "<p>Trace: " . $e->getTraceAsString() . "</p>";
}
