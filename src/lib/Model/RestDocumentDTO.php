<?php
/**
 * RestDocumentDTO
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
 * RestDocumentDTO Class Doc Comment
 *
 * @category Class
 * @package  Apilo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RestDocumentDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RestDocumentDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'document_number' => 'string',
        'original_amount_total_with_tax' => 'string',
        'original_amount_total_without_tax' => 'string',
        'original_currency_exchange_value' => 'string',
        'original_currency' => 'string',
        'currency' => 'string',
        'created_at' => '\DateTime',
        'invoiced_at' => '\DateTime',
        'sold_at' => '\DateTime',
        'type' => 'string',
        'document_receiver' => '\Apilo\Model\RestDocumentPersonalInfoDTO',
        'document_issuer' => '\Apilo\Model\RestDocumentPersonalInfoDTO',
        'document_items' => '\Apilo\Model\RestDocumentItemDTO[]',
        'payment_type' => 'int'
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
        'document_number' => null,
        'original_amount_total_with_tax' => null,
        'original_amount_total_without_tax' => null,
        'original_currency_exchange_value' => null,
        'original_currency' => null,
        'currency' => null,
        'created_at' => 'date-time',
        'invoiced_at' => 'date-time',
        'sold_at' => 'date-time',
        'type' => null,
        'document_receiver' => null,
        'document_issuer' => null,
        'document_items' => null,
        'payment_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'id' => false,
		'document_number' => false,
		'original_amount_total_with_tax' => false,
		'original_amount_total_without_tax' => false,
		'original_currency_exchange_value' => false,
		'original_currency' => false,
		'currency' => false,
		'created_at' => false,
		'invoiced_at' => false,
		'sold_at' => false,
		'type' => false,
		'document_receiver' => false,
		'document_issuer' => false,
		'document_items' => false,
		'payment_type' => false
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
        'document_number' => 'documentNumber',
        'original_amount_total_with_tax' => 'originalAmountTotalWithTax',
        'original_amount_total_without_tax' => 'originalAmountTotalWithoutTax',
        'original_currency_exchange_value' => 'originalCurrencyExchangeValue',
        'original_currency' => 'originalCurrency',
        'currency' => 'currency',
        'created_at' => 'createdAt',
        'invoiced_at' => 'invoicedAt',
        'sold_at' => 'soldAt',
        'type' => 'type',
        'document_receiver' => 'documentReceiver',
        'document_issuer' => 'documentIssuer',
        'document_items' => 'documentItems',
        'payment_type' => 'paymentType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'document_number' => 'setDocumentNumber',
        'original_amount_total_with_tax' => 'setOriginalAmountTotalWithTax',
        'original_amount_total_without_tax' => 'setOriginalAmountTotalWithoutTax',
        'original_currency_exchange_value' => 'setOriginalCurrencyExchangeValue',
        'original_currency' => 'setOriginalCurrency',
        'currency' => 'setCurrency',
        'created_at' => 'setCreatedAt',
        'invoiced_at' => 'setInvoicedAt',
        'sold_at' => 'setSoldAt',
        'type' => 'setType',
        'document_receiver' => 'setDocumentReceiver',
        'document_issuer' => 'setDocumentIssuer',
        'document_items' => 'setDocumentItems',
        'payment_type' => 'setPaymentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'document_number' => 'getDocumentNumber',
        'original_amount_total_with_tax' => 'getOriginalAmountTotalWithTax',
        'original_amount_total_without_tax' => 'getOriginalAmountTotalWithoutTax',
        'original_currency_exchange_value' => 'getOriginalCurrencyExchangeValue',
        'original_currency' => 'getOriginalCurrency',
        'currency' => 'getCurrency',
        'created_at' => 'getCreatedAt',
        'invoiced_at' => 'getInvoicedAt',
        'sold_at' => 'getSoldAt',
        'type' => 'getType',
        'document_receiver' => 'getDocumentReceiver',
        'document_issuer' => 'getDocumentIssuer',
        'document_items' => 'getDocumentItems',
        'payment_type' => 'getPaymentType'
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

    public const TYPE__1 = '1';
    public const TYPE__10 = '10';
    public const TYPE__5 = '5';
    public const TYPE__2 = '2';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE__1,
            self::TYPE__10,
            self::TYPE__5,
            self::TYPE__2,
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
        $this->setIfExists('document_number', $data ?? [], null);
        $this->setIfExists('original_amount_total_with_tax', $data ?? [], null);
        $this->setIfExists('original_amount_total_without_tax', $data ?? [], null);
        $this->setIfExists('original_currency_exchange_value', $data ?? [], null);
        $this->setIfExists('original_currency', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('invoiced_at', $data ?? [], null);
        $this->setIfExists('sold_at', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('document_receiver', $data ?? [], null);
        $this->setIfExists('document_issuer', $data ?? [], null);
        $this->setIfExists('document_items', $data ?? [], null);
        $this->setIfExists('payment_type', $data ?? [], null);
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

        if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['original_currency']) && (mb_strlen($this->container['original_currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'original_currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['original_currency']) && (mb_strlen($this->container['original_currency']) < 3)) {
            $invalidProperties[] = "invalid value for 'original_currency', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) < 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['invoiced_at'] === null) {
            $invalidProperties[] = "'invoiced_at' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['payment_type'] === null) {
            $invalidProperties[] = "'payment_type' can't be null";
        }
        if (($this->container['payment_type'] < 0)) {
            $invalidProperties[] = "invalid value for 'payment_type', must be bigger than or equal to 0.";
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
     * @param int|null $id Internal ID of the fiscal document
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        if (($id < 0)) {
            throw new \InvalidArgumentException('invalid value for $id when calling RestDocumentDTO., must be bigger than or equal to 0.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets document_number
     *
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     *
     * @param string|null $document_number Fiscal document number
     *
     * @return self
     */
    public function setDocumentNumber($document_number)
    {
        if (is_null($document_number)) {
            throw new \InvalidArgumentException('non-nullable document_number cannot be null');
        }
        $this->container['document_number'] = $document_number;

        return $this;
    }

    /**
     * Gets original_amount_total_with_tax
     *
     * @return string|null
     */
    public function getOriginalAmountTotalWithTax()
    {
        return $this->container['original_amount_total_with_tax'];
    }

    /**
     * Sets original_amount_total_with_tax
     *
     * @param string|null $original_amount_total_with_tax Gross amount on the document
     *
     * @return self
     */
    public function setOriginalAmountTotalWithTax($original_amount_total_with_tax)
    {
        if (is_null($original_amount_total_with_tax)) {
            throw new \InvalidArgumentException('non-nullable original_amount_total_with_tax cannot be null');
        }
        $this->container['original_amount_total_with_tax'] = $original_amount_total_with_tax;

        return $this;
    }

    /**
     * Gets original_amount_total_without_tax
     *
     * @return string|null
     */
    public function getOriginalAmountTotalWithoutTax()
    {
        return $this->container['original_amount_total_without_tax'];
    }

    /**
     * Sets original_amount_total_without_tax
     *
     * @param string|null $original_amount_total_without_tax Nett amount on the document
     *
     * @return self
     */
    public function setOriginalAmountTotalWithoutTax($original_amount_total_without_tax)
    {
        if (is_null($original_amount_total_without_tax)) {
            throw new \InvalidArgumentException('non-nullable original_amount_total_without_tax cannot be null');
        }
        $this->container['original_amount_total_without_tax'] = $original_amount_total_without_tax;

        return $this;
    }

    /**
     * Gets original_currency_exchange_value
     *
     * @return string|null
     */
    public function getOriginalCurrencyExchangeValue()
    {
        return $this->container['original_currency_exchange_value'];
    }

    /**
     * Sets original_currency_exchange_value
     *
     * @param string|null $original_currency_exchange_value Exchange rate
     *
     * @return self
     */
    public function setOriginalCurrencyExchangeValue($original_currency_exchange_value)
    {
        if (is_null($original_currency_exchange_value)) {
            throw new \InvalidArgumentException('non-nullable original_currency_exchange_value cannot be null');
        }
        $this->container['original_currency_exchange_value'] = $original_currency_exchange_value;

        return $this;
    }

    /**
     * Gets original_currency
     *
     * @return string|null
     */
    public function getOriginalCurrency()
    {
        return $this->container['original_currency'];
    }

    /**
     * Sets original_currency
     *
     * @param string|null $original_currency Currency in which the order was made
     *
     * @return self
     */
    public function setOriginalCurrency($original_currency)
    {
        if (is_null($original_currency)) {
            throw new \InvalidArgumentException('non-nullable original_currency cannot be null');
        }
        if ((mb_strlen($original_currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $original_currency when calling RestDocumentDTO., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($original_currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $original_currency when calling RestDocumentDTO., must be bigger than or equal to 3.');
        }

        $this->container['original_currency'] = $original_currency;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Currency on the document
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        if ((mb_strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling RestDocumentDTO., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling RestDocumentDTO., must be bigger than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Date the document was created in Apilo
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets invoiced_at
     *
     * @return \DateTime
     */
    public function getInvoicedAt()
    {
        return $this->container['invoiced_at'];
    }

    /**
     * Sets invoiced_at
     *
     * @param \DateTime $invoiced_at Date of issuance of the document
     *
     * @return self
     */
    public function setInvoicedAt($invoiced_at)
    {
        if (is_null($invoiced_at)) {
            throw new \InvalidArgumentException('non-nullable invoiced_at cannot be null');
        }
        $this->container['invoiced_at'] = $invoiced_at;

        return $this;
    }

    /**
     * Gets sold_at
     *
     * @return \DateTime|null
     */
    public function getSoldAt()
    {
        return $this->container['sold_at'];
    }

    /**
     * Sets sold_at
     *
     * @param \DateTime|null $sold_at Date of sale on the document
     *
     * @return self
     */
    public function setSoldAt($sold_at)
    {
        if (is_null($sold_at)) {
            throw new \InvalidArgumentException('non-nullable sold_at cannot be null');
        }
        $this->container['sold_at'] = $sold_at;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Document type (1 - Invoice, 2 - Margin invoice, 5 - Receipt, 10 - Proforma invoice)
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
     * Gets document_receiver
     *
     * @return \Apilo\Model\RestDocumentPersonalInfoDTO|null
     */
    public function getDocumentReceiver()
    {
        return $this->container['document_receiver'];
    }

    /**
     * Sets document_receiver
     *
     * @param \Apilo\Model\RestDocumentPersonalInfoDTO|null $document_receiver document_receiver
     *
     * @return self
     */
    public function setDocumentReceiver($document_receiver)
    {
        if (is_null($document_receiver)) {
            throw new \InvalidArgumentException('non-nullable document_receiver cannot be null');
        }
        $this->container['document_receiver'] = $document_receiver;

        return $this;
    }

    /**
     * Gets document_issuer
     *
     * @return \Apilo\Model\RestDocumentPersonalInfoDTO|null
     */
    public function getDocumentIssuer()
    {
        return $this->container['document_issuer'];
    }

    /**
     * Sets document_issuer
     *
     * @param \Apilo\Model\RestDocumentPersonalInfoDTO|null $document_issuer document_issuer
     *
     * @return self
     */
    public function setDocumentIssuer($document_issuer)
    {
        if (is_null($document_issuer)) {
            throw new \InvalidArgumentException('non-nullable document_issuer cannot be null');
        }
        $this->container['document_issuer'] = $document_issuer;

        return $this;
    }

    /**
     * Gets document_items
     *
     * @return \Apilo\Model\RestDocumentItemDTO[]|null
     */
    public function getDocumentItems()
    {
        return $this->container['document_items'];
    }

    /**
     * Sets document_items
     *
     * @param \Apilo\Model\RestDocumentItemDTO[]|null $document_items Docment items
     *
     * @return self
     */
    public function setDocumentItems($document_items)
    {
        if (is_null($document_items)) {
            throw new \InvalidArgumentException('non-nullable document_items cannot be null');
        }
        $this->container['document_items'] = $document_items;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return int
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param int $payment_type <a href='#tag/order/paths/~1rest~1api~1orders~1payment~1map~1/get'>Payment method ID</a>
     *
     * @return self
     */
    public function setPaymentType($payment_type)
    {
        if (is_null($payment_type)) {
            throw new \InvalidArgumentException('non-nullable payment_type cannot be null');
        }

        if (($payment_type < 0)) {
            throw new \InvalidArgumentException('invalid value for $payment_type when calling RestDocumentDTO., must be bigger than or equal to 0.');
        }

        $this->container['payment_type'] = $payment_type;

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


