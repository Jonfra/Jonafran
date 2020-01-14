if (sessionStorage.getItem('AnnouncementOnce') !== 'true') {

  document.getElementById("cnt223").onload = function() {
    popup()
  };
  document.getElementById("cnt223").style.display = "block";

  document.getElementById("close").onclick = function() {
    document.getElementById("cnt223").style.display = "none";
  };
  sessionStorage.setItem('AnnouncementOnce', 'true');
}


function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
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
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction2() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}









function fetch() {
  // GET SEARCH TERM
  var data = new FormData();
  data.append('search', document.getElementById("search").value);
  data.append('ajax', 1);

  // AJAX
  var xhr = new XMLHttpRequest();
  xhr.open('POST', "3-search.php", true);
  xhr.onload = function() {
    if (xhr.status == 403 || xhr.status == 404) {
      alert("ERROR LOADING FILE!");
    } else {
      var results = JSON.parse(this.response),
        wrapper = document.getElementById("results");
      wrapper.innerHTML = "";
      if (results.length > 0) {
        for (var res of results) {
          var line = document.createElement("div");
          line.innerHTML = res['name'] + " - " + res['email'];
          wrapper.appendChild(line);
        }
      } else {
        wrapper.innerHTML = "No results found";
      }
    }
  };
  xhr.send(data);
  return false;
}