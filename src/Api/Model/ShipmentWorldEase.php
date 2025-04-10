<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentWorldEase extends \ArrayObject
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
     * The final destination country code.
     *
     * @var string
     */
    protected $destinationCountryCode;
    /**
     * The final destination postal code.
     *
     * @var string
     */
    protected $destinationPostalCode;
    /**
     * The Global Consolidation Clearance Number(GCCN) generated for the master shipment. This is required for child shipment.
     *
     * @var string
     */
    protected $gccn;
    /**
     * 1 indicates a Master Consolidation request for the European Union.
     *
     * @var string
     */
    protected $masterEUConsolidationIndicator;
    /**
     * This field is a flag to indicate if the request is a master shipment. This is required for Master shipment only. If MasterHasDocBox is "0" then request is considered a master shipment.
     *
     * @var string
     */
    protected $masterHasDocBox;
    /**
     * Code that indicates how shipping charges will be paid.
     *
     * Code    Name    Description:
     * CAF    Cost And Freight    Shipper pays to point of import, conignee pays balance.
     * COL    Freight Collect    Consignee (with valid UPS account) pays all shipping charges
     * DDP    Delivered Duty Paid    Shipper pays shipping and duty, consignee pays the Value Added Tax (VAT)
     * FOB    Free On Board    Shipper pays to point to export, consignee pays balance
     * PRE    Prepaid    Shipper pays all shipping charges
     * SDT    Free Domicile    Child Shipper pays for shipping, duities and taxes
     *
     * @var string
     */
    protected $masterShipmentChgType;
    /**
     * This field indicates if VendorCollectIDTypeCode and VendorCollectIDNumber should be exempt from validation. "0" indicates VendorCollectIDTypeCode and VendorCollectIDNumber fields are required.
     *
     * @var string
     */
    protected $vendorCollectIDNumberExemptIndicator;
    /**
     * Container for port of entry details
     *
     * @var ShipmentWorldEasePortOfEntry
     */
    protected $portOfEntry;
    /**
     * The final destination country code.
     *
     * @return string
     */
    public function getDestinationCountryCode(): string
    {
        return $this->destinationCountryCode;
    }
    /**
     * The final destination country code.
     *
     * @param string $destinationCountryCode
     *
     * @return self
     */
    public function setDestinationCountryCode(string $destinationCountryCode): self
    {
        $this->initialized['destinationCountryCode'] = true;
        $this->destinationCountryCode = $destinationCountryCode;
        return $this;
    }
    /**
     * The final destination country code.
     *
     * @return string
     */
    public function getDestinationPostalCode(): string
    {
        return $this->destinationPostalCode;
    }
    /**
     * The final destination postal code.
     *
     * @param string $destinationPostalCode
     *
     * @return self
     */
    public function setDestinationPostalCode(string $destinationPostalCode): self
    {
        $this->initialized['destinationPostalCode'] = true;
        $this->destinationPostalCode = $destinationPostalCode;
        return $this;
    }
    /**
     * The Global Consolidation Clearance Number(GCCN) generated for the master shipment. This is required for child shipment.
     *
     * @return string
     */
    public function getGccn(): string
    {
        return $this->gccn;
    }
    /**
     * The Global Consolidation Clearance Number(GCCN) generated for the master shipment. This is required for child shipment.
     *
     * @param string $gccn
     *
     * @return self
     */
    public function setGccn(string $gccn): self
    {
        $this->initialized['gccn'] = true;
        $this->gccn = $gccn;
        return $this;
    }
    /**
     * 1 indicates a Master Consolidation request for the European Union.
     *
     * @return string
     */
    public function getMasterEUConsolidationIndicator(): string
    {
        return $this->masterEUConsolidationIndicator;
    }
    /**
     * 1 indicates a Master Consolidation request for the European Union.
     *
     * @param string $masterEUConsolidationIndicator
     *
     * @return self
     */
    public function setMasterEUConsolidationIndicator(string $masterEUConsolidationIndicator): self
    {
        $this->initialized['masterEUConsolidationIndicator'] = true;
        $this->masterEUConsolidationIndicator = $masterEUConsolidationIndicator;
        return $this;
    }
    /**
     * This field is a flag to indicate if the request is a master shipment. This is required for Master shipment only. If MasterHasDocBox is "0" then request is considered a master shipment.
     *
     * @return string
     */
    public function getMasterHasDocBox(): string
    {
        return $this->masterHasDocBox;
    }
    /**
     * This field is a flag to indicate if the request is a master shipment. This is required for Master shipment only. If MasterHasDocBox is "0" then request is considered a master shipment.
     *
     * @param string $masterHasDocBox
     *
     * @return self
     */
    public function setMasterHasDocBox(string $masterHasDocBox): self
    {
        $this->initialized['masterHasDocBox'] = true;
        $this->masterHasDocBox = $masterHasDocBox;
        return $this;
    }
    /**
     * Code that indicates how shipping charges will be paid.
     *
     * Code    Name    Description:
     * CAF    Cost And Freight    Shipper pays to point of import, conignee pays balance.
     * COL    Freight Collect    Consignee (with valid UPS account) pays all shipping charges
     * DDP    Delivered Duty Paid    Shipper pays shipping and duty, consignee pays the Value Added Tax (VAT)
     * FOB    Free On Board    Shipper pays to point to export, consignee pays balance
     * PRE    Prepaid    Shipper pays all shipping charges
     * SDT    Free Domicile    Child Shipper pays for shipping, duities and taxes
     *
     * @return string
     */
    public function getMasterShipmentChgType(): string
    {
        return $this->masterShipmentChgType;
    }
    /**
     * Code that indicates how shipping charges will be paid.
     *
     * Code    Name    Description:
     * CAF    Cost And Freight    Shipper pays to point of import, conignee pays balance.
     * COL    Freight Collect    Consignee (with valid UPS account) pays all shipping charges
     * DDP    Delivered Duty Paid    Shipper pays shipping and duty, consignee pays the Value Added Tax (VAT)
     * FOB    Free On Board    Shipper pays to point to export, consignee pays balance
     * PRE    Prepaid    Shipper pays all shipping charges
     * SDT    Free Domicile    Child Shipper pays for shipping, duities and taxes
     *
     * @param string $masterShipmentChgType
     *
     * @return self
     */
    public function setMasterShipmentChgType(string $masterShipmentChgType): self
    {
        $this->initialized['masterShipmentChgType'] = true;
        $this->masterShipmentChgType = $masterShipmentChgType;
        return $this;
    }
    /**
     * This field indicates if VendorCollectIDTypeCode and VendorCollectIDNumber should be exempt from validation. "0" indicates VendorCollectIDTypeCode and VendorCollectIDNumber fields are required.
     *
     * @return string
     */
    public function getVendorCollectIDNumberExemptIndicator(): string
    {
        return $this->vendorCollectIDNumberExemptIndicator;
    }
    /**
     * This field indicates if VendorCollectIDTypeCode and VendorCollectIDNumber should be exempt from validation. "0" indicates VendorCollectIDTypeCode and VendorCollectIDNumber fields are required.
     *
     * @param string $vendorCollectIDNumberExemptIndicator
     *
     * @return self
     */
    public function setVendorCollectIDNumberExemptIndicator(string $vendorCollectIDNumberExemptIndicator): self
    {
        $this->initialized['vendorCollectIDNumberExemptIndicator'] = true;
        $this->vendorCollectIDNumberExemptIndicator = $vendorCollectIDNumberExemptIndicator;
        return $this;
    }
    /**
     * Container for port of entry details
     *
     * @return ShipmentWorldEasePortOfEntry
     */
    public function getPortOfEntry(): ShipmentWorldEasePortOfEntry
    {
        return $this->portOfEntry;
    }
    /**
     * Container for port of entry details
     *
     * @param ShipmentWorldEasePortOfEntry $portOfEntry
     *
     * @return self
     */
    public function setPortOfEntry(ShipmentWorldEasePortOfEntry $portOfEntry): self
    {
        $this->initialized['portOfEntry'] = true;
        $this->portOfEntry = $portOfEntry;
        return $this;
    }
}