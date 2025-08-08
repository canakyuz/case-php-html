<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Bootstrap Card Listeleme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            background-color: #e8eff3;
        }
    </style>
</head>

<body>





    <div class="row">
        <div class="container ">

            <div class="row" style="background: #dae6ec;">
                <div class="col-12 d-flex justify-content-end">
                    <nav class="navbar navbar-expand-lg ">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav" style="background: #a3bdca;">
                                <ul class="navbar-nav ">
                                    <li class="nav-item">
                                        <a
                                            class="nav-link active"
                                            aria-current="page"
                                            href="https://www.facebook.com/06Meteoroloji">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>


                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link active"
                                            aria-current="page"
                                            href="https://x.com/meteoroloji_twi">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://polenalerji.ankara.edu.tr/">Ankara</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://polenalerji.ege.edu.tr/">İzmir</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="https://radyo.mgm.gov.tr/">
                                            <i class="fa-solid fa-microphone"></i>
                                        </a>

                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link active"
                                            aria-current="page"
                                            href="https://www.mgm.gov.tr/tahmin/sesli-ebulten.aspx">
                                            <i class="fa-solid fa-eye-low-vision"></i>
                                        </a>

                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link active"
                                            aria-current="page"
                                            href="https://www.mgm.gov.tr/eng/forecast-cities.aspx">EN</a>
                                    </li>
                                    |
                                    <li class="nav-item">
                                        <a
                                            class="nav-link active"
                                            aria-current="page"
                                            href="https://mgm.gov.tr/de-DE/forecast-5days.aspx">DE</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row bg-light">
                <div class="col-4 d-flex justify-content-center">
                    <nav class="navbar bg-body-tertiary">
                        <div class="container">
                            <a class="navbar-brand" href="https://www.csb.gov.tr/">
                                <img src="https://www.mgm.gov.tr/App_Themes/mgm/img/csblogo-final.svg" width="120" height="120">
                            </a>
                            <a class="navbar-brand" href="https://www.mgm.gov.tr/">
                                <img src="https://www.mgm.gov.tr/App_Themes/mgm/img/mgmlogo-final.svg" width="120" height="120">
                            </a>
                        </div>
                    </nav>
                </div>
                <div class="col-8 d-flex justify-content-evenly">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
                        <div class="container-fluid ">

                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ">
                                    <div class="accordion-item me-3 ">
                                        <div class="accordion-header ">

                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                <div class="w-100 text-center"><i class="fa-lg fa-solid fa-book"></i></div>
                                            </button>
                                            <span>Kurumsal</span>
                                        </div>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body"> </div>>Merkez Birimleri <br>
                                            >Bölge Müdürlükleri

                                        </div>
                                    </div>
                                    <div class="accordion-item me-3">
                                        <div class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                <div class="w-100 text-center"><i class="fa-lg fa-solid fa-chart-column"></i></div>
                                            </button>
                                            <span>Tahminler</span>
                                        </div>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body"> </div>>Merkez Birimleri <br>
                                            >Bölge Müdürlükleri

                                        </div>
                                    </div>
                                    <div class="accordion-item me-3">
                                        <div class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                <div class="w-100 text-center"><i class="fa-lg fa-solid fa-circle-half-stroke"></i></div>
                                            </button>
                                            <span>Son Durumlar</span>
                                        </div>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body"> </div>>Merkez Birimleri <br>
                                            >Bölge Müdürlükleri

                                        </div>
                                    </div>
                                    <div class="accordion-item me-3">
                                        <div class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                                <div class="w-100 text-center"><i class="fa-lg fa-solid fa-plane"></i></div>
                                            </button>
                                            <span>Havacılık</span>
                                        </div>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body"> </div>>Merkez Birimleri <br>
                                            >Bölge Müdürlükleri

                                        </div>
                                    </div>
                                    <div class="accordion-item me-3">
                                        <div class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                                <div class="w-100 text-center"><i class="fa-lg fa-solid fa-sailboat"></i></div>
                                            </button>
                                            <span>Denizcilik</span>
                                        </div>
                                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body"> </div>>Merkez Birimleri <br>
                                            >Bölge Müdürlükleri

                                        </div>
                                    </div>
                                    <div class="accordion-item me-3">
                                        <div class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                                <div class="w-100 text-center"><i class="fa-lg fa-solid fa-leaf"></i></div>
                                            </button>
                                            <span>Ziraat</span>
                                        </div>
                                        <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body"> </div>>Merkez Birimleri <br>
                                            >Bölge Müdürlükleri

                                        </div>
                                    </div>
                                    <div class="accordion-item me-3">
                                        <div class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                                <div class="w-100 text-center"><i class="fa-lg fa-solid fa-chart-pie"></i></div>
                                            </button>
                                            <span>Analizler</span>
                                        </div>
                                        <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body"> </div>>Merkez Birimleri <br>
                                            >Bölge Müdürlükleri

                                        </div>
                                    </div>
                                    <div class="accordion-item me-3">
                                        <div class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                                <div class="w-100 text-center"><i class="fa-lg fa-solid fa-envelope"></i></div>
                                            </button>
                                            <span>İletişim</span>
                                        </div>
                                        <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body"> </div>>Merkez Birimleri <br>
                                            >Bölge Müdürlükleri

                                        </div>
                                    </div>


                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>


            <div class="container">
                <div class="row ">
                    <div class="col-9">
                        <div class="row ">
                            <div class="col-12">
                                <div class="card border-info mt-3">
                                    <div class="card-body">

                                        <h5 class="card-title "><input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="İl,ilçe veya Havalimanı ara"></h5>


                                        <div class="card border-info" style="width: 18rem;">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <p class="card-text">07 Ağustos - 15.21</p>
                                                </li>
                                                <li class="list-group-item">
                                                    <h2>Ankara</h2>
                                                </li>

                                            </ul>
                                        </div>
                                        <table class="table table-light border-info">

                                            <tbody>

                                                <tr>
                                                  <td><h2>34°C</h2></td>
                                                    <td>
                                                        <div class="p-2"><i class="fa-solid fa-droplet fa-xl"></i></div>
                                                    </td>
                                                    <td><div class="p-2"><i class="fa-solid fa-arrow-right fa-xl"></i></div></td>
                                                    <td><div class="p-2"><i class="fa-solid fa-rainbow fa-xl"></i></div></td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>


                                        





                                    </div>
                                    <img src="img/indir.png" class="card-img-bottom" alt="...">
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="row g-0">

                                    <?php
                                    $array = [
                                        [
                                            "gun" => "Pazartesi",
                                            "icon" => '<div><i class="fa-solid fa-cloud-sun" style="color: #FFD43B;"></i></div>',
                                            "sicaklik" => "Parçalı Bulutlu",
                                            "derece" => "22°C",
                                            "derece2" => "25°C"
                                        ],
                                        [
                                            "gun" => "Salı",
                                            "icon" => '<div><i class="fa-regular fa-sun" style="color: #FFD43B;"></i></div>',
                                            "sicaklik" => "Güneşli",
                                            "derece" => "21°C",
                                            "derece2" => "24°C"
                                        ],
                                        [
                                            "gun" => "Çarşamba",
                                            "icon" => '<div><i class="fa-solid fa-mountain-sun" style="color: #FFD43B;"></i></div>',
                                            "sicaklik" => "Az Bulutlu",
                                            "derece" => "21°C",
                                            "derece2" => "23°C"
                                        ],
                                        [
                                            "gun" => "Perşembe",
                                            "icon" => '<div><i class="fa-solid fa-cloud" style="color: #74C0FC;"></i></div>',
                                            "sicaklik" => "Bulutlu",
                                            "derece" => "20°C",
                                            "derece2" => "21°C"
                                        ],
                                        [
                                            "gun" => "Cuma",
                                            "icon" => '<div><i class="fa-solid fa-cloud-bolt" style="color: #74C0FC;"></i></div>',
                                            "sicaklik" => "Gök Gürültülü",
                                            "derece" => "20°C",
                                            "derece2" => "18°C"


                                        ]


                                    ];
                                    ?>




                                    <?php foreach ($array as $hava): ?>

                                        <div class="col ">

                                            <div class="card  mb-3 border-info" style="background: #ced4da;">
                                                <strong>
                                                    <div class="card-header bg-transparent d-flex justify-content-center"><?php echo $hava["gun"]; ?></div>
                                                </strong>
                                                <div class="card-body ">
                                                    <div class="card-title d-flex justify-content-center"><?php echo $hava["icon"]; ?></div>
                                                    <p class="card-text d-flex justify-content-center"><?php echo $hava["sicaklik"]; ?></p>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <div class="row ">
                                                        <div class="col-6 text-primary">
                                                            <?php echo $hava["derece"]; ?>
                                                        </div>
                                                        <div class="col-6 d-flex justify-content-end text-danger">
                                                            <?php echo $hava["derece2"]; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-3 ">
                        <div class="col ">



                            <div class="card border-info mt-3 ">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="card mb-3 border-info">
                                            <div class="row g-0 d-flex align-items-center">
                                                <div class="col-md-4">
                                                    <img src="img/bakan-kurum.jpg" class="img-fluid rounded-start object-fit-cover border rounded ms-2" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Murat Kuru</h5>
                                                        <p class="card-text">Çevre Şehircilik ve İklim Değişikliği Bakanı</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="card mb-3 border-info">
                                            <div class="row g-0 d-flex align-items-center">
                                                <div class="col-md-4">
                                                    <img src="img/volkanmutlucoskun5.jpg" class="img-fluid rounded-start object-fit-cover border rounded ms-2" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Volkan Mutlu Coşkun</h5>
                                                        <p class="card-text">Meteoroloji Genel Müdürü</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-info mt-3 ">
                                <div class=" card-header " style="background-color: #e8eff3;">
                                    <div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check " name="btnradio" id="btnradio1" autocomplete="off" checked>
                                        <label class="btn btn-outline-primary" for="btnradio1">Bugün</label>



                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                        <label class="btn btn-outline-primary" for="btnradio3">Yarın</label>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="#" class="d-flex justify-content-center"><img src="img/indir.jpg" class="img-fluid" alt="..."></a></li>
                                    <li class="list-group-item">
                                        <div><i class="fa-solid fa-triangle-exclamation" style="color: #FFD43B;"></i>DEPREM BÖLGESİ HAVA TAHMİNİ</div>
                                    </li>
                                    <li class="list-group-item">
                                        <div><i class="fa-solid fa-triangle-exclamation" style="color: #FFD43B;"></i>Meteorolojik OLAYLAR ve KORUNMA YÖNTEMLERİ
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                                            <div class="col-2">
                                                <div><i class="fa-solid fa-triangle-exclamation" style="color: #d81903;"></i></div>
                                            </div>
                                            <div class="col-10">
                                                <div>
                                                    Denizlerimizde (Kuzey Ege) Fırtına Bekleniyor!
                                                </div>
                                            </div>

                                        </div>
                                    </li>

                                </ul>
                            </div>

                        </div>





                    </div>

                </div>


            </div>

        </div>
    </div>

    </div>
    <div class="row position-absolute start-0 end-0" style="background-color: #1DB6D1; height:70px;">
        <div class="col-2 d-flex justify-content-center align-items-center"><a href="https://www.mgm.gov.tr/sondurum/turkiye.aspx">

                <i class="fa-regular fa-circle-down" style="color: #f7f7f7;"></i>
                <span style="color: #f7f7f7;"><strong>Son Gözlemler</strong></span>
            </a>
        </div>
        <div class="col-2 d-flex justify-content-center align-items-center"><a href="https://www.mgm.gov.tr/sondurum/turkiye.aspx">

                <i class="fa-regular fa-circle-down" style="color: #f7f7f7;"></i>
                <span style="color: #f7f7f7;"><strong>Son 5 Günlük Tahmin</strong></span>
            </a>
        </div>
        <div class="col-2 d-flex justify-content-center align-items-center"><a href="https://www.mgm.gov.tr/sondurum/turkiye.aspx">

                <i class="fa-regular fa-circle-down" style="color: #f7f7f7;"></i>
                <span style="color: #f7f7f7;"><strong>Uydu Görüntüleri</strong></span>
            </a>
        </div>
        <div class="col-2 d-flex justify-content-end align-items-center"><a href="https://www.mgm.gov.tr/sondurum/turkiye.aspx">

                <i class="fa-regular fa-circle-down" style="color: #f7f7f7;"></i>
                <span style="color: #f7f7f7;"><strong>Radar Görüntüleri</strong></span>
            </a>
        </div>
        <div class="col-2 d-flex justify-content-center align-items-center"><a href="https://www.mgm.gov.tr/sondurum/turkiye.aspx">

                <i class="fa-regular fa-circle-down" style="color: #f7f7f7;"></i>
                <span style="color: #f7f7f7;"><strong>Mevbis</strong></span>
            </a>
        </div>
        <div class="col-2 d-flex justify-content-start align-items-center"><a href="https://www.mgm.gov.tr/sondurum/turkiye.aspx">

                <i class="fa-regular fa-circle-down" style="color: #f7f7f7;"></i>
                <span style="color: #f7f7f7;"><strong>Resmi İklim İstatistikleri</strong></span>
            </a>
        </div>



    </div>
    <div class="row">



    
    </div>
    </div>























</body>

</html>