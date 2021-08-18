<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Srmklive\PayPal\Services\ExpressCheckout;

class UserRegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }
    public function cancel()
    {
        dd('Your payment is canceled. You can create cancel page here.');
    }
    public function success(Request $request)
    {
        $paypalModule = new ExpressCheckout;
        $response = $paypalModule->getExpressCheckoutDetails($request->token);
        // dd($response);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            dd('Your payment was successfully. You can create success page here.');
        }

        dd('Something is wrong.');
    }

    public function resgister(Request $request)
    {
        // dd($request->pkgInp);
        if ($request->pkgInp === 'lifetime') {
            $data = [];
            $data['items'] = [
                [
                    'name' => 'ItSolutionStuff.com',
                    'price' => 100,
                    'desc'  => 'Description for ItSolutionStuff.com',
                    'qty' => 1
                ]
            ];

            $data['invoice_id'] = 1;
            $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
            $data['return_url'] = route('payment.success');
            $data['cancel_url'] = route('payment.cancel');
            $data['total'] = 100;

            $provider = new ExpressCheckout;
            // ( $provider->setExpressCheckout($data));

            $response = $provider->setExpressCheckout($data);

            $response = $provider->setExpressCheckout($data, true);

            return redirect($response['paypal_link']);
        }


        if ($request->pkgInp === 'monthly') {
            dd($request->pkgInp);
        }
        if ($request->pkgInp === 'annual') {
            dd($request->pkgInp);
        }
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);
        if ($check->type === "college coach"){
            return redirect("/");

        }
        else
        $this->guard()->login($check);
        return redirect("/");

    }



    protected function create(array $data)
    {
        // dd($data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => $data['type'],
            'user_status' => $data['type']==="college coach" ? '0' : '1',
        ]);
    }
    protected function guard()
    {
        return Auth::guard();
    }
}
