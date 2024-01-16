<?php 
require_once 'database.php';
 
$thread_id = isset($_GET['thread_id']) ? $_GET['thread_id'] : 0;
 
if (isset($_POST['title']) && isset($_POST['content'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
 
    if ($thread_id > 0) {
        // 回复主题 
        reply_thread($thread_id, $title, $content);
    } else {
        // 发布新主题 
        create_thread($title, $content);
    }
}
 
if ($thread_id > 0) {
    $thread = get_thread($thread_id);
    echo "<h1>" . $thread['title'] . "</h1>";
    echo "<p>" . $thread['content'] . "</p>";
}
 
echo "<form method='post'>";
echo "<label for='title'>标题:</label>";
echo "<input type='text' id='title' name='title'>";
echo "<br>";
echo "<label for='content'>内容:</label>";
echo "<textarea id='content' name='content'></textarea>";
echo "<br>";
echo "<input type='submit' value='发布'>";
echo "</form>";
?>
