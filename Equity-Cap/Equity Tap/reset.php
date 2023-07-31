<!DOCTYPE html>
<html>

<head>
  <title>Example Applet</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <header>
    <?php require('./Layout/Header.php'); ?>
  </header>
  <div class="flex justify-center mt-[90px]">
    <form class="px-[20px] flex flex-col md:w-1/2 max-w-[600px] w-full py-[20px] px-[20px] border shadow-md mx-[32px]"
      action="email.php" method="POST">
      <div class="pb-[20px] flex justify-center">
        <span class="text-[21px] text-gray-600">Reset Password</span>
      </div>
      <div class="mb-2 md:flex md:justify-end justify-center text-black">
        <label for="default-input"
          class="flex items-center md:justify-end mb-2 text-base font-bold text-gray-700 mr-[20px]">Email</label>
        <input type="email" id="resetEmail" name="resetEmail"
          class="border w-full md:w-[80%] border-gray-300 text-gray-900 text-base rounded focus:ring-blue-500 focus:border-blue-500 block p-2 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500"
          required>
      </div>
      <div class="flex justify-between">
        <div class="flex items-center mb-4">
          <a href="login.php" class="ml-2 text-blue-600 hover:text-gray-500 font-sans">Back to Login</a>
        </div>
        <div class="flex justify-end">
          <button class="bg-[#09AFF4] py-[4px] text-[13px] px-[16px] text-white">Request Password
            Reset</button>
        </div>
      </div>
    </form>
  </div>
  <footer class="absolute bottom-0 w-full">
    <?php require('./Layout/Footer.php'); ?>
  </footer>
</body>

</html>