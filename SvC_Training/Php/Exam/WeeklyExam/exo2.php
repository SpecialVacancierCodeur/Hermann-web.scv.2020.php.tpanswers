<?php 
//affichage de 1 à 10
$j = 1;
while($i <= 10){
	echo $i, " ";
    $i ++;
}
echo "<br>";
for ($i = 1; $i<=10; $i++){
	echo $i, " ";
}

//affichage de 1 à n
echo "<br>", "<br>" ;
function compter($n){
	for ($i = 1; $i<=$n; $i++){
		echo $i, " ";
	}
}
compter(20);

?>