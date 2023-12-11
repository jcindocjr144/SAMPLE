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
  <a href="{{ route('profile.edit') }}" class="mt-5">MY PROFILE</a>
  <a href="/students" onclick="students()">STUDENTS</a>
  <a href="#" onclick="instructors()">INSTRUCTORS</a>
  <form method="POST" action="{{ route('logout') }}">
  @csrf
  <a href="route('logout')"onclick="event.preventDefault(); this.closest('form').submit();" > {{ __('LOG OUT') }}</a>
</form>
</div>
<div id="main">
<span onclick="openNav()"><i class="fa fa-arrow-right" aria-hidden="true"></i> OPEN</span>

</div>
</x-app-layout>
<script type="text/javascript" src="js/dashboard.js"></script>
  </body>
</html>