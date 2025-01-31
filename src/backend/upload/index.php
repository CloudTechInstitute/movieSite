<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "movies");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    ini_set('upload_max_filesize', '10000M');
    ini_set('post_max_size', '20000M');
    ini_set('memory_limit', '256M');
    ini_set('max_execution_time', '300');
    ini_set('max_input_time', '300');

    $fileName = mysqli_real_escape_string($conn, $_POST['fileName']);

    $posterDir = '../../uploads/posters/';
    $videoDir = '../../uploads/videos/';

    $posterPath = $posterDir . basename($_FILES['poster']['name']);
    $videoPath = $videoDir . basename($_FILES['video']['name']);

    $posterImage = basename($_FILES['poster']['name']);
    $videoFile = basename($_FILES['video']['name']);

    // Allowed file extensions for security
    $allowedPosterTypes = ['jpg', 'jpeg', 'png'];
    $allowedVideoTypes = ['mp4', 'avi', 'mov'];

    $posterExt = strtolower(pathinfo($posterPath, PATHINFO_EXTENSION));
    $videoExt = strtolower(pathinfo($videoPath, PATHINFO_EXTENSION));

    if (!in_array($posterExt, $allowedPosterTypes) || !in_array($videoExt, $allowedVideoTypes)) {
        die("Invalid file type! Only JPG, PNG for posters and MP4, AVI, MOV for videos are allowed.");
    }

    // Move uploaded files to designated directories
    if (move_uploaded_file($_FILES['poster']['tmp_name'], $posterPath) && move_uploaded_file($_FILES['video']['tmp_name'], $videoPath)) {

        $query = "INSERT INTO videos (`filename`, `file`, `video_path`) VALUES ('$fileName', '$posterImage', '$videoFile')";

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Video uploaded successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

    } else {
        echo "Failed to upload files!";
    }

    $conn->close();
}
?>