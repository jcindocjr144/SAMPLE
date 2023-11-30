@extends("layouts.layout")

@section("title","Students Learning Assistance")

@section("content")
<x-app-layout>
  
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="/">HOME</a>
  <a href="#" onclick="student()">STUDENTS</a>
  <a href="#" onclick="instructor()">INSTRUCTORS</a>
  <form method="POST" action="{{ route('logout') }}" class="mt-1 ms-2">
  @csrf
<x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('LOGOUT') }}</x-dropdown-link></form></div>

<div id="main">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; ADMIN DASHBOARD</span>
<h1 class="text-center" style="display:none;" id="student">STUDENTS LIST</h1>
<h1 class="text-center" style="display:none;" id="instructor">INSTRUCTORS LIST</h1>
</div>

</x-app-layout>

@endsection