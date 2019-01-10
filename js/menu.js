/*250px and add a black background color to body */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  $(".menu_link").fadeTo("slow", 1);
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
  $(".menu_link").fadeTo("fast", 0);
  setTimeout(function(){
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
  }, 700);

}

function scaleArt(){
  $(".article").style({transform: "scale(1.5)"}, 5000, 'linear');
}