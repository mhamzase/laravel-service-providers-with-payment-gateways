<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGatewayContract;
use App\Orders\OrderDetails;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails , PaymentGatewayContract $paymentGateway){
        $order = $orderDetails->details();

        dd($paymentGateway->charge(1000));
        
    }
}
