const searchBar = document.querySelector(".search input"),
searchIcon = document.querySelector(".search button"),
usersList = document.querySelector(".users-list");

searchIcon.onclick = ()=>{
  searchBar.classList.toggle("show");
  searchIcon.classList.toggle("active");
  searchBar.focus();
  if(searchBar.classList.contains("active")){
    searchBar.value = "";
    searchBar.classList.remove("active");
  }
}

searchBar.onkeydown = (e) => {
  if(e.keyCode === 27) {
    if(searchBar.classList.contains('show')) {
      searchIcon.classList.remove('active');
      searchBar.classList.remove('show');
    }
  }
}

setInterval(() => {
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "php/users.php", true);
  xhr.onload = () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      let data = xhr.response;
      if(!searchBar.classList.contains('active')) {
        usersList.innerHTML = data;
      }
    }
  }
  xhr.send();
}, 500);

searchBar.onkeyup = () => {
  let searchTerm = searchBar.value;
  if(searchTerm != "") {
    searchBar.classList.add('active');
  } else {
    searchBar.classList.remove('active');
  }
  let xhr = new XMLHttpRequest();
  xhr.open("post", "php/search.php", true);
  xhr.onload = () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;
        usersList.innerHTML = data;
      }
    }
  }
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.send('searchTerm=' + searchTerm);
}