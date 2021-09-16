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
use Illuminate\Support\Facades\Redirect;
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
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'type' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
                'password_confirmation' => 'required|same:password'
            ]
        );
        if ($validator->fails()) {
            // dd($validator->errors());
            return Redirect::back()->withErrors($validator);
        }

        $data = $request->all();
        dd($data);
        
        $check = $this->create($data);
        if ($check->type === "college coach") {
            // dd("College coach");
            return redirect("/");
        } else
            $this->guard()->login($check);
        return redirect("/");
    }



    protected function create(array $data)
    {
    dd($data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => $data['type'],
            'user_status' => $data['type'] === "college coach" ? '0' : '1',
        ]);
    }
    protected function guard()
    {
        return Auth::guard();
    }
}
