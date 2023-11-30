function html()
{
	document.getElementById('html').style.display='block';
	document.getElementById('h1').style.display='block';
	document.getElementById('css').style.display="none";
	document.getElementById('js').style.display="none";
	document.getElementById('home').style.display="none";
	document.getElementById('contact').style.display="none";
	document.getElementById('about').style.display="none";
	document.body.style.background ="CYAN";
}
function css()
{
	document.getElementById('css').style.display="block";
	document.getElementById('html').style.display="none";
	document.getElementById('js').style.display="none";
	document.getElementById('home').style.display="none";
	document.getElementById('contact').style.display="none";
	document.getElementById('about').style.display="none";
	document.body.style.background ="RED";
}
function js()
{
	document.getElementById('js').style.display="block";
	document.getElementById('css').style.display="none";
	document.getElementById('html').style.display="none";
	document.getElementById('home').style.display="none";
	document.getElementById('contact').style.display="none";
	document.getElementById('about').style.display="none";
	document.body.style.background ="YELLOW";
}

function home()
{
	document.getElementById('home').style.display="block";
	document.getElementById('js').style.display="none";
	document.getElementById('css').style.display="none";
	document.getElementById('html').style.display="none";
	document.getElementById('contact').style.display="none";
	document.getElementById('about').style.display="none";
	document.body.style.background ="WHITE";
}
function contact()
{
	document.getElementById('home').style.display="none";
	document.getElementById('js').style.display="none";
	document.getElementById('css').style.display="none";
	document.getElementById('html').style.display="none";
	document.getElementById('contact').style.display="block";
	document.getElementById('about').style.display="none";
	document.body.style.background ="WHITE";
}
function about()
{
	document.getElementById('home').style.display="none";
	document.getElementById('js').style.display="none";
	document.getElementById('css').style.display="none";
	document.getElementById('html').style.display="none";
	document.getElementById('contact').style.display="none";
	document.getElementById('about').style.display="block";
	document.body.style.background ="WHITE";

}
function h1()
{
	document.getElementById('h1').style.display="block";
	document.getElementById('h2').style.display="none";
	document.getElementById('h3').style.display="none";
	document.getElementById('home').style.display="none";
	document.getElementById('contact').style.display="none";
	document.getElementById('about').style.display="none";
}
function h2()
{
	document.getElementById('h1').style.display="none";
	document.getElementById('h2').style.display="block";
	document.getElementById('h3').style.display="none";
	document.getElementById('home').style.display="none";
	document.getElementById('contact').style.display="none";
	document.getElementById('about').style.display="none";

}
function h3()
{
	document.getElementById('h1').style.display="none";
	document.getElementById('h2').style.display="none";
	document.getElementById('h3').style.display="block";
	document.getElementById('home').style.display="none";
	document.getElementById('contact').style.display="none";
	document.getElementById('about').style.display="none";
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