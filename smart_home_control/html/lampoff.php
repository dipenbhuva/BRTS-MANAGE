<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
//system("echo raspberry | sudo -S python /var/www/PiHome/scripts/lights/lampoff.py"); 

?>
<script language="javascript" type="text/javascript">
     <!--
     window.setTimeout('window.open("http://localhost/smart_home_control/html/index.php","newsite")',1000);
     // -->
 </script>
 Your Light Is OFF, Peace Out :)