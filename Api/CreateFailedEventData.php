<?php
namespace Zero1\AsyncEventCustomerCreateFailed\Api;

use Zero1\AsyncEventCustomerCreateFailed\Api\CreateFailedEventData\SubmittedDataItem;

class CreateFailedEventData implements CreateFailedEventDataInterface
{
    protected $submittedData;

    public function __construct(
        $submittedData,
        protected $errorMessage,
        protected $errorClass
    ){ 
        foreach($submittedData as $key => $value){
            $this->submittedData[] = new SubmittedDataItem($key, $value);
        }
    }

    /**
     * @return \Zero1\AsyncEventCustomerCreateFailed\Api\CreateFailedEventData\SubmittedDataItemInterface[]
     */
    public function getSubmittedData()
    {
        return $this->submittedData;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @return string
     */
    public function getErrorClass()
    {
        return $this->errorClass;
    }
}
