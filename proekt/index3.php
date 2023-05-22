<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "Proekttest");


session_start();
?>
<?php
$db = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if(isset($_POST["register"])){

if(!empty($_POST['username']) &&!empty($_POST['password']) &&!empty($_POST['email'])) {
$username=htmlspecialchars($_POST['username']);
$password=htmlspecialchars($_POST['password']);
$email=htmlspecialchars($_POST['email']);
$query = mysqli_query($db,"SELECT * FROM users WHERE username='".$username."'");
$numrows= mysqli_num_rows($query);
if($numrows==0){
$sql="INSERT INTO users
(username,password ,email)
VALUES('$username','$password', '$email')";
$result = mysqli_query($db,$sql);
if($result){
$message = "Account Successfully Created";
} else {
$message = "Failed to insert data information!";
}
} else {
$message = "That username already exists! Please try another one!";
}
} else {
$message = "All fields are required!";
}
}
?>
<head>
<meta charset="utf-8">
<title> Как с помощью PHP и MySQL создать систему регистрации и авторизации пользователей</title>
<link href="style.css" media="screen" rel="stylesheet">
</head>
<body>
<div class="container mregister">
<div id="login">
<h1>Регистрация</h1>
<form action="register.php" id="registerform" method="post"name="registerform">
<p><label for="user_pass">E-mail<br>
<input class="input" id="email" name="email" size="32"type="email" value=""></label></p>
<p><label for="user_pass">Имя пользователя<br>
<input class="input" id="username" name="username"size="20" type="text" value=""></label></p>
<p><label for="user_pass">Пароль<br>
<input class="input" id="password" name="password"size="32" type="password" value=""></label></p>
<p class="submit"><input class="button" id="register" name= "register" type="submit" value="Зарегистрироваться"></p>
<p class="regtext">Уже зарегистрированы? <a href= "index.php">Введите имя пользователя</a>!</p>
</form>
</div>
</div>
<footer>
</footer>
</body>
</html>