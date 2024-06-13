<?php
namespace Zero1\AsyncEventCustomerCreateFailed\Model;

use Zero1\AsyncEventCustomerCreateFailed\Api\CreateFailedEventData;

class CreateFailedService
{
    /**
     * @param mixed $submissionData
     * @param string $error
     * @param string $errorClass
     * @return \Zero1\AsyncEventCustomerCreateFailed\Api\CreateFailedEventDataInterface
     */
    public function transform($submissionData, $error, $errorClass)
    {
        return new CreateFailedEventData(
            $submissionData,
            $error,
            $errorClass
        );
    }
}
