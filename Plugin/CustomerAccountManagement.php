<?php
namespace Zero1\AsyncEventCustomerCreateFailed\Plugin;

use Magento\Customer\Api\AccountManagementInterface;
use Magento\Customer\Api\Data\CustomerInterface;
use Magento\Framework\Event\ManagerInterface;

class CustomerAccountManagement
{
    public function __construct(
        protected ManagerInterface $eventManager
    ){ }

    public function aroundCreateAccount(
        AccountManagementInterface $subject, 
        callable $proceed, 
        CustomerInterface $customer, 
        $password = null,
        $redirectUrl = ''
    ){
        /** @var \Magento\Customer\Model\Data\Customer $customer */
        try{
            return $proceed($customer, $password, $redirectUrl);
        }catch(\Throwable $e){
            $this->eventManager->dispatch('customer_create_failed', [
                'submissionData' => $customer->__toArray(),
                'error' => $e->getMessage(),
                'errorClass' => get_class($e),
            ]);
            throw $e;
        }
    }
}
