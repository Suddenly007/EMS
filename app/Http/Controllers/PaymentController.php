<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Payment;
  
class PaymentController extends Controller
{
    public function index()
    {
        return view('User.payment');
    }
     public function create()
    {
        return view('vendor.payment2');
    }

     public function show()
    {
        $payments = Payment::all();
        return view('User.detail')->with('payments',$payments);
    }
  
    public function charge(Request $request)
    {
        if ($request->input('stripeToken')) {
  
            $gateway = Omnipay::create('Stripe');
            $gateway->setApiKey(env('STRIPE_SECRET_KEY'));
           
            $token = $request->input('stripeToken');
           
            $response = $gateway->purchase([
                'amount' => $request->input('amount'),
                'currency' => env('STRIPE_CURRENCY'),
                'token' => $token,
            ])->send();
           
            if ($response->isSuccessful()) {
                // payment was successful: insert transaction data into the database
                $arr_payment_data = $response->getData();
                  
                $isPaymentExist = Payment::where('payment_id', $arr_payment_data['id'])->first();
           
                if(!$isPaymentExist)
                {
                    $payment = new Payment;
                    $payment->payment_id = $arr_payment_data['id'];
                    $payment->payer_email = $request->input('email');
                    $payment->payer_name = $request->input('name');
                    $payment->event_name = $request->input('event_name');
                    $payment->amount = $arr_payment_data['amount']/100;
                    $payment->currency = env('STRIPE_CURRENCY');
                    $payment->payment_status = $arr_payment_data['status'];
                    $payment->save();
                }
  
                return redirect('payment show')->with("status","Payment is successful. Your payment id is: ". $arr_payment_data['id']);
            } else {
                // payment failed: display message to customer
                return $response->getMessage();
            }
        }
    }

      public function charge2(Request $request)
    {
        if ($request->input('stripeToken')) {
  
            $gateway = Omnipay::create('Stripe');
            $gateway->setApiKey(env('STRIPE_SECRET_KEY'));
           
            $token = $request->input('stripeToken');
           
            $response = $gateway->purchase([
                'amount' => $request->input('amount'),
                'currency' => env('STRIPE_CURRENCY'),
                'token' => $token,
            ])->send();
           
            if ($response->isSuccessful()) {
                // payment was successful: insert transaction data into the database
                $arr_payment_data = $response->getData();
                  
                $isPaymentExist = Payment::where('payment_id', $arr_payment_data['id'])->first();
           
                if(!$isPaymentExist)
                {
                    $payment = new Payment;
                    $payment->payment_id = $arr_payment_data['id'];
                    $payment->payer_email = $request->input('email');
                    $payment->payer_name = $request->input('name');
                    $payment->event_name = $request->input('event_name');
                    $payment->amount = $arr_payment_data['amount']/100;
                    $payment->currency = env('STRIPE_CURRENCY');
                    $payment->payment_status = $arr_payment_data['status'];
                    $payment->save();
                }
  
                 return back()->with("status","Payment is successful. Your payment id is: ". $arr_payment_data['id']);
            } else {
                // payment failed: display message to customer
                return $response->getMessage();
            }
        }
    }

}
