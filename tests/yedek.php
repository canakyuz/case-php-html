<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Araba Galerisi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">

<div class="container">
    <h1 class="mb-4 text-center">🚗 Araba Galerisi</h1>
    <div class="row g-4">


<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="false">Arabalar</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Motorlar</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
     <?php
    $araclar = [
     [
            "id" => 1,
            "marka" => "Ford",
            "model" => "Focus",
            "yil" => 2021,
            "fiyat" => 350000,
            "durum" => "satilik",
            "resim" => "assets/focus2021.jpg"
        ],
        [
            "id" => 2,
            "marka" => "BMW",
            "model" => "320i",
            "yil" => 2020,
            "fiyat" => 620000,
            "durum" => "satildi",
            "resim" => "assets/bmw-320.2020.jpg"
        ],
        [
            "id" => 3,
            "marka" => "Mercedes",
            "model" => "CLA 180",
            "yil" => 2022,
            "fiyat" => 750000,
            "durum" => "satilik",
            "resim" => "assets/Mercedes CLA 180.jpg"
        ],
        [
            "id" => 4,
            "marka" => "Lamborghini",
            "model" => "Aventador",
            "yil" => 2019,
            "fiyat" => 20000000,
            "durum" => "satilik",
            "resim" => "assets/araba1.jpg"
        ]
    ];
    

    foreach ($araclar as $arac) {
        $rozetRenk = ($arac["durum"] === "satildi") ? "danger" : "success";
        echo '
        <div class="col-md-4">
            <div class="card shadow-sm h-100 d-flex flex-column">
                <img src="' . $arac["resim"] . '" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Araç">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <h5 class="card-title">' . $arac["marka"] . ' ' . $arac["model"] . '</h5>
                        <p class="card-text">
                            Yıl: ' . $arac["yil"] . '<br>
                            Fiyat: ' . number_format($arac["fiyat"], 0, ',', '.') . ' ₺
                        </p>
                        <span class="badge bg-' . $rozetRenk . '">' . strtoupper($arac["durum"]) . '</span>
                    </div>
                    <a href="arac.php?id=' . $arac["id"] . '" class="btn btn-outline-success btn-sm mt-3">Satın Al</a>
                </div>
            </div>
        </div>';
    }
    ?>

  </div>
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
</div>



   

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>