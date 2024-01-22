// PreLoader
function preloader() {
  var Preload = document.getElementById("preloader");
  Preload.classList.add("hide");
}
window.addEventListener("load", preloader);

// BMI Calculator
function calculateBMI() {
  var weight = document.getElementById("bmiWeight").value;
  var height = document.getElementById("bmiHeight").value;

  // Ensure weight and height are valid numbers
  if (isNaN(weight) || isNaN(height) || weight <= 0 || height <= 0) {
    document.getElementById("BMIOutput").innerHTML =
      "Invalid input. Please enter valid weight and height.";
    return "Invalid input. Please enter valid weight and height.";
  }

  // Calculate BMI
  var bmi = weight / (height * height);

  //   Output
  document.getElementById("BMIOutput").innerHTML = bmi.toFixed(2);

  // Return the calculated BMI
  return bmi.toFixed(2); // Round to two decimal places
}

function ShowBmiCalcutorModel() {
  var id = document.getElementById("BmiModel");
  var model = new bootstrap.Modal(id);
  model.show();
}

// carousel Slider Start
var marginleftM = 0;
function CarouselLeft() {
  if (marginleftM > -116) {
    marginleftM = marginleftM - 58;
    var firstBox = document.getElementById("firstBox");
    firstBox.style.transition = "1s";
    firstBox.style.marginLeft = marginleftM + "%";
  }
}

function Carouselright() {
  if (marginleftM < 0) {
    marginleftM = marginleftM + 58;
    var firstBox = document.getElementById("firstBox");
    firstBox.style.transition = "1s";
    firstBox.style.marginLeft = marginleftM + "%";
  }
}

// rsmall btn

function Carouselleftsmallbtn() {
  alert(marginleftM);
  if (marginleftM > -200) {
    marginleftM = marginleftM - 100;
    var firstBox = document.getElementById("firstBoxs");
    firstBox.style.transition = "1s";
    firstBox.style.marginLeft = marginleftM + "%";
  }
}

function Carouselrightsmallbtn() {
  if (marginleftM < 0) {
    marginleftM = marginleftM + 100;
    var firstBox = document.getElementById("firstBoxs");
    firstBox.style.transition = "1s";
    firstBox.style.marginLeft = marginleftM + "%";
  }
}
// carousel Slider End

// Scrolling Animations
// -------------------------------------------------
function DownToUpAnimation() {
  var tag1 = document.querySelectorAll(".DownToUP");

  for (var i = 0; i < tag1.length; i++) {
    var windowHeight = window.innerHeight;
    var TagTop = tag1[i].getBoundingClientRect().top;
    var ViewHeight = 80;

    if (TagTop < windowHeight - ViewHeight) {
      tag1[i].classList.add("active");
    } else {
      tag1[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll", DownToUpAnimation);

// -------------------------------------------------
function UPToDownAnimation() {
  var tag1 = document.querySelectorAll(".UPToDown");

  for (var i = 0; i < tag1.length; i++) {
    var windowHeight = window.innerHeight;
    var TagTop = tag1[i].getBoundingClientRect().top;
    var ViewHeight = 80;

    if (TagTop < windowHeight - ViewHeight) {
      tag1[i].classList.add("active");
    } else {
      tag1[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll", UPToDownAnimation);

// -------------------------------------------------
function DownToUpAnimation() {
  var tag1 = document.querySelectorAll(".DownToUP");

  for (var i = 0; i < tag1.length; i++) {
    var windowHeight = window.innerHeight;
    var TagTop = tag1[i].getBoundingClientRect().top;
    var ViewHeight = 80;

    if (TagTop < windowHeight - ViewHeight) {
      tag1[i].classList.add("active");
    } else {
      tag1[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", DownToUpAnimation);

// -------------------------------------------------
function LeftToRightAnimation() {
  var tag1 = document.querySelectorAll(".LeftToRight");

  for (var i = 0; i < tag1.length; i++) {
    var windowHeight = window.innerHeight;
    var TagTop = tag1[i].getBoundingClientRect().top;
    var ViewHeight = 80;

    if (TagTop < windowHeight - ViewHeight) {
      tag1[i].classList.add("active");
    } else {
      tag1[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", LeftToRightAnimation);

// -------------------------------------------------
function RightToLeftAnimation() {
  var tag1 = document.querySelectorAll(".RightToLeft");

  for (var i = 0; i < tag1.length; i++) {
    var windowHeight = window.innerHeight;
    var TagTop = tag1[i].getBoundingClientRect().top;
    var ViewHeight = 80;

    if (TagTop < windowHeight - ViewHeight) {
      tag1[i].classList.add("active");
    } else {
      tag1[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", RightToLeftAnimation);

// -------------------------------------------------
function FadeAnimation() {
  var tag1 = document.querySelectorAll(".Fade");

  for (var i = 0; i < tag1.length; i++) {
    var windowHeight = window.innerHeight;
    var TagTop = tag1[i].getBoundingClientRect().top;
    var ViewHeight = 80;

    if (TagTop < windowHeight - ViewHeight) {
      tag1[i].classList.add("active");
    } else {
      tag1[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", FadeAnimation);

// -------------------------------------------------
function aboutImageAnimation() {
  var tag1 = document.querySelectorAll(".aboutImage");

  for (var i = 0; i < tag1.length; i++) {
    var windowHeight = window.innerHeight;
    var TagTop = tag1[i].getBoundingClientRect().top;
    var ViewHeight = 150;

    if (TagTop < windowHeight - ViewHeight) {
      tag1[i].classList.add("active");
    } else {
      tag1[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", aboutImageAnimation);
// --------------------------------------------------
function ImageBlackBoxAni() {
  var tag1 = document.querySelectorAll(".blackImageCover");

  for (var i = 0; i < tag1.length; i++) {
    var windowHeight = window.innerHeight;
    var TagTop = tag1[i].getBoundingClientRect().top;
    var ViewHeight = 80;

    if (TagTop < windowHeight - ViewHeight) {
      tag1[i].classList.add("active");
    } else {
      tag1[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll", ImageBlackBoxAni);

// Carosuel Functions
var counter = 1;
setInterval(function () {
  document.getElementById("radio" + counter).checked = true;
  counter++;
  if (counter > 4) {
    counter = 1;
  }
}, 5000);

// BackendProcess
function adminChangePassword(email) {
  var command = "adminChangePassword";
  var Email = email;

  var curruntP = document.getElementById("curruntPassword").value;
  var newPassword = document.getElementById("newPassword").value;
  var RPassword = document.getElementById("RPassword").value;

  var f = new FormData();
  f.append("command", command);
  f.append("Email", Email);
  f.append("curruntP", curruntP);
  f.append("newPassword", newPassword);
  f.append("RPassword", RPassword);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      alert(r.responseText);
    }
  };
  r.open("POST", "BackEndProcess.php", true);
  r.send(f);
}

//admin Login process
function adminLogin() {
  var email = document.getElementById("emailInput").value;
  var password = document.getElementById("PasswordInput").value;
  var command = "adminLoginProcess";

  var form = new FormData();
  form.append("command", command);
  form.append("email", email);
  form.append("password", password);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      if (response == "Success") {
        window.location = "adminDashboard.php";
      } else if (response == "Error") {
        alert("invalid email and Password");
      }
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

// Change Admin carousel Image
function changeCarouseImage(id) {
  var command = "changeCarouseImage";
  var file = document.getElementById("FileChooser" + id);

  var form = new FormData();
  form.append("command", command);
  form.append("id", id);
  form.append("file", file.files[0]);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      if (response == "Update Success") {
        var ImageView = document.getElementById("Cimage" + id);
        urlFile = file.files[0];
        url = window.URL.createObjectURL(urlFile);
        ImageView.src = url;
      } else {
        alert(response);
      }
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

//Change About Image
function ChangeAboutImage(id) {
  var command = "changeAboutImage";
  var file = document.getElementById("about" + id);

  var form = new FormData();
  form.append("command", command);
  form.append("id", id);
  form.append("file", file.files[0]);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      if (response == "Update Success") {
        var ImageView = document.getElementById("Cimage" + id);
        urlFile = file.files[0];
        url = window.URL.createObjectURL(urlFile);
        ImageView.src = url;
      } else {
        alert(response);
      }
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

// add About List
function addAboutList() {
  var command = "addAboutList";
  var Text = document.getElementById("InsertListInput").value;

  var form = new FormData();
  form.append("command", command);
  form.append("Text", Text);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      if (response == "Adding Success") {
        window.location.reload();
      } else {
        alert(response);
      }
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}
