<?php
/**
 * RestOrderAddressDTO5
 *
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * RestOrderAddressDTO5 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RestOrderAddressDTO5 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RestOrderAddressDTO5';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'street_name' => 'string',
        'street_number' => 'string',
        'city' => 'string',
        'zip_code' => 'string',
        'country' => 'string',
        'parcel_id_external' => 'string',
        'parcel_name' => 'string',
        'company_tax_number' => 'string',
        'company_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'phone' => null,
        'email' => null,
        'street_name' => null,
        'street_number' => null,
        'city' => null,
        'zip_code' => null,
        'country' => null,
        'parcel_id_external' => null,
        'parcel_name' => null,
        'company_tax_number' => null,
        'company_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'phone' => false,
        'email' => false,
        'street_name' => false,
        'street_number' => false,
        'city' => false,
        'zip_code' => false,
        'country' => false,
        'parcel_id_external' => false,
        'parcel_name' => false,
        'company_tax_number' => false,
        'company_name' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
        'name' => 'name',
        'phone' => 'phone',
        'email' => 'email',
        'street_name' => 'streetName',
        'street_number' => 'streetNumber',
        'city' => 'city',
        'zip_code' => 'zipCode',
        'country' => 'country',
        'parcel_id_external' => 'parcelIdExternal',
        'parcel_name' => 'parcelName',
        'company_tax_number' => 'companyTaxNumber',
        'company_name' => 'companyName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'phone' => 'setPhone',
        'email' => 'setEmail',
        'street_name' => 'setStreetName',
        'street_number' => 'setStreetNumber',
        'city' => 'setCity',
        'zip_code' => 'setZipCode',
        'country' => 'setCountry',
        'parcel_id_external' => 'setParcelIdExternal',
        'parcel_name' => 'setParcelName',
        'company_tax_number' => 'setCompanyTaxNumber',
        'company_name' => 'setCompanyName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'phone' => 'getPhone',
        'email' => 'getEmail',
        'street_name' => 'getStreetName',
        'street_number' => 'getStreetNumber',
        'city' => 'getCity',
        'zip_code' => 'getZipCode',
        'country' => 'getCountry',
        'parcel_id_external' => 'getParcelIdExternal',
        'parcel_name' => 'getParcelName',
        'company_tax_number' => 'getCompanyTaxNumber',
        'company_name' => 'getCompanyName'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('street_name', $data ?? [], null);
        $this->setIfExists('street_number', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('zip_code', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('parcel_id_external', $data ?? [], null);
        $this->setIfExists('parcel_name', $data ?? [], null);
        $this->setIfExists('company_tax_number', $data ?? [], null);
        $this->setIfExists('company_name', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 128)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 64)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 0)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 128)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 0)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['street_name']) && (mb_strlen($this->container['street_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'street_name', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['street_name']) && (mb_strlen($this->container['street_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'street_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['street_number']) && (mb_strlen($this->container['street_number']) > 32)) {
            $invalidProperties[] = "invalid value for 'street_number', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['street_number']) && (mb_strlen($this->container['street_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'street_number', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 128)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) < 0)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['zip_code']) && (mb_strlen($this->container['zip_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'zip_code', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['zip_code']) && (mb_strlen($this->container['zip_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'zip_code', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) < 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['parcel_id_external']) && (mb_strlen($this->container['parcel_id_external']) > 64)) {
            $invalidProperties[] = "invalid value for 'parcel_id_external', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['parcel_id_external']) && (mb_strlen($this->container['parcel_id_external']) < 0)) {
            $invalidProperties[] = "invalid value for 'parcel_id_external', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['parcel_name']) && (mb_strlen($this->container['parcel_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'parcel_name', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['parcel_name']) && (mb_strlen($this->container['parcel_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'parcel_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['company_tax_number']) && (mb_strlen($this->container['company_tax_number']) > 64)) {
            $invalidProperties[] = "invalid value for 'company_tax_number', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['company_tax_number']) && (mb_strlen($this->container['company_tax_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'company_tax_number', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['company_name']) && (mb_strlen($this->container['company_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'company_name', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['company_name']) && (mb_strlen($this->container['company_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'company_name', the character length must be bigger than or equal to 0.";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Client name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 128)) {
            throw new \InvalidArgumentException('invalid length for $name when calling RestOrderAddressDTO5., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling RestOrderAddressDTO5., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Client phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        if ((mb_strlen($phone) > 64)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling RestOrderAddressDTO5., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($phone) < 0)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling RestOrderAddressDTO5., must be bigger than or equal to 0.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Client E-mail
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        if ((mb_strlen($email) > 128)) {
            throw new \InvalidArgumentException('invalid length for $email when calling RestOrderAddressDTO5., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($email) < 0)) {
            throw new \InvalidArgumentException('invalid length for $email when calling RestOrderAddressDTO5., must be bigger than or equal to 0.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets street_name
     *
     * @return string|null
     */
    public function getStreetName()
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name
     *
     * @param string|null $street_name Client street name
     *
     * @return self
     */
    public function setStreetName($street_name)
    {
        if (is_null($street_name)) {
            throw new \InvalidArgumentException('non-nullable street_name cannot be null');
        }
        if ((mb_strlen($street_name) > 128)) {
            throw new \InvalidArgumentException('invalid length for $street_name when calling RestOrderAddressDTO5., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($street_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $street_name when calling RestOrderAddressDTO5., must be bigger than or equal to 0.');
        }

        $this->container['street_name'] = $street_name;

        return $this;
    }

    /**
     * Gets street_number
     *
     * @return string|null
     */
    public function getStreetNumber()
    {
        return $this->container['street_number'];
    }

    /**
     * Sets street_number
     *
     * @param string|null $street_number Client street number
     *
     * @return self
     */
    public function setStreetNumber($street_number)
    {
        if (is_null($street_number)) {
            throw new \InvalidArgumentException('non-nullable street_number cannot be null');
        }
        if ((mb_strlen($street_number) > 32)) {
            throw new \InvalidArgumentException('invalid length for $street_number when calling RestOrderAddressDTO5., must be smaller than or equal to 32.');
        }
        if ((mb_strlen($street_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $street_number when calling RestOrderAddressDTO5., must be bigger than or equal to 0.');
        }

        $this->container['street_number'] = $street_number;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city Client city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        if ((mb_strlen($city) > 128)) {
            throw new \InvalidArgumentException('invalid length for $city when calling RestOrderAddressDTO5., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($city) < 0)) {
            throw new \InvalidArgumentException('invalid length for $city when calling RestOrderAddressDTO5., must be bigger than or equal to 0.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string|null $zip_code Client zip code
     *
     * @return self
     */
    public function setZipCode($zip_code)
    {
        if (is_null($zip_code)) {
            throw new \InvalidArgumentException('non-nullable zip_code cannot be null');
        }
        if ((mb_strlen($zip_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $zip_code when calling RestOrderAddressDTO5., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($zip_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $zip_code when calling RestOrderAddressDTO5., must be bigger than or equal to 0.');
        }

        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Client country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        if ((mb_strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling RestOrderAddressDTO5., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($country) < 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling RestOrderAddressDTO5., must be bigger than or equal to 2.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets parcel_id_external
     *
     * @return string|null
     */
    public function getParcelIdExternal()
    {
        return $this->container['parcel_id_external'];
    }

    /**
     * Sets parcel_id_external
     *
     * @param string|null $parcel_id_external Pickup point ID
     *
     * @return self
     */
    public function setParcelIdExternal($parcel_id_external)
    {
        if (is_null($parcel_id_external)) {
            throw new \InvalidArgumentException('non-nullable parcel_id_external cannot be null');
        }
        if ((mb_strlen($parcel_id_external) > 64)) {
            throw new \InvalidArgumentException('invalid length for $parcel_id_external when calling RestOrderAddressDTO5., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($parcel_id_external) < 0)) {
            throw new \InvalidArgumentException('invalid length for $parcel_id_external when calling RestOrderAddressDTO5., must be bigger than or equal to 0.');
        }

        $this->container['parcel_id_external'] = $parcel_id_external;

        return $this;
    }

    /**
     * Gets parcel_name
     *
     * @return string|null
     */
    public function getParcelName()
    {
        return $this->container['parcel_name'];
    }

    /**
     * Sets parcel_name
     *
     * @param string|null $parcel_name Pickup point name
     *
     * @return self
     */
    public function setParcelName($parcel_name)
    {
        if (is_null($parcel_name)) {
            throw new \InvalidArgumentException('non-nullable parcel_name cannot be null');
        }
        if ((mb_strlen($parcel_name) > 128)) {
            throw new \InvalidArgumentException('invalid length for $parcel_name when calling RestOrderAddressDTO5., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($parcel_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $parcel_name when calling RestOrderAddressDTO5., must be bigger than or equal to 0.');
        }

        $this->container['parcel_name'] = $parcel_name;

        return $this;
    }

    /**
     * Gets company_tax_number
     *
     * @return string|null
     */
    public function getCompanyTaxNumber()
    {
        return $this->container['company_tax_number'];
    }

    /**
     * Sets company_tax_number
     *
     * @param string|null $company_tax_number Company tax ID
     *
     * @return self
     */
    public function setCompanyTaxNumber($company_tax_number)
    {
        if (is_null($company_tax_number)) {
            throw new \InvalidArgumentException('non-nullable company_tax_number cannot be null');
        }
        if ((mb_strlen($company_tax_number) > 64)) {
            throw new \InvalidArgumentException('invalid length for $company_tax_number when calling RestOrderAddressDTO5., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($company_tax_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $company_tax_number when calling RestOrderAddressDTO5., must be bigger than or equal to 0.');
        }

        $this->container['company_tax_number'] = $company_tax_number;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name Company name
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        if (is_null($company_name)) {
            throw new \InvalidArgumentException('non-nullable company_name cannot be null');
        }
        if ((mb_strlen($company_name) > 128)) {
            throw new \InvalidArgumentException('invalid length for $company_name when calling RestOrderAddressDTO5., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($company_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $company_name when calling RestOrderAddressDTO5., must be bigger than or equal to 0.');
        }

        $this->container['company_name'] = $company_name;

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


