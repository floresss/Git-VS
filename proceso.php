<?php
	$dato1=$_POST['n1'];
	$dato2=$_POST['n2'];
	$op=$_POST['operacion'];


	if($op==1)
	{
		echo "El resultado es: ".($dato1+$dato2);
	}
	if($op==2)
	{
		echo "El resultado es: ".($dato1-$dato2);
	}
	if($op==3)
	{
		echo "El resultado es: ".($dato1*$dato2);
	}
	if($op==4)
	{
		echo "El resultado es: ".($dato1/$dato2);
	}
?>