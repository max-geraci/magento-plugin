<?php
class Pay_Payment_Model_Paymentmethod_Capayable extends Pay_Payment_Model_Paymentmethod {
    const OPTION_ID = 1744;
    protected $_paymentOptionId = 1744;
    protected $_code = 'pay_payment_capayable';
    protected $_formBlockType = 'pay_payment/form_capayable';

    protected static function getFirstname($address){
        return $address->getFirstname();
    }
}
    