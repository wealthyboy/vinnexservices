
<?php

// Replace 'path/to/your/file.pdf' with the actual path to your PDF file
$filePath = 'vinnex_Services_profile.pdf';

// Check if the file exists
if (file_exists($filePath)) {

    // Set appropriate headers for PDF file
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="downloaded_file.pdf"');
    header('Content-Length: ' . filesize($filePath));

    // Output the file content
    readfile($filePath);

    // Exit to prevent any further output
    exit;
} else {
    // If the file doesn't exist, provide an error message
    echo 'File not found!';
}
?>