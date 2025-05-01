<?php

namespace ShipStream\Ups\Api\Model;

class WorldEaseShipmentManagementCloseOutShipmentRequest extends \ArrayObject
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
     * This is the unique account number associated with the Shipper. It is also known as UPS Shipper Account Number
     *
     * @var string
     */
    protected $shipperAccountNumber;
    /**
     * This is the unique account number associated with the Shipper. It is also known as UPS Shipper Account Number
     *
     * @return string
     */
    public function getShipperAccountNumber(): string
    {
        return $this->shipperAccountNumber;
    }
    /**
     * This is the unique account number associated with the Shipper. It is also known as UPS Shipper Account Number
     *
     * @param string $shipperAccountNumber
     *
     * @return self
     */
    public function setShipperAccountNumber(string $shipperAccountNumber): self
    {
        $this->initialized['shipperAccountNumber'] = true;
        $this->shipperAccountNumber = $shipperAccountNumber;
        return $this;
    }
}