<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentWorldEasePortOfEntryAddress extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Address Line 1
     *
     * @var string
     */
    protected $addressLine1;
    /**
     * Address Line 2
     *
     * @var string
     */
    protected $addressLine2;
    /**
     * City
     *
     * @var string
     */
    protected $city;
    /**
     * The code of the address's admininstrative division (state, province, distict, prefecture, etc...).
     *
     * @var string
     */
    protected $stateProvinceCode;
    /**
     * Postal code
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Country code
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Address Line 1
     *
     * @return string
     */
    public function getAddressLine1(): string
    {
        return $this->addressLine1;
    }
    /**
     * Address Line 1
     *
     * @param string $addressLine1
     *
     * @return self
     */
    public function setAddressLine1(string $addressLine1): self
    {
        $this->initialized['addressLine1'] = true;
        $this->addressLine1 = $addressLine1;
        return $this;
    }
    /**
     * Address Line 2
     *
     * @return string
     */
    public function getAddressLine2(): string
    {
        return $this->addressLine2;
    }
    /**
     * Address Line 2
     *
     * @param string $addressLine2
     *
     * @return self
     */
    public function setAddressLine2(string $addressLine2): self
    {
        $this->initialized['addressLine2'] = true;
        $this->addressLine2 = $addressLine2;
        return $this;
    }
    /**
     * City
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * City
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * The code of the address's admininstrative division (state, province, distict, prefecture, etc...).
     *
     * @return string
     */
    public function getStateProvinceCode(): string
    {
        return $this->stateProvinceCode;
    }
    /**
     * The code of the address's admininstrative division (state, province, distict, prefecture, etc...).
     *
     * @param string $stateProvinceCode
     *
     * @return self
     */
    public function setStateProvinceCode(string $stateProvinceCode): self
    {
        $this->initialized['stateProvinceCode'] = true;
        $this->stateProvinceCode = $stateProvinceCode;
        return $this;
    }
    /**
     * Postal code
     *
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    /**
     * Postal code
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * Country code
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * Country code
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
}