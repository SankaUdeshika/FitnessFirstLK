<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BMI Calculator</title>
  <style>
    body {
      background-color: black;
      color: white;
    }

    .calculator-container {
      max-width: 600px;
      margin: auto;
      background: rgba(58, 56, 56, 0.568);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1, h2 {
      text-align: center;
    }

    .calform {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    input, select {
      margin: 5px;
      padding: 5px;
      width: 150px;
      color: red;
    }

    .calbutton {
      padding: 10px;
      margin-top: 10px;
      cursor: pointer;
      background-color: red;
      color: white;
    }

    .calresult {
      margin-top: 20px;
      text-align: center;
    }

    #bmiMeter {
      position: relative;
      margin-top: 20px;
    }

    .meter {
      display: flex;
      justify-content: space-between;
      background: linear-gradient(to right, #f00 0%, #ff0 30%, #0f0 60%, #f00 100%);
      padding: 10px;
      border-radius: 5px;
    }

    .meter span {
      flex: 1;
      text-align: center;
      font-size: 12px;
      font-weight: bold;
      color: #000;
    }

    .calarrow {
      width: 0;
      height: 0;
      border-left: 10px solid transparent;
      border-right: 10px solid transparent;
      border-bottom: 20px solid black;
      position: absolute;
      top: -25px;
      left: 0;
      transform: translateX(-50%);
      transition: left 0.3s ease-in-out;
    }

    .hide {
      display: none;
    }
  </style>
</head>
<body>
  <div class="calculator-container">
    <h1>BMI Calculator</h1>
    <div class="calform">
      <label>Age: <input type="number" id="age" min="2" max="120" value="25" /></label>

      <div class="gender">
        <label><input type="radio" name="gender" value="male" checked /> Male</label>
        <label><input type="radio" name="gender" value="female" /> Female</label>
      </div>

      <label>Units:
        <select id="unitType" onchange="switchUnits()">
          <option value="imperial">Imperial (ft/in & lbs)</option>
          <option value="metric">Metric (cm & kg)</option>
        </select>
      </label>

      <!-- Imperial Fields -->
      <div id="imperialFields">
        <label>Height:
          <input type="number" id="feet" min="1" max="8" value="5" /> feet
          <input type="number" id="inches" min="0" max="11" value="10" /> inches
        </label>
        <label>Weight: <input type="number" id="weightPounds" value="160" /> pounds</label>
      </div>

      <!-- Metric Fields -->
      <div id="metricFields" class="hide">
        <label>Height: <input type="number" id="heightCm" placeholder="cm" /> cm</label>
        <label>Weight: <input type="number" id="weightKg" placeholder="kg" /> kg</label>
      </div>

      <button class="calbutton" onclick="calculateBMI()">Calculate</button>
      <button class="calbutton" onclick="clearFields()">Clear</button>
    </div>

    <div id="result" class="calresult">
      <h2>Result</h2>
      <p id="bmiText">BMI = --</p>
      <p id="bmiStatus">(---)</p>
      <div id="bmiMeter">
        <div class="calarrow" id="arrow"></div>
        <div class="meter">
          <span class="underweight">Underweight</span>
          <span class="normal">Normal</span>
          <span class="overweight">Overweight</span>
          <span class="obese">Obesity</span>
        </div>
      </div>
      <ul>
        <li id="healthyRange">Healthy BMI range: 18.5 - 25</li>
        <li id="healthyWeight">Healthy weight for your height: --</li>
      </ul>
    </div>
  </div>

  <script>
    function switchUnits() {
      const unitType = document.getElementById("unitType").value;
      document.getElementById("imperialFields").classList.toggle("hide", unitType !== "imperial");
      document.getElementById("metricFields").classList.toggle("hide", unitType !== "metric");
    }

    function calculateBMI() {
      const unitType = document.getElementById("unitType").value;
      let heightMeters, weightKg;

      if (unitType === "imperial") {
        const feet = parseInt(document.getElementById("feet").value) || 0;
        const inches = parseInt(document.getElementById("inches").value) || 0;
        const weightPounds = parseFloat(document.getElementById("weightPounds").value);

        const totalInches = feet * 12 + inches;
        heightMeters = totalInches * 0.0254;
        weightKg = weightPounds * 0.453592;
      } else {
        const heightCm = parseFloat(document.getElementById("heightCm").value);
        const weightMetric = parseFloat(document.getElementById("weightKg").value);
        heightMeters = heightCm / 100;
        weightKg = weightMetric;
      }

      const bmi = (weightKg / (heightMeters ** 2)).toFixed(1);
      let status = "";

      if (bmi < 18.5) status = "Underweight";
      else if (bmi < 25) status = "Normal";
      else if (bmi < 30) status = "Overweight";
      else status = "Obesity";

      document.getElementById("bmiText").innerText = `BMI = ${bmi}`;
      document.getElementById("bmiStatus").innerText = `(${status})`;

      const minWeightKg = 18.5 * (heightMeters ** 2);
      const maxWeightKg = 25 * (heightMeters ** 2);

      if (unitType === "imperial") {
        const minLbs = (minWeightKg / 0.453592).toFixed(1);
        const maxLbs = (maxWeightKg / 0.453592).toFixed(1);
        document.getElementById("healthyWeight").innerText = `Healthy weight for your height: ${minLbs} lbs - ${maxLbs} lbs`;
      } else {
        document.getElementById("healthyWeight").innerText = `Healthy weight for your height: ${minWeightKg.toFixed(1)} kg - ${maxWeightKg.toFixed(1)} kg`;
      }

      const arrow = document.getElementById("arrow");
      let left = 0;
      if (bmi < 18.5) left = 10;
      else if (bmi < 25) left = 35;
      else if (bmi < 30) left = 65;
      else left = 90;
      arrow.style.left = `${left}%`;
    }

    function clearFields() {
      document.getElementById("age").value = "";
      document.getElementById("feet").value = "";
      document.getElementById("inches").value = "";
      document.getElementById("weightPounds").value = "";
      document.getElementById("heightCm").value = "";
      document.getElementById("weightKg").value = "";

      document.getElementById("bmiText").innerText = "BMI = --";
      document.getElementById("bmiStatus").innerText = "(---)";
      document.getElementById("arrow").style.left = "0%";
      document.getElementById("healthyWeight").innerText = "Healthy weight for your height: --";
    }
  </script>
</body>
</html>
