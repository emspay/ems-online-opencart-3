<?php
require_once(DIR_SYSTEM.'library/ginger/autoload.php');

use banktwins\GingerBankModel;

class ModelExtensionPaymentGingerWeChat extends GingerBankModel
{
    protected $paymentName = 'ginger_wechat';
}
