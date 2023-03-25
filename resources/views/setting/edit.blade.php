@extends('layout.app')
@section('title', 'Update Password')
@section('content')
<div class="card-style mb-30">
    <section>

        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')

            <div class="mb-3">
                <x-input-label for="current_password" :value="__('Current Password')" />
                <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full"
                    autocomplete="current-password"
                    style="width: 100%; border: 1px solid #eaeaea; padding: 8px 20px;" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')"
                    class="mt-1 mb-3 text-danger" />
            </div>

            <div class="mb-3">
                <x-input-label for="password" :value="__('New Password')" />
                <x-text-input id="password" name="password" type="password" class="mt-1 block w-full"
                    autocomplete="new-password" style="width: 100%; border: 1px solid #eaeaea; padding: 8px 20px;" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-1 mb-3 text-danger" />
            </div>

            <div class="mb-3">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                    class="mt-1 block w-full" autocomplete="new-password"
                    style="width: 100%; border: 1px solid #eaeaea; padding: 8px 20px;" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"
                    class="mt-1 mb-3 text-danger" />
            </div>

            <div class="flex items-center gap-4">
                <x-primary-button class="bg-dark px-2">{{ __('Simpan') }}</x-primary-button>

                @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 text-success mt-3">{{ __('Password Berhasil Dirubah.') }}</p>
                @endif
            </div>
        </form>
    </section>


</div>
@endsection
