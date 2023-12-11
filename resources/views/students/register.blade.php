@extends("layouts.layout")

@section("title","SLA Registration")

@section("content")
  <x-guest-layout>
    <form method="POST" action="{{ route('students.store') }}" class="p-5 text-dark rounded-5">
        @csrf
        <h1 class="text-3xl text-center text-dark">Students Registration</h1>
        <div class="mt-2">
            <x-input-label for="fname" :value="__('First Name')" />            
            <x-text-input id="fname" class="block w-full mt-1" type="text" name="fname" :value="old('fname')" placeholder="&#xf007;" style="font-family:Arial, FontAwesome;" autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('fname')" class="mt-2" />
        </div>

        <div class="mt-2">
        <x-input-label for="fname" :value="__('Last Name')" />            
            <x-text-input id="lname" class="block w-full mt-1" type="text" name="lname" :value="old('lname')" placeholder="&#xf0c0;" style="font-family:Arial, FontAwesome;" autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('lname')" class="mt-2" />
        </div>

        <div class="mt-2">
        <x-input-label for="address" :value="__('Address')" />            
            <x-text-input id="address" class="block w-full mt-1" type="text" name="address" :value="old('address')" placeholder="&#xf2bb;" style="font-family:Arial, FontAwesome;" autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
        
        <div class="mt-2">
        <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" placeholder="&#xf0e0;" style="font-family:Arial, FontAwesome" autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
  
        <div class="mt-2">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1" type="password" name="password" placeholder="&#xf084;" style="font-family:Arial, FontAwesome"
                             autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
   <!-- Confirm Password -->
   <div class="mt-2">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" placeholder="&#xf023;" style="font-family:Arial, FontAwesome;" autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        
        <div class="text-center">
        <x-primary-button class="mt-3 ms-4">
                {{ __('Register') }}
            </x-primary-button>
    </form>
</x-guest-layout>
    @endsection