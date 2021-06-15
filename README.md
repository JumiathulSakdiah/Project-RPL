<p align="center">
  <img src="https://upload.wikimedia.org/wikipedia/commons/1/15/Bogor_Agricultural_University_%28IPB%29_symbol.svg" width=300px>
</p>          
<div align="center">
  <h1>DARING REMINDER</h1>
  <b>Rekayasa Perangkat Lunak (KOM331)<br>
  Kelompok 7 Praktikum 2</br>
  <b>Asisten Praktikum : </br>
  <b> 1. Ali Naufal Ammarullah</br>
  <b>  2. M Fauzan Ramadhan</br>
  <br><br>
  <table>
    <tr>
      <th></th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Role</th>
    </tr>
    <tr>
      <td>1</td>
      <td>M. Lutfi Allam</td>
      <td>G64190093</td>
      <td>BackEnd</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Risda Awalia</td>
      <td>G64190106</td>
      <td>Database Analyst</td>
    </tr>
    <tr>
      <td>3</td>
      <td>M Akmal Khairurrahman</td>
      <td>G64190110</td>
      <td>FrontEnd</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Jumiathul Sakdiah</td>
      <td>G64180008</td>
      <td>Project Manager</td>
    </tr>
  </table>
</div>

## DESKRIPSI SINGKAT APLIKASI
Daring Reminder merupakan aplikasi web yang dapat digunakan oleh seluruh pelajar/mahasiswa untuk pengelolaan waktu sehari-hari dan mengorganisasikan tugas serta kegiatan lainnya. Diharapkan melalui aplikasi ini, para mahasiswa dapat lebih baik dalam mengelola waktu untuk belajar serta mengerjakan tugas.
Aplikasi ini memiliki 3 fitur utama yaitu fitur agenda, fitur catatan, dan fitur jadwal. Fitur agenda digunakan untuk mengingatkan tenggat waktu atau deadline pengumpulan tugas user, melalui fitur ini user dapat memasukkan tanggal akhir pengumpulan tugas dan memasukkan jadwal ujian berdasarkan mata kuliahnya. Selanjut nya fitur catatan,melalui fitur ini user dapat menuliskan apa saja tugas serta rincian tugas nya sehingga diharapkan user tidak akan lupa apa saja tugas yang dimilikinya, selain itu melalui fitur ini pengguna dapat memasukkan jadwal berdasarkan subjek/mata kuliah dan memasukkan reminder. Fitur ini juga tersambung ke fitur selanjutnya yaitu fitur jadwal di mana ketika pengguna sudah memasukkan jadwal ke berdasarkan subjeknya, maka secara otomatis jadwal akan terlihat di fitur jadwal.Lalu untuk fitur jadwal, fitur ini sama seperti kalender pada umumnya, akan tetapi berisi kan mata kuliah apa saja yang ada pada hari bersangkutan dan apakah ada deadline tugas atau tidak, sehingga diharapkan user tidak lupa dengan jadwal pelajaran di hari tersebut.

## USER ANALYSIS
### User Story
User story dari aplikasi `Daring Reminder` sebagai berikut :
1. Saya sebagai mahasiswa, di masa kuliah daring seperti ini, saya butuh aplikasi pengingat waktu deadline tugas saya, agar saya tidak lupa untuk mengerjakan nya.
2. Saya sebagai mahasiswa, di masa kuliah daring seperti ini, saya butuh aplikasi yang bisa membantu saya untuk mengatur jadwal tugas yang saya miliki, agar lebih terorganisir tugas-tugas saya

## SPESIFIKASI LINGKUNGAN PENGEMBANGAN
### Hardware :
- Processor : 1 gigahertz (GHz)
- Graphics Card : DirectX 9 dengan drive WDDM 1.0
- RAM : 1 GB

### Software :
- Framework : Vue Js dan Laravel
- Database : MySQL
- Server : Apache
- Text Editor/IDE : Visual Studio Code atau Sublime Text 3 

### Lainnya :
- Version Control dan Collaboration Platform : Github
- Teknologi : CSS/HTML, Javascript, dan PHP

## HASIL DAN PEMBAHASAN

### 1. Use Case Diagram
![rpllll](https://user-images.githubusercontent.com/74283988/121857468-dcfa3f00-cd1f-11eb-96f5-3b0ce10f7a0a.png)

### 2. Activity Diagram
- Activity Diagram menggunakan Fitur Agenda : 

![fitur agenda 1](https://user-images.githubusercontent.com/74283988/121857667-116dfb00-cd20-11eb-96af-a607c05aba5c.png)

- Activity Diagram menggunakan Fitur Catatan : 

![fitur subjek](https://user-images.githubusercontent.com/74283988/121857715-1cc12680-cd20-11eb-826b-cc07255c8bc9.png)

- Activity Diagram menggunakan Fitur Jadwal : 

![fitur jadwal](https://user-images.githubusercontent.com/74283988/121857780-277bbb80-cd20-11eb-9d01-3ab8f55ebb59.png)

### 3. Class Diagram

### 4. Entity Relationship Diagram

### 5. Arsitektur Sistem
![arsitektur-rpl](https://user-images.githubusercontent.com/74283988/121891705-00d07b80-cd46-11eb-963d-1aaafb1a0036.png)

### 6. Fungsi Utama yang Dikembangkan
#### a. Fungsi Fitur Agenda :

User dapat menggunakan fitur Agenda untuk mengingatkan tenggat waktu atau deadline pengumpulan tugas user, melalui fitur ini user dapat memasukkan tanggal akhir pengumpulan tugas dan memasukkan jadwal ujian berdasarkan mata kuliahnya, selain itu melalui fitur ini pengguna dapat memasukkan reminder sebagai pengingat batas akhir pengumpulan tugas

#### b. Fungsi Fitur Catatn :

User dapat menggunakan fitur catatan untuk menuliskan apa saja tugas serta rincian tugas nya sehingga diharapkan user tidak akan lupa apa saja tugas yang dimilikinya, selain itu melalui fitur ini pengguna dapat memasukkan jadwal berdasarkan subjek/mata kuliah. Fitur ini juga tersambung ke fitur selanjutnya yaitu fitur jadwal di mana ketika pengguna sudah memasukkan jadwal ke berdasarkan subjeknya, maka secara otomatis jadwal akan terlihat di fitur jadwal.

#### c. Fungsi Fitur Jadwal :

User dapat menggunakan fitur jadwal untuk memasukkan mata kuliah apa saja yang ada pada hari bersangkutan dan apakah ada deadline tugas atau tidak, sehingga diharapkan user tidak lupa dengan jadwal pelajaran di hari tersebut. User bisa mengklik hari dan memasukkan mata kuliah nya.

### 7. Fungsi CRUD
#### a. Fungsi Login :
User melakukan `CREATE` akun kemudian akan datanya akan di `READ` oleh database

#### b. Fungsi menambahkan jadwal:
User melakukan `CREATE` jadwal dengan menambahkan jadwal serta tugas di hari yang bersangkutan. User juga dapat `DELETE` tugas jika sudah selesai.

## HASIL IMPLEMENTASI
- Screenshot Sistem

- Link Aplikasi

## TESTING 

## SARAN PENGEMBANGAN SELANJUTNYA
- Fitur-fitur nya bisa lebih diperjelas lagi fungsi nya
- Pengembangan aplikasi nya bisa lebih cepat dan tidak memakan waktu lama
- Fitur yang sudah ada bisa lebih dikembangkan lagi
