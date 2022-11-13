<?php
session_start();

if (isset($_GET['logout'])) {
   	  session_destroy();
	  unset($_SESSION['username']);
	  header('Location:../');
	
    
  	}


if(isset($_SESSION['username'])){
$usernameSet = '<li class="active"><a href="auth">Admin | ' . $_SESSION['username'] .'</a></li>';
} else {
$usernameSet = "";
}

 	if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Prvně je potřeba se přihlásit.";
	$msg = $_SESSION['msg'];
	if(isset($_GET[""])){
		$url = "login";
	} else {$url = "login";}
	
	
	echo '<p><div align=center style="font-size:1.5em">Prvně je potřeba se přihlásit.</p><button onclick="login()">PŘIHLÁSIT SE</button><p id="demo"></div></p>';
	echo '<p><div align=center style="font-size:1.3em"><span class="text-white font-semibold text-xl"><button onclick="discord()"><a  align=center class="bg-discord-blue px-5 py-3 rounded-md hover:bg-gray-600 transition">PŘIHLÁSIT SE<i class="fa-brands fa-discord mr-2"></i></a></button></span></div></p>';
	echo '<script>function login() {window.location.href="lIT.php"}</script>';
	echo '<script>function discord() {window.open("https://aplikace.itvitek.eu/discord?callback={url}/auth/auth", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=650,width=600,height=700");}';
	#echo 'window.addEventListener("message", function(e) {document.getElementById("demo").innerHTML = "";console.log("{url}/auth/auth?" + e.data.id + "&pass" + e.data.pass);window.location.href="{url}/auth/auth?" + e.data.id + "&pass=" + e.data.pass;}, false);</script>';
	echo 'window.addEventListener("message", function(e) {document.getElementById("demo").innerHTML = "";console.log("{url}/auth/discord?id=?" + e.data.id + "&pass" + e.data.pass);window.location.href="{url}/auth/discord?id=" + e.data.id + "&pass=" + e.data.pass;}, false);</script>';	
	}

  echo '</div>';
echo '  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>';
echo '</body>
</html>';

?>
