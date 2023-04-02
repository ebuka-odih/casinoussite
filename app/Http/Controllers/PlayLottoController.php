<?php

namespace App\Http\Controllers;

use App\Mail\AdminAlertMail;
use App\Mail\WelcomeMail;
use App\PlayLotto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PlayLottoController extends Controller
{

    public function playLotto(Request $request)
    {
        $data = $this->getData($request);
        $data = PlayLotto::create();
        Mail::to($data->email)->send(new WelcomeMail($data));
        Mail::to('admin@casinoussite.com')->send(new AdminAlertMail($data));
        return redirect()->back()->with('success', "Message sent successfully, please check your inbox");
    }

    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'age' => 'required',
            'occupation' => 'required',
        ];
        return $request->validate($rules);
    }
}
