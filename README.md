<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Konsep BarberQ

BarberQ merupakan solusi bagi mereka yang ingin mendapatkan layanan potong rambut dengan lebih praktis dan efisien. Dengan menggunakan aplikasi ini, pengguna dapat dengan mudah memanggil seorang barber profesional langsung ke lokasi mereka, tanpa harus repot pergi ke salon atau barber shop. Konsep aplikasi ini menggabungkan teknologi mobile dan jaringan profesional barber, menciptakan platform yang memudahkan para pengguna untuk merencanakan, memesan, dan menikmati layanan potong rambut secara personal dan eksklusif.

## Back End

Laman BarberQ menyimpan data user di database pada saat user register, sementara pada proses register terdapat validasi data agar user tidak menyimpan data asal. Password pada database sudah terenkripsi untuk sekuritas. Setelah register, user dapat login dan verifikasi identitas dengan benar. Setelah proses login selesai, user menuju home screen, menu utama pada laman berada pada opsi navbar. User memiliki saldo yang dapat di topup, saldo akan dipakai saat user menuju menu barber dan memilih salah satu shop. Masing-masing shop terdaftar pada database dan memiliki barber masing-masing, jika user membeli servis maka user akan menggunakan saldo dan dapat menulis feedback. Proses ini akan tercatat sehingga pada menu profile terlihat histori barbershop yang dipakai user dan feedback yang ditinggalkan.

