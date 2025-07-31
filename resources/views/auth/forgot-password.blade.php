<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        نسيت كلمة المرور؟ لا مشكلة. فقط أخبرنا بعنوان بريدك الإلكتروني وسنرسل لك رابط إعادة تعيين كلمة المرور الذي سيسمح لك باختيار كلمة مرور جديدة.
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <label for="email" class="form-label">البريد الالكتروني</label>
            <input id="email" class="form-input" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="error-message" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="login-btn">
                إرسال رابط إعادة تعيين كلمة المرور
            </button>
        </div>
    </form>
</x-guest-layout>
