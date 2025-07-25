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
    ["ad" => "Emrican", "soyad" => "Adak", "yas" => 24, "aktif" => false],
    ["ad" => "ata", "soyad" => "ata", "yas" => 24, "aktif" => false],
    ["ad" => "ata", "soyad" => "ata", "yas" => 24, "aktif" => false],
];
?>

<div class="container">
    <div class="row">
        <?php foreach ($kullanicilar as $kullanici): ?>
            <?php
            $kartRenk = $kullanici['aktif'] ? "bg-success text-white" : "bg-secondary text-white";
            ?>
            <div class="col-md-4 mb-4">
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
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>
