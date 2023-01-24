<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Karim007\LaravelNagad\Facade\NagadPayment;
use Karim007\LaravelNagad\Facade\NagadRefund;

class NagadController extends Controller
{
    public function pay(Request $request)
    {
        $trx_id = uniqid();

        $order = new Order();
        $order->order_id = $request->order_id;
        $order->amount   = $request->amount;
        $order->status   = 'Processing';
        $order->trx_id   = $trx_id;
        $order->save();
        
        // $amount = 10;
        
        $response = NagadPayment::create($order->amount, $trx_id); 
        if (isset($response) && $response->status == "Success") {
            return redirect()->away($response->callBackUrl);
        }
        return redirect()->back()->with("error-alert", "Invalid request try again after few time later");
    }

    public function callback(Request $request)
    {
        if (!$request->status && !$request->order_id) {
            return response()->json([
                "error" => "Not found any status"
            ], 500);
        }

        if (config("nagad.response_type") == "json") {
            return response()->json($request->all());
        }

        $verify = NagadPayment::verify($request->payment_ref_id); // $paymentRefId which you will find callback URL request parameter

        if (isset($verify->status) && $verify->status == "Success") {
            $update_order = DB::table('orders')
                ->where('trx_id', $verify->orderId)
                ->update(['status' => 'Paid',]);
                
            return $this->success($verify->orderId);
        } else {
            return $this->fail($verify->orderId);
        }
    }

    public function success($transId)
    {
        return view("nagad::success", compact('transId'));
    }
    public function fail($transId)
    {
        return view("nagad::failed", compact('transId'));
    }


    public function refund($paymentRefId)
    {
        $refundAmount = 1000;
        $verify = NagadRefund::refund($paymentRefId, $refundAmount);
        if (isset($verify->status) && $verify->status == "Success") {
            return $this->success($verify->orderId);
        } else {
            return $this->fail($verify->orderId);
        }
    }

}
