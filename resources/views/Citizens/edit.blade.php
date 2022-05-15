@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('Edit Citzens info') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('Citizens/update') }}">
 
 @csrf
 <input type="hidden" value="{{ $Citizens->id }}" name ='id'>
 <div class="form-group row">
 <label for="fname" class="col-md-4 col-formlabel text-md-right">{{ __('First name') }}</label>
 <div class="col-md-6">
 <input id="fname" type="text" class="formcontrol @error('fname') isinvalid @enderror" name="fname" value="{{ $Citizens->fname}}" required autocomplete="
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
 <input id="lname" type="text" class="formcontrol @error('lname') isinvalid @enderror" name="lname" value="{{ $Citizens->lname}}" required autocomplete
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
 <input id="sex" type="radio" class="formcontrol @error('sex') isinvalid @enderror" name="sex" value="male" checked required autocomplete
="sex">Male
<input id="sex" type="radio" class="formcontrol @error('sex') isinvalid @enderror" name="sex" value="female" required autocomplete
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
 <input id="bday" type="date" class="formcontrol @error('bday') isinvalid @enderror" name="bday" value="{{ $Citizens->bday}}" required autocomplete
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
 <input id="mothersname" type="text" class="formcontrol @error('mothersname') isinvalid @enderror" name="mothersname" value="{{ $Citizens->mothersname}}" required autocomplete
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
 <input id="nationality" type="text" class="formcontrol @error('nationality') isinvalid @enderror" name="nationality" value="{{ $Citizens->nationality}}" required autocomplete
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
 <input id="birthplace" type="text" class="formcontrol @error('birthplace') isinvalid @enderror" name="birthplace" value="{{ $Citizens->birthplace}}" required autocomplete
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
 <input id="occupation" type="text" class="formcontrol @error('occupation') isinvalid @enderror" name="occupation" value="{{ $Citizens->occupation}}" required autocomplete
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
 <input id="address" type="text" class="formcontrol @error('address') isinvalid @enderror" name="address" value="{{ $Citizens->address}}" required autocomplete
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
 <input id="religion" type="text" class="formcontrol @error('religion') isinvalid @enderror" name="religion" value="{{ $Citizens->religion}}" required autocomplete
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
 <input id="mobile" type="number" class="formcontrol @error('mobile') isinvalid @enderror" name="mobile" value="{{ $Citizens->mobile}}" required autocomplete
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
     {{ __('Update') }}
    </button>
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection