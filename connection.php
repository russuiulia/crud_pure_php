<?php
 $hostname="localhost";
 $username="root";
 $password="";
//  $database="";
 $connection=mysqli_connect($hostname, $username, $password) or die ("Nu mă pot conecta la baza de date");
 mysqli_select_db($connection, "examenexemplu") or die ("Nu găsesc baza de date");
 ?>