<?php
// File to be downloaded
$file = 'CRICFy TV_5.0 (1).apk';

if (file_exists($file)) {
    // Set headers to force download
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    // Enclose the filename in double quotes to handle spaces and special characters
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    
    // Clear output buffer to prevent memory issues
    if (ob_get_level()) {
      ob_end_clean();
    }
    
    // Read the file and send it to the user
    readfile($file);
    exit;
} else {
    // If the file does not exist
    echo 'File not found.';
}
?>