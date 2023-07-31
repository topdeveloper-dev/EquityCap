<!DOCTYPE html>
<html>

<head>
  <title>Calculator Applet</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
            <input type="text" id="loanAmount" name="loanAmount"
              class="appearance-none bg-transparent text-gray-700 mr-3 w-full px-2 leading-tight focus:outline-none"
              placeholder="1000" required></span>
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
            <input type="text" id="propertyValue" name="propertyValue"
              class="appearance-none bg-transparent text-gray-700 mr-3 w-full px-2 leading-tight focus:outline-none"
              placeholder="1000"></span>
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
            <input type="text" id="mortgageDebt" name="mortgageDebt"
              class="appearance-none bg-transparent text-gray-700 mr-3 w-full px-2 focus:outline-none"
              placeholder="Enter 0 if thre is no loan on your property"></span>
        </div>
      </div>

      <label for="small-input" class="block mb-2 sm:text-[18px] font-medium text-gray-500">Property Type</label>
      <div class="flex flex-col sm:flex-row">
        <div class="flex items-center mr-4 mt-4">
          <input id="inline-radio" type="radio" value="" name="inline-radio-group"
            class="before:content[''] peer relative w-5 h-5 cursor-pointer text-blue-600 rounded-full bg-gray-100 transition-all border-pink-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 checked:border-red-500 before:opacity-0 before:transition-opacity checked:before:bg-pink-500 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 hover:before:opacity-10">
          <label for="inline-radio" class="ml-2 text-[16px] font-medium text-gray-600">Residential</label>
        </div>
        <div class="flex items-center mr-4 mt-4">
          <input id="inline-radio" type="radio" value="" name="inline-radio-group"
            class="before:content[''] peer relative w-5 h-5 cursor-pointer text-blue-600 rounded-full bg-gray-100 transition-all border-pink-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 checked:border-red-500 before:opacity-0 before:transition-opacity checked:before:bg-pink-500 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 hover:before:opacity-10">
          <label for="inline-radio" class="ml-2 text-[16px] font-medium text-gray-600">Vacant Land</label>
        </div>
        <div class="flex items-center mr-4 mt-4">
          <input id="inline-radio" type="radio" value="" name="inline-radio-group"
            class="before:content[''] peer relative w-5 h-5 cursor-pointer text-blue-600 rounded-full bg-gray-100 transition-all border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-blue-500 checked:before:bg-blue-500 hover:before:opacity-10">
          <label for="inline-radio" class="ml-2 text-[16px] font-medium text-gray-600">Commercial</label>
        </div>
      </div>
      <label for="small-input" class="block mt-8 mb-2 sm:text-[18px] font-medium text-gray-500">Loan Term <label
          class="text-sm">(month)</label></label>
      <input id="minmax-range" type="range" min="1" max="6" value="1"
        class="w-full h-2 bg-sky-400 rounded-xl appearance-none cursor-pointer">
      <div class="w-full flex justify-between text-xs px-2 mt-4">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>5</span>
        <span>6</span>
      </div>
      <div class="flex mt-4">
        <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 text-xl font-bold">Your Fee</div>
        <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 text-xl font-bold">Are you a broker or referrer?</div>
      </div>
      <div class="flex mb-[30px] sm:mt-4 mt-2 justify-between">
        <!-- <div class="w-full md:w-1/2 px-1 mb-6 md:m b-0 text-xl font-bold"> 0.00</div> -->
        <div class="mb-6">
          <div class="flex"><span class="inline-flex border-b border-gray-300 w-full">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-percent"
                viewBox="0 0 16 16">
                <path
                  d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
              </svg>
              <input class="appearance-none bg-transparent text-gray-700 mr-3 w-full px-2 focus:outline-none"
                type="number" placeholder="Enter 0 if thre is no loan on your property"></span>
          </div>
        </div>
        <div class="w-full ml-8 md:w-1/2 px-1 mb-6 md:mb-0 sm:text-xl font-bold text-lg">If not, <label
            class="border-b-4 border-blue-300 sm:text-xl text-base">Register Now!</label>
        </div>
      </div>
    </div>

    <div id="secondScreen" style="display:none;"
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
        </div>
      </div>
      <div class="items-center text-[18px] text-white">You could qualify for yo to</div>
      <div class="items-center text-[40px] text-white font-bold">$0,000,000</div>
      <div class="items-center text-[18px] text-white mt-4">in the hand!</div>
      <div class="w-full px-1 mt-8">
        <button name="submitBtn" id="submitBtn" onclick="checkInputs()"
          class="bg-sky-400 rounded-tr-[18PX] rounded-bl-[18px] text-white h-14 px-12 text-lg text-indigo-100 focus:outline-none focus:shadow-outline"
          type="submit">
          Apply Now
        </button>
      </div>
    </div>

    <div id="firstScreen"
      class="flex flex-col text-center justify-center col-span-1 bg-[#282B4B] sm:px-[50px] px-[20px] w-full sm:w-1/3 py-5">
      <div class="items-center mx-auto text-[18px] text-white mt-[-90px]"><label class="items-center">Enter all
          amounts</label></div>
      <div class="items-center text-[18px] text-white mt-4">Select your Property Type</div>
      <div class="items-center text-[18px] text-white mt-4">Slide to the term you require</div>
      <div class="items-center text-[18px] text-white mt-4">Brokers/Referrers</div>
      <div class="items-center text-[18px] text-white">nominate your fee as a %</div>
      <div class="items-center text-[18px] text-white">Register with us today!</div>
      <div class="w-full px-1 mt-[60px]">
        <button
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

  </section>
</body>
<script>
function updateTextView(_obj) {
  var num = getNumber(_obj.val());
  if (num == 0) {
    _obj.val('');
  } else {
    _obj.val(num.toLocaleString());
  }
};

function getNumber(_str) {
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

function checkInputs() {
  // Get the values from the input fields
  var loanAmount = document.getElementById("loanAmount").value;
  var propertyValue = document.getElementById("propertyValue").value;
  var mortgageDebt = document.getElementById("mortgageDebt").value;
  var firstScreen = document.getElementById("firstScreen");
  var secondScreen = document.getElementById("secondScreen")

  // Check if all three input fields have been entered
  if (loanAmount !== "" && propertyValue !== "" && mortgageDebt !== "") {
    alert("@@@@@@@@@@@@")
    submitBtn.disabled = false;
  } else {
    // Prevent the form from submitting
    // Get the button element
    // var submitButton = document.getElementById("submitBtn");
    if (loanAmount < 100000) {
      secondScreen.style.display = "block";
      firstScreen.style.display = "none";
      amountError.style.display = "inline";
    } else {
      alert("")
      amountError.style.display = "none";
    }
    alert("##################")
    enterError.style.display = "inline";
    submitBtn.disabled = true;
    event.preventDefault();
  }
}
</script>

</html>