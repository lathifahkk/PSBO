# Laporan Tugas Akhir PSBO
<p align="center">
  <img height="100" src="https://user-images.githubusercontent.com/60083962/121816763-a1239300-cca7-11eb-8c87-b74b56b4de1f.png"> <br>
  Paralel 2 - Kelompok 8
</p>


[Deskripsi Aplikasi](#1-deskripsi-singkat-aplikasi) | [User Analysis](#2-user-analysis) | [Dampak](#3-dampak) | [Spesifikasi](#4-spesifikasi-teknis-lingkungan-pengembangan) | [Konsep OOP](#5-konsep-oop-yang-digunakan)| [Tipe Desain](#6-tipe-desain-pengembangan-yang-digunakan) |[Hasil dan Pembahasan](#7-hasil-dan-pembahasan) | [Hasil Implementasi](#8-hasil-implementasi) | [Saran](#9-saran-untuk-pengembangan-selanjutnya) | [Developer](#10-developer-dan-jobdeks) | [Referensi](#referensi)
:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---: |:---: 

## 1. Deskripsi singkat aplikasi
[`^ kembali ke atas ^`](#) 
 <br>Untuk mengatasi permasalahan yang ditemukan, kami sebagai pengembang mencoba membangun aplikasi dengan nama IPB’s Event pada platform berbasis website. Aplikasi IPB’s Event memungkinkan untuk menampilkan semua kegiatan yang diselenggarakan oleh internal IPB University baik yang diselenggarakan oleh mahasiswa maupun pihak kampus IPB University seperti lomba, webinar, seminar, dan sebagainya. Mahasiswa dapat melihat kegiatan yang akan diselenggarakan berdasarkan waktu pelaksanaanya pada beranda IPB Event. Mahasiswa juga dapat mendaftarkan diri secara langsung di aplikasi tersebut sebagai peserta. Selain itu, Organisasi di IPB dapat mendaftarkan kegiatan yang akan diselenggarakannya sebagai panitia pelaksana kegiatan agar kegiatannya dapat terlihat pada aplikasi. Aplikasi IPB’s Event  juga mendukung adanya informasi kegiatan yang pendaftarannya dibuka pada hari itu.

## 2. User analysis 
[`^ kembali ke atas ^`](#) 
### 2.1. Mahasiswa
Sebagai seorang mahasiswa IPB, saya ingin mengetahui dan mendapatkan informasi lengkap terkait event  internal di IPB yang dapat saya ikuti. Supaya saya tidak ketinggalan informasi mengenai pelaksanaan  event tersebut  dan dapat mendaftar sebagai peserta  event.
### 2.2. Panitia Event (Organisasi)
Sebagai panitia dari suatu  event, saya ingin  event yang kami selenggarakan dapat diikuti oleh peserta dengan tepat sasaran. Supaya mahasiswa IPB yang membutuhkan acara ini mendapatkan manfaat dari acara yang kami selenggarakan, tidak ketinggalan informasi mengenai pelaksanaan acara kami, dan dapat mendaftar menjadi peserta.


## 3. Dampak
Dengan adanya aplikasi ini, informasi kegiatan dapat dikemas dan tersampaikan dengan baik sesuai dengan target sasarannya. Mahasiswa dapat memperoleh informasi kegiatan berdasarkan waktu pelaksanaan dan kategori yang diinginkan. Dengan adanya informasi kegiatan yang pendaftarannya dibuka pada hari itu mengurangi kemungkinan mahasiswa melewatkan kegiatan tersebut, hal ini menghasilkan dampak baik bagi pelaksana dan mahasiswa itu sendiri. Selain itu adanya fitur jadwal saya membantu mahasiswa agar tidak melewatkan kegiatan tersebut. Hal ini dinilai dapat mengurangi kemungkinan tidak terpenuhinya target peserta kegiatan berdasarkan ketersampaian informasi.

## 4. Spesifikasi teknis lingkungan pengembangan
[`^ kembali ke atas ^`](#) 
### 4.1. Sofware
![software](https://user-images.githubusercontent.com/60083962/122145336-40e74980-ce7f-11eb-9627-ec605ea0ceac.png)

Berikut perangkat lunak yang digunakan untuk mengembangkan IPB's Event :
* Trello
* Github
* Figma
* draw.io
* Visual Studio Code
* Chrome
* XAMPP

### 4.2. Hardware
Berikut spesifikasi laptop yang digunakan untuk mengembangkan IPB's Event :
* Processor: Intel Core i5-6200U CPU @ 2.30GHz 2.40
* RAM: 8.00GB
* OS: Windows 10

### 4.3. Tech Stack
* Frontend : HTML, CSS
* Backend 
  * Programing Language : PHP
  * Framework : Laravel
  * Web Server : XAMPP
  * DBMS : MYSQL


## 5. Konsep OOP yang digunakan
[`^ kembali ke atas ^`](#) 
### Encaptulation
Encapsulation atau pengkapsulan adalah membungkus class dan menjaga propertu di dalam class tersebut supaya tidak diakses sembarangan oleh class lainnya. Encapsulation akan mempermudah dalam penggunaan suatu objek atau pembacaan kode karena informasinya sudah satu kesatuan dan tidak perlu membaca atau mengetahui secara rinci. 
Berikut adalah salah satu penerapan Encapsulation :
```
...
class homeMhsController extends Controller
{
public function detailorg($idevent){
        $data = Event::find($idevent);
        return view('detailorg',['event'=>$data] );
    }
}    
...
```
### Inheritance
Inheritance atau pewarisan adalah hubungan antara objek utama yang mewariskan attribute maupun method yang dimilikinya kepada objek baru lainnya, baik itu sebagian maupun keseluruhan. Sehingga objek baru ini akan mewarisi sifat dari objek induknya.
Berikut adalah salah satu penerapan Inheritance :
```
class Org extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'lembaga',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
```


## 6. Tipe desain pengembangan yang digunakan
[`^ kembali ke atas ^`](#) 
### Model 
Model merepresentasikan struktur data dan digunakan untuk berinteraksi dengan database. Komponen model ini bertugas untuk mengolah data seperti mendapatkan data, menyimpan data, mengedit data, dan menghapus data. Berikut adalah model yang diterapkan pada sistem IPB's Event
* Model Event 
* Model Org
* Model User


### View
View merupakan User Interface dari aplikasi. View berfungsi untuk menampilkan informasi atau merepresentasikan tampilan kepada Pengguna.
Laravel memiliki fungsi Blade yang digunakan untuk menampilkan View pada pengguna.
Beriku adalah penerapan View pada Mahasiswa :
* Halaman Registrasi : halaman awal yang akan di tampilan untuk melakukan registrasi
* Halaman Login : halaman awal yang akan di tampilkan untuk melakukan login untuk masuk ke aplikasi.
* Halaman Home : halaman yang akan menampilkan kegiatan yang sedang membuka pendaftaran.
* Halaman Deskripsi Event : halaman yang berisi informasi dari kegiatan yang dipilih mahasiswa.
* Halaman Pendaftaran : halaman yang akan digunakan mahasiswa ketika akan mendaftar di suatu kegiatan

Berikut adalah penerapan View pada Organisasi Panitia Event
* Halaman Registrasi : halaman awal yang akan di tampilan untuk melakukan registrasi
* Halaman Login : halaman awal yang akan di tampilkan untuk melakuakn login untuk masuk ke aplikasi
* Halaman Home : halaman yang akan menampilkan kegiatan yang sedang membuka pendaftaran.
* Halaman Create Event : berisin formulir untuk membuat informasi kegiatan.
* Halaman Deskripsi Event : halaman yang berisi informasi dari kegiatan yang dipilih. Pada halaman ini User Organisasi dapat mengedit infomasi kegiatan  dan dapat pula menghapus informasi kegiatan yang telah Organisasi buat.
* Halaman Edit Event : halaman yang digunakan oleh Organisasi untuk mengedit informasi dari kegiatan yang telah Organisasi buat


### Controller 
Controller berfungsi untuk menjebatani antara Model dengan View. Controler akan menerima dan memerespon respon yang datang dam nengubah ke dalam bentuk perintah terhadap view dan model.
Berikut adalah Controller yang diterapkan:
* Auth Controller
* Event Controller
* Home Controller
* User Controller
* Organisasi Controller

## 7. Hasil dan Pembahasan
[`^ kembali ke atas ^`](#) 
### 7.1. Use case diagram 
Berikut adalah rancangan Use Case dari sistem yang kami kembangkan. Use Case ini terdiri dari 2 aktor yaitu Mahasiswa dan Organisasi atau Panitia Event.

 <img src="https://user-images.githubusercontent.com/60084059/122012302-38dbcb00-cde7-11eb-8c3e-d0137e08b7ea.png">

### 7.2. Activity diagram
Berikut adalah rancangan Activity Diagram dari sistem yang kami kembangkan. Activity Diagram yang kami buat kami bagi menjadi 2 sisi, yaitu dari sisi Mahasiswa dan sisi Organisasi.
* Mahasiswa
 <img height="800" src="https://user-images.githubusercontent.com/60084059/122012305-3a0cf800-cde7-11eb-9db4-bacac2340d79.png">

* Panitia Event (Organisasi)
 <img height="800" src="https://user-images.githubusercontent.com/60084059/122012308-3aa58e80-cde7-11eb-851b-673923397350.png">
 
### 7.3. Class diagram
 <img height="1200" src="https://user-images.githubusercontent.com/60084059/122148153-409d7d00-ce84-11eb-9865-7f6a58848e90.png">

### 7.4. Entity Relationship Diagram (ERD)
 <img height="800" src="https://user-images.githubusercontent.com/60084059/122012313-3aa58e80-cde7-11eb-93ad-2a0ca08f28f1.png">

### 7.5. Arsitektur Sistem
![image](https://user-images.githubusercontent.com/60084059/122150563-28c7f800-ce88-11eb-8fad-17943e36ad49.png)
- User melakukan request ke Controler
- Controler akan menghubungin Model untuk berinteraksi dengan Database
- Kemudian Controler akan merender Respon ke View 
- Kemudian terpresentasikan pada user

### 7.6. Fungsi utama yang di kembangkan
Fungsi utama yang dikembangkan dari IPB's Event adalah sebagai Organisasi dapat mendaftarkan suatu kegiatannya pada aplikasi ini dan muncul pada beranda aplikasi kemudian sebagin user Mahasiswa dapat melihat dan mendaftarkan diri kegiatan yang ada di aplikasi ini.

### 7.7. Fungsi CRUD
* Create : Organisasi dapat menambahkan kegiatan yang mereka selenggarakan.
* Read : Menampilkan kegiatan yang di daftarkan Organisasi pada beranda.
* Update : Organisasi dapat mensunting informasi dari kegiatan yang mereka daftarkan.
* Delete : Organisasi dapat menghapus kegiatan yang telah mereka daftarkan.

## 8. Hasil Implementasi
[`^ kembali ke atas ^`](#) 
### 8.1 Screenshot sistem
* Organisasi
  * Page Login
![orglog](https://user-images.githubusercontent.com/60083962/122143827-72aae100-ce7c-11eb-8d47-0d81902c2487.png)
  * Page Register  
![orgreg](https://user-images.githubusercontent.com/60083962/122143899-9706bd80-ce7c-11eb-8d19-5e93e15436a0.png)
  * Page Home 
  ![homeORG](https://user-images.githubusercontent.com/60084059/122903082-452cce80-d379-11eb-80df-9b55530357fa.png)
  * Page Create Event
 ![homeORG](https://user-images.githubusercontent.com/60084059/122151525-eacbd380-ce89-11eb-8c68-9ac3302bcd43.png)
  * Page Deskripsi Event
 ![detailORG](https://user-images.githubusercontent.com/60084059/122151518-e8697980-ce89-11eb-9df7-d403d8cf05a3.png)
  * Page Edit Event
  

* Mahasiswa
  * Page Login
  * Page Register
  * Page Home
  ![homeMHS](https://user-images.githubusercontent.com/60084059/122903121-4e1da000-d379-11eb-9137-483b2a73b47c.png)
  * Page Deskripsi Event
![detailMHS](https://user-images.githubusercontent.com/60084059/122151502-e0a9d500-ce89-11eb-838c-e12f10329dda.png)
  * Page Pendaftaran
  


## 9. Saran untuk pengembangan selanjutnya
[`^ kembali ke atas ^`](#) 
* Menambahkan opsi tiket kegiaatan berbayar dan menambahkan mekanisme pembayaran
* Menambhakan fitur remainder yang terkoneksi dengan google calender atau sejenisnya
* Menambahkan list daftar event yang diikuti

## 10. Developer dan jobdeks
[`^ kembali ke atas ^`](#) 
 Nama |NIM | Jobdesk |
 :---:|:---:| :---:|
Lathifah Kurnia K | G64180023 | Front End, Sistem Analyst, UI/UX Designer |
Tia Isnawati Noor| G64180034 | System Analyst, UI/UX Designer |
Ulfainil Aisyah |  G64180045 | Full Stack, UI/UX Designer|
Hana Salsabila |  G64180051 | Project Manager, Full Stack, UI/UX Designer, Database|


## Dokumentasi
[`^ kembali ke atas ^`](#) 
 <br>
* [Figma](https://www.figma.com/file/v85RjAcrhUs8eYjj5TVxZ0/PSBO-JAYA!)
* [Trello](https://trello.com/b/0LYTtp0B/psbo-jaya)
* [Draw,io](https://app.diagrams.net/#G1-piRn1aYgA6oMaIT3HS1CoyRe86llh3A)


## Referensi
[`^ kembali ke atas ^`](#) 
[MVC](https://medium.com/@sagarmaheshwary31/laravel-5-8-from-scratch-intro-setup-mvc-basics-and-views-74d46f93fe0c) 
[Model](https://www.iltekkomputer.com/tutorial-laravel-5-7-part-3-cara-memahami-konsep-mvc-di-framework-laravel/) 
[MVC](https://www.codetutors.org/what-mvc-is-and-how-does-this-pattern-work-in-laravel-8/)
[MVC](https://www.niagahoster.co.id/blog/mvc-adalah)

[Konsep OOP](http://repository.uinsu.ac.id/9202/1/2.%20Suendri%20-%20Modul%20Praktikum%20PBWL%202020.pdf)
[Konsep OOP](https://glints.com/id/lowongan/oop-adalah/#.YMjzgGgza01)
[Konsep OOP - Inheritage](https://www.dicoding.com/blog/apa-itu-oop-pada-java-beserta-contohnya/)
