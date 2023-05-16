<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Lara News

Aplikacja napisana jako szybkie zadanie testowe dla jednej z firm.

## Jak uruchomić aplikację?

Po sklonowaniu edytuj plik env.example i zapisz go jako .env

*(Aplikacja nie korzysta z bazy danych, nie musisz więc jej konfigurować.)*

Następnie wydaj następujące komendy w terminalu:
```
composer install
```
```
php artisan key:generate
```
```
php artisan serve
```
W drugim terminalu wydaj następujące komendy:
```
npm install
```
```
npm run build
```

## Jak uruchomić aplikację za pomocą Docker'a
Po sklonowaniu edytuj plik env.example i zapisz go jako .env

*(Aplikacja nie korzysta z bazy danych, nie musisz więc jej konfigurować.)*

Następnie wydaj następujące komendy w terminalu:
```
composer install
```
```
php artisan key:generate
```
```
./vendor/bin/sail up
```
Poczekaj aż aplikacja się zbuduje i w drugim terminalu wydaj komendy:
```
./vendor/bin/sail bash
```
```
npm install
```
```
npm run build
```
