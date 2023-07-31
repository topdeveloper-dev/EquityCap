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
  <?php require('./Layout/Header.php'); ?>
  <form class="mx-auto mt-48 sm:w-[600px] sm:px-[20px] w-[300px]" action="login.php" method="POST">
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full flex justify-center text-lg font-sans border-[#f5f5f5f5] border-b-[4px] mb-[20px] pb-[16px]">
        Apply now for funds in 24 hours!</div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Amount Required
        </label>
        <div class="flex">
          <span
            class="inline-flex h-14 items-center font-extrabold px-3 text-sm border border-r-0 border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            $
          </span>
          <input type="text" id="amount" name="amount"
            class="rounded-none rounded-r-lgborder  border h-14  focus:ring-blue-500 focus:outline-none focus:shadow-outline  focus:border-blue-500 block w-full font-[15px] p-2.5 dark:border-gray-300 dark:placeholder-gray-400  text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="100,000" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Your Monthly Turnover
        </label>
        <div class="flex">
          <span
            class="inline-flex h-14 font-extrabold items-center px-3 text-sm border border-r-0 border-gray-300 bg-gray-200 dark:text-gray-400 dark:border-gray-300">
            $
          </span>
          <input type="text" id="revenue" name="revenue"
            class="rounded-none rounded-r-lgborder border h-14 focus:ring-blue-500 focus:outline-none focus:shadow-outline focus:border-blue-500 block font-[15px] w-full p-2.5 dark:border-gray-300 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="10,000" required>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-8">
        <label class="block tracking-wide font-sans text-[14px] font-bold mb-2" for="grid-state">
          The Purpose of this loan
        </label>
        <div class="relative">
          <select name="purpose" id="Purpose"
            class="block h-14 text-gray-400 appearance-none w-full border focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 border-gray-200 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white"
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
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0 mt-8">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          Time Trading
        </label>
        <div class="relative">
          <select name="trading" id="Trading"
            class="block h-14  appearance-none w-full border border-gray-200 focus:ring-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 text-gray-400 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
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
    </div>
    <div class="flex flex-wrap -mx-3 mb-6 mt-8">
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0">
        <label class="block tracking-wide text-gray-700 font-sans text-[14px] font-bold mb-2" for="grid-state">
          What is the loan term required?
        </label>
        <div class="relative">
          <select name="term"
            class="block h-14 appearance-none w-full text-gray-400 border border-gray-200 focus:ring-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="Term" required>
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
          <select name="repayment"
            class="block h-14 appearance-none focus:ring-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full border border-gray-200 text-gray-400 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="Repayment" required>
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
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0"></div>
      <div class="w-full md:w-1/2 px-1 mb-6 md:mb-0">
        <button class="bg-[#09AFF4] text-white h-14 px-4 w-full focus:outline-none focus:shadow-outline" type="submit">
          Next
        </button>
      </div>
  </form>
  </div>
  <footer class="absolute bottom-0 w-full">
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