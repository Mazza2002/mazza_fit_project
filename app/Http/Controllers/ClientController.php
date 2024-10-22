<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

//   


public function index(){
    $clients=Client::selectRaw('COUNT(*) as count ,DAY(created_at) as month, sum(prix) as prix' )
    ->groupBy('month')
    ->orderBy('month')
    ->get('');
    $benifits=Client::sum('prix');
    $client_total=Client::count();
    return view('dashboard.index',compact('clients','benifits','client_total'));
}

}