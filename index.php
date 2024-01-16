<?php 
require_once 'database.php';
 
$latest_threads = get_latest_threads();
$latest_replies = get_latest_replies();
 
echo "<h1>最新主题</h1>";
foreach ($latest_threads as $thread) {
    echo "<h2>" . $thread['title'] . "</h2>";
    echo "<p>" . $thread['content'] . "</p>";
    echo "<a href='post.php?thread_id=" . $thread['id'] . "'>回复</a>";
}
 
echo "<h1>最新回复</h1>";
foreach ($latest_replies as $reply) {
    echo "<h2>" . $reply['title'] . "</h2>";
    echo "<p>" . $reply['content'] . "</p>";
    echo "<a href='post.php?thread_id=" . $reply['thread_id'] . "'>查看主题</a>";
}
?>
