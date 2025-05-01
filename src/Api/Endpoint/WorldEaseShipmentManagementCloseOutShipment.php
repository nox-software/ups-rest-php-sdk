<?php

namespace ShipStream\Ups\Api\Endpoint;

class WorldEaseShipmentManagementCloseOutShipment extends \ShipStream\Ups\Api\Runtime\Client\BaseEndpoint implements \ShipStream\Ups\Api\Runtime\Client\Endpoint
{
    protected $shipmentGccn;
    protected $version;
    /**
    * Finalizes the shipment process by marking a package or set of packages as ready for dispatch, effectively ending the consolidation stage.
    *
    * @param string $shipmentGccn The unique identifier of the shipment to close Out. It also known as GCCN.
    * @param string $version Indicates WorldEase Shipment Management API to display the new release features
    * @param \ShipStream\Ups\Api\Model\WorldEaseShipmentManagementCloseOutShipmentRequest $requestBody
    * @param array $headerParameters {
    *     @var string $transId Client generated id which is treated as the Transaction ID
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    */
    public function __construct(string $shipmentGccn, string $version, \ShipStream\Ups\Api\Model\WorldEaseShipmentManagementCloseOutShipmentRequest $requestBody, array $headerParameters = [])
    {
        $this->shipmentGccn = $shipmentGccn;
        $this->version = $version;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \ShipStream\Ups\Api\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{shipmentGccn}', '{version}'], [$this->shipmentGccn, $this->version], '/ship/{version}/master-shipment/closeout/{shipmentGccn}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \ShipStream\Ups\Api\Model\WorldEaseShipmentManagementCloseOutShipmentRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['transId', 'transactionSrc']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['transactionSrc' => 'testing']);
        $optionsResolver->addAllowedTypes('transId', ['string']);
        $optionsResolver->addAllowedTypes('transactionSrc', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ShipStream\Ups\Api\Exception\WorldEaseShipmentManagementCloseOutShipmentBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\WorldEaseShipmentManagementCloseOutShipmentUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\WorldEaseShipmentManagementCloseOutShipmentNotFoundException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\WorldEaseShipmentManagementCloseOutShipmentResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ShipStream\Ups\Api\Model\WorldEaseShipmentManagementCloseOutShipmentResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\WorldEaseShipmentManagementCloseOutShipmentBadRequestException($serializer->deserialize($body, 'ShipStream\Ups\Api\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\WorldEaseShipmentManagementCloseOutShipmentUnauthorizedException($serializer->deserialize($body, 'ShipStream\Ups\Api\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\WorldEaseShipmentManagementCloseOutShipmentNotFoundException($serializer->deserialize($body, 'ShipStream\Ups\Api\Model\ErrorResponse', 'json'), $response);
        }
        throw new \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}