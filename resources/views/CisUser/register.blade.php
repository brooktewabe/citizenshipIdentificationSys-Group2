
@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __(' REGISTER USERS') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('CisUser/register') }}">

 @csrf
 <div class="form-group row">
 <label for="fname" class="col-md-4 col-formlabel text-md-right">{{ __('First name') }}</label>
 <div class="col-md-6">
 <input id="fname" type="text" class="formcontrol @error('fname') isinvalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="
fname" autofocus>
 @error('fname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="lname" class="col-md-4 col-formlabel text-md-right">{{ __('Last name') }}</label>
 <div class="col-md-6">
 <input id="lname" type="text" class="formcontrol @error('lname') isinvalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete
="lname">
 @error('lname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="sex" class="col-md-4 col-formlabel text-md-right">{{ __('Sex') }}</label>
 <div class="col-md-6">
 <input id="sex" type="radio" class="formcontrol @error('sex') isinvalid @enderror" name="sex" value="Male" required autocomplete
="sex">Male
<input id="sex" type="radio" class="formcontrol @error('sex') isinvalid @enderror" name="sex" value="Female" required autocomplete
="sex">Female
 @error('sex')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="username" class="col-md-4 col-formlabel text-md-right">{{ __('Username') }}</label>
 <div class="col-md-6">
 <input id="username" type="date" class="formcontrol @error('username') isinvalid @enderror" name="username" value="{{ old('username') }}" required autocomplete
="username">
 @error('username')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="password" class="col-md-4 col-formlabel text-md-right">{{ __('Password') }}</label>
 <div class="col-md-6">
 <input id="password" type="text" class="formcontrol @error('password') isinvalid @enderror" name="password" value="{{ old('password') }}" required autocomplete
="password">
 @error('password')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 
 <div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
 <button type="submit" class="btn btn-primary">
 {{ __('Register') }}
 </button>
 </div>
 </div>
 </form>
 <div class="container pb-2">
 <a class="btn btn-success" href="{{ route('Citizens/get_all') }}" role="button"> {{ __('View users') }}
</a>
</div>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection
