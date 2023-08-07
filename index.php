<html>
    <body>
        <h2> Simple Router for PHP </h2>
        <h4> Örnek linkler </h4>
        <a href="/tek"> /tek </a><br>
        <a href="/cok"> /cok </a><br>
        <a href="/cok/bilgi"> /cok/bilgi </a><br>
        <a href="/cok/777"> /cok/777 </a><br> 
        
        <?php
        if (isset($_GET['url'])) {
            $urlSatiri = $_GET['url'];  // URL'yi kap.
            $veri = explode('/', $urlSatiri);  // URL'yi patlat.
            $ilkkelime = $veri[0]; // URL'deki $veri[0] ilk kelime, $veri[1] ikinci kelime vs...

            // URL'deki ilk kelimeye göre switch
            switch ($ilkkelime) {
                case "tek":  // URL: /tek

                    // gerekli kodları dışardan ekleyelim.
                    include('tek.php');
                    break;


                case "cok": // URL: /cok
                    if (isset($veri[1])) {    // URL: /cok/bilgi
                        $bilgi = $veri[1];  ?> 

                        <!-- JS gerek yoksa silinebilir - baş -->
                        <script> 
                            console.log ("ihtiyaç varsa JS fonksiyonu kullanılabilir (if)"); 
                            console.log ("url'den gelen id:<?=$bilgi?>");
                        </script>
                        <!-- JS gerek yoksa silinebilir - son -->

                        <?php 

                        // gerekli kodları dışardan ekleyelim.
                        include ('cok.php');
                    } else { // URL: /cok
                        ?> 

                        <!-- JS gerek yoksa silinebilir - baş -->
                        <script>
                            console.log ("ihtiyaç varsa JS fonksiyonu kullanılabilir (else)");
                        </script>
                        <!-- JS gerek yoksa silinebilir - son -->
                        <?php 

                        // Gerekli kodları dışardan ekleyelim..
                        include ('cok.php');
                        }
                    break;
                default:

                    include('404.php');
                    break;
            }
        }     
        ?>
    </body>
</html>