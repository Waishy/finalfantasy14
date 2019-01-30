/*250px and add a black background color to body */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "6%";
  $(".menu_link").fadeTo("slow", 1);
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
  $(".menu_link").fadeTo("fast", 0);
  setTimeout(function(){
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "6%";

  }, 700);

}
