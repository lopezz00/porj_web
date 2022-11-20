
function setCookie(name,value) {
    document.cookie = name + "=" + value;
  }

function submitForm() {
    setCookie("name",document.getElementById("setname").value);
    setCookie("password",document.getElementById("setpassw").value);
}

document.getElementById("enviar").onclick = submitForm();