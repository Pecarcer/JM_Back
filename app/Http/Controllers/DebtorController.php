<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Debtor;
use Illuminate\Support\Str;


class DebtorController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    // all debtors
    public function index()
    {
        $debtors = Debtor::join('users','users.id','debtors.user')->select('users.nick as debtorNick','users.fullname as debtorFullname','debtors.*')->orderBy('debtors.id', 'ASC')->get();
        return response()->json($debtors);
    }

    // add debtor
    public function add(Request $request)
    {
        $this->validate($request, [
            'user' => 'required',
            'months_overdue' => 'required'
        ]);

        $debtor = new Debtor([
            'user' => $request->user,
            'months_overdue' => $request->months_overdue,
        ]);
        $debtor->save();

        return response()->json('The debtor successfully added');
    }

    // edit debtor
    public function edit($id)
    {
        $debtor = Debtor::join('users','users.id','debtors.user')->select('users.nick as debtorNick','users.fullname as debtorFullname','debtors.*')->where('debtors.id',$id)->get();
        return response()->json($debtor);
    }

    // update debtor
    public function update($id, Request $request)
    {
        $debtor = Debtor::find($id);
        $debtor->update($request->all());

        return response()->json('The debtor successfully updated');
    }

    // delete debtor
    public function delete($id)
    {
        $debtor = Debtor::find($id);
        $debtor->delete();

        return response()->json('The debtor successfully deleted');
    }
}
