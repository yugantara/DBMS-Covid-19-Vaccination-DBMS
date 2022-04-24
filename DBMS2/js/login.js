function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username=="DBMS"&& password=="123") {
        window.open("target.html")
    }
    else {
        alert("Error Password or Username")/*displays error message*/
    }
}