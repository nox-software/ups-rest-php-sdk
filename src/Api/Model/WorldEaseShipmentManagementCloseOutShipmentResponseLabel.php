<?php

namespace ShipStream\Ups\Api\Model;

class WorldEaseShipmentManagementCloseOutShipmentResponseLabel extends \ArrayObject
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
     * The is the output type in which label is generated
     *
     * @var string
     */
    protected $opTyp;
    /**
     * The label number assigned to this label
     *
     * @var string
     */
    protected $lblNmbr;
    /**
     * Base64 encoded label image
     *
     * @var string
     */
    protected $lblData;
    /**
     * The is the output type in which label is generated
     *
     * @return string
     */
    public function getOpTyp(): string
    {
        return $this->opTyp;
    }
    /**
     * The is the output type in which label is generated
     *
     * @param string $opTyp
     *
     * @return self
     */
    public function setOpTyp(string $opTyp): self
    {
        $this->initialized['opTyp'] = true;
        $this->opTyp = $opTyp;
        return $this;
    }
    /**
     * The label number assigned to this label
     *
     * @return string
     */
    public function getLblNmbr(): string
    {
        return $this->lblNmbr;
    }
    /**
     * The label number assigned to this label
     *
     * @param string $lblNmbr
     *
     * @return self
     */
    public function setLblNmbr(string $lblNmbr): self
    {
        $this->initialized['lblNmbr'] = true;
        $this->lblNmbr = $lblNmbr;
        return $this;
    }
    /**
     * Base64 encoded label image
     *
     * @return string
     */
    public function getLblData(): string
    {
        return $this->lblData;
    }
    /**
     * Base64 encoded label image
     *
     * @param string $lblData
     *
     * @return self
     */
    public function setLblData(string $lblData): self
    {
        $this->initialized['lblData'] = true;
        $this->lblData = $lblData;
        return $this;
    }
}