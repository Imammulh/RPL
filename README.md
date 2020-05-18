# Info KTP
Web pemberitahuan informasi tentang proses pembuatan e-KTP

## Anggota Kelompok
 - Rafi Solichin (**G64180068**)
 - Imam Mulhaq Rosyadi (**G64180047**)
 - Firda Agustin Kartika Pratiwi (**G64180116**)

## Latar Belakang
Peningkatan dalam berbagai bidang terus diupayakan oleh pemerintah, termasuk dalam hal kependudukan. Salah satu upaya tersebut terwujud dalam bentuk Kartu Tanda Penduduk (KTP) elektronik atau e-KTP. Sistem ini memudahkan pendataan penduduk serta memudahkan proses administrasi menjadi lebih fleksibel. Proses administrasi menjadi lebih mudah karena dalam hal ini data penduduk tersimpan dalam data kependudukan secara baik, dan masyarakat tidak perlu memperpanjang e-KTP lima tahun sekali.

Namun diatas itu semua, masyarakat masih merasakan beberapa kesulitan dalam pembuatan e-KTP ini, salah satunya dalam segi informasi. Sulitnya mengakses informasi terkait pembuatan e-KTP membuat masyarakat boros waktu, beberapa kali harus datang ke kantor kecamatan untuk mengetahui informasi mengenai sudah atau belum jadinya e-KTP yang dibuat.

## Tujuan
1.  Mempermudah akses informasi untuk masyarakat dalam pembuatan e-KTP    
2.  Mempermudah penyampaian informasi dari petugas kecamatan ke masyarakat

## Ruang Lingkup
### Minimum Requirement
1.  Operating System : Windows 7 or later
2.  Processor        : 2.0 Ghz Processor
3.  Memory           : 4GB DDR4-2400 / Pc4-19200
4.  Screen Resolution: 800x600 or later
### Engineering Process
Software dibuat menggunakan metode Scrum dengan prinspi-prinsip pendekatan agile

## Deskripsi Aplikasi
Sebuah web yang membantu masyarakat dalam mencari informasi terkait pembuatan e-KTP dan membantu petugas kecamatan menyampaikan informasi terkait selesainya proses pembuatan e-KTP.

## User Profile
Target dari aplikasi ini adalah seseorang yang baru saja membuat e-KTP dan bingung mencari informasi pemberitahuan tentang proses pembuatan e-KTP dan tidak tahu kapan harus mengambil e-KTP.

## User Story
1.  Sebagai seorang sipil, saya ingin mengetahui informasi mengenai proses pembuatan e-KTP
2.  Sebagai seorang sipil, saya ingin mengetahui informasi-informasi umum terkait pembuatan e-KTP

## Use Case Diagram
![usecase](https://user-images.githubusercontent.com/60084468/81479748-6c950a80-924f-11ea-9396-cfe2a0590401.png)


## Use Case Description
### Log In
![1](https://user-images.githubusercontent.com/60084468/82014838-a2028380-96a7-11ea-9c7c-bbbc6cac16a7.PNG)
### Mencari NIK
![2](https://user-images.githubusercontent.com/60084468/82014841-a3cc4700-96a7-11ea-9427-0e15b901ac06.PNG)
### Input Data e-KTP
![3](https://user-images.githubusercontent.com/60084468/82014849-a6c73780-96a7-11ea-8ba7-57cedd8c51df.PNG)
### Delete Data e-KTP
![4](https://user-images.githubusercontent.com/60084468/82014851-a890fb00-96a7-11ea-8203-c9e431c084eb.PNG)
### Edit Data Pembuat e-KTP
![5](https://user-images.githubusercontent.com/60084468/82014853-aa5abe80-96a7-11ea-8341-9974081b1e54.PNG)
![6](https://user-images.githubusercontent.com/60084468/82014860-ac248200-96a7-11ea-8462-0f6388b87e19.PNG)
### Report Data  yang Salah Pembuat e-KTP
![7](https://user-images.githubusercontent.com/60084468/82014863-ad55af00-96a7-11ea-9f61-497a848dc21c.PNG)
### Send Email to Registrant
![8](https://user-images.githubusercontent.com/60084468/82014865-ae86dc00-96a7-11ea-9dd5-8f66d58e54f1.PNG)
## Activity Diagram
![activitydiagram](https://user-images.githubusercontent.com/60084468/81522261-208fb600-9374-11ea-8f34-4b05ad078d0f.png)
## Gantt Chart
![Ganttchart](https://user-images.githubusercontent.com/60084317/82151351-573e6280-9885-11ea-9318-d9521bce4eba.jpg)

## ERD
![ERD-RPL](https://user-images.githubusercontent.com/60084468/82158781-288bb080-98b4-11ea-88bf-615bcad1d218.png)

## Hasil Implementasi Perangkat Lunak
### Landing Page
User memasukkan NIK guna mencari informasi yang dibutuhkan
![image](https://user-images.githubusercontent.com/60084468/82170406-876e1b80-98ee-11ea-989c-eba2b207c930.png)

### INFO KTP
User yang telah berhasil memasukkan NIK sesuai akan disuguhi oleh tampilan info dari KTP yang telah dibuat, jika salah memasukkan NIK maka user akan dikembalikan ke tampilan landing page
![image](https://user-images.githubusercontent.com/60084468/82171270-019f9f80-98f1-11ea-9671-9c49789b1699.png)

### Login Admin
Admin memasukkan user name dan password untuk mengakses data data KTP
![image](https://user-images.githubusercontent.com/60084468/82170470-b5ebf680-98ee-11ea-8d44-01b772a13b0c.png)

Dashboard Profil setelah login Admin
![image](https://user-images.githubusercontent.com/60084468/82170567-08c5ae00-98ef-11ea-9ebc-f2a612cfff87.png)

Page Edit Profil Admin
![image](https://user-images.githubusercontent.com/60084468/82170676-580bde80-98ef-11ea-8491-6b9f4bf14817.png)

### Dashboard Utama Admin
Dashboard Utama Admin berisi data data KTP yang telah diinput sebelumnya oleh admin
![image](https://user-images.githubusercontent.com/60084468/82170814-b769ee80-98ef-11ea-8244-a815009b9aad.png)

Data-data KTP yang masih dalam proses
![image](https://user-images.githubusercontent.com/60084468/82170938-13cd0e00-98f0-11ea-8bd0-6f8ba402e4d9.png)

Data-data KTP yang sudah selesai diproses dan bisa diambil di kecamatan terkait
![image](https://user-images.githubusercontent.com/60084468/82170999-3f4ff880-98f0-11ea-8f9f-9123dcd88ff9.png)

Show untuk melihat detil lengkap data KTP
![image](https://user-images.githubusercontent.com/60084468/82171022-55f64f80-98f0-11ea-85d8-8cc8d4db0aa9.png)

Edit untuk mengedit data KTP
![image](https://user-images.githubusercontent.com/60084468/82171096-88a04800-98f0-11ea-8b58-622e70013f42.png)

Delete untuk menghapus data KTP
![image](https://user-images.githubusercontent.com/60084468/82171452-8db1c700-98f1-11ea-9405-0386d7058ddd.png)

Tambah e-KTP untuk menambahkan data KTP
![image](https://user-images.githubusercontent.com/60084468/82171207-da48d280-98f0-11ea-970d-9077b5d84b5e.png)

## PAGE BANTUAN
![image](https://user-images.githubusercontent.com/60084468/82171625-26e0dd80-98f2-11ea-8636-d278f8d2a0a3.png)
