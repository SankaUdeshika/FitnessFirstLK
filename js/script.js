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
// carousel Slider End
