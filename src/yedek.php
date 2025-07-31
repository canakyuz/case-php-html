<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Araba Galerisi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-6">
    <div class="container">
    <h1 class="mb-3 text-center">🚗 Araba Galerisi</h1>

<?php
$sekmeler = [
    [ "id" => "arabalar", "baslik" => "Arabalar", "icerik" => "", "aktif" => true, "disabled" => false ],
    [ "id" => "motorlar", "baslik" => "Motorlar", "icerik" => "", "aktif" => false, "disabled" => false ],
    [ "id" => "contact", "baslik" => "İletişim", "icerik" => "", "aktif" => false, "disabled" => false ],
   // [ "id" => "disabled", "baslik" => "Devre Dışı", "icerik" => "Bu sekme devre dışı.", "aktif" => false, "disabled" => true ], 
    [ "id" => "profile", "baslik" => "Bilgiler", "icerik" => "", "aktif" => false, "disabled" => false ]


];
$araclar = [
    [
        "id" => 1,
        "marka" => "Ford",
        "model" => "Focus",
        "yil" => 2021,
        "fiyat" => 350000,
        "durum" => "satilik",
        "resimler" => [
            "assets/focus-1.jpg",
            "assets/focus-2.jpg"
        ],
        "ozellikler" => [
            "Motor Hacmi" => "1.5L",
            "Beygir Gücü" => "123 HP",
            "Yakıt Tipi" => "Benzin",
            "Vites" => "Otomatik",
            "Renk" => "Lacivert"
        ]
    ],
    [
        "id" => 2,
        "marka" => "BMW",
        "model" => "320i",
        "yil" => 2020,
        "fiyat" => 620000,
        "durum" => "satildi",
        "resimler" => [
            "assets/bmw-1.jpg",
            "assets/bmw-2.jpg"
        ],
        "ozellikler" => [
            "Motor Hacmi" => "2.0L",
            "Beygir Gücü" => "184 HP",
            "Yakıt Tipi" => "Dizel",
            "Vites" => "Manuel",
            "Renk" => "Beyaz"
        ]
    ],
    [
        "id" => 3,
        "marka" => "Mercedes",
        "model" => "CLA 180",
        "yil" => 2020,
        "fiyat" => 750000,
        "durum" => "satildi",
        "resimler" => [
            "assets/merso-1.jpg",
            "assets/merso-2.jpg"
        ],
        "ozellikler" => [
            "Motor Hacmi" => "2.0L",
            "Beygir Gücü" => "184 HP",
            "Yakıt Tipi" => "Dizel",
            "Vites" => "Manuel",
            "Renk" => "Beyaz"
        ]
    ],
    [
        "id" => 4,
        "marka" => "Lamborghini",
        "model" => "Aventador",
        "yil" => 2019,
        "fiyat" => 20000000,
        "durum" => "satildi",
        "resimler" => [
            "assets/lambo-1.jpg",
            "assets/lambo-2.jpg"
        ],
        "ozellikler" => [
            "Motor Hacmi" => "2.0L",
            "Beygir Gücü" => "184 HP",
            "Yakıt Tipi" => "Dizel",
            "Vites" => "Manuel",
            "Renk" => "Beyaz"
        ]
    ]
        ];

$motorlar = [
    [
        "id" => 1,
        "marka" => "Honda",
        "model" => "X",
        "yil" => 2021,
        "fiyat" => 350000,
        "durum" => "satilik",
        "resimler" => [
            "assets/honda-1.jpg",
            "assets/honda-2.jpg"
        ],
        "ozellikler" => [
            "Motor Hacmi" => "1.5L",
            "Beygir Gücü" => "123 HP",
            "Yakıt Tipi" => "Benzin",
            "Vites" => "Otomatik",
            "Renk" => "Lacivert"
        ]
    ],
    [
        "id" => 2,
        "marka" => "BMW",
        "model" => "Motor",
        "yil" => 2020,
        "fiyat" => 620000,
        "durum" => "satildi",
        "resimler" => [
            "assets/bmw-motor-1.jpg",
            "assets/mbwmotor-2.jpg"
        ],
        "ozellikler" => [
            "Motor Hacmi" => "2.0L",
            "Beygir Gücü" => "184 HP",
            "Yakıt Tipi" => "Dizel",
            "Vites" => "Manuel",
            "Renk" => "Beyaz"
        ]
    ],
    [
        "id" => 3,
        "marka" => "Vespa",
        "model" => "XXX",
        "yil" => 2020,
        "fiyat" => 750000,
        "durum" => "satildi",
        "resimler" => [
            "assets/Vespa-1.jpg",
            "assets/assets/vespa-2.jpg"
        ],
        "ozellikler" => [
            "Motor Hacmi" => "2.0L",
            "Beygir Gücü" => "184 HP",
            "Yakıt Tipi" => "Dizel",
            "Vites" => "Manuel",
            "Renk" => "Beyaz"
        ]
    ]
    ];
?>
<!-- SEKME BAŞLIKLARI -->
<ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
    <?php foreach ($sekmeler as $sekme): ?>
        <?php if ($sekme['id'] !== 'profile'): ?>
            <li class="nav-item" role="presentation">
                <button 
                    class="nav-link <?= $sekme['aktif'] ? 'active' : '' ?>" 
                    id="<?= $sekme['id'] ?>-tab" 
                    data-bs-toggle="tab" 
                    data-bs-target="#<?= $sekme['id'] ?>-tab-pane" 
                    type="button" 
                    role="tab" 
                    aria-controls="<?= $sekme['id'] ?>-tab-pane" 
                    aria-selected="<?= $sekme['aktif'] ? 'true' : 'false' ?>"
                    <?= $sekme['disabled'] ? 'disabled' : '' ?>
                >
                    <?= $sekme['baslik'] ?>
                </button>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
    <?php
    // Profile sekmesini en sağa sabitle
    foreach ($sekmeler as $sekme) {
        if ($sekme['id'] === 'profile') {
            ?>
            <li class="nav-item ms-auto" role="presentation">
                <button 
                    class="nav-link <?= $sekme['aktif'] ? 'active' : '' ?>" 
                    id="<?= $sekme['id'] ?>-tab" 
                    data-bs-toggle="tab" 
                    data-bs-target="#<?= $sekme['id'] ?>-tab-pane" 
                    type="button" 
                    role="tab" 
                    aria-controls="<?= $sekme['id'] ?>-tab-pane" 
                    aria-selected="<?= $sekme['aktif'] ? 'true' : 'false' ?>"
                    <?= $sekme['disabled'] ? 'disabled' : '' ?>
                >
                    <?= $sekme['baslik'] ?>
                </button>
            </li>
            <?php
        }
    }
    ?>
</ul>

<!-- SEKME İÇERİKLERİ -->
<div class="tab-content" id="myTabContent">
    <?php foreach ($sekmeler as $sekme): ?>
        <div 
            class="tab-pane fade <?= $sekme['aktif'] ? 'show active' : '' ?>" 
            id="<?= $sekme['id'] ?>-tab-pane" 
            role="tabpanel" 
            aria-labelledby="<?= $sekme['id'] ?>-tab" 
            tabindex="0"
        >
            <div class="p-3">
                <?php
                // switch-case ile sekme içeriklerini yönet
                switch ($sekme['id']) {
                    case 'arabalar':
                        $veriListesi = $araclar;
                        if (!empty($veriListesi)) {
                            ?>
                            <div class="row g-4">
                                <?php foreach ($veriListesi as $item): ?>
                                    <?php $rozetRenk = ($item["durum"] === "satildi") ? "danger" : "success"; ?>
                                    <div class="col-md-4">
                                        <div class="card shadow-sm h-100">
                                            <!-- Carousel -->
                                            <div id="carousel-<?= $sekme['id'] ?>-<?= $item["id"] ?>" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <?php foreach ($item["resimler"] as $i => $resim): ?>
                                                        <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                                                            <img src="<?= $resim ?>" class="d-block w-100" style="height:200px; object-fit:cover;" alt="resim">
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-<?= $sekme['id'] ?>-<?= $item["id"] ?>" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Önceki</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carousel-<?= $sekme['id'] ?>-<?= $item["id"] ?>" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Sonraki</span>
                                                </button>
                                            </div>
                                            <div class="card-body d-flex flex-column justify-content-between">
                                                <div>
                                                    <h5 class="card-title"><?= $item["marka"] ?> <?= $item["model"] ?></h5>
                                                    <p class="card-text">
                                                        <button type="button" class="btn btn-secondary btn-sm" 
                                                                data-bs-toggle="modal" 
                                                                data-bs-target="#modal-<?= $sekme['id'] ?>-<?= $item['id'] ?>">
                                                            daha fazlası...
                                                        </button>
                                                        <div class="modal fade" id="modal-<?= $sekme['id'] ?>-<?= $item['id'] ?>" 
                                                            tabindex="-1" 
                                                            aria-labelledby="modalLabel-<?= $sekme['id'] ?>-<?= $item['id'] ?>" 
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="modalLabel-<?= $sekme['id'] ?>-<?= $item['id'] ?>">
                                                                            <?= $item["marka"] ?> <?= $item["model"] ?>
                                                                        </h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                                                                    </div>
                                                                    <ul class="list-group list-group-flush mt-2">
                                                                        <?php foreach ($item["ozellikler"] as $ozellikAdi => $deger): ?>
                                                                            <li class="list-group-item"><strong><?= $ozellikAdi ?>:</strong> <?= $deger ?></li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                                                                        <a href="arac.php?id=<?= $item["id"] ?>" class="btn btn-primary">
                                                                            Satın Al
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Yıl: <?= $item["yil"] ?><br>
                                                        Fiyat: <?= number_format($item["fiyat"], 0, ',', '.') ?> ₺
                                                    </p>
                                                    <span class="badge bg-<?= $rozetRenk ?>"><?= strtoupper($item["durum"]) ?></span>
                                                </div>
                                                <a href="arac.php?id=<?= $item["id"] ?>" class="btn btn-outline-success btn-sm mt-3">Satın Al</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <?php
                        }
                        break;
                    case 'motorlar':
                        $veriListesi = $motorlar;
                        if (!empty($veriListesi)) {
                            ?>
                            <div class="row g-4">
                                <?php foreach ($veriListesi as $item): ?>
                                    <?php $rozetRenk = ($item["durum"] === "satildi") ? "danger" : "success"; ?>
                                    <div class="col-md-4">
                                        <div class="card shadow-sm h-100">
                                            <!-- Carousel -->
                                            <div id="carousel-<?= $sekme['id'] ?>-<?= $item["id"] ?>" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <?php foreach ($item["resimler"] as $i => $resim): ?>
                                                        <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                                                            <img src="<?= $resim ?>" class="d-block w-100" style="height:200px; object-fit:cover;" alt="resim">
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-<?= $sekme['id'] ?>-<?= $item["id"] ?>" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Önceki</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carousel-<?= $sekme['id'] ?>-<?= $item["id"] ?>" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Sonraki</span>
                                                </button>
                                            </div>
                                            <div class="card-body d-flex flex-column justify-content-between">
                                                <div>
                                                    <h5 class="card-title"><?= $item["marka"] ?> <?= $item["model"] ?></h5>
                                                    <p class="card-text">
                                                        <button type="button" class="btn btn-secondary btn-sm" 
                                                                data-bs-toggle="modal" 
                                                                data-bs-target="#modal-<?= $sekme['id'] ?>-<?= $item['id'] ?>">
                                                            daha fazlası...
                                                        </button>
                                                        <div class="modal fade" id="modal-<?= $sekme['id'] ?>-<?= $item['id'] ?>" 
                                                            tabindex="-1" 
                                                            aria-labelledby="modalLabel-<?= $sekme['id'] ?>-<?= $item['id'] ?>" 
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="modalLabel-<?= $sekme['id'] ?>-<?= $item['id'] ?>">
                                                                            <?= $item["marka"] ?> <?= $item["model"] ?>
                                                                        </h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                                                                    </div>
                                                                    <ul class="list-group list-group-flush mt-2">
                                                                        <?php foreach ($item["ozellikler"] as $ozellikAdi => $deger): ?>
                                                                            <li class="list-group-item"><strong><?= $ozellikAdi ?>:</strong> <?= $deger ?></li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                                                                        <a href="motor.php?id=<?= $item["id"] ?>" class="btn btn-primary">
                                                                            Satın Al
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Yıl: <?= $item["yil"] ?><br>
                                                        Fiyat: <?= number_format($item["fiyat"], 0, ',', '.') ?> ₺
                                                    </p>
                                                    <span class="badge bg-<?= $rozetRenk ?>"><?= strtoupper($item["durum"]) ?></span>
                                                </div>
                                                <a href="motor.php?id=<?= $item["id"] ?>" class="btn btn-outline-success btn-sm mt-3">Satın Al</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <?php
                        }
                        break;
                    
                    case 'contact':// İletişim sekmesi
                        ?>
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" aria-label="Lütfen mesajın içeriğini seçiniz.">
                                <option value="1">Soru</option>
                                <option value="2">Öneri</option>
                                <option value="3">İlanlar</option>
                                <option selected>Diğer</option>
                            </select>
                            <label for="floatingSelect">Lütfen mesajın içeriğini seçiniz.</label>
                        </div>
                        <form class="form-floating mt-2">
                            <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="test@example.com">
                            <label for="floatingInputValue">Lütfen e-mail giriniz.</label>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </form>
                        <div class="form-floating mt-2">
                            <textarea class="form-control <?= $hata ? 'is-invalid' : '' ?>"  placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Mesajınız:</label>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <button class="btn btn-primary me-md-2" type="submit">Gönder</button>
                        </div>
                        <?php
                        break;

                        case 'profile':
                        // Profil kısmı
                        ?>
                        <div class="mt-3">
                            <h2>Profil Bilgileri</h2>
                            <p>Ad: John Doe</p>
                            <p>Email: johndoe@example.com</p>
                            <p>Profil bilgileri burada gösterilecek.</p>
                        </div>
                        <?php
                        break;
                }
                ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>




</div> <!-- .container -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
