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
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class FreightPickupRequestShipmentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \ShipStream\Ups\Api\Model\FreightPickupRequestShipmentDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightPickupRequestShipmentDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\FreightPickupRequestShipmentDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('HazmatIndicator', $data)) {
                $object->setHazmatIndicator($data['HazmatIndicator']);
                unset($data['HazmatIndicator']);
            }
            if (\array_key_exists('PackagingType', $data)) {
                $object->setPackagingType($this->denormalizer->denormalize($data['PackagingType'], \ShipStream\Ups\Api\Model\ShipmentDetailPackagingType::class, 'json', $context));
                unset($data['PackagingType']);
            }
            if (\array_key_exists('NumberOfPieces', $data)) {
                $object->setNumberOfPieces($data['NumberOfPieces']);
                unset($data['NumberOfPieces']);
            }
            if (\array_key_exists('DescriptionOfCommodity', $data)) {
                $object->setDescriptionOfCommodity($data['DescriptionOfCommodity']);
                unset($data['DescriptionOfCommodity']);
            }
            if (\array_key_exists('Weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['Weight'], \ShipStream\Ups\Api\Model\ShipmentDetailWeight::class, 'json', $context));
                unset($data['Weight']);
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
            if ($object->isInitialized('hazmatIndicator') && null !== $object->getHazmatIndicator()) {
                $data['HazmatIndicator'] = $object->getHazmatIndicator();
            }
            $data['PackagingType'] = $this->normalizer->normalize($object->getPackagingType(), 'json', $context);
            $data['NumberOfPieces'] = $object->getNumberOfPieces();
            $data['DescriptionOfCommodity'] = $object->getDescriptionOfCommodity();
            $data['Weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\ShipStream\Ups\Api\Model\FreightPickupRequestShipmentDetail::class => false];
        }
    }
} else {
    class FreightPickupRequestShipmentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \ShipStream\Ups\Api\Model\FreightPickupRequestShipmentDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightPickupRequestShipmentDetail::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\FreightPickupRequestShipmentDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('HazmatIndicator', $data)) {
                $object->setHazmatIndicator($data['HazmatIndicator']);
                unset($data['HazmatIndicator']);
            }
            if (\array_key_exists('PackagingType', $data)) {
                $object->setPackagingType($this->denormalizer->denormalize($data['PackagingType'], \ShipStream\Ups\Api\Model\ShipmentDetailPackagingType::class, 'json', $context));
                unset($data['PackagingType']);
            }
            if (\array_key_exists('NumberOfPieces', $data)) {
                $object->setNumberOfPieces($data['NumberOfPieces']);
                unset($data['NumberOfPieces']);
            }
            if (\array_key_exists('DescriptionOfCommodity', $data)) {
                $object->setDescriptionOfCommodity($data['DescriptionOfCommodity']);
                unset($data['DescriptionOfCommodity']);
            }
            if (\array_key_exists('Weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['Weight'], \ShipStream\Ups\Api\Model\ShipmentDetailWeight::class, 'json', $context));
                unset($data['Weight']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('hazmatIndicator') && null !== $object->getHazmatIndicator()) {
                $data['HazmatIndicator'] = $object->getHazmatIndicator();
            }
            $data['PackagingType'] = $this->normalizer->normalize($object->getPackagingType(), 'json', $context);
            $data['NumberOfPieces'] = $object->getNumberOfPieces();
            $data['DescriptionOfCommodity'] = $object->getDescriptionOfCommodity();
            $data['Weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\ShipStream\Ups\Api\Model\FreightPickupRequestShipmentDetail::class => false];
        }
    }
}