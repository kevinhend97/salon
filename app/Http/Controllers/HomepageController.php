<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suscribe;
use App\Paket;
use App\Layanan;
use Mail;

class HomepageController extends Controller
{
    public function emailSuscribe(Request $request)
    {
    	$cekEmail = Suscribe::where('email', $request->email)->count();

        $email = $request->email;

        $data = array(
            'name' => $email,
        );

    	if ($cekEmail > 0) {
    		return back();
    	}
    	else{
    		$tabelSuscribers = new Suscribe;
    		$tabelSuscribers->email = $request->email;
    		$tabelSuscribers->save();

            // Kirim E-mail
            Mail::send('emails.welcome', $data, function ($message) use($email) {

                $message->from('hendrawankevin97@gmail.com', 'Salon Violet');

                $message->to($email, 'no-reply')->subject('Terimakasih Telah Berlangganan');

            });


    		return back();
    	}

    }
}
