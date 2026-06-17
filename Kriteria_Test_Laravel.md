# DOKUMEN KRITERIA TEST SKILL: DEVELOPER LARAVEL
**Proyek: Sistem Manajemen Ritel Sederhana**

## 1. Deskripsi Proyek
Peserta diminta untuk membangun sebuah aplikasi web berbasis Fullstack Laravel untuk manajemen ritel sederhana. Aplikasi ini fokus pada pengelolaan data kategori produk dan item barang, serta manajemen pengguna dengan tingkatan akses (Role-Based Access Control).

## 2. Stack Teknologi (Wajib)
* **Framework:** Laravel (Versi terbaru direkomendasikan).
* **Package Manager:** Composer (PHP) & NPM (JavaScript).
* **Frontend Styling:** Tailwind CSS.
* **Authentication:** Laravel Breeze (Starter Kit).
* **Database:** MySQL / MariaDB.

## 3. Struktur Database
Database minimal terdiri dari 3 tabel utama:

| Tabel | Kolom Minimal | Deskripsi |
| :--- | :--- | :--- |
| **users** | id, name, email, password, role, timestamps | Role berisi: 'admin' atau 'user'. |
| **categories** | id, name, timestamps | Kategori barang. |
| **items** | id, category_id, name, price, stock, timestamps | Barang ritel. |

**Relasi:**
* **Category 1 : M Item** (Satu kategori dapat memiliki banyak item; satu item hanya termasuk dalam satu kategori).

## 4. Fitur Utama (Functional Requirements)
1. **Autentikasi:**
    * Login menggunakan Email dan Password.
    * Fitur Logout yang aman.
2. **Manajemen Kategori (CRUD):**
    * Tambah, Lihat, Ubah, dan Hapus data kategori.
3. **Manajemen Item (CRUD):**
    * Tambah, Lihat, Ubah, dan Hapus data item.
    * Input item harus memilih kategori yang tersedia (Dropdown/Searchable select).
4. **Manajemen User (Khusus Admin):**
    * Fitur untuk melihat daftar user dan mengelola akun user.

## 5. Hak Akses & Middleware (Authorization)
Aplikasi harus menerapkan pembatasan akses menggunakan Middleware:
* **Role Admin:** Memiliki akses penuh ke seluruh fitur sistem (Dashboard, Kategori, Item, dan Manajemen User).
* **Role User:** Hanya dapat mengakses Dashboard, Kategori, dan Item. Dilarang keras mengakses path atau fitur Manajemen User.
* Jika User biasa mencoba mengakses path Admin, sistem harus mengarahkan kembali (redirect) atau menampilkan pesan "Unauthorized".

## 6. Arsitektur & Standar Kode
* **MVC Pattern:** Memisahkan logika Model, View, dan Controller secara rapi.
* **Service Layer (Optional):** Jika terdapat logika bisnis yang kompleks, disarankan dipisahkan ke dalam Service Class.
* **Validation:** Menggunakan Request Validation untuk setiap input form.
* **Eloquent ORM:** Menggunakan fitur Eloquent untuk interaksi database dan relasi antar tabel.

---
**Catatan:**
* Pastikan peserta menyertakan file README untuk instruksi instalasi.
* Waktu pengerjaan: 1 - 2 hari.
