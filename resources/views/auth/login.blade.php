<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="p-5">

        <form method="POST" action="{{ route('login') }}" class="p-5">
            @csrf

            <!-- Email Address -->
            <div class="flex justify-center items-center">
                <div class="content-center items-center">
                    <h1 class="text-primary text-3xl" style="font-weight: 900">Assalomu alekum!</h1>
                    <p class="text-primary text-xl py-3">Qaytib kelganingizdan xursandmiz</p>
                </div>
            </div>
            <div>
                {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                <x-text-input id="email" placeholder="Email" class="rounded-full block mt-1  w-full" type="email"
                    name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">

                <x-text-input placeholder="Parol" id="password" class="rounded-full block mt-3 w-full" type="password"
                    name="password" required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <x-primary-button class="mt-3 rounded-full mt-1 w-full justify-center">
                    {{ __('kirish') }}
                </x-primary-button>
            </div>

            <div class="flex items-center justify-center mt-4">
                @if (Route::has('password.request'))
                    <a class="underline no-underline text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Parolni unitdingizmi?') }}
                    </a>
                @endif

            </div>
        </form>
    </div>

</x-guest-layout>
