
@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __(' REGISTER CITIZEN') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('Citizens/register') }}">

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
 <label for="bday" class="col-md-4 col-formlabel text-md-right">{{ __('Birthdate') }}</label>
 <div class="col-md-6">
 <input id="bday" type="date" class="formcontrol @error('bday') isinvalid @enderror" name="bday" value="{{ old('bday') }}" required autocomplete
="bday">
 @error('bday')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="mothersname" class="col-md-4 col-formlabel text-md-right">{{ __('Mothers name') }}</label>
 <div class="col-md-6">
 <input id="mothersname" type="text" class="formcontrol @error('mothersname') isinvalid @enderror" name="mothersname" value="{{ old('mothersname') }}" required autocomplete
="mothersname">
 @error('mothersname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="nationality" class="col-md-4 col-formlabel text-md-right">{{ __('Nationality') }}</label>
 <div class="col-md-6">
 <input id="nationality" type="text" class="formcontrol @error('nationality') isinvalid @enderror" name="nationality" value="{{ old('nationality') }}" required autocomplete
="nationality">
 @error('nationality')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="birthplace" class="col-md-4 col-formlabel text-md-right">{{ __('Birthplace') }}</label>
 <div class="col-md-6">
 <input id="birthplace" type="text" class="formcontrol @error('birthplace') isinvalid @enderror" name="birthplace" value="{{ old('birthplace') }}" required autocomplete
="birthplace">
 @error('birthplace')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="occupation" class="col-md-4 col-formlabel text-md-right">{{ __('Occupation') }}</label>
 <div class="col-md-6">
 <input id="occupation" type="text" class="formcontrol @error('occupation') isinvalid @enderror" name="occupation" value="{{ old('occupation') }}" required autocomplete
="occupation">
 @error('occupation')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 
 @csrf
 <div class="form-group row">
 <label for="address" class="col-md-4 col-formlabel text-md-right">{{ __('Address') }}</label>
 <div class="col-md-6">
 <input id="address" type="text" class="formcontrol @error('address') isinvalid @enderror" name="address" value="{{ old('address') }}" required autocomplete
="address">
 @error('address')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="religion" class="col-md-4 col-formlabel text-md-right">{{ __('Religion') }}</label>
 <div class="col-md-6">
 <input id="religion" type="text" class="formcontrol @error('religion') isinvalid @enderror" name="religion" value="{{ old('religion') }}" required autocomplete
="religion">
 @error('religion')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="mobile" class="col-md-4 col-formlabel text-md-right">{{ __('Mobile number') }}</label>
 <div class="col-md-6">
 <input id="mobile" type="number" class="formcontrol @error('mobile') isinvalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete
="mobile">
 @error('mobile')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="maritialstatus" class="col-md-4 col-formlabel text-md-right">{{ __('Maritial status') }}</label>
 <div class="col-md-6">
<select id="maritialstatus" name="maritialstatus">  
<option value = "Single"> Single   
</option>  
<option value = "Married"> Married   
</option>  
<option value = "Divorced"> Divorced  
</option>  
<option value = "Widowed"> Widowed  
</option>  
</select> 
 @error('maritialstatus')
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
 <a class="btn btn-success" href="{{ route('Citizens/get_all') }}" role="button"> {{ __('View Citizens') }}
</a>
</div>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection
