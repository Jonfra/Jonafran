//popup
if (sessionStorage.getItem('AnnouncementOnce') !== 'true') {

  document.getElementById("popup").onload = function() {
    cnt223()
  };
  document.getElementById("popup").style.display = "block";

  document.getElementById("close").onclick = function Function3() {
    document.getElementById("popup").style.display = "none";
  };
  sessionStorage.setItem('AnnouncementOnce', 'true');
}

// search list for input
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");

  // Loop through list items, hide those who don't match the search
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
// btn to top if more than 20px down scroll
window.onscroll = function() {
  scrollFunction()
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }

}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
//Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon
function myFunction2() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
