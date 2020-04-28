<html>
<head>
<title>Cloud</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/index.css" type="text/css"/>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/tos.js"></script>
</head>
<body>
<h3 align="center">Watch Movies From Your Drive</h3>

                    <a href="index.php" type="button" class="btn btn-block btn-success" name="btn-login">Back</a>
                
<br>
<?php
 
//Get a list of file paths using the glob function.
$fileList = glob('cloud/*');

//Loop through the array that glob returned.
foreach($fileList as $filename){
   //Simply print them out onto the screen.
   ?>
   <div class="container">
    <!-- Jumbotron-->
    <div class="jumbotron">
   <video width="320" height="240" controls>
   <source src="<?php echo $filename ?>" type="video/mp4">
   </video>
   </div>
   <?php
 //  echo $filename, '<br>'; 
   
}
?>

</body>
</html>