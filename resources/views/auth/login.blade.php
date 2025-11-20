<x-layouts.guest>
  <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="mb-3">
      <x-input-label for="email" :value="__('Email')" />
      <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div class="mb-3">
      <x-input-label for="password" :value="__('Password')" />
      <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
      <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <div class="d-flex justify-content-between align-items-center mb-3">
      <label class="form-check">
        <input id="remember_me" type="checkbox" name="remember" class="form-check-input" />
        <span class="form-check-label ms-2">{{ __('Remember me') }}</span>
      </label>

      @if (Route::has('password.request'))
        <a class="text-primary" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
      @endif
    </div>

    <div class="d-grid">
      <x-primary-button class="btn btn-primary">
        {{ __('Log in') }}
      </x-primary-button>
    </div>

    <div class="text-center mt-3">
    <a href="{{ route('register') }}" class="btn btn-light w-100">
        <i class="bx bx-user-plus"></i> Register
    </a>
    </div>
  </form>
</x-layouts.guest>
