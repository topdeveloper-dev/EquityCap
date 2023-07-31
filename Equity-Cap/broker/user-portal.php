<!DOCTYPE html>
<html>

<head>
  <title>Welcome Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col min-h-screen">
  <header>
    <?php require('./Layout/Header.php'); ?>
  </header>
  <div class="flex-1 lg:flex"><?php require('./Layout/Sidebar.php'); ?>
    <div class="p-8 flex-1">
      <p class="text-[24px] font-medium text-[#09AFF4] mb-4 ml-2">My Clients</p>
      <div class="relative overflow-x-auto">
        <table class="table-auto w-full text-sm text-left text-gray-500">
          <thead class="text-gray-700 h-14 bg-gray-200">
            <tr>
              <th scope="col" class="px-6 py-3 sm:text-[10px] md:text-[20px] text-[#09AFF4]">
                Surname
              </th>
              <th scope="col" class="px-6 py-3 sm:text-[10px] md:text-[20px] text-[#09AFF4]">
                First name(s)
              </th>
              <th scope="col" class="px-6 py-3 sm:text-[10px] md:text-[20px] text-[#09AFF4]">
                Company name
              </th>
              <th scope="col" class="px-6 py-3 sm:text-[10px] md:text-[20px] text-[#09AFF4]">
                Loan amt
              </th>
              <th scope="col" class="px-6 py-3 sm:text-[10px] md:text-[20px] text-[#09AFF4]">
                Tel
              </th>
              <th scope="col" class="px-6 py-3 sm:text-[10px] md:text-[20px] text-[#09AFF4]">
                Email
              </th>
              <th scope="col" class="px-6 py-3 sm:text-[10px] md:text-[20px] text-[#09AFF4]">
                Rec'd date
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
              $servername = "localhost";
              $username = "root";
              $password = "";

            // Create connection
            $conn = new mysqli($servername, $username, $password);

            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            // Select database
            $conn->select_db("users");
              // database query to select data
              $query = mysqli_query($conn, "SELECT * FROM users");
              // loop through each row of data
              while ($row = mysqli_fetch_assoc($query)) {
                  // output row data as HTML table row and cell elements
                echo "<tr class='bg-white border-b'>";
                echo "<td class='px-6 py-4 sm:text-[16px] font-bold text-gray-800'><a href='profile.php?bussiness_name=" . $row['business_name'] . "' class='hover:text-cyan-400'>" . $row['business_name'] ."</a></td>";
                // echo "<td class='px-6 py-4 sm:text-[16px] font-bold text-gray-800'><a href='#' class='hover:text-cyan-400'>" . $row['surname'] ."</a></td>";
                // echo "<td class='px-6 py-4 sm:text-[16px] font-bold text-gray-800'>" . $row['firstname'] . "</td>";
                // echo "<td class='px-6 py-4 sm:text-[16px] font-bold text-gray-800'>" . $row['company_name'] . "</td>";
                // echo "<td class='px-6 py-4 sm:text-[16px] font-bold text-gray-800'>" . $row['amount'] . "</td>";
                // echo "<td class='px-6 py-4 sm:text-[16px] font-bold text-gray-800'>" . $row['mobile_number'] . "</td>";
                // echo "<td class='px-6 py-4 sm:text-[16px] font-bold text-gray-800'>" . $row['email'] . "</td>";
                // echo "<td class='px-6 py-4 sm:text-[16px] font-bold text-gray-800'>" . $row['date'] . "</td>";
                echo "</tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <footer>
    <?php require('./Layout/Footer.php'); ?>
  </footer>
</body>

</html>