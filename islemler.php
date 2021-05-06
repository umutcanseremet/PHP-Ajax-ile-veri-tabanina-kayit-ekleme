<?php
$db=new PDO("mysql:host=localhost;dbname=deneme","root","");
if (isset($_POST['k'])){
        if (empty($_POST['ad'])){
            $mesaj['verilecek_mesaj']="Ad Boş Olamaz";
    }elseif (empty($_POST['soyad'])){
            $mesaj['verilecek_mesaj']="Soyad Boş Olamaz";
        }else{
            $kayit=$db->exec("INSERT INTO deneme SET 
    uye_ad='".$_POST['ad']."',
    uye_soyad='".$_POST['soyad']."'
    ");
            $mesaj['verilecek_mesaj']="Kayıt Oldunuz";
        }
        echo json_encode($mesaj);
}
?>