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

    <div
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

  // Get the button element
  // var submitButton = document.getElementById("submitBtn");
  if (loanAmount < 100000) {
    amountError.style.display = "inline";
  } else {
    amountError.style.display = "none";
  }
  // Check if all three input fields have been entered
  if (loanAmount !== "" && propertyValue !== "" && mortgageDebt !== "") {
    submitButton.disabled = false;

  } else {
    // Prevent the form from submitting
    enterError.style.display = "inline";
    submitButton.disabled = true;
    event.preventDefault();
  }
}
</script>

</html>