<x-guest-layout>
    <x-auth-card>
        <x-slot   name="logo">
            <a href="/">
                <img style="width : 10% ; margin : 0 45%" src="{{ URL::asset('assets/images/logo-byd.png') }}" alt="">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Giúp bạn lấy lại mật khẩu.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Gửi đường dẫn đặt lại mật khẩu') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
