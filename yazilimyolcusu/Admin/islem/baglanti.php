<?php






try {
	$baglanti= new PDO("mysql:host=localhost; dbname=eticaret",   'root', ''     );
	#echo "bağlantı başarılı";
} catch (Exception $e) {
	
	echo $e->getMessage();
}











