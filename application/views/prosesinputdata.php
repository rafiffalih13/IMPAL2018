<?php 
if(isset($_POST['username']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$namatoko = $_POST['namatoko'];
echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
echo "username : ".$username."<br/>password : ".$password."nama : ".$nama."<br/>Alamat : ".$alamat."nohp : ".$nohp."<br/>namatoko : ".$namatoko.;
}
//--------------------------------------------------------------------
if(isset($_GET['username']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$namatoko = $_POST['namatoko'];
echo "<span class='success'>Dengan <b>METODE GET</b></span><br/>";
echo "username : ".$username."<br/>password : ".$password."nama : ".$nama."<br/>Alamat : ".$alamat."nohp : ".$nohp."<br/>namatoko : ".$namatoko.;
}
?>