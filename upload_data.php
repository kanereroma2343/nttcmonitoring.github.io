<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

// Function to read Excel data and return as an array
function readExcelData($file)
{
    $spreadsheet = IOFactory::load($file);
    $sheet = $spreadsheet->getActiveSheet();
    $data = [];

    $columns = ['D', 'E', 'F', 'G', 'S', 'AD', 'AE', 'AF'];
    foreach ($sheet->getRowIterator(7) as $row) { // Start from the 7th row
        $rowData = [];
        foreach ($columns as $column) {
            $cell = $sheet->getCell($column . $row->getRowIndex());
            $rowData[$column] = $cell->getFormattedValue(); // Use getFormattedValue() to get formatted cell value
        }
        $data[] = $rowData;
    }

    return $data;
}

// Function to save data to the database
function saveToDatabase($data)
{
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

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO excel_data (last_name, first_name, middle_name, extension, qualification, certificate_number, date_of_issuance, validity) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $last_name, $first_name, $middle_name, $extension, $qualification, $certificate_number, $date_of_issuance, $validity);

    // Insert each row of data
    foreach ($data as $row) {
        $last_name = $row['D'];
        $first_name = $row['E'];
        $middle_name = $row['F'];
        $extension = $row['G'];
        $qualification = $row['S'];
        $certificate_number = $row['AD'];
        $date_of_issuance = $row['AE']; // Store the date as it is
        $validity = $row['AF']; // Store the date as it is

        $stmt->execute();
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}

// Function to process file upload and save data
function processFileUpload()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
        $file = $_FILES['file']['tmp_name'];
        $allData = readExcelData($file);

        // Save data to database
        saveToDatabase($allData);

        // Return the data to display
        return $allData;
    }
}

// Call the function to process file upload and get the data
$allData = processFileUpload();

// Return a success message
echo "Data inserted successfully";
?>
