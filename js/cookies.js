
function setCookie(name,value) {
    document.cookie = name + "=" + value + "; expires=Fri, 23 Dec 2022 12:00:00 UTC; path=/";
  }

function checkCookiesIndex(){
  let email = getCookie("email");
  if (email != ""){
    alert("Welcome again");
  }
}
function submitForm() {
    setCookie("email",document.getElementById("email").value);
    setCookie("password",document.getElementById("password").value);
    document.location.href = '../index.html';
}