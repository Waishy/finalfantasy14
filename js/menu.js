
function openNav() {
  $("#mySidenav").css("width", "250px");
  $("main").css("margin-left", "6%");
  $(".menu_link").delay(200).fadeTo("slow", 1);
}


function closeNav() {
  $(".menu_link").fadeTo("fast", 0);
  $("#mySidenav").delay(1500).css("width", 0)
  $("main").delay(1500).css("margin-left", "6%")

}
