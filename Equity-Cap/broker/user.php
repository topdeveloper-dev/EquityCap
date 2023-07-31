<!DOCTYPE html>
<html>

<head>
  <title>Online Application for Finance</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </script>
  <style>
  body {
    overflow: auto;
  }
  </style>
</head>

<body>
  <header>
    <?php require('./Layout_form/Header.php'); ?>
  </header>
  <form class="mx-auto mt-24 sm:w-[600px] sm:px-[20px] w-[300px]" action="user-form.php" method="POST">
    <div class="flex flex-wrap -mx-3 mb-6">
      <div
        class="w-full flex justify-center sm:text-[40px] text-[25px] text-sky-500 font-sans border-[#f5f5f5f5] border-b-[4px] mb-[20px] pb-[16px]">
        Add new Company borrower</div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Company Pty Ltd Name
        </label>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg class="w-5 h-5 text-gray-900 dark:text-gray-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
              <path
                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zm9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5zM8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z" />
            </svg>
          </span>
          <input id="companyname" name="companyname"
            class="rounded-none rounded-r-lgborder border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="XYZ Pty Ltd" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          ACN Number
        </label>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg class="w-5 h-5 text-gray-900 dark:text-gray-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
              <path
                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zm9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5zM8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z" />
            </svg>
          </span>
          <input id="acnnumbert" name="acnnumbert"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="XYZ Pty Ltd" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide font-sans text-[14px] font-bold mb-2" for="grid-state">
          Director / Guarantor - 1
        </label>
        <div class="relative">
          <select name="director" id="director"
            class="block h-14 bg-gray-200 text-gray-400 appearance-none w-full border focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 border-gray-200 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white"
            required>
            <option value="">Select from dropdown</option>
            <option value="Mortgage Refinance or Cashout">Mortgage Refinance or Cashout</option>
            <option value="Business Cashflow">Business Cashflow</option>
            <option value="Cash Advance on Property Sale">Cash Advance on Property Sale</option>
            <option value="Tax Payments or Other Debts">Tax Payments or Other Debts</option>
            <option value="Property Purchase(s)">Property Purchase(s)</option>
            <option value="Equipment Purchase(s)">Equipment Purchase(s)</option>
            <option value="Equity Release">Equity Release</option>
          </select>
          <div class="pointer-events-none absolute text-gray-400 inset-y-0 right-0 flex items-center px-2">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Which State are you located in?
        </label>
        <div class="relative">
          <select name="located" id="located"
            class="block h-14 bg-gray-200 appearance-none w-full border border-gray-200 focus:ring-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 text-gray-400 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            required>
            <option value="" selected>Select from dropdown</option>
            <option value="Brand new Business">Brand new Business</option>
            <option value="Up to 6-months of Trading">Up to 6-months of Trading</option>
            <option value="More than 6-months of Trading">More than 6-months of Trading</option>
            <option value="1-Year of Trading">1-Year of Trading</option>
            <option value="2+ Years or more of Trading">2+ Years or more of Trading</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </div>
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
          <input id="firstname" name="firstname"
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
              <path
                d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 128c39.77 0 72 32.24 72 72S295.8 272 256 272c-39.76 0-72-32.24-72-72S216.2 128 256 128zM256 448c-52.93 0-100.9-21.53-135.7-56.29C136.5 349.9 176.5 320 224 320h64c47.54 0 87.54 29.88 103.7 71.71C356.9 426.5 308.9 448 256 448z"
                fill="white"></path>
            </svg>
          </span>
          <input id="surname" name="surname"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="John" required>
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
          <input type="email" id="email" name="email"
            class="rounded-none rounded-r-lgborder  border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="john.smith@equityap.co" required>
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
          <input type="number" id="numberInput" name="mobilenumber"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="0400 000000" required>
        </div>
      </div>
      <div class="w-full md:w-1/1 px-1 mb-6 md:mb-0 mt-4">
        <div style="display: flex; justify-content: space-between; align-items:center;">
          <label class="block tracking-wide text-gray-700 text-[13px] font-bold mb-2" for="grid-state">
            Street number, Street name, Suburb and Postcode
          </label>
          <label class="block tracking-wide text-gray-700 font-sans text-[14px] ml-2 font-bold mb-2" for="grid-state">
            Security property?
          </label>
          <input id="checkNo1" type="radio" value="no"
            class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
            checked>
          <label for="partner-no" class="block text-base font-medium text-gray-900 dark:text-gray-700">
            No
          </label>
          <input id="checkYes1" type="radio" value="yes"
            class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600 ml-4">
          <label for="partner-yes" class="block text-base font-medium text-gray-900 dark:text-gray-700">
            Yes
          </label>
          <input type="hidden" id="security1" name="security1">
        </div>
        </input>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg class="w-5 h-5 text-gray-900 dark:text-gray-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
              <path
                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zm9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5zM8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z" />
            </svg>
          </span>
          <input type="text" id="streetnumber" name="streetnumber"
            class="rounded-none rounded-r-lgborder  border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="100,000" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-8">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Estimated as-is value(s)
        </label>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-r-0 border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg height="16" class="text-gray-900 dark:text-gray-400" fill="currentColor" width="16" version="1.1"
              id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              viewBox="0 0 235.517 235.517" xml:space="preserve">
              <g>
                <path d="M118.1,235.517c7.898,0,14.31-6.032,14.31-13.483c0-7.441,0-13.473,0-13.473
                  c39.069-3.579,64.932-24.215,64.932-57.785v-0.549c0-34.119-22.012-49.8-65.758-59.977V58.334c6.298,1.539,12.82,3.72,19.194,6.549
                  c10.258,4.547,22.724,1.697,28.952-8.485c6.233-10.176,2.866-24.47-8.681-29.654c-11.498-5.156-24.117-8.708-38.095-10.236V8.251
                  c0-4.552-6.402-8.251-14.305-8.251c-7.903,0-14.31,3.514-14.31,7.832c0,4.335,0,7.843,0,7.843
                  c-42.104,3.03-65.764,25.591-65.764,58.057v0.555c0,34.114,22.561,49.256,66.862,59.427v33.021
                  c-10.628-1.713-21.033-5.243-31.623-10.65c-11.281-5.755-25.101-3.72-31.938,6.385c-6.842,10.1-4.079,24.449,7.294,30.029
                  c16.709,8.208,35.593,13.57,54.614,15.518v13.755C103.79,229.36,110.197,235.517,118.1,235.517z M131.301,138.12
                  c14.316,4.123,18.438,8.257,18.438,15.681v0.555c0,7.979-5.776,12.651-18.438,14.033V138.12z M86.999,70.153v-0.549
                  c0-7.152,5.232-12.657,18.71-13.755v29.719C90.856,81.439,86.999,77.305,86.999,70.153z" />
              </g>
            </svg>
          </span>
          <input type="text" id="estimated" name="estimated"
            class="rounded-none rounded-r-lgborder  border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="XYZ Pty Ltd" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 md:mb-0 mt-4">
        <div style="display: flex; justify-content: space-between; align-items:center;">
          <label class="block tracking-wide text-gray-700 font-sans text-[13px] font-bold" for="grid-state">
            Loan balance(s)
          </label>
          <div>
            <label class="block text-gray-700 font-sans text-[13px] font-bold" for="grid-state">
              Bank or non-bank?
            </label>
            <div class="relative">
              <div class="flex items-center">
                <input id="checkNo3" type="radio" name="no3" value="no" checked
                  class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                <label for="country-option-1" class="block ml-2 text-base font-medium text-gray-900 dark:text-gray-700">
                  No
                </label>
                <input id="checkYes3" type="radio" name="yes3" value="yes"
                  class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600 ml-4 ">
                <label for="country-option-1" class="block ml-2 text-base font-medium text-gray-900 dark:text-gray-700">
                  Yes
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-r-0 border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg height="16" class="text-gray-900 dark:text-gray-400" fill="currentColor" width="16" version="1.1"
              id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              viewBox="0 0 235.517 235.517" xml:space="preserve">
              <g>
                <path d="M118.1,235.517c7.898,0,14.31-6.032,14.31-13.483c0-7.441,0-13.473,0-13.473
                  c39.069-3.579,64.932-24.215,64.932-57.785v-0.549c0-34.119-22.012-49.8-65.758-59.977V58.334c6.298,1.539,12.82,3.72,19.194,6.549
                  c10.258,4.547,22.724,1.697,28.952-8.485c6.233-10.176,2.866-24.47-8.681-29.654c-11.498-5.156-24.117-8.708-38.095-10.236V8.251
                  c0-4.552-6.402-8.251-14.305-8.251c-7.903,0-14.31,3.514-14.31,7.832c0,4.335,0,7.843,0,7.843
                  c-42.104,3.03-65.764,25.591-65.764,58.057v0.555c0,34.114,22.561,49.256,66.862,59.427v33.021
                  c-10.628-1.713-21.033-5.243-31.623-10.65c-11.281-5.755-25.101-3.72-31.938,6.385c-6.842,10.1-4.079,24.449,7.294,30.029
                  c16.709,8.208,35.593,13.57,54.614,15.518v13.755C103.79,229.36,110.197,235.517,118.1,235.517z M131.301,138.12
                  c14.316,4.123,18.438,8.257,18.438,15.681v0.555c0,7.979-5.776,12.651-18.438,14.033V138.12z M86.999,70.153v-0.549
                  c0-7.152,5.232-12.657,18.71-13.755v29.719C90.856,81.439,86.999,77.305,86.999,70.153z" />
              </g>
            </svg>
          </span>
          <input type="text" id="bank" name="bank2"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="XYZ Pty Ltd" required>
        </div>
      </div>
      <div class="w-full md:w-1/1 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          What is your usual occupation?
        </label>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg class="w-5 h-5 text-gray-900 dark:text-gray-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
              <path
                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zm9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5zM8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z" />
            </svg>
          </span>
          <input id="occupation" name="occupation"
            class="rounded-none rounded-r-lgborder  border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="100,000" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide font-sans text-[14px] font-bold mb-2" for="grid-state">
          Director / Guarantor - 2
        </label>
        <div class="relative">
          <select name="director2" id="director2"
            class="block h-14 bg-gray-200 text-gray-400 appearance-none w-full border focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 border-gray-200 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white"
            required>
            <option value="">Select from dropdown</option>
            <option value="Director">Director</option>
            <option value="Guarantor">Guarantor</option>
          </select>
          <div class="pointer-events-none absolute text-gray-400 inset-y-0 right-0 flex items-center px-2">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Which State are you located in?
        </label>
        <div class="relative">
          <select name="located2" id="located2"
            class="block h-14 bg-gray-200 appearance-none w-full border border-gray-200 focus:ring-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 text-gray-400 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            required>
            <option value="" selected>Select from dropdown</option>
            <option value="Brand new Business">Brand new Business</option>
            <option value="Up to 6-months of Trading">Up to 6-months of Trading</option>
            <option value="More than 6-months of Trading">More than 6-months of Trading</option>
            <option value="1-Year of Trading">1-Year of Trading</option>
            <option value="2+ Years or more of Trading">2+ Years or more of Trading</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </div>
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
          <input id="firstname" name="firstname2"
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
              <path
                d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 128c39.77 0 72 32.24 72 72S295.8 272 256 272c-39.76 0-72-32.24-72-72S216.2 128 256 128zM256 448c-52.93 0-100.9-21.53-135.7-56.29C136.5 349.9 176.5 320 224 320h64c47.54 0 87.54 29.88 103.7 71.71C356.9 426.5 308.9 448 256 448z"
                fill="white"></path>
            </svg>
          </span>
          <input id="surname" name="surname2"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="John" required>
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
          <input type="email" id="email2" name="email2"
            class="rounded-none rounded-r-lgborder  border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="john.smith@equityap.co" required>
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
          <input type="number" id="mobilenumber" name="mobilenumber2"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="0400 000000" required>
        </div>
      </div>
      <div class="w-full md:w-1/1 px-1 mb-6 md:mb-0 mt-4">
        <div style="display: flex; justify-content: space-between; align-items:center;">
          <label class="block tracking-wide text-gray-700 text-[13px] font-bold mb-2" for="grid-state">
            Street number, Street name, Suburb and Postcode
          </label>
          <label class="block tracking-wide text-gray-700 font-sans text-[14px] ml-2 font-bold mb-2" for="grid-state">
            Security property?
          </label>
          <input id="checkNo" type="radio" value="no"
            class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
            checked>
          <label for="partner-no" class="block text-base font-medium text-gray-900 dark:text-gray-700">
            No
          </label>
          <input id="checkYes" type="radio" value="yes"
            class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600 ml-4">
          <label for="partner-yes" class="block text-base font-medium text-gray-900 dark:text-gray-700">
            Yes
          </label>
        </div>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg class="w-5 h-5 text-gray-900 dark:text-gray-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
              <path
                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zm9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5zM8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z" />
            </svg>
          </span>
          <input type="text" id="streetnumber" name="streetnumber2"
            class="rounded-none rounded-r-lgborder  border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="100,000" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-8">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Estimated as-is value(s)
        </label>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-r-0 border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg height="16" class="text-gray-900 dark:text-gray-400" fill="currentColor" width="16" version="1.1"
              id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              viewBox="0 0 235.517 235.517" xml:space="preserve">
              <g>
                <path d="M118.1,235.517c7.898,0,14.31-6.032,14.31-13.483c0-7.441,0-13.473,0-13.473
                  c39.069-3.579,64.932-24.215,64.932-57.785v-0.549c0-34.119-22.012-49.8-65.758-59.977V58.334c6.298,1.539,12.82,3.72,19.194,6.549
                  c10.258,4.547,22.724,1.697,28.952-8.485c6.233-10.176,2.866-24.47-8.681-29.654c-11.498-5.156-24.117-8.708-38.095-10.236V8.251
                  c0-4.552-6.402-8.251-14.305-8.251c-7.903,0-14.31,3.514-14.31,7.832c0,4.335,0,7.843,0,7.843
                  c-42.104,3.03-65.764,25.591-65.764,58.057v0.555c0,34.114,22.561,49.256,66.862,59.427v33.021
                  c-10.628-1.713-21.033-5.243-31.623-10.65c-11.281-5.755-25.101-3.72-31.938,6.385c-6.842,10.1-4.079,24.449,7.294,30.029
                  c16.709,8.208,35.593,13.57,54.614,15.518v13.755C103.79,229.36,110.197,235.517,118.1,235.517z M131.301,138.12
                  c14.316,4.123,18.438,8.257,18.438,15.681v0.555c0,7.979-5.776,12.651-18.438,14.033V138.12z M86.999,70.153v-0.549
                  c0-7.152,5.232-12.657,18.71-13.755v29.719C90.856,81.439,86.999,77.305,86.999,70.153z" />
              </g>
            </svg>
          </span>
          <input type="text" id="estimated" name="estimated2"
            class="rounded-none rounded-r-lgborder  border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="XYZ Pty Ltd" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 md:mb-0 mt-4">
        <div style="display: flex; justify-content: space-between; align-items:center;">
          <label class="block tracking-wide text-gray-700 font-sans text-[13px] font-bold" for="grid-state">
            Loan balance(s)
          </label>
          <div>
            <label class="block text-gray-700 font-sans text-[13px] font-bold" for="grid-state">
              Bank or non-bank?
            </label>
            <div class="relative">
              <div class="flex items-center">
                <input id="checkNo2" type="radio" name="no" value="no" checked
                  class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                <label for="country-option-1" class="block ml-2 text-base font-medium text-gray-900 dark:text-gray-700">
                  No
                </label>
                <input id="checkYes2" type="radio" name="ues" value="yes"
                  class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600 ml-4 ">
                <label for="country-option-1" class="block ml-2 text-base font-medium text-gray-900 dark:text-gray-700">
                  Yes
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-r-0 border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg height="16" class="text-gray-900 dark:text-gray-400" fill="currentColor" width="16" version="1.1"
              id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              viewBox="0 0 235.517 235.517" xml:space="preserve">
              <g>
                <path d="M118.1,235.517c7.898,0,14.31-6.032,14.31-13.483c0-7.441,0-13.473,0-13.473
                  c39.069-3.579,64.932-24.215,64.932-57.785v-0.549c0-34.119-22.012-49.8-65.758-59.977V58.334c6.298,1.539,12.82,3.72,19.194,6.549
                  c10.258,4.547,22.724,1.697,28.952-8.485c6.233-10.176,2.866-24.47-8.681-29.654c-11.498-5.156-24.117-8.708-38.095-10.236V8.251
                  c0-4.552-6.402-8.251-14.305-8.251c-7.903,0-14.31,3.514-14.31,7.832c0,4.335,0,7.843,0,7.843
                  c-42.104,3.03-65.764,25.591-65.764,58.057v0.555c0,34.114,22.561,49.256,66.862,59.427v33.021
                  c-10.628-1.713-21.033-5.243-31.623-10.65c-11.281-5.755-25.101-3.72-31.938,6.385c-6.842,10.1-4.079,24.449,7.294,30.029
                  c16.709,8.208,35.593,13.57,54.614,15.518v13.755C103.79,229.36,110.197,235.517,118.1,235.517z M131.301,138.12
                  c14.316,4.123,18.438,8.257,18.438,15.681v0.555c0,7.979-5.776,12.651-18.438,14.033V138.12z M86.999,70.153v-0.549
                  c0-7.152,5.232-12.657,18.71-13.755v29.719C90.856,81.439,86.999,77.305,86.999,70.153z" />
              </g>
            </svg>
          </span>
          <input type="text" id="bank" name="loanbalance"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="XYZ Pty Ltd" required>
        </div>
      </div>
      <div class="w-full md:w-1/1 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          What is your usual occupation?
        </label>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg class="w-5 h-5 text-gray-900 dark:text-gray-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
              <path
                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zm9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5zM8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z" />
            </svg>
          </span>
          <input id="occupation" name="occupation2"
            class="rounded-none rounded-r-lgborder  border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="100,000" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Amount Required
        </label>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg height="16" class="text-gray-900 dark:text-gray-400" fill="currentColor" width="16" version="1.1"
              id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              viewBox="0 0 235.517 235.517" xml:space="preserve">
              <g>
                <path d="M118.1,235.517c7.898,0,14.31-6.032,14.31-13.483c0-7.441,0-13.473,0-13.473
                  c39.069-3.579,64.932-24.215,64.932-57.785v-0.549c0-34.119-22.012-49.8-65.758-59.977V58.334c6.298,1.539,12.82,3.72,19.194,6.549
                  c10.258,4.547,22.724,1.697,28.952-8.485c6.233-10.176,2.866-24.47-8.681-29.654c-11.498-5.156-24.117-8.708-38.095-10.236V8.251
                  c0-4.552-6.402-8.251-14.305-8.251c-7.903,0-14.31,3.514-14.31,7.832c0,4.335,0,7.843,0,7.843
                  c-42.104,3.03-65.764,25.591-65.764,58.057v0.555c0,34.114,22.561,49.256,66.862,59.427v33.021
                  c-10.628-1.713-21.033-5.243-31.623-10.65c-11.281-5.755-25.101-3.72-31.938,6.385c-6.842,10.1-4.079,24.449,7.294,30.029
                  c16.709,8.208,35.593,13.57,54.614,15.518v13.755C103.79,229.36,110.197,235.517,118.1,235.517z M131.301,138.12
                  c14.316,4.123,18.438,8.257,18.438,15.681v0.555c0,7.979-5.776,12.651-18.438,14.033V138.12z M86.999,70.153v-0.549
                  c0-7.152,5.232-12.657,18.71-13.755v29.719C90.856,81.439,86.999,77.305,86.999,70.153z" />
              </g>
            </svg>
          </span>
          <input type="text" id="amount" name="amount"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="10,000" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Your Monthly Turnover
        </label>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg height="16" class="text-gray-900 dark:text-gray-400" fill="currentColor" width="16" version="1.1"
              id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              viewBox="0 0 235.517 235.517" xml:space="preserve">
              <g>
                <path d="M118.1,235.517c7.898,0,14.31-6.032,14.31-13.483c0-7.441,0-13.473,0-13.473
                  c39.069-3.579,64.932-24.215,64.932-57.785v-0.549c0-34.119-22.012-49.8-65.758-59.977V58.334c6.298,1.539,12.82,3.72,19.194,6.549
                  c10.258,4.547,22.724,1.697,28.952-8.485c6.233-10.176,2.866-24.47-8.681-29.654c-11.498-5.156-24.117-8.708-38.095-10.236V8.251
                  c0-4.552-6.402-8.251-14.305-8.251c-7.903,0-14.31,3.514-14.31,7.832c0,4.335,0,7.843,0,7.843
                  c-42.104,3.03-65.764,25.591-65.764,58.057v0.555c0,34.114,22.561,49.256,66.862,59.427v33.021
                  c-10.628-1.713-21.033-5.243-31.623-10.65c-11.281-5.755-25.101-3.72-31.938,6.385c-6.842,10.1-4.079,24.449,7.294,30.029
                  c16.709,8.208,35.593,13.57,54.614,15.518v13.755C103.79,229.36,110.197,235.517,118.1,235.517z M131.301,138.12
                  c14.316,4.123,18.438,8.257,18.438,15.681v0.555c0,7.979-5.776,12.651-18.438,14.033V138.12z M86.999,70.153v-0.549
                  c0-7.152,5.232-12.657,18.71-13.755v29.719C90.856,81.439,86.999,77.305,86.999,70.153z" />
              </g>
            </svg>
          </span>
          <input type="text" id="turnover" name="turnover"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="10,000" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          The purpose of this loan
        </label>
        <div class="relative">
          <select name="purpose"
            class="block h-14 bg-gray-200 appearance-none focus:ring-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full border border-gray-200 text-gray-400 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="purpose" required>
            <option value="">Select from dropdown</option>
            <option value="Property Sale(s)">Property Sale(s)</option>
            <option value="Refinancing to another Lender">Refinancing to another Lender</option>
            <option value="Business Cashflow">Business Cashflow</option>
            <option value="Inheritance">Inheritance</option>
            <option value="Sale of one or more Assets">Sale of one or more Assets</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Time Trading
        </label>
        <div class="relative">
          <select name="trading"
            class="block h-14 bg-gray-200 appearance-none focus:ring-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full border border-gray-200 text-gray-400 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="trading" required>
            <option value="">Select from dropdown</option>
            <option value="Property Sale(s)">Property Sale(s)</option>
            <option value="Refinancing to another Lender">Refinancing to another Lender</option>
            <option value="Business Cashflow">Business Cashflow</option>
            <option value="Inheritance">Inheritance</option>
            <option value="Sale of one or more Assets">Sale of one or more Assets</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6 mt-4">
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          What is the loan term required?
        </label>
        <div class="relative">
          <select name="loanterm"
            class="block h-14 bg-gray-200 appearance-none w-full text-gray-400 border border-gray-200 focus:ring-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="loanterm" required>
            <option value="" selected>Select from dropdown</option>
            <option value="Up to 30 days">Up to 30 days</option>
            <option value="2 Months">2 Months</option>
            <option value="3 Months">3 Months</option>
            <option value="4 Months">4 Months</option>
            <option value="5 Months">5 Months</option>
            <option value="6 Months">6 Months</option>
            <option value="7 Months">7 Months</option>
            <option value="8 Months">8 Months</option>
            <option value="9 Months">9 Months</option>
            <option value="10 Months">10 Months</option>
            <option value="11 Months">11 Months</option>
            <option value="12 Months">12 Months</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          How are you paying our loan back?
        </label>
        <div class="relative">
          <select name="paying"
            class="block h-14 bg-gray-200 appearance-none focus:ring-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full border border-gray-200 text-gray-400 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="paying" required>
            <option value="">Select from dropdown</option>
            <option value="Property Sale(s)">Property Sale(s)</option>
            <option value="Refinancing to another Lender">Refinancing to another Lender</option>
            <option value="Business Cashflow">Business Cashflow</option>
            <option value="Inheritance">Inheritance</option>
            <option value="Sale of one or more Assets">Sale of one or more Assets</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          When are the funds required?
        </label>
        <div class="relative">
          <select name="funds"
            class="block h-14 bg-gray-200 appearance-none focus:ring-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full border border-gray-200 text-gray-400 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="funds" required>
            <option value="">Select from dropdown</option>
            <option value="Property Sale(s)">Property Sale(s)</option>
            <option value="Refinancing to another Lender">Refinancing to another Lender</option>
            <option value="Business Cashflow">Business Cashflow</option>
            <option value="Inheritance">Inheritance</option>
            <option value="Sale of one or more Assets">Sale of one or more Assets</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Date Added
        </label>
        <div class="relative max-w-sm">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
              viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                clip-rule="evenodd"></path>
            </svg>
          </div>
          <input type="date" data-date-format="DD/MM/YYYY"
            class="border font-[15px] pl-10 text-gray-900 h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Select date">
        </div>
      </div>
      <div class="w-full md:w-1/1 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          File notes:
        </label>
        <div class="relative flex">
          <div class="absolute top-0 left-0 flex text-gray-900 dark:text-gray-400">
            <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
              class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
              <path
                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zm9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5zM8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z" />
            </svg>
            </span>
          </div>
          <textarea id="filenotes" name="filenotes" rows="6"
            class="float-left pl-10 rounded-none border border focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full pdark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6" style="display: flex; justify-content: space-between; align-items:center;">
      <div class="w-full md:w-1/3 px-1 mb-6 md:mb-0">
        <button class="bg-[#09AFF4] rounded-lg text-white h-14 px-4 w-full focus:outline-none focus:shadow-outline"
          type="submit">
          Add Client
        </button>
      </div>
      <div class="w-full md:w-1/3 px-1 mb-6 md:mb-0">
        <button class="bg-[#09AFF4] rounded-lg text-white h-14 px-4 w-full focus:outline-none focus:shadow-outline"
          type="submit">
          Update Client
        </button>
      </div>
  </form>
  </div>
  <footer class="mt-24">
    <?php require('./Layout_form/Footer.php'); ?>
  </footer>
</body>
<script>
const checkYes = document.querySelector('#checkYes');
const checkNo = document.querySelector('#checkNo');
const checkYes1 = document.querySelector('#checkYes1');
const checkNo1 = document.querySelector('#checkNo1');
const checkYes2 = document.querySelector('#checkYes2');
const checkNo2 = document.querySelector('#checkNo2');
const checkYes3 = document.querySelector('#checkYes3');
const checkNo3 = document.querySelector('#checkNo3');

checkYes.addEventListener('change', function() {
  if (this.checked) {
    checkNo.checked = false;
  }
});

checkNo.addEventListener('change', function() {
  if (this.checked) {
    checkYes.checked = false;
  }
})

checkYes1.addEventListener('change', function() {
  if (this.checked) {
    checkNo1.checked = false;
    document.getElementById('security1').value = 'true';
  }
});

checkNo1.addEventListener('change', function() {
  if (this.checked) {
    checkYes1.checked = false;
    document.getElementById('security1').value = 'false';
  }
})

checkYes2.addEventListener('change', function() {
  if (this.checked) {
    checkNo2.checked = false;
  }
});

checkNo2.addEventListener('change', function() {
  if (this.checked) {
    checkYes2.checked = false;
  }
})

checkYes3.addEventListener('change', function() {
  if (this.checked) {
    checkNo3.checked = false;
  }
});

checkNo3.addEventListener('change', function() {
  if (this.checked) {
    checkYes3.checked = false;
  }
})

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
</script>

</html>