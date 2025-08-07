<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ankara İçin Hava Durumu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body style="background-color:#dae6ec">



  <nav class="navbar">
    <div class="container-fluid  d-flex justify-content-end  text-align-center ">
      <div class="row">
        <div class="col">

          <ul class="nav">
            <li class="nav-item me-4">
              <a href="https://www.facebook.com" target="_blank">
                <i class="fa-brands fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item me-4">
              <a href="https://twitter.com" target="_blank">
                <i class="fa-brands fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item me-4">
              <a title="Ankara Polen Alerji Bülteni" href="https://polenalerji.ankara.edu.tr/" target="_blank" class="polen-tahmin">
                <img src="img/polenankara.svg" height="26" title="Ankara Polen Alerji Bülteni">
              </a>
            </li>
            <li class="nav-item me-4">
              <a title="İzmir Polen Alerji Bülteni" href="https://polenalerji.ege.edu.tr/" target="_blank" class="polen-tahmin">
                <img src="img/polenizmir.svg" height="28" title="İzmir Polen Alerji Bülteni">
              </a>
            </li>

            <li class="nav-item me-4"><a title="Meteorolojinin Sesi Radyosu" href="https://radyo.mgm.gov.tr/" class="meteoroloji-radyo">
                <img title="Meteorolojinin Sesi Radyosu" src="img/microphone.svg" height="22"></a></li>

            <li class="nav-item me-4"><a href="/tahmin/sesli-ebulten.aspx" style="vertical-align: middle;" class="meteoroloji-radyo">
                <i class="meteor-eye-slash" alt="Sesli e-Bülten" style="vertical-align: middle;"></i></a></li>
          </ul>


        </div>
      </div>
    </div>
  </nav>





  <nav class="navbar bg-body-tertiary">
    <div class="row d-flex   justify-content-end  align-items-center">

      <spadivn class="col-3 ms-5 ">
        <a class="navbar-brand" href="https://www.csb.gov.tr/">
          <img src="img/csblogo-final.svg" alt="Bootstrap" width="114" height="72">
        </a>
      </div>

      <div class="col-3 me-5">
        <a class="navbar-brand" href="https://www.mgm.gov.tr/">
          <img src="img/mgmlogo-final (2).svg" alt="Bootstrap" width="108" height="69">
        </a>
      </div>

      <div class="col-6">
        <ul class="navbar icons  d-flex justify-content-end" style="width: 800px; ">
        <li class="ms-auto"><a href=""><i class="fa-solid fa-book"></i></a></li>
        <li class="ms-auto"><a href=""><i class="fa-solid fa-chart-column"></i></a></li>
        <li class="ms-auto"><a href=""><i class="fa-solid fa-caret-down"></i></a></li>
        <li class="ms-auto"><a href=""><i class="fa-solid fa-plane"></i></a></li>
        <li class="ms-auto"><a href=""><i class="fa-solid fa-sailboat"></i></a></li>
        <li class="ms-auto"><a href=""><i class="fa-solid fa-wheat-awn"></i></a></li>
        <li class="ms-auto"><a href=""><i class="fa-solid fa-droplet"></i></a></li>
        <li class="ms-auto"><a href=""><i class="fa-solid fa-envelope"></i></a></li>
        </ul>
      </div>
    </div>
</nav>



  <div class="container">

    <div class="row">
      <div class="col-9 ">
        <br>
        <!--bu bir form -->
        <div class="mb-2 shadow-sm  bg-body-tertiary rounded">
          <label for="searchInput" class="form-label visually-hidden">Şehir Arama</label>
          <input type="text" class="form-control" placeholder="İl, İlçe veya Havalimanı Ara..">
        </div>


        <div class=card style=background-color:#dae6ec;>
          <div class="card-body">
            <p class="card-text">
            <div>05 Ağustos - 12.54</div>
            <h5>Ankara</h5>
            <div>Açık</div>
            <h6>34,1°C</h6>
            </p>
            <img src="img/indir.png" class="card-img-top">
          </div>
        </div>

        <br>
        <div class="row">


          <?php
          // Her gün için bilgiler:
          $gunler = [
            ['gun' => 'Çarşamba', 'min' => 22, 'max' => 37, 'ikon' => 'img/sun.png.svg'],
            ['gun' => 'Perşembe', 'min' => 23, 'max' => 34, 'ikon' => 'img/cloud-sun.png.svg'],
            ['gun' => 'Cuma',     'min' => 20, 'max' => 32, 'ikon' => 'img/sun.png.svg'],
            ['gun' => 'Cumartesi', 'min' => 19, 'max' => 30, 'ikon' => 'img/cloud-sun.png.svg'],
            ['gun' => 'Pazar',    'min' => 18, 'max' => 29, 'ikon' => 'img/Sun.png.svg'],
          ];


          foreach ($gunler as $gun): ?>
            <div class="col mb-4">
              <div class="card " >
                <h5 class="card-title  text-center"><?= $gun['gun'] ?></h5>
                <img src="<?= $gun['ikon'] ?>" class="mx-auto d-block" style="width: 100px;">
                <div class="card-body">
                  <div class="row">
                    <p class="card-text  text-center">Sıcak</p>
                    <div class="col-6">
                      <h5>"<?= $gun['min'] ?>"</h5>
                    </div>
                    <div class="col-6">
                      <h5>"<?= $gun['max'] ?>"</h5>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>


      </div>

      <div class="col-3 ">

        <div class="row">
          <div class="col">
            <div class="card m-2" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="img/bakan-kurum.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Murat KURUM</h5>
                    <p class="card-text">Çevre, Şehircilik ve İklim Değişikliği Bakanı</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card m-2" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="img/volkanmutlucoskun5.jpg" class="img-fluid rounded-start  width:200px;" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Volkan Mutlu COŞKUN</h5>
                    <p class="card-text">Meteoroloji Genel Müdürü</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>

        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">

          <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
          <label class="btn btn-outline-primary" for="btnradio1" style="width:150px;">Bugün</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
          <label class="btn btn-outline-primary" for="btnradio3" style="width:150px;">Yarın</label>
        </div>

        <br><br>

        <img src="img/turkiye.svg" alt="">

        <br><br>

        <div class="row" style="background-color: white;">
          <div class="col  mb-2">

            <div><i class="fa-solid fa-triangle-exclamation" style="color: orange;"></i> Deprem Bölgesi Hava Tahmini</div>
            <div><i class="fa-solid fa-triangle-exclamation" style="color: orange;"></i> Kuvvetli Meteorolojik Hadiseler için Alınacak Önlemler</div>
            <br>
            <div><i class="fa-solid fa-exclamation" style="color: #df0c0c;"></i> Denizlerimizde (Kuzey Ege) Fırtına Bekleniyor!</div>
            <div><i class="fa-solid fa-exclamation" style="color: #df0c0c;"></i> Denizlerimizde (Marmara) Fırtına Bekleniyor!</div>

          </div>
        </div>







      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>