
<style>
.bmi-calculator {
    border-radius: 8px;
    background-color: #e0e0e0;
    padding: 20px;
    width: 45%;
    box-shadow: 5px 5px 10px #c1c1c1,
      -5px -5px 10px #ffffff;
  }

  .calculate {
    display: block;
    margin: 0 auto;
    padding: 10px;
    border: none;
    border-radius: 2px;
    background-color: #e4c495;
    width: 100%;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 5px 5px 10px #c1c1c1,
      -5px -5px 10px #ffffff;
  }

  .bmi-status {
    position: absolute;
    top: 0;
    right: 0;
  }

  .bmi-status div {
    margin: 0;
    padding: 5px;
    font-size: 15px;
    font-weight: normal;
  }

  .Underweight {
    background-color: #ffc0cb;
  }

  .Normal {
    background-color: #90ee90;
  }

  .Overweight {
    background-color: #ffa07a;
  }

  .Obese {
    background-color: #ff0000;
  }

  .Underweight,
  .Normal,
  .Overweight,
  .Obese {
    font-weight: bold;
    margin-top: 20px;
    padding: 20px;
  }


  .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  
  .button2 {background-color: #ffc0cb;} /* Underweight */
  .button3 {background-color: #90ee90;} /* Normal */ 
  .button4 {background-color: #ffa07a;} /* Overweight */ 
  .button5 {background-color: #ff0000;} /* Obese */

</style>

<div class="container">
    <div class="bmi-calculator m-3">
        <h1>Calculator</h1>
        <div class="input p-4">
        <label for="height">Height (cm):</label>
        <input type="text" id="height" placeholder="Height in cm">
        </div>
        <div class="input p-4">
        <label for="weight">Weight (kg):</label>
        <input type="text" id="weight" placeholder="Weight in kg">
        </div>
        <button type="submit" class="calculate">Check the Calculator</button>
        <div class="result"></div>
    </div>

    </div>

    <script>
    // select the calculate button
    var calculate = document.querySelector('.calculate');

    // attach event listener to the button
    calculate.addEventListener('click', findBMI);

    // function to find the BMI
    function findBMI() {
        var height = +document.querySelector('#height').value;
        var weight = +document.querySelector('#weight').value;
        // check height & weight are a valid number
        if (height <= 0 || weight <= 0 || isNaN(height) || isNaN(weight)) {
        alert('Please fill all fields with valid numbers');
        return;
        }
        // convert height to meters
        height = height / 100;
        var bmi = weight / (height * height);
        showResult(bmi);
    }

    // function to show the result
    function showResult(bmi) {
        var result = document.querySelector('.result');
        var bmiStatus;
        var link;
        if (bmi < 18.5) {
        bmiStatus = 'Underweight';
        link='https://www.mayoclinic.org/healthy-lifestyle/nutrition-and-healthy-eating/expert-answers/underweight/faq-20058429';
        } else if (bmi < 25) {
        bmiStatus = 'Normal';
        link='https://kidshealth.org/en/teens/weight-tips.html';
        } else if (bmi < 30) {
        bmiStatus = 'Overweight';
        link='https://www.healthline.com/nutrition/how-to-lose-weight-as-fast-as-possible#6-weight-loss-steps';
        } else {
        bmiStatus = 'Obese';
        link='https://www.medicalnewstoday.com/articles/303409';
        }
        result.innerHTML = `<div class=${bmiStatus}>Your BMI is ${bmi.toFixed(2)} and you are ${bmiStatus}. Click <a href="${link}">here</a> to learn more.</div>`;

// Redirect the user to the link
//window.location.href = link;
    }
    </script>


    <br><br><br><br>
    <br><br><br><br>