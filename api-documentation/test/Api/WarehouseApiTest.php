<?php
/**
 * WarehouseApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Client\Test\Api;

use \OpenAPI\Client\Configuration;
use \OpenAPI\Client\ApiException;
use \OpenAPI\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * WarehouseApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WarehouseApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for restApiWarehouseAttributePost
     *
     * Attribute create.
     *
     */
    public function testRestApiWarehouseAttributePost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for restApiWarehouseCategoryGet
     *
     * Categories list.
     *
     */
    public function testRestApiWarehouseCategoryGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for restApiWarehouseCategoryPost
     *
     * Category create.
     *
     */
    public function testRestApiWarehouseCategoryPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for restApiWarehousePriceCalculatedGet
     *
     * Prices list.
     *
     */
    public function testRestApiWarehousePriceCalculatedGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for restApiWarehousePriceCalculatedPost
     *
     * Price create and update.
     *
     */
    public function testRestApiWarehousePriceCalculatedPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for restApiWarehousePriceCalculatedProductPriceDelete
     *
     * Delete price.
     *
     */
    public function testRestApiWarehousePriceCalculatedProductPriceDelete()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for restApiWarehousePriceGet
     *
     * Price lists.
     *
     */
    public function testRestApiWarehousePriceGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for restApiWarehouseProductGet
     *
     * Products list.
     *
     */
    public function testRestApiWarehouseProductGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for restApiWarehouseProductIdDelete
     *
     * Delete Product.
     *
     */
    public function testRestApiWarehouseProductIdDelete()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for restApiWarehouseProductIdGet
     *
     * Get Product detail.
     *
     */
    public function testRestApiWarehouseProductIdGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for restApiWarehouseProductPatch
     *
     * Products PATCH update.
     *
     */
    public function testRestApiWarehouseProductPatch()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for restApiWarehouseProductPost
     *
     * Products create.
     *
     */
    public function testRestApiWarehouseProductPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for restApiWarehouseProductPut
     *
     * Products data update.
     *
     */
    public function testRestApiWarehouseProductPut()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
