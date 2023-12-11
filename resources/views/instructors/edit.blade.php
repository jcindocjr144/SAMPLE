@extends("layouts.layout")

@section("title","SLA Registration")

@section("content")
<section>
    <h1 class="mt-5 text-center">Update Status</h1>

    <form method="POST" action="{{ route('instructor.update', $instructor) }}" class="mt-3 text-center text-dark">
        @csrf
        @method('PATCH')

        <div>
            <x-input-label for="fname" :value="__('First Name')" class="mt-2"/>
            <x-text-input id="fname" name="fname" type="text" class="block w-full mt-1" :value="old('fname', $instructor->fname)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('fname')" />
        </div>
       
        <div>
            <x-input-label for="lname" :value="__('Last Name')" class="mt-2"/>
            <x-text-input id="lname" name="lname" type="text" class="block w-full mt-1" :value="old('lname', $instructor->lname) " required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('lname')" />
        </div>
     
        <div>
            <x-input-label for="address" :value="__('Address')" class="mt-2"/>
            <x-text-input id="address" name="address" type="text" class="block w-full mt-1" :value="old('address', $instructor->address) " required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>
       
        <div>
            <x-input-label for="email" :value="__('Email')" class="mt-2"/>
            <x-text-input id="email" name="email" type="email" class="block w-full mt-1" :value="old('email', $instructor->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>
        <div>
            <label for="password" class="mt-2">Password:</label>
            <input type="password" name="password" id="password" value="{{ old('password', $instructor->password) }}" required>
        </div>
        <x-primary-button type="submit" class="mt-3 bg-dark rounded-2">
                {{ __('Update') }}
            </x-primary-button>
    </form>
    <script type="text/javascript" src="JS/my.js"></script>
@endsection