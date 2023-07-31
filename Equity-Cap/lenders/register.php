<!DOCTYPE html>
<html>

<head>
  <title>Online Application for Finance</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
  </script>
  <style>
  body {
    overflow: auto;
  }
  </style>
</head>

<body>
  <header>
    <?php require('./Layout/Header.php'); ?>
  </header>
  <div
    class="w-full flex justify-center text-[40px] text-sky-500 font-sans border-[#f5f5f5f5] mb-[20px] mt-[72px] px-4">
    Lender Panel - Add me to your panel</div>
  <form class="mx-auto mt-8 sm:w-[620px] sm:px-[20px] w-[300px]" action="login.php" method="POST">
    <div class="flex flex-wrap -mx-3 mb-6">
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
          <input id="firstname" name="Lender First Name"
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
          <input id="surname" name="Lender Surname"
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
          <input type="email" id="email" name="Lender Email"
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
          <input type="number" id="mobilenumber" name="Lender Mobile Number"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="0400 000000" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Company Name(as mortgagee)
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
          <input id="companyname" name="Lender Company Name (as mortgagee)"
            class="rounded-none rounded-r-lgborder border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Jones Investments Pty Ltd" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          ACN
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
          <input type="text" id="acnnumbert" name="Lender ACN"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="000 000 000" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Trust Name (if applicable)
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
          <input id="companyname" name="Lender Trust Name"
            class="rounded-none rounded-r-lgborder border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Jones Investments Family Trust" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          ABN (if applicable)
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
          <input type="text" id="acnnumbert" name="Lender ABN"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="000 000 000" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Which State are you located in?
        </label>
        <div class="relative">
          <select name="Lender Located" id="located1"
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
        <label class="block tracking-wide font-sans text-[14px] font-bold mb-2" for="grid-state">
          Preferred time for a manager to call you
        </label>
        <div class="relative">
          <select name="Lender Preferred" id="director"
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
          <input id="firstname" name="First Name"
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
          <input id="surname" name="Surname"
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
          <input type="email" id="email" name="Email"
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
          <input type="number" id="mobilenumber" name="Your Mobile Number"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="0400 000000" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Company Name(if applicable)
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
          <input id="companyname" name="Company Name (as mortgagee)"
            class="rounded-none rounded-r-lgborder border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="XYZ Pty Ltd" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          ACN (if applicable)
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
          <input type="text" id="acnnumbert" name="ACN"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="000 000 000" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Trust Name (if applicable)
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
          <input id="companyname" name="Lender Trust Name"
            class="rounded-none rounded-r-lgborder border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="XYZ Pty Ltd" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          ABN (if applicable)
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
          <input type="text" id="acnnumbert" name="ABN"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="000 000 000" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Which State are you located in?
        </label>
        <div class="relative">
          <select name="Lender Located" id="located1"
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
        <label class="block tracking-wide font-sans text-[14px] font-bold mb-2" for="grid-state">
          Preferred time for a manager to call you
        </label>
        <div class="relative">
          <select name="Lender Preferred" id="director"
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
      <div class="w-full md:w-1/1 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Details of your legal firm and Solicitor
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
          <input id="solicitor" name="Solicitor"
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
          <input id="firstname" name="2nd Lender First Name"
            class="rounded-none rounded-r-lgborder  border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Margaret" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          SurName
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
          <input id="surname" name="Surname"
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
          <input type="email" id="email" name="2nd Lender Email"
            class="rounded-none rounded-r-lgborder  border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="peter.jones@gmail.com" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Mobile Number
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
          <input type="number" id="mobilenumber" name="Mobile Number"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="0400 000000" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[13px] font-bold mb-2" for="grid-state">
          Funds you wish to make available for lending
        </label>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg height="16" class="text-gray-500 dark:text-gray-400" fill="currentColor" width="16"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
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
          <input type="text" id="fund" name="2nd Lender Funds"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="500,000" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          For what term are your funds available?
        </label>
        <div class="relative">
          <select name="2nd Lender Located" id="located1"
            class="block h-14 bg-gray-200 appearance-none w-full border border-gray-200 focus:ring-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 text-gray-400 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            required>
            <option value="" selected>Select from dropdown</option>
            <option value="6 months">6 months</option>
            <option value="1 year">1 year</option>
            <option value="18 months">18 months</option>
            <option value="2 years+">2 years+</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/1 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          What would you like us to know about you and your funding line?
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
          <textarea id="filenotes" name="Filenotes" rows="6"
            class="float-left pl-10 rounded-none border border focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full pdark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            required></textarea>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6" style="display: flex; justify-content: space-between; align-items:center;">
      <div class="w-full md:w-1/3 px-1 mb-6 md:mb-0">
      </div>
      <div class="w-full md:w-1/3 px-1 mb-6 md:mb-0">
        <button class="bg-[#09AFF4] rounded-lg text-white h-14 px-4 w-full focus:outline-none focus:shadow-outline"
          type="submit">
          Add me to the panel
        </button>
      </div>
  </form>
  </div>
  <footer class="mt-24">
    <?php require('./Layout/Footer.php'); ?>
  </footer>
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
</script>

</html>