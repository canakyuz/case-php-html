<<!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>First site</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

        <style>
            body {
                background-color: #6f9996;

            }
        </style>
    </head>

    <body>
        <div class="container">

            <nav class="navbar navbar fixed-top navbar-expand-lg bg-dark ">
                <a class="navbar-brand text-white ms-auto" href="#">MySite</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">ANASAYFA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">HAKKIMIZDA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">PROJELER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled text-white" aria-disabled="true">İLETİŞİM</a>
                        </li>
                    </ul>
                </div>
            </nav>


            <header>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="foto.jpg" class="d-block w-100" alt="adaya giden iskele">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                            <button type="button" class="btn btn-danger">Tıklayınız</button>
                        </div>
                    </div>
            </header>

            <br>

<div class="row">
    <div class="col-12">


  <div class="card" >
  <img src="havadurumu tablo.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">HAVA DURUMU</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>


    </div>
</div>

            <br>
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <img src="araba1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">araba 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card’s content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="card">

                        <img src="araba2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">araba 2</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card’s content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>

                <div class="col-sm">
                    <div class="card">
                        <img src="uçak resmi.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">uçak</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card’s content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>
            </div>

            <br>
            <hr>

            <div class="row"></div>
            <div class="table-responsive">
                <table class="table table mt-4  table-hover">
                    <caption>örnek caption: bu bir örnek tablo</caption>
                    <thead class="table-info">
                        <tr>
                            <th scope="col" class="table-secondary">#</th>
                            <th scope="col">ad</th>
                            <th scope="col">soyad</th>
                            <th scope="col">araç renk</th>
                        </tr>
                    </thead>
                    <tbody class="table-warning">
                        <tr>
                            <th scope="row" class="table-danger">1</th>
                            <td>ali</td>
                            <td>demir</td>
                            <td>siyah</td>
                        </tr>
                        <tr>
                            <th scope="row" class="table-danger">2</th>
                            <td>ahmet</td>
                            <td>yilmaz</td>
                            <td>füme</td>
                        </tr>
                        <tr>
                            <th scope="row" class="table-danger">3</th>
                            <td>furkan</td>
                            <td>dönmez</td>
                            <td>mavi</td>
                        </tr>
                    </tbody>
                </table>

            </div>


            <ul class="list-group">
                <li class="list-group-item active">örnek öğe</li>
                <li class="list-group-item list-group-item-danger">örnek öğe</li>
                <li class="list-group-item list-group-item-warning">örnek öğe</li>
                <li class="list-group-item list-group-item-secondary">örnek öğe</li>
                <li><a href="https://getbootstrap.com/"
                        class="list-group-item  list-group-item-success   list-group-item-action ">bootstrap</a></li>
            </ul>

            <br>
            <hr>
<p>Öğrencileri Dön!</p>

            <?php
            $ogrenciler = [
                ["ad" => "Ali", "soyad" => "Kaya", "yas" => 17],
                ["ad" => "Ayşe", "soyad" => "Yılmaz", "yas" => 19],
                ["ad" => "Mehmet", "soyad" => "Kaya", "yas" => 20],
                ["ad" => "Elif", "soyad" => "Demir", "yas" => 18],
                ["ad" => "Ahmet", "soyad" => "Çelik", "yas" => 22],
                ["ad" => "Zeynep", "soyad" => "Şahin", "yas" => 21],
                ["ad" => "Emre", "soyad" => "Aydın", "yas" => 23],
                ["ad" => "Burak", "soyad" => "Yıldız", "yas" => 20],
                ["ad" => "Hülya", "soyad" => "Aslan", "yas" => 18],
                ["ad" => "Can", "soyad" => "Erdoğan", "yas" => 21]
            ];
            ?>
            
            <div class="row" >
                <?php foreach($ogrenciler as $ogrenci): ?>
                <div class="col p-3">
                    <div class="card  bg-warning" style="width:230px;">
                        <div class="card-body">
                            <h5>Ad: <?= $ogrenci['ad'] ?></h5>
                            <h5>Soyad: <?= $ogrenci['soyad'] ?></h5>
                            <p>Yaş: <?= $ogrenci['yas'] ?></p>
                        </div>
                    </div>
                </div>
             <?php endforeach ; ?>
            </div>


            
            <hr>
            <h5>İSİM SOYİSİM GİRİNİZ :</h5>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="AD">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="SOYAD">
                </div>
            </div>

            <br>

            <h5>E MAİL ADRESİNİZİ GİRİNİZ :</h5>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
            </form>

            <br>
            <hr>
            <br>

            <h5>ŞEHİR SEÇİNİZ :</h5>
            <select class="form-select">
                <option selected> ŞEHİR SEÇİNİZ</option>
                <option value="1">İSTANBUL</option>
                <option value="2">İZMİR</option>
                <option value="3">ANKARA</option>
            </select>

            <br>


            <h5>DOSYA SEÇİNİZ :</h5>
            <div class="input-group">
                <input type="file" class="form-control" id="inputGroupFile04">
                <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
            </div>

            <br><br>
            <h5>CİNSİYET SEÇİNİZ :</h5>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                <label class="form-check-label" for="radioDefault1">
                    ERKEK
                </label>

            </div>
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                <label class="form-check-label" for="radioDefault2">
                    KADIN
                </label>
            </div>

            <br><br>
            <h5>HOBİLERİNİZ:</h5>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                <label class="form-check-label" for="checkDefault">
                    KİTAP OKUMAK
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                <label class="form-check-label" for="checkChecked">
                    YAZILIM - KOD YAZMAK
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                <label class="form-check-label" for="checkDefault">
                    YÜZMEK
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                <label class="form-check-label" for="checkDefault">
                    YÜRÜYÜŞ YAPMAK
                </label>
            </div>

            <br><br>

            <div class="row ">
                <button type="submit" class="btn btn-success btn-block  ">KAYDET</button>

            </div>
             <div class="row ">
                <button type="reset" class="btn btn-secondary btn-block">SIFIRLA</button>
            </div>






            <footer class="bg-dark  text-white  text-center  py-2  fixed-bottom">
                &copy; 2025 Şirket Adi.
            </footer>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
            crossorigin="anonymous"></script>
    </body>

    </html>
    