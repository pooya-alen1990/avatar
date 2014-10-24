<?php include './class.avatar.php'; ?>
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

$sara = new Avatar('f');
$sara->setHair('1','black');
$sara->setNose('2');
$sara->setLips('1','red');
$sara->setEyes();
echo $sara->draw();

$elizabeth = new Avatar('f');
$elizabeth->setHair('1','brown');
$elizabeth->setNose('1');
$elizabeth->setLips('1','red');
$elizabeth->setEyes();
echo $elizabeth->draw();

$john = new Avatar('m');
$john->setHair();
$john->setNose();
$john->setLips();
$john->setEyes();
echo $john->draw();

$jack = new Avatar('m');
$jack->setHair('1','brown');
$jack->setNose('1');
$jack->setLips('1');
$jack->setEyes();
echo $jack->draw();
?>

</body>
</html>
