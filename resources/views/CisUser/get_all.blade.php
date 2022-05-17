
@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btn-success" href="{{ route('CisUser/register') }}" role="button"> {{ __('Register New User') }}
</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-10">
 <div class="card">
 <div class="card-header">
 {{ __('USERS LIST') }}
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>ID</th>
 <th>First name</th>
 <th>Last name</th>
 <th>Sex</th>
 <th>Username</th>
 <th>Password </th>
 </tr>
 </thead>
 <tbody>
 @foreach($CisUser as $CisUser)
 <tr>
 <td> {{ $CisUser->id }}</td>
 <td> {{ $CisUser->fname }}</td>
 <td> {{ $CisUser->lname }}</td>
 <td> {{ $CisUser->sex }}</td>
 <td> {{ $CisUser->username }}</td>
 <td> {{ $CisUser->password }}</td>

 </tr>
@endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection




