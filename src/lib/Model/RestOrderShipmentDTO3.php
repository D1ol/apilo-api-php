<?php
/**
 * RestOrderShipmentDTO3
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
 * RestOrderShipmentDTO3 Class Doc Comment
 *
 * @category Class
 * @package  Apilo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RestOrderShipmentDTO3 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RestOrderShipmentDTO3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id_external' => 'string',
        'tracking' => 'string',
        'carrier_provider_id' => 'int',
        'post_date' => '\DateTime',
        'media' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id_external' => null,
        'tracking' => null,
        'carrier_provider_id' => null,
        'post_date' => 'date-time',
        'media' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'id_external' => false,
		'tracking' => false,
		'carrier_provider_id' => false,
		'post_date' => false,
		'media' => false
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
        'id_external' => 'idExternal',
        'tracking' => 'tracking',
        'carrier_provider_id' => 'carrierProviderId',
        'post_date' => 'postDate',
        'media' => 'media'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_external' => 'setIdExternal',
        'tracking' => 'setTracking',
        'carrier_provider_id' => 'setCarrierProviderId',
        'post_date' => 'setPostDate',
        'media' => 'setMedia'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_external' => 'getIdExternal',
        'tracking' => 'getTracking',
        'carrier_provider_id' => 'getCarrierProviderId',
        'post_date' => 'getPostDate',
        'media' => 'getMedia'
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
        $this->setIfExists('id_external', $data ?? [], null);
        $this->setIfExists('tracking', $data ?? [], null);
        $this->setIfExists('carrier_provider_id', $data ?? [], null);
        $this->setIfExists('post_date', $data ?? [], null);
        $this->setIfExists('media', $data ?? [], null);
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

        if ($this->container['id_external'] === null) {
            $invalidProperties[] = "'id_external' can't be null";
        }
        if ((mb_strlen($this->container['id_external']) > 36)) {
            $invalidProperties[] = "invalid value for 'id_external', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['id_external']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_external', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['tracking'] === null) {
            $invalidProperties[] = "'tracking' can't be null";
        }
        if ((mb_strlen($this->container['tracking']) > 64)) {
            $invalidProperties[] = "invalid value for 'tracking', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['tracking']) < 1)) {
            $invalidProperties[] = "invalid value for 'tracking', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['carrier_provider_id'] === null) {
            $invalidProperties[] = "'carrier_provider_id' can't be null";
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
     * Gets id_external
     *
     * @return string
     */
    public function getIdExternal()
    {
        return $this->container['id_external'];
    }

    /**
     * Sets id_external
     *
     * @param string $id_external External unique ID of the shipment
     *
     * @return self
     */
    public function setIdExternal($id_external)
    {
        if (is_null($id_external)) {
            throw new \InvalidArgumentException('non-nullable id_external cannot be null');
        }
        if ((mb_strlen($id_external) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id_external when calling RestOrderShipmentDTO3., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($id_external) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_external when calling RestOrderShipmentDTO3., must be bigger than or equal to 1.');
        }

        $this->container['id_external'] = $id_external;

        return $this;
    }

    /**
     * Gets tracking
     *
     * @return string
     */
    public function getTracking()
    {
        return $this->container['tracking'];
    }

    /**
     * Sets tracking
     *
     * @param string $tracking Shipment tracking number
     *
     * @return self
     */
    public function setTracking($tracking)
    {
        if (is_null($tracking)) {
            throw new \InvalidArgumentException('non-nullable tracking cannot be null');
        }
        if ((mb_strlen($tracking) > 64)) {
            throw new \InvalidArgumentException('invalid length for $tracking when calling RestOrderShipmentDTO3., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($tracking) < 1)) {
            throw new \InvalidArgumentException('invalid length for $tracking when calling RestOrderShipmentDTO3., must be bigger than or equal to 1.');
        }

        $this->container['tracking'] = $tracking;

        return $this;
    }

    /**
     * Gets carrier_provider_id
     *
     * @return int
     */
    public function getCarrierProviderId()
    {
        return $this->container['carrier_provider_id'];
    }

    /**
     * Sets carrier_provider_id
     *
     * @param int $carrier_provider_id ID of <a href='#tag/order/paths/~1rest~1api~1orders~1carrier~1map~1/get'>Carrier ID</a>
     *
     * @return self
     */
    public function setCarrierProviderId($carrier_provider_id)
    {
        if (is_null($carrier_provider_id)) {
            throw new \InvalidArgumentException('non-nullable carrier_provider_id cannot be null');
        }
        $this->container['carrier_provider_id'] = $carrier_provider_id;

        return $this;
    }

    /**
     * Gets post_date
     *
     * @return \DateTime|null
     */
    public function getPostDate()
    {
        return $this->container['post_date'];
    }

    /**
     * Sets post_date
     *
     * @param \DateTime|null $post_date Date of shipment
     *
     * @return self
     */
    public function setPostDate($post_date)
    {
        if (is_null($post_date)) {
            throw new \InvalidArgumentException('non-nullable post_date cannot be null');
        }
        $this->container['post_date'] = $post_date;

        return $this;
    }

    /**
     * Gets media
     *
     * @return string|null
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param string|null $media Null or media UUID - <a href='#tag/media/paths/~1rest~1api~1media~1/post'>media attachment endpoint</a>
     *
     * @return self
     */
    public function setMedia($media)
    {
        if (is_null($media)) {
            throw new \InvalidArgumentException('non-nullable media cannot be null');
        }
        $this->container['media'] = $media;

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


