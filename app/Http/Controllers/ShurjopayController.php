<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShurjopayController extends Controller
{
    public function __construct(Shurjopay $sp)
    {
        $this->sp_instance = $sp;
    }

    public function send_payment_request_to_shurjopay()
    {
        $payment_request = new PaymentRequest();
        $this->sp_instance->makePayment($payment_request);

    }
}
