<?php
session_start();

$_SESSION['duration'] =3
;

$_SESSION['start_time'] = date("Y-m-d H:i:s");

 $end_time = date('Y-m-d H:i:s',strtotime('+'.$_SESSION["duration"].'minutes',strtotime($_SESSION["start_time"])));
$_SESSION['end_time'] = $end_time;
?>
<script>
    window.location = "main.php";
</script>