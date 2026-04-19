# 📘Dokumentasi Lengkap Praktikum Pemrograman Web 2
## 📰Sistem Informasi Portal Berita - CodeIgniter 4

Dokumentasi ini disusun sebagai laporan komprehensif pengerjaan Modul 1 hingga Modul 5. Proyek ini mendemonstrasikan transisi dari website statis menuju aplikasi web dinamis berbasis **MVC (Model-View-Controller)**.

---

## 👤 IDENTITAS SAYA :
* **Nama:** Muhamad Nabil Satriya Suntara
* **NIM:** 312410365
* **Kelas:** TI.24.A4/I241D
* **Matkul:** Pemrograman Website 2

---

## 🛠️ Analisis Struktur Modul Praktikum

### 🟢 Modul 1: Fondasi MVC & Routing
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
      git clone [https://github.com/Muhammadabill/Praktikum-1-5.git](https://github.com/Muhammadabill/Praktikum-1-5.git)
      cd Praktikum-1-5
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

## DI KARENAKAN FILE NYA TIDAK BISA DI UPLOAD SEMUA KE DALAM GITHUB, JADI SAYA MEMBUAT LINK UNTUK MENGAKSES SEMUA FILE NYA :
**https://drive.google.com/drive/folders/1WHwAuEmPI4pFm19ozLCxnSpQRe0vzdop?usp=drive_link**

## 📸 Bukti Hasil Praktikum

1. **Tampilan Home User:**
<img width="1910" height="1012" alt="Screenshot 2026-04-19 025843" src="https://github.com/user-attachments/assets/8ad0fb34-cbf0-42b8-8ef6-a1eff282932f" />

**TAMPILAN ARTIKEL:**
<img width="1919" height="1012" alt="Screenshot 2026-04-19 032637" src="https://github.com/user-attachments/assets/e7a94d8b-d6cd-4017-92a5-12c936748261" />

**TAMPILAN ABOUT:**
<img width="1919" height="1012" alt="Screenshot 2026-04-19 025911" src="https://github.com/user-attachments/assets/63dc7739-f12e-4c1e-a511-992d0d181742" />

**TAMPILAN CONTACT:**
<img width="1919" height="1013" alt="Screenshot 2026-04-19 025921" src="https://github.com/user-attachments/assets/698a1385-96aa-41c3-b534-8405c6699e66" />

2. **Dashboard Admin:**
<img width="1919" height="1019" alt="Screenshot 2026-04-19 030010" src="https://github.com/user-attachments/assets/5dfb9314-bd9f-49ff-a69e-40242f1b7e99" />

**TAMPILAN TAMBAH ARTIKEL:**
<img width="1919" height="1018" alt="Screenshot 2026-04-19 030926" src="https://github.com/user-attachments/assets/d7ac26d8-16ab-4e4c-942d-15fcf2ef21b4" />
<img width="1919" height="1018" alt="Screenshot 2026-04-19 031002" src="https://github.com/user-attachments/assets/8c0f5489-df63-4eb2-9b01-9bf4b309372b" />

**TAMPILAN UBAH ARTIKEL**
<img width="1919" height="1019" alt="Screenshot 2026-04-19 030045" src="https://github.com/user-attachments/assets/3803bcc5-ba31-46e5-830d-b544ecbc703e" />


3. **Fitur Pencarian:**
<img width="1296" height="230" alt="Screenshot 2026-04-19 032646" src="https://github.com/user-attachments/assets/cd3ee98b-ff80-4528-b17d-648b880071b1" />

4. **Halaman Login:**
<img width="1919" height="1023" alt="Screenshot 2026-04-19 030728" src="https://github.com/user-attachments/assets/c70ba4cf-8395-47f1-b751-5f5731d2043c" />


---
**Status Proyek:** Selesai (Modul 1-5) ✅
