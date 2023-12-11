<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Students Learning Assistance</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="shorcut icon" href="IMAGES/logo.png">
  <link rel="stylesheet" href="CSS/activity.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
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
          <a class="text-white nav-link" href="/" onclick="home()">Home</a>
        </li>

      </ul>
      <form class="text-white d-flex">
      @if (Route::has('login'))
                <div class="z-10 p-3 p-6 justify-content-end d-flex align-text-end sm:fixed sm:top-0 sm:right-0">
                @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="text-decoration:none; COLOR:WHITE">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-white dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="text-decoration:none;">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-white ms-3 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="text-decoration:none;">Register</a>
                       
                           @endif
                    @endauth
                </div>
            @endif
      </form>
    </div>
  </div>
</nav><div id="mySidenav" class="sidenav">
  <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
  <button class="dropdown-btn">HTML
  </button>
  <div class="dropdown-container">
  <a href="#" onclick="act1()">Activity 1</a>
  <a href="#" onclick="act2()">Activity 2</a>
  <a href="#" onclick="act3()">Activity 3</a>
  <a href="#" onclick="act4()">Activity 4</a>
  <a href="#" onclick="act5()">Activity 5</a>
  </div>
  <button class="dropdown-btn">CSS
  </button>
  <div class="dropdown-container">
  <a href="#" onclick="act6()">Activity 1</a>
  <a href="#" onclick="act7()">Activity 2</a>
  <a href="#" onclick="act8()">Activity 3</a>
  <a href="#" onclick="act9()">Activity 4</a>
  <a href="#" onclick="act10()">Activity 5</a>
  </div>
  <button class="dropdown-btn">JAVASCRIPT
  </button>
  <div class="dropdown-container">
  <a href="#" onclick="act11()">Activity 1</a>
  <a href="#" onclick="act12()">Activity 2</a>
  <a href="#" onclick="act13()">Activity 3</a>
  <a href="#" onclick="act14()">Activity 4</a>
  <a href="#" onclick="act15()">Activity 5</a>
  </div>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="fa fa-arrow-right" aria-hidden="true"></i> OPEN</span>
    <div id="act1" style="display:none;" class="mt-5">
        <h1 class="text-center">HTML Activity no.1</h1>
        <div class="container">
        <p class="mt-5 text-center">Complete the following:</p>
        <h4 class="text-center ">_p_This is a paragraph._/p_</h4></div>
        <input type="text" id="string1" class="mx-auto mt-3 string d-block">
        <input type="text" id="string2" value="<p>This is a paragraph.</p>" style="display: none;">
        <br>
        <div class="text-center">
        <button class="btn btn-primary" onclick="compareStrings1()">Submit</button>
        <button type="button" class="btn btn-primary" onclick="show1()">Show Answer</button></div>
    </div>
    
    <div id="act2" style="display:none;" class="mt-5">
        <h1 class="text-center">HTML Activity no.2</h1>
        <div class="container">
        <p class="mt-5 text-center">Complete the following:</p>
        <h4 class="text-center ">____ is the standard markup language used to create and design <br> documents on the World Wide Web</h4></div>
        <input type="text" id="string3" class="mx-auto mt-3 string d-block">
        <input type="text" id="string4" value="html" style="display: none;">
        <br>
        <div class="text-center">
        <button class="btn btn-primary" onclick="compareStrings2()">Submit</button>
        <button type="button" class="btn btn-primary" onclick="show2()">Show Answer</button>
    </div>
    </div>
    <div id="act3" style="display:none;" class="mt-5">
        <h1 class="text-center">HTML Activity no.3</h1>
        <div class="container">
        <p class="mt-5 text-center">Complete the following:</p>
        <h4 class="text-center ">______ is an element that contains meta-information about the HTML documents,<br> such as title, character set, styles, and scripts?</h4></div>
        <input type="text" id="string5" class="mx-auto mt-3 string d-block">
        <input type="text" id="string6" value="<head>" style="display: none;">
        <br>
        <div class="text-center">
        <button class="btn btn-primary" onclick="compareStrings3()">Submit</button>
        <button type="button" class="btn btn-primary" onclick="show3()">Show Answer</button>
    </div>
    </div>
    <div id="act4" style="display:none;" class="mt-5">
        <h1 class="text-center">HTML Activity no.4</h1>
        <div class="container">
        <p class="mt-5 text-center">Complete the following:</p>
        <h4 class="text-center">______ is an HTML tags can have attributes that provide additional <br> information about the element. </h4></div>
        <input type="text" id="string7" class="mx-auto mt-3 string d-block">
        <input type="text" id="string8" value="Attributes" style="display: none;">
        <br>
        <div class="text-center">
        <button class="btn btn-primary" onclick="compareStrings4()">Submit</button>
        <button type="button" class="btn btn-primary" onclick="show4()">Show Answer</button>
    </div></div>
    <div id="act5" style="display:none;" class="mt-5">
        <h1 class="text-center">HTML Activity no.5</h1>
        <div class="container">
        <p class="mt-5 text-center">Complete the following:</p>
        <h4 class="text-center">Applies inline styles to an HTML element. Style include CSS properties and values.</h4></div>
        <input type="text" id="string9" class="mx-auto mt-3 string d-block">
        <input type="text" id="string10" value="style" style="display: none;">
        <br>
        <div class="text-center">
        <button class="btn btn-primary" onclick="compareStrings5()">Submit</button>
        <button type="button" class="btn btn-primary" onclick="show5()">Show Answer</button>
        </div></div>
    <div id="act6" style="display:none;" class="mt-5">
        <h1 class="text-center">CSS Activity no.1</h1>
        <div class="container">
        <p class="mt-5 text-center">Complete the following:</p>
        <h4 class="text-center">_________ Selector : Selects all instances of a specified HTML element.</h4></div>
        <input type="text" id="string11" class="mx-auto mt-3 string d-block">
        <input type="text" id="string12" value="Element" style="display: none;">
        <br>
        <div class="text-center">
        <button class="btn btn-primary" onclick="compareStrings6()">Submit</button>
        <button type="button" class="btn btn-primary" onclick="show6()">Show Answer</button>
    </div></div>
    <div id="act7" style="display:none;" class="mt-5">
        <h1 class="text-center">CSS Activity no.2</h1>
        <div class="container">
        <p class="mt-5 text-center">Complete the following:</p>
        <h4 class="text-center">______ is a style sheet language used to describe the presentation <br> of a document written in HTML (Hypertext Markup Language) <br> or XML (eXtensible Markup Language)</h4></div>
        <input type="text" id="string13" class="mx-auto mt-3 string d-block">
        <input type="text" id="string14" value="style" style="display: none;">
        <br>
        <div class="text-center">
        <button class="btn btn-primary" onclick="compareStrings7()">Submit</button>
        <button type="button" class="btn btn-primary" onclick="show7()">Show Answer</button>
        </div></div>
    <div id="act8" style="display:none;" class="mt-5">
        <h1 class="text-center">CSS Activity no.3</h1>
        <div class="container">
        <p class="mt-5 text-center">Complete the following:</p>
        <h4 class="text-center">RGB colors are represented using the _____ function, specifying <br> the intensity of red, green, and blue.</h4></div>
        <input type="text" id="string15" class="mx-auto mt-3 string d-block">
        <input type="text" id="string16" value="rgb()" style="display: none;">
        <br>
        <div class="text-center">
        <button class="btn btn-primary" onclick="compareStrings8()">Submit</button>
        <button type="button" class="btn btn-primary" onclick="show8()">Show Answer</button>
        </div></div>
    <div id="act9" style="display:none;" class="mt-5">
        <h1 class="text-center">CSS Activity no.4</h1>
        <div class="container">
        <p class="mt-5 text-center">Complete the following:</p>
        <h4 class="text-center">____ are the space outside an element, and they help control <br> the spacing between elements on a webpage.</h4></div>
        <input type="text" id="string17" class="mx-auto mt-3 string d-block">
        <input type="text" id="string18" value="margin" style="display: none;">
        <br>
        <div class="text-center">
        <button class="btn btn-primary" onclick="compareStrings9()">Submit</button>
        <button type="button" class="btn btn-primary" onclick="show9()">Show Answer</button>
        </div></div>
    <div id="act10" style="display:none;" class="mt-5">
        <h1 class="text-center">CSS Activity no.5</h1>
        <div class="container">
        <p class="mt-5 text-center">Complete the following:</p>
        <h4 class="text-center">______ describes the aspect of the selected element that you want to style.</h4></div>
        <input type="text" id="string19" class="mx-auto mt-3 string d-block">
        <input type="text" id="string20" value="Property" style="display: none;">
        <br>
        <div class="text-center">
        <button class="btn btn-primary" onclick="compareStrings10()">Submit</button>
        <button type="button" class="btn btn-primary" onclick="show10()">Show Answer</button>
        </div></div>
    <div id="act11" style="display:none;" class="mt-5">
        <h1 class="text-center">JAVASCRIPT Activity no.1</h1>
        <div class="container">
        <p class="mt-5 text-center">Complete the following:</p>
        <h4 class="text-center">_______ is a versatile language that can be used both <br> on the client side (in web browsers) and on the server side (using platforms like Node.js).</h4></div>
        <input type="text" id="string21" class="mx-auto mt-3 string d-block">
        <input type="text" id="string22" value="JavaScript" style="display: none;">
        <br>
        <div class="text-center">
        <button class="btn btn-primary" onclick="compareStrings11()">Submit</button>
        <button type="button" class="btn btn-primary" onclick="show11()">Show Answer</button>
        </div></div>
    <div id="act12" style="display:none;" class="mt-5">
        <h1 class="text-center">JAVASCRIPT Activity no.2</h1>
        <div class="container">
        <p class="mt-5 text-center">Complete the following:</p>
        <h4 class="text-center">The _____ tag is used to embed or reference JavaScript code within an HTML document.</h4></div>
        <input type="text" id="string23" class="mx-auto mt-3 string d-block">
        <input type="text" id="string24" value="<script>" style="display: none;">
        <br>
        <div class="text-center">
        <button class="btn btn-primary" onclick="compareStrings12()">Submit</button>
        <button type="button" class="btn btn-primary" onclick="show12()">Show Answer</button>
        </div></div>
    <div id="act13" style="display:none;" class="mt-5">
        <h1 class="text-center">JAVASCRIPT Activity no.3</h1>
        <div class="container">
        <p class="mt-5 text-center">Complete the following:</p>
        <h4 class="text-center">______________ JavaScript allows developers to manipulate the content <br> and structure of a web page in real-time.</h4></div>
        <input type="text" id="string25" class="mx-auto mt-3 string d-block">
        <input type="text" id="string26" value="Dynamic Content Manipulation" style="display: none;">
        <br>
        <div class="text-center">
        <button class="btn btn-primary" onclick="compareStrings13()">Submit</button>
        <button type="button" class="btn btn-primary" onclick="show13()">Show Answer</button>
        </div></div>
    <div id="act14" style="display:none;" class="mt-5">
        <h1 class="text-center">JAVASCRIPT Activity no.4</h1>
        <div class="container">
        <p class="mt-5 text-center">Complete the following:</p>
        <h4 class="text-center">JavaScript is an _______________ language, allowing developers <br> to create and manipulate objects.</h4></div>
        <input type="text" id="string27" class="mx-auto mt-3 string d-block">
        <input type="text" id="string28" value="object-oriented" style="display: none;">
        <br>
        <div class="text-center">
        <button class="btn btn-primary" onclick="compareStrings14()">Submit</button>
        <button type="button" class="btn btn-primary" onclick="show14()">Show Answer</button>
        </div></div>
    <div id="act15" style="display:none;" class="mt-5">
        <h1 class="text-center">JAVASCRIPT Activity no.5</h1>
        <div class="container">
        <p class="mt-5 text-center">Complete the following:</p>
        <h4 class="text-center">The __________ element is used to provide alternate content for users who have disabled <br> JavaScript in their browsers or if the browser doesn't support JavaScript.</h4></div>
        <input type="text" id="string29" class="mx-auto mt-3 string d-block">
        <input type="text" id="string30" value="<noscript>" style="display: none;">
        <br>
        <div class="text-center">
        <button class="btn btn-primary" onclick="compareStrings15()">Submit</button>
        <button type="button" class="btn btn-primary" onclick="show15()">Show Answer</button>
        </div></div>
    <script src="js/activity.js"></script>
</body>
</html>
