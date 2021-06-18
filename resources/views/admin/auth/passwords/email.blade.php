@extends('auth.layouts.app')
@section('content')
<section class="login">
    <div class="col-md-6">
        <h1>{{ __('Reset Password') }}</h1>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        <div class="container">
            <div class="row">
               <div class="formm">
                <form method="POST" action="{{ route('admin.password.email') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                    </div>

                    <button type="submit" class="btn btn-primary"> {{ __('Send Password Reset Link') }}</button>

                  </form>
               </div>
            </div>
        </div>
    </div>
     
 </section>

@endsection
