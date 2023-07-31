<!DOCTYPE html>
<html>

<head>
  <title>Welcome Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col min-h-screen">
  <header>
    <?php require('./Layout_management/Header.php'); ?>
  </header>
  <div class="flex-1 lg:flex"><?php require('./Layout_management/Sidebar.php'); ?>
    <div class="p-8 flex-1">
      <p class="text-[24px] font-medium text-[#09AFF4] mb-4 ml-2">All Clients</p>
      <div class="relative overflow-x-auto">
        <table class="table-auto w-full text-sm text-left text-gray-500">
          <thead class="text-gray-700 h-14 bg-gray-200">
            <tr>
              <th scope="col" class="px-6 py-3 sm:text-[10px] md:text-[20px] text-[#09AFF4]">
                Surname
              </th>
              <th scope="col" class="px-6 py-3 sm:text-[10px] md:text-[20px] text-[#09AFF4]">
                First(s)
              </th>
              <th scope="col" class="px-6 py-3 sm:text-[10px] md:text-[20px] text-[#09AFF4]">
                Company
              </th>
              <th scope="col" class="px-6 py-3 sm:text-[10px] md:text-[20px] text-[#09AFF4]">
                Loan
              </th>
              <th scope="col" class="px-6 py-3 sm:text-[10px] md:text-[20px] text-[#09AFF4]">
                Tel
              </th>
              <th scope="col" class="px-6 py-3 sm:text-[10px] md:text-[20px] text-[#09AFF4]">
                Email
              </th>
              <th scope="col" class="px-6 py-3 sm:text-[10px] md:text-[20px] text-[#09AFF4]">
                Rec'd
              </th>
              <th scope="col" class="px-6 py-3 sm:text-[10px] md:text-[20px] text-[#09AFF4]">
                User ID
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $servername = "localhost";
            $username = "proper65";
            $password = "aBn-mzSTgeV1j<f6APCs";

            // Create connection
            $conn = new mysqli($servername, $username, $password);

            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            // Select database
            $conn->select_db("proper65_users");
              // database query to select data
              $query = mysqli_query($conn, "SELECT * FROM cap_users");
              // loop through each row of data
              while ($row = mysqli_fetch_assoc($query)) {
                  // output row data as HTML table row and cell elements
                echo "<tr class='bg-white border-b'>";
                echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['surname'] . "</td>";
                echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['firstname'] . "</td>";
                echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['company_name'] . "</td>";
                echo "<td class='px-6 py-4 whitespace-nowrap'>$" . $row['amount'] . "</td>";
                echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['mobile_number'] . "</td>";
                echo "<td class='px-6 py-4 whitespace-nowrap'>$" . $row['email'] . "</td>";
                echo "</tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <footer>
    <?php require('./Layout_management/Footer.php'); ?>
  </footer>
</body>

</html>