# 📘 Dokumentasi Praktikum Pemrograman Web 2
## 📰 Sistem Informasi Portal Berita (CodeIgniter 4)

Dokumen ini berisi rangkuman pengerjaan praktikum dari Modul 1 hingga Modul 5. Proyek ini menunjukkan proses pengembangan dari website sederhana menjadi aplikasi web dinamis berbasis arsitektur MVC (Model-View-Controller) menggunakan CodeIgniter 4.

---

## 👤 Identitas Mahasiswa
* **Nama :** Muhamad Nabil Satriya Suntara
* **NIM :** 312410365
* **Kelas :** TI.24.A4 / I241D
* **Mata Kuliah :** Pemrograman Web 2

  ---
  
## 🧩 Analisis Struktur Modul Praktikum

### 🟢 Modul 1 - Dasar MVC & Routing
Pada tahap awal, fokus utama adalah memindahkan paradigma PHP Native ke Framework.
* **Logika:** User meminta URL -> `Routes.php` mengarahkan ke `Controller` -> Controller memanggil `View`.
* **Implementasi:** Membuat `Controller Page.php` untuk menangani halaman statis (Home, About, Contact).
* **Pelajaran Penting:** Memahami bahwa logika bisnis tidak boleh diletakkan di dalam View.

### 🔵 Modul 2: CRUD & Interaksi Database
Tahap ini mengubah website menjadi dinamis dengan kemampuan mengelola data di MySQL.
* **Logika:** Membuat `ArtikelModel.php` sebagai jembatan ke tabel `artikel`.
* **Fitur Admin:** * **Create:** Form untuk input berita baru.
    * **Read:** Menampilkan data dari database ke dalam tabel HTML.
    * **Update:** Mengambil data berdasarkan ID untuk diedit kembali.
    * **Delete:** Menghapus data permanen dari database.
* **Konfigurasi:** Mengatur koneksi database pada file `.env`.

### 🟡 Modul 3: Templating (View Layout & View Cell)
Menerapkan prinsip **DRY (Don't Repeat Yourself)** agar kode lebih bersih.
* **View Layout:** Menggunakan satu file induk `layout/main.php`. Halaman lain hanya perlu "mengisi" bagian konten menggunakan `$this->extend()`.
* **View Cell:** Membuat komponen modular `ArtikelTerkini`. Komponen ini bisa dipanggil di halaman mana pun tanpa harus menulis ulang query database di setiap Controller.
* **Manfaat:** Jika ada perubahan pada Header atau Footer, cukup edit satu file saja.

### 🔴 Modul 4: Autentikasi & Security Filter
Melindungi area sensitif (Dashboard Admin) dari akses tanpa izin.
* **Alur Login:** Validasi `userpassword` menggunakan Session.
* **Filters:** Implementasi `AuthFilter.php`. Jika user mencoba akses `/admin` tanpa login, sistem otomatis menendang balik ke halaman `/login`.
* **Database:** Pembuatan tabel `user` untuk menyimpan kredensial admin.

### 🟣 Modul 5: Optimasi UX (Pagination & Searching)
Menyempurnakan antarmuka saat data sudah berjumlah banyak.
* **Pagination:** Mengganti `findAll()` menjadi `paginate(10)`. Ini mencegah *lag* pada browser jika data mencapai ribuan.
* **Searching:** Menggunakan metode `like()` pada query SQL untuk memfilter judul artikel berdasarkan kata kunci dari user.
* **Persistence:** Menggunakan `pager->only(['q'])` agar saat user pindah ke halaman 2, hasil pencarian kata kunci 'q' tidak hilang.

---

## 💻 Cara Instalasi Proyek

1.  **Clone & Setup:**
    ```bash

    ```
2.  **Database:**
    * Buat database bernama `lab_ci4`.
    * Import file `.sql` yang ada di folder `database/`.
3.  **Environment:**
    * Rename `env` menjadi `.env`.
    * Atur `database.default.username` dan `database.default.password` sesuai XAMPP kamu.
4.  **Run:**
    ```bash
    php spark serve
    ```

---


## 📸 Bukti Hasil Praktikum

1. **Tampilan Home User:**
<img width="1910" height="1012" alt="Screenshot 2026-04-19 025843" src="https://github.com/user-attachments/assets/a40927d7-7102-4db9-95dd-5788d00e9ed6" />

**TAMPILAN ARTIKEL:**
<img width="1919" height="1012" alt="Screenshot 2026-04-19 032637" src="https://github.com/user-attachments/assets/9e4dd2ab-80c1-4fc3-afc1-f4768d36bf69" />

**TAMPILAN ABOUT:**
<img width="1919" height="1012" alt="Screenshot 2026-04-19 025911" src="https://github.com/user-attachments/assets/fa9c3976-1de2-4171-875a-70730e4080ce" />

**TAMPILAN CONTACT:**
<img width="1919" height="1013" alt="Screenshot 2026-04-19 025921" src="https://github.com/user-attachments/assets/6425d873-fe1f-4bb8-b263-a4551c6e95d8" />

2. **Dashboard Admin:**
<img width="1919" height="1019" alt="Screenshot 2026-04-19 030010" src="https://github.com/user-attachments/assets/f8f8d4dc-aaf8-4c24-9cfe-42abad95c79a" />

**TAMPILAN TAMBAH ARTIKEL:**
<img width="1919" height="1018" alt="Screenshot 2026-04-19 030926" src="https://github.com/user-attachments/assets/c6ae8091-0534-403b-82a2-a75c49dc3bfe" />
<img width="1919" height="1018" alt="Screenshot 2026-04-19 031002" src="https://github.com/user-attachments/assets/ff60747a-fbe9-4864-adc3-e4d914323379" />

**TAMPILAN UBAH ARTIKEL**
<img width="1919" height="1019" alt="Screenshot 2026-04-19 030045" src="https://github.com/user-attachments/assets/dfbcacc0-90cd-4b2d-9825-333043346322" />


3. **Fitur Pencarian:**
<img width="1296" height="230" alt="Screenshot 2026-04-19 032646" src="https://github.com/user-attachments/assets/a964accc-7166-49a3-ac1e-e081b63e2f1c" />

4. **Halaman Login:**
<img width="1919" height="1023" alt="Screenshot 2026-04-19 030728" src="https://github.com/user-attachments/assets/c876bfde-827a-4450-89fb-686c06e337f5" />


---
**Status Proyek:** Selesai (Modul 1-5) ✅
