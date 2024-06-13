<?php
namespace Zero1\AsyncEventCustomerCreateFailed\Api;

interface CreateFailedEventDataInterface
{
    /**
     * @return \Zero1\AsyncEventCustomerCreateFailed\Api\CreateFailedEventData\SubmittedDataItemInterface[]
     */
    public function getSubmittedData();

    /**
     * @return string
     */
    public function getErrorMessage();

    /**
     * @return string
     */
    public function getErrorClass();
}
