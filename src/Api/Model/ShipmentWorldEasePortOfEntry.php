<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentWorldEasePortOfEntry extends \ArrayObject
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
     * Port of entry name
     *
     * @var string
     */
    protected $name;
    /**
     * Port code
     *
     * @var string
     */
    protected $clearancePortCode;
    /**
     * Port of entry consignee
     *
     * @var string
     */
    protected $consignee;
    /**
     * Address of the POE. For Master/Child Shipment
     *
     * @var ShipmentWorldEasePortOfEntryAddress
     */
    protected $address;
    /**
     * Port of entry name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Port of entry name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Port code
     *
     * @return string
     */
    public function getClearancePortCode(): string
    {
        return $this->clearancePortCode;
    }
    /**
     * Port code
     *
     * @param string $clearancePortCode
     *
     * @return self
     */
    public function setClearancePortCode(string $clearancePortCode): self
    {
        $this->initialized['clearancePortCode'] = true;
        $this->clearancePortCode = $clearancePortCode;
        return $this;
    }
    /**
     * Port of entry consignee
     *
     * @return string
     */
    public function getConsignee(): string
    {
        return $this->consignee;
    }
    /**
     * Port of entry consignee
     *
     * @param string $consignee
     *
     * @return self
     */
    public function setConsignee(string $consignee): self
    {
        $this->initialized['consignee'] = true;
        $this->consignee = $consignee;
        return $this;
    }
    /**
     * Address of the POE. For Master/Child Shipment
     *
     * @return ShipmentWorldEasePortOfEntryAddress
     */
    public function getAddress(): ShipmentWorldEasePortOfEntryAddress
    {
        return $this->address;
    }
    /**
     * Address of the POE. For Master/Child Shipment
     *
     * @param ShipmentWorldEasePortOfEntryAddress $address
     *
     * @return self
     */
    public function setAddress(ShipmentWorldEasePortOfEntryAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}