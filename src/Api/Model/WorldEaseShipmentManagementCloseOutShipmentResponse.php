<?php

namespace ShipStream\Ups\Api\Model;

class WorldEaseShipmentManagementCloseOutShipmentResponse extends \ArrayObject
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
     * Client generated id which is treated as the Transaction ID
     *
     * @var string
     */
    protected $transId;
    /**
     * This will contain master shipment label
     *
     * @var WorldEaseShipmentManagementCloseOutShipmentResponseLabel
     */
    protected $label;
    /**
     * Client generated id which is treated as the Transaction ID
     *
     * @return string
     */
    public function getTransID(): string
    {
        return $this->transID;
    }
    /**
     * Client generated id which is treated as the Transaction ID
     *
     * @param string $transID
     *
     * @return self
     */
    public function setTransID(string $transID): self
    {
        $this->initialized['transID'] = true;
        $this->transID = $transID;
        return $this;
    }
    /**
     * This will contain master shipment label
     *
     * @return WorldEaseShipmentManagementCloseOutShipmentResponseLabel
     */
    public function getLabel(): WorldEaseShipmentManagementCloseOutShipmentResponseLabel
    {
        return $this->label;
    }
    /**
     * This will contain master shipment label
     *
     * @param WorldEaseShipmentManagementCloseOutShipmentResponseLabel $label
     *
     * @return self
     */
    public function setLabel(WorldEaseShipmentManagementCloseOutShipmentResponseLabel $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
}