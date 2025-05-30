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

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION >= 4)) {
    class ShipmentWorldEasePortOfEntryAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntryAddress::class;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntryAddress::class;
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new \ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntryAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('AddressLine', $data)) {
                $object->setAddressLine($data['AddressLine']);
                unset($data['AddressLine']);
            }
            if (\array_key_exists('AddressLine2', $data)) {
                $object->setAddressLine2($data['AddressLine2']);
                unset($data['AddressLine2']);
            }
            if (\array_key_exists('City', $data)) {
                $object->setCity($data['City']);
                unset($data['City']);
            }
            if (\array_key_exists('StateProvinceCode', $data)) {
                $object->setStateProvinceCode($data['StateProvinceCode']);
                unset($data['StateProvinceCode']);
            }
            if (\array_key_exists('PostalCode', $data)) {
                $object->setPostalCode($data['PostalCode']);
                unset($data['PostalCode']);
            }
            if (\array_key_exists('CountryCode', $data)) {
                $object->setCountryCode($data['CountryCode']);
                unset($data['CountryCode']);
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

            if ($object->isInitialized('addressLine') && null !== $object->getAddressLine()) {
                $data['AddressLine'] = $object->getAddressLine();
            }
            if ($object->isInitialized('addressLine2') && null !== $object->getAddressLine2()) {
                $data['AddressLine2'] = $object->getAddressLine2();
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['City'] = $object->getCity();
            }
            if ($object->isInitialized('stateProvinceCode') && null !== $object->getStateProvinceCode()) {
                $data['StateProvinceCode'] = $object->getStateProvinceCode();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['PostalCode'] = $object->getPostalCode();
            }
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['CountryCode'] = $object->getCountryCode();
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
            return [\ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntryAddress::class => false];
        }
    }
} else {
    class ShipmentWorldEasePortOfEntryAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntryAddress::class;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntryAddress::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new \ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntryAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('AddressLine', $data)) {
                $object->setAddressLine($data['AddressLine']);
                unset($data['AddressLine']);
            }
            if (\array_key_exists('AddressLine2', $data)) {
                $object->setAddressLine2($data['AddressLine2']);
                unset($data['AddressLine2']);
            }
            if (\array_key_exists('City', $data)) {
                $object->setCity($data['City']);
                unset($data['City']);
            }
            if (\array_key_exists('StateProvinceCode', $data)) {
                $object->setStateProvinceCode($data['StateProvinceCode']);
                unset($data['StateProvinceCode']);
            }
            if (\array_key_exists('PostalCode', $data)) {
                $object->setPostalCode($data['PostalCode']);
                unset($data['PostalCode']);
            }
            if (\array_key_exists('CountryCode', $data)) {
                $object->setCountryCode($data['CountryCode']);
                unset($data['CountryCode']);
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

            if ($object->isInitialized('addressLine') && null !== $object->getAddressLine()) {
                $data['AddressLine'] = $object->getAddressLine();
            }
            if ($object->isInitialized('addressLine2') && null !== $object->getAddressLine2()) {
                $data['AddressLine2'] = $object->getAddressLine2();
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['City'] = $object->getCity();
            }
            if ($object->isInitialized('stateProvinceCode') && null !== $object->getStateProvinceCode()) {
                $data['StateProvinceCode'] = $object->getStateProvinceCode();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['PostalCode'] = $object->getPostalCode();
            }
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['CountryCode'] = $object->getCountryCode();
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
            return [\ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntryAddress::class => false];
        }
    }
}
