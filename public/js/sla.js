function home()
{
	document.getElementById('home').style.display="block";
	document.getElementById('contact').style.display="none";
	document.getElementById('about').style.display="none";
	document.getElementById('tutorials').style.display="none";
	document.body.style.background ="WHITE";
}

function contact()
{
	document.getElementById('home').style.display="none";
	document.getElementById('contact').style.display="block";
	document.getElementById('about').style.display="none";
	document.getElementById('tutorials').style.display="none";
	document.body.style.background ="WHITE";
}
function about()
{
	document.getElementById('home').style.display="none";
	document.getElementById('contact').style.display="none";
	document.getElementById('about').style.display="block";
	document.getElementById('tutorials').style.display="none";
	document.body.style.background ="WHITE";

}
function front(){
	document.getElementById("front").style.display="block";
	document.getElementById("documentation").style.display="none";
	document.getElementById("back").style.display="none";
	
	}
	function documentation(){
	document.getElementById("documentation").style.display="block";
	document.getElementById("front").style.display="none";
	document.getElementById("back").style.display="none";
	}
	function back(){
	document.getElementById("back").style.display="block";
	document.getElementById("front").style.display="none";
	document.getElementById("documentation").style.display="none";
	}
function tutorials()
{
	document.getElementById('home').style.display="none";
	document.getElementById('contact').style.display="none";
	document.getElementById('about').style.display="none";
	document.getElementById('statements').style.display="none";
	document.getElementById('functions').style.display="none";
	document.getElementById('variables').style.display="none";
	document.getElementById('operators').style.display="none";
	document.getElementById('strings').style.display="none";
	document.getElementById('script').style.display="none";
	document.getElementById('introjs').style.display="none";
	document.getElementById('margins').style.display="none";
	document.getElementById('borders').style.display="none";
	document.getElementById('backgrounds').style.display="none";
	document.getElementById('colors').style.display="none";
	document.getElementById('selectors').style.display="none";
	document.getElementById('intcss').style.display="none";
	document.getElementById('linking').style.display="none";
	document.getElementById('intro').style.display="none"; 
	document.getElementById('elements').style.display="none"; 
	document.getElementById('attrib').style.display="none";
	document.getElementById('format').style.display="none";
	document.getElementById('comments').style.display="none";
	document.getElementById('heading').style.display="none";
	document.getElementById('welcome').style.display="none";
	document.getElementById('syntax').style.display="none";
	document.getElementById('tutorials').style.display="block";
	document.getElementById('welcome').style.display="block";
	document.body.style.background ="rgb(226 232 240)";
}
function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
	document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft= "0";
  }
  function student(){
	document.getElementById("student").style.display="block";
	document.getElementById("instructor").style.display="none";
  }
  function instructor(){
	document.getElementById("instructor").style.display="block";
	document.getElementById("student").style.display="none";
  }
  function students()
  {
	document.getElementById('admin').style.display="none";
  }
  function admin()
  {
	document.getElementById('admin').style.display="block";
  }
  function openNav() {
	document.getElementById("mySidebar").style.width = "250px";
	document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
	document.getElementById("mySidebar").style.width = "0";
	document.getElementById("main").style.marginLeft= "0";
  }
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;
  
  for (i = 0; i < dropdown.length; i++) {
	dropdown[i].addEventListener("click", function() {
	  this.classList.toggle("active");
	  var dropdownContent = this.nextElementSibling;
	  if (dropdownContent.style.display === "block") {
		dropdownContent.style.display = "none";
	  } else {
		dropdownContent.style.display = "block";
	  }
	});
  }
  function intro(){
	  document.getElementById('intro').style.display="block";
	  document.getElementById('elements').style.display="none";
	  document.getElementById('attrib').style.display="none";
	  document.getElementById('heading').style.display="none";
	  document.getElementById('format').style.display="none";
	  document.getElementById('comments').style.display="none";
	  document.getElementById('linking').style.display="none";
	  document.getElementById('welcome').style.display="none";
	  document.getElementById('intcss').style.display="none";
	  document.getElementById('syntax').style.display="none";
	  document.getElementById('selectors').style.display="none";
	  document.getElementById('colors').style.display="none";
	  document.getElementById('backgrounds').style.display="none";
	  document.getElementById('borders').style.display="none";
	  document.getElementById('margins').style.display="none";
	  document.getElementById('introjs').style.display="none";
	  document.getElementById('script').style.display="none";
	  document.getElementById('strings').style.display="none";
	  document.getElementById('statements').style.display="none";
	  document.getElementById('functions').style.display="none";
	  document.getElementById('variables').style.display="none";
	  document.getElementById('operators').style.display="none";
  }
  function elements(){
	  document.getElementById('elements').style.display="block";
	  document.getElementById('intro').style.display="none"; 
	  document.getElementById('attrib').style.display="none";
	  document.getElementById('heading').style.display="none";
	  document.getElementById('format').style.display="none";
	  document.getElementById('comments').style.display="none";
	  document.getElementById('linking').style.display="none";
	  document.getElementById('welcome').style.display="none";
	  document.getElementById('intcss').style.display="none";
	  document.getElementById('syntax').style.display="none";
	  document.getElementById('selectors').style.display="none";
	  document.getElementById('colors').style.display="none";
	  document.getElementById('backgrounds').style.display="none";
	  document.getElementById('borders').style.display="none";
	  document.getElementById('margins').style.display="none";
	  document.getElementById('introjs').style.display="none";
	  document.getElementById('script').style.display="none";
	  document.getElementById('strings').style.display="none";
	  document.getElementById('statements').style.display="none";
	  document.getElementById('functions').style.display="none";
	  document.getElementById('variables').style.display="none";
	  document.getElementById('operators').style.display="none";
  }
  function attrib(){
	  document.getElementById('attrib').style.display="block";
	  document.getElementById('intro').style.display="none"; 
	  document.getElementById('elements').style.display="none"; 
	  document.getElementById('heading').style.display="none";
	  document.getElementById('format').style.display="none";
	  document.getElementById('comments').style.display="none";
	  document.getElementById('linking').style.display="none";
	  document.getElementById('welcome').style.display="none";
	  document.getElementById('intcss').style.display="none";
	  document.getElementById('syntax').style.display="none";
	  document.getElementById('selectors').style.display="none";
	  document.getElementById('colors').style.display="none";
	  document.getElementById('backgrounds').style.display="none";
	  document.getElementById('borders').style.display="none";
	  document.getElementById('margins').style.display="none";
	  document.getElementById('introjs').style.display="none";
	  document.getElementById('script').style.display="none";
	  document.getElementById('strings').style.display="none";
	  document.getElementById('statements').style.display="none";
	  document.getElementById('functions').style.display="none";
	  document.getElementById('variables').style.display="none";
	  document.getElementById('operators').style.display="none";
  }
  function heading(){
	  document.getElementById('heading').style.display="block";
	  document.getElementById('intro').style.display="none"; 
	  document.getElementById('elements').style.display="none"; 
	  document.getElementById('attrib').style.display="none";
	  document.getElementById('format').style.display="none";
	  document.getElementById('comments').style.display="none";
	  document.getElementById('linking').style.display="none";
	  document.getElementById('welcome').style.display="none";
	  document.getElementById('intcss').style.display="none";
	  document.getElementById('syntax').style.display="none";
	  document.getElementById('selectors').style.display="none";
	  document.getElementById('colors').style.display="none";
	  document.getElementById('backgrounds').style.display="none";
	  document.getElementById('borders').style.display="none";
	  document.getElementById('margins').style.display="none";
	  document.getElementById('introjs').style.display="none";
	  document.getElementById('script').style.display="none";
	  document.getElementById('strings').style.display="none";
	  document.getElementById('statements').style.display="none";
	  document.getElementById('functions').style.display="none";
	  document.getElementById('variables').style.display="none";
	  document.getElementById('operators').style.display="none";
  }
  function format(){
	  document.getElementById('format').style.display="block";
	  document.getElementById('intro').style.display="none"; 
	  document.getElementById('elements').style.display="none"; 
	  document.getElementById('attrib').style.display="none";
	  document.getElementById('heading').style.display="none";
	  document.getElementById('comments').style.display="none";
	  document.getElementById('linking').style.display="none";
	  document.getElementById('welcome').style.display="none";
	  document.getElementById('intcss').style.display="none";
	  document.getElementById('syntax').style.display="none";
	  document.getElementById('selectors').style.display="none";
	  document.getElementById('colors').style.display="none";
	  document.getElementById('backgrounds').style.display="none";
	  document.getElementById('borders').style.display="none";
	  document.getElementById('margins').style.display="none";
	  document.getElementById('introjs').style.display="none";
	  document.getElementById('script').style.display="none";
	  document.getElementById('strings').style.display="none";
	  document.getElementById('statements').style.display="none";
	  document.getElementById('functions').style.display="none";
	  document.getElementById('variables').style.display="none";
	  document.getElementById('operators').style.display="none";
  }
  function comments(){
	  document.getElementById('comments').style.display="block";
	  document.getElementById('intro').style.display="none"; 
	  document.getElementById('elements').style.display="none"; 
	  document.getElementById('attrib').style.display="none";
	  document.getElementById('format').style.display="none";
	  document.getElementById('heading').style.display="none";
	  document.getElementById('linking').style.display="none";
	  document.getElementById('welcome').style.display="none";
	  document.getElementById('intcss').style.display="none";
	  document.getElementById('syntax').style.display="none";
	  document.getElementById('selectors').style.display="none";
	  document.getElementById('colors').style.display="none";
	  document.getElementById('backgrounds').style.display="none";
	  document.getElementById('borders').style.display="none";
	  document.getElementById('margins').style.display="none";
	  document.getElementById('introjs').style.display="none";
	  document.getElementById('script').style.display="none";
	  document.getElementById('strings').style.display="none";
	  document.getElementById('statements').style.display="none";
	  document.getElementById('functions').style.display="none";
	  document.getElementById('variables').style.display="none";
	  document.getElementById('operators').style.display="none";
  }
  function linking(){
	  document.getElementById('linking').style.display="block";
	  document.getElementById('intro').style.display="none"; 
	  document.getElementById('elements').style.display="none"; 
	  document.getElementById('attrib').style.display="none";
	  document.getElementById('format').style.display="none";
	  document.getElementById('comments').style.display="none";
	  document.getElementById('heading').style.display="none";
	  document.getElementById('welcome').style.display="none";
	  document.getElementById('intcss').style.display="none";
	  document.getElementById('syntax').style.display="none";
	  document.getElementById('selectors').style.display="none";
	  document.getElementById('colors').style.display="none";
	  document.getElementById('backgrounds').style.display="none";
	  document.getElementById('borders').style.display="none";
	  document.getElementById('margins').style.display="none";
	  document.getElementById('introjs').style.display="none";
	  document.getElementById('script').style.display="none";
	  document.getElementById('strings').style.display="none";
	  document.getElementById('statements').style.display="none";
	  document.getElementById('functions').style.display="none";
	  document.getElementById('variables').style.display="none";
	  document.getElementById('operators').style.display="none";
  }  
  function introcss(){
	document.getElementById('intcss').style.display="block";
	document.getElementById('linking').style.display="none";
	document.getElementById('intro').style.display="none"; 
	document.getElementById('elements').style.display="none"; 
	document.getElementById('attrib').style.display="none";
	document.getElementById('format').style.display="none";
	document.getElementById('comments').style.display="none";
	document.getElementById('heading').style.display="none";
	document.getElementById('welcome').style.display="none";
	document.getElementById('syntax').style.display="none";
	document.getElementById('selectors').style.display="none";
	document.getElementById('colors').style.display="none";
	document.getElementById('backgrounds').style.display="none";
	document.getElementById('borders').style.display="none";
	document.getElementById('margins').style.display="none";
	document.getElementById('introjs').style.display="none";
	document.getElementById('script').style.display="none";
	document.getElementById('strings').style.display="none";
	document.getElementById('statements').style.display="none";
	document.getElementById('functions').style.display="none";
	document.getElementById('variables').style.display="none";
	document.getElementById('operators').style.display="none";
}
function syntax(){
	document.getElementById('syntax').style.display="block";
	document.getElementById('intcss').style.display="none";
	document.getElementById('linking').style.display="none";
	document.getElementById('intro').style.display="none"; 
	document.getElementById('elements').style.display="none"; 
	document.getElementById('attrib').style.display="none";
	document.getElementById('format').style.display="none";
	document.getElementById('comments').style.display="none";
	document.getElementById('heading').style.display="none";
	document.getElementById('welcome').style.display="none";
	document.getElementById('selectors').style.display="none";
	document.getElementById('colors').style.display="none";
	document.getElementById('backgrounds').style.display="none";
	document.getElementById('borders').style.display="none";
	document.getElementById('margins').style.display="none";
	document.getElementById('introjs').style.display="none";
	document.getElementById('script').style.display="none";
	document.getElementById('strings').style.display="none";
	document.getElementById('statements').style.display="none";
	document.getElementById('functions').style.display="none";
	document.getElementById('variables').style.display="none";
	document.getElementById('operators').style.display="none";
}
function selectors(){
	document.getElementById('selectors').style.display="block";
	document.getElementById('intcss').style.display="none";
	document.getElementById('linking').style.display="none";
	document.getElementById('intro').style.display="none"; 
	document.getElementById('elements').style.display="none"; 
	document.getElementById('attrib').style.display="none";
	document.getElementById('format').style.display="none";
	document.getElementById('comments').style.display="none";
	document.getElementById('heading').style.display="none";
	document.getElementById('welcome').style.display="none";
	document.getElementById('syntax').style.display="none";
	document.getElementById('colors').style.display="none";
	document.getElementById('backgrounds').style.display="none";
	document.getElementById('borders').style.display="none";
	document.getElementById('margins').style.display="none";
	document.getElementById('introjs').style.display="none";
	document.getElementById('script').style.display="none";
	document.getElementById('strings').style.display="none";
	document.getElementById('statements').style.display="none";
	document.getElementById('functions').style.display="none";
	document.getElementById('variables').style.display="none";
	document.getElementById('operators').style.display="none";

}
function colors(){
	document.getElementById('colors').style.display="block";
	document.getElementById('selectors').style.display="none";
	document.getElementById('intcss').style.display="none";
	document.getElementById('linking').style.display="none";
	document.getElementById('intro').style.display="none"; 
	document.getElementById('elements').style.display="none"; 
	document.getElementById('attrib').style.display="none";
	document.getElementById('format').style.display="none";
	document.getElementById('comments').style.display="none";
	document.getElementById('heading').style.display="none";
	document.getElementById('welcome').style.display="none";
	document.getElementById('syntax').style.display="none";
	document.getElementById('backgrounds').style.display="none";
	document.getElementById('borders').style.display="none";
	document.getElementById('margins').style.display="none";
	document.getElementById('introjs').style.display="none";
	document.getElementById('script').style.display="none";
	document.getElementById('strings').style.display="none";
	document.getElementById('statements').style.display="none";
	document.getElementById('functions').style.display="none";
	document.getElementById('variables').style.display="none";
	document.getElementById('operators').style.display="none";
}
function backgrounds(){
	document.getElementById('backgrounds').style.display="block";
	document.getElementById('colors').style.display="none";
	document.getElementById('selectors').style.display="none";
	document.getElementById('intcss').style.display="none";
	document.getElementById('linking').style.display="none";
	document.getElementById('intro').style.display="none"; 
	document.getElementById('elements').style.display="none"; 
	document.getElementById('attrib').style.display="none";
	document.getElementById('format').style.display="none";
	document.getElementById('comments').style.display="none";
	document.getElementById('heading').style.display="none";
	document.getElementById('welcome').style.display="none";
	document.getElementById('syntax').style.display="none";
	document.getElementById('borders').style.display="none";
	document.getElementById('margins').style.display="none";
	document.getElementById('introjs').style.display="none";
	document.getElementById('script').style.display="none";
	document.getElementById('strings').style.display="none";
	document.getElementById('statements').style.display="none";
	document.getElementById('functions').style.display="none";
	document.getElementById('variables').style.display="none";
	document.getElementById('operators').style.display="none";
}
function borders(){
	document.getElementById('borders').style.display="block";
	document.getElementById('backgrounds').style.display="none";
	document.getElementById('colors').style.display="none";
	document.getElementById('selectors').style.display="none";
	document.getElementById('intcss').style.display="none";
	document.getElementById('linking').style.display="none";
	document.getElementById('intro').style.display="none"; 
	document.getElementById('elements').style.display="none"; 
	document.getElementById('attrib').style.display="none";
	document.getElementById('format').style.display="none";
	document.getElementById('comments').style.display="none";
	document.getElementById('heading').style.display="none";
	document.getElementById('welcome').style.display="none";
	document.getElementById('syntax').style.display="none";
	document.getElementById('margins').style.display="none";
	document.getElementById('introjs').style.display="none";
	document.getElementById('script').style.display="none";
	document.getElementById('strings').style.display="none";
	document.getElementById('statements').style.display="none";
	document.getElementById('functions').style.display="none";
	document.getElementById('variables').style.display="none";
	document.getElementById('operators').style.display="none";
}
function margins(){
	document.getElementById('margins').style.display="block";
	document.getElementById('borders').style.display="none";
	document.getElementById('backgrounds').style.display="none";
	document.getElementById('colors').style.display="none";
	document.getElementById('selectors').style.display="none";
	document.getElementById('intcss').style.display="none";
	document.getElementById('linking').style.display="none";
	document.getElementById('intro').style.display="none"; 
	document.getElementById('elements').style.display="none"; 
	document.getElementById('attrib').style.display="none";
	document.getElementById('format').style.display="none";
	document.getElementById('comments').style.display="none";
	document.getElementById('heading').style.display="none";
	document.getElementById('welcome').style.display="none";
	document.getElementById('syntax').style.display="none";
	document.getElementById('introjs').style.display="none";
	document.getElementById('script').style.display="none";
	document.getElementById('strings').style.display="none";
	document.getElementById('statements').style.display="none";
	document.getElementById('functions').style.display="none";
	document.getElementById('variables').style.display="none";
	document.getElementById('operators').style.display="none";
}
function introjs(){
	document.getElementById('introjs').style.display="block";
	document.getElementById('margins').style.display="none";
	document.getElementById('borders').style.display="none";
	document.getElementById('backgrounds').style.display="none";
	document.getElementById('colors').style.display="none";
	document.getElementById('selectors').style.display="none";
	document.getElementById('intcss').style.display="none";
	document.getElementById('linking').style.display="none";
	document.getElementById('intro').style.display="none"; 
	document.getElementById('elements').style.display="none"; 
	document.getElementById('attrib').style.display="none";
	document.getElementById('format').style.display="none";
	document.getElementById('comments').style.display="none";
	document.getElementById('heading').style.display="none";
	document.getElementById('welcome').style.display="none";
	document.getElementById('syntax').style.display="none";
	document.getElementById('script').style.display="none";
	document.getElementById('strings').style.display="none";
	document.getElementById('statements').style.display="none";
	document.getElementById('functions').style.display="none";
	document.getElementById('variables').style.display="none";
	document.getElementById('operators').style.display="none";
}
function script(){
	document.getElementById('script').style.display="block";
	document.getElementById('introjs').style.display="none";
	document.getElementById('margins').style.display="none";
	document.getElementById('borders').style.display="none";
	document.getElementById('backgrounds').style.display="none";
	document.getElementById('colors').style.display="none";
	document.getElementById('selectors').style.display="none";
	document.getElementById('intcss').style.display="none";
	document.getElementById('linking').style.display="none";
	document.getElementById('intro').style.display="none"; 
	document.getElementById('elements').style.display="none"; 
	document.getElementById('attrib').style.display="none";
	document.getElementById('format').style.display="none";
	document.getElementById('comments').style.display="none";
	document.getElementById('heading').style.display="none";
	document.getElementById('welcome').style.display="none";
	document.getElementById('syntax').style.display="none";
	document.getElementById('strings').style.display="none";
	document.getElementById('statements').style.display="none";
	document.getElementById('functions').style.display="none";
	document.getElementById('variables').style.display="none";
	document.getElementById('operators').style.display="none";
}
function strings(){
	document.getElementById('strings').style.display="block";
	document.getElementById('script').style.display="none";
	document.getElementById('introjs').style.display="none";
	document.getElementById('margins').style.display="none";
	document.getElementById('borders').style.display="none";
	document.getElementById('backgrounds').style.display="none";
	document.getElementById('colors').style.display="none";
	document.getElementById('selectors').style.display="none";
	document.getElementById('intcss').style.display="none";
	document.getElementById('linking').style.display="none";
	document.getElementById('intro').style.display="none"; 
	document.getElementById('elements').style.display="none"; 
	document.getElementById('attrib').style.display="none";
	document.getElementById('format').style.display="none";
	document.getElementById('comments').style.display="none";
	document.getElementById('heading').style.display="none";
	document.getElementById('welcome').style.display="none";
	document.getElementById('syntax').style.display="none";
	document.getElementById('statements').style.display="none";
	document.getElementById('functions').style.display="none";
	document.getElementById('variables').style.display="none";
	document.getElementById('operators').style.display="none";
}
function statements(){
	document.getElementById('strings').style.display="none";
	document.getElementById('script').style.display="none";
	document.getElementById('introjs').style.display="none";
	document.getElementById('margins').style.display="none";
	document.getElementById('borders').style.display="none";
	document.getElementById('backgrounds').style.display="none";
	document.getElementById('colors').style.display="none";
	document.getElementById('selectors').style.display="none";
	document.getElementById('intcss').style.display="none";
	document.getElementById('linking').style.display="none";
	document.getElementById('intro').style.display="none"; 
	document.getElementById('elements').style.display="none"; 
	document.getElementById('attrib').style.display="none";
	document.getElementById('format').style.display="none";
	document.getElementById('comments').style.display="none";
	document.getElementById('heading').style.display="none";
	document.getElementById('welcome').style.display="none";
	document.getElementById('syntax').style.display="none";
	document.getElementById('statements').style.display="block";
	document.getElementById('functions').style.display="none";
	document.getElementById('variables').style.display="none";
	document.getElementById('operators').style.display="none";
}
function functions(){
	document.getElementById('strings').style.display="none";
	document.getElementById('script').style.display="none";
	document.getElementById('introjs').style.display="none";
	document.getElementById('margins').style.display="none";
	document.getElementById('borders').style.display="none";
	document.getElementById('backgrounds').style.display="none";
	document.getElementById('colors').style.display="none";
	document.getElementById('selectors').style.display="none";
	document.getElementById('intcss').style.display="none";
	document.getElementById('linking').style.display="none";
	document.getElementById('intro').style.display="none"; 
	document.getElementById('elements').style.display="none"; 
	document.getElementById('attrib').style.display="none";
	document.getElementById('format').style.display="none";
	document.getElementById('comments').style.display="none";
	document.getElementById('heading').style.display="none";
	document.getElementById('welcome').style.display="none";
	document.getElementById('syntax').style.display="none";
	document.getElementById('statements').style.display="none";
	document.getElementById('functions').style.display="block";
	document.getElementById('variables').style.display="none";
	document.getElementById('operators').style.display="none";
}
function variables(){
	document.getElementById('strings').style.display="none";
	document.getElementById('script').style.display="none";
	document.getElementById('introjs').style.display="none";
	document.getElementById('margins').style.display="none";
	document.getElementById('borders').style.display="none";
	document.getElementById('backgrounds').style.display="none";
	document.getElementById('colors').style.display="none";
	document.getElementById('selectors').style.display="none";
	document.getElementById('intcss').style.display="none";
	document.getElementById('linking').style.display="none";
	document.getElementById('intro').style.display="none"; 
	document.getElementById('elements').style.display="none"; 
	document.getElementById('attrib').style.display="none";
	document.getElementById('format').style.display="none";
	document.getElementById('comments').style.display="none";
	document.getElementById('heading').style.display="none";
	document.getElementById('welcome').style.display="none";
	document.getElementById('syntax').style.display="none";
	document.getElementById('statements').style.display="none";
	document.getElementById('functions').style.display="none";
	document.getElementById('variables').style.display="block";
	document.getElementById('operators').style.display="none";
}
function operators(){
	document.getElementById('strings').style.display="none";
	document.getElementById('script').style.display="none";
	document.getElementById('introjs').style.display="none";
	document.getElementById('margins').style.display="none";
	document.getElementById('borders').style.display="none";
	document.getElementById('backgrounds').style.display="none";
	document.getElementById('colors').style.display="none";
	document.getElementById('selectors').style.display="none";
	document.getElementById('intcss').style.display="none";
	document.getElementById('linking').style.display="none";
	document.getElementById('intro').style.display="none"; 
	document.getElementById('elements').style.display="none"; 
	document.getElementById('attrib').style.display="none";
	document.getElementById('format').style.display="none";
	document.getElementById('comments').style.display="none";
	document.getElementById('heading').style.display="none";
	document.getElementById('welcome').style.display="none";
	document.getElementById('syntax').style.display="none";
	document.getElementById('statements').style.display="none";
	document.getElementById('functions').style.display="none";
	document.getElementById('variables').style.display="none";
	document.getElementById('operators').style.display="block";
}