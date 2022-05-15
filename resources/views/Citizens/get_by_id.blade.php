
@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Citizens Information') }}
 </div>
 <div class="card-body">
 ID : {{ $Citizens->id }}
 <br>
 First name : {{ $Citizens->fname }}<br>
 Last name : {{ $Citizens->lname }}<br>
 Sex : {{ $Citizens->sex }}<br>
 Birth date : {{ $Citizens->bday }}<br>
 Mothers name : {{ $Citizens->mothersname }}<br>
 Nationality : {{ $Citizens->nationality }}<br>
 Birth place : {{ $Citizens->birthplace }}<br>
 Occupation : {{ $Citizens->occupation }}<br>
 Address : {{ $Citizens->address }}<br>
 Religion : {{ $Citizens->religion }}<br>
 Mobile number : {{ $Citizens->mobile }}<br>
 Maritial status : {{ $Citizens->maritialstatus }}<br>

 <br>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('Citizens/get_all') }}" role="button"> {{ __('Back') }}</a>
 </div>
</div>
@endsection