# Docker ile PHP Projesi

Bu proje, Docker üzerinde çalışan basit bir PHP uygulamasıdır.

## Gereksinimler

- Docker
- Docker Compose

## Kurulum ve Çalıştırma

1.  **Projeyi bilgisayarınıza indirin (clone).**

2.  **Aşağıdaki komutu çalıştırın:**
    ```bash
    docker-compose up --build -d
    ```

## Kullanım

Uygulamayı görmek için tarayıcınızda [http://localhost:8080](http://localhost:8080) adresini açın.

## Testleri Çalıştırma (İsteğe Bağlı)

Testleri çalıştırmak isterseniz, önce bağımlılıkları kurun:
```bash
docker-compose exec php composer install
```

Ardından testleri çalıştırın:
```bash
docker-compose exec php ./vendor/bin/phpunit
```

## Uygulamayı Durdurma

Uygulamayı durdurmak için aşağıdaki komutu kullanın:
```bash
docker-compose down
```
