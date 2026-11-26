WEBSITE ORGANISASI IMM - TEMPLATE FUTURISTIK

STRUKTUR FOLDER
website-imm-futuristik/
|-- index.php
|-- README.txt
|-- assets/
    |-- css/
    |   |-- style.css
    |-- js/
        |-- script.js

CARA MENJALANKAN DI VS CODE (PHP BUILT-IN SERVER)
1. Ekstrak ZIP ke folder yang mudah ditemukan.
2. Buka VS Code.
3. Pilih File > Open Folder, lalu pilih folder website-imm-futuristik.
4. Buka Terminal > New Terminal.
5. Pastikan terminal berada di folder yang berisi index.php.
6. Jalankan: php -S localhost:8000
7. Buka browser: http://localhost:8000
8. Untuk menghentikan server, tekan Ctrl + C di terminal.

CATATAN
- PHP harus sudah terpasang dan perintah `php -v` berhasil.
- Internet diperlukan untuk memuat Google Fonts. Website tetap dapat digunakan jika font gagal dimuat.
- Nama unit pada template sudah diatur menjadi PK IMM Al-Fatih. Sesuaikan periode, email, media sosial, dan program langsung di index.php.
- Kegiatan pada template adalah contoh, bukan agenda resmi organisasi.
- Form kontak saat ini hanya memvalidasi input dan menampilkan pesan demo. Belum mengirim email atau menyimpan ke database.
- Template ini belum memakai database dan belum memiliki halaman admin/login.


GALERI & LOGO PK IMM AL-FATIH
- Logo resmi: assets/images/logo-pk-imm-al-fatih.png
- Foto dokumentasi: assets/images/
- Untuk mengganti foto, gunakan nama file yang sama atau ubah alamat src pada index.php.
