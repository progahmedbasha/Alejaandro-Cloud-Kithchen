<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tajawal">
        <!-- Styles -->
        <style>
             body , h1, h2, h3, h4, h5, h6, p, label {
    font-family: 'Tajawal', sans-serif;
}

input[type=button], button {
    font-family: 'Tajawal', sans-serif !important;
    font-size:12px !important;
}
</style>

<x-guest-layout>


<div class="flex justify-center">
                    
                </div>
                

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <label for="email" class="form-label">البريد الالكتروني</label>
            <input id="email" class="form-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="error-message" />
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password" class="form-label">كلمة المرور</label>
            <input id="password" class="form-input" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="error-message" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
           <!-- <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>-->
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
              <!--  <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>-->
            @endif

            <button type="submit" class="login-btn">
                تسجيل الدخول
            </button>
        </div>
    </form>

</x-guest-layout>


