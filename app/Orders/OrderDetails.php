<?php


namespace App\Orders;
use App\Billing\PaymentGatewayContract;

class OrderDetails{

      private $paymentGateway;

      public function __construct(PaymentGatewayContract $paymentGateway){
            $this->paymentGateway = $paymentGateway;
      }

      public function details(){

            $this->paymentGateway->setDiscount(200);
            
            return [
                  'name' => 'Hamza',
                  'address' => 'ward # 5 Zafarwal',
            ];
      }

}