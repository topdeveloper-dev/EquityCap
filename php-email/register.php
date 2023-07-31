<!DOCTYPE html>
<html>

<head>
  <title>Example Applet</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
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
  <form class="mx-auto mt-24 sm:w-[650px] sm:px-[20px] w-[300px]" action="auth-form.php" method="POST">
    <div class="flex flex-wrap mb-6 ">
      <div class="w-full flex justify-center text-lg font-sans border-[#f5f5f5f5] border-b-[4px] mb-[20px] pb-[16px]">
        Your Details</div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Business Name
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
          <input id="business" name="Business Name"
            class="rounded-none border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Equity Tap" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide font-sans text-[14px] font-bold mb-2" for="grid-state">
          Best Describe Yourself
        </label>
        <div class="relative">
          <select name="Best Describe Yourself" id="yourself"
            class="block h-14 text-gray-400 appearance-none w-full border focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 border-gray-200 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white"
            required>
            <option value="">Select from dropdown</option>
            <option value="Mortgage Broker">Mortgage Broker</option>
            <option value="Commercial Finance Broker">Commercial Finance Broker</option>
            <option value="Real Estate Agent">Real Estate Agent</option>
            <option value="Property Purchase">Affiliate Marketer</option>
            <option value="Lead Generator">Lead Generator</option>
            <option value="Other">Other</option>
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
            placeholder="John" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Last Name
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
          <input id="lastname" name="Last Name"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Smith" required>
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
          <input type="number" id="mobile" name="Mobile Number"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="1300 123 024" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Password
        </label>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-r-0 border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
              viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M 12 1 C 8.6761905 1 6 3.6761905 6 7 L 6 8 C 4.9 8 4 8.9 4 10 L 4 20 C 4 21.1 4.9 22 6 22 L 18 22 C 19.1 22 20 21.1 20 20 L 20 10 C 20 8.9 19.1 8 18 8 L 18 7 C 18 3.6761905 15.32381 1 12 1 z M 12 3 C 14.27619 3 16 4.7238095 16 7 L 16 8 L 8 8 L 8 7 C 8 4.7238095 9.7238095 3 12 3 z M 12 13 C 13.1 13 14 13.9 14 15 C 14 16.1 13.1 17 12 17 C 10.9 17 10 16.1 10 15 C 10 13.9 10.9 13 12 13 z" />
            </svg>
          </span>
          <input type="password" id="password" name="Password"
            class="rounded-none rounded-r-lgborder  border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            required>
        </div>
        <span id="passwordLength" style="display:none;color:red;">Password must be at least 8 characters long</span>

      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Retype Password
        </label>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-r-0 border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
              viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M 12 1 C 8.6761905 1 6 3.6761905 6 7 L 6 8 C 4.9 8 4 8.9 4 10 L 4 20 C 4 21.1 4.9 22 6 22 L 18 22 C 19.1 22 20 21.1 20 20 L 20 10 C 20 8.9 19.1 8 18 8 L 18 7 C 18 3.6761905 15.32381 1 12 1 z M 12 3 C 14.27619 3 16 4.7238095 16 7 L 16 8 L 8 8 L 8 7 C 8 4.7238095 9.7238095 3 12 3 z M 12 13 C 13.1 13 14 13.9 14 15 C 14 16.1 13.1 17 12 17 C 10.9 17 10 16.1 10 15 C 10 13.9 10.9 13 12 13 z" />
            </svg>
          </span>
          <input type="password" id="retype"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            onkeyup="checkPasswordMatch()" required>
        </div>
        <span id="passwordMismatch" style="display:none;color:red;">Passwords do not match</span>
      </div>
      <div class="w-full flex justify-center text-lg font-sans border-[#f5f5f5f5] border-b-[4px] mt-8 pb-[16px]">
        Business Address</div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Street
        </label>
        <input id="street" name="Street"
          class="rounded-none rounded-r-lgborder  border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="4 llya Ave" required>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          City
        </label>
        <input id="city" name="City"
          class="rounded-none rounded-r-lgborder  border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="Erina" required>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-4">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          State
        </label>
        <div class="relative">
          <select name="State"
            class="block h-14  appearance-none w-full border border-gray-200 focus:ring-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 text-gray-500 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="state" required>
            <option value="">New South Wales</option>
            <option value="Australian Capital Territory">Australian Capital Territory</option>
            <option value="New South Wales">New South Wales</option>
            <option value="Northern Territory">Northern Territory</option>
            <option value="Queensland">Queensland</option>
            <option value="South Australia">South Australia</option>
            <option value="Tasmania">Tasmania</option>
            <option value="Victoria">Victoria</option>
            <option value="Western Australia">Western Australia</option>
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
          Post Code
        </label>
        <input id="postcode" name="Post Code"
          class="rounded-none rounded-r-lgborder  border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="2250" required>
      </div>
    </div>
    <div class="flex items-center mb-4 mt-4">
      <div class="flex">
        <input id="checkbox-1" type="checkbox" value=""
          class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
          required>
        <label for="checkbox-1" class="ml-2 text-sm text-gray-900 dark:text-gray-600">I agree to the terms
          of
          our <a href="#" class="text-blue-600 hover:underline dark:text-blue-600"> Privacy Statement and Privacy
            Consent</a>
          and our <a href="#" class="text-blue-600 hover:underline dark:text-blue-600">Partner Terms &
            Conditions</a> .</label>
      </div>
    </div>
    <div class="flex flex-wrap mb-6">
      <div class="w-full md:w-1/1 px-1 mb-6 md:mb-0">
        <button class="bg-[#3d76c2]  text-white h-14 w-full focus:outline-none focus:shadow-outline" type="submit"
          style="background-color: #09AFF4;">
          Submit
        </button>
      </div>
    </div>
  </form>
  <div class="w-full flex justify-center text-gray-900 text-base font-sans mt-12 mb-[20px] pb-[16px]">
    Already a partner?
    <a href="login.php" class="text-blue-600 hover:underline dark:text-blue-600 ml-2">Log In</a>
  </div>
  </div>
  <footer>
    <?php require('./Layout/Footer.php'); ?>
  </footer>
</body>
<script>
function checkPasswordMatch() {
  var password = document.getElementById("password");
  var retype = document.getElementById("retype");
  var passwordMismatch = document.getElementById("passwordMismatch");
  var passwordLength = document.getElementById("passwordLength");
  if (password.value != retype.value) {
    passwordMismatch.style.display = "inline";
  } else {
    passwordMismatch.style.display = "none";
  }
  if (password.value.length < 8) {
    passwordLength.style.display = "inline";
  } else {
    passwordLength.style.display = "none";
  }
}
</script>

</html>