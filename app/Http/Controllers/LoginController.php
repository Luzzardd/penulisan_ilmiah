<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {

        return view('user');
    }

    public function auth(Request $requset)
    {
        $validator = Validator::make($requset->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        $user=User::create([
            'name' => $requset->name
        ]);
        $requset->session()->put('id', $user->id);
        return redirect()->route('landing');

    }
}
