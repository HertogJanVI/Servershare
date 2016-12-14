<head>
<script>
<?php
  if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != ".."
	&& $file != "index.php"
	&& $file != "index.css"
	&& $file != "texture1.jpg"
	&& $file != "texture2.jpg"
	&& $file != "texture3.jpg"
	&& $file != "cloud-icon.png") {
        $thelist .= '<li><a class="filelink" href="'.$file.'">'.$file.'</a></li>';
      }
    }
    closedir($handle);
  }
?></script>

<script> 
<?php
  $bg = array('texture1.jpg', 'texture2.jpg', 'texture3.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?></script>

<style type="text/css">
<!--
body{
background-image: url(<?php echo $selectedBg; ?>);
}
-->
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

<div class="wrapper">
<div class="header"><img src=cloud-icon.png><h1>FILES</h1></div>

<ul class="list"><?php echo $thelist; ?></ul>

<p class="blackp">SERVERSHARE BY </p><a class="phonehome" href=http://jantijhof.nl>JAN</a><br/><br/>
</div>

</body>

