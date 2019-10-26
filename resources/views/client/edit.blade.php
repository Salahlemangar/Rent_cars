@extends('layouts.master')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif
<h1 class="text-muted">Edit Client</h1>

  <form id="needs-validation" novalidate action="{{url('update/clients/{id}')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <div class="row">
    <div class="col mb-4">
    <label for="firstclient">First name</label>
    <input type="text" name="nom"  placeholder="First Name"  class="form-control" aria-describedby="inputGroupPrepend" required value={{$client->nom}} />  
    <div class="invalid-feedback">  
        Please enter First name.  
     </div>  
    </div>
    <div class="col mb-4">
    <label for="lastclient">Last name</label>
      <input type="text" class="form-control" placeholder="Last name" name="prenom"   aria-describedby="inputGroupPrepend" required value={{$client->prenom}} />
      <div class="invalid-feedback">  
        Please enter last name.  
     </div>  
    </div>
    </div>
    <div class="row">
    <div class="col mb-4">
    <label for="emailaddress">Email Address</label>
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
    </div>
    <input type="email" class="form-control"  name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="email address" aria-describedby="inputGroupPrepend" required value={{$client->email}} />  
    <div class="invalid-feedback">  
        Please provide an Email.  
     </div>
  </div>
    </div>
    <div class="col mb-4">
    <label for="phonenumber">Phone number</label>
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-phone"></i></span>
    </div>
    <input type="tel" pattern="^\d{10}$" class="form-control" name="tel" placeholder="Mobile Number" aria-describedby="inputGroupPrepend" required value={{$client->tel}} /> 
    <div class="invalid-feedback">  
     Please enter 10 digit mobile number.   
    </div>
    </div>  
    </div>
    </div>
    <div class="row">
    <div class="col mb-4">
    <label for="address">Address</label>
      <textarea class="form-control" rows="3" minlength="10" maxlength="30" placeholder="Address" name="adresse" aria-describedby="inputGroupPrepend" required value={{$client->adresse}}></textarea>
      <div class="invalid-feedback">  
        Please enter Address.  
     </div>
    </div>
    </div>
    <div class="row">
    <div class="col mb-4">
    <label for="birthday">Birthday date</label>
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
    </div>
    <input type="date" class="form-control" name="datedenaissance" placeholder="email address" aria-describedby="inputGroupPrepend" required value={{$client->datedenaissance}} />  
    <div class="invalid-feedback">  
        Please Select a date.  
     </div>
     </div>
    </div>
    <div class="col mb-4">
    <label for="nationnality">Nationnality</label>
    <select class="custom-select" required id="nationnalite" name="nationnalite" value={{$client->nationnalite}}>
      <option value=""></option>
      <option value="Marocaine">Marocaine</option>
      <option value="Française">Française</option>
      <option value="Canadienne">Canadienne</option>
      <option value="Américaine">Américaine</option>
      <option value="Portugaise">Portugaise</option>
    </select>
    <div class="invalid-feedback">  
        Please Select a Nationnality.  
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col mb-4">
    <label for="cin">CIN</label>
    <input type="text" class="form-control" pattern="[A-Z]{2}[0-9]{5}" placeholder="CIN" name="CIN" aria-describedby="inputGroupPrepend" required value={{$client->CIN}} />
      <div class="invalid-feedback">  
        Please enter a CIN.  
     </div>  
    </div>
    <div class="col mb-4">
    <label for="permis">Permis</label>
    <input type="text" class="form-control" pattern="[0-9]{8}" placeholder="permis" name="permis" aria-describedby="inputGroupPrepend" required value={{$client->permis}}/>
      <div class="invalid-feedback">  
        Please enter a Permis.  
     </div>  
    </div>
    <div class="col mb-4">
    <label for="category">Category</label>
    <select id="Category" name="categorie" class="custom-select" required value={{$client->categorie}}>
      <option value=""></option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
    </select>
    <div class="invalid-feedback">  
        Please Select a Category.  
    </div>
    </div>
    </div>
   <div class="row">
    <div class="col mb-3">
    <label for="file">Identity Card</label>
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
    </div>
    <div class="custom-file">  
     <input type="file" class="custom-file-input" id="validatedCustomFile" required>  
     <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>  
     <div class="invalid-feedback">Choose file for upload</div>  
     </div>
     </div>
     </div>
     <div class="col mb-3">
    <label for="file">Permis Card</label>
    <div class="custom-file">  
     <input type="file" class="custom-file-input" id="validatedCustomFile" required>  
     <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>  
     <div class="invalid-feedback">Choose file for upload</div>  
     </div>
     </div>
     

     </div> 
    <!--
    <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div> -->
    <button type="submit" class="btn btn-primary btn-lg">Save</button>
    <button type="button" class="btn btn-secondary btn-lg">Refresh</button>
    
    </form>

  @endsection  