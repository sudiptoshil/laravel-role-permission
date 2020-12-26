<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\InvoicePaid;
use Nexmo\Laravel\Facade\Nexmo;
class smsController extends Controller
{
    

    public function index()
    {
    	

		$basic  = new \Nexmo\Client\Credentials\Basic('7fb1f3c6', '2fzLPFLUSJk7hKPT');
		$client = new \Nexmo\Client($basic);

		$message = $client->message()->send([
		    'to' => '8801746 952187',
		    'from' => 'Vonage APIs',
		    'text' => 'Hello from Sudipta kumar shil'
		]);

		return "message sent!!";


// 8801819903891
		  // Nexmo::message()->send([
    //         'to' => '88' . $request->mobile,
    //         'from' => '16105552344',
    //         'text' => 'Using the facade to send a message.'
    //     ]);

 
    }

    // public function store()
    // {
    // 	request()->user()->notify(new InvoicePaid(900));
    // }
}
