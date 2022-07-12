<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SomeRequest;
use App\Http\Requests\Find_reserveRequest;
use App\SomeModel;
use App\Client;

class SomeController extends Controller{

  public function home_page(){
    return view('home', ['data' => Client::all()]);
  }

  public function submit(SomeRequest $req){
    //dd($req->input('client'));
    $reserve = new SomeModel();
    $reserve->client_id = $req->input('client');
    $reserve->date = $req->input('date');
    $reserve->status = $req->input('status');

    $reserve->save();

    return redirect()->route('home')->with('success', 'It works!');
  }

  public function all_reservet(){
    return view('reservetData', ['data' => SomeModel::all(), 'client' => Client::all()]);
  }

  public function some_reservet(Find_reserveRequest $req){
    $id = $req->input('id');
    return view('some_reservet', ['data' => SomeModel::find($id)]);
  }

  public function redact_resev($id){
    return view('redact_resev', ['data' => SomeModel::find($id), 'client' => Client::all()]);
  }

  public function redact_resev_update($id, SomeRequest $req){
    $reserve = SomeModel::find($id);
    $reserve->client_id = $req->input('client');
    $reserve->date = $req->input('date');
    $reserve->status = $req->input('status');

    $reserve->save();

    return redirect()->route('redact_resev', $id)->with('success', 'It works!');
  }
  public function del_resev($id){
  SomeModel::find($id)->delete();
  return redirect()->route('all_reservet')->with('success', 'It works!');
  }
}
