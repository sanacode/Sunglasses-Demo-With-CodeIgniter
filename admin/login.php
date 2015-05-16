<?php
include('config.php');

if(isset($_GET['unset'])){
    session_destroy();
}

if(isset($_POST['submit'])){

	$dsn = "mysql:host=$host;dbname=$dbname";
    try{
        $db = new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    } catch (Exception $ex) {
        die('Error: '. $ex->getMessage);
    }

    $ur = $_POST['user'];
    $pa = $_POST['pass'];
    $ur = mysql_real_escape_string($ur);
    $pa = mysql_real_escape_string($pa);
	$sql = "SELECT * FROM `customer` WHERE `user`='$ur' and `pass`='$pa'";
    $result = $db->query($sql);
	//$row = $result->rowCount();
    $row = $result->fetch();
    if($row!=''){
        $_SESSION['(*)v(*)'] = $row['idcustomer'];
        header('Location:index.php');
    }

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<style type="text/css">
		@import url(http://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

		*{margin:0;padding:0;}

		body{
		  background:#567;
		  font-family:'Open Sans',sans-serif;
		}

		.button{
		  width:100px;
		  background:#3399cc;
		  display:block;
		  margin:0 auto;
		  margin-top:1%;
		  padding:10px;
		  text-align:center;
		  text-decoration:none;
		  color:#fff;
		  cursor:pointer;
		  transition:background .3s;
		  -webkit-transition:background .3s;
		}

		.button:hover{
		  background:#2288bb;
		}

		#login{
		  width:400px;
		  margin:0 auto;
		  margin-top:8px;
		  margin-bottom:2%;
		  transition:opacity 1s;
		  -webkit-transition:opacity 1s;
		}

		#triangle{
		  width:0;
		  border-top:12x solid transparent;
		  border-right:12px solid transparent;
		  border-bottom:12px solid #3399cc;
		  border-left:12px solid transparent;
		  margin:0 auto;
		}

		#login h1{
		  background:#3399cc;
		  padding:20px 0;
		  font-size:140%;
		  font-weight:300;
		  text-align:center;
		  color:#fff;
		}

		form{
		  background:#f0f0f0;
		  padding:6% 4%;
		}

		input[type="text"],input[type="password"]{
		  width:92%;
		  background:#fff;
		  margin-bottom:4%;
		  border:1px solid #ccc;
		  padding:4%;
		  font-family:'Open Sans',sans-serif;
		  font-size:95%;
		  color:#555;
		}

		input[type="submit"]{
		  width:100%;
		  background:#3399cc;
		  border:0;
		  padding:4%;
		  font-family:'Open Sans',sans-serif;
		  font-size:100%;
		  color:#fff;
		  cursor:pointer;
		  transition:background .3s;
		  -webkit-transition:background .3s;
		}

		input[type="submit"]:hover{
		  background:#2288bb;
		}
		p{
			text-align: center;
		}
	</style>

</head>
<body>
	<span href="#" class="button" id="toggle-login">Log in</span>

<div id="login">
  <div id="triangle"></div>
  <h1>Log in</h1>
  <form name="login" action="" method="POST">
    <input name="user" type="text" placeholder="user" />
    <input name="pass" type="password" placeholder="Password" />
    <input name="submit" type="submit" value="Log in" />
    <p>User: admin &nbsp; &nbsp; Pass: admin</p>
  </form>

</div>
</body>
</html>