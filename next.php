<?php
  $f=$_POST['f'];
  $l=$_POST['l'];
  $e=$_POST['e'];
  $add=$_POST['add'];
  $m=$_POST['m'];
  $g=$_POST['g'];
  $db=$_POST['db'];

if(isset($_POST['submit']))
  {
    echo "Registration successfull";

    echo "Name: ".$f." ".$l."<br>";
    echo "Email: ".$e."<br>";
    echo "Address: ".$add."<br>";
    echo "Ph:".$m."<br>";
    echo "Gender: ".$g."<br>";
    echo "Date of birth: ".$db."<br>";
 }
?>
