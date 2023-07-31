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
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }
  </style>
</head>

<body>
  <header>
    <?php require('./Layout/HeaderAccount.php'); ?>
  </header>
  <div class="flex-1 lg:flex"><?php require('./Layout/Sidebar.php'); ?>
    <div class="p-8 flex-1">
      <div class="relative overflow-x-auto">
        <div class="flex flex-wrap mt-[160px] mb-6">
          <form
            class="sm:px-[24px] px-[10px] flex flex-col md:w-1/1 w-full py-[40px] mb-6 border shadow-md mx-[4px] sm:mx-[16px]"
            action="account-form.php" method="POST">
            <div class="bg-white rounded px-4 md:p-4 mb-6">
              <div class="grid gap-4 gap-y-2 lg:grid-cols-5">
                <div class="text-gray-600">
                  <p class="font-medium text-[20px] mt-[-24px]">Settings</p>
                  <div class="flex mt-4" id="changeProfile">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-500 dark:text-gray-400"
                      fill="currentColor" viewBox="0 0 512 512">
                      <path style="color: #3d77c2;"
                        d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 128c39.77 0 72 32.24 72 72S295.8 272 256 272c-39.76 0-72-32.24-72-72S216.2 128 256 128zM256 448c-52.93 0-100.9-21.53-135.7-56.29C136.5 349.9 176.5 320 224 320h64c47.54 0 87.54 29.88 103.7 71.71C356.9 426.5 308.9 448 256 448z" />
                    </svg>
                    <p class="ml-2 text-[17px] mt-[2px] font-medium text-[#3d77c2]">Profile
                    </p>
                  </div>
                  <div class="flex mt-[2px] hover:cursor-pointer" id="changePassword">
                    <svg aria-hidden="true" class="w-5 h-6 text-gray-500 dark:text-gray-400" fill="currentColor"
                      viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path style="color: #3d77c2;"
                        d="M 12 1 C 8.6761905 1 6 3.6761905 6 7 L 6 8 C 4.9 8 4 8.9 4 10 L 4 20 C 4 21.1 4.9 22 6 22 L 18 22 C 19.1 22 20 21.1 20 20 L 20 10 C 20 8.9 19.1 8 18 8 L 18 7 C 18 3.6761905 15.32381 1 12 1 z M 12 3 C 14.27619 3 16 4.7238095 16 7 L 16 8 L 8 8 L 8 7 C 8 4.7238095 9.7238095 3 12 3 z M 12 13 C 13.1 13 14 13.9 14 15 C 14 16.1 13.1 17 12 17 C 10.9 17 10 16.1 10 15 C 10 13.9 10.9 13 12 13 z" />
                    </svg>
                    <p class="ml-2 text-[17px] mt-[3px] font-medium text-[#3d77c2]">Password
                    </p>
                  </div>
                </div>
                <div class="lg:col-span-4" id="profileDiv">
                  <div class="grid gap-3 gap-y-2 grid-cols-1 md:grid-cols-6">
                    <div class="md:col-span-3 font-bold text-base">
                      <label for="address">First Name</label>
                      <input type="text" name="firstname" id="firstname" class="h-12 border mt-1 px-4 w-full"
                        value="John" placeholder="" />
                    </div>
                    <div class="md:col-span-3 font-bold text-base">
                      <label for="city">Last Name</label>
                      <input type="text" name="lastname" id="lastname" class="h-12 border mt-1 px-4 w-full" value="Doe"
                        placeholder="" />
                    </div>
                    <div class="md:col-span-6 font-bold text-base mt-4">
                      <label for="email">Email Address</label>
                      <input type="text" name="email" id="email" class="h-12 border mt-1 px-4 w-full" />
                    </div>
                    <div class="md:col-span-5 text-left">
                      <div class="inline-flex items-end">
                        <button class="bg-[#09AFF4] justify-start text-white py-2 px-4">Update</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="lg:col-span-4" id="passwordDiv" style="display: none;">
                  <div class="grid gap-3 gap-y-2 grid-cols-1 md:grid-cols-6">
                    <div class="md:col-span-6 font-bold text-base mt-4">
                      <label for="email">New Password</label>
                      <input type="password" name="email" id="email" class="h-12 border mt-1 px-4 w-full" />
                    </div>
                    <div class="md:col-span-5 text-left">
                      <div class="inline-flex items-end">
                        <button class="bg-[#09AFF4] justify-start text-white py-2 px-4">Update</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <?php require('./Layout/Footer.php'); ?>
  </footer>
</body>
<script>
var propfile = document.getElementById("profileDiv");
var password = document.getElementById('passwordDiv')

$('#changeProfile').click(function() {
  password.style.display = "none"
  propfile.style.display = "block"
});

$('#changePassword').click(function() {
  password.style.display = "block"
  propfile.style.display = "none"
});
</script>

</html>