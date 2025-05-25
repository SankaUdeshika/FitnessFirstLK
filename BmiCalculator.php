<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="style.css" />
    <style>


        .calculator-container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            text-align: center;
        }

        .calform {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input {
            margin: 5px;
            padding: 5px;
            width: 70px;
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
    </style>
</head>

<body style="background-color: black;">
    <div class="calculator-container" style="background-color: rgba(58, 56, 56, 0.568);">
        <h1>BMI Calculator</h1>
        <div class="calform">
            <label>Age: <input type="number" style="color: red;" id="age" min="2" max="120" value="25" /></label>
            <div class="gender">
                <label><input type="radio" style="color: red;" name="gender" value="male" checked /> Male</label>
                <label><input type="radio" style="color: red;" name="gender" value="female" /> Female</label>
            </div>
            <label>Height:
                <input type="number" style="color: red;" id="feet" min="1" max="8" value="5" /> feet
                <input type="number" style="color: red;" id="inches" min="0" max="11" value="10" /> inches
            </label>
            <label>Weight: <input type="number" style="color: red;" id="weight" value="160" /> pounds</label>
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

    <script src="script.js"></script>
    <script>
        function calculateBMI() {
            const feet = parseInt(document.getElementById("feet").value);
            const inches = parseInt(document.getElementById("inches").value);
            const weight = parseFloat(document.getElementById("weight").value);

            const heightInInches = feet * 12 + inches;
            const heightInMeters = heightInInches * 0.0254;
            const weightInKg = weight * 0.453592;

            const bmi = (weightInKg / (heightInMeters ** 2)).toFixed(1);

            // BMI Categories
            let status = '';
            if (bmi < 18.5) status = 'Underweight';
            else if (bmi < 25) status = 'Normal';
            else if (bmi < 30) status = 'Overweight';
            else status = 'Obesity';

            document.getElementById("bmiText").innerText = `BMI = ${bmi}`;
            document.getElementById("bmiStatus").innerText = `(${status})`;

            // Healthy weight range
            const minWeight = (18.5 * (heightInMeters ** 2) / 0.453592).toFixed(1);
            const maxWeight = (25 * (heightInMeters ** 2) / 0.453592).toFixed(1);
            document.getElementById("healthyWeight").innerText = `Healthy weight for your height: ${minWeight} lbs - ${maxWeight} lbs`;

            // Update arrow position
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
            document.getElementById("weight").value = "";
            document.getElementById("bmiText").innerText = "BMI = --";
            document.getElementById("bmiStatus").innerText = "(---)";
            document.getElementById("arrow").style.left = "0%";
            document.getElementById("healthyWeight").innerText = "Healthy weight for your height: --";
        }
    </script>
</body>

</html>