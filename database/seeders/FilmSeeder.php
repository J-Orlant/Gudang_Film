<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::create([
            'banner' => 'alita.jpg',
            'video' => 'alita.mp4',
            'trailer' => 'alitatrailer.mp4',
            'name' => 'Alita',
            'synopsis' => 'Alita terbangun di dunia masa depan yang tak ia kenal, dan tanpa ingatan tentang siapa dirinya. Ia kemudian dibawa oleh Ido, seorang dokter simpatik yang menyadari bahwa di dalam tubuh robot Alita yang sempat terbengkalai itu terdapat hati dan jiwa seorang wanita muda dengan kisah masa lalu yang luar biasa',
            'producer' => 'James Cameron, Jon Landau, David Valdes',
            'duration' => '2 hours 2 min',
            'genre' => 'Action/Sci-fi',
            'type' => 'f',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'bumblebee.jpg',
            'video' => 'bumblebee.mp4',
            'trailer' => 'bumblebeetrailer.mp4',
            'name' => 'bumblebee',
            'synopsis' => 'Alita terbangun di dunia masa depan yang tak ia kenal, dan tanpa ingatan tentang siapa dirinya. Ia kemudian dibawa oleh Ido, seorang dokter simpatik yang menyadari bahwa di dalam tubuh robot Alita yang sempat terbengkalai itu terdapat hati dan jiwa seorang wanita muda dengan kisah masa lalu yang luar biasa',
            'producer' => 'James Cameron, Jon Landau, David Valdes',
            'duration' => '2 hours 2 min',
            'genre' => 'Action/Sci-fi',
            'type' => 'f',
            'release' => 2019,
        ]);

        // anime
        Film::create([
            'banner' => 'conan.jpg',
            'video' => 'conan.mp4',
            'trailer' => 'conantrailer.mp4',
            'name' => 'Conan',
            'synopsis' => 'Shinichi Kudo, seorang detektif SMA berusia 18 tahun yang biasanya membantu polisi memecahkan kasus, diserang oleh 2 anggota sindikat misterius ketika mengawasi sebuah pemerasan. Ia kemudian diberi minum obat racun APTX 4869 yang baru selesai dikembangkan untuk membunuhnya. Namun, karena sebuah efek samping yang jarang terjadi yang tidak diketahui anggota sindikat tersebut, racun tersebut mengakibatkan tubuhnya mengecil seperti anak kecil berusia tujuh tahun setelah mereka meninggalkannya',
            'producer' => 'Michihiko Suwa, Masahito Yoshioka',
            'duration' => '30 min',
            'genre' => 'Anime/Sci-fi',
            'type' => 'p',
            'release' => 2019,
        ]);

        // comedy
        Film::create([
            'banner' => 'warkodki.jpg',
            'video' => 'warkodki.mp4',
            'trailer' => 'warkopdkitrailer.mp4',
            'name' => 'Warkodki',
            'synopsis' => 'Film yang menghidupkan kembali legenda trio komedi Warkop. Dono, Kasino dan Indro kembali beraksi di tengah hiruk pikuknya kota DKI Jakarta. Mereka sekali lagi berperan sebagai personel sebuah Lembaga Swasta yang bernama CHIIPS (Cara Hebat Ikut-Ikutan Penanggulangan Sosial). Walaupun di dalam diri mereka dipenuhi semangat yang menggelora dalam menjalankan tugas-tugasnya melayani masyarakat, namun kekacauan dan huru-hara selalu mereka timbulkan akibat aksi mereka yang konyol dan selalu mengocok perut.',
            'producer' => 'Frederica',
            'duration' => '1 hours 50 min',
            'genre' => 'Comedy/Drama',
            'type' => 'p',
            'release' => 2020,
        ]);

        // Drama
        Film::create([
            'banner' => 'parasite.jpg',
            'video' => 'parasite.mp4',
            'trailer' => 'parasitetrailer.mp4',
            'name' => 'Parasite',
            'synopsis' => 'Keluarga Ki-taek beranggotakan empat orang pengangguran dengan masa depan suram menanti mereka. Suatu hari Ki-woo anak laki-laki tertua direkomendasikan oleh sahabatnya yang merupakan seorang mahasiswa dari universitas bergengsi agar Ki-woo menjadi guru les yang dibayar mahal dan membuka secercah harapan penghasilan tetap. Dengan penuh restu serta harapan besar dari keluarga, Ki-woo menuju ke rumah keluarga Park untuk wawancara. Setibanya di rumah Mr. Park pemilik perusahaan IT global, Ki-woo bertemu dengan Yeon-kyo, wanita muda yang cantik di rumah itu. Setelah pertemuan itu, serangkaian kejadian dimulai.',
            'producer' => 'Bong joon-ho, Jang yeong-hwan, Kwak sin-ae, Yang kwon moon',
            'duration' => '2 hours 12 min',
            'genre' => 'Drama/Mystery',
            'type' => 'p',
            'release' => 2019,
        ]);

        // Horror
        Film::create([
            'banner' => 'danur3.jpg',
            'video' => 'danur3.mp4',
            'trailer' => 'danur3trailer.mp4',
            'name' => 'Danur 3',
            'synopsis' => 'Setelah bersahabat dengan hantu-hantu kecilnya selama bertahun-tahun, Risa (Prilly Latuconsina) yang semakin dewasa mulai merasa bahwa dirinya harus memiliki kehidupan normal seperti perempuan lainnya. Apalagi sekarang Risa sudah memiliki pacar bernama Dimas (Rizky Nazar), yang bekerja sebagai penyiar radio. Risa bahkan tidak menceritakan kepada Dimas tentang kemampuannya melihat hantu, dan kenyataan bahwa dia memiliki 5 sahabat kecil yang bukan manusia. Persahabatan Risa dan Peter CS menjadi goyah, setelah Risa merasa Peter CS mulai mengusili Dimas. Risa akhirnya memilih menutup mata batinnya agar dia bisa memulai hidup normal. Tapi ternyata, setelah menutup mata batinnya, mulai terjadi kejadian aneh.',
            'producer' => 'Manoj punjabi, K.K Dheeraj',
            'duration' => '1 hours 30 min',
            'genre' => 'Horror/Drama',
            'type' => 'p',
            'release' => 2019,
        ]);

        // Romance
        Film::create([
            'banner' => 'peelbound.jpg',
            'video' => 'peelbound.mp4',
            'trailer' => 'peelboundtrailer.mp4',
            'name' => 'Speelbound',
            'synopsis' => 'Menceritakan kisah dari Yeo-Ri yang diperankan oleh Son Ye-Jin, seorang wanita muda yang sejak kecil dapat melihat hantu.Sebab itu, banyak hal-hal tak terduga sering terjadi pada orang yang berada di sekitar Yeo Ri. Karena kekuatan alami yang la miliki Yeo-Ri menjauhkan diri dari dunia luar.Di sisi lain, Jo-Goo diperankan oleh Lee Min-Ki adalah seorang pesulap jalanan. Suatu ketika Dia menonton pertunjukkannya.Jo Goo tertarik dengan Yeo Ri, sosok wanita yang hadir diantara para penonton. ',
            'producer' => 'Won-tae lee, An young jin',
            'duration' => '1 hours 54 min',
            'genre' => 'Romance/Horror',
            'type' => 'p',
            'release' => 2011,
        ]);
    }
}
