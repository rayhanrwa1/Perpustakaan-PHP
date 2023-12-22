# Program Perpustakaan UMM

## File Handling
Program ini menggunakan database MySQL untuk menyimpan data pengguna, peminjaman buku, dan daftar buku. File `koneksi.php` berperan sebagai pengatur koneksi ke database. Walaupun terdapat komentar "I/O File Handling," sebenarnya program ini tidak menggunakan file berformat txt untuk operasi I/O.

## Program Spesifikasi
- **Bahasa Pemrograman:** PHP
- **Database:** MySQL
- **Framework CSS:** Bootstrap
- **Library JavaScript:** jQuery, DataTables

## Defensive Programming
- Penggunaan fungsi `mysqli_real_escape_string` tidak terlihat pada proses login. Penggunaan parameterized queries akan meningkatkan keamanan dari serangan SQL injection.
- Penggunaan `md5` untuk mengenkripsi password tidak disarankan. Disarankan menggunakan metode enkripsi yang lebih kuat seperti bcrypt.

## GUI (Graphical User Interface)
Program ini menggunakan antarmuka grafis untuk mempermudah pengguna. Tampilan dibangun dengan menggunakan Bootstrap untuk memberikan desain yang responsif dan menarik.

## API (Application Programming Interface)
Program ini belum mengimplementasikan API. API biasanya digunakan untuk menyediakan antarmuka pemrograman yang memungkinkan integrasi dengan aplikasi lain. Jika diperlukan, Anda dapat menambahkan fitur API untuk mengakses data tertentu melalui permintaan HTTP.

## Cara Penggunaan
1. Pastikan sudah mengatur koneksi database pada file `koneksi.php`.
2. Jalankan program dengan membuka file `index.php`.
3. Halaman utama (`beranda.php`) menampilkan daftar buku dari database.
4. Pengguna dapat login melalui formulir login pada sisi kanan halaman.

## Author
Program ini dibuat oleh [Nama Anda].

## Catatan
- Pastikan untuk mengamankan aplikasi dengan menggunakan teknik-teknik keamanan yang disarankan.
- Selalu lakukan validasi dan sanitasi input dari pengguna untuk mencegah serangan XSS dan SQL injection.
- Disarankan untuk menggunakan metode enkripsi yang lebih kuat untuk menyimpan password pengguna.

Harap diperhatikan bahwa ini hanya merupakan contoh README.md dan beberapa bagian dapat diperlukan penyesuaian sesuai dengan kebutuhan proyek.
