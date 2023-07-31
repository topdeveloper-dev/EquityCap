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
  <div class="flex justify-center mt-[90px]">
    <form class="px-[20px] flex flex-col md:w-1/2 max-w-[600px] w-full py-[20px] px-[20px] border shadow-md mx-[32px]"
      action="login-form.php" method="POST">
      <div class="pb-[20px] flex justify-center">
        <span class="text-[20px] text-gray-600">Login</span>
      </div>
      <div class="mb-4 md:flex md:justify-end justify-center text-black">
        <label for="default-input"
          class="flex items-center md:justify-end mb-2 text-base font-bold text-gray-700 mr-[20px]">Email</label>
        <input type="email" id="email" name="email"
          class="border w-full md:w-[80%] border-gray-300 text-gray-900 text-base rounded focus:ring-blue-500 focus:border-blue-500 block p-2 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500"
          required>
      </div>
      <div class="mb-2 md:flex md:justify-end justify-center">
        <label for="default-input"
          class="flex items-center md:justify-end mb-2 text-base font-bold text-gray-700 mr-[20px]">Password</label>
        <input type="password" id="password" name="password"
          class="border md:w-[80%] w-full border-gray-300 text-gray-900 text-base rounded block p-2 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500"
          required>
      </div>

      <div class="flex justify-between md:ml-[110px] mt-1">
        <div class="flex items-center mb-4">
          <input id="remember" type="checkbox" name="remember"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="default-checkbox" class="ml-2 text-base font-medium text-gray-500">Remember Me</label>
        </div>
        <div class="text-blue-600 hover:text-gray-700"><a href="reset.php">Forgot Password?</a>
        </div>
      </div>
      <div class="flex justify-end">
        <button class="bg-[#09AFF4] py-[6px] px-[14px] text-white">Login</button>
      </div>
    </form>
  </div>
  <div class="w-full flex justify-center text-gray-900 text-base font-sans mt-12 mb-[20px] pb-[16px]">
    Not yet a partner?
    <a href="register.php" class="text-blue-600 hover:underline dark:text-blue-600 ml-2">Join Now!</a>
  </div>
  <footer class="absolute bottom-0 w-full">
    <?php require('./Layout/Footer.php'); ?>
  </footer>
</body>
<script>
// Store the checkbox value in a cookie
var rememberCheckbox = document.getElementById("remember");
rememberCheckbox.addEventListener("change", function() {
  if (this.checked) {
    document.cookie = "remember=1; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
  } else {
    document.cookie = "remember=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
  }
});

// Check the cookie value on page load
var rememberCookie = document.cookie.replace(/(?:(?:^|.*;\s*)remember\s*\=\s*([^;]*).*$)|^.*$/, "$1");
if (rememberCookie == 1) {
  rememberCheckbox.checked = true;
}
</script>

</html>