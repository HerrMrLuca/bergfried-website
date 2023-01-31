<?php

namespace Exercises;

use Geocoder\Exception\Exception;
use Geocoder\Provider\Nominatim\Nominatim;
use Geocoder\Query\GeocodeQuery;
use Geocoder\StatefulGeocoder;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Http\Adapter\Guzzle7\Client as ClientAdapter;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * This class geocodes a given address into latitude and longitude and queries a weather API. The API serves a PNG file
 * which is saved and displayed in an HTML page.
 */
final class Weather
{
    /**
     * @var Environment The Twig environment.
     */
    private Environment $twig;

    /**
     * Creates a new WeatherGenerator object.
     * @param Environment $twig The Twig object for displaying templates.
     */
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * Retrieves weather forecast data from 7Timer with the given latitude and longitude.
     * @param array $coordinates The coordinates for which the forecast should be retrieved.
     * @return string Returns the image of the weather forecast file for display.
     * @throws GuzzleException Throws an exception if an error happened while fetching the data.
     */
    public function getWeatherFromCoordinates(): string
    {
        $latitude = 47.5568807;
        $longitude = 13.6467516;
        $imageName = "current_weather.png";

        $client = new Client();
        $weatherUri = "http://www.7timer.info/bin/civil.php?lon=$longitude&lat=$latitude&lang=en&unit=metric&output=internal&tzshift=0";
        $response = $client->get($weatherUri);

        file_put_contents($imageName, $response->getBody());

        return $imageName;
    }

    /**
     * Displays output. If a filename of the forecast is supplied, the weather is shown. Otherwise, an error message is
     * returned.
     * @param string $location The location of the possible weather forecast.
     * @param string|null $imageName The name of the weather forecast image file.
     * @return void Returns nothing since output is created.
     * @throws LoaderError Throws an exception if something happened while loading the template.
     * @throws RuntimeError Throws an exception if something happened while rendering the template.
     * @throws SyntaxError Throws an exception if a syntax error happened in the template.
     */
    public function displayOutput(string $location, ?string $imageName = null): void
    {
        if ($imageName) {
            $this->twig->display("weather.html.twig", [
                "weather" => [
                    "location" => "Hallstatt",
                    "image" => $imageName
                ]
            ]);
        } else {
            $this->twig->display("weather.html.twig", [
                "noresult" => [
                    "location" => $location
                ]
            ]);
        }
    }
}
