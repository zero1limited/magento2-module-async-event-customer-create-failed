<?php
namespace Zero1\AsyncEventCustomerCreateFailed\Api\CreateFailedEventData;

interface SubmittedDataItemInterface
{
    /**
     * @return string
     */
    public function getKey();

    /**
     * @return mixed
     */
    public function getValue();
}
