    @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header" style="background-color: #DEB887;color:#13866e; font-weight: bold">{{__('login.title')}}</div>

                <div class="card-body" style="background-color: #13866e">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3" >
                            <label for="email"  class="col-md-4 col-form-label text-md-end" style="color: #FFFFE0">{{__('login.email')}}</label>

                            <div class="col-md-6">
                                <input id="email" style="background-color: #FFFFE0" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end" style="color: #FFFFE0">{{__('login.password')}}</label>

                            <div class="col-md-6">
                                <input id="password" style="background-color: #FFFFE0" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="color: #FFFFE0">
                                        {{__('login.cache')}}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #DEB887;color:#13866e">
                                    {{__('login.submit')}}
                                </button>

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #FFFFE0">--}}
{{--                                        Құпиясөзді ұмыттыңыз ба ?--}}
{{--                                    </a>--}}
{{--                                @endif--}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
