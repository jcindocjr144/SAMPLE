<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Students Learning Assistance</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
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
        <li class="nav-item">
          <a class="text-white nav-link" href="#" onclick="tutorials()">Tutorials</a>
        </li>
        <li class="nav-item">
          <a class="text-white nav-link" href="/activity">Activity</a>
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
</nav>
<div id="home">
  <div class="home d-flex justify-content-center align-items-center">
  <h1 class="text-center text-white learn ">LEARN TO CODE WITH US</h1>
</div>
</div>
<div id="contact" style="display:none;">
  <div class="contact">
        <h1>Contact Us</h1>
        <div class="container">
            <div class="main">
                <div class="content">
                    <h2>Contact Us</h2>
                    <form action="#" method="post">
                        <input type="text" name="name" placeholder="Enter Your Name">
                        <input type="email" name="email" placeholder="Enter Your Email">
                        <textarea name="message" placeholder="Your Message"></textarea>                   
             <button type="submit" class="btn">Send <i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
                <div class="form-img">
                    <img src="images/images.jpg" class="w-100">
                </div>
            </div>
        </div>
    </div> 
 </div>
</div>
<div id="about" style="display:none; background-color: rgb(203 213 225); height:900px;">
    <div class="container-fluid">
        <h1 class="pt-3 text-center fw-light text-uppercase" style="font-family: monospace;">The Development Team</h1></div>
   
 <div class="row"  style="height: 100px;">
    <div class="p-4 col-lg-4 col-4 d-flex justify-content-center align-items-center ">
<a class="nav" href="#" onclick="front()" style="text-decoration: none; color: black;"><p class="text-center text-uppercase fw-semibold ">Frontend Developer</p></a>
</div>
<div class=" col-lg-4 col-4 d-flex justify-content-center align-items-center">
  <a class="nav" href="#" onclick="documentation()" style="text-decoration: none; color: black;"><p class="text-center text-uppercase fw-semibold">Documentations</p></a>
 </div>
<div class=" col-lg-4 col-4 d-flex justify-content-center align-items-center">
  <a  class="nav" href="#" onclick="back()" style="text-decoration: none; color: black;"><p class="text-center text-uppercase fw-semibold">Backend Developer & Tester</p></a>
 </div>
<hr style="width:90%; margin-left:5%; height:5px; background:black;">
 </div>
 <div id="front" style="display:block; ">
  <div class="row rounded-5" >
    <h1 class="p-3 text-center fw-light text-u fw-bold">Frontend Developers</h1>
    <div class="mt-1 col-lg-6 col-12 ">
      <div class="card">
        <img src="images/1.jpg" alt="Avatar" style="width:40%" class="p-3 mx-auto d-block rounded-5">
        <div class="container">
    <h1 class="text-center">Steven son Nava</h1>
  <p style="font-family: sans-serif; font-size: larger; padding-top:20px;">Proficient in [frontend technologies, frameworks, and languages, e.g., HTML5, CSS3, JavaScript, React], I bring a strong foundation in UI/UX principles and a commitment to delivering visually stunning and functional web applications.</p>
  </div></div></div>
  
  <div class="mt-1 col-lg-6 col-12 ">
    <div class="card">
      <img src="images/2.jpg" alt="Avatar" style="width:40%" class="p-3 mx-auto d-block rounded-5">
      <div class="container">
  <h1 class="text-center">Gilgremer Parado</h1>
  <p style="font-family: sans-serif; font-size: larger; padding-top:20px;">My expertise lies in collaborating with cross-functional teams to implement pixel-perfect designs, optimize website performance, and ensure a seamless user experience across devices. I am adept at leveraging modern frontend frameworks to create dynamic and interactive interfaces that enhance user engagement.</p>
  </div></div></div></div></div>

  <div id="documentation" style="display: none;">
    <div class="row" >

      
      <h1 class="p-3 text-center fw-light text-u fw-bold">Documentation</h1>
      <div class="mt-1 col-lg-6 col-12 ">
        <div class="card">
          <img src="images/3.jpg" alt="Avatar" style="width:30%" class="p-3 mx-auto d-block rounded-5">
          <div class="container">
      <h1 class="text-center">Jolbie Melecio</h1>
    <p style="font-family: sans-serif; font-size: larger; padding-top:20px;">Proficient in creating meticulous and accessible documentation to enhance project clarity and streamline collaboration. Skilled in crafting clear API documentation, technical guides, and user manuals.</p>
    </div></div></div>
    
    <div class="mt-1 col-lg-6 col-12 ">
      <div class="card">
        <img src="images/4.jpg" alt="Avatar" style="width:40%" class="p-3 mx-auto d-block rounded-5">
        <div class="container">
    <h1 class="text-center">Sherly Mae Escolar</h1>
    <p style="font-family: sans-serif; font-size: larger; padding-top:20px;">Adept at maintaining documentation throughout the development lifecycle to ensure accuracy and relevance. Dedicated to fostering effective communication and knowledge sharing within development teams.</p>
    </div></div></div></div></div>

<div id="back" style="display:none;">
  <div class="row" >
    <h1 class="p-3 text-center fw-light text-u fw-bold ">Backend Developers & Tester </h1>
    <div class="mt-1 col-lg-6 col-12 " >
      <div class="card">
        <img src="images/5.jpg" alt="Avatar" style="width:40%" class="p-3 mx-auto d-block rounded-5">
        <div class="container">
    <h1 class="text-center">Jerson C Indoc Jr.</h1>
  <p style="font-family: sans-serif; font-size: larger; "> I excel in designing and implementing efficient server-side architectures, I bring a track record of delivering high-quality code on time and within project scope. ahsdhasgdahsda</p>
  </div></div></div>
  
  <div class="mt-1 col-lg-6 col-12">
    <div class="card">
      <img src="images/6.jpg" alt="Avatar" style="width:40% " class="p-3 mx-auto d-block rounded-5">
      <div class="container">
  <h1 class="text-center">Klien Brigoli</h1>
  <p style="font-family: sans-serif; font-size: larger; padding-top: 20px;">My expertise extends to optimizing database performance, implementing RESTful APIs, and collaborating closely with cross-functional teams to align technical solutions with business goals. Adept at troubleshooting and resolving complex issues. </p>
  </div></div></div></div></div>
</div>
<div id="tutorials" style="display:none;">
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
<button class="text-white dropdown-btn">HTML</button>
<div class="dropdown-container">
  <a href="#" class="text-white " onclick="intro()">Introduction</a>
  <a href="#" class="text-white " onclick="elements()">Elements</a>
  <a href="#" class="text-white " onclick="attrib()">Attributes</a>
  <a href="#" class="text-white " onclick="heading()">Headings</a>
  <a href="#" class="text-white " onclick="format()">Formatting</a>
  <a href="#" class="text-white " onclick="comments()">Comments</a>
  <a href="#" class="text-white " onclick="linking()">Links</a>
</div>
</button>
<button class="text-white dropdown-btn">CSS</button>
<div class="dropdown-container">
  <a href="#" class="text-white " onclick="introcss()">Introduction</a>
  <a href="#" class="text-white " onclick="syntax()">Syntax</a>
  <a href="#" class="text-white " onclick="selectors()">Selectors</a>
  <a href="#" class="text-white " onclick="colors()">Colors</a>
  <a href="#" class="text-white " onclick="backgrounds()">Backgrounds</a>
  <a href="#" class="text-white " onclick="borders()">Borders</a>
  <a href="#" class="text-white " onclick="margins()">Margins</a>
</div>
</i>
</button>
<button class="text-white dropdown-btn">Javascript</i></button>
<div class="dropdown-container">
  <a href="#" class="text-white " onclick="introjs()">Introduction</a>
  <a href="#" class="text-white " onclick="script()">Script Tag</a>
  <a href="#" class="text-white " onclick="strings()">String</a>
  <a href="#" class="text-white " onclick="statements()">Statements</a>
  <a href="#" class="text-white " onclick="functions()">Functions</a>
  <a href="#" class="text-white " onclick="variables()">Variables</a>
  <a href="#" class="text-white " onclick="operators()">Operators</a>
</div>
</button>
</div>
<div id="main" display:none;>
  <p class="openbtn" onclick="openNav()"><i class="fa fa-arrow-right" aria-hidden="true"></i> OPEN</p>
  <div id="welcome" class="col-12">
  <h1 class="text-center">WELCOME TO STUDENTS LEARNING ASSISTANCE</h1>
  <h3 class="text-center">Tutorials</h3>
  <img src="images/tutorials.gif" class="mx-auto mt-5 d-block w-50"></div>
  <div id="intro" class="text-center" style="display:none;">
    <h1>Introduction</h1>
  <p class="p-3 text-start">
    HTML, or <b>HyperText Markup Language</b>, is the standard markup language used to create and design 
    documents on the World Wide Web. It's a fundamental building block for web development, providing 
    a way to structure content on a webpage.</p>
    <p class="p-3 text-start">Here are some key points about HTML:</p>
    <p class="p-3 text-start">1. <b>Markup Language:</b> HTML is a markup language, not a programming language.
       It uses tags to define elements within a document. These tags instruct the browser
        on how to display the content.<br>
     2. <b>Structure:</b> HTML provides a hierarchical structure for web content. Elements like headings,
     paragraphs, lists, images, links, and more are used to organize and format the information.
    <br>
    3. <b>HTML</b> tags are used to define elements on a webpage. Tags are enclosed in angle brackets (e.g., <code class="w3-codespan">&lt;tag&gt;</code>), 
      and most have opening and closing tags to define the beginning and 
      end of the element. For example, a paragraph is defined using <code class="w3-codespan">&lt;p&gt;</code> 
      and <code class="w3-codespan">&lt;/p&gt;</code> tags.<br>
    4. <b>Attributes:</b> HTML tags can have attributes that provide additional information about the element. 
    Attributes appear within the opening tag and usually come in name/value pairs. For instance, the src attribute 
    in an image tag (<code class="w3-codespan">&lt;img&gt;</code>) specifies the image source.<br>
    5. <b>Web Page Skeleton: </b>A basic HTML document includes elements such as <code class="w3-codespan">&lt;html&gt;</code>, <code class="w3-codespan">
      &lt;head&gt;</code>, and <code class="w3-codespan">&lt;body&gt;</code>. The <code class="w3-codespan">
        &lt;head&gt;</code> contains meta-information about the document, while the <body> contains the visible content.
    </p>
    </div>
  <div id="elements" class="text-center" style="display:none;">
  <h1>Elements</h1>
  <p class="p-3 text-start">HTML elements are the building blocks of an HTML document. Each element is represented by a tag, 
    and tags are used to define and structure content on a webpage. HTML elements can include everything from simple text to complex multimedia 
    components. Here are some commonly used HTML elements:</p>
    <p class="p-3 text-start">1. <b><code class="w3-codespan">&lt;!DOCTYPE html&gt;</code> :</b> Declares the HTML version and type.<br>
    2. <b><code class="w3-codespan">&lt;html&gt;</code> :</b>The root element that wraps all the content on the page.<br>
    3. <b><code class="w3-codespan">&lt;head&gt;</code> :</b>Contains meta-information about the HTML document, such as the title, character set, styles, and scripts.<br>
    <code class="w3-codespan">&lt;title&gt;</code>: Sets the title of the HTML document.<br>
    <code class="w3-codespan">&lt;meta&gt;</code>: Provides metadata about the HTML document, like character set, viewport settings, etc.<br>
    <code class="w3-codespan">&lt;link&gt;</code>: Defines relationships between the current document and external resources such as stylesheets.<br>
    4. <b><code class="w3-codespan">&lt;body&gt;</code>:</b> Contains the content of the HTML document, including text, images, links, and other elements.<br>
    5. <b>Headings: </b><code class="w3-codespan">&lt;h1&gt;</code> to <code class="w3-codespan">&lt;h6&gt;</code>:
     Define headings of different levels.<br>
     6. <b>Paragraphs: </b> <code class="w3-codespan">&lt;p&gt;</code>: Defines a paragraph.</code><br>
     7. <b>Lists: </b><br><code class="w3-codespan">&lt;ul&gt;</code> : Defines an unordered list.<br><code class="w3-codespan">&lt;ol&gt;</code> : Defines an ordered list.
     <br><code class="w3-codespan">&lt;li&gt;</code> : Defines a list item.<br>
     8. <b>Links: </b><code class="w3-codespan">&lt;a&gt;</code>: Defines a hyperlink.
    </p>
  </div>
  <div id="attrib" class="text-center" style="display:none;">
  <h1>Attributes</h1>
<p class="p-3 text-start">HTML attributes provide additional information about HTML elements and are always included in the opening tag. 
  Here are some common attributes used in HTML:</p>
  <p p class="p-3 text-start">1. <b>id:</b> Specifies a unique identifier for an HTML element. It must be unique within the HTML document.<br>
  2. <b>class:</b> Specifies one or more class names for an HTML element. It is often used for styling multiple elements with the same styles.<br>
  3. <b>style:</b> Applies inline styles to an HTML element. Styles include CSS properties and values.<br>
  4. <b>src:</b> Specifies the source URL of embedded content, such as images, audio, or video.<br>
  5. <b>alt:</b> Provides alternative text for images. It is displayed if the image cannot be loaded.<br>
  6. <b>href:</b> Specifies the URL of a linked resource, such as a webpage or a file.<br>
  7. <b>width and height:</b> Sets the width and height of an element, such as an image or a table cell.<br>
  8. <b>colspan and rowspan:</b> Specifies the number of columns or rows a table cell should span.<br>
  9. <b>Disabled:</b> Disables an input element, preventing user interaction.<br>
  10. <b>placeholder:</b> Provides a short hint that describes the expected value of an input field.
</p>
<p class="p-3 text-start">These are just a few examples, and there are many more attributes in HTML that serve various purposes. Understanding how
  to use attributes is essential for building well-structured and semantically meaningful web documents.</p>
</div>
  <div id="heading" class="text-center" style="display:none;">
  <h1>Headings</h1>
<p class="p-3 text-start">HTML provides heading elements to define headings or titles in a document. Headings are used to structure the 
  content hierarchically, with <code class="w3-codespan">&lt;h1&gt;</code> being the highest level and <code class="w3-codespan">&lt;h6&gt;</code> the lowest. 
  Here are the heading elements in HTML:</p>
<p class="p-3 text-start">1. <b><code class="w3-codespan">&lt;h1&gt;</code>:</b> Defines the main heading.
 It is typically used for the main title of the page.<br>
 Example: <code class="w3-codespan">&lt;h1&gt;</code><span style="font-size:32px;">This is a Heading 1</span><code class="w3-codespan">&lt;/h1&gt;</code><br>
2. <b><code class="w3-codespan">&lt;h2&gt;</code>:</b> Represents a subheading. It is used for section titles or subtitles.<br>
Example: <code class="w3-codespan">&lt;h2&gt;</code><span style="font-size:24px;">This is a Heading 2</span><code class="w3-codespan">&lt;/h2&gt;</code><br>
3. <b><code class="w3-codespan">&lt;h3&gt;</code> to <code class="w3-codespan">&lt;h6&gt;:</code></b> These elements represent progressively lower levels of subheadings.<br>
Example:<br><code class="w3-codespan">&lt;h3&gt;</code><span style="font-size:18.72px;">This is a Heading 3</span><code class="w3-codespan">&lt;/h3&gt;</code><br>
<code class="w3-codespan">&lt;h4&gt;</code><span style="font-size:16px;">This is a Heading 4</span><code class="w3-codespan">&lt;/h4&gt;</code><br>
<code class="w3-codespan">&lt;h5&gt;</code><span style="font-size:13.28px;">This is a Heading 5</span><code class="w3-codespan">&lt;/h5&gt;</code><br>
<code class="w3-codespan">&lt;h6&gt;</code><span style="font-size:10.72px;">This is a Heading 6</span><code class="w3-codespan">&lt;/h6&gt;</code><br>
</p>
</div>
  <div id="format" class="text-center" style="display:none;">
  <h1>Formatting</h1>
<p class="p-3 text-start">Formatting in HTML is achieved through a combination of HTML elements and, often, Cascading Style Sheets (CSS). 
  HTML provides a set of elements that define the structure and content of a document, while CSS is used to control the presentation and 
  layout of the HTML elements. Here are some key aspects of formatting in HTML:</p>
<p class="p-3 mb-3 text-start">1. <b>Text Formatting:</b><br>• <code class="w3-codespan">&lt;b&gt;</code> and <code class="w3-codespan">&lt;strong&gt;</code>: Bold text.<br>
• <code class="w3-codespan">&lt;i&gt;</code> and <code class="w3-codespan">&lt;em&gt;</code>: Italicized text.<br>
• <code class="w3-codespan">&lt;u&gt;</code>: Underlined text.<br>
• <code class="w3-codespan">&lt;s&gt;</code>: Strikethrough text.<br>
2. <b>Heading Elements:</b><br>
• <code class="w3-codespan">&lt;h1&gt;</code> to <code class="w3-codespan">&lt;h6&gt;:</code>: Define heading levels, with <code class="w3-codespan">&lt;h1&gt;</code>
 being the highest level and <code class="w3-codespan">&lt;h6&gt;</code> the lowest.<br>
 3. <b>Lists:</b> <br>
 • <code class="w3-codespan">&lt;ul&gt;</code>: Defines an unordered (bulleted) list.<br>
 • <code class="w3-codespan">&lt;ol&gt;</code>: Defines an ordered (numbered) list.<br>
 • <code class="w3-codespan">&lt;li&gt;</code>: Defines a list item.<br>
 4. <b>Tables:</b> <br>
 • <code class="w3-codespan">&lt;table&gt;</code>: Defines a table.<br>
 • <code class="w3-codespan">&lt;tr&gt;</code>: Defines a table row.<br>
 • <code class="w3-codespan">&lt;td&gt;</code>: Defines a table cell.<br>
 • <code class="w3-codespan">&lt;th&gt;</code>: Defines a header cell in a table.<br>
</p>
</div>
  <div id="comments" class="text-center" style="display:none;">
  <h1>Comments</h1>
<p class="p-3 text-start">In HTML, you can use the <code class="w3-codespan">&lt;!-- ... --&gt;</code> syntax to add comments. HTML
 comments are not visible on the web page, and they are used to include notes or explanations within the HTML code. Here's an example:</p>
 <h3 class="p-3 text-start">In the example above:</h3>
 <p class="p-3 text-start">• The comment <code class="w3-codespan">&lt;!-- This is a comment. It won't be visible on the web page. --&gt;</code> is placed outside any HTML element.<br>
 • The comment <code class="w3-codespan">&lt;!-- This is a comment within an element --&gt;</code> is placed within the <code class="w3-codespan">&lt;h1&gt;</code>  element.<br>
 • The comment <code class="w3-codespan">&lt;!-- This is another comment --&gt;</code> is placed within the <code class="w3-codespan">&lt;p&gt;</code>  element.<br>
</p>
</div>
  <div id="linking" class="text-center" style="display:none;">
  <h1>Links</h1>
<p class="p-3 text-start">In HTML, links are created using the <code class="w3-codespan">&lt;a&gt;</code> (anchor) element. Links are used to navigate between pages, link to resources, or create interactive elements on a webpage. 
  The <a> element can be used to create both text links and image links.</p>
  <p class="p-3 text-start">Example:<br><code class="w3-codespan">&lt;a href="https://www.example.com"&gt;</code>Visit Example.com<code class="w3-codespan">&lt;/a&gt;</code><br><br>
  This creates a link with the text "Visit Example.com," and when a user clicks on it, they will be directed to the URL specified in the <b>href</b> attribute.<br><br> 
  Attributes commonly used with the <code class="w3-codespan">&lt;a&gt;</code> element include:<br>1. <b>href:</b> Specifies the URL of the linked resource. This is the most crucial attribute for creating a link.<br>
 2. <b>target:</b> Specifies where to open the linked resource. For example, using <br>3. <b>target="_blank":</b> opens the link in a new browser window or tab.<br>
 4. <b>title:</b> Provides additional information about the link, typically displayed as a tooltip when the user hovers over the link.<br><br>
  Remember to use meaningful text for your links to make your content accessible and search engine-friendly. Additionally, proper styling and consistent navigation enhance the user experience on your website.
</p>
  </div>
  <div id="intcss" style="display:none;">
  <h1 class="text-center">Introduction</h1>
  <p class="p-3 text start">CSS, which stands for Cascading Style Sheets, is a style sheet language used to describe
     the presentation of a document written in HTML (Hypertext Markup Language) or XML (eXtensible Markup Language). HTML provides the structure and content of a web page, while CSS is responsible for styling and layout.</p>
  <p class="p-3 text start"><b>1. Separation of Concerns:</b> CSS allows the separation of document content (HTML) from document presentation (CSS). This separation makes it easier to manage and update the style of a website without altering its content.<br>
   <b>2. Selectors and Declarations:</b> CSS uses selectors to target HTML elements and declarations to define how those elements should be styled. A declaration consists of a property and a value, specifying the style rules.<br>
   <b>3. Cascading:</b>The term "Cascading" in CSS refers to the order of priority when multiple styles are applied to an element. Styles can be defined in various ways (inline, internal, external), and the cascade determines which style takes precedence.<br>
   <b>4. External, Internal, and Inline Styles:</b>CSS can be applied to HTML documents in three ways:</p>
   <p class="p-3 text-start"><b> External Stylesheet:</b> A separate CSS file linked to the HTML document.<br>
   <b>Internal Stylesheet: </b>CSS rules placed within a <code class="w3-codespan">&lt;style&gt;</code> element in the HTML document's <code class="w3-codespan">&lt;head&gt;</code><br>
   <b>Inline Styles: </b>CSS styles applied directly to individual HTML elements using the <code class="w3-codespan">&lt;style&gt;</code><br>
   </p>
  </div>
<div id="syntax" style="display:none;">
  <h1 class="text-center">Syntax</h1>
  <p class="p-3 text start">CSS (Cascading Style Sheets) has a specific syntax for defining styles and rules. The basic structure of a CSS rule consists of a selector and a declaration block. Here's a breakdown of the syntax:</p>
  <p class="p-3 text start">1. <b>Selector: </b>Specifies the HTML element(s) to which the style applies. It can be an element selector (e.g., p for paragraphs), <br>a class selector (e.g., .my-class), an ID selector (e.g., #my-id), or a combination of these.<br><br>
  2. <b>Declaration Block: </b>Enclosed in curly braces {}, it contains one or more declarations separated by semicolons. <br> Each declaration includes a property and its corresponding value.<br><br>
  3. <b>Property: </b>Describes the aspect of the selected element that you want to style. Examples include color, font-size, margin, etc.<br><br>
  4. <b>Value: </b>Specifies the value for the property. For instance, red for the color property, 16px for the font-size property, etc.<br>
</div>
<div id="selectors" style="display:none;">
  <h1 class="text-center">Selectors</h1>
  <p class="p-3 text start">Selectors in CSS are patterns that are used to select and style HTML elements. They define the scope of the styles you want to apply. Here are some common CSS selectors:</p>
  <p class="p-3 text start"><b>Element Selector: </b>Selects all instances of a specified HTML element.<br>
     p {<br>
      /* Styles for all paragraphs */<br>
  }<br>
  <b>Class Selector: </b>Selects elements with a specific class attribute.<br>
     .my-class {<br>
      /* Styles for elements with class="my-class" */<br>
    }<br>
 <b>ID Selector: </b>Selects a single element with a specific ID attribute.<br>
    #my-id {<br>
      /* Styles for the element with id="my-id" */<br>
  }<br>
 <b>Attribute Selector: </b>Selects elements based on the presence or value of their attributes.<br>
    input[type="text"] {<br>
      /* Styles for text input elements */<br>
  }<br>
  </p></div>
  <div id="colors" style="display:none;">
    <h1 class="text-center">Colors</h1>
    <p class="p-3 text start">In CSS, colors can be specified in several ways, including predefined color names, hexadecimal notation, RGB values, RGBA values, HSL values, and HSLA values. Here's an overview of these color formats:</p>
    <p class="p-3 text start"><b>Color Names: </b>CSS supports a set of predefined color names, such as red, blue, green, etc.<br>
      h1 {<br>
        color: red;<br>
    }<br>
    <b>Hexadecimal Notation: </b>Hexadecimal values represent RGB (Red, Green, Blue) colors. They are written as a pound sign (#) followed by six or three hexadecimal digits.<br>
    p {<br>
      color: #336699; /* Hexadecimal color */<br>
  }<br>
    <b>RGB Values: </b>RGB colors are represented using the rgb() function, specifying the intensity of red, green, and blue.<br>
    div {<br>
      background-color: rgb(255, 0, 0); /* Red */<br>
  }<br>
    <b>RGBA Values: </b>RGBA is an extension of RGB that includes an additional parameter for alpha (transparency) values. Alpha values range from 0 (completely transparent) to 1 (completely opaque).<br>
  span {<br>
    background-color: rgba(0, 128, 0, 0.5); /* Semi-transparent green */<br>
}<br>
</p>
</div>
<div id="backgrounds" style="display:none;">
  <h1 class="text-center">Backgrounds</h1>
  <p class="p-3 text start">In CSS, background properties allow you to control the appearance of the background of an element. Here are some commonly used background-related properties:</p>
  <p class="p-3 text start"><b>Background Color ('background-color'):</b> Sets the background color of an element.<br>
body {<br>
      background-color: #f0f0f0; /* Light gray background */<br>
  }<br>
  <b>Background Image ('background-image'):</b> Specifies an image to be used as the background of an element.<br>
 header {<br>
    background-image: url('header-background.jpg');<br>
}<br>
<b>Background Repeat ('background-repeat'):</b> Determines how a background image is repeated.<br>
 section {<br>
  background-repeat: no-repeat; /* Do not repeat the background image */<br>
}<br>
<b>Background Size ('background-size'):</b> Sets the size of the background image.<br>
 div {<br>
  background-size: cover; /* Cover the entire element with the background image */<br>
}
</p>
</div>
<div id="borders" style="display:none;">
  <h1 class="text-center">Borders</h1>
  <p class="p-3 text start">In CSS, the border property is used to define the style, width, and color of the borders of an element. The border property can be further broken down into individual properties for more precise control. Here are some commonly used properties related to borders:</p>
  <p class="p-3 text start">1. <b>Border Style ('border-style'): </b>Specifies the style of the border. Common values include `solid`, `dashed`,`dotted`, `double`, and `none`.<br>
    div {<br>
      border-style: solid; /* Solid border */<br>
  }<br>
2.<b>Border Width (`border-width`): </b>Sets the width of the border. It can be specified as a specific value (e.g., 2px) or using predefined values like `thin`,` medium`, or `thick`.<br>
  img {<br>
    border-width: 1px; /* 1-pixel border */<br>
}
3. <b>Border Color (`border-color`): </b>Defines the color of the border. It can be set using color names, hexadecimal values, RGB values, etc.<br>
  button {<br>
    border-color: #ff0000; /* Red border color */<br>
}<br>
4. <b>Rounded Corners (`border-radius`): </b>Creates rounded corners on an element. It can be set as a single value for all corners or individual values for each corner.<br>
  div {<br>
    border-radius: 10px; /* Rounded corners with a 10-pixel radius for all corners */<br>
}
</p>
</div>
<div id="margins" style="display:none;">
  <h1 class="text-center">Margins</h1>
  <p class="p-3 text start">In CSS, margins are the space outside an element, and they help control the spacing between elements on a webpage. The margin property is used to set the margin for all four sides of an element, but you can also use individual properties (`margin-top`, `margin-right`, `margin-bottom`, `margin-left`) for more precise control. Here are some common margin-related properties:</p>
  <p class="p-3 text start">1. <b>Margin (`margin`):</b>Sets the margin for all four sides of an element.<br>
 div {<br>
  margin: 10px; /* Equal margin of 10 pixels on all sides */<br>
}<br>
2. <b>Individual Margin Properties:</b>Sets the margin for each side of an element separately.<br>
  img {<br>
    margin-top: 5px;
    margin-right: 10px;
    margin-bottom: 5px;
    margin-left: 10px;<br>
}<br>
3. <b>Auto Margin:</b>If you set the margin to `auto`, the browser will automatically calculate the margin to center the element horizontally.<br>
div {<br>
  margin: auto; /* Auto margin for horizontal centering */<br>
}<br>
4. <b>Percentage Margin:</b>You can also use percentages for margins, which are calculated relative to the width of the containing block.<br>
 div {<br>
  margin: auto; /* Auto margin for horizontal centering */<br>
}<br>
</p>
</div>
<div id="introjs" class="text-center" style="display:none;">
  <h1>Introduction</h1>
  <p class="p-3 text-start">JavaScript is a high-level, interpreted programming language primarily known for its role in web development. It allows developers to add dynamic and interactive elements to websites. JavaScript is a versatile language that can be used both on the client side (in web browsers) and on the server side (using platforms like Node.js).</p>
  <p class="p-3 text-start">Key features and aspects of JavaScript include:<br><br>
  1. <b>Client-Side Scripting: </b>JavaScript is mainly used as a client-side scripting language, enabling developers to create interactive web pages. It can respond to user actions, such as clicks, input, and page events, and dynamically update the content without requiring a page reload.<br>
  2. <b>Dynamic Content Manipulation: </b>JavaScript allows developers to manipulate the content and structure of a web page in real-time. This includes adding, removing, or modifying HTML elements and content.<br>
  3. <b>Event-Driven Programming: </b>JavaScript is event-driven, meaning it responds to events triggered by user interactions or other programmatic events. Developers can define functions (event handlers) to execute in response to specific events like clicks, keypresses, or form submissions.<br>
  4. <b>Cross-Browser Compatibility: </b>JavaScript is supported by all major web browsers, making it a cross-browser scripting language. This enables developers to write code that works consistently across different browsers.<br>
  5. <b>Asynchronous Programming: </b>JavaScript supports asynchronous programming through features like callbacks, Promises, and async/await. This is essential for handling tasks such as fetching data from servers without blocking the execution of other code.<br>
  6. <b>Object-Oriented Programming (`OOP`): </b>JavaScript is an object-oriented language, allowing developers to create and manipulate objects. Objects can encapsulate data and behavior, making it easier to organize and structure code.<br>
  7.  <b>ECMAScript Standards: </b>JavaScript is based on ECMAScript standards, which define the language's specifications. As of my knowledge cutoff in January 2022, ECMAScript 6 (ES6) is one of the major versions that introduced several new features and improvements to the language.<br>
</p> 
</div>
<div id="script"style="display:none;">
    <h1 class="text-center">Script Tag</h1>
    <p class="p-3 text-start">In HTML, the <code class="w3-codespan">&lt;script&gt;</code> tag is used to embed or reference JavaScript code within an HTML document. This tag is essential for including JavaScript functionality on a webpage. There are a few ways to use the <`script`> tag:</p>
    <p class="p-3 text-start">1. <b>Inline Script:</b>
    You can include JavaScript directly within the HTML document using the <code class="w3-codespan">&lt;script&gt;</code> tag with the code placed between the opening <code class="w3-codespan">&lt;script&gt;</code> and closing <code class="w3-codespan">&lt;/script&gt;</code> tags. This is called inline scripting.<br>
    2. <b>External Script:</b>
    Instead of embedding JavaScript directly in the HTML file, you can create a separate external JavaScript file (with a .js extension) and include it using the src attribute of the <code class="w3-codespan">&lt;script&gt;</code> tag.<br>
    3. <b>Defer and Async Attributes:</b>
    The `defer` and `async` attributes can be used with the `<code class="w3-codespan">&lt;script&gt;</code>` tag to control the loading and execution of external scripts. `defer` ensures that the script is executed after the HTML is parsed, while `async` allows the script to be executed asynchronously (without blocking HTML parsing)<br>
    4. <b>NoScript Element:</b>
    The `<code class="w3-codespan">&lt;noscript&gt;</code>` element is used to provide alternate content for users who have disabled JavaScript in their browsers or if the browser doesn't support JavaScript. The content within `<code class="w3-codespan">&lt;noscript&gt;</code>` is displayed when JavaScript is not available.<br>
    The `<code class="w3-codespan">&lt;noscript&gt;</code>` element is used to provide alternate content for users who have disabled JavaScript in their browsers or if the browser doesn't support JavaScript. The content within `<code class="w3-codespan">&lt;noscript&gt;</code>` is displayed when JavaScript is not available.</p>
  </div> 
  <div id="strings" style="display:none;">
    <h1 class="text-center">Strings</h1>
    <p class="p-3 text-start">
 In JavaScript, a string is a sequence of characters enclosed in single (') or double (") quotes. Strings can be used to represent text and are a fundamental data type in the language. Here are some examples of working with strings in JavaScript:</p>
 <p class="p-3 text-start">1. <b>Creating Strings:</b>Using single quotes<br>
   let singleQuotedString = 'Hello, World!';<br>
 2. <b>String Concatenation: </b>Concatenating strings<br>
 3. <b>String Length: </b>Getting the length of a string<br>
 4. <b>Accessing Characters: </b>Accessing individual characters.</p>
</div>
<div id="statements"style="display:none;" >
  <h1 class="text-center">Statements</h1>
  <p class="p-3 text-start">In JavaScript, statements are individual units of code that are executed to perform specific actions. Here are some common types of statements in JavaScript:</p>
  <p class="p-3 text-start">1. <b>Variable Declaration: </b>Declares a variable using the `var`, `let`, or `const` keyword.<br>
  var x;<br> let y = 10;<br> const PI = 3.14;<br>
  2. <b>Assignment: </b>Assigns a value to a variable.<br>
  x = 5;<br>
  3. <b>Conditional Statements: </b>Executes different code based on a condition.<br>
  if (x > 0) {<br>
    // Code to execute if x is greater than 0<br>
} else {<br>
    // Code to execute if x is not greater than 0<br>
}<br>
4. <b>Loop Statements: </b>Repeatedly executes a block of code.<br>
for (let i = 0; i < 5; i++) {<br>
    // Code to execute in each iteration<br>
}
</p>
  </div>
  <div id="functions" style="display:none;" >
  <h1 class="text-center">Functions</h1>
  <p class="p-3 text-start">Functions are a fundamental concept in JavaScript, allowing you to group and reuse code. Here are key aspects of functions in JavaScript:</p>
  <p class="p-3 text-start">1. <b>Function Declaration: </b>Defines a named function.<br>
2. <b>Function Expression: </b>Defines a function as part of an expression, often used for anonymous functions or function assigned to variables.<br>
3. <b>Arrow Function `(ES6+)`: </b>A concise way to write functions introduced in ECMAScript 6 (ES6).<br>
4. <b>Function Invocation: </b>
  Calls a function to execute its code.<br>
  greet('Alice'); // Output: Hello, Alice!<br>
5. <b>Return Statement: </b>Specifies the value to be returned from a function<br></p>
</div>
<div id="variables"style="display:none;" >
  <h1 class="text-center">Variables</h1>
  <p class="p-3 text-start">
In JavaScript, variables are used to store and manipulate data. Here are key aspects of variables in JavaScript:</p>
<p class="p-3 text-start"><b>1. Variable Declaration: </b>You can declare variables using the `var`, `let`, or `const` keyword.<br>
 var x;<br>
let y = 10;<br>
const PI = 3.14;<br>
2. <b>Variable Assignment: </b>Assign values to variables using the assignment operator `=`.<br>
 x = 5;<br>
3. <b>Variable Naming: </b>Variables can include letters, numbers, underscores, or dollar signs, but they cannot start with a number.<br>
 var myVar;<br> let user_name;<br>
4. <b>Scope: </b>The scope of a variable refers to where in your code the variable can be accessed. Variables declared with var are function-scoped, while those declared with let and const are block-scoped.<br>
 These are fundamental concepts regarding variables in JavaScript. Understanding how to declare, assign, and use variables is crucial for writing effective and readable code.</p>
</div>
<div id="operators"style="display:none;" >
  <h1 class="text-center">Operators</h1>
  <p class="p-3 text-start">JavaScript supports a variety of operators that are used for performing operations on values or variables. Here are some of the key types of operators in JavaScript:</p>
  <p class="p-3 text-start"><b>1. Arithmetic Operators: </b>Used for mathematical calculations.<br>
2. <b>Assignment Operators: </b>Used to assign values to variables.<br>
var a = 10;<br>
a += 5; // Equivalent to a = a + 5;<br>
3. <b>Comparison Operators: </b>Used to compare two values and return a Boolean result.<br>
4. <b>Logical Operators: </b>Used to perform logical operations and return a Boolean result.<br>
5. <b>Increment and Decrement Operators: </b>Used to increase or decrease the value of a variable by 1.<br>
var count = 5;<br>
count++; // Increment: count is now 6<br>
count--; // Decrement: count is now 5 again</p> <br>
<p class="p-3 text-start">These operators are fundamental to JavaScript and are used extensively in writing expressions and statements to perform various tasks and calculations in your code. Understanding how to use operators effectively is essential for writing efficient and readable JavaScript code.</p>
</div>
<script type="text/javascript" src="js/sla.js"></script>
    </body>
</html>
