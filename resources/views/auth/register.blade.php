<x-auth-layout>
    <div class="max-w-[335px] m-auto box-border">
        <div class="mb-12 pt-6 text-center">
            <img src="img/favicon.png" class="h-auto max-w-full" alt="LOGO">
            <h5 class="mt-4 mb-4 text-black text-xl font-medium">Welcome to Aria</h5>
            <p class="mt-0 mb-4">It is a long established fact that a reader <br> will be distracted by the readable.</p>
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mb-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="mt-6">
                <button type="submit" class="cursor-pointer text-base text-[#07bf67] border-[#07bf67] border rounded-sm py-3 px-4 block w-full">Sign Up</button>
            </div>
        </form>

        <div class="text-center mt-12">
            <p>Already have an Account? <a href="{{ route('login') }}">Sign In</a></p>
        </div>
    </div>
</x-auth-layout>
