<x-auth-layout>
    <div class="max-w-[335px] m-auto box-border">
        <div class="mb-12 pt-6 text-center">
            <img src="img/favicon.png" class="h-auto max-w-full" alt="LOGO">
            <h5 class="mt-4 mb-4 text-black text-xl font-medium">Welcome to Aria</h5>
            <p class="mt-0 mb-4">It is a long established fact that a reader <br> will be distracted by the readable.</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mb-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="mt-6">
                <button type="submit" class="cursor-pointer text-base text-[#07bf67] border-[#07bf67] border rounded-sm py-3 px-4 block w-full">Sign In</button>
            </div>
        </form>

        <div class="text-center mt-12">
            <p>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
        </div>
    </div>
</x-auth-layout>
