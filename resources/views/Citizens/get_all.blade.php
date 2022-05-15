
@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btn-success" href="{{ route('Citizens/register') }}" role="button"> {{ __('Register New Citizen') }}
</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-10">
 <div class="card">
 <div class="card-header">
 {{ __('CITIZENS LIST') }}
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>ID</th>
 <th>First name</th>
 <th>Last name</th>
 <th>Sex</th>
 <th>Birth date</th>
 <th>Mothers name</th>
 <th>Nationality</th>
 <th>Birth place</th>
 <th>Occupation</th>
 <th>Address</th>
 <th>Religion</th>
 <th>Mobile number</th>
 <th>Maritial status</th>
 <th> Operations</th>
 </tr>
 </thead>
 <tbody>
 @foreach($Citizens as $Citizens)
 <tr>
 <td> {{ $Citizens->id }}</td>
 <td> {{ $Citizens->fname }}</td>
 <td> {{ $Citizens->lname }}</td>
 <td> {{ $Citizens->sex }}</td>
 <td> {{ $Citizens->bday }}</td>
 <td> {{ $Citizens->mothersname }}</td>
 <td> {{ $Citizens->nationality }}</td>
 <td> {{ $Citizens->birthplace }}</td>
 <td> {{ $Citizens->occupation }}</td>
 <td> {{ $Citizens->address }}</td>
 <td> {{ $Citizens->religion }}</td>
 <td> {{ $Citizens->mobile }}</td>
 <td> {{ $Citizens->maritialstatus }}</td>
 <td>

 <a class="btn btn-xs btn-success" title="Edit" href="/Citizens/edit/{{$Citizens->id }}">Edit</a>
 <a class="btn btn-xs btn-danger" title="Delete" href="/Citizens/delete/{{ $Citizens->id }}">Delete</a>
 </td>
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




