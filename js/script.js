// PreLoader
function preloader() {
  var Preload = document.getElementById("preloader");
  Preload.classList.add("hide");
}
window.addEventListener("load", preloader);

// BMI Calculator
function CalculateBMI() {
  var Heightinput = document.getElementById("HeightRangeInput").value;
  var Height = Heightinput / 100;
  var Weight = document.getElementById("WeightRangeInput").value;

  var BMIvalue = Weight / (Height * Height);
  document.getElementById("BMIoutput").innerHTML = BMIvalue;

  if (BMIvalue < 18.5) {
    document.getElementById("ClassOutput").innerHTML =
      "OBESE CLASS iii (Underweight)";
  } else if (BMIvalue >= 18.5 && BMIvalue < 24.9) {
    document.getElementById("ClassOutput").innerHTML =
      "OBESE CLASS iii (Normal weight)";
  } else if (BMIvalue >= 25 && BMIvalue < 29.9) {
    document.getElementById("ClassOutput").innerHTML =
      "OBESE CLASS iii (Overweight)";
  } else if (BMIvalue >= 30 && BMIvalue < 34.9) {
    document.getElementById("ClassOutput").innerHTML =
      "OBESE CLASS iii (Obesity (Class 1))";
  } else if (BMIvalue >= 35 && BMIvalue < 39.9) {
    document.getElementById("ClassOutput").innerHTML =
      "OBESE CLASS iii (Obesity (Class 2))";
  } else {
    document.getElementById("ClassOutput").innerHTML =
      "OBESE CLASS iii (Obesity (Class 3))";
  }
}
// Change Height
function ChangeHeight() {
  var HeightRangeInput = document.getElementById("HeightRangeInput").value;
  document.getElementById("HeightText").innerHTML = HeightRangeInput + " cm";
}

// Change Weight
function ChangeWeight() {
  var HeightRangeInput = document.getElementById("WeightRangeInput").value;
  document.getElementById("WeightText").innerHTML = HeightRangeInput + " Kg";
}

// carousel Slider Start
var marginleftM = 0;
// end point is load in Index.php file

function CarouselLeft() {
  if (marginleftM > endPoint) {
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
//---------------------------------------------------

function Header() {
  var Number = document.querySelector(".Number");
  var TagTop = Number.getBoundingClientRect().bottom;
  Number.innerHTML = TagTop;
  if (TagTop > 5) {
    document.querySelector(".FlexLOGO").classList.remove("active");
  } else {
    document.querySelector(".FlexLOGO").classList.add("active");
  }
}

window.addEventListener("scroll", Header);

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

// admin Delete About List
function DeleteAboutList(id) {
  var command = "DeleteAboutList";
  var id = id;

  var form = new FormData();
  form.append("command", command);
  form.append("id", id);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      alert(response);
      window.location.reload();
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

// admin Change Why Image in Home Page
function changeWhyImage(id) {
  var command = "changeWhyImage";
  var file = document.getElementById("why" + id);

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

// change why text in hOme page
function changeWhyText(id) {
  var text = document.getElementById("whyText" + id).value;
  var command = "changeWhytext";

  var form = new FormData();
  form.append("command", command);
  form.append("id", id);
  form.append("text", text);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      alert(response);
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

// change Story Image in Home Page
function ChangeStoryImage(id) {
  var command = "ChangeStoryImage";
  var file = document.getElementById("storyImage" + id);

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

// admin Change story para
function changeStorypara(id) {
  var text = document.getElementById("storypara" + id).value;
  var command = "changeStroyPara";

  var form = new FormData();
  form.append("command", command);
  form.append("id", id);
  form.append("text", text);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      alert(response);
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

// admin Delete Story progress
function DeleteStoryInfo(id) {
  var command = "DeleteStoryInfo";
  var id = id;

  var form = new FormData();
  form.append("command", command);
  form.append("id", id);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      alert(response);
      window.location.reload();
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

// View Change image in adding Story Box part
function ViewStoryImage() {
  var ViewImage = document.getElementById("ViewImage");
  var ImageInput = document.getElementById("ImageInput");
  urlFile = ImageInput.files[0];
  url = window.URL.createObjectURL(urlFile);
  ViewImage.src = url;
}

// admin Add Story Box
function addStoryBox() {
  var command = "AddStoryBox";
  var file = document.getElementById("ImageInput");
  var storyparainput = document.getElementById("storyparainput").value;

  var form = new FormData();
  form.append("command", command);
  form.append("storyparainput", storyparainput);
  form.append("file", file.files[0]);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      alert(response);
      window.location.reload();
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

function VideoChange() {
  var ViewVideo = document.getElementById("vidoeView");
  var vidoeInput = document.getElementById("Video");
  urlFile = vidoeInput.files[0];
  url = window.URL.createObjectURL(urlFile);
  ViewVideo.src = url;
}

//admin change Video and Para And Topic in classes
function ChangeClassesVideoandPara() {
  var command = "changeclassVodeoPara";
  var file = document.getElementById("Video");
  var topic = document.getElementById("topic").value;
  var para = document.getElementById("para").value;

  var form = new FormData();
  form.append("command", command);
  form.append("topic", topic);
  form.append("para", para);
  form.append("file", file.files[0]);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      alert(response);
      window.location.reload();
    }
  };
  request.open("POST", "GetBackEndProcess.php", true);
  request.send(form);
}

// admin Change Top Image in pages
function ChangeTopImage(id) {
  var command = "ChangeTopImage";
  var file = document.getElementById("TopImage" + id);

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

// admin Change Areas Image
function ChangeAreasImage(id) {
  var command = "ChangeAreaImage";
  var file = document.getElementById("ImageInput" + id);

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

// admin Change areas info
function ChangeAreasInfo(id) {
  var command = "ChangeAreaInfo";
  var Name = document.getElementById("Name" + id).value;
  var Number = document.getElementById("Number" + id).value;

  var form = new FormData();
  form.append("command", command);
  form.append("id", id);
  form.append("Name", Name);
  form.append("Number", Number);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      alert(response);
      window.location.reload();
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

// admin Change Facilities about paragraph
function ChangeFacilitiesPara() {
  var command = "ChangeFacilitiesAboutPara";
  var About = document.getElementById("Fabout").value;

  var form = new FormData();
  form.append("command", command);
  form.append("About", About);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      alert(response);
      window.location.reload();
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

// admin add Facilities Feutures
function addFeaturess() {
  var command = "addFacilitiesFeutrues";
  var Text = document.getElementById("addFeaturesInput").value;

  var form = new FormData();
  form.append("command", command);
  form.append("Text", Text);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      alert(response);
      window.location.reload();
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

// admin Delete Facilities Features
function DeleteFacilites(id) {
  var command = "DeleteFacilitiesFeatures";

  var form = new FormData();
  form.append("command", command);
  form.append("id", id);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      alert(response);
      window.location.reload();
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

// admin Change Premium Images on facilities Page
function ChangePremiumImage(id) {
  var command = "ChangePremiumImage";
  var file = document.getElementById("ImageInput" + id);

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

// admin Change Premium faciliteis infomations
function changefacilitiesInfomations(id) {
  var command = "changePfacilitiesinof";
  var topic = document.getElementById("faTopic" + id).value;
  var para = document.getElementById("fapara" + id).value;

  var form = new FormData();
  form.append("command", command);
  form.append("topic", topic);
  form.append("para", para);
  form.append("id", id);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      alert(response);
      window.location.reload();
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

// admin Change Factory Image
function ChangeFactoryImage() {
  var command = "ChangeFactoryImage";
  var file = document.getElementById("FactioryImageInput");

  var form = new FormData();
  form.append("command", command);
  form.append("file", file.files[0]);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      window.location.reload();
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

// admin change Factory Info
function UpdateFactoryPara() {
  var command = "ChangeFactoryInfo";
  var para = document.getElementById("FFPara").value;

  var form = new FormData();
  form.append("command", command);
  form.append("para", para);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      alert(response);
      window.location.reload();
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

//admin Add Factory Items
function AddFactoryItems() {
  var command = "AddFacotryItems";
  var itemName = document.getElementById("itemName").value;
  var ItemCategory = document.getElementById("ItemCategory").value;

  var form = new FormData();
  form.append("command", command);
  form.append("itemName", itemName);
  form.append("ItemCategory", ItemCategory);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      alert(response);
      window.location.reload();
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

// Change Image View when Create a Blog Post
function BlogViewImage() {
  var ImageView = document.getElementById("Cimage");
  var file = document.getElementById("AddBlogImage");
  urlFile = file.files[0];
  url = window.URL.createObjectURL(urlFile);
  ImageView.src = url;
}

// admin Create a Blog Post
function AddBlog() {
  var command = "AddBlogPost";
  var file = document.getElementById("AddBlogImage");
  var blogName = document.getElementById("blogName").value;
  var Category = document.getElementById("Category").value;
  var content = document.getElementById("content").value;

  var form = new FormData();
  form.append("command", command);
  form.append("file", file.files[0]);
  form.append("blogName", blogName);
  form.append("Category", Category);
  form.append("content", content);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      if (response == "Adding Success") {
        alert(response);
        window.location.reload();
      } else {
        alert(response);
      }
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

// Update Blog Post
function UpdateBlog(id) {
  var command = "UpdateBlogPost";
  var blogName = document.getElementById("blogName").value;
  var Category = document.getElementById("Category").value;
  var content = document.getElementById("content").value;

  var form = new FormData();
  form.append("command", command);
  form.append("blogName", blogName);
  form.append("Category", Category);
  form.append("content", content);
  form.append("id", id);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      alert(response);
      window.location.reload();
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

// admin Change Update Blog Image
function ChangeUpdateIBlogImage(id) {
  var command = "UpdateBlogPostChangeImage";
  var file = document.getElementById("AddBlogImage");
  var blogName = document.getElementById("blogName").value;

  var form = new FormData();
  form.append("command", command);
  form.append("file", file.files[0]);
  form.append("id", id);
  form.append("blogName", blogName);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      alert(response);
      window.location.reload();
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

// admin Delete Blogs
function DeleteBlog(id) {
  var command = "DeleteBlog";

  var form = new FormData();
  form.append("command", command);
  form.append("id", id);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      alert(response);
      window.location.reload();
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

//Customer CHange Blog Category

function ChangeCategory(Bid) {
  var command = "ChangeBlogCategory";

  var form = new FormData();
  form.append("command", command);
  form.append("Bid", Bid);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      window.location.reload();
    }
  };
  request.open("POST", "BackEndProcess.php", true);
  request.send(form);
}

// ---------------------FLEX------------------------------
function AddFlexProduct() {
  var command = "addFlexProduct";
  var file1 = document.getElementById("AddPrductimginput");
  var file2 = document.getElementById("AddSecondPrductimginput");
  var file3 = document.getElementById("AddThirdPrductimginput");
  var ProductName = document.getElementById("ProductName").value;
  var price = document.getElementById("price").value;
  var Flavor = document.getElementById("Flavor").value;
  var Description = document.getElementById("Description").value;
  var Quanitity = document.getElementById("Quanitity").value;

  var f = new FormData();
  f.append("command", command);
  f.append("file1", file1.files[0]);
  f.append("file2", file2.files[0]);
  f.append("file3", file3.files[0]);
  f.append("ProductName", ProductName);
  f.append("price", price);
  f.append("Flavor", Flavor);
  f.append("Description", Description);
  f.append("Quanitity", Quanitity);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      if (r.responseText == "Insert Success") {
        alert(r.responseText);
        window.location.reload();
      } else {
        alert(r.responseText);
      }
    }
  };
  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

// add Main Product Image function
function ChangeMainProductViewImage() {
  var ImageView = document.getElementById("MainImage");
  var urlFile = document.getElementById("AddPrductimginput");
  urlFile = urlFile.files[0];
  url = window.URL.createObjectURL(urlFile);
  ImageView.src = url;
}

// add Second Product Image function
function ChangeSecondProductViewImage() {
  var ImageView = document.getElementById("SecondImage");
  var urlFile = document.getElementById("AddSecondPrductimginput");
  urlFile = urlFile.files[0];
  url = window.URL.createObjectURL(urlFile);
  ImageView.src = url;
}

// add Third Product Image function
function ChangeThirrdProductViewImage() {
  var ImageView = document.getElementById("ThirdImage");
  var urlFile = document.getElementById("AddThirdPrductimginput");
  urlFile = urlFile.files[0];
  url = window.URL.createObjectURL(urlFile);
  ImageView.src = url;
}

// Change Main Product Image
function ChangeUpdateMainImage(id) {
  var file = document.getElementById("Main" + id);
  var command = "ChangeMainProductImage";

  var f = new FormData();
  f.append("command", command);
  f.append("id", id);
  f.append("file", file.files[0]);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      alert(r.responseText);
      var ImageView = document.getElementById("MainView" + id);
      urlFile = file.files[0];
      url = window.URL.createObjectURL(urlFile);
      ImageView.src = url;
    }
  };
  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

// Change Second Product Image
function ChangeUpdateSecondImage(id) {
  var file = document.getElementById("Second" + id);
  var command = "ChangeSecondProductImage";

  var f = new FormData();
  f.append("command", command);
  f.append("id", id);
  f.append("file", file.files[0]);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      alert(r.responseText);
      var ImageView = document.getElementById("SecondView" + id);
      urlFile = file.files[0];
      url = window.URL.createObjectURL(urlFile);
      ImageView.src = url;
    }
  };
  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

// Change Third Product Image
function ChangeUpdateThirdImage(id) {
  var file = document.getElementById("third" + id);
  var command = "ChangeThirdProductImage";

  var f = new FormData();
  f.append("command", command);
  f.append("id", id);
  f.append("file", file.files[0]);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      alert(r.responseText);
      var ImageView = document.getElementById("ThirdView" + id);
      urlFile = file.files[0];
      url = window.URL.createObjectURL(urlFile);
      ImageView.src = url;
    }
  };
  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

// Change Product info Process
function ChangeProductInfo(id) {
  var command = "ChangeProductInfo";
  var ProductName = document.getElementById("ProductName" + id).value;
  var ProductDescription = document.getElementById(
    "ProductDescription" + id
  ).value;
  var ProductQty = document.getElementById("ProductQty" + id).value;
  var ProductPrice = document.getElementById("ProductPrice" + id).value;
  var ProductFlavor = document.getElementById("ProductFlavor" + id).value;

  var f = new FormData();
  f.append("command", command);
  f.append("id", id);
  f.append("ProductName", ProductName);
  f.append("ProductDescription", ProductDescription);
  f.append("ProductQty", ProductQty);
  f.append("ProductPrice", ProductPrice);
  f.append("ProductFlavor", ProductFlavor);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      alert(r.responseText);
      window.location.reload();
    }
  };
  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

// Delete Product Info
function DeleteProduct(id) {
  var command = "DeleteProductInfo";
  var f = new FormData();
  f.append("command", command);
  f.append("id", id);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      alert(r.responseText);
      window.location.reload();
    }
  };
  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

// Change Single Product Image
function ChangeSingleMainChangeImage() {
  var Image = document.getElementById("MainImage");
  var BigImage = document.getElementById("BigImage");
  BigImage.src = Image.src;
}

function ChangeSingleSecondChangeImage() {
  var Image = document.getElementById("SecondImage");
  var BigImage = document.getElementById("BigImage");
  BigImage.src = Image.src;
}

function ChangeSingleThirdChangeImage() {
  var Image = document.getElementById("ThirdImage");
  var BigImage = document.getElementById("BigImage");
  BigImage.src = Image.src;
}

// Change Quanitity Process
function ChangeQuantitiy(action) {
  if (action == "+") {
    if (Quanitity < MaxQuantity) {
      Quanitity = Quanitity + 1;
      document.getElementById("QTYNo").innerHTML = Quanitity;
    }
  } else if (action == "-") {
    if (Quanitity > 1) {
      Quanitity = Quanitity - 1;
      document.getElementById("QTYNo").innerHTML = Quanitity;
    }
  }
}

// Add To cart
function AddToCart(Pid) {
  var command = "AddToCart";
  var Qty = document.getElementById("QTYNo").innerHTML;

  var f = new FormData();
  f.append("command", command);
  f.append("Pid", Pid);
  f.append("Qty", Qty);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      alert(r.responseText);
      window.location.reload();
    }
  };
  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

// remove From Cart
function removefromCart(Pid) {
  var command = "RemoveFromCart";

  var f = new FormData();
  f.append("command", command);
  f.append("Pid", Pid);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      alert(r.responseText);
      window.location.reload();
    }
  };
  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

// Change Cart Total Price                                                            <span><i class="bi bi-arrow-clockwise"></i></span>
function ChangeTotal(Pid) {
  var command = "ChangeQtyCart";
  var Qty = document.getElementById("Mcart_id" + Pid).value;

  var f = new FormData();
  f.append("command", command);
  f.append("Pid", Pid);
  f.append("Qty", Qty);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      var Total = r.responseText;
      var TotalPrice = document.getElementById("TotalPrice");
      TotalPrice.innerHTML = "Rs." + Total;
    }
  };
  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

// Add Order Process
function AddOrder() {
  var command = "AddOrder";
  var Email = document.getElementById("Email").value;
  var mobile = document.getElementById("mobile").value;
  var fname = document.getElementById("fname").value;
  var lname = document.getElementById("lname").value;
  var Address = document.getElementById("Address").value;
  var City = document.getElementById("City").value;
  var Pcode = document.getElementById("Pcode").value;

  var f = new FormData();
  f.append("command", command);
  f.append("Email", Email);
  f.append("mobile", mobile);
  f.append("fname", fname);
  f.append("lname", lname);
  f.append("Address", Address);
  f.append("City", City);
  f.append("Pcode", Pcode);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      var response = r.responseText;
      var SplitOut = response.split(",");
      var SplitLength = SplitOut.length;

      if (SplitLength > 1) {
        window.location = "invoice.php?id=" + SplitOut[1];
      } else {
        alert(response);
      }
    }
  };
  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

// Invoice Download As PDF
function downloadAsPDF(Order_id) {
  const element = document.getElementById("page"); // The HTML element to be converted

  var DownloadFileName = "Inovice_" + Order_id;

  html2pdf()
    .set({ html2canvas: { scale: 4 } }) // Adjust scale if needed
    .from(element)
    .save(DownloadFileName);
}

// Change Order Status
function ChangeOrderStatus(Order_id) {
  var command = "ChangeOrderStatus";

  var f = new FormData();
  f.append("command", command);
  f.append("Order_id", Order_id);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      alert(r.responseText);
      window.location.reload();
    }
  };
  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

// Leftside Carousel Programme

function ProgrammeLeft() {
  var Element = document.getElementById("InnerView");
  Element.style.transform = "translateX( -150px)";
}

// Rightside Carousel Programme
function ProgrammeRight() {
  var Element = document.getElementById("InnerView");
  Element.style.transform = "translateX( 0px)";
}

var elementMovingwidth = 0;
var Maxwidth = 140;
var MinWidth = 0;

// small
function ProgrammeLeftsmall() {
  if (elementMovingwidth >= -800) {
    elementMovingwidth = elementMovingwidth - 200;
    var Element = document.getElementById("InnerView");
    Element.style.transform = "translateX(" + elementMovingwidth + "px)";
  }
}

function ProgrammeRightsmall() {
  if (elementMovingwidth <= -100) {
    elementMovingwidth = elementMovingwidth + 200;
    var Element = document.getElementById("InnerView");
    Element.style.transform = "translateX(" + elementMovingwidth + "px)";
  }
}

// Trun Ladies PackagePrice
function TrunLadiesPackeage() {
  var LadiesPackageBtn = document.getElementById("LadiesBtn");
  LadiesPackageBtn.classList.add("Ladiesactive");

  var GentsPackageBtn = document.getElementById("GentsBtn");
  GentsPackageBtn.classList.remove("Gentsactive");
  GentsPackageBtn.classList.add("Gents");

  // Ladies Price Change
  document.getElementById("JaelaPrice").innerText = "RS.50,000";
  document.getElementById("colombo-7Price").innerText = "RS.95,000";
  document.getElementById("WTCPrice").innerText = "RS.65,000";
  window.location = "#price";
}

// Trun Gents PackagePrice
function TrunGentsPackeage() {
  var LadiesPackageBtn = document.getElementById("GentsBtn");
  LadiesPackageBtn.classList.add("Gentsactive");

  var GentsPackageBtn = document.getElementById("LadiesBtn");
  GentsPackageBtn.classList.remove("Ladiesactive");
  GentsPackageBtn.classList.add("Ladies");

  // Gents Price Change
  document.getElementById("JaelaPrice").innerText = "RS.60,000";
  document.getElementById("colombo-7Price").innerText = "RS.105,000";
  document.getElementById("WTCPrice").innerText = "RS.75,000";
  window.location = "#price";
}

// Change Product Categories
function ChangeHomeCategory(CategoryName) {
  var HomeProducts = "";
  var command = "ChangeHomePageCategoryPage";

  if (CategoryName == "TopSellers") {
    HomeProducts = "";
  } else if (CategoryName == "EndergyDrink") {
    HomeProducts = "EndergyDrink";
  } else if (CategoryName == "Protein") {
    HomeProducts = "Protein";
  }

  var f = new FormData();
  f.append("HomeProducts", HomeProducts);
  f.append("command", command);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if ((r.readyState == 4) & (r.status == 200)) {
      window.location.reload();
    }
  };

  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}
