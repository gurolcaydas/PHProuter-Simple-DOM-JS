
<h3>Çok sayfa</h3>
<?php

if (isset($bilgi)) { // direk PHP değişkenleri ile index.php den bilgi gelebilir.
    echo ("Url'den gelen bilgi: ".$bilgi);
} else {
    echo "bilgi yok.";
}
echo ("<br>");
if (isset($falan)) { // direk PHP değişkenleri ile index.php den bilgi gelebilir.
    echo ("falan: ".$falan);
} else {
    echo "falan yok.";
}
?>