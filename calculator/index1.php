<!DOCTYPE html>
<html>

<head>
  <title>Calculator Applet</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <style>
  /* CSS for changing cursor */
  #registerLink {
    cursor: pointer;
  }
  </style>
</head>

<body>
  <section class="mx-auto sm:w-[1000px] mt-48 border shadow-md w-full flex flex-col sm:flex-row">
    <div class="col-span-2 sm:px-[50px] px-[20px] w-full sm:w-2/3">
      <div class="mb-6"><label for="small-input" class="block mt-8 mb-2 text-base font-medium text-gray-500">Loan Amount
          Required</label>
        <div class="flex"><span class="inline-flex border-b border-gray-300 w-full ">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <path data-v-76aa6b74=""
                d="M7,15H9C9,16.08 10.37,17 12,17C13.63,17 15,16.08 15,15C15,13.9 13.96,13.5 11.76,12.97C9.64,12.44 7,11.78 7,9C7,7.21 8.47,5.69 10.5,5.18V3H13.5V5.18C15.53,5.69 17,7.21 17,9H15C15,7.92 13.63,7 12,7C10.37,7 9,7.92 9,9C9,10.1 10.04,10.5 12.24,11.03C14.36,11.56 17,12.22 17,15C17,16.79 15.53,18.31 13.5,18.82V21H10.5V18.82C8.47,18.31 7,16.79 7,15Z">
              </path>
            </svg>
            <input type="text" id="loanAmount" name="loanAmount" onkeyup="loanAmount()"
              class="appearance-none bg-transparent text-gray-700 mr-3 w-full px-2 leading-tight focus:outline-none text-[19px]"
              placeholder="200,000" required></span>
        </div>
        <span id="amountError" class="font-bold" style="display:none;color:red;">Minimum loan amount is
          $100,000</span>
      </div>
      <div class="mb-6"><label for="small-input" class="block mb-2 text-base font-medium text-gray-500">Property
          Value</label>
        <div class="flex"><span class="inline-flex border-b border-gray-300 w-full ">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <path data-v-76aa6b74=""
                d="M7,15H9C9,16.08 10.37,17 12,17C13.63,17 15,16.08 15,15C15,13.9 13.96,13.5 11.76,12.97C9.64,12.44 7,11.78 7,9C7,7.21 8.47,5.69 10.5,5.18V3H13.5V5.18C15.53,5.69 17,7.21 17,9H15C15,7.92 13.63,7 12,7C10.37,7 9,7.92 9,9C9,10.1 10.04,10.5 12.24,11.03C14.36,11.56 17,12.22 17,15C17,16.79 15.53,18.31 13.5,18.82V21H10.5V18.82C8.47,18.31 7,16.79 7,15Z">
              </path>
            </svg>
            <input type="text" id="propertyValue" name="propertyValue" onkeypress="changeProperty()"
              class="appearance-none bg-transparent text-gray-700 mr-3 w-full px-2 leading-tight focus:outline-none text-[19px]"
              placeholder="300,000"></span>
        </div>
      </div>
      <div class="mb-6"><label for="small-input" class="block mb-2 text-base w-full font-medium text-gray-500">1st
          Mortgage
          Debt</label>
        <div class="flex"><span class="inline-flex border-b border-gray-300 w-full">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <path data-v-76aa6b74=""
                d="M7,15H9C9,16.08 10.37,17 12,17C13.63,17 15,16.08 15,15C15,13.9 13.96,13.5 11.76,12.97C9.64,12.44 7,11.78 7,9C7,7.21 8.47,5.69 10.5,5.18V3H13.5V5.18C15.53,5.69 17,7.21 17,9H15C15,7.92 13.63,7 12,7C10.37,7 9,7.92 9,9C9,10.1 10.04,10.5 12.24,11.03C14.36,11.56 17,12.22 17,15C17,16.79 15.53,18.31 13.5,18.82V21H10.5V18.82C8.47,18.31 7,16.79 7,15Z">
              </path>
            </svg>
            <input id="mortgageDebt" name="mortgageDebt" oninput="changeMortgage(event)"
              class="appearance-none bg-transparent text-gray-700 mr-3 w-full px-2 focus:outline-none text-[19px]"
              placeholder="Enter 0 if there is no loan on your property"></span>
        </div>
      </div>

      <label for="small-input" class="block mb-2 sm:text-[18px] font-medium text-gray-500">Property Type</label>
      <div class="flex flex-col sm:flex-row">
        <div class="flex items-center mr-4 mt-4">
          <input id="inline-radio" type="radio" value="0.75" name="inline-radio-group" onclick="changeType()" checked
            class="before:content[''] peer relative w-5 h-5 cursor-pointer text-blue-600 rounded-full bg-gray-100 transition-all border-pink-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 checked:border-red-500 before:opacity-0 before:transition-opacity checked:before:bg-pink-500 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 hover:before:opacity-10">
          <label for="inline-radio" class="ml-2 text-[16px] font-medium text-gray-600">Residential</label>
        </div>
        <div class="flex items-center mr-4 mt-4">
          <input id="inline-radio" type="radio" value="0.7" name="inline-radio-group" onclick="changeType()"
            class="before:content[''] peer relative w-5 h-5 cursor-pointer text-blue-600 rounded-full bg-gray-100 transition-all border-pink-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 checked:border-red-500 before:opacity-0 before:transition-opacity checked:before:bg-pink-500 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 hover:before:opacity-10">
          <label for="inline-radio" class="ml-2 text-[16px] font-medium text-gray-600">Vacant Land</label>
        </div>
        <div class="flex items-center mr-4 mt-4">
          <input id="inline-radio" type="radio" value="0.7" name="inline-radio-group" onclick="changeType()"
            class="before:content[''] peer relative w-5 h-5 cursor-pointer text-blue-600 rounded-full bg-gray-100 transition-all border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-blue-500 checked:before:bg-blue-500 hover:before:opacity-10">
          <label for="inline-radio" class="ml-2 text-[16px] font-medium text-gray-600">Commercial</label>
        </div>
      </div>
      <label for="small-input" class="block mt-8 mb-2 sm:text-[18px] font-medium text-gray-500">Loan Term <label
          class="text-sm">(month)</label></label>
      <input id="loanRange" type="range" min="1" max="6" value="1" onchange="changeTerm()"
        class="w-full h-2 bg-sky-400 rounded-xl appearance-none cursor-pointer">
      <div class="w-full flex justify-between text-xs px-2 mt-4 " default="">
        <span class="text-[19px]">1</span>
        <span class="text-[19px]">2</span>
        <span class="text-[19px]">3</span>
        <span class="text-[19px]">4</span>
        <span class="text-[19px]">5</span>
        <span class="text-[19px]">6</span>
      </div>
      <div class="flex mt-8">
        <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 text-xl font-bold">Your Fee</div>
        <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 text-xl font-bold">Are you a broker or referrer?</div>
      </div>
      <div class="flex mb-[30px] sm:mt-4 mt-2 justify-between">
        <!-- <div class="w-full md:w-1/2 px-1 mb-6 md:m b-0 text-xl font-bold"> 0.00</div> -->
        <div class="mb-6">
          <div class="flex"><span class="inline-flex border-b border-gray-300 w-full">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-percent"
                viewBox="0 0 16 16">
                <path
                  d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
              </svg>
              <input id="yourFee" name="yourFee" defaultValue="0.0" min="1.1" value="1.1" max="4.3" step="0.1"
                class="appearance-none bg-transparent text-gray-700 mr-3 w-full px-2 focus:outline-none text-[19px]"
                type="number" onkeyup="changeFee(event)"></span>
          </div>
          <span id="feeError" class="font-bold" style="display:none;color:red;">Maximum fee is 4.4%</span>
        </div>
        <div class="w-full ml-8 md:w-1/2 px-1 mb-6 md:mb-0 sm:text-xl font-bold text-lg">If not, <a
            href="https://equitycap.com.au/loan-application/register.php" target="_blank"><label
              class="border-b-4 border-blue-300 sm:text-xl text-base" id="registerLink">Register Now!</label></a>
        </div>
      </div>
    </div>

    <div id="firstCalc" style="display: flex;"
      class="flex flex-col text-center justify-center col-span-1 bg-[#282B4B] sm:px-[50px] px-[20px] w-full sm:w-1/3 py-5">
      <div class="items-center mx-auto text-[18px] text-white mt-[-90px]"><label class="items-center">Enter all
          amounts</label></div>
      <div class="items-center text-[18px] text-white mt-4">Select your Property Type</div>
      <div class="items-center text-[18px] text-white mt-4">Slide to the term you require</div>
      <div class="items-center text-[18px] text-white mt-4">Brokers/Referrers</div>
      <div class="items-center text-[18px] text-white">nominate your fee as a %</div>
      <div class="items-center text-[18px] text-white">Register with us today!</div>
      <div class="w-full px-1 mt-[60px]">
        <button id="qualifyButton"
          class="bg-sky-400 rounded-tr-[18PX] rounded-bl-[18px] text-white h-14 px-6 text-lg text-indigo-100 focus:outline-none focus:shadow-outline"
          type="submit" onclick="checkInputs()">
          See if you Qualify
        </button>
        <div class="mx-auto bg-white text-[13px] px-4 items-center sm:w-[200px] w-[160px] mt-[2px]">
          <span id="enterError" class="font-bold items-center" style="display:none;color:red;">Enter an amount in
            all fields
            to
            continue</span>
        </div>
      </div>
    </div>

    <div id="secondCalc" style="display:none"
      class="flex flex-col text-center justify-center col-span-1 bg-[#282B4B] sm:px-[50px] px-[20px] w-full sm:w-1/3 py-5">
      <div class="mb-6 mx-auto">
        <div class="flex"><span class="inline-flex w-full">
            <svg id="Layer_1" data-name="Layer 1" width="100" height="100" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 122.88 122.88">
              <defs>
                <style>
                .cls-1 {
                  fill: #3dd68e;
                }

                .cls-1,
                .cls-2 {
                  fill-rule: evenodd;
                }

                .cls-2 {
                  fill: #141518;
                }
                </style>
              </defs>
              <path class="cls-1" d="M45.54,2.11A61.42,61.42,0,1,1,2.11,77.34,61.42,61.42,0,0,1,45.54,2.11Z" />
              <path class="cls-2"
                d="M45.78,32.27c4.3,0,7.79,5,7.79,11.27s-3.49,11.27-7.79,11.27S38,49.77,38,43.54s3.48-11.27,7.78-11.27Z" />
              <path class="cls-2"
                d="M77.1,32.27c4.3,0,7.78,5,7.78,11.27S81.4,54.81,77.1,54.81s-7.79-5-7.79-11.27S72.8,32.27,77.1,32.27Z" />
              <path
                d="M28.8,70.82a39.65,39.65,0,0,0,8.83,8.41,42.72,42.72,0,0,0,25,7.53,40.44,40.44,0,0,0,24.12-8.12,35.75,35.75,0,0,0,7.49-7.87.22.22,0,0,1,.31,0L97,73.14a.21.21,0,0,1,0,.29A45.87,45.87,0,0,1,82.89,88.58,37.67,37.67,0,0,1,62.83,95a39,39,0,0,1-20.68-5.55A50.52,50.52,0,0,1,25.9,73.57a.23.23,0,0,1,0-.28l2.52-2.5a.22.22,0,0,1,.32,0l0,0Z" />
            </svg>
          </span></div>
      </div>
      <div class="items-center text-[18px] text-white">You could qualify for up to</div>
      <div class="items-center text-[40px] text-white font-bold">
        <p id="firstValue" class="break-words">$0,000,000</p>
      </div>
      <div class="items-center text-[18px] text-white mt-4">in the hand!</div>
      <div class="w-full px-1 mt-8">
        <button name="submitBtn" id="submitBtn" onclick="applyNow()"
          class="bg-sky-400 rounded-tr-[18PX] rounded-bl-[18px] text-white h-14 px-12 text-lg text-indigo-100 focus:outline-none focus:shadow-outline"
          type="submit">
          Apply Now
        </button>
      </div>
    </div>

    <div id="thirdCalc" style="display:none"
      class="flex flex-col text-center justify-center col-span-1 bg-[#282B4B] sm:px-[50px] px-[20px] w-full sm:w-1/3 py-5">
      <div class="mb-6 mx-auto">
        <div class="flex"><span class="inline-flex w-full">
            <svg id="Layer_1" data-name="Layer 1" width="100" height="100" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 122.88 122.88">
              <defs>
                <style>
                .cls-1 {
                  fill: #3dd68e;
                }

                .cls-1,
                .cls-2 {
                  fill-rule: evenodd;
                }

                .cls-2 {
                  fill: #141518;
                }
                </style>
              </defs>
              <path class="cls-1" d="M45.54,2.11A61.42,61.42,0,1,1,2.11,77.34,61.42,61.42,0,0,1,45.54,2.11Z" />
              <path class="cls-2"
                d="M45.78,32.27c4.3,0,7.79,5,7.79,11.27s-3.49,11.27-7.79,11.27S38,49.77,38,43.54s3.48-11.27,7.78-11.27Z" />
              <path class="cls-2"
                d="M77.1,32.27c4.3,0,7.78,5,7.78,11.27S81.4,54.81,77.1,54.81s-7.79-5-7.79-11.27S72.8,32.27,77.1,32.27Z" />
              <path
                d="M28.8,70.82a39.65,39.65,0,0,0,8.83,8.41,42.72,42.72,0,0,0,25,7.53,40.44,40.44,0,0,0,24.12-8.12,35.75,35.75,0,0,0,7.49-7.87.22.22,0,0,1,.31,0L97,73.14a.21.21,0,0,1,0,.29A45.87,45.87,0,0,1,82.89,88.58,37.67,37.67,0,0,1,62.83,95a39,39,0,0,1-20.68-5.55A50.52,50.52,0,0,1,25.9,73.57a.23.23,0,0,1,0-.28l2.52-2.5a.22.22,0,0,1,.32,0l0,0Z" />
            </svg>
          </span></div>
      </div>
      <div class="items-center text-[16px] text-white">You don't qualify for the amount you are seeking. However, you
        could qualify for up to</div>
      <div class="items-center text-[40px] text-white font-bold">
        <p id="qualifyValue" class="break-words">$0,000,000</p>
      </div>
      <div class="items-center text-[18px] text-white mt-4">in the hand!</div>
      <div class="w-full px-1 mt-4">
        <button name="submitBtn" id="submitBtn"
          class="bg-sky-400 rounded-tr-[18PX] rounded-bl-[18px] text-white h-14 px-12 text-lg text-indigo-100 focus:outline-none focus:shadow-outline"
          type="submit">
          Apply Now
        </button>
        <div class="items-center text-[16px] text-white mt-4">Click Apply or add additional properties to the Property
          Value total + additional debt to the 1st Mortgage Debt total</div>
      </div>
    </div>

    <div id="fourthCalc" style="display:none"
      class="flex flex-col items-center text-center justify-center col-span-1 bg-[#282B4B] sm:px-[50px] px-[20px] w-full sm:w-1/3 py-20">
      <div class="mx-auto flex gap-20 flex-col items-center">
        <div class="flex"><span class="inline-flex w-full">
            <svg version="1.1" width="100" height="100" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 122.88"
              style="enable-background:new 0 0 122.88 122.88" xml:space="preserve">
              <style type="text/css">
              .st0 {
                fill-rule: evenodd;
                clip-rule: evenodd;
                fill: #fe0002;
              }

              .st1 {
                fill-rule: evenodd;
                clip-rule: evenodd;
                fill: #141518;
              }
              </style>
              <g>
                <path class="st0"
                  d="M45.54,2.11c32.77-8.78,66.45,10.67,75.23,43.43c8.78,32.77-10.67,66.45-43.43,75.23 c-32.77,8.78-66.45-10.67-75.23-43.43C-6.67,44.57,12.77,10.89,45.54,2.11L45.54,2.11z" />
                <path class="st1"
                  d="M45.78,32.27c4.3,0,7.78,5.05,7.78,11.27c0,6.22-3.48,11.27-7.78,11.27c-4.3,0-7.78-5.05-7.78-11.27 C38,37.32,41.48,32.27,45.78,32.27L45.78,32.27z M28.12,94.7c16.69-21.63,51.01-21.16,65.78,0.04l2.41-2.39 c-16.54-28.07-51.56-29.07-70.7-0.15L28.12,94.7L28.12,94.7z M77.1,32.27c4.3,0,7.78,5.05,7.78,11.27c0,6.22-3.48,11.27-7.78,11.27 c-4.3,0-7.78-5.05-7.78-11.27C69.31,37.32,72.8,32.27,77.1,32.27L77.1,32.27z" />
              </g>
            </svg>
          </span>
        </div>
        <div class="items-center text-[16px] text-white">You don't qualify for the amount you are seeking. If you have
          additional property with equity please add additional property(s) to the Property Value total + additional
          debt
          to the 1st Mortgage Debt total</div>
      </div>
    </div>
  </section>

  <script>
  const loanAmountInput = document.getElementById("loanAmount");
  const feeInput = document.getElementById("yourFee");

  feeInput.addEventListener("keydown", function(event) {
    var feeInputValue = document.getElementById("yourFee").value
    if (feeInputValue.length == 1) {
      if (event.key == "Backspace") {
        fourthCalc.style.display = "flex"
        firstCalc.style.display = "none"
        secondCalc.style.display = "none"
        thirdCalc.style.display = "none"
        // var feeInputValue = document.getElementById("yourFee").value
        // console.log("feeInput", feeInputValue)
      }
    }

  })

  loanAmountInput.addEventListener("keydown", function(event) {
    if (event.key === "Backspace") {
      var loanAmount = document.getElementById("loanAmount").value;
      compareAmount = parseFloat(loanAmount.replace(/,/g, ''))
      if (parseFloat(compareAmount) <= 100000) {
        document.getElementById("qualifyButton").disabled = true;
        amountError.style.display = "inline";
        firstCalc.style.display = "none"
        fourthCalc.style.display = "flex"
      } else {
        document.getElementById("qualifyButton").disabled = false;
        firstCalc.style.display = "flex"
        amountError.style.display = "none";
        fourthCalc.style.display = "none"
        enterError.style.display = "none";
      }
    }
  });

  function changeProperty() {
    firstCalc.style.display = "flex";
    fourthCalc.style.display = "none";
    secondCalc.style.display = "none";
    fourthCalc.style.display = "none";
    enterError.style.display = "none";
  }

  function changeMortgage() {
    firstCalc.style.display = "flex";
    fourthCalc.style.display = "none";
    enterError.style.display = "none";
    secondCalc.style.display = "none";
    thirdCalc.style.display = "none";

    const input = event.target;
    let value = input.value.replace(/,/g, ''); // Remove existing commas
    value = value.replace(/\D/g, ''); // Remove non-digit characters
    value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ","); // Insert commas every three digits
    input.value = value;
  }

  function loanAmount() {
    var loanAmount = document.getElementById("loanAmount").value;
    compareAmount = parseFloat(loanAmount.replace(/,/g, ''))
    if (parseFloat(compareAmount) < 100000) {
      document.getElementById("qualifyButton").disabled = true;
      amountError.style.display = "inline";
      firstCalc.style.display = "none"
      fourthCalc.style.display = "flex"
      secondCalc.style.display = "none"
      thirdCalc.style.display = "none"
    } else {
      document.getElementById("qualifyButton").disabled = false;
      firstCalc.style.display = "flex"
      amountError.style.display = "none";
      fourthCalc.style.display = "none"
      secondCalc.style.display = "none"
      thirdCalc.style.display = "none";
      enterError.style.display = "none";
    }
    // firstCalc.style.display = "flex";
    // fourthCalc.style.display = "none";
    // secondCalc.style.display = "none";
    // thirdCalc.style.display = "none";
    // enterError.style.display = "none";
  }

  function changeTerm() {
    firstCalc.style.display = "flex";
    fourthCalc.style.display = "none";
    secondCalc.style.display = "none";
    thirdCalc.style.display = "none";
    enterError.style.display = "none";
  }

  function changeType() {
    firstCalc.style.display = "flex";
    fourthCalc.style.display = "none";
    secondCalc.style.display = "none";
    thirdCalc.style.display = "none";
    enterError.style.display = "none";
  }

  function changeFee() {
    var feeAmount = document.getElementById("yourFee").value;
    var inputValue = event.target.value;
    if (inputValue > 4.4) {
      event.target.value = 4.4;
    }
    if (feeAmount > 4.4) {
      feeError.style.display = "flex";
      firstCalc.style.display = "flex";
      fourthCalc.style.display = "none";
      secondCalc.style.display = "none";
      thirdCalc.style.display = "none";
      enterError.style.display = "none";
    } else {
      if (feeAmount == "") {
        fourthCalc.style.display = "none";
        secondCalc.style.display = "none"
        thirdCalc.style.display = "none"
        firstCalc.style.display = "flex"
        enterError.style.display = "inline";
      } else {
        feeError.style.display = "none";
        firstCalc.style.display = "flex";
        fourthCalc.style.display = "none";
        secondCalc.style.display = "none";
        thirdCalc.style.display = "none";
        enterError.style.display = "none";
      }
    }
  }

  function updateTextView(_obj) {
    var num = getNumber(_obj.val());
    _obj.val(num.toLocaleString());
  };

  function getNumber(_str) {
    if (_str === '0') {
      return 0;
    }
    var arr = _str.split('');
    var out = new Array();
    for (var cnt = 0; cnt < arr.length; cnt++) {
      if (isNaN(arr[cnt]) == false) {
        out.push(arr[cnt]);
      }
    }
    return Number(out.join(''));
  };

  $(document).ready(function() {
    $('input[type=text]').on('keyup', function() {
      updateTextView($(this));
    });
  });

  sessionStorage.setItem('property', 0.75);
  $(document).ready(function() {
    $('input[type=radio]').on('click', function() {
      sessionStorage.setItem('property', $(this).val());
    });
  });

  //Your Fee
  const yourFeeInput = document.getElementById('yourFee');

  // Define the allowed values
  const allowedValues = ['1.1', '2.2', '3.3', '4.4'];
  // Listen for the "input" event to validate the input
  yourFeeInput.addEventListener('input', function() {
    const value = parseFloat(this.value); // Convert the input value to a number

    // Check if the input value is in the allowed values array
    if (!allowedValues.includes(value.toFixed(1))) {
      this.setCustomValidity('Invalid value. Please enter one of the allowed values.'); // Display an error message
    } else {
      this.setCustomValidity(''); // Reset the error message if the value is valid
    }
  });

  function checkInputs() {
    // Get the values from the input fields
    var loanAmount = document.getElementById("loanAmount").value;
    var propertyValue = document.getElementById("propertyValue").value;
    var mortgageDebt = document.getElementById("mortgageDebt").value;
    var fee = document.getElementById("yourFee").value;
    var loanterm = document.getElementById("loanRange").value;
    var property = sessionStorage.getItem('property');
    var grossAmount = parseFloat(propertyValue.replace(/,/g, '')) * parseFloat(property.replace(/,/g, '')) - parseFloat(
      mortgageDebt.replace(/,/g, ''))
    var compareLoan = parseFloat(loanAmount.replace(/,/g, ''))

    var firstCalc = document.getElementById("firstCalc");
    var secondCalc = document.getElementById("secondCalc");
    var thirdCalc = document.getElementById("thirdCalc");
    var fourthCalc = document.getElementById("fourthCalc");

    var qualify, lenderFee;
    var feeAmount = document.getElementById("yourFee").value;
    if (feeAmount == "") {
      fourthCalc.style.display = "none";
      secondCalc.style.display = "none"
      thirdCalc.style.display = "none"
      firstCalc.style.display = "flex"
      enterError.style.display = "inline";
    } else {
      if (parseFloat(mortgageDebt) > 0) {
        var interest = 0.035 * grossAmount * parseFloat(loanterm);
        var broker = grossAmount * parseFloat(fee) * 0.01;
        var lenderFee = grossAmount * 0.022;
        var qualify = grossAmount - parseFloat(interest) - parseFloat(broker) - parseFloat(lenderFee)

        if (parseFloat(qualify)) {
          fourthCalc.style.display = "flex"
          firstCalc.style.display = "none"
          secondCalc.style.display = "none"
          thirdCalc.style.display = "none"
        }

        if (parseFloat(compareAmount) < 100000) {
          // amountError.style.display = "inline";
          fourthCalc.style.display = "flex"
          firstCalc.style.display = "none"
          secondCalc.style.display = "none"
          thirdCalc.style.display = "none"
        } else if (parseFloat(qualify) > 100000 && parseFloat(qualify) < parseFloat(compareLoan)) {
          // amountError.style.display = "none";
          thirdCalc.style.display = "flex"
          firstCalc.style.display = "none"
          secondCalc.style.display = "none"
          fourthCalc.style.display = "none"

          document.getElementById("qualifyValue").innerHTML = parseInt(qualify);
          var element = document.getElementById("qualifyValue");
          // Get the original innerHTML
          var originalHTML = element.innerHTML;
          var numericText = originalHTML.replace(/,/g, "");
          var formattedText = "$" + numericText.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
          element.innerHTML = formattedText;

        } else if (parseFloat(qualify) >= parseFloat(compareLoan)) {
          secondCalc.style.display = "flex"
          firstCalc.style.display = "none"
          thirdCalc.style.display = "none"
          fourthCalc.style.display = "none"

          document.getElementById("firstValue").innerHTML = parseInt(qualify);

          var element = document.getElementById("firstValue");
          // Get the original innerHTML
          var originalHTML = element.innerHTML;
          var numericText = originalHTML.replace(/,/g, "");
          var formattedText = "$" + numericText.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
          element.innerHTML = formattedText;
        }
        // Check if all three input fields have been entered
        if (loanAmount !== "" && propertyValue !== "" && mortgageDebt !== "") {
          firstCalc.style.display = "none"
          enterError.style.display = "inline";
        } else {
          enterError.style.display = "inline";
          event.preventDefault();
        }
      } else {

        var interest = 0.015 * grossAmount * parseFloat(loanterm);
        var broker = grossAmount * parseFloat(fee) * 0.01;
        var lenderFee = grossAmount * 0.011;
        var qualify = grossAmount - parseFloat(interest) - parseFloat(broker) - parseFloat(lenderFee)

        if (parseFloat(qualify) < 100000) {
          // amountError.style.display = "inline";
          fourthCalc.style.display = "flex"
          firstCalc.style.display = "none"
          secondCalc.style.display = "none"
          thirdCalc.style.display = "none"

        } else if (parseFloat(qualify) > 100000 && parseFloat(qualify) < parseFloat(compareLoan)) {
          thirdCalc.style.display = "flex"
          firstCalc.style.display = "none"
          secondCalc.style.display = "none"
          fourthCalc.style.display = "none"

          document.getElementById("qualifyValue").innerHTML = parseInt(qualify);
          var element = document.getElementById("qualifyValue");
          // Get the original innerHTML
          var originalHTML = element.innerHTML;
          var numericText = originalHTML.replace(/,/g, "");
          var formattedText = "$" + numericText.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
          element.innerHTML = formattedText;

        } else if (parseFloat(qualify) > parseFloat(loanAmount)) {
          secondCalc.style.display = "flex"
          firstCalc.style.display = "none"
          thirdCalc.style.display = "none"
          fourthCalc.style.display = "none"

          document.getElementById("firstValue").innerHTML = parseInt(qualify);
          var element = document.getElementById("firstValue");
          // Get the original innerHTML
          var originalHTML = element.innerHTML;
          var numericText = originalHTML.replace(/,/g, "");
          var formattedText = "$" + numericText.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
          element.innerHTML = formattedText;
        }
        // Check if all three input fields have been entered
        if (loanAmount !== "" && propertyValue !== "" && mortgageDebt !== "" && fee !== "") {
          // submitButton.disabled = false;
          firstCalc.style.display = "none"
          // amountError.style.display = "inline";
          enterError.style.display = "inline";
        } else {
          // Prevent the form from submitting
          enterError.style.display = "inline";
          event.preventDefault();
        }
      }
    }

    function applyNow() {
      window.open('https://equitycap.com.au/loan-application/register.php', '_blank');
    }

  }
  </script>
</body>

</html>