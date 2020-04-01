@extends('masterlayout')
@section('content')
<?php
$a = $_GET['txtname'];
echo $a."<br> <br>";
$b = $_GET['txtsdt'];
echo $b."<br><br>";
$b = $_GET['txtdiachi'];
echo $b;
?>
@endsection