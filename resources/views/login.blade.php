{{-- resources/views/login.blade.php --}}

{{-- Remove the @extends directive --}}
{{-- Remove the @section('adminlte_css_pre') --}}
{{-- Remove the @php blocks --}}
{{-- Adjust paths or URLs according to your application --}}

<!-- Authentication Header -->
<div class="container">
    <h2>{{ __('Login') }}</h2>
</div>

<!-- Authentication Body -->
<div class="container">
    @error('login_failed')
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <span class="alert-inner--text"><strong>Warning:</strong> {{ $message }}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @enderror

    <form action="{{ route('login') }}" method="post">
        @csrf

        {{-- Username field --}}
        <div class="form-group">
            <label for="username">{{ __('Username') }}</label>
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                value="{{ old('username') }}" id="username" autofocus>
            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Password field --}}
        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                id="password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Remember me field --}}
        <div class="form-group form-check">
            <input type="checkbox" name="remember" id="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
        </div>

        {{-- Submit button --}}
        <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
    </form>
</div>

<!-- Authentication Footer -->
<div class="container">
    <p>{{ __('Don\'t have an account?') }} <a href="{{ route('register') }}">{{ __('Register') }}</a></p>
    <p><a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></p>
</div>
