<h3>Tek sayfa</h3>

Öyle bomboş bir sayfa.<br>
<?php
if (isset($falan)) { // direk PHP değişkenleri ile index.php den bilgi gelebilir.
    echo ("falan: ".$falan);
} else {
    echo "falan yok.";
}
?>