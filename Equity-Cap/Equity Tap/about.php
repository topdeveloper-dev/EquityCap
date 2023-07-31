<!DOCTYPE html>
<html>

<head>
  <title>Online Application for Finance</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <form class="mx-auto mt-24 sm:w-[600px] sm:px-[12px] w-[300px]" action="submit.php" method="POST">
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full flex justify-center text-lg font-sans border-[#f5f5f5f5] border-b-[4px] mb-[20px] pb-[16px]">
        Tell Us About You</div>
      <div class="w-full md:w-1/1 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Company Pty Ltd Name
        </label>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-r-0 border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
              <path
                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zm9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5zM8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z" />
            </svg>
          </span>
          <input id="business" name="Company-Name"
            class="rounded-none rounded-r-lgborder  border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="XYZ Pty Ltd" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          First Name
        </label>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-r-0 border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
              viewBox="0 0 512 512">
              <path
                d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 128c39.77 0 72 32.24 72 72S295.8 272 256 272c-39.76 0-72-32.24-72-72S216.2 128 256 128zM256 448c-52.93 0-100.9-21.53-135.7-56.29C136.5 349.9 176.5 320 224 320h64c47.54 0 87.54 29.88 103.7 71.71C356.9 426.5 308.9 448 256 448z" />
            </svg>
          </span>
          <input id="firstname" name="Name"
            class="rounded-none rounded-r-lgborder  border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Peter" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Surname
        </label>
        <div class="flex">
          <span
            class="inline-flex h-14 font-extrabold items-center px-3 text-sm border border-r-0 border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" style="color: white"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
              <path
                d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 128c39.77 0 72 32.24 72 72S295.8 272 256 272c-39.76 0-72-32.24-72-72S216.2 128 256 128zM256 448c-52.93 0-100.9-21.53-135.7-56.29C136.5 349.9 176.5 320 224 320h64c47.54 0 87.54 29.88 103.7 71.71C356.9 426.5 308.9 448 256 448z"
                fill="white"></path>
            </svg>
          </span>
          <input id="lastname" name="Surname"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Jones" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Email
        </label>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-r-0 border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
              viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
            </svg>
          </span>
          <input type="email" id="Email" name="Email"
            class="rounded-none rounded-r-lgborder  border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="peter.jones@gmail.com" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Your Mobile Number
        </label>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-r-0 border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg aria-hidden="true" id="mobile-phone" xmlns="http://www.w3.org/2000/svg" width="15" height="15"
              class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 15 15">
              <path
                d="M10,2h0V1.5a.5.5,0,0,0-1,0V2H5A1,1,0,0,0,4,3V13a1,1,0,0,0,1,1h5a1,1,0,0,0,1-1V3A1,1,0,0,0,10,2ZM6,13H5V12H6Zm0-2H5V10H6ZM6,9H5V8H6Zm2,4H7V12H8Zm0-2H7V10H8ZM8,9H7V8H8Zm2,4H9V12h1Zm0-2H9V10h1Zm0-2H9V8h1Zm0-2.5a.5.5,0,0,1-.5.5h-4A.5.5,0,0,1,5,6.5v-3A.5.5,0,0,1,5.5,3h4a.5.5,0,0,1,.5.5Z" />
            </svg>
          </span>
          <input type="number" id="mobile" name="Mobile"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="0400 000000" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-8">
        <label class="block tracking-wide font-sans text-[14px] font-bold mb-2" for="grid-state">
          When are the funds required?
        </label>
        <div class="relative">
          <select name="Funds-are-required"
            class="block h-14 text-gray-400 appearance-none w-full border focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 border-gray-200 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white"
            id="Funds-are-required" required>
            <option value="">Select from dropdown</option>
            <option value="Urgently in the next 24 hours">Urgently in the next 24 hours</option>
            <option value="1 business week">1 business week</option>
            <option value="1-2 weeks">1-2 weeks</option>
            <option value="3+ weeks time">3+ weeks time</option>
          </select>
          <div class="pointer-events-none absolute text-gray-400 inset-y-0 right-0 flex items-center px-2">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-8">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Which State are you located in?
        </label>
        <div class="relative">
          <select name="My-location"
            class="block h-14  appearance-none w-full border border-gray-200 focus:ring-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 text-gray-400 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="My-location" required>
            <option value="">Select from dropdown</option>
            <option value="Brisbane & Queensland">Brisbane & Queensland</option>
            <option value="Sydney & New South Wales">Sydney & New South Wales</option>
            <option value="Melbourne & Victoria">Melbourne & Victoria</option>
            <option value="Adelaide & South Australia">Adelaide & South Australia</option>
            <option value="Canberra & ACT">Canberra & ACT</option>
            <option value="Perth & Western Australia">Perth & Western Australia</option>
            <option value="Hobart & Tasmania">Hobart & Tasmania</option>
            <option value="Darwin & Northern Territory">Darwin & Northern Territory</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6 mt-8">
      <div class="w-full md:w-1/3 px-1 mb-6 md:mb-0">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Are you registered with us?
        </label>
        <div class="relative">
          <div class="flex items-center mb-4">
            <input id="checkNo" type="radio" value="no"
              class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
              checked>
            <label for="partner-no" class="block ml-2 text-base font-medium text-gray-900 dark:text-gray-700">
              No
            </label>
            <input id="checkYes" type="radio" value="yes"
              class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600 ml-4">
            <label for="partner-yes" class="block ml-2 text-base font-medium text-gray-900 dark:text-gray-700">
              Yes
            </label>
          </div>
        </div>
      </div>
      <div id="partnerField" class="w-full md:w-2/3 px-1 mb-6 md:mb-0" style="display:none">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Enter your ID or Email if registered
        </label>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-r-0 border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-windows"
              viewBox="0 0 16 16">
              <path
                d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z" />
            </svg>
          </span>
          <input type="text" id="Partner Id" name="Registered"
            class="rounded-none rounded-r-lgborder  border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
      </div>
    </div>
    <div class="flex items-center mb-4 mt-8">
      <input id="agree" type="checkbox"
        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
        required>
      <label for="checkbox-1" class="ml-2 text-base font-medium text-gray-900 dark:text-gray-600">By clicking here, you
        agree to the terms of our <a href="#" class="text-blue-600 hover:underline dark:text-blue-600"> Privacy Consent
          and Statement
          Consent</a>.</label>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0">
        <button class="bg-gray-400  text-white h-14 px-4 w-full focus:outline-none focus:shadow-outline"
          onclick="window.location.href='index.php';">
          Back
        </button>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0">
        <button class="bg-[#09AFF4]  text-white h-14 px-4 w-full focus:outline-none focus:shadow-outline" type="submit">
          Submit
        </button>
      </div>
    </div>
    <input type="hidden" id="amount" name="Amount" value="<?php echo $_POST['amount']?>" />
    <input type="hidden" id="revenue" name="Turnover" value="<?php echo $_POST['revenue']?>" />
    <input type="hidden" id="purpose" name="Purpose" value="<?php echo $_POST['purpose']?>" />
    <input type="hidden" id="trading" name="Trading" value="<?php echo $_POST['trading']?>" />
    <input type="hidden" id="term" name="Term" value="<?php echo $_POST['term']?>" />
    <input type="hidden" id="repayment" name="Repayment" value="<?php echo $_POST['repayment']?>" />
  </form>
  </div>
</body>
<script>
const checkYes = document.querySelector('#checkYes');
const partnerid = document.querySelector('#partnerField');
const checkNo = document.querySelector('#checkNo');
const agree = document.querySelector('#agree');
const submitBtn = document.querySelector('[type="submit"]');
submitBtn.disabled = true;

checkYes.addEventListener('change', function() {
  if (this.checked) {
    // show the partnerid input field
    partnerid.style.display = 'block';
    checkNo.checked = false;
  }
});

checkNo.addEventListener('change', function() {
  if (this.checked) {
    checkYes.checked = false;
    partnerid.style.display = 'none';
  }
})

// add event listener to the agree checkbox
agree.addEventListener('change', function() {
  if (this.checked) {
    // enable the submit button
    submitBtn.disabled = false;
  } else {
    // disable the submit button
    submitBtn.disabled = true;
  }
});
</script>

</html>