<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Students Learning Assistance</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="shorcut icon" href="images/logo.png">
  <link rel="stylesheet" href="css/dashboard.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
</head>
  <body>
<x-app-layout>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a class="text-white" >{{ Auth::user()->name }}</a>
  @if(Auth::user()->role == 'Student')
  <a class="text-warning" >{{ Auth::user()->role }}</a>
  <a href="{{ route('profile.edit') }}" class="mt-3">MY PROFILE</a>
  <a href="#" onclick="classes()">CLASS</a>
  <a href="#" onclick="tutor()">APPLY FOR A TUTOR</a>
@elseif(Auth::user()->role == 'Instructor')
  <a class="text-primary" >{{ Auth::user()->role }}</a>
  <a href="{{ route('profile.edit') }}" class="mt-3">MY PROFILE</a>
  <a href="#" onclick="instructorclass()">CLASS</a>
  <a href="#" onclick="instructortutor()">STUDENTS</a>
@else
  <a class="text-info" >{{ Auth::user()->role }}</a>
  <a href="{{ route('profile.edit') }}" class="mt-3">MY PROFILE</a>
  <a href="#" onclick="students()">STUDENTS</a>
  <a href="#" onclick="instructors()">INSTRUCTORS</a>
@endif
 
  
  <form method="POST" action="{{ route('logout') }}">
  @csrf
  <a href="route('logout')"onclick="event.preventDefault(); this.closest('form').submit();" > {{ __('LOG OUT') }}</a>
</form>
</div>
<div id="main">
<span onclick="openNav()"><i class="fa fa-arrow-right" aria-hidden="true"></i> OPEN</span>
@if(Auth::user()->role == 'Student')
<div id="welcome">
    <h1 class="text-4xl text-center" >Welcome Student</h1></div>
<div id="class" style="display:none;" class="text-3xl text-center">CLASSES</div>
<div id="tutor" style="display:none;" class="text-3xl text-center">TUTOR</div>
@elseif(Auth::user()->role == 'Instructor')
<div  id="instructorwelcome">
    <h1 class="text-4xl text-center">Welcome Instructor</h1></div>
<div id="instructorclass" style="display:none;" class="text-3xl text-center">CLASSES</div>
<div id="instructortutor" style="display:none;" class="text-3xl text-center">STUDENT'S LIST</div>
@else
<div id="adminwelcome">
    <h1 class="text-4xl text-center" >Welcome Admin</h1></div>
<div id="students" style="display:none;" class="text-3xl text-center">Students List</div>
<div id="instructors" style="display:none;" class="text-3xl text-center">Instructors List</div>
@endif

</div>
</x-app-layout>
<script type="text/javascript" src="js/dashboard.js"></script>
  </body>
</html>