<?php


//Activitat 1
echo "Activitat 1. Dies del mes<br><br>";

$mes=2;

switch($mes){
    case 1:
    case 3:
    case 5:
    case 6:
    case 8:
    case 10:
    case 12:
        echo "Té 31 dies";
        break;
    case 4: case 7: case 9: case 11:
        echo "Té 30 dies";
        break;
    case 2:
        echo "Febrer té 29 dies";
        break;
    default:
        echo "No es un valor correcte!";
        break;
}

//Activitat 2
echo "<br><br>Activitat 2. Estacio<br><br>";

switch($mes){
    case 1: case 2: case 3: case 12:
        echo "<br>Hivern";
        break;
    case 4: case 5: case 6:
        echo "<br>Primavera";
        break;
    case 7: case 8: case 9:
        echo "<br>Estiu";
        break;
    case 10: case 11:
        echo "<br>Tardor";
        break;
    default:
        echo "No es un valor correcte!";
        break;
}

//Activitat 3
echo "<br><br>Activitat 3. Multiples de 3 i 5?<br><br>";

$num=125;


if($num%3==0){
    echo "<br><br>$num es multiple de 3";
    if($num%5==0){
        echo " i de 5.";
    }
}elseif($num%5==0){
    echo "<br><br>$num es multiple de 5";
}else{
    echo "<br><br>$num no es multiple de 3, ni de 5";
}

//Activitat 4
echo "<br><br>Activitat 4. El major dels 3<br><br>";

$num1=35;
$num2=29;
$num3=98;
$major;

if($num1>$num2){
    $major=$num1;
}else{
    $major=$num2;
}
if($major>$num3){
    echo "<br><br>El major es $major";
}else{
    $major=$num3;
    echo "<br><br>El major es $major";
}

//Activitat 5
echo "<br><br>Activitat 5. Suma n primers<br><br>";

$nprim=5;
$suma=0;
$i=0;

while($i<=$nprim){
    $suma=$suma+$i;
    $i++;
}
echo "La suma dels n primers nombres es $suma";


?>