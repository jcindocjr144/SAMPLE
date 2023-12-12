function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
	document.getElementById("main").style.marginLeft = "250px";
  }
  

  function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft = "0";
  }
  function students(){
    document.getElementById("students").style.display = "block";
    document.getElementById("instructors").style.display = "none";
    document.getElementById("adminwelcome").style.display="none";
  }
 function instructors(){
  document.getElementById("instructors").style.display = "block";
  document.getElementById("students").style.display = "none";
  document.getElementById("adminwelcome").style.display="none";
  }
  function classes(){
    document.getElementById("class").style.display="block";
    document.getElementById("welcome").style.display="none";
    document.getElementById("tutor").style.display="none";
  }
  function tutor(){
    document.getElementById("tutor").style.display="block";
    document.getElementById("class").style.display="none";
    document.getElementById("welcome").style.display="none";
  }
  function instructorclass(){
    document.getElementById("instructorclass").style.display="block";
    document.getElementById("instructorwelcome").style.display="none";
    document.getElementById("instructortutor").style.display="none";
  }
  function instructortutor(){
    document.getElementById("instructortutor").style.display="block";
    document.getElementById("instructorclass").style.display="none";
    document.getElementById("instructorwelcome").style.display="none";
  }