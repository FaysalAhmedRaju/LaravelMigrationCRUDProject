<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountController extends Controller
{
    //
    public  function getAccountInfo()
    {
        $accountsData = Account::all();
        //dd($accountsData);exit();
        return view('accounts.information',compact('accountsData'));
    }


    public function index()
    {
        //
        //  return 'Hello';
        return view('accounts.welcome');
    }



    public  function saveAccountInfor(Request $request)
    {
        //return $request->all();
         Account::create($request->all());
         return back();

//        $accountsData = Account::all();
//        //dd($accountsData->title);exit();
//        return view('accounts.information',compact('accountsData'));

    }

    public function updateAccountInfor(Request $request)
    {
       // return $request->account_id;
       // return $request->all();
        dd($request->account_id); exit();
        $account = Account::findOrFail($request->account_id);

        //return $account;
        $account->update($request->all());
        return back();

    }

    public function deleteAccountInfor(Request $request)
    {
        //return $request->all();
        $account = Account::findOrFail($request->account_id);
        $account->delete();
        return back();

    }

    public function openView()
    {
        return view('accounts.open-view');//'open view';
    }
}
