<?php
$araclar = [
    [
            "id" => 1,
            "marka" => "Ford",
            "model" => "Focus",
            "yil" => 2021,
            "fiyat" => 350000,
            "durum" => "satilik",
            "resim" => "assets/focus-1.jpg"
        ],
        [
            "id" => 2,
            "marka" => "BMW",
            "model" => "320i",
            "yil" => 2020,
            "fiyat" => 620000,
            "durum" => "satildi",
            "resim" => "assets/bmw-1.jpg"
        ],
        [
            "id" => 3,
            "marka" => "Mercedes",
            "model" => "CLA 180",
            "yil" => 2022,
            "fiyat" => 750000,
            "durum" => "satilik",
            "resim" => "assets/merso-1.jpg"
        ],
        [
            "id" => 4,
            "marka" => "Lamborghini",
            "model" => "Aventador",
            "yil" => 2019,
            "fiyat" => 20000000,
            "durum" => "satilik",
            "resim" => "assets/lambo-1.jpg"
        ]
];

$id = $_GET["id"] ?? null;
$secilenArac = null;

foreach ($araclar as $arac) {
    if ($arac["id"] == $id) {
        $secilenArac = $arac;
        break;
    }
}

if (!$secilenArac) {
    echo "<div class='container p-5'><h4 class='text-danger'>Araba bulunamadı.</h4><a href='index.php' class='btn btn-primary mt-3'>Galeriye Dön</a></div>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $secilenArac["marka"] . ' ' . $secilenArac["model"]; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">

<div class="container">
    <a href="index.php" class="btn btn-secondary mb-3">← Galeriye Dön</a>
    <div class="card shadow">
        <img src="<?php echo $secilenArac["resim"]; ?>" class="card-img-top" style="height: 400px; object-fit: cover;">
        <div class="card-body">
            <h3 class="card-title"><?php echo $secilenArac["marka"] . ' ' . $secilenArac["model"]; ?></h3>
            <p class="card-text">
                Yıl: <?php echo $secilenArac["yil"]; ?><br>
                Fiyat: <?php echo number_format($secilenArac["fiyat"], 0, ',', '.'); ?> ₺<br>
                Durum:
                <span class="badge bg-<?php echo $secilenArac["durum"] === "satildi" ? "danger" : "success"; ?>">
                    <?php echo strtoupper($secilenArac["durum"]); ?>
                </span>
            </p>
        </div>
    </div>
</div>

</body>
</html>
