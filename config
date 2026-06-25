<?php
// Veritabanı Ayarları
$host = 'localhost';
$db   = 'garanti_emlak';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
     $pdo = new PDO($dsn, $user, $pass, [
         PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
     ]);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->code());
}

// Global Firma Bilgileri
define('FIRMA_ADI', 'GARANTİ EMLAK');
define('TELEFON', '0505 032 73 04');
define('EPOSTA', 'garantiemlakoffice@gmail.com');
define('ADRES', 'Mersin / Tarsus');
define('TEL_LINK', 'tel:+905050327304');
?>
