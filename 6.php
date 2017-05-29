<html>
<head>
<title>contoh pemakaian variabel</title>
</head>
<body>
<?php
$program['Web'] = "PHP BerType"; // associative cthay
$a_index[0] = "array index";
$cth['contoh'][0] = "Belajar PHP <br>";
$cth['contoh'][1] = "Mudah dan Menyenangkan";
// Type asosoatif dan indexed (Multidimensi)

echo"$program[Web] $a_index[0] <br>" ;
echo"{$cth[contoh][0]}{$cth[contoh][1]} " ;?>
</body>
</html>