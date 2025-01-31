<?php include("./connection");
$video_id = isset($_POST['video_id']) ? intval($_POST['video_id']) : 0;
$user_ip = $_SERVER['REMOTE_ADDR']; // Get user IP address

if ($video_id > 0) {
    // Check if this user already viewed the video
    $check_sql = "SELECT views FROM video_views WHERE video_id = ? AND user_ip = ?";
    $stmt = $conn->prepare($check_sql);
    $stmt->bind_param("is", $video_id, $user_ip);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        // Insert new record for this user
        $insert_sql = "INSERT INTO video_views (video_id, user_ip, views) VALUES (?, ?, 1)";
        $stmt = $conn->prepare($insert_sql);
        $stmt->bind_param("is", $video_id, $user_ip);
        $stmt->execute();
    }

    // Count total views for this video
    $count_sql = "SELECT COUNT(*) as total_views FROM video_views WHERE video_id = ?";
    $stmt = $conn->prepare($count_sql);
    $stmt->bind_param("i", $video_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    echo json_encode(['views' => $data['total_views']]);
}

$conn->close();