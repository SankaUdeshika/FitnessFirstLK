// PreLoader
function preloader() {
  var Preload = document.getElementById("preloader");
  Preload.classList.add("hide");
}
window.addEventListener("load", preloader);

// BMI Calculator
function calculateBMI() {
    var weight ;
    var height ;
  // Ensure weight and height are valid numbers
  if (isNaN(weight) || isNaN(height) || weight <= 0 || height <= 0) {
    return "Invalid input. Please enter valid weight and height.";
  }

  // Calculate BMI
  var bmi = weight / (height * height);

  // Return the calculated BMI
  return bmi.toFixed(2); // Round to two decimal places
}


function ShowBmiCalcutorModel(){
    var id = document.getElementById("BmiModel");
    var model = new bootstrap.Modal(id);
    model.show();
}