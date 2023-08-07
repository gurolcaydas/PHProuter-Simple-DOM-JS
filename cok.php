
<h3>Çok sayfa</h3>
<?php
if (isset($bilgi)) { // direk PHP değişkenleri ile index.php den bilgi gelebilir.
    echo ("Url'den gelen bilgi: ".$bilgi);
} else {
    echo "Bilgi yok.";
}
?>