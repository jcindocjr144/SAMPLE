@extends("layouts.layout")

@section("title","SLA Registration")

@section("content")
<div class="p-2 container-fluid d-flex justify-content-end align-items-end bg-slate-400">
<x-primary-button >
        <a href="{{ route('students.register') }}"  style="text-decoration:none; color:white;">Student's Registration</a>
</x-primary-button>
<x-primary-button >
        <a href="{{ route('instructors.register') }}"  style="text-decoration:none; color:white;">Instructor's Registration</a>
</x-primary-button></div>
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h1 class="mb-3 text-5xl text-center">Register</h1>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Username')" />
            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" placeholder="&#xf007;" style="font-family:Arial, FontAwesome;" autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" placeholder="&#xf0e0;" style="font-family:Arial, FontAwesome" autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1" type="password" name="password" placeholder="&#xf084;" style="font-family:Arial, FontAwesome"
                             autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" placeholder="&#xf023;" style="font-family:Arial, FontAwesome;" autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-2">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
@endsection