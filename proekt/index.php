<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "Proekttest");


session_start();
?>

<?php
$db = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if(isset($_SESSION["session_username"])){
}

if(isset($_POST["login"])){

if(!empty($_POST['username']) && !empty($_POST['password'])) {
$username=htmlspecialchars($_POST['username']);
$password=htmlspecialchars($_POST['password']);
$query = mysqli_query($db,"SELECT * FROM users WHERE username = '".$_POST['username']."' and password = '".$_POST['password']."'");
$numrows = mysqli_num_rows($query);
if($numrows!=0){
while($row = mysqli_fetch_assoc($query)){
$dbusername=$row['username'];
$dbpassword=$row['password'];
echo $dbusername;
}
if($dbusername && $password == $dbpassword){
$_SESSION['session_username']=$username;
header("Location: index2.php");
}
} else {

echo "Неправильный логин или пароль!";
}
} else {
$message = "All fields are required!";
}
}
?><html lang="en">
<head>
<meta charset="utf-8">
<title> dz</title>
<link href="style.css" media="screen" rel="stylesheet">
</head>
<body>
<div class="container mlogin">
<div id="login">
<h1>Вход</h1>
<form action="" id="loginform" method="post"name="loginform">
<p><label for="user_login">Имя пользователя<br>
<input class="input" id="username" name="username"size="20"
type="text" value=""></label></p>
<p><label for="user_pass">Пароль<br>
<input class="input" id="password" name="password"size="20"
type="password" value=""></label></p>
<p class="submit"><input class="button" name="login"type= "submit" value="Войти"></p>
<p class="regtext">Еще не зарегистрированы?<a href= "index3.php">Регистрация</a>!</p>
</form>
</div>
</div>
<footer>

</footer>
</body>
</html>