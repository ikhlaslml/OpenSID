<?php

/*
 *
 * File ini adalah bagian dari:
 *
 * OpenSID
 *
 * Sistem Informasi Desa sumber terbuka untuk memajukan desa
 *
 * Aplikasi dan kode sumber ini dirilis berdasarkan lisensi GPL V3
 *
 * Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * Hak Cipta 2016 - 2024 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 *
 * Dengan ini diberikan izin, secara gratis, kepada siapa pun yang mendapatkan salinan
 * dari perangkat lunak ini dan file dokumentasi terkait ("Aplikasi Ini"), untuk diperlakukan
 * tanpa batasan, termasuk hak untuk menggunakan, menyalin, mengubah, dan/atau mendistribusikan,
 * selama mematuhi syarat berikut:
 *
 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting dari Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.
 *
 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN, ATAU
 * KEWAJIBAN APA PUN YANG TIMBUL DARI PENGGUNAAN ATAU HAL LAINNYA TERKAIT APLIKASI INI.
 *
 * @package   OpenSID
 * @author    Tim Pengembang OpenDesa
 * @copyright Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * @copyright Hak Cipta 2016 - 2024 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license   http://www.gnu.org/licenses/gpl.html GPL V3
 * @link      https://github.com/OpenSID/OpenSID
 *
 */

/*
 *---------------------------------------------------------------
 * KONFIGURASI LINGKUNGAN APLIKASI
 *---------------------------------------------------------------
 *
 * Anda dapat memuat konfigurasi yang berbeda tergantung pada lingkungan yang digunakan.
 * Pengaturan lingkungan juga mempengaruhi log dan pelaporan kesalahan.
 *
 * Nilai yang dapat digunakan:
 *
 *     development (pengembangan)
 *     testing (pengujian)
 *     production (produksi)
 *
 * CATATAN: Jika Anda mengubah ini, pastikan juga mengubah kode error_reporting() di bawah.
 */
define('ENVIRONMENT', $_SERVER['CI_ENV'] ?? 'production');

/*
 *---------------------------------------------------------------
 * PELAPORAN KESALAHAN
 *---------------------------------------------------------------
 *
 * Setiap lingkungan memerlukan tingkat pelaporan kesalahan yang berbeda.
 * Secara default, mode pengembangan akan menampilkan semua kesalahan,
 * sedangkan mode pengujian dan produksi akan menyembunyikannya.
 */
switch (ENVIRONMENT) {
    case 'development':
        error_reporting(-1);
        ini_set('display_errors', 1);
        break;

    case 'testing':
    case 'production':
        ini_set('display_errors', 0);
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
        break;

    default:
        header('HTTP/1.1 503 Service Unavailable.', true, 503);
        echo 'Lingkungan aplikasi tidak dikonfigurasi dengan benar.';
        exit(1); // KELUAR DENGAN ERROR
}

/*
 *---------------------------------------------------------------
 * NAMA DIREKTORI SISTEM
 *---------------------------------------------------------------
 *
 * Variabel ini harus berisi nama direktori "system".
 * Atur jalurnya jika tidak berada dalam direktori yang sama dengan file ini.
 */
$system_path = 'vendor/codeigniter/framework/system';

/*
 *---------------------------------------------------------------
 * NAMA DIREKTORI APLIKASI
 *---------------------------------------------------------------
 *
 * Jika Anda ingin menggunakan direktori "application" yang berbeda dari default,
 * Anda dapat mengaturnya di sini. Direktori ini juga dapat diubah nama atau dipindahkan
 * ke lokasi lain di server Anda. Jika Anda melakukannya, gunakan jalur absolut (penuh).
 */
$application_folder = 'donjo-app';

/*
 *---------------------------------------------------------------
 * NAMA DIREKTORI VIEW
 *---------------------------------------------------------------
 *
 * Jika Anda ingin memindahkan direktori tampilan (view) ke luar dari direktori aplikasi,
 * atur jalurnya di sini. Direktori ini dapat diubah nama atau dipindahkan ke lokasi lain di server.
 * Jika dikosongkan, akan menggunakan lokasi standar dalam direktori aplikasi.
 */
$view_folder = '';

/*
 * --------------------------------------------------------------------
 * MUAT FILE BOOTSTRAP
 * --------------------------------------------------------------------
 *
 * Dan jalankan aplikasi...
 */
require_once BASEPATH . 'core/CodeIgniter.php';
