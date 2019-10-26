<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
     public function index(){
        //return Client::all();
        return view('client.index');
     }
     public function view(){
        $clients= Client::orderBy('id','desc')->paginate(10);
        return view('client.view',compact('clients'));
     }
    public function show(Client $clients)
    {
        return $clients;
    }
    public function store(Request $request)
    {
        
      $client = Client::create($request->all());

      return redirect('/view');
    }
    public function edit($id)
    {
        $client = Client::where('id', $id)
        ->first();
        return view('client.edit', compact('client', 'id'));
    }
    public function update(Request $request, $id)
    {    $client = new Client();
        $client = Client::where('id',$id);
        
        $data = $this->validate($request, [
            'nom'=>'required',
            'prenom'=> 'required',
            'adresse'=>'required',
            'categorie'=>'required',
            'CIN'=>'required',
            'permis'=>'required',
            'datedenaissance'=>'required',
            'nationnalite'=>'required',
            'tel'=>'required',
        ]);
        $data['id'] = $id;
        $client->updateClient($data);

        return redirect('/home');
    }
    public function delete($id) 
    {
        $clients = Client::find($id);
        $clients->delete();

        return redirect('/view');
    }
}
