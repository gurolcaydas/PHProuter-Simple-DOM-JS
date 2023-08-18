<html lang="">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"   integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="   crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/DOM.js"></script>
    <script src="https://kit.fontawesome.com/cf469ca1da.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container m-4 p-2 boder-1">


            <h2> Simple Router for PHP </h2>
            <h4> Örnek linkler </h4>
            <div class="row">
           
            <a href="/tek"><i class="fas fa-arrow-right me-3"></i>/tek </a><br>
            <a href="/tek?falan=1"><i class="fas fa-arrow-right me-3"></i>/tek?falan=1 </a><br>
            <a href="/cok"><i class="fas fa-arrow-right me-3"></i>/cok </a><br>
            <a href="/cok/bilgi"><i class="fas fa-arrow-right me-3"></i>/cok/bilgi </a><br>
            <a href="/cok/777"><i class="fas fa-arrow-right me-3"></i>/cok/777 </a><br> 
            <a href="/cok/777?falan=3"><i class="fas fa-arrow-right me-3"></i>/cok/777?falan=3 </a><br> 
            <a href="/olmayanlink"><i class="fas fa-arrow-right me-3"></i>/olmayanlink </a><br> 
            </div>
            
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
                        exit;
                }
            }     
            ?>
        </div>
        <div class="container m-4 p-2 border-1">
            <h3>JS DOM</h3> 
            <div class="row ">

            <div class="col bg-dark bg-opacity-25 border border-3 rounded p-2 m-2" id="leftDivMenu">
                    <a href="javascript:void(0)" onclick="leftDiv()">fetch leftDiv.php</a> 
                </div>
                <div class="col bg-dark bg-opacity-25 border border-3 rounded p-2 m-2" id="rightDivMenu">
                    <a href="javascript:void(0)" onclick="rightDiv()">fetch rightDiv.php</a>
                </div>
            </div>
            <div class=" row">
                <div class="col border border-3 rounded p-2 m-2" id="leftDiv">1</div>
                <div class="col border border-3 rounded p-2 m-2" id="rightDiv">2</div>
            </div>
        </div>
        </div>
    </body>
</html>