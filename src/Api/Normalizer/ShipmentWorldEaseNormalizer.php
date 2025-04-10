<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or (Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION >= 4))) {
    class ShipmentWorldEaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \ShipStream\Ups\Api\Model\ShipmentWorldEase::class;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentWorldEase::class;
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new \ShipStream\Ups\Api\Model\ShipmentWorldEase();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('DestinationCountryCode', $data)) {
                $object->setDestinationCountryCode($data['DestinationCountryCode']);
                unset($data['DestinationCountryCode']);
            }
            if (\array_key_exists('DestinationPostalCode', $data)) {
                $object->setDestinationPostalCode($data['DestinationPostalCode']);
                unset($data['DestinationPostalCode']);
            }
            if (\array_key_exists('GCCN', $data)) {
                $object->setGccn($data['GCCN']);
                unset($data['GCCN']);
            }
            if (\array_key_exists('MasterEUConsolidationIndicator', $data)) {
                $object->setMasterEUConsolidationIndicator($data['MasterEUConsolidationIndicator']);
                unset($data['MasterEUConsolidationIndicator']);
            }
            if (\array_key_exists('MasterHasDocBox', $data)) {
                $object->setMasterHasDocBox($data['MasterHasDocBox']);
                unset($data['MasterHasDocBox']);
            }
            if (\array_key_exists('MasterShipmentChgType', $data)) {
                $object->setMasterShipmentChgType($data['MasterShipmentChgType']);
                unset($data['MasterShipmentChgType']);
            }
            if (\array_key_exists('VendorCollectIDNumberExemptIndicator', $data)) {
                $object->setVendorCollectIDNumberExemptIndicator($data['VendorCollectIDNumberExemptIndicator']);
                unset($data['VendorCollectIDNumberExemptIndicator']);
            }
            if (\array_key_exists('PortOfEntry', $data)) {
                $object->setPortOfEntry($this->denormalizer->denormalize($data['PortOfEntry'], \ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntry::class, 'json', $context));
                unset($data['PortOfEntry']);
            }

            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];

            if ($object->isInitialized('destinationCountryCode') && null !== $object->getDestinationCountryCode()) {
                $data['DestinationCountryCode'] = $object->getDestinationCountryCode();
            }
            if ($object->isInitialized('destinationPostalCode') && null !== $object->getDestinationPostalCode()) {
                $data['DestinationPostalCode'] = $object->getDestinationPostalCode();
            }
            if ($object->isInitialized('gccn') && null !== $object->getGccn()) {
                $data['GCCN'] = $object->getGccn();
            }
            if ($object->isInitialized('masterEUConsolidationIndicator') && null !== $object->getMasterEUConsolidationIndicator()) {
                $data['MasterEUConsolidationIndicator'] = $object->getMasterEUConsolidationIndicator();
            }
            if ($object->isInitialized('masterHasDocBox') && null !== $object->getMasterHasDocBox()) {
                $data['MasterHasDocBox'] = $object->getMasterHasDocBox();
            }
            if ($object->isInitialized('masterShipmentChgType') && null !== $object->getMasterShipmentChgType()) {
                $data['MasterShipmentChgType'] = $object->getMasterShipmentChgType();
            }
            if ($object->isInitialized('vendorCollectIDNumberExemptIndicator') && null !== $object->getVendorCollectIDNumberExemptIndicator()) {
                $data['VendorCollectIDNumberExemptIndicator'] = $object->getVendorCollectIDNumberExemptIndicator();
            }
            if ($object->isInitialized('portOfEntry') && null !== $object->getPortOfEntry()) {
                $data['PortOfEntry'] = $this->normalizer->normalize($object->getPortOfEntry(), 'json', $context);
            }

            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\ShipStream\Ups\Api\Model\ShipmentWorldEase::class => false];
        }
    }
} else {
    class ShipmentWorldEaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \ShipStream\Ups\Api\Model\ShipmentWorldEase::class;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentWorldEase::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new \ShipStream\Ups\Api\Model\ShipmentWorldEase();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('DestinationCountryCode', $data)) {
                $object->setDestinationCountryCode($data['DestinationCountryCode']);
                unset($data['DestinationCountryCode']);
            }
            if (\array_key_exists('DestinationPostalCode', $data)) {
                $object->setDestinationPostalCode($data['DestinationPostalCode']);
                unset($data['DestinationPostalCode']);
            }
            if (\array_key_exists('GCCN', $data)) {
                $object->setGccn($data['GCCN']);
                unset($data['GCCN']);
            }
            if (\array_key_exists('MasterEUConsolidationIndicator', $data)) {
                $object->setMasterEUConsolidationIndicator($data['MasterEUConsolidationIndicator']);
                unset($data['MasterEUConsolidationIndicator']);
            }
            if (\array_key_exists('MasterHasDocBox', $data)) {
                $object->setMasterHasDocBox($data['MasterHasDocBox']);
                unset($data['MasterHasDocBox']);
            }
            if (\array_key_exists('MasterShipmentChgType', $data)) {
                $object->setMasterShipmentChgType($data['MasterShipmentChgType']);
                unset($data['MasterShipmentChgType']);
            }
            if (\array_key_exists('VendorCollectIDNumberExemptIndicator', $data)) {
                $object->setVendorCollectIDNumberExemptIndicator($data['VendorCollectIDNumberExemptIndicator']);
                unset($data['VendorCollectIDNumberExemptIndicator']);
            }
            if (\array_key_exists('PortOfEntry', $data)) {
                $object->setPortOfEntry($this->denormalizer->denormalize($data['PortOfEntry'], \ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntry::class, 'json', $context));
                unset($data['PortOfEntry']);
            }

            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];

            if ($object->isInitialized('destinationCountryCode') && null !== $object->getDestinationCountryCode()) {
                $data['DestinationCountryCode'] = $object->getDestinationCountryCode();
            }
            if ($object->isInitialized('destinationPostalCode') && null !== $object->getDestinationPostalCode()) {
                $data['DestinationPostalCode'] = $object->getDestinationPostalCode();
            }
            if ($object->isInitialized('gccn') && null !== $object->getGccn()) {
                $data['GCCN'] = $object->getGccn();
            }
            if ($object->isInitialized('masterEUConsolidationIndicator') && null !== $object->getMasterEUConsolidationIndicator()) {
                $data['MasterEUConsolidationIndicator'] = $object->getMasterEUConsolidationIndicator();
            }
            if ($object->isInitialized('masterHasDocBox') && null !== $object->getMasterHasDocBox()) {
                $data['MasterHasDocBox'] = $object->getMasterHasDocBox();
            }
            if ($object->isInitialized('masterShipmentChgType') && null !== $object->getMasterShipmentChgType()) {
                $data['MasterShipmentChgType'] = $object->getMasterShipmentChgType();
            }
            if ($object->isInitialized('vendorCollectIDNumberExemptIndicator') && null !== $object->getVendorCollectIDNumberExemptIndicator()) {
                $data['VendorCollectIDNumberExemptIndicator'] = $object->getVendorCollectIDNumberExemptIndicator();
            }
            if ($object->isInitialized('portOfEntry') && null !== $object->getPortOfEntry()) {
                $data['PortOfEntry'] = $this->normalizer->normalize($object->getPortOfEntry(), 'json', $context);
            }

            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\ShipStream\Ups\Api\Model\ShipmentWorldEase::class => false];
        }
    }
}
