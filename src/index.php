<!doctype html>
<html lang="tr">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="assets/images/havadurumu-icon/mgmlogo-top.jpg" type="image/png">

<title>MGM Ankara için havadurumu</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


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
  <style>
.city-header {
  background: linear-gradient(90deg, #d0eaff, #ffffff);
  border-radius: 12px;
  padding: 10px 20px;
  font-family: 'Segoe UI', sans-serif;
  font-weight: 600;
  font-size: 24px;
  color: #003366;
  display: flex;
  align-items: center;
  gap: 10px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  width: fit-content;
  margin: 20px auto;
}
.city-header i {
  color: #007bff;
  font-size: 24px;
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
        "assets/images/havadurumu-icon/parcalıbulut.png"
      ]
    ],

    [
      "id" => 3,
      "day" => "Çarşamba",
      "weather" => "Parçalı Bulutlu",
      "min-degrees" => 22,
      "max" => 36,
      "images" => [
        "assets/images/havadurumu-icon/parcalıbulut.png"
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
        "assets/images/havadurumu-icon/parcalıbulut.png"
      ]
    ]
  ];

  $icons = [
    [
      "id" => 1,
      "icon" => "bi bi-file-earmark-text",
      "title" => "Kurumsal",
      "links" => "https://www.mgm.gov.tr/kurumsal/birimler.aspx"
    ],
    [
      "id" => 2,
      "icon" => "bi bi-graph-up",
      "title" => "Tahminler",
      "links" => "https://www.mgm.gov.tr/tahmin/gunluk-tahmin.aspx"

    ],
    [
      "id" => 3,
      "icon" => "bi bi-geo-alt",
      "title" => "Son Durumlar",
      "links" => "https://www.mgm.gov.tr/sondurum/turkiye.aspx"
    ],
    [
      "id" => 4,
      "icon" => "bi bi-airplane",
      "title" => "Havacılık",
      "links" => "https://hezarfen.mgm.gov.tr"
    ],
    [
      "id" => 5,
      "icon" => "bi bi-umbrella",
      "title" => "Denizcilik",
      "links" => "https://pirireis.mgm.gov.tr/tahmin-raporlari/ucgunluk-tahmin"
    ],
    [
      "id" => 6,
      "icon" => "bi bi-flower2",
      "title" => "Ziraat",
      "links" => "https://www.mgm.gov.tr/tarim/zirai-don-uyari-sistemi-harita.aspx"
    ],
    [
      "id" => 7,
      "icon" => "bi bi-search",
      "title" => "Analizler",
      "links" => "https://www.mgm.gov.tr/veridegerlendirme/sicaklik-analizi.aspx"


    ],
    [
      "id" => 8,
      "icon" => "bi bi-envelope",
      "title" => "İletişim",
      "links" => "https://www.mgm.gov.tr/site/iletisim.aspx"
    ]
  ];

    $bottom_menu = [
      [
        "id" => 1,
        "title" => "Son Gözlemler",
        "links" => "https://www.mgm.gov.tr/sondurum/turkiye.aspx"
      ],
      [
        "id" => 2,
        "title" => "5 GÜnlük Tahmin",
        "links" => "https://www.mgm.gov.tr/tahmin/turkiye.aspx"

      ],
      [
        "id" => 3,
        "title" => "Uydu Görüntüleri",
        "links" => "https://www.mgm.gov.tr/sondurum/uydu.aspx"
      ],
      [
        "id" => 4,
        "title" => "MEVBİS",
        "links" => "https://www.mgm.gov.tr/sondurum/radar.aspx"
      ],
      [
        "id" => 5,
        "title" => "Resmi İklim İstatislikleri",
        "links" => "https://www.mgm.gov.tr/veridegerlendirme/il-ve-ilceler-istatistik.aspx"
      ]
  ];
  ?>

  <!-- ÜST NAV -->
  <nav class="navbar">
    <div class="container-fluid d-flex justify-content-end">
      <ul class="nav">
        <li class="nav-item"><a class="nav-link active" href="https://www.facebook.com/06Meteoroloji"><i class="fab fa-facebook-f"></i></a></li>
        <li class="nav-item"><a class="nav-link" href=""><i class="fa-brands fa-square-x-twitter"></i></a></li>
        <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/ata.krb/"><i class="fa-brands fa-instagram"></i></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="fa-brands fa-square-linkedin"></i></a></li>
        <li class="nav-item"><a class="nav-link disabled" aria-disabled="true">ATA KARABULUT</a></li>
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
            <?php foreach ($icons as $icon): ?>
              <a href="<?= $icon['links'] ?>" style="text-decoration: none;">
                <div>
                  <i class="<?= $icon['icon'] ?>" style="font-size: 1rem;"></i><br>
                  <small><?= $icon['title'] ?></small>
                </div>
              </a>
            <?php endforeach; ?>
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
echo '<div style="font-family: Arial; font-size: 12px; color: dark;">' . date("d.m.Y") . '</div>';
echo '<div style="font-weight: bold; font-size: 35px ;color: darkgray;">' . date("l") . '</div>';
echo '<div style="font-size: 16px; color: darkgray;">' . date("H:i:s") . '</div>';
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
          <a href="https://www.mgm.gov.tr/site/bakan.aspx" style="text-decoration: none;">
            <div class="col-12 mb-3">
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
            </div>
          </a>

          <!-- adamlar2 -->
          <a href="https://www.mgm.gov.tr/site/genelmudur.aspx" style="text-decoration: none;">
            <div class="col-12 mb-3">
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
            </div>
          </a>


          <!-- tr yesil harita -->
          <div class="col-12 mb-3">
            <div class="btn-group d-flex" role="group">
              <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
              <label class="btn btn-text-light btn-outline-info" for="btnradio1">Bugün</label>

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
          <div class="col-12 d-flex justify-content-around justify-content-center">
            <?php foreach ($bottom_menu as $bottom_menu_id): ?>
                <a href="<?= $bottom_menu_id['links']; ?>" style="text-decoration: none;">
                  <h5 class="card-text text-light"><?= $bottom_menu_id['title']; ?></h5>
                </a>
              <?php endforeach ?>
          </div>
        </div>
      </div>
    </nav>
  </section>
  asd




</body>



<footer>
  <section class="container-fluid text-center" style="background-color: #1DB6D1; min-width:100%; border-top: 6px solid #278eb0;">
    <nav class="navbar">
    <div class="container d-block text-center">
      <div class="row align-items-center">
        <div class="col-12 d-flex justify-content-center">
          <a href="https://www.instagram.com/ata.krb/" style="text-decoration: none;">
            <h5 class="card-text text-light">Tüm hakları saklıdır: Ata KARABULUT</h5>
          </a>
        </div>
      </div>
    </div>
    </nav>
  </section>
</footer>
</html>