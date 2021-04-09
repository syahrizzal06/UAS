<------------ fitur fungsi Tugas uas ---------------.

On Progres!!! Signin & Signup pada login page untuk bisa mendaftar dan diakses beberapa orang dengan id yang berbeda.

-login.php-
berisi form login dengan session start() untuk memulai sesi login
jika login berhasil maka muncul alertbox berisi "Sukses Login"
link daftar data relawan covid muncul dibawah form

-index.php-
disisipkan fungsi validasi cek login, jika belum login tetapi langsung direct akses ke index.php, input.php, edit.php maka akses ditolak dan lalu muncul peringatan dilanjut dengan redirect ke login page otomatis
pada tabel data relawan covid terdapat pilihan Edit, Delete, Input, dan Logout
lanjut ke Tombol Input (input.php)

-input.php-
disipkan fungsi validasi cek login
berisi form yang dimana Nama, Alamat, Provinsi, Email, NoHp, Keahlian. tersimpan ke Database Relawan Table Covid
sedangkan Dropdown Provinsi berisi 34 provinsi di indonesia yang tersimpan dan diambil dari Database Relawan table provinsi yang selanjutnya disimpan ke table covid
ada tombol Add (sumbit) untuk menyimpan , dan Reset untuk menghapus semua inputan
jika Sudah di add maka otomatis teralihkan ke index.php atau tampilan data relawan
fungsi input.php tersimpan di proses.php

-edit.php-
disisipkan fungsi validasi cek login
berisi form yang dimana Nama, Alamat, Provinsi, Email, NoHp, Keahlian. yang diambil dan disimpan kembali ke Database Relawan Table Covid
sedangkan Dropdown Provinsi berisi 34 provinsi di indonesia yang tersimpan dan diambil dari Database Relawan table provinsi yang selanjutnya disimpan ke table covid
ada tombol Add (sumbit) untuk menyimpan
fungsi edit.php tersimpan di prosesedit.php

-delete.php-
disispkan fungsi validasi cek login
fungsi delete dari db berdasarkan ID yg kita pilih

-logout.php-
fungsi mengakhiri session atau session_destroy
jika logout sukses maka alertbox berisi " redirecting to login page in 5 second "
otomatis kembali ke login page setelah 5 second

-koneksi-
untuk menghubungkan atau membuat koneksi antara PHP ke engine MySQL menggunakan mysql extension yang telah tersedia yaitu mysqli_connect () dengan 3 argumen nya.

-proses-
untuk insert data.

-prosesedit-
untuk proses insert data dari data yang telah kita edit.

-style-
untuk menmbahkan tampilan web agar menarik.

-validasi-
Untuk memastikan agar tidak ada user lain yang masuk ke web tersebut dan terjaga datanya.
