<?php 
$host = "localhost";
$username = "username";
$password = "password";
$dbname = "forum";
 
$conn = new mysqli($host, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("连接数据库失败: " . $conn->connect_error);
}
 
function get_latest_threads() {
    global $conn;
    $query = "SELECT * FROM threads ORDER BY created_at DESC LIMIT 5";
    $result = $conn->query($query);
    $threads = [];
    while ($row = $result->fetch_assoc()) {
        $threads[] = $row;
    }
    return $threads;
}
 
function get_latest_replies() {
    global $conn;
    $query = "SELECT * FROM replies ORDER BY created_at DESC LIMIT 5";
    $result = $
