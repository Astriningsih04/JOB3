<html><head><title>Statement IF</title></head>
<body>
<?php echo"<form action=\"$php_selt\" method=\"post\">";
$nilai1=$_POST['nilai'];
echo"Berapa Nilai PHPmu? :
<input name=\"nilai\" value=\"$nilai1\" size=\"3\" type=\"text\" value=\
<input name=\"cek\" type=\"submit\" value=\"Cek\"> </form>";
if($_POST['cek']) //perintah untuk menguji penekanan tombol Cek
{ echo"<br><h1>";
	if($nilai1=="")
		{ echo"Anda Belum menentukan Nilai..!";}
	elseif(!is_numeric($nilai)) //jika nilai1 tidak bertype numerik
		{ echo" Ini Bukan Nilai Angka"; }
	else
		{
			if($nilai1<=30)		// statement pertama
				{ echo"Anda mendapat nilai huruf <b> E  </br>"; }
			elseif($nilai1<=50)// statement kedua
				{ echo"Anda mendapat nilai huruf <b> D </br>"; }
			elseif($nilai1<=70)// statement ketiga
				{ echo"Anda mendapat niai huruf <b> C </br> "; }
			elseif($nilai1<=85)// statement keempat
				{ echo"Anda mendapat nilai huruf <b> AB </br>"; }
			else	//statement kelima
				{ echo"Anda mendapat nilai huruf <br> A </br>"; }
		}
	echo"</h1>";
}
?>
</body>
</html>