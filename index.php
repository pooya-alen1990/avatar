<?php include 'class.Avatar.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Avatar Builder</title>
</head>

<body>

<?php 
$anna = new Avatar('f');
$anna->setHair();
$anna->setNose();
$anna->setLips();
$anna->setEyes();
echo $anna->draw();
?>
<hr>
<?php
$sara = new Avatar('f');
$sara->setHair('1','black');
$sara->setNose('2');
$sara->setLips('1','red');
$sara->setEyes();
echo $sara->draw();
?>

</body>
</html>
