<?php
/**
 * RestOrderItemsDTO3
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Apilo
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
 * OpenAPI Generator version: 7.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Apilo\Model;

use \ArrayAccess;
use \Apilo\ObjectSerializer;

/**
 * RestOrderItemsDTO3 Class Doc Comment
 *
 * @category Class
 * @package  Apilo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RestOrderItemsDTO3 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RestOrderItemsDTO3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'id_external' => 'string',
        'ean' => 'string',
        'sku' => 'string',
        'original_name' => 'string',
        'original_code' => 'string',
        'original_price_with_tax' => 'string',
        'original_price_without_tax' => 'string',
        'quantity' => 'int',
        'tax' => 'string',
        'unit' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'id_external' => null,
        'ean' => null,
        'sku' => null,
        'original_name' => null,
        'original_code' => null,
        'original_price_with_tax' => null,
        'original_price_without_tax' => null,
        'quantity' => null,
        'tax' => null,
        'unit' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'id' => false,
		'id_external' => false,
		'ean' => false,
		'sku' => false,
		'original_name' => false,
		'original_code' => false,
		'original_price_with_tax' => false,
		'original_price_without_tax' => false,
		'quantity' => false,
		'tax' => false,
		'unit' => false,
		'type' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'id_external' => 'idExternal',
        'ean' => 'ean',
        'sku' => 'sku',
        'original_name' => 'originalName',
        'original_code' => 'originalCode',
        'original_price_with_tax' => 'originalPriceWithTax',
        'original_price_without_tax' => 'originalPriceWithoutTax',
        'quantity' => 'quantity',
        'tax' => 'tax',
        'unit' => 'unit',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'id_external' => 'setIdExternal',
        'ean' => 'setEan',
        'sku' => 'setSku',
        'original_name' => 'setOriginalName',
        'original_code' => 'setOriginalCode',
        'original_price_with_tax' => 'setOriginalPriceWithTax',
        'original_price_without_tax' => 'setOriginalPriceWithoutTax',
        'quantity' => 'setQuantity',
        'tax' => 'setTax',
        'unit' => 'setUnit',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'id_external' => 'getIdExternal',
        'ean' => 'getEan',
        'sku' => 'getSku',
        'original_name' => 'getOriginalName',
        'original_code' => 'getOriginalCode',
        'original_price_with_tax' => 'getOriginalPriceWithTax',
        'original_price_without_tax' => 'getOriginalPriceWithoutTax',
        'quantity' => 'getQuantity',
        'tax' => 'getTax',
        'unit' => 'getUnit',
        'type' => 'getType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const TAX__27_00 = '27.00';
    public const TAX__25_00 = '25.00';
    public const TAX__24_00 = '24.00';
    public const TAX__23_00 = '23.00';
    public const TAX__22_00 = '22.00';
    public const TAX__21_00 = '21.00';
    public const TAX__20_00 = '20.00';
    public const TAX__19_00 = '19.00';
    public const TAX__18_00 = '18.00';
    public const TAX__17_00 = '17.00';
    public const TAX__16_00 = '16.00';
    public const TAX__8_00 = '8.00';
    public const TAX__7_00 = '7.00';
    public const TAX__5_00 = '5.00';
    public const TAX__0_00 = '0.00';
    public const TAX__1_00 = '-1.00';
    public const TAX_EMPTY = '';
    public const TYPE__1 = '1';
    public const TYPE__2 = '2';
    public const TYPE__3 = '3';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaxAllowableValues()
    {
        return [
            self::TAX__27_00,
            self::TAX__25_00,
            self::TAX__24_00,
            self::TAX__23_00,
            self::TAX__22_00,
            self::TAX__21_00,
            self::TAX__20_00,
            self::TAX__19_00,
            self::TAX__18_00,
            self::TAX__17_00,
            self::TAX__16_00,
            self::TAX__8_00,
            self::TAX__7_00,
            self::TAX__5_00,
            self::TAX__0_00,
            self::TAX__1_00,
            self::TAX_EMPTY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE__1,
            self::TYPE__2,
            self::TYPE__3,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('id_external', $data ?? [], null);
        $this->setIfExists('ean', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('original_name', $data ?? [], null);
        $this->setIfExists('original_code', $data ?? [], null);
        $this->setIfExists('original_price_with_tax', $data ?? [], null);
        $this->setIfExists('original_price_without_tax', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('tax', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['id']) && ($this->container['id'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['id_external']) && (mb_strlen($this->container['id_external']) > 36)) {
            $invalidProperties[] = "invalid value for 'id_external', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['id_external']) && (mb_strlen($this->container['id_external']) < 0)) {
            $invalidProperties[] = "invalid value for 'id_external', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['ean']) && (mb_strlen($this->container['ean']) > 13)) {
            $invalidProperties[] = "invalid value for 'ean', the character length must be smaller than or equal to 13.";
        }

        if (!is_null($this->container['ean']) && (mb_strlen($this->container['ean']) < 0)) {
            $invalidProperties[] = "invalid value for 'ean', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['ean']) && !preg_match("/^[0-9]{8,13}$/", $this->container['ean'])) {
            $invalidProperties[] = "invalid value for 'ean', must be conform to the pattern /^[0-9]{8,13}$/.";
        }

        if (!is_null($this->container['sku']) && (mb_strlen($this->container['sku']) > 96)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be smaller than or equal to 96.";
        }

        if (!is_null($this->container['sku']) && (mb_strlen($this->container['sku']) < 1)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['original_name'] === null) {
            $invalidProperties[] = "'original_name' can't be null";
        }
        if ((mb_strlen($this->container['original_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'original_name', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['original_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'original_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['original_code']) && (mb_strlen($this->container['original_code']) > 96)) {
            $invalidProperties[] = "invalid value for 'original_code', the character length must be smaller than or equal to 96.";
        }

        if (!is_null($this->container['original_code']) && (mb_strlen($this->container['original_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'original_code', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['original_price_with_tax'] === null) {
            $invalidProperties[] = "'original_price_with_tax' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if (($this->container['quantity'] > 65535)) {
            $invalidProperties[] = "invalid value for 'quantity', must be smaller than or equal to 65535.";
        }

        if (($this->container['quantity'] < 1)) {
            $invalidProperties[] = "invalid value for 'quantity', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getTaxAllowableValues();
        if (!is_null($this->container['tax']) && !in_array($this->container['tax'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tax', must be one of '%s'",
                $this->container['tax'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Product ID in create/update process, Unique Order Item ID in reading process
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        if (($id > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $id when calling RestOrderItemsDTO3., must be smaller than or equal to 4294967295.');
        }
        if (($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling RestOrderItemsDTO3., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets id_external
     *
     * @return string|null
     */
    public function getIdExternal()
    {
        return $this->container['id_external'];
    }

    /**
     * Sets id_external
     *
     * @param string|null $id_external External product item ID
     *
     * @return self
     */
    public function setIdExternal($id_external)
    {
        if (is_null($id_external)) {
            throw new \InvalidArgumentException('non-nullable id_external cannot be null');
        }
        if ((mb_strlen($id_external) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id_external when calling RestOrderItemsDTO3., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($id_external) < 0)) {
            throw new \InvalidArgumentException('invalid length for $id_external when calling RestOrderItemsDTO3., must be bigger than or equal to 0.');
        }

        $this->container['id_external'] = $id_external;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string|null
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string|null $ean EAN
     *
     * @return self
     */
    public function setEan($ean)
    {
        if (is_null($ean)) {
            throw new \InvalidArgumentException('non-nullable ean cannot be null');
        }
        if ((mb_strlen($ean) > 13)) {
            throw new \InvalidArgumentException('invalid length for $ean when calling RestOrderItemsDTO3., must be smaller than or equal to 13.');
        }
        if ((mb_strlen($ean) < 0)) {
            throw new \InvalidArgumentException('invalid length for $ean when calling RestOrderItemsDTO3., must be bigger than or equal to 0.');
        }
        if ((!preg_match("/^[0-9]{8,13}$/", ObjectSerializer::toString($ean)))) {
            throw new \InvalidArgumentException("invalid value for \$ean when calling RestOrderItemsDTO3., must conform to the pattern /^[0-9]{8,13}$/.");
        }

        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku SKU
     *
     * @return self
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }
        if ((mb_strlen($sku) > 96)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling RestOrderItemsDTO3., must be smaller than or equal to 96.');
        }
        if ((mb_strlen($sku) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling RestOrderItemsDTO3., must be bigger than or equal to 1.');
        }

        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets original_name
     *
     * @return string
     */
    public function getOriginalName()
    {
        return $this->container['original_name'];
    }

    /**
     * Sets original_name
     *
     * @param string $original_name Product name
     *
     * @return self
     */
    public function setOriginalName($original_name)
    {
        if (is_null($original_name)) {
            throw new \InvalidArgumentException('non-nullable original_name cannot be null');
        }
        if ((mb_strlen($original_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $original_name when calling RestOrderItemsDTO3., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($original_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $original_name when calling RestOrderItemsDTO3., must be bigger than or equal to 0.');
        }

        $this->container['original_name'] = $original_name;

        return $this;
    }

    /**
     * Gets original_code
     *
     * @return string|null
     */
    public function getOriginalCode()
    {
        return $this->container['original_code'];
    }

    /**
     * Sets original_code
     *
     * @param string|null $original_code Product unique code
     *
     * @return self
     */
    public function setOriginalCode($original_code)
    {
        if (is_null($original_code)) {
            throw new \InvalidArgumentException('non-nullable original_code cannot be null');
        }
        if ((mb_strlen($original_code) > 96)) {
            throw new \InvalidArgumentException('invalid length for $original_code when calling RestOrderItemsDTO3., must be smaller than or equal to 96.');
        }
        if ((mb_strlen($original_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $original_code when calling RestOrderItemsDTO3., must be bigger than or equal to 0.');
        }

        $this->container['original_code'] = $original_code;

        return $this;
    }

    /**
     * Gets original_price_with_tax
     *
     * @return string
     */
    public function getOriginalPriceWithTax()
    {
        return $this->container['original_price_with_tax'];
    }

    /**
     * Sets original_price_with_tax
     *
     * @param string $original_price_with_tax Gross product price
     *
     * @return self
     */
    public function setOriginalPriceWithTax($original_price_with_tax)
    {
        if (is_null($original_price_with_tax)) {
            throw new \InvalidArgumentException('non-nullable original_price_with_tax cannot be null');
        }
        $this->container['original_price_with_tax'] = $original_price_with_tax;

        return $this;
    }

    /**
     * Gets original_price_without_tax
     *
     * @return string|null
     */
    public function getOriginalPriceWithoutTax()
    {
        return $this->container['original_price_without_tax'];
    }

    /**
     * Sets original_price_without_tax
     *
     * @param string|null $original_price_without_tax Net product price
     *
     * @return self
     */
    public function setOriginalPriceWithoutTax($original_price_without_tax)
    {
        if (is_null($original_price_without_tax)) {
            throw new \InvalidArgumentException('non-nullable original_price_without_tax cannot be null');
        }
        $this->container['original_price_without_tax'] = $original_price_without_tax;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Quantity of products
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }

        if (($quantity > 65535)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling RestOrderItemsDTO3., must be smaller than or equal to 65535.');
        }
        if (($quantity < 1)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling RestOrderItemsDTO3., must be bigger than or equal to 1.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return string|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param string|null $tax The amount of VAT (VAT value | `''` if TAX is not specified and will be calculated | `'-1'` when exempt from VAT)
     *
     * @return self
     */
    public function setTax($tax)
    {
        if (is_null($tax)) {
            throw new \InvalidArgumentException('non-nullable tax cannot be null');
        }
        $allowedValues = $this->getTaxAllowableValues();
        if (!in_array($tax, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'tax', must be one of '%s'",
                    $tax,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string|null $unit Product unit
     *
     * @return self
     */
    public function setUnit($unit)
    {
        if (is_null($unit)) {
            throw new \InvalidArgumentException('non-nullable unit cannot be null');
        }
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Order item type (`1-Product`, `2-Shipment`, `3-service`)
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


