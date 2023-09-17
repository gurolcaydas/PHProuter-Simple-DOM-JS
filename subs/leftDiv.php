<?php
$x = rand();
echo "Random: ".$x;

echo ("<hr>");
$iller = ['ADANA', 'ADIYAMAN', 'AFYON', 'AĞRI', 'AMASYA', 'ANKARA', 'ANTALYA', 'ARTVİN', 'AYDIN', 
'BALIKESİR', 'BİLECİK', 'BİNGÖL', 'BİTLİS', 'BOLU', 'BURDUR', 'BURSA', 'ÇANAKKALE', 'ÇANKIRI', 
'ÇORUM', 'DENİZLİ', 'DİYARBAKIR', 'EDİRNE', 'ELÂZIĞ', 'ERZİNCAN', 'ERZURUM', 'ESKİŞEHİR', 'GAZİANTEP', 
'GİRESUN', 'GÜMÜŞHANE', 'HAKKÂRİ', 'HATAY', 'ISPARTA', 'MERSİN', 'İSTANBUL', 'İZMİR', 'KARS', 'KASTAMONU', 
'KAYSERİ', 'KIRKLARELİ', 'KIRŞEHİR', 'KOCAELİ', 'KONYA', 'KÜTAHYA', 'MALATYA', 'MANİSA', 'KAHRAMANMARAŞ', 
'MARDİN', 'MUĞLA', 'MUŞ', 'NEVŞEHİR', 'NİĞDE', 'ORDU', 'RIZE', 'SAKARYA', 'SAMSUN', 'SİİRT', 'SİNOP', 
'SİVAS', 'TEKIRDAĞ', 'TOKAT', 'TRABZON', 'TUNCELİ', 'ŞANLIURFA', 'UŞAK', 'VAN', 'YOZGAT', 'ZONGULDAK', 
'AKSARAY', 'BAYBURT', 'KARAMAN', 'KIRIKKALE', 'BATMAN', 'ŞIRNAK', 'BARTIN', 'ARDAHAN', 'IĞDIR', 'YALOVA', 
'KARABÜK', 'KİLİS', 'OSMANİYE', 'DÜZCE'];

$harfler = ['A', 'B', 'C', 'Ç', 'D', 'E', 'F', 'G', 'Ğ', 'H', 'İ', 'I', 'J', 'K', 'L', 'M', 
    'N', 'O', 'Ö', 'P', 'R', 'S', 'Ş', 'T', 'U', 'Ü', 'V', 'Y', 'Z']; 
// $harfler = [ 'G', 'H', 'Ş', 'V'];     
$harfsay = array_fill_keys($harfler, 0); 
foreach ($iller as $il) { 
    $il = mb_strtoupper($il, 'UTF-8'); 
    for ($i = 0; $i < mb_strlen($il, 'UTF-8'); $i++) {
        $harf = mb_substr($il, $i, 1, 'UTF-8'); 
        if (in_array($harf, $harfler)) {
            $harfsay[$harf]++;
        }
    }
}

arsort($harfsay); 
foreach ($harfsay as $buharf => $kactane) {
    echo "$buharf: $kactane\n";
}
echo ("<hr>");

?>