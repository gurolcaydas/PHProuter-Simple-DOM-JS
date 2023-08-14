<html lang="">
    <body>
        <h2> Simple Router for PHP </h2>
        <h4> Örnek linkler </h4>
        <a href="/tek"> /tek </a><br>
        <a href="/tek?falan=1"> /tek?falan=1 </a><br>
        <a href="/cok"> /cok </a><br>
        <a href="/cok/bilgi"> /cok/bilgi </a><br>
        <a href="/cok/777"> /cok/777 </a><br> 
        <a href="/cok/777?falan=3"> /cok/777?falan=3 </a><br> 
        <a href="/olmayanlink"> /olmayanlink </a><br> 
        
        <?php
        if (isset($_GET['url'])) {
            $urlSatiri = $_GET['url'];  // URL'yi kap.
            $veri = explode('/', $urlSatiri);  // URL'yi patlat.
            $ilkkelime = $veri[0]; // URL'deki $veri[0] ilk kelime, $veri[1] ikinci kelime vs...
            if (isset($_GET['falan'])) {  // URL'de ?falan=x  var mı?
                $falan = $_GET['falan'];
                    ?>
                    <!-- JS gerek yoksa silinebilir - baş -->
                    <script>
                        console.log ("falan:<?=$falan?>");
                    </script>
                    <!-- JS gerek yoksa silinebilir - son -->
                     <?php
            }
            // URL'deki ilk kelimeye göre switch
            switch ($ilkkelime) {
                case "tek":  // URL: /tek
                    // gerekli kodları dışardan ekleyelim.
                    include('tek.php');?>
                    <!-- JS gerek yoksa silinebilir - baş -->
                    <script> 
                        console.log ("tek");
                    </script>
                    <!-- JS gerek yoksa silinebilir - son -->
                    <?php
                    break;
                case "cok": // URL: /cok
                    if (isset($veri[1])) {    // URL: /cok/bilgi
                        $bilgi = $veri[1];  ?>
                        <!-- JS gerek yoksa silinebilir - baş -->
                        <script> 
                            console.log ("cok (if)");
                            console.log ("bilgi:<?=$bilgi?>");
                        </script>
                        <!-- JS gerek yoksa silinebilir - son -->
                        <?php
                    } else { // URL: /cok
                        ?>
                        <!-- JS gerek yoksa silinebilir - baş -->
                        <script>
                            console.log ("cok (else)");
                        </script>
                        <!-- JS gerek yoksa silinebilir - son -->
                        <?php
                        }
                    // Gerekli kodları dışardan ekleyelim..
                    include ('cok.php');
                    break;
                default:  // Bulunamadı
                    include('404.php');
                    break;
            }
        }     
        ?>
    </body>
</html>