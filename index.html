<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #000000, #0000FF, #FFFFFF);
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #FFFFFF;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2, h3 {
            text-align: center;
            color: #000000;
        }
        .header-buttons {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 20px;
        }
        .header-buttons a {
            background-color: #0000FF; /* Blue */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        .header-buttons a:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        .expired {
            color: red;
            font-weight: bold;
        }
        .expiring-soon {
            color: orange;
            font-weight: bold;
        }
        .active {
            color: green;
            font-weight: bold;
        }
        .pagination {
            text-align: center;
            margin-top: 20px;
        }
        .pagination a {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            color: #000000;
        }
        .pagination a.active {
            background-color: #4CAF50;
            color: white;
        }
        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }
        .lock-container button {
            background-color: #0000FF; /* Blue */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;
        }
        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .search-container input {
            padding: 10px;
            width: 50%;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .search-container button {
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            margin-left: 5px;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            transition: opacity 0.3s ease;
            opacity: 0;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            border-radius: 10px;
            animation: modalopen 0.3s ease;
        }
        @keyframes modalopen {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .modal input {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .modal button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
    <div style="text-align: center;">
        <img src="icons/both.png" alt="Logo" style="width: 220px; height: 100px; margin-right: 10px; display: inline-block;">
        <h2>Current NTTC Holders Monitoring Data</h2>
        <h3>As of: June 3, 2024</h3>
    </div>

    <div class="header-buttons">
        <a href="index.php">Home</a>
        <a href="#" id="uploadButton">Upload XLS</a>
        <a href="#" id="infoButton">Info</a>
    </div>

    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search for names..." onkeypress="checkEnterKey(event)">
        <button onclick="searchTable()">Search</button>
    </div>

    <table id="dataTable">
        <thead>
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Extension</th>
            <th>Qualification</th>
            <th>Certificate Number</th>
            <th>Date of Issuance</th>
            <th>Validity</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "excel_data";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to fetch all data from the excel_data table
        $sql = "SELECT * FROM excel_data";
        $result = $conn->query($sql);

        // Get current date
        $currentDate = new DateTime();

        // Output data of each row
        while($row = $result->fetch_assoc()) {
            $validityDate = new DateTime($row['validity']);
            $interval = $currentDate->diff($validityDate);
            $class = '';

            if ($validityDate < $currentDate) {
                $class = 'expired';
            } elseif ($interval->m < 3 && $interval->invert == 0) {
                $class = 'expiring-soon';
            } else {
                $class = 'active';
            }

            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['last_name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['first_name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['middle_name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['extension']) . "</td>";
            echo "<td>" . htmlspecialchars($row['qualification']) . "</td>";
            echo "<td>" . htmlspecialchars($row['certificate_number']) . "</td>";
            echo "<td>" . htmlspecialchars($row['date_of_issuance']) . "</td>";
            echo "<td class='" . $class . "'>" . htmlspecialchars($row['validity']) . "</td>";
            echo "</tr>";
        }

        // Close connection
        $conn->close();
        ?>
        </tbody>
    </table>
</div>

<!-- Modal for Password -->
<!-- Modal for Password -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2><img src="icons/locked.jpg" alt="Lock Icon" style="width: 20px; height: 20px; margin-right: 5px;">Enter Password </h2>
        <input type="password" id="passwordInput" placeholder="Password">
        <button onclick="checkPassword()">Submit</button>
    </div>
</div>


<!-- Modal for Info -->

<div id="infoModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Meaning of Colors</h2>
        <p><strong><span style="color:red;">Red:</span></strong> Expired NTTC</p>
        <p><strong><span style="color:green;">Green:</span></strong> Active NTTC</p>
        <p><strong><span style="color:orange;">Orange:</span></strong> NTTC will expire in 3 Months</p>
    </div>
</div>

<script>
    // Get modal elements
    var modal = document.getElementById("myModal");
    var infoModal = document.getElementById("infoModal");
    var btn = document.getElementById("uploadButton");
    var infoBtn = document.getElementById("infoButton");
    var span = document.querySelectorAll(".modal-content .close");

    // Open password modal on button click
    btn.onclick = function() {
        modal.style.display = "block";
        modal.style.opacity = "1";
    }

    // Open info modal on button click
    infoBtn.onclick = function() {
        infoModal.style.display = "block";
        infoModal.style.opacity = "1";
    }

    // Close modal on <span> click
    span.forEach(function(element) {
        element.onclick = function() {
            modal.style.opacity = "0";
            setTimeout(() => { modal.style.display = "none"; }, 300);
            infoModal.style.opacity = "0";
            setTimeout(() => { infoModal.style.display = "none"; }, 300);
        }
    });

    // Close modal on outside click
    window.onclick = function(event) {
        if (event.target == modal || event.target == infoModal) {
            modal.style.opacity = "0";
            setTimeout(() => { modal.style.display = "none"; }, 300);
            infoModal.style.opacity = "0";
            setTimeout(() => { infoModal.style.display = "none"; }, 300);
        }
    }

    // Check password
    function checkPassword() {
        var password = document.getElementById("passwordInput").value;
        if (password === "tesda@29") {
            window.location.href = "uploadxls.html";
        } else {
            alert("Incorrect password. Please try again.");
        }
    }

    // Search function
    function searchTable() {
        const input = document.getElementById('searchInput');
        const filter = input.value.toLowerCase();
        const table = document.getElementById('dataTable');
        const tr = table.getElementsByTagName('tr');

        for (let i = 1; i < tr.length; i++) { // Skip the header row
            const td = tr[i].getElementsByTagName('td');
            let match = false;
            for (let j = 0; j < td.length; j++) {
                if (td[j]) {
                    const txtValue = td[j].textContent || td[j].innerText;
                    if (txtValue.toLowerCase().indexOf(filter) > -1) {
                        match = true;
                        break;
                    }
                }
            }
            tr[i].style.display = match ? '' : 'none';
        }
    }

    // Check if Enter key is pressed
    function checkEnterKey(event) {
        if (event.key === 'Enter') {
            searchTable();
        }
    }
</script>


<script>
    // Get modal elements
    var modal = document.getElementById("myModal");
    var infoModal = document.getElementById("infoModal");
    var btn = document.getElementById("uploadButton");
    var infoBtn = document.getElementById("infoButton");
    var span = document.getElementsByClassName("close")[0];

    // Open password modal on button click
    btn.onclick = function() {
        modal.style.display = "block";
        modal.style.opacity = "1";
    }

    // Open info modal on button click
    infoBtn.onclick = function() {
        infoModal.style.display = "block";
        infoModal.style.opacity = "1";
    }

    // Close modal on <span> click
    span.onclick = function() {
        modal.style.opacity = "0";
        setTimeout(() => { modal.style.display = "none"; }, 300);
        infoModal.style.opacity = "0";
        setTimeout(() => { infoModal.style.display = "none"; }, 300);
    }

    // Close modal on outside click
    window.onclick = function(event) {
        if (event.target == modal || event.target == infoModal) {
            modal.style.opacity = "0";
            setTimeout(() => { modal.style.display = "none"; }, 300);
            infoModal.style.opacity = "0";
            setTimeout(() => { infoModal.style.display = "none"; }, 300);
        }
    }

    // Check password
    function checkPassword() {
        var password = document.getElementById("passwordInput").value;
        if (password === "tesda@29") {
            window.location.href = "uploadxls.html";
        } else {
            alert("Incorrect password. Please try again.");
        }
    }

    // Search function
    function searchTable() {
        const input = document.getElementById('searchInput');
        const filter = input.value.toLowerCase();
        const table = document.getElementById('dataTable');
        const tr = table.getElementsByTagName('tr');

        for (let i = 1; i < tr.length; i++) { // Skip the header row
            const td = tr[i].getElementsByTagName('td');
            let match = false;
            for (let j = 0; j < td.length; j++) {
                if (td[j]) {
                    const txtValue = td[j].textContent || td[j].innerText;
                    if (txtValue.toLowerCase().indexOf(filter) > -1) {
                        match = true;
                        break;
                    }
                }
            }
            tr[i].style.display = match ? '' : 'none';
       
        }
    }

    // Check if Enter key is pressed
    function checkEnterKey(event) {
        if (event.key === 'Enter') {
            searchTable();
        }
    }
</script>
</body>
</html>
