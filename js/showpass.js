let eyeimg1 = document.getElementById("eyeimg1");
let eyeimg2 = document.getElementById("eyeimg2");
let passwordinput = document.getElementById("Password");
let passwordinput1 = document.getElementById("cPassword");

document.getElementById("eyeimg1").addEventListener("click", function () {
  if (passwordinput.type === "password") {
    passwordinput.type = "text";
    eyeimg1.src = "img/eye2.png";
  } else {
    passwordinput.type = "password";
    eyeimg1.src = "img/eye1.png";
  }
});
document.getElementById("eyeimg2").addEventListener("click", function () {
  if (passwordinput1.type === "password") {
    passwordinput1.type = "text";
    eyeimg2.src = "img/eye2.png";
  } else {
    passwordinput1.type = "password";
    eyeimg2.src = "img/eye1.png";
  }
});
