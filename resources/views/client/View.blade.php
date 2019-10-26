@extends('layouts.master')
@section('content')

<div class="row mt-11">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="text-muted">All Clients</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>First name</th>
                      <th>Last name</th>
                      <th>Adress</th>
                      <th>Email</th>
                      <th>Categorie</th>
                      <th>CIN</th>
                      <th>Permis</th>
                      <th>Birthday date</th>
                      <th>Nationnality</th>
                      <th>Phone number</th>
                      <th>Modify</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($clients as $client)
                    <tr>
                      <td>{{$client->id}}</td>
                      <td>{{$client->nom}}</td>
                      <td>{{$client->prenom}}</td>
                      <td>{{$client->adresse}}</td>
                      <td>{{$client->email}}</td>
                      <td>{{$client->categorie}}</td>
                      <td>{{$client->CIN}}</td>
                      <td>{{$client->permis}}</td>
                      <td>{{$client->datedenaissance}}</td>
                      <td>{{$client->nationnalite}}</td>
                      <td>{{$client->tel}}</td>
                      <td><a href="{{action('ClientController@edit',$client->id)}}">
                        <i class="fa fa-edit text-blue"></i>
                      </a> 
                    <form action="{{action('ClientController@delete', $client->id)}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="fa fa-trash text-red" type="submit"></button>
                    </form>

                     <!-- <meta name="csrf-token" content="{{ csrf_token() }}">
                      <a href="{{action('ClientController@delete', $client->id)}}">
                        <i class="fa fa-trash text-red"></i>
                      </a>-->
                      
                    </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $clients->links() }}
              </div>
              <!-- 
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            /.card -->
          </div>
        </div>
    @endsection
   