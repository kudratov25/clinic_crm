<x-guest-layout>
    <div class="mb-4 text-base text-gray-600 p-10 pb-0">
        {{ __('Parolingiz esdan chiqdimi? Emailni kiriting!.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="p-10 pt-0">
        @csrf

        <!-- Email Address -->
        <div>
            <x-text-input id="email" placeholder="Email" class="rounded-full mt-1 w-full" type="email" name="email"
                :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="items-center text-center mt-4 w-full ">
            <x-primary-button class="w-full text-center rounded-full">
                {{ __('Parolini tiklash havolasi') }}
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>
