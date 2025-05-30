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
    class AcceptanceAuditPreCheckRequestRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequestRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequestRequest::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequestRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('RequestOption', $data)) {
                $object->setRequestOption($data['RequestOption']);
                unset($data['RequestOption']);
            }
            if (\array_key_exists('SubVersion', $data)) {
                $object->setSubVersion($data['SubVersion']);
                unset($data['SubVersion']);
            }
            if (\array_key_exists('TransactionReference', $data)) {
                $object->setTransactionReference($this->denormalizer->denormalize($data['TransactionReference'], \ShipStream\Ups\Api\Model\RequestTransactionReference::class, 'json', $context));
                unset($data['TransactionReference']);
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
            if ($object->isInitialized('requestOption') && null !== $object->getRequestOption()) {
                $data['RequestOption'] = $object->getRequestOption();
            }
            if ($object->isInitialized('subVersion') && null !== $object->getSubVersion()) {
                $data['SubVersion'] = $object->getSubVersion();
            }
            if ($object->isInitialized('transactionReference') && null !== $object->getTransactionReference()) {
                $data['TransactionReference'] = $this->normalizer->normalize($object->getTransactionReference(), 'json', $context);
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
            return [\ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequestRequest::class => false];
        }
    }
} else {
    class AcceptanceAuditPreCheckRequestRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequestRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequestRequest::class;
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
            $object = new \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequestRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('RequestOption', $data)) {
                $object->setRequestOption($data['RequestOption']);
                unset($data['RequestOption']);
            }
            if (\array_key_exists('SubVersion', $data)) {
                $object->setSubVersion($data['SubVersion']);
                unset($data['SubVersion']);
            }
            if (\array_key_exists('TransactionReference', $data)) {
                $object->setTransactionReference($this->denormalizer->denormalize($data['TransactionReference'], \ShipStream\Ups\Api\Model\RequestTransactionReference::class, 'json', $context));
                unset($data['TransactionReference']);
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
            if ($object->isInitialized('requestOption') && null !== $object->getRequestOption()) {
                $data['RequestOption'] = $object->getRequestOption();
            }
            if ($object->isInitialized('subVersion') && null !== $object->getSubVersion()) {
                $data['SubVersion'] = $object->getSubVersion();
            }
            if ($object->isInitialized('transactionReference') && null !== $object->getTransactionReference()) {
                $data['TransactionReference'] = $this->normalizer->normalize($object->getTransactionReference(), 'json', $context);
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
            return [\ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequestRequest::class => false];
        }
    }
}