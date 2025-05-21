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
      alert(response);
      if (response == "Success") {
        window.location = "adminindex.php";
      }
      // else if (response == "Error") {
      //   alert("invalid email and Password");
      // }
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

// admin add new category
function adminaddnewCategory() {
  var command = "adminaddNewCategory";

  var addNewCategory = document.getElementById("addNewCategory").value;

  var form = new FormData();
  form.append("command", command);
  form.append("addNewCategory", addNewCategory);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      alert(response);
      window.location.reload();
    }
  };
  request.open("POST", "FlexBackendPross.php", true);
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

  var Flavour;

  if (document.getElementById("FlavourSelector").value == 0) {
    if (document.getElementById("NewFlavour").value != "") {
      Flavour = document.getElementById("NewFlavour").value;
    } else {
      alert("Please Select a Flavour or Type a new one");
    }
  } else {
    Flavour = document.getElementById("FlavourSelector").value;
  }

  if (document.getElementById("ProductCategorySelector").value != 0) {
    if (Flavour != null) {
      var Category = document.getElementById("ProductCategorySelector").value;
      var file1 = document.getElementById("AddPrductimginput");
      var file2 = document.getElementById("AddSecondPrductimginput");
      var file3 = document.getElementById("AddThirdPrductimginput");
      var ProductName = document.getElementById("ProductName").value;
      var price = document.getElementById("price").value;
      var Description = document.getElementById("Description").value;
      var Quanitity = document.getElementById("Quanitity").value;

      var f = new FormData();
      f.append("command", command);
      f.append("Category", Category);
      f.append("file1", file1.files[0]);
      f.append("file2", file2.files[0]);
      f.append("file3", file3.files[0]);
      f.append("ProductName", ProductName);
      f.append("price", price);
      f.append("Description", Description);
      f.append("Quanitity", Quanitity);
      f.append("Flavour", Flavour);
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
    } else {
      alert("NO");
    }
  } else {
    alert("Please Select a Category");
  }
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

  var f = new FormData();
  f.append("command", command);
  f.append("id", id);
  f.append("ProductName", ProductName);
  f.append("ProductDescription", ProductDescription);
  f.append("ProductQty", ProductQty);
  f.append("ProductPrice", ProductPrice);

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
      window.location = "products.php";
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
      // alert(r.responseText);
      window.location.reload();
    }
  };
  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

// instance Buy Now
function IniBuyNow(Pid) {
  var command = "AddToCart";
  var Qty = document.getElementById("QTYNo").innerHTML;

  var f = new FormData();
  f.append("command", command);
  f.append("Pid", Pid);
  f.append("Qty", Qty);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      // alert(r.responseText);
      window.location = "Checkout.php";
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
      var payhereObj = JSON.parse(response);
      console.log(payhereObj);
      payhere.startPayment(payhereObj);

      // Payhere Intregator
      // Payment completed. It can be a successful failure.
      payhere.onCompleted = function onCompleted(Order_id) {
        console.log("Payment completed. OrderID:" + Order_id);
        // Redirect invoice page
        window.location = "invoice.php?id=" + Order_id;
        // Note: validate the payment and show success or failure page to the customer
      };

      // Payment window closed
      payhere.onDismissed = function onDismissed() {
        // Note: Prompt user to pay again or show an error page
        console.log("Payment dismissed");
        // Redirect invoice page
        window.location = "invoice.php?id=" + Order_id;
      };

      // Error occurred
      payhere.onError = function onError(error) {
        // Note: show an error page
        console.log("Error:" + error);
        alert(error);
      };
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
  const confirmmessage = confirm("Are You Sure To Change Order Status?");

  if (confirmmessage) {
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
}

// cancel the orders
function CancelOrderStatus(Order_id) {
  const confirmmessage = confirm("Are You Sure To Cancel the Order Status?");

  if (confirmmessage) {
    var command = "cencelOrderStatus";

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

// Package Group
var package_group = "gents";

// Trun Ladies PackagePrice
function TrunLadiesPackeage() {
  var LadiesPackageBtn = document.getElementById("LadiesBtn");
  LadiesPackageBtn.classList.add("Ladiesactive");

  var GentsPackageBtn = document.getElementById("GentsBtn");
  if (GentsPackageBtn.classList.contains("Gentsactive")) {
    GentsPackageBtn.classList.remove("Gentsactive");
    GentsPackageBtn.classList.add("Gents");
  }

  var CouplePackageBtn = document.getElementById("CoupleBtn");
  if (CouplePackageBtn.classList.contains("Coupleactive")) {
    CouplePackageBtn.classList.remove("Coupleactive");
    CouplePackageBtn.classList.add("Couple");
  }

  // Ladies Price Change
  document.getElementById("JaelaPrice").innerText = "RS.50,000";
  document.getElementById("colombo-7Price").innerText = "RS.95,000";
  document.getElementById("WTCPrice").innerText = "RS.65,000";
  package_group = "Ladies";
  window.location = "#price";
}

// Trun Gents PackagePrice
function TrunGentsPackeage() {
  var GentsPackageBtn = document.getElementById("GentsBtn");
  GentsPackageBtn.classList.add("Gentsactive");

  var LadiesPackageBtn = document.getElementById("LadiesBtn");
  if (LadiesPackageBtn.classList.contains("Ladiesactive")) {
    LadiesPackageBtn.classList.remove("Ladiesactive");
    LadiesPackageBtn.classList.add("Ladies");
  }

  var CouplePackageBtn = document.getElementById("CoupleBtn");
  if (CouplePackageBtn.classList.contains("Coupleactive")) {
    CouplePackageBtn.classList.remove("Coupleactive");
    CouplePackageBtn.classList.add("Couple");
  }

  // Gents Price Change
  document.getElementById("JaelaPrice").innerText = "RS.60,000";
  document.getElementById("colombo-7Price").innerText = "RS.105,000";
  document.getElementById("WTCPrice").innerText = "RS.75,000";
  package_group = "gents";
  window.location = "#price";
}

//  Couple Package Price
function CouplePackeage() {
  var couplePackageBtn = document.getElementById("CoupleBtn");
  couplePackageBtn.classList.add("Coupleactive");

  var LadiesPackageBtn = document.getElementById("LadiesBtn");
  if (LadiesPackageBtn.classList.contains("Ladiesactive")) {
    LadiesPackageBtn.classList.remove("Ladiesactive");
    LadiesPackageBtn.classList.add("Ladies");
  }

  var GentsPackageBtn = document.getElementById("GentsBtn");
  if (GentsPackageBtn.classList.contains("Gentsactive")) {
    GentsPackageBtn.classList.remove("Gentsactive");
    GentsPackageBtn.classList.add("Gents");
  }

  // // Ladies Price Change
  document.getElementById("JaelaPrice").innerText = "RS.00,000";
  document.getElementById("colombo-7Price").innerText = "RS.00,000";
  document.getElementById("WTCPrice").innerText = "RS.00,000";
  package_group = "couple";
  window.location = "#price";
}

function goPackageCheckoutPage(locationID) {
  var packageId = 1;
  if (package_group == "gents" && locationID == "1") {
    //1
    packageId = 1;
  } else if (package_group == "gents" && locationID == "2") {
    //2
    packageId = 2;
  } else if (package_group == "gents" && locationID == "3") {
    //3
    packageId = 3;
  } else if (package_group == "gents" && locationID == "4") {
    //4
    packageId = 4;
  } else if (package_group == "Ladies" && locationID == "1") {
    //5
    packageId = 5;
  } else if (package_group == "Ladies" && locationID == "2") {
    //7
    packageId = 6;
  } else if (package_group == "Ladies" && locationID == "3") {
    //8
    packageId = 7;
  } else if (package_group == "Ladies" && locationID == "4") {
    //9
    packageId = 8;
  } else if (package_group == "couple" && locationID == "1") {
    //10
    packageId = 9;
  } else if (package_group == "couple" && locationID == "2") {
    //11
    packageId = 10;
  } else if (package_group == "couple" && locationID == "3") {
    //12
    packageId = 11;
  } else if (package_group == "couple" && locationID == "4") {
    //13
    packageId = 12;
  }
  window.location = "membershipCheckout.php?id=" + packageId;
}

function addMembership() {
  alert("please Wait");
  var email = document.getElementById("Email").value;
  var mobile = document.getElementById("mobile").value;
  var first_name = document.getElementById("fname").value;
  var last_name = document.getElementById("lname").value;
  const uniqueId =
    Date.now().toString(36) + Math.random().toString(36).substring(2);

  var f = new FormData();
  f.append("Email", email);
  f.append("mobile", mobile);
  f.append("fname", first_name);
  f.append("lname", last_name);
  f.append("uniqueId", uniqueId);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      var response = r.responseText;
      alert(response);
      if (response == "Please Check you Email") {
        window.location = "index.php";
      }
    }
  };
  r.open("POST", "purchaseMemberships.php", false);
  r.send(f);
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

// Change Catelog Category
function ChangeCatelogDropDown() {
  var CatelogDropDown = document.getElementById("CatelogDropDown").value;
  if (CatelogDropDown != "other") {
    var command = "ChangeCatelogDropDown";

    var f = new FormData();
    f.append("CatelogDropDown", CatelogDropDown);
    f.append("command", command);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
      if ((r.readyState == 4) & (r.status == 200)) {
        window.location.reload();
      }
    };
    r.open("POST", "FlexBackendPross.php", true);
    r.send(f);
  } else {
    alert("Please Select a Category");
  }
}

// ChangeCatelgo category Btn
function ChangeCatelogCategory(CategoryName) {
  var CatelogProducts = "none";
  var command = "ChangeCatelogCategoryBtn";

  if (CategoryName == "endergydrinks") {
    CatelogProducts = "Energy Drink";
  } else if (CategoryName == "protien") {
    CatelogProducts = "Protein";
  } else if (CategoryName == "pre-workout") {
    CatelogProducts = "Pre-Workout";
  }

  var f = new FormData();
  f.append("CatelogProducts", CatelogProducts);
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

// Search product by Name
function SearchProductByName() {
  var ProductName = document.getElementById("SearchProductName").value;
  var command = "SearchProductByname";

  var f = new FormData();
  f.append("ProductName", ProductName);
  f.append("command", command);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if ((r.readyState == 4) & (r.status == 200)) {
      var ShowResponseHtml = r.responseText;
      document.getElementById("ShowSearchItems").innerHTML = ShowResponseHtml;
      document.getElementById("ShowSearchItemssmall").innerHTML =
        ShowResponseHtml;
      window.location = "#SearchResultShow";
    }
  };

  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

// Search Product By Price
function SearchProductByPrice() {
  var MinPrice = document.getElementById("SearchMinPrice").value;
  var MaxPrice = document.getElementById("searchMaxPrice").value;

  var command = "SearchProductByPrice";

  var f = new FormData();
  f.append("MinPrice", MinPrice);
  f.append("MaxPrice", MaxPrice);

  f.append("command", command);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if ((r.readyState == 4) & (r.status == 200)) {
      var ShowResponseHtml = r.responseText;
      document.getElementById("ShowSearchItems").innerHTML = ShowResponseHtml;
      // alert(r.responseText);
    }
  };

  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

// Search Product By Small Screen Categiry Category
function smallScreenCategorySearch(CategoryName) {
  var command = "smallScreenCategorySearch";

  var f = new FormData();
  f.append("CategoryName", CategoryName);
  f.append("command", command);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if ((r.readyState == 4) & (r.status == 200)) {
      var ShowResponseHtml = r.responseText;
      document.getElementById("ShowSearchItemssmall").innerHTML =
        ShowResponseHtml;
      window.location = "#ShowSearchItemssmall";
      // alert(r.responseText);
    }
  };

  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

// Small Screen Product Carosel Functions
// Energy Drinks
var EnergyCarousel = 0;
function EnergyCarouselleft() {
  if (EnergyCarousel > -340) {
    EnergyCarousel = EnergyCarousel - 170;
    var InnerCarousel = document.getElementById("EnergyDrinksInnerCarosuel");
    InnerCarousel.style.transform = "translateX( " + EnergyCarousel + "px)";
  }
}

function EnergyCarouselRight() {
  if (EnergyCarousel != 0) {
    EnergyCarousel = EnergyCarousel + 170;
    var InnerCarousel = document.getElementById("EnergyDrinksInnerCarosuel");
    InnerCarousel.style.transform = "translateX( " + EnergyCarousel + "px)";
  }
}

// Protein
var ProteinCarousel = 0;
function ProteinCarouselleft() {
  if (ProteinCarousel > -340) {
    ProteinCarousel = ProteinCarousel - 170;
    var InnerCarousel = document.getElementById("ProteinInnerCarosuel");
    InnerCarousel.style.transform = "translateX( " + ProteinCarousel + "px)";
  }
}

function ProteinCarouselRight2() {
  if (ProteinCarousel != 0) {
    ProteinCarousel = ProteinCarousel + 170;
    var InnerCarousel = document.getElementById("ProteinInnerCarosuel");
    InnerCarousel.style.transform = "translateX( " + ProteinCarousel + "px)";
  }
}

// Pre-Workout
var PreWorkoutCarousel = 0;
function PreWorkoutCarouselleft() {
  if (PreWorkoutCarousel > -340) {
    PreWorkoutCarousel = PreWorkoutCarousel - 170;
    var InnerCarousel = document.getElementById("PreWorkoutInnerCarosuel");
    InnerCarousel.style.transform = "translateX( " + PreWorkoutCarousel + "px)";
  }
}

function ProteinCarouselRight() {
  if (PreWorkoutCarousel != 0) {
    PreWorkoutCarousel = PreWorkoutCarousel + 170;
    var InnerCarousel = document.getElementById("PreWorkoutInnerCarosuel");
    InnerCarousel.style.transform = "translateX( " + PreWorkoutCarousel + "px)";
  }
}

var MainNumber = 0;

function StartChageFlexHomeCaroysel() {
  setInterval(() => {
    MainNumber = MainNumber + 1;
    ChangeFlexHomeCarlousel(MainNumber);
  }, 3000);
}

window.addEventListener("load", StartChageFlexHomeCaroysel);

function ChangeFlexHomeCarlousel(number) {
  var value = number % 2;
  if (value == 0) {
    document.getElementById("FlexHomeCarosuelImage").src =
      "Resources/images/carouselImages/flexx 1.png";
  } else if (value == 1) {
    document.getElementById("FlexHomeCarosuelImage").src =
      "Resources/images/carouselImages/flexx03 1.png";
  }
}

function selectAndAddFlavours(id) {
  var addFlavourSelector = document.getElementById(
    "addFlavourSelector" + id
  ).value;

  var command = "selectAndAddFlavours";

  var f = new FormData();
  f.append("pid", id);
  f.append("addFlavourSelector", addFlavourSelector);
  f.append("command", command);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if ((r.readyState == 4) & (r.status == 200)) {
      alert(r.responseText);
      window.location.reload();
    }
  };
  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

function DeleteFlavouronUpdateProduct(pid, Flavour_id) {
  var command = "DeleteProductFlavoursonUpdateProcess";

  var f = new FormData();
  f.append("pid", pid);
  f.append("Flavour_id", Flavour_id);

  f.append("command", command);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if ((r.readyState == 4) & (r.status == 200)) {
      alert(r.responseText);
      window.location.reload();
    }
  };
  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

// Change Flavour
function ChangeFlavour(FlavourName) {
  var command = "ChangingFlavour";

  var f = new FormData();
  f.append("FlavourName", FlavourName);
  f.append("command", command);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if ((r.readyState == 4) & (r.status == 200)) {
      // alert(r.responseText);
      window.location.reload();
    }
  };
  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

// Delete Category
function DeleteCategory() {
  var command = "adminDeleteCategory";
  var ProductCategorySelectior = document.getElementById(
    "ProductCategorySelector"
  ).value;

  var f = new FormData();
  f.append("CategoryID", ProductCategorySelectior);
  f.append("command", command);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if ((r.readyState == 4) & (r.status == 200)) {
      alert(r.responseText);
      window.location.reload();
    }
  };
  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

// Delete Flavour on ProductAdding
function DeleteFlavourOnProductAdding() {
  var command = "adminDeleteProductFlavour";
  var FlavourSelector = document.getElementById("FlavourSelector").value;

  var f = new FormData();
  f.append("FlavourSelector", FlavourSelector);
  f.append("command", command);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if ((r.readyState == 4) & (r.status == 200)) {
      alert(r.responseText);
      window.location.reload();
    }
  };
  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}
// Delete Flavours in product page
function DeleteFlavourOnProductpage(fname) {
  var command = "adminDeleteProductFlavour";
  var FlavourSelector = fname;

  var f = new FormData();
  f.append("FlavourSelector", FlavourSelector);
  f.append("command", command);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if ((r.readyState == 4) & (r.status == 200)) {
      // alert(r.responseText);
      if (r.readyState == "Delete Success") {
        window.location.reload();
      } else {
        alert(
          "Error. you can only delete non assignable flavour. please delete flavour product first."
        );
      }
    }
  };
  r.open("POST", "FlexBackendPross.php", true);
  r.send(f);
}

// document
//   .querySelector(".EventListText")
//   .addEventListener("mouseover", function () {
//     document.querySelector(".EventImage").style.backgroundImage =
//       "url('Resources/images/Events/FightNight/A7S09290.jpg')";
//     document.querySelector(".EventImage").style.transition = "0.2s ease-in-out";
//   });

// document
//   .querySelector(".EventListText")
//   .addEventListener("mouseout", function () {
//     document.querySelector(".EventImage").style.backgroundImage =
//       "url('Resources/images/Events/FightNight/A7S09388.jpg')";
//     document.querySelector(".EventImage").style.transition = "0.2s ease-in-out";
//   });

// EventlistnerText2
// document.querySelector('.EventListText2').addEventListener('mouseover',function(){
//   document.querySelector('.EventImage').style.backgroundImage = "url('Resources/images/carouselImages/4.jpeg')";
//   document.querySelector('.EventImage').style.transition = "0.2s ease-in-out";
// });

// document.querySelector('.EventListText2').addEventListener('mouseout', function() {
//   document.querySelector('.EventImage').style.backgroundImage = "url('Resources/images/carouselImages/2.jpeg')";
//   document.querySelector('.EventImage').style.transition = "0.2s ease-in-out";
// });

// document
//   .querySelector(".findGymBox")
//   .addEventListener("mouseover", function () {
//     document.querySelector(".findGymImage").style.scale = 1.2;
//     document.querySelector(".findGymText").style.scale = 0.9;
//     document.querySelector(".findGymBox").style.cursor = "pointer";
//   });

// document.querySelector(".findGymBox").addEventListener("mouseout", function () {
//   document.querySelector(".findGymImage").style.scale = 1;
//   document.querySelector(".findGymText").style.scale = 1;
// });

// document
//   .querySelector(".supplimentRow")
//   .addEventListener("mouseover", function () {
//     document.querySelector(".supplimentRow").style.left = "0%";
//     document.querySelector(".SupplimentBOX").style.scale = "1.1";
//   });
// document
//   .querySelector(".supplimentRow")
//   .addEventListener("mouseout", function () {
//     document.querySelector(".supplimentRow").style.left = "-53%";
//     document.querySelector(".SupplimentBOX").style.scale = "1";
//   });

document.querySelector(".BLOGRow").addEventListener("mouseover", function () {
  document.querySelector(".BLOGRow").style.left = "0%";
  document.querySelector(".BlogBOX").style.scale = "1.1";
});
document.querySelector(".BLOGRow").addEventListener("mouseout", function () {
  document.querySelector(".BLOGRow").style.left = "53%";
  document.querySelector(".BlogBOX").style.scale = "1";
});

function showGoogleLocation(location) {
  if (location == "colombo") {
    document.getElementById("GoogleMap").src =
      "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31686.815227955212!2d79.82922301083981!3d6.9083058999999984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2597a85531ecb%3A0xd24f023f2b2a2bd5!2sFitness%20First%20-%20Colombo%207!5e0!3m2!1sen!2slk!4v1723187781024!5m2!1sen!2slk";
  } else if (location == "jaela") {
    document.getElementById("GoogleMap").src =
      "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31676.654279610524!2d79.86019721083984!3d7.0583264000000066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f737cddbfe73%3A0x8db9e4efb440ac7a!2sFitness%20First%20-%20Ja%20Ela!5e0!3m2!1sen!2slk!4v1723188546821!5m2!1sen!2slk";
  } else if (location == "wtc") {
    document.getElementById("GoogleMap").src =
      "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31685.182231971485!2d79.80819611083984!3d6.9326339999999975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2592c3f054759%3A0x3cdec16a4408635e!2sFitness%20First%20-%20WTC!5e0!3m2!1sen!2slk!4v1723188585859!5m2!1sen!2slk";
  }
}

document
  .getElementById("MemebershipsHoverImage")
  .addEventListener("mouseover", function () {
    document.getElementById("membershipHoverText").style.opacity = "1";
  });

document
  .getElementById("MemebershipsHoverImage")
  .addEventListener("mouseout", function () {
    document.getElementById("membershipHoverText").style.opacity = "0";
  });

document
  .getElementById("EventsHoverImage")
  .addEventListener("mouseover", function () {
    document.getElementById("EventsHoverText").style.opacity = "1";
  });

document
  .getElementById("EventsHoverImage")
  .addEventListener("mouseout", function () {
    document.getElementById("EventsHoverText").style.opacity = "0";
  });
