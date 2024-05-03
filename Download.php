<?php
$filename = 'public/bhautik_cv.pdf';

if (file_exists($filename)) {
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
    header('Content-Length: ' . filesize($filename));
    readfile($filename);
    exit;
} 

header("Location: index.php");

?>