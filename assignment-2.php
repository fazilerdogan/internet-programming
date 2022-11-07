<html>

<head>
<meta charset="utf-8">
<title>Başvuru Formu</title>

</head>

<body>

<?php 
$cerez = "Hoşgeldiniz";
setcookie("deneme",$cerez,time()+3600);
echo '<a href="cerez.php">Çerezleri Oku</a>';
?>




<table border="1" CELLPADDING=10>
<tr>
<td align="left">
Ad:<br/>
<input type="text" name="ad" /><br/>
</td>
</tr>

<tr>
<td align="left">
Soyad:<br/>
<input type="text" name="soyad"/><br/>
</td>
</tr>

<tr>
<td align="left">
E-mail/Tel No:<br/>
<input type="mail" name="mail"/><br/>
</td>
</tr>

<tr>
<td align="left">
Adres:<br/>
<textarea name="adres"></textarea><br/>
<br/>
</td>
</tr>

<tr>
<td align="left">
Çalışmak İstediğiniz Alan:<br/>
<input type ="checkbox" name="erkek"/>Php<input type ="checkbox" name="erkek"/>Html<input type ="checkbox" name="erkek"/>Sql<br/>
</td>
</tr>



<tr>
<td align="left">
Bilgisayar Bilgisi:<br/>
<input type="radio" name="bb" value="1" /> Çok İyi<br/>
<input type="radio" name="bb" value="2" /> İyi<br/>
<input type="radio" name="bb" value="3" /> Orta<br/>
<input type="radio" name="bb" value="4" /> Az<br/>
</td>
</tr>

<tr>
<td align="left">
Eklemek İstedikleriniz:<br/>
<textarea name="adres"></textarea><br/>
</td>
</tr>




<tr>
<td align="center">
<input type="button" name="Gönder" value="Gönder" />
</td>
</tr>

</table>

</body>

</html>