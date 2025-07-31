<!doctype html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Vertical Menu</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <style>
    body {
      background-color: #dae6ec;
    }

    .rapor-kutu {
      animation: yanipSonme 1s infinite;
      background-color: #b30000;
      color: white;
      text-align: center;
      font-weight: bold;
      font-size: 0.8rem;
    }

    @keyframes yanipSonme {
      0% {
        background-color: #ff4d4d;
      }

      50% {
        background-color: #b30000;
      }

      100% {
        background-color: #ff4d4d;
      }
    }
  </style>
</head>

<body>
  <?php
  $days = [
    [
      "id" => 1,
      "day" => "Pazatesi",
      "weather" => "Kuvvetli Gök Gürültülü Sağanak Yağışlı",
      "min-degrees" => 22,
      "max" => 36,
      "images" => [
        "assets/images/havadurumu-icon/gok-gurultulu.png"
      ]
    ],
    [
      "id" => 2,
      "day" => "Salı",
      "weather" => "Parçalı Bulutlu",
      "min-degrees" => 22,
      "max" => 36,
      "images" => [
        "assets/images/havadurumu-icon/parcalı-bulutlu.png"
      ]
    ],

    [
      "id" => 3,
      "day" => "Çarşamba",
      "weather" => "Parçalı Bulutlu",
      "min-degrees" => 22,
      "max" => 36,
      "images" => [
        "assets/images/havadurumu-icon/parcalı-bulutlu.png"
      ]
    ],
    [
      "id" => 4,
      "day" => "Perşembe",
      "weather" => "Kuvvetli Gök Gürültülü Sağanak Yağışlı",
      "min-degrees" => 22,
      "max" => 36,
      "images" => [
        "assets/images/havadurumu-icon/gok-gurultulu.png"
      ]
    ],
    [
      "id" => 5,
      "day" => "Cuma",
      "weather" => "Parçalı Bulutlu",
      "min-degrees" => 22,
      "max" => 36,
      "images" => [
        "assets/images/havadurumu-icon/parcalı-bulutlu.png"
      ]
    ]
  ];
  ?>

  <!-- ÜST NAV -->
  <nav class="navbar">
    <div class="container-fluid d-flex justify-content-end">
      <ul class="nav">
        <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
        <li class="nav-item"><a class="nav-link disabled" aria-disabled="true">Disabled</a></li>
      </ul>
    </div>
  </nav>

  <!-- LOGOLAR + MENÜ -->
  <section class="container" style="background-color:white; min-width:100%">
    <nav class="navbar">
      <div class="container d-block text-center">
        <div class="row align-items-center">
          <div class="col-2 p-2" style="border-right:1px solid #e8eff3;">
            <a href="https://www.csb.gov.tr" style="text-decoration: none;"><img src="assets/csblogo-final.svg" alt="Logo" width="120" height="65" class="d-inline-block align-text-top"></a>
          </div>
          <div class="col-2 p-2">
            <a href="https://www.mgm.gov.tr" style="text-decoration: none;"><img src="assets/mgmlogo-final.svg" alt="Logo" width="120" height="65" class="d-inline-block align-text-top"></a>
          </div>
          <div class="col-8 d-flex justify-content-end gap-4">
            <a href="https://www.mgm.gov.tr/kurumsal/birimler.aspx" style="text-decoration: none;"><div><i class="bi bi-file-earmark-text" style="font-size: 1rem; "></i><br><small>Kurumsal</small></div></a>
            <a href="https://www.mgm.gov.tr/tahmin/gunluk-tahmin.aspx" style="text-decoration: none;"><div><i class="bi bi-graph-up" style="font-size: 1rem;"></i><br><small>Tahminler</small></div></a>
            <a href="https://www.mgm.gov.tr/sondurum/turkiye.aspx" style="text-decoration: none;"><div><i class="bi bi-geo-alt" style="font-size: 1rem;"></i><br><small>Son Durumlar</small></div></a>
            <a href="https://hezarfen.mgm.gov.tr" style="text-decoration: none;"><div><i class="bi bi-airplane" style="font-size: 1rem;"></i><br><small>Havacılık</small></div></a>
            <a href="https://pirireis.mgm.gov.tr/tahmin-raporlari/ucgunluk-tahmin" style="text-decoration: none;"><div><i class="bi bi-umbrella" style="font-size: 1rem;"></i><br><small>Denizcilik</small></div></a>
            <a href="https://www.mgm.gov.tr/tarim/zirai-don-uyari-sistemi-harita.aspx" style="text-decoration: none;"><div><i class="bi bi-flower2" style="font-size: 1rem;"></i><br><small>Ziraat</small></div></a>
            <a href="https://www.mgm.gov.tr/veridegerlendirme/sicaklik-analizi.aspx" style="text-decoration: none;"><div><i class="bi bi-search" style="font-size: 1rem;"></i><br><small>Analizler</small></div></a>
            <a href="https://www.mgm.gov.tr/site/iletisim.aspx" style="text-decoration: none;"><div><i class="bi bi-envelope" style="font-size: 1rem;"></i><br><small>İletişim</small></div></a>
          </div>
        </div>
      </div>
    </nav>
  </section>

  <!-- ANA İÇERİK -->
  <section class="container">
    <div class="row pt-3">

      <!-- SOL BÖLÜM -->
      <div class="col-9">
        <nav class="navbar d-block mb-3">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </nav>

        <div class="row">

          <div class="col-12">
            <div class="" style="background-color: #dae6ec;">

              <div class="" style="background-color: #dae6ec;">
                <?php
                echo date("d.m.Y"); // 31.07.2025
                echo "<br>";
                echo date("l");
                echo "<br>";
                echo date("H:i:s"); // 17:42:08

                // Thursday (günün İngilizce adı)
                ?>
              </div>
            </div>
          </div>

          <div class="col-12 pt-4">
            <img src="assets/images/havadurumu-icon/hava-durumu-grafik.PNG" class="d-block w-100" alt="...">

            <!-- KARTLAR -->
            <div class="row mt-3">
              <?php foreach ($days as $day): ?>
                <div class="ms-0 me-auto col-sm mb-3">
                  <div class="card">
                    <h5 class="m-auto  card-title"><?= $day['day']; ?></h5>
                    <hr>
                    <img src="<?= $day['images'][0]; ?>" class="card-img-top" alt="hava">
                    <div class="card-body">
                      <p class="card-text"><?= $day['weather']; ?></p>
                      <p class="card-text">
                        <strong>Min:</strong> <?= $day['min-degrees']; ?>°C<br>
                        <strong>Max:</strong> <?= $day['max']; ?>°C
                      </p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>




          </div>
        </div>
      </div>


      <!-- SAĞ BÖLÜM -->
      <div class="col-3">
        <div class="row">
          <!-- adamlar1 -->
          <a href="https://www.mgm.gov.tr/site/bakan.aspx" style="text-decoration: none;"><div class="col-12 mb-3">
            <div class="card">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="assets/images/yk/muratkurum.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">MURAT KURUM</h5>
                    <p class="card-text">Bakan</p>
                  </div>
                </div>
              </div>
            </div>
          </div></a>

          <!-- adamlar2 -->
           <a href="https://www.mgm.gov.tr/site/genelmudur.aspx" style="text-decoration: none;"><div class="col-12 mb-3">
            <div class="card">
              <div class="row g-0">
                <div class="col-md-4">
                <img src="assets/images/yk/volkanmutlucoskun.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">VOLKAN MUTLU</h5>
                    <p class="card-text">Bkn Yrd.</p>
                  </div>
                </div>
              </div>
            </div>
          </div></a>
          

          <!-- tr yesil harita -->
          <div class="col-12 mb-3">
            <div class="btn-group d-flex" role="group">
              <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
              <label class="btn btn-text-light btn-outline-info"for="btnradio1">Bugün</label>

              <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
              <label class="btn btn-text-light btn-outline-info" for="btnradio3">Yarın</label>
            </div>
            <img src="assets/images/trharita/yesil-tr-map.jpg" class="pt-3 card-img-top" alt="...">
          </div>

          <!-- RAPOR ALANI 1-->
          <div class="col-12">
            <div class="d-flex border" style=" background-color: #f8f9fa;">
              <div class="d-flex align-items-center">
                <svg class="ms-3" width="16" height="16" fill="orange" viewBox="0 0 70 70" xmlns="http://www.w3.org/2000/svg">
                  <path d="M29.3,4.4L1.2,53C-2.2,58.9,2.6,66.2,8.6,66.2H65.6..." />
                </svg>
              </div>
              <div class="p-2 ms-4">
                Deprem Bölgesi Hava Tahmini
              </div>
            </div>
          </div>
          <!-- RAPOR ALANI 2-->
          <div class="col-12">
            <div class="d-flex border" style=" background-color: #f8f9fa;">
              <div class="d-flex align-items-center">
                <svg class="ms-3" width="16" height="16" fill="orange" viewBox="0 0 70 70" xmlns="http://www.w3.org/2000/svg">
                  <path d="M29.3,4.4L1.2,53C-2.2,58.9,2.6,66.2,8.6,66.2H65.6..." />
                </svg>
              </div>
              <div class="p-2 ms-4">
                Kuvvetli Meterolojik Hadiseler için Alınacak Tedbirler
              </div>
            </div>
          </div>

          <!-- RAPOR ALANI uyarı -->
          <div class="col-12">
            <div class="d-flex border" style=" background-color: #f8f9fa;">
              <div class="p-2 rapor-kutu">
                !<br>RAPOR
              </div>
              <div class="p-2">
                Hava Sıcaklıkları Artacak!
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- ALT BÖLÜM -->
  <section class="container" style="background-color: #1DB6D1; min-width:100%; border-bottom: 6px solid #278eb0;">
    <nav class="navbar">
      <div class="container d-block text-center">

        <div class="row align-items-center">
          <div class="col-12 d-flex justify-content-around justify-content-center" >
            <a href="https://www.mgm.gov.tr/sondurum/turkiye.aspx" style="text-decoration: none;">
              <h5 class="card-text text-light">Son Gözlemler</h5>
            </a>
            <a href="https://www.mgm.gov.tr/tahmin/turkiye.aspx" style="text-decoration: none;">
              <h5 class="card-text text-light">5 Günlük Tahmin</h5>
            </a>
            <a href="https://www.mgm.gov.tr/sondurum/uydu.aspx" style="text-decoration: none;">
              <h5 class="card-text text-light">Uydu Görüntüleri</h5>
            </a>
            <a href="https://www.mgm.gov.tr/sondurum/radar.aspx" style="text-decoration: none;">
              <h5 class="card-text text-light">Radar Görüntüleri</h5>
            </a>
            <a href="https://mevbis.mgm.gov.tr/mevbis/ui/index.html#/Workspace" style="text-decoration: none;">
              <h5 class="card-text text-light">MEVBİS</h5>
            </a>
            <a href="https://www.mgm.gov.tr/veridegerlendirme/il-ve-ilceler-istatistik.aspx" style="text-decoration: none;">
              <h5 class="card-text text-light">Resmi İklim İstatistikleri</h5>
            </a>
          </div>
        </div>
    </nav>
  </section>
</body>

</html>