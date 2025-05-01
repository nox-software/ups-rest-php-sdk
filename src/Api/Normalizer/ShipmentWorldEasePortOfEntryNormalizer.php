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
    class ShipmentWorldEasePortOfEntryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntry::class;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntry::class;
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new \ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntry();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (\array_key_exists('ClearancePortCode', $data)) {
                $object->setClearancePortCode($data['ClearancePortCode']);
                unset($data['ClearancePortCode']);
            }
            if (\array_key_exists('Consignee', $data)) {
                $object->setConsignee($data['Consignee']);
                unset($data['Consignee']);
            }
            if (\array_key_exists('Address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['Address'], \ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntryAddress::class, 'json', $context));
                unset($data['Address']);
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

            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('clearancePortCode') && null !== $object->getClearancePortCode()) {
                $data['ClearancePortCode'] = $object->getClearancePortCode();
            }
            if ($object->isInitialized('consignee') && null !== $object->getConsignee()) {
                $data['Consignee'] = $object->getConsignee();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['Address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
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
            return [\ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntry::class => false];
        }
    }
} else {
    class ShipmentWorldEasePortOfEntryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntry::class;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntry::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new \ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntry();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (\array_key_exists('ClearancePortCode', $data)) {
                $object->setClearancePortCode($data['ClearancePortCode']);
                unset($data['ClearancePortCode']);
            }
            if (\array_key_exists('Consignee', $data)) {
                $object->setConsignee($data['Consignee']);
                unset($data['Consignee']);
            }
            if (\array_key_exists('Address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['Address'], \ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntryAddress::class, 'json', $context));
                unset($data['Address']);
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

            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('clearancePortCode') && null !== $object->getClearancePortCode()) {
                $data['ClearancePortCode'] = $object->getClearancePortCode();
            }
            if ($object->isInitialized('consignee') && null !== $object->getConsignee()) {
                $data['Consignee'] = $object->getConsignee();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['Address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
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
            return [\ShipStream\Ups\Api\Model\ShipmentWorldEasePortOfEntry::class => false];
        }
    }
}
