# Quiz 2 Pemrograman Web

> Nama : Dimas Tri Mustakim
> 
> NIM : 205150200111049

# SOAL QUIZ

1. Buatlah program untuk menghitung menghitung kebutuhan granit lantai. Requirement program akan dijelaskan pada poin 2 dst.
2. Dalam kasus ini. Granit lantai memiliki berbagai ukuran, mulai dari 20 x 20, 60 x 60, 80x80, 100x100
3. Rule perhitungan granit adalah sebagai berikut :
  * Hitung Luasan Area yang Akan Dipasang Granit (m2)
  * Tentukan Jumlah dan ukuran Granit Lantai per Dusnya . Misalnya ukuran 20 x 20 biasanya berisi 25 pcs, jumlah tersebut akan cukup untuk menutup lantai seluas 1 m2. Untuk granit lantai dengan ukuran 60 x 60 biasanya berisi 4 pcs per dusnya, maka 1 dus granit lantai ukuran 60 x 60 bisa menutup lantai seluas 1,44 m2.
  * Hitung Kebutuhan Granit Lantai Berdasarkan Ukuran Granit dan Luasan Area. Misalnya jika area yang akan dipasang granit berukuran 4 x 5 meter, maka luasan area tersebut adalah 20 meter. Apabila Anda ingin menggunakan granit berukuran 60 x 60 cm, maka Anda perlu menghitungnya dengan cara berikut:
    1. Luasan area : 20 meter
    2. Ukuran granit : 60 x 60 cm atau 0,36 meter
    3. Kebutuhan granit : 20 meter ÷ 0,36 meter = 55,55 dibulatkan menjadi 56 pcs

4. Program akan menerima inputan berdasarkan requirement dan akan menampilkan total kebutuhan granit lantai 

# Mekanisme pengerjaan :

1. Program dibuat dengan menggunakan bahasa PHP
2. Program dibuat dengan menerapkan dependency management
3. Program dibuat dengan pattern MVC
4. Setelah program selesai dibuat lakukan pengujian unit dengan menggunakan PHP Unit
5. Setelah program dan skenario pengujian sudah dibuat, lakukan presentasi & rekam secara individu tentang program yang anda buat termasuk cara kerja fungsi, MVC dan ujicoba pengujian unit (presentasi dapat melalui zoom/gmeet, wajah wajib terlihat )
6. Video presentasi wajib diunggah ke gdrive dan dapat di share link (tanpa request access) ke  text field yang tersedia pada soal ini
7. Source code di kompres dalam format .zip dan di unggah pada soal ini (format file : quiz2_nim_nama)

## Usage

### Database Setup
This app uses MySQL. To use something different, open up config/Database.php and change the default driver.

To use MySQL, make sure you install it, setup a database and then add your db credentials(database, username and password) to the .env.example file and rename it to .env

### Migrations
To create all the nessesary tables and columns, run the following
```
php artisan migrate
```

### Seeding The Database
To add the dummy listings with a single user, run the following
```
php artisan db:seed
```

### File Uploading
When uploading listing files, they go to "storage/app/public". Create a symlink with the following command to make them publicly accessible.
```
php artisan storage:link
```

### Running Then App
Upload the files to your document root, Valet folder or run 
```
php artisan serve
```
## License

Licensed under the [MIT license](https://opensource.org/licenses/MIT).