<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>gpa calculator</title>
	<link rel="stylesheet" type="text/css" href="gpa.css">
</head>
<body>
<h1>GPA CALCULATOR</h1>
<div>
<div>

<h2>FIRST SEMESTER</h2>
<form>
MEE351
<input type="text" name="grade1" placeholder="Enter Grade" value="<?php echo $gra1;?>">
<input type="text" name="credit1" placeholder="Enter Credit"  value="<?php echo $cre1;?>"><br>


CHE321
<input type="text" name="grade2" placeholder="Enter Grade"  value="<?php echo $gra2;?>">
<input type="text" name="credit2" placeholder="Enter Credit" value="<?php echo $cre2;?>"><br>

CHE331
<input type="text" name="grade3" placeholder="Enter Grade"  value="<?php echo $gra3;?>">
<input type="text" name="credit3" placeholder="Enter Credit"  value="<?php echo $cre3;?>"><br>

CHE341
<input type="text" name="grade4" placeholder="Enter Grade"  value="<?php echo $gra4;?>">
<input type="text" name="credit4" placeholder="Enter Credit"  value="<?php echo $cre4;?>"><br>

CHE351
<input type="text" name="grade5" placeholder="Enter Grade"  value="<?php echo $gra5;?>">
<input type="text" name="credit5" placeholder="Enter Credit"  value="<?php echo $cre5;?>"><br>

CHE361
<input type="text" name="grade6" placeholder="Enter Grade"  value="<?php echo $gra6;?>">
<input type="text" name="credit6" placeholder="Enter Credit"  value="<?php echo $cre6;?>"><br>


EMA381
<input type="text" name="grade7" placeholder="Enter Grade"  value="<?php echo $gra7;?>">
<input type="text" name="credit7" placeholder="Enter Credit"  value="<?php echo $cre7;?>"><br>

CHE301
<input type="text" name="grade8" placeholder="Enter Grade"  value="<?php echo $gra8;?>">
<input type="text" name="credit8" placeholder="Enter Credit"  value="<?php echo $cre8;?>"><br>

</div>

<div>

<h2>SECOND SEMESTER</h2>

CHE302
<input type="text" name="grade9" placeholder="Enter Grade"  value="<?php echo $gra9;?>">
<input type="text" name="credit9" placeholder="Enter Credit"  value="<?php echo $cre9;?>"><br>

CHE312
<input type="text" name="grade10" placeholder="Enter Grade"  value="<?php echo $gra10;?>">
<input type="text" name="credit10" placeholder="Enter Credit"  value="<?php echo $cre10;?>"><br>

CHE322
<input type="text" name="grade11" placeholder="Enter Grade"  value="<?php echo $gra11;?>">
<input type="text" name="credit11" placeholder="Enter Credit"  value="<?php echo $cre11;?>"><br>

CHE332
<input type="text" name="grade12" placeholder="Enter Grade"  value="<?php echo $gra12;?>">
<input type="text" name="credit12" placeholder="Enter Credit"  value="<?php echo $cre12;?>"><br>

CHE352
<input type="text" name="grade13" placeholder="Enter Grade"  value="<?php echo $gra13;?>">
<input type="text" name="credit13" placeholder="Enter Credit"  value="<?php echo $cre13;?>"><br>

CHE362
<input type="text" name="grade14" placeholder="Enter Grade"  value="<?php echo $gra14;?>">
<input type="text" name="credit14" placeholder="Enter Credit"  value="<?php echo $cre14;?>"><br>

CHE372
<input type="text" name="grade15" placeholder="Enter Grade"  value="<?php echo $gra15;?>">
<input type="text" name="credit15" placeholder="Enter Credit"  value="<?php echo $cre15;?>"><br>

EMA382
<input type="text" name="grade16" placeholder="Enter Grade"  value="<?php echo $gra16;?>">
<input type="text" name="credit16" placeholder="Enter Credit"  value="<?php echo $cre16;?>"><br>
<p><input type="submit"</p>
</div>

</div>
</form>

<?php

$gra1=$_GET['grade1']; 
$gra2=$_GET['grade2'];
$gra3=$_GET['grade3'];
$gra4=$_GET['grade4'];
$gra5=$_GET['grade5'];
$gra6=$_GET['grade6'];
$gra7=$_GET['grade7'];
$gra8=$_GET['grade8'];
$gra9=$_GET['grade9'];
$gra10=$_GET['grade10'];
$gra11=$_GET['grade11'];
$gra12=$_GET['grade12'];
$gra13=$_GET['grade13'];
$gra14=$_GET['grade14'];
$gra15=$_GET['grade15'];
$gra16=$_GET['grade16'];

$cre1=$_GET['credit1'];
$cre2=$_GET['credit2'];
$cre3=$_GET['credit3'];
$cre4=$_GET['credit4'];
$cre5=$_GET['credit5'];
$cre6=$_GET['credit6'];
$cre7=$_GET['credit7'];
$cre8=$_GET['credit8'];
$cre9=$_GET['credit9'];
$cre10=$_GET['credit10'];
$cre11=$_GET['credit12'];
$cre12=$_GET['credit13'];
$cre13=$_GET['credit13'];
$cre14=$_GET['credit14'];
$cre15=$_GET['credit15'];
$cre16=$_GET['credit16'];

//first semester

if($gra1=='A'||$gra1=='a'){
	$gra1=5;
}

elseif($gra1=='B'||$gra1=='b'){
	$gra1=4;
}

elseif($gra1=='C'||$gra1=='c'){
	$gra1=3;
}

elseif($gra1=='D'||$gra1=='d'){
	$gra1=2;
}

else{ $gra1=0;
}


if($gra2=='A'||$gra2=='a'){
	$gra2=5;
}

elseif($gra2=='B'||$gra2=='b'){
	$gra2=4;
}

elseif($gra2=='C'||$gra2=='c'){
	$gra2=3;
}

elseif($gra2=='D'||$gra2=='d'){
	$gra2=2;
}

else{ $gra2=0;
}

if($gra3=='A'||$gra3=='a'){
	$gra3=5;
}

elseif($gra3=='B'||$gra3=='b'){
	$gra3=4;
}

elseif($gra3=='C'||$gra3=='c'){
	$gra3=3;
}

elseif($gra3=='D'||$gra3='d'){
	$gra3=2;
}

else{ $gra3=0;
}



if($gra4=='A'||$gra4=='a'){
	$gra4=5;
}

elseif($gra4=='B'||$gra4=='b'){
	$gra4=4;
}

elseif($gra4=='C'||$gra4=='c'){
	$gra4=3;
}

elseif($gra4=='D'||$gra4=='d'){
	$gra4=2;
}

else{ $gra4=0;
}

if($gra5=='A'||$gra5=='a'){
	$gra5=5;
}

elseif($gra5=='B'||$gra5=='b'){
	$gra5=4;
}

elseif($gra5=='C'||$gra5=='c'){
	$gra5=3;
}

elseif($gra5=='D'||$gra5=='d'){
	$gra5=2;
}
else{ $gra5=0;
}

if($gra6=='A'|| $gra6=='a'){
	$gra6=5;
}

elseif($gra6=='B'||$gra6=='b'){
	$gra6=4;
}

elseif($gra6=='C'||$gra6=='c'){
	$gra6=3;
}

elseif($gra6=='D'||$gra6=='d'){
	$gra6=2;
}

else{ $gra6=0;
}

if($gra7=='A'||$gra7=='a'){
	$gra7=5;
}

elseif($gra7=='B'|| $gra7=='b'){
	$gra7=4;
}

elseif($gra7=='C' || $gra7=='c'){
	$gra7=3;
}

elseif($gra7=='D'|| $gra7=='d'){
	$gra7=2;
}

else{ $gra7=0;
}


if($gra8=='A'||$gra8=='a'){
	$gra8=5;
}

elseif($gra8=='B'|| $gra8=='b'){
	$gra8=4;
}

elseif($gra8=='C' || $gra8=='c'){
	$gra8=3;
}

elseif($gra8=='D'|| $gra8=='d'){
	$gra8=2;
}

else{ $gra8=0;
}


//second semester

if($gra9=='A'|| $gra9=='a'){
	$gra9=5;
}

elseif($gra9=='B'||$gra9=='b'){
	$gra9=4;
}

elseif($gra9=='C'||$gra9=='c'){
	$gra9=3;
}

elseif($gra9=='D'|| $gra9=='d'){
	$gra9=2;
}

else{ $gra9=0;
}

if($gra10=='A'|| $gra10=='a'){
	$gra10=5;
}

elseif($gra10=='B'|| $gra=='b'){
	$gra10=4;
}

elseif($gra10=='C'|| $gra10=='c'){
	$gra10=3;
}

elseif($gra10=='D'||$gra10=='b'){
	$gra10=2;
}

else{ $gra10=0;
}


if($gra11=='A'|| $gra11=='a'){
	$gra11=5;
}

elseif($gra11=='B'|| $gra11=='b'){
	$gra11=4;
}

elseif($gra11=='C'|| $gra11=='c'){
	$gra11=3;
}

elseif($gra11=='D'|| $gra11=='d'){
	$gra11=2;
}

else{ $gra11=='0';
}

if($gra12=='A'|| $gra12=='a'){
	$gra12=5;
}

elseif($gra12=='B'|| $gra12='b'){
	$gra12=4;
}

elseif($gra12=='C'||$gra=='c'){
	$gra12=3;
}

elseif($gra12=='D'||$gra12=='d'){
	$gra12=2;
}

else{ $gra12=0;
}

if($gra13=='A' || $gra13=='a'){
	$gra13=5;
}

elseif($gra13=='B'|| $gra13=='b'){
	$gra13=4;
}

elseif($gra13=='C' || $gra13=='c'){
	$gra13=3;
}

elseif($gra13=='D'|| $gra13=='d'){
	$gra13=2;
}

else{ $gra13=0;
}

if($gra14=='A'|| $gra14=='a'){
	$gra14=5;
}


elseif($gra14=='B' || $gra14=='b'){
	$gra14=4;
}

elseif($gra14=='C' || $gra14=='c'){
	$gra14=3;
}


elseif($gra14=='D' ||$gra14=='d'){
	$gra14=2;
}


else{ $gra14=0;
}

if($gra15=='A' || $gra15=='a' ){
	$gra15=5;
}

elseif($gra15=='B' || $gra15=='b'){
	$gra15=4;
}

elseif($gra15=='C' || $gra15=='c'){
	$gra15=3;
}
elseif($gra15=='D' || $gra15=='d'){
	$gra15=2;
}
else{ $gra15=0;
}

if($gra16=='A' || $gra16=='a'){
	$gra16=5;
}
elseif($gra16=='B' || $gra16=='b'){
	$gra16=4;
}

elseif($gra16=='C' || $gra16=='c'){
	$gra16=3;
}
elseif($gra16=='D' || $gra16=='d'){
	$gra16=2;
}
else{ $gra16=0;
}
$gpa = (($gra1*$cre1) + ($gra2*$cre2) + ($gra3*$cre3) +($gra4*$cre4) + ($gra5*$cre5) +($gra6*$cre6)+($gra7*$cre7)+($gra8*$cre8)+($gra9*$cre9)+($gra10*$cre10)+($gra11*$cre11)+($gra12*$cre12)+($gra13*$cre13)+($gra14*$cre14)+($gra15*$cre15)+($gra16*$cre16))/($cre1+$cre2+$cre3+$cre4+$cre5+$cre6+$cre7+$cre8+$cre9+$cre10+$cre11+$cre12+$cre13+$cre14+$cre15+$cre16);

echo "<h3><b>Your grade point average is $gpa</b></h3" ;


?>

</body>
</html>