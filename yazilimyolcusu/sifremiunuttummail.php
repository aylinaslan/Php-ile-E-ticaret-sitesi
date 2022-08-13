<?php 

require_once 'Admin/islem/baglanti.php';

if (isset($_POST['sifremiunuttum'])) {


$kadi=$_POST['kadi'];


 $kullanicisor=$baglanti->prepare("SELECT * from kullanici where kullanici_adi=:kullanici_adi  and kullanici_yetki=:kullanici_yetki ");
 $kullanicisor->execute(array(
'kullanici_adi'=>$kadi,
'kullanici_yetki'=>1
 ));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
$var=$kullanicisor->rowCount();

$id=$kullanicicek['kullanici_id'];
$email=$kullanicicek['kullanici_mail'];
if ($var=="0") {
	echo "Kullanıcıyı bulamadım";
}
else{
	
#şifre oluştur +
	#md5 leme
	#veritabanına aktarma
	# mail at 

$sifreolustur=rand(100,90800000);
$sifreharf="aou";
$sifreharf2="mhg";
$yenisifre=$sifreharf.$sifreolustur.$sifreharf2;

$md5sifre=md5($yenisifre);

#veritabanı yükleme işlemleri





	$sifreunuttum=$baglanti->prepare("UPDATE kullanici SET 



		kullanici_sifre=:kullanici_sifre
		

		WHERE kullanici_id=$id

		");


	$update=$sifreunuttum->execute(array(

		'kullanici_sifre'=>$md5sifre


	));





if ($update) {

	require_once("phpmailer/class.phpmailer.php");

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = "smtp.hostinger.web.tr";
	$mail->SMTPAuth = true;
	$mail->Username = "test@yazilimyolcusu.com";
	$mail->Password = "123456";
	$mail->From = "test@yazilimyolcusu.com";
	$mail->Fromname = "Yazılım yolcusu";
	$mail->AddAddress("$email","Mail gönderimi");
	$mail->AddReplyTo("$email", 'Reply to name');
	$mail->Subject = "Şifre unuttum talebi";
	$mail->Body = "Merhaba sisteme geçici olarak aşağıdaki şifre ile giriş yapabilirsiniz.$yenisifre.";
	$mail->CharSet='UTF-8';




if($mail->Send())
	{

echo "şifreniz mail adresinize iletilmiştir. Geçici olarak bu şifre ile sisteme giriş yapabilirsiniz.";
}


}
}
else{
	echo "şifre değişemedi";
}


}













 ?>