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
      action="reset-password.php" method="POST">
      <div class="pb-[20px] flex justify-center">
        <span class="text-[21px] text-gray-600">Reset confirmation</span>
      </div>
      <div class="mb-2 md:flex md:justify-end justify-center text-black">
        <label for="default-input"
          class="flex items-center md:justify-end mb-2 text-base font-bold text-gray-700 mr-[28px]">New
          Password</label>
        <input type="password" id="password" name="password"
          class="border w-full md:w-[70%] border-gray-300 text-gray-900 text-base rounded focus:ring-blue-500 focus:border-blue-500 block p-2 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500"
          onkeyup="checkPassworLength()" required>
      </div>
      <div class=" md:flex md:justify-end justify-center">
        <label for="default-input"
          class="flex items-center md:justify-end mb-2 text-base font-bold text-gray-700 mr-[28px] hidden">New
          Password</label>
        <span id="passwordLength" class="w-full md:w-[70%]" style="display:none;color:red;">Password must be at least 8
          characters long</span>
      </div>
      <div class="flex justify-end">
        <div class="flex justify-end">
          <button class="bg-[#09AFF4] py-[5px] text-[13px] px-[16px] text-white">Submit</button>
        </div>
      </div>
      <input type="hidden" id="resetEmail" name="resetEmail" value="<?php echo $_GET['resetEmail']?>" />
    </form>
  </div>
  <footer class="absolute bottom-0 w-full">
    <?php require('./Layout/Footer.php'); ?>
  </footer>
</body>
<script>
function checkPassworLength() {
  var password = document.getElementById("password");
  var passwordLength = document.getElementById("passwordLength");
  if (password.value.length < 8) {
    passwordLength.style.display = "inline";
  } else {
    passwordLength.style.display = "none";
  }
}
</script>

</html>