<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;



class LoginController extends Controller
{
    public function login(Request $request)
    {
        //dd($request->email);return;
        //return view('accounts.index');

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
//        $rules = array(
//            'email' => 'required|email',
//            'password' => 'required|min:6'
//        );
//
//        // do the validation ----------------------------------
//        // validate against the inputs from our form
//        $validator = Validator::make(Input::all(), $rules);
//        if ($validator->fails()) {
//
//            Session::flash('loginFail', "Worng Email/Password!");
//            return back();
//
//        }

        $auth = Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password],$request->remember);
       //  dd(Auth::user()->name);return;
        return redirect()->route('post-info-view');
        /*
        if ($auth)
        {
          //  return redirect()->route('account-index-view');
           // return redirect()->intended(route('account-index-view'));
        }else{
            Session::flash('loginFail', "You Are Not Active User!");
            return back();

            //return redirect()->back()->withInput($request->only('email','remember'));
        }
*/
        Session::flash('loginFail', 'Wrong password or this account not approved yet');
        return redirect()->back()->withInput()->withErrors($errors);
    }


    public function getLogout()
    {
        //Auth::guard('web')->logout();
        return redirect()->route('/');

    }

}
