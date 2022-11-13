<?php 
echo '<button onclick="login();">DONT WORKING?</button>';
ECHO "IT DOES NOT WORK? IT MAY BE BECAUSE YOUR BROWSER DOESN'T SUPPORT POPUP WINDOWS. TRY IN A DIFFERENT BROWSER.";
echo '<script>function login() {window.open("login", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=650,width=600,height=700");} login();';
echo 'window.addEventListener("message", function(e) {console.log("{url}/auth/auth?" + e.data.id + "&pass" + e.data.pass);window.location.href="{url}/auth/auth?" + e.data.id + "&pass=" + e.data.pass;}, false);</script>';



?>