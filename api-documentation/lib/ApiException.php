<?php
/**
 * ApiException
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Apilo REST API
 *
 * Dokumentacja REST API dla Apilo # Obsługa zasobów API    Dla wszystkich zasobów niezwiązanych z procesem autoryzacji należy dołączyć następujące nagłówki:  ``` Accept: application/json Content-Type: application/json Authorization: Bearer access_token ```     Dla każdego zapytania (również autoryzacyjnych) należy określić typ mediów (nagłówek    Accept oraz Content-Type), będzie to zawsze application/json.    Zarówno dla zapytań wysyłanych na serwer jak i danych zwracanych przez serwer    stosowany jest format danych (payload) JSON. Należy odpowiednio dla zapytań enkodować    dane do tego formatu oraz dla odpowiedzi dekodować dane tego formatu.     Przesyłając dane do API:    Pola opcjonalne można wypełnić lub przypisać im wartość null w przypadku zapytań    POST/PUT lub nie przesyłać ich w przypadku filtrów GET.    Pola obowiązkowe należy zawsze wypełnić właściwą wartością. # Filtry dla list     Dla zasobów typu GET z listą wyników można stosować dodatkowe filtry manipulujące     wynikami. Parametry należy przekazać w URL zaraz za znakiem kończącym adres zasobu,     np. `.../api/orders/?limit=200`     Dla list dostępne są dwa ogólne filtry:  `int` `limit` - Limit zwracanych wyników (maksymalnie 2000) `int` `offset` - Wskaźnik pozycji (0 - sam początek, 1 - pomija jeden rekord, 256 - pomija 256     rekordów) # Format daty     Daty dla przesyłanych wartości (filtry oraz przesyłane obiekty metodą POST/PUT)     stosowany jest format daty ISO 8601 w następującym formacie:     `DateTimeIso` `YYYY-MM-DDTHH-MM-SSZ`     Domyślnie w takim formacie stosowany jest czas zulu (trzeba uwzględnić przesunięcie     względem strefy czasowej). Czas Zulu można zastąpić lokalizacją strefy czasowej, np. w     przypadku Polski jest to +0200 w przypadku czasu letniego lub +0100 w przypadku czasu     podstawowego (przekazując strefę czasową w filtrze - parametr GET - należy pamiętać o     zakodowaniu znaku plusa, w przeciwnym wypadku zostanie zinterpretowany jako spacja).  `2021-03-01T14:00:00+0100`     <SecurityDefinitions />
 *
 * The version of the OpenAPI document: 1.22.10.14
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client;

use \Exception;

/**
 * ApiException Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApiException extends Exception
{
    /**
     * The HTTP body of the server response either as Json or string.
     *
     * @var \stdClass|string|null
     */
    protected $responseBody;

    /**
     * The HTTP header of the server response.
     *
     * @var string[]|null
     */
    protected $responseHeaders;

    /**
     * The deserialized response object
     *
     * @var \stdClass|string|null
     */
    protected $responseObject;

    /**
     * Constructor
     *
     * @param string                $message         Error message
     * @param int                   $code            HTTP status code
     * @param string[]|null         $responseHeaders HTTP response header
     * @param \stdClass|string|null $responseBody    HTTP decoded body of the server response either as \stdClass or string
     */
    public function __construct($message = "", $code = 0, $responseHeaders = [], $responseBody = null)
    {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * Gets the HTTP response header
     *
     * @return string[]|null HTTP response header
     */
    public function getResponseHeaders()
    {
        return $this->responseHeaders;
    }

    /**
     * Gets the HTTP body of the server response either as Json or string
     *
     * @return \stdClass|string|null HTTP body of the server response either as \stdClass or string
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * Sets the deserialized response object (during deserialization)
     *
     * @param mixed $obj Deserialized response object
     *
     * @return void
     */
    public function setResponseObject($obj)
    {
        $this->responseObject = $obj;
    }

    /**
     * Gets the deserialized response object (during deserialization)
     *
     * @return mixed the deserialized response object
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }
}
