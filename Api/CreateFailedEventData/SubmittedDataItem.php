<?php
namespace Zero1\AsyncEventCustomerCreateFailed\Api\CreateFailedEventData;

class SubmittedDataItem implements SubmittedDataItemInterface
{
    public function __construct(
        protected $key,
        protected $value
    ) { }
    
    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}
