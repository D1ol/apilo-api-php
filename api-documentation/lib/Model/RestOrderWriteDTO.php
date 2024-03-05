<?php
/**
 * RestOrderWriteDTO
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
 * RestOrderWriteDTO Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RestOrderWriteDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RestOrderWriteDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'platform_id' => 'int',
        'id_external' => 'string',
        'is_invoice' => 'bool',
        'customer_login' => 'bool',
        'payment_status' => 'string',
        'payment_type' => 'int',
        'original_currency' => 'string',
        'original_amount_total_without_tax' => 'string',
        'original_amount_total_with_tax' => 'string',
        'original_amount_total_paid' => 'string',
        'send_date_min' => '\DateTime',
        'send_date_max' => '\DateTime',
        'preferences' => '\OpenAPI\Client\Model\RestOrderReadDTO2Preferences',
        'order_items' => '\OpenAPI\Client\Model\RestOrderItemsDTO3[]',
        'order_payments' => '\OpenAPI\Client\Model\RestOrderPaymentsDTO[]',
        'address_customer' => '\OpenAPI\Client\Model\RestOrderAddressDTO5',
        'address_delivery' => '\OpenAPI\Client\Model\RestOrderAddressDTO6',
        'address_invoice' => '\OpenAPI\Client\Model\RestOrderAddressDTO7',
        'carrier_account' => 'int',
        'order_notes' => '\OpenAPI\Client\Model\RestOrderNoteDTO2[]',
        'ordered_at' => '\DateTime',
        'status' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'platform_id' => null,
        'id_external' => null,
        'is_invoice' => null,
        'customer_login' => null,
        'payment_status' => null,
        'payment_type' => null,
        'original_currency' => null,
        'original_amount_total_without_tax' => null,
        'original_amount_total_with_tax' => null,
        'original_amount_total_paid' => null,
        'send_date_min' => 'date-time',
        'send_date_max' => 'date-time',
        'preferences' => null,
        'order_items' => null,
        'order_payments' => null,
        'address_customer' => null,
        'address_delivery' => null,
        'address_invoice' => null,
        'carrier_account' => null,
        'order_notes' => null,
        'ordered_at' => 'date-time',
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'platform_id' => false,
        'id_external' => false,
        'is_invoice' => false,
        'customer_login' => false,
        'payment_status' => false,
        'payment_type' => false,
        'original_currency' => false,
        'original_amount_total_without_tax' => false,
        'original_amount_total_with_tax' => false,
        'original_amount_total_paid' => false,
        'send_date_min' => false,
        'send_date_max' => false,
        'preferences' => false,
        'order_items' => false,
        'order_payments' => false,
        'address_customer' => false,
        'address_delivery' => false,
        'address_invoice' => false,
        'carrier_account' => false,
        'order_notes' => false,
        'ordered_at' => false,
        'status' => false
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
        'platform_id' => 'platformId',
        'id_external' => 'idExternal',
        'is_invoice' => 'isInvoice',
        'customer_login' => 'customerLogin',
        'payment_status' => 'paymentStatus',
        'payment_type' => 'paymentType',
        'original_currency' => 'originalCurrency',
        'original_amount_total_without_tax' => 'originalAmountTotalWithoutTax',
        'original_amount_total_with_tax' => 'originalAmountTotalWithTax',
        'original_amount_total_paid' => 'originalAmountTotalPaid',
        'send_date_min' => 'sendDateMin',
        'send_date_max' => 'sendDateMax',
        'preferences' => 'preferences',
        'order_items' => 'orderItems',
        'order_payments' => 'orderPayments',
        'address_customer' => 'addressCustomer',
        'address_delivery' => 'addressDelivery',
        'address_invoice' => 'addressInvoice',
        'carrier_account' => 'carrierAccount',
        'order_notes' => 'orderNotes',
        'ordered_at' => 'orderedAt',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'platform_id' => 'setPlatformId',
        'id_external' => 'setIdExternal',
        'is_invoice' => 'setIsInvoice',
        'customer_login' => 'setCustomerLogin',
        'payment_status' => 'setPaymentStatus',
        'payment_type' => 'setPaymentType',
        'original_currency' => 'setOriginalCurrency',
        'original_amount_total_without_tax' => 'setOriginalAmountTotalWithoutTax',
        'original_amount_total_with_tax' => 'setOriginalAmountTotalWithTax',
        'original_amount_total_paid' => 'setOriginalAmountTotalPaid',
        'send_date_min' => 'setSendDateMin',
        'send_date_max' => 'setSendDateMax',
        'preferences' => 'setPreferences',
        'order_items' => 'setOrderItems',
        'order_payments' => 'setOrderPayments',
        'address_customer' => 'setAddressCustomer',
        'address_delivery' => 'setAddressDelivery',
        'address_invoice' => 'setAddressInvoice',
        'carrier_account' => 'setCarrierAccount',
        'order_notes' => 'setOrderNotes',
        'ordered_at' => 'setOrderedAt',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'platform_id' => 'getPlatformId',
        'id_external' => 'getIdExternal',
        'is_invoice' => 'getIsInvoice',
        'customer_login' => 'getCustomerLogin',
        'payment_status' => 'getPaymentStatus',
        'payment_type' => 'getPaymentType',
        'original_currency' => 'getOriginalCurrency',
        'original_amount_total_without_tax' => 'getOriginalAmountTotalWithoutTax',
        'original_amount_total_with_tax' => 'getOriginalAmountTotalWithTax',
        'original_amount_total_paid' => 'getOriginalAmountTotalPaid',
        'send_date_min' => 'getSendDateMin',
        'send_date_max' => 'getSendDateMax',
        'preferences' => 'getPreferences',
        'order_items' => 'getOrderItems',
        'order_payments' => 'getOrderPayments',
        'address_customer' => 'getAddressCustomer',
        'address_delivery' => 'getAddressDelivery',
        'address_invoice' => 'getAddressInvoice',
        'carrier_account' => 'getCarrierAccount',
        'order_notes' => 'getOrderNotes',
        'ordered_at' => 'getOrderedAt',
        'status' => 'getStatus'
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

    public const PAYMENT_STATUS__0 = '0';
    public const PAYMENT_STATUS__1 = '1';
    public const PAYMENT_STATUS__2 = '2';
    public const PAYMENT_STATUS__3 = '3';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentStatusAllowableValues()
    {
        return [
            self::PAYMENT_STATUS__0,
            self::PAYMENT_STATUS__1,
            self::PAYMENT_STATUS__2,
            self::PAYMENT_STATUS__3,
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
        $this->setIfExists('platform_id', $data ?? [], null);
        $this->setIfExists('id_external', $data ?? [], null);
        $this->setIfExists('is_invoice', $data ?? [], null);
        $this->setIfExists('customer_login', $data ?? [], null);
        $this->setIfExists('payment_status', $data ?? [], null);
        $this->setIfExists('payment_type', $data ?? [], null);
        $this->setIfExists('original_currency', $data ?? [], null);
        $this->setIfExists('original_amount_total_without_tax', $data ?? [], null);
        $this->setIfExists('original_amount_total_with_tax', $data ?? [], null);
        $this->setIfExists('original_amount_total_paid', $data ?? [], null);
        $this->setIfExists('send_date_min', $data ?? [], null);
        $this->setIfExists('send_date_max', $data ?? [], null);
        $this->setIfExists('preferences', $data ?? [], null);
        $this->setIfExists('order_items', $data ?? [], null);
        $this->setIfExists('order_payments', $data ?? [], null);
        $this->setIfExists('address_customer', $data ?? [], null);
        $this->setIfExists('address_delivery', $data ?? [], null);
        $this->setIfExists('address_invoice', $data ?? [], null);
        $this->setIfExists('carrier_account', $data ?? [], null);
        $this->setIfExists('order_notes', $data ?? [], null);
        $this->setIfExists('ordered_at', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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

        if ($this->container['platform_id'] === null) {
            $invalidProperties[] = "'platform_id' can't be null";
        }
        if (($this->container['platform_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'platform_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['id_external']) && (mb_strlen($this->container['id_external']) > 36)) {
            $invalidProperties[] = "invalid value for 'id_external', the character length must be smaller than or equal to 36.";
        }

        if ($this->container['payment_status'] === null) {
            $invalidProperties[] = "'payment_status' can't be null";
        }
        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!is_null($this->container['payment_status']) && !in_array($this->container['payment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_status', must be one of '%s'",
                $this->container['payment_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['payment_type'] === null) {
            $invalidProperties[] = "'payment_type' can't be null";
        }
        if (($this->container['payment_type'] < 1)) {
            $invalidProperties[] = "invalid value for 'payment_type', must be bigger than or equal to 1.";
        }

        if ($this->container['original_currency'] === null) {
            $invalidProperties[] = "'original_currency' can't be null";
        }
        if ((mb_strlen($this->container['original_currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'original_currency', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['original_currency']) < 3)) {
            $invalidProperties[] = "invalid value for 'original_currency', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['original_amount_total_without_tax'] === null) {
            $invalidProperties[] = "'original_amount_total_without_tax' can't be null";
        }
        if ($this->container['original_amount_total_with_tax'] === null) {
            $invalidProperties[] = "'original_amount_total_with_tax' can't be null";
        }
        if ($this->container['original_amount_total_paid'] === null) {
            $invalidProperties[] = "'original_amount_total_paid' can't be null";
        }
        if ($this->container['order_items'] === null) {
            $invalidProperties[] = "'order_items' can't be null";
        }
        if ($this->container['address_customer'] === null) {
            $invalidProperties[] = "'address_customer' can't be null";
        }
        if ($this->container['address_delivery'] === null) {
            $invalidProperties[] = "'address_delivery' can't be null";
        }
        if ($this->container['carrier_account'] === null) {
            $invalidProperties[] = "'carrier_account' can't be null";
        }
        if (($this->container['carrier_account'] < 1)) {
            $invalidProperties[] = "invalid value for 'carrier_account', must be bigger than or equal to 1.";
        }

        if ($this->container['ordered_at'] === null) {
            $invalidProperties[] = "'ordered_at' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if (($this->container['status'] < 1)) {
            $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 1.";
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
     * Gets platform_id
     *
     * @return int
     */
    public function getPlatformId()
    {
        return $this->container['platform_id'];
    }

    /**
     * Sets platform_id
     *
     * @param int $platform_id <a href='#tag/order/paths/~1rest~1api~1orders~1platform~1map~1/get'>Sale platform account ID</a>
     *
     * @return self
     */
    public function setPlatformId($platform_id)
    {
        if (is_null($platform_id)) {
            throw new \InvalidArgumentException('non-nullable platform_id cannot be null');
        }

        if (($platform_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $platform_id when calling RestOrderWriteDTO., must be bigger than or equal to 1.');
        }

        $this->container['platform_id'] = $platform_id;

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
     * @param string|null $id_external External order ID, e.g. on the sales platform
     *
     * @return self
     */
    public function setIdExternal($id_external)
    {
        if (is_null($id_external)) {
            throw new \InvalidArgumentException('non-nullable id_external cannot be null');
        }
        if ((mb_strlen($id_external) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id_external when calling RestOrderWriteDTO., must be smaller than or equal to 36.');
        }

        $this->container['id_external'] = $id_external;

        return $this;
    }

    /**
     * Gets is_invoice
     *
     * @return bool|null
     */
    public function getIsInvoice()
    {
        return $this->container['is_invoice'];
    }

    /**
     * Sets is_invoice
     *
     * @param bool|null $is_invoice Does the customer want a VAT invoice?
     *
     * @return self
     */
    public function setIsInvoice($is_invoice)
    {
        if (is_null($is_invoice)) {
            throw new \InvalidArgumentException('non-nullable is_invoice cannot be null');
        }
        $this->container['is_invoice'] = $is_invoice;

        return $this;
    }

    /**
     * Gets customer_login
     *
     * @return bool|null
     */
    public function getCustomerLogin()
    {
        return $this->container['customer_login'];
    }

    /**
     * Sets customer_login
     *
     * @param bool|null $customer_login customer_login
     *
     * @return self
     */
    public function setCustomerLogin($customer_login)
    {
        if (is_null($customer_login)) {
            throw new \InvalidArgumentException('non-nullable customer_login cannot be null');
        }
        $this->container['customer_login'] = $customer_login;

        return $this;
    }

    /**
     * Gets payment_status
     *
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->container['payment_status'];
    }

    /**
     * Sets payment_status
     *
     * @param string $payment_status Payment status (`0-no payment`, `1-partially paid`, `2-paid in full/amount in accordance with the order`, `3-overpayment`)
     *
     * @return self
     */
    public function setPaymentStatus($payment_status)
    {
        if (is_null($payment_status)) {
            throw new \InvalidArgumentException('non-nullable payment_status cannot be null');
        }
        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!in_array($payment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_status', must be one of '%s'",
                    $payment_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_status'] = $payment_status;

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

        if (($payment_type < 1)) {
            throw new \InvalidArgumentException('invalid value for $payment_type when calling RestOrderWriteDTO., must be bigger than or equal to 1.');
        }

        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets original_currency
     *
     * @return string
     */
    public function getOriginalCurrency()
    {
        return $this->container['original_currency'];
    }

    /**
     * Sets original_currency
     *
     * @param string $original_currency Order currency
     *
     * @return self
     */
    public function setOriginalCurrency($original_currency)
    {
        if (is_null($original_currency)) {
            throw new \InvalidArgumentException('non-nullable original_currency cannot be null');
        }
        if ((mb_strlen($original_currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $original_currency when calling RestOrderWriteDTO., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($original_currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $original_currency when calling RestOrderWriteDTO., must be bigger than or equal to 3.');
        }

        $this->container['original_currency'] = $original_currency;

        return $this;
    }

    /**
     * Gets original_amount_total_without_tax
     *
     * @return string
     */
    public function getOriginalAmountTotalWithoutTax()
    {
        return $this->container['original_amount_total_without_tax'];
    }

    /**
     * Sets original_amount_total_without_tax
     *
     * @param string $original_amount_total_without_tax Value of the order items without tax
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
     * Gets original_amount_total_with_tax
     *
     * @return string
     */
    public function getOriginalAmountTotalWithTax()
    {
        return $this->container['original_amount_total_with_tax'];
    }

    /**
     * Sets original_amount_total_with_tax
     *
     * @param string $original_amount_total_with_tax Value of order items including tax
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
     * Gets original_amount_total_paid
     *
     * @return string
     */
    public function getOriginalAmountTotalPaid()
    {
        return $this->container['original_amount_total_paid'];
    }

    /**
     * Sets original_amount_total_paid
     *
     * @param string $original_amount_total_paid Gross amount paid by customer in original currency
     *
     * @return self
     */
    public function setOriginalAmountTotalPaid($original_amount_total_paid)
    {
        if (is_null($original_amount_total_paid)) {
            throw new \InvalidArgumentException('non-nullable original_amount_total_paid cannot be null');
        }
        $this->container['original_amount_total_paid'] = $original_amount_total_paid;

        return $this;
    }

    /**
     * Gets send_date_min
     *
     * @return \DateTime|null
     */
    public function getSendDateMin()
    {
        return $this->container['send_date_min'];
    }

    /**
     * Sets send_date_min
     *
     * @param \DateTime|null $send_date_min Minimal shipping date
     *
     * @return self
     */
    public function setSendDateMin($send_date_min)
    {
        if (is_null($send_date_min)) {
            throw new \InvalidArgumentException('non-nullable send_date_min cannot be null');
        }
        $this->container['send_date_min'] = $send_date_min;

        return $this;
    }

    /**
     * Gets send_date_max
     *
     * @return \DateTime|null
     */
    public function getSendDateMax()
    {
        return $this->container['send_date_max'];
    }

    /**
     * Sets send_date_max
     *
     * @param \DateTime|null $send_date_max Maximum shipping date
     *
     * @return self
     */
    public function setSendDateMax($send_date_max)
    {
        if (is_null($send_date_max)) {
            throw new \InvalidArgumentException('non-nullable send_date_max cannot be null');
        }
        $this->container['send_date_max'] = $send_date_max;

        return $this;
    }

    /**
     * Gets preferences
     *
     * @return \OpenAPI\Client\Model\RestOrderReadDTO2Preferences|null
     */
    public function getPreferences()
    {
        return $this->container['preferences'];
    }

    /**
     * Sets preferences
     *
     * @param \OpenAPI\Client\Model\RestOrderReadDTO2Preferences|null $preferences preferences
     *
     * @return self
     */
    public function setPreferences($preferences)
    {
        if (is_null($preferences)) {
            throw new \InvalidArgumentException('non-nullable preferences cannot be null');
        }
        $this->container['preferences'] = $preferences;

        return $this;
    }

    /**
     * Gets order_items
     *
     * @return \OpenAPI\Client\Model\RestOrderItemsDTO3[]
     */
    public function getOrderItems()
    {
        return $this->container['order_items'];
    }

    /**
     * Sets order_items
     *
     * @param \OpenAPI\Client\Model\RestOrderItemsDTO3[] $order_items Order items list
     *
     * @return self
     */
    public function setOrderItems($order_items)
    {
        if (is_null($order_items)) {
            throw new \InvalidArgumentException('non-nullable order_items cannot be null');
        }
        $this->container['order_items'] = $order_items;

        return $this;
    }

    /**
     * Gets order_payments
     *
     * @return \OpenAPI\Client\Model\RestOrderPaymentsDTO[]|null
     */
    public function getOrderPayments()
    {
        return $this->container['order_payments'];
    }

    /**
     * Sets order_payments
     *
     * @param \OpenAPI\Client\Model\RestOrderPaymentsDTO[]|null $order_payments Order payments list
     *
     * @return self
     */
    public function setOrderPayments($order_payments)
    {
        if (is_null($order_payments)) {
            throw new \InvalidArgumentException('non-nullable order_payments cannot be null');
        }
        $this->container['order_payments'] = $order_payments;

        return $this;
    }

    /**
     * Gets address_customer
     *
     * @return \OpenAPI\Client\Model\RestOrderAddressDTO5
     */
    public function getAddressCustomer()
    {
        return $this->container['address_customer'];
    }

    /**
     * Sets address_customer
     *
     * @param \OpenAPI\Client\Model\RestOrderAddressDTO5 $address_customer address_customer
     *
     * @return self
     */
    public function setAddressCustomer($address_customer)
    {
        if (is_null($address_customer)) {
            throw new \InvalidArgumentException('non-nullable address_customer cannot be null');
        }
        $this->container['address_customer'] = $address_customer;

        return $this;
    }

    /**
     * Gets address_delivery
     *
     * @return \OpenAPI\Client\Model\RestOrderAddressDTO6
     */
    public function getAddressDelivery()
    {
        return $this->container['address_delivery'];
    }

    /**
     * Sets address_delivery
     *
     * @param \OpenAPI\Client\Model\RestOrderAddressDTO6 $address_delivery address_delivery
     *
     * @return self
     */
    public function setAddressDelivery($address_delivery)
    {
        if (is_null($address_delivery)) {
            throw new \InvalidArgumentException('non-nullable address_delivery cannot be null');
        }
        $this->container['address_delivery'] = $address_delivery;

        return $this;
    }

    /**
     * Gets address_invoice
     *
     * @return \OpenAPI\Client\Model\RestOrderAddressDTO7|null
     */
    public function getAddressInvoice()
    {
        return $this->container['address_invoice'];
    }

    /**
     * Sets address_invoice
     *
     * @param \OpenAPI\Client\Model\RestOrderAddressDTO7|null $address_invoice address_invoice
     *
     * @return self
     */
    public function setAddressInvoice($address_invoice)
    {
        if (is_null($address_invoice)) {
            throw new \InvalidArgumentException('non-nullable address_invoice cannot be null');
        }
        $this->container['address_invoice'] = $address_invoice;

        return $this;
    }

    /**
     * Gets carrier_account
     *
     * @return int
     */
    public function getCarrierAccount()
    {
        return $this->container['carrier_account'];
    }

    /**
     * Sets carrier_account
     *
     * @param int $carrier_account <a href='#tag/order/paths/~1rest~1api~1orders~1carrier-account~1map~1/get'>Carrier account ID</a>
     *
     * @return self
     */
    public function setCarrierAccount($carrier_account)
    {
        if (is_null($carrier_account)) {
            throw new \InvalidArgumentException('non-nullable carrier_account cannot be null');
        }

        if (($carrier_account < 1)) {
            throw new \InvalidArgumentException('invalid value for $carrier_account when calling RestOrderWriteDTO., must be bigger than or equal to 1.');
        }

        $this->container['carrier_account'] = $carrier_account;

        return $this;
    }

    /**
     * Gets order_notes
     *
     * @return \OpenAPI\Client\Model\RestOrderNoteDTO2[]|null
     */
    public function getOrderNotes()
    {
        return $this->container['order_notes'];
    }

    /**
     * Sets order_notes
     *
     * @param \OpenAPI\Client\Model\RestOrderNoteDTO2[]|null $order_notes Order notes and comments
     *
     * @return self
     */
    public function setOrderNotes($order_notes)
    {
        if (is_null($order_notes)) {
            throw new \InvalidArgumentException('non-nullable order_notes cannot be null');
        }
        $this->container['order_notes'] = $order_notes;

        return $this;
    }

    /**
     * Gets ordered_at
     *
     * @return \DateTime
     */
    public function getOrderedAt()
    {
        return $this->container['ordered_at'];
    }

    /**
     * Sets ordered_at
     *
     * @param \DateTime $ordered_at Date when the order was created by the customer
     *
     * @return self
     */
    public function setOrderedAt($ordered_at)
    {
        if (is_null($ordered_at)) {
            throw new \InvalidArgumentException('non-nullable ordered_at cannot be null');
        }
        $this->container['ordered_at'] = $ordered_at;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status <a href='#tag/order/paths/~1rest~1api~1orders~1status~1map~1/get'>Status ID</a>
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        if (($status < 1)) {
            throw new \InvalidArgumentException('invalid value for $status when calling RestOrderWriteDTO., must be bigger than or equal to 1.');
        }

        $this->container['status'] = $status;

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


