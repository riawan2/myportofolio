<?php 
$host="localhost";
$user="root";
$pass="";
$database="db_spp";
$mysqli=new mysqli($host,$user,$pass,$database);
if(mysqli_connect_errno())
{
trigger_error('koneksi ke database gagal:'.mysqli_connect_error(),
E_USER_ERROR);
}
