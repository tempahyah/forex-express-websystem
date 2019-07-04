@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center" style="margin-bottom:20px;">
                <img  src="https://lh3.googleusercontent.com/tmIzJXcPUQrs8E58K0xNBqGayJBdC9GWdK4iaDVffD0A3ZUGC4xII9qmYXlSDBdkN8iMzH52I7wFmIvJ_zPf-SNnC4NHzh8PJlnGZJKKRcwGbbstqt4wTz4mQ9uA5gAtIF-Ryt8G0WsvLY6VG1MSD0s5kVBqR6ugtDmgv1bq3fR8-kDCbSHQjNc3mzFGuk0CKT_yW7ajgunQ52qQxILPJeeGOvojfBrk5YT_yQamUpW_z6j8ZlDES5w9LHTEZai_0w7ywOqof_MDv0SUUXvKXTFwUuJosO-y63z1B6fw65-xRV5dx6nHcB9fhHGw6M9WROFssuFDf5veFBywh-PbMq-ZgNJnJbej2QcgrO7AjkHKMdfrRvMRboCOIDk_eqyDo-_M8JFG347fj-A3t6Hz9xuii-CjXbRew__6jPc3FUoOM4qilC-MNLQSqykS4nZryUuctBBI9jSIkKQZThwy5AQS6qxec75gIa0eiegcImoWB5cXR8fve9-iNBBqkcru6yj3y41hhUuHUY8R8jOUU1T2VliIqcMxs3U-I0GYe0VGHJUt0yw44f3lO3ADrL21yeURF49btmsgrMv8TfsgPM-fpU3OqnU_Us9cUCk7_qa8qGgSWHZ36eP21NEEfCGxfP7Y-QeV7TAtFjb9g1CN6ynofkIqb8S7LVIKVoPI37GQFs8F1xxS6yMLjO7jWnT9pT_VBDteIF8fhjXrQpjmm_QT=w811-h657-no" alt="" style="width:110px" height="110px padding:20px">
            </div>
            <div class="card">
                <div class="card-header bg-primary text-center text-white"> <h3> {{ __('Login') }}</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
