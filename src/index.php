<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Bootstrap Card Listeleme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">

<?php
$kullanicilar = [
    ["ad" => "Ahmet", "soyad" => "Yılmaz", "yas" => 25, "aktif" => true],
    ["ad" => "Zeynep", "soyad" => "Kaya", "yas" => 17, "aktif" => true],
    ["ad" => "Mehmet", "soyad" => "Demir", "yas" => 34, "aktif" => false],
    ["ad" => "Emrican", "soyad" => "Adak", "yas" => 16, "aktif" => false],
    ["ad" => "ata", "soyad" => "ata", "yas" => 24, "aktif" => true],
    ["ad" => "ata", "soyad" => "ata", "yas" => 24, "aktif" => true],
];
?>
<div class="container">
    <div class="row">
        <?php foreach ($kullanicilar as $kullanici): ?>
            <?php
            $kartRenk = $kullanici['aktif'] ? "bg-success text-white" : "bg-secondary text-white";
            ?>
            <div class="col-md-10 mb-4" style="max-width: 18rem;">
                <div class="card <?= $kartRenk ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $kullanici['ad'] . " " . $kullanici['soyad'] ?></h5>
                        <p class="card-text">Yaş: <?= $kullanici['yas'] ?></p>
                        <?php if ($kullanici['yas'] < 18): ?>
                            <span class="badge bg-warning text-dark">Reşit değil</span>
                        <?php endif; ?>
                        <p class="mt-2">
                            Durum: <strong><?= $kullanici['aktif'] ? "Aktif" : "Pasif" ?></strong>
                        </p>
                        <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">alt tablo baslıgı</div>
                            <div class="card-body">
                                <h5 class="card-title">alt tablo baslıgı2</h5>
                                <p class="card-text">ek bilgiler...</p>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
$arabalar = [
    ["araba" => "Lamborghini", "motor" => 4000, "satildi" => false, "resim" => "assets/araba1.jpg"],
    ["araba" => "Audi", "motor" => 3000, "satildi" => false, "resim" => "assets/araba2.jpg"],
    ["araba" => "Bugatti", "motor" => 3600, "satildi" => true, "resim" => "assets/araba3.jpg"],
];
?>

<div class="container">
    <h2 class="mb-4">🚗 Satıştaki Arabalar</h2>
    <div class="row">
        <?php foreach ($arabalar as $araba): ?>
            <?php if (!$araba['satildi']): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="<?= $araba['resim'] ?>" class="card-img-top" alt="<?= $araba['araba'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $araba['araba'] ?></h5>
                            <p class="card-text">Motor Hacmi: <?= $araba['motor'] ?> cc</p>
                            <span class="badge bg-success">Satışta</span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <h2 class="mb-4 mt-5">❌ Satılmış Arabalar</h2>
    <div class="row">
        <?php foreach ($arabalar as $araba): ?>
            <?php if ($araba['satildi']): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="<?= $araba['resim'] ?>" class="card-img-top" alt="<?= $araba['araba'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $araba['araba'] ?></h5>
                            <p class="card-text">Motor Hacmi: <?= $araba['motor'] ?> cc</p>
                            <span class="badge bg-danger">Satıldı</span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>


</body>
</html>
