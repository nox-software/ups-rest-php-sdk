<?php

namespace ShipStream\Ups\Api\Exception;

class TimeInTransitUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \ShipStream\Ups\Api\Model\ErrorResponse
     */
    private $errorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\ShipStream\Ups\Api\Model\ErrorResponse $errorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized Request');
        $this->errorResponse = $errorResponse;
        $this->response = $response;
    }
    public function getErrorResponse(): \ShipStream\Ups\Api\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}