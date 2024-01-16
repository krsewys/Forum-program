<?php 
require_once 'database.php';
 
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    if (login_user($username, $password)) {
        echo "<p>登录成功！</p>";
    } else {
        echo "<p>登录失败，用户名或密码错误。</p>";
    }
}
 
echo "<form method='post'>";
echo "<label for='username'>用户名:</label>";
echo "<input type='text' id='username' name='username'>";
echo "<br>";
echo "<label for='password'>密码:</label>";
echo "<input type='password' id='password' name='password'>";
echo "<br>";
echo "<input type='submit' value='登录'>";
echo "</form>";
?>
