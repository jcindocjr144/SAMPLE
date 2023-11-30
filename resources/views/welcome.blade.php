<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Students Learning Assistance</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="shorcut icon" href="IMAGES/logo.png">
  <link rel="stylesheet" href="CSS/sla.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="border-2 navbar navbar-expand-sm navbar-dark bg-secondary border-bottom border-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"><img src="IMAGES/logo.png" width="30" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="text-white nav-link" href="#" onclick="home()">Home</a>
        </li>
        <li class="nav-item">
          <a class="text-white nav-link" href="#" onclick="about()">About</a>
        </li>

        <li class="nav-item">
          <a class="text-white nav-link" href="#" onclick="contact()">Contact us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="text-white nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Tutorials</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" onclick="html()">HTML</a></li>
            <li><a class="dropdown-item" onclick="css()">CSS</a></li>
            <li><a class="dropdown-item" onclick="js()">Javascript</a></li>
          </ul>
        </li>
         
      </ul>
      <form class="text-white d-flex">
       <div class="dropdown">
  <a class="text-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
  style="text-decoration: none;">
   JOIN CLASS
  </a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="{{ route('login') }}">Log-in</a></li>
    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
  </ul>
</div>
      </form>
    </div>
  </div>
</nav>
<div id="home">
  <div class="home d-flex justify-content-center align-items-center">
  <h1 class="text-center text-white learn ">LEARN TO CODE WITH US</h1>
</div>
</div>
<div id="contact">
 <div class="container-fluid">
  
 
  
 </div>
</div>
<div id="about" class="about">

 <div class="container">
<div id="info" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#info" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#info" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#info" data-bs-slide-to="2"></button>
  </div>
  <div class="col-lg-12 col-12 carousel-inner">
    <div class="carousel-item active">
      <img src="IMAGES/htmltutorials.png"  class="mx-auto mt-2 d-flex w-100 rounded-4">
    </div>
    <div class="carousel-item">
      <img src="IMAGES/csstutorials.png"  class="mx-auto mt-2 d-flex w-100 rounded-4">

    </div>
    <div class="carousel-item">
      <img src="IMAGES/javascripttutorials.png"  class="mx-auto mt-2 d-flex w-100 rounded-4">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#info" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#info" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</div>
</div>


<div id="html" style="display:none;"> 
<div class="row">

  <div class="col-lg-3 col-3">
    <button onclick="h1()" class="mt-1 button ms-1 w-100">Home</button>
    <button onclick="h2()" class="mt-1 button ms-1 w-100">Intro</button>
    <button onclick="h3()" class="mt-1 button ms-1 w-100">Elements</button>
  </div>

  <div class="col-lg-8 col-8">
    <div id="h1" style="display:none;">
    <h1 class="text-center">HTML</h1>

    <h3>What in <span class="red">HTML</span> means?</h3>
    <p>HTML, or Hypertext Markup Language, is a markup language for the web that defines the structure of web pages. It is one of the most basic building blocks of every website, so it's crucial to learn if you want to have a career in web development.</p>
    <img src="IMAGES/html.png">


    <h3>What is <span class="red">HTML</span>  known for?</h3>
    <p>HyperText Markup Language (HTML) is the basic scripting language used by web browsers to render pages on the world wide web. HyperText allows a user to click a link and be redirected to a new page referenced by that link.</p>
    <img src="IMAGES/html1.jpg">


    <h3>How do <span class="red">HTML</span>  work?</h3>
    <p>How does HTML work? Quite simply, HTML works by telling the internet browser how to display the page. First, the author uses a basic text editor on the computer (such as TextEdit for Mac) to create their HTML document. The author then fills their HTML document with a series of HTML elements, using HTML tags.</p>
    <h3>Is <span class="red">HTML</span>  still coding?</h3>
    <p>When you write HTML and CSS, you're still writing lines of code, albeit in a markup language, not a programming language. At its core, you're still codifying information to be used in the browser.</p>
    <h3>What is <span class="red">HTML</span>  symbols?</h3>
    <p>HTML symbols like mathematical operators, arrows, technical symbols and shapes, are not present on a normal keyboard. To add these symbols to an HTML page, you can use the HTML entity name. If no entity name exists, you can use the entity number.</p>





    </div>
    <div class="col-lg-1 col-1 "></div>
    <div id="h2" style="display:none;">
    <h1 class="text-center">Introduction</h1>

    </div>

    <div id="h3" style="display:none;">
    <h1 class="text-center">Elements</h1>
    </div>

</div>
</div>
</div>


<div id="css" style="display:none"> 
<h1>CSS Tutorial</h1>
<p>CSS is the language we use to style an HTML document.</p>
</div>


<div id="js" style="display:none"> 
<h1>Javascript Tutorial</h1>
<p>JavaScript is the world's most popular programming language.</p>
</div>

<script type="text/javascript" src="JS/sla.js"></script>
    </body>
</html>
