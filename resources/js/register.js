document.getElementById("registerForm").addEventListener("submit", function(e) {

let password = document.getElementById("password").value;
let confirmPassword = document.getElementById("confirmPassword").value;

if(password.length < 6){
alert("Password must be at least 6 characters long.");
e.preventDefault();
return;
}

if(password !== confirmPassword){
alert("Passwords do not match.");
e.preventDefault();
return;
}

});