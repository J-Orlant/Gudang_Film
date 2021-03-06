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
        // Action
        Film::create([
            'banner' => 'alita.jpg',
            'video' => 'https://www.youtube.com/embed/w7pYhpJaJW8',
            'trailer' => 'alitatrailer.mp4',
            'name' => 'Alita',
            'synopsis' => 'Alita terbangun di dunia masa depan yang tak ia kenal, dan tanpa ingatan tentang siapa dirinya. Ia kemudian dibawa oleh Ido, seorang dokter simpatik yang menyadari bahwa di dalam tubuh robot Alita yang sempat terbengkalai itu terdapat hati dan jiwa seorang wanita muda dengan kisah masa lalu yang luar biasa',
            'producer' => 'James Cameron, Jon Landau, David Valdes',
            'duration' => '2 hours 2 min',
            'genre' => 'Action/Sci-fi/Romance/Thriller/Cyberpunk',
            'type' => 'f',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'bumblebee.jpg',
            'video' => 'https://www.youtube.com/embed/lcwmDAYt22k',
            'trailer' => 'bumblebeetrailer.mp4',
            'name' => 'bumblebee',
            'synopsis' => 'Dalam pelarian di tahun 1987, Bumblebee menemukan perlindungan di tempat rongsokan di sebuah kota kecil pinggir pantai California. Charlie, gadis yang tengah menyentuh usia 18 tahun dan sedang mencari jati diri, menemukan Bumblebee, yang banyak tergores dan rusak. Ketika berusaha memfungsikannya lagi, Charlie menyaksikan sendiri bahwa ini bukanlah mobil VW kodok berwarna kuning yang biasa',
            'producer' => 'Michael bay, Lorenzo di bonaventura, Tom desanto, Don murphy',
            'duration' => '1 hours 54 min',
            'genre' => 'Action/Sci-fi/Adventure/Fantasy',
            'type' => 'f',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'the-equalizer2.jpg',
            'video' => 'https://www.youtube.com/embed/HyNJ3UrGk_I',
            'trailer' => 'bumblebeetrailer.mp4',
            'name' => 'The equalizer 2',
            'synopsis' => 'Robert McCall (Denzel Washington) seorang mantan agen rahasia selalu berusaha memberikan keadilan bagi orang yang membutuhkannya. Hingga suatu ketika ia mengetahui bahwa sahabat lamanya, Susan Plummer (Melissa Leo) menjadi korban pembunuhan yang dilakukan musuhnya. Bagi McCall, ini adalah panggilan perang. Kini ia mencari tahu siapa yang telah membunuh temannya itu untuk membalaskan dendam.',
            'producer' => 'Todd black, Jason blumenthal',
            'duration' => '2 hours',
            'genre' => 'Action/Sci-fi/Thriller/Vigilante/Crime',
            'type' => 'f',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'The-Karate-Kid-box-1.jpg',
            'video' => 'https://www.youtube.com/embed/XY8amUImEu0',
            'trailer' => 'bumblebeetrailer.mp4',
            'name' => 'The karate kid',
            'synopsis' => 'Dre Parker tengah digembleng ilmu bela diri oleh gurunya. Kini, dalam sebuah ajang kejuaraan tahunan, dia harus menghadapi lawan-lawan yang jago kung fu.',
            'producer' => 'Will smith, Jada pinkett smith, James lassiter,Jerry weintraub',
            'duration' => '2 hours 13 min',
            'genre' => 'Action/Matrial arts/Adventure/Drama/Sports',
            'type' => 'f',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'valerian.jpg',
            'video' => 'https://www.youtube.com/embed/NNrK7xVG3PM',
            'trailer' => 'bumblebeetrailer.mp4',
            'name' => 'Valerian',
            'synopsis' => 'Velerian dan Laureline, dua agen stasiun luar angkasa bernama Alpha, harus melindungi kota dari kekuatan jahat yang tidak hanya mengancam nyawa makhluk hidup tapi juga masa depan semesta.',
            'producer' => 'Luc besson, virginie silla',
            'duration' => '2 hours 17 min',
            'genre' => 'Action/Sci-fi/Fantasy/Adventure',
            'type' => 'f',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'vanguard.jpg',
            'video' => 'https://www.youtube.com/embed/srgll3UD9W8',
            'trailer' => 'bumblebeetrailer.mp4',
            'name' => 'Vanguard',
            'synopsis' => 'Seorang akuntan menaruh harapan kepada organisasi misterius bernama Vanguard setelah dirinya menjadi sasaran kelompok paling mematikan di dunia.',
            'producer' => 'Stanley tong, Barbie tung, Eddie wung, Baolin zhou, Jackson pat',
            'duration' => '1 hours 47 min',
            'genre' => 'Action/Comedy/Spy/Thriller/Adventure',
            'type' => 'f',
            'release' => 2019,
        ]);

        // anime
        Film::create([
            'banner' => 'conan.jpg',
            'video' => 'https://www.youtube.com/embed/HSow7Ep6l_4',
            'trailer' => 'conantrailer.mp4',
            'name' => 'Conan',
            'synopsis' => 'Shinichi Kudo, seorang detektif SMA berusia 18 tahun yang biasanya membantu polisi memecahkan kasus, diserang oleh 2 anggota sindikat misterius ketika mengawasi sebuah pemerasan. Ia kemudian diberi minum obat racun APTX 4869 yang baru selesai dikembangkan untuk membunuhnya. Namun, karena sebuah efek samping yang jarang terjadi yang tidak diketahui anggota sindikat tersebut, racun tersebut mengakibatkan tubuhnya mengecil seperti anak kecil berusia tujuh tahun setelah mereka meninggalkannya',
            'producer' => 'Michihiko Suwa, Masahito Yoshioka',
            'duration' => '30 min',
            'genre' => 'Anime/Sci-fi/Mystery/Comedy/Crime',
            'type' => 'p',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'death-note.jpg',
            'video' => 'https://www.youtube.com/embed/NlJZ-YgAt-c',
            'trailer' => 'death-note.mp4',
            'name' => 'Death note',
            'synopsis' => 'Ceritanya mengisahkan tentang Light Yagami, seorang remaja jenius yang menemukan buku catatan asing misterius yang disebut "Death Note"???yang dimiliki oleh Shinigami bernama Ryuk, dan memberikan penggunanya kemampuan supernatural untuk membunuh siapa pun yang namanya tertulis pada buku tersebut.',
            'producer' => 'Roy lin, Dan lin, Jason hoffs, Masi oka',
            'duration' => '2 hours 60 min',
            'genre' => 'Anime/Mystery/Thriller/Psychological ',
            'type' => 'p',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'HELLOWORLD.jpg',
            'video' => 'https://www.youtube.com/embed/8S8nHyxlgpE',
            'trailer' => 'Helloworld.mp4',
            'name' => 'Hello World',
            'synopsis' => 'Perjalanan Waktu Demi Memperbaiki Masa Lalu. ... Hello World mengisahkan tentang seorang laki-laki bernama Naomi Katagaki yang hidup di sebuah kota di tahun 2027, dimana peradaban sudah sangat maju',
            'producer' => 'Tomohiko ito',
            'duration' => '1 hours 40 min',
            'genre' => 'Anime/Animation/Romance/Drama/Teen/Sci-fi',
            'type' => 'p',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'mugen-train.jpg',
            'video' => 'https://www.youtube.com/embed/bFwdl2PDAFM',
            'trailer' => 'Helloworld.mp4',
            'name' => 'Mugen train',
            'synopsis' => 'Tanjiro Kamado, bergabung dengan Inosuke Hashibira, seorang anak laki-laki yang dibesarkan oleh babi hutan yang memakai kepala babi hutan, dan Zenitsu Agatsuma, seorang anak laki-laki ketakutan yang mengeluarkan kekuatan sejatinya ketika dia tidur, di dalam Kereta Infinity dalam misi baru dengan seorang Pilar Api, Kyojuro Rengoku , Untuk mengalahkan iblis yang telah menyiksa orang-orang dan membunuh pembunuh iblis yang menentangnya!',
            'producer' => ' Hikaru kondo, Yuma takanashi,Akifumi fuijo',
            'duration' => '2 hours',
            'genre' => 'Anime/Action/Adventure/Fantasy/Hirostical/drama',
            'type' => 'p',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'neon-genesis.jpg',
            'video' => 'https://www.youtube.com/embed/ELz_W6lYv_E',
            'trailer' => 'Helloworld.mp4',
            'name' => 'Neon genesis evangelion',
            'synopsis' => 'Bercerita pada tahun 2015, di mana saat itu Bumi telah mengalami perubahan drastis semenjak bencana yang dinamakan "SECOND IMPACT". Dikatakan bencana itu terjadi karena sebuah meteor menghantam Bumi dan mengakibatkan naiknya lautan di seluruh Dunia',
            'producer' => 'Noriko Kobayashi',
            'duration' => '1 hours 30 min',
            'genre' => 'Anime/Mecha/Action/Thriller/Psychological/Science',
            'type' => 'p',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'op.jpg',
            'video' => 'https://www.youtube.com/embed/LHTYpWI3S6Q',
            'trailer' => 'Helloworld.mp4',
            'name' => 'One Piece',
            'synopsis' => 'Ceritanya mengisahkan petualangan Monkey D. Luffy, seorang anak laki-laki yang memiliki kemampuan tubuh elastis seperti karet setelah memakan Buah Iblis secara tidak disengaja. Dengan kru bajak lautnya, yang dinamakan Bajak Laut Topi Jerami, Luffy menjelajahi Grand Line untuk mencari harta karun terbesar di dunia yang dikenal sebagai "One Piece" dalam rangka untuk menjadi Raja Bajak Laut yang berikutnya.',
            'producer' => 'Eiichiro oda',
            'duration' => '29 min',
            'genre' => 'Anime/Adventrue/Fantasy',
            'type' => 'p',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'your-name.jpg',
            'video' => 'https://www.youtube.com/embed/xU47nhruN-Q',
            'trailer' => 'Helloworld.mp4',
            'name' => 'Kimi No Nawa',
            'synopsis' => 'Kimi no Nawa menceritakan tentang dua remaja yang bernama Mitsuha Miyamizu dan Taki Tachibana yang saling bertukar tubuh satu sama lain. Selama bertukar tubuh itu, mereka merasa terikat satu sama lain, bahkan tanpa sadar Mitsuha jatuh cinta kepada Taki. ... Mitsuha pun dengan penuh keyakinan menyusul Taki',
            'producer' => 'Eiichiro oda',
            'duration' => '1 hours 52 min',
            'genre' => 'Anime/Romance/Animation/Fantasy',
            'type' => 'p',
            'release' => 2019,
        ]);

        // comedy
        Film::create([
            'banner' => 'warkopdki.jpg',
            'video' => 'https://www.youtube.com/embed/2UCPMRM-kHk',
            'trailer' => 'warkopdkitrailer.mp4',
            'name' => 'Warkopdki',
            'synopsis' => 'Film yang menghidupkan kembali legenda trio komedi Warkop. Dono, Kasino dan Indro kembali beraksi di tengah hiruk pikuknya kota DKI Jakarta. Mereka sekali lagi berperan sebagai personel sebuah Lembaga Swasta yang bernama CHIIPS (Cara Hebat Ikut-Ikutan Penanggulangan Sosial). Walaupun di dalam diri mereka dipenuhi semangat yang menggelora dalam menjalankan tugas-tugasnya melayani masyarakat, namun kekacauan dan huru-hara selalu mereka timbulkan akibat aksi mereka yang konyol dan selalu mengocok perut.',
            'producer' => 'Frederica',
            'duration' => '1 hours 50 min',
            'genre' => 'Comedy/Drama',
            'type' => 'p',
            'release' => 2020,
        ]);
        Film::create([
            'banner' => 'ace-ventura-when-nature-calls-movie-poster.jpg',
            'video' => 'https://www.youtube.com/embed/T8aos7_L4kA',
            'trailer' => 'warkopdkitrailer.mp4',
            'name' => 'Ace Ventura',
            'synopsis' => 'Detektif hewan Ace Ventura keluar dari masa pensiunnya untuk menyelidiki kasus hilangnya seekor kelelawar putih langka, simbol dari suku Afrika.',
            'producer' => 'James G. Robinson, Peter bogart',
            'duration' => '1 hours 40 min',
            'genre' => 'Comedy/Action/Mystery/Thriller/Crime ',
            'type' => 'f',
            'release' => 2020,
        ]);
        Film::create([
            'banner' => 'big-mommas-like-father-like-son-movie-poster1.jpg',
            'video' => 'https://www.youtube.com/embed/0bnDBexQ-Yw',
            'trailer' => 'warkopdkitrailer.mp4',
            'name' => 'Big Mommas: like father like son',
            'synopsis' => 'Kali ini, Malcolm Turner melindungi anak selama 17 tahun, Trent, menjadi saksi pembunuhan. Ayah dan anak menyamar di sekolah seni khusus wanita sebagai Big Momma dan cucu perempuan nya, Charmaine.',
            'producer' => 'David T. Friendly, Michael green',
            'duration' => '1 hours 48 min',
            'genre' => 'Comedy/Action/Crime',
            'type' => 'f',
            'release' => 2020,
        ]);
        Film::create([
            'banner' => 'chaplin.jpg',
            'video' => 'https://www.youtube.com/embed/7vl7F8S4cpQ',
            'trailer' => 'warkopdkitrailer.mp4',
            'name' => 'Charlie Chaplin',
            'synopsis' => 'Charlie chaplin adalah seorang pelawak, sutradara film, dan komposer dari Inggris yang terkenal pada era film bisu. Ia menjadi ikon dunia melalui persona layarnya, "Tramp", dan dianggap sebagai salah satu tokoh penting dalam sejarah industri film. Dia telah berkarier selama lebih dari 75 tahun sejak masa kanak-kanaknya pada era Victoria hingga setahun sebelum kematiannya pada tahun 1977. Kariernya diwarnai dengan sanjungan maupun kontroversi.',
            'producer' => 'mack sennett',
            'duration' => '20 min',
            'genre' => 'Comedy/Drama',
            'type' => 'f',
            'release' => 2020,
        ]);
        Film::create([
            'banner' => 'ghost-busters.jpg',
            'video' => 'https://www.youtube.com/embed/w3ugHP-yZXw',
            'trailer' => 'warkopdkitrailer.mp4',
            'name' => 'Ghost busters',
            'synopsis' => 'Peter Venkman, Raymond Stantz dan Egon Spengler kehilangan pekerjaan mereka sebagai parapsychologists dan memulai membentuk grup Ghostbusters - dengan misi memburu hantu-hantu jahat di kota New York.',
            'producer' => 'Ivan Reitman',
            'duration' => '1 hours 47 min',
            'genre' => 'Comedy/Fantasy/Sci-fi',
            'type' => 'f',
            'release' => 2020,
        ]);
        Film::create([
            'banner' => 'ghost-team.jpg',
            'video' => 'https://www.youtube.com/embed/bXRaPdVrmZI',
            'trailer' => 'warkopdkitrailer.mp4',
            'name' => 'Ghost team',
            'synopsis' => 'Seorang pemburu hantu merekrut beberapa orang amatir untuk menyelidiki gerak gerik mencurigakan yang berlangsung di sebuah peternakan terpencil.',
            'producer' => 'Julie christeas, Schuyler weiss, Alex sagalchik',
            'duration' => '1 hours 25 min',
            'genre' => 'Comedy/Thriller',
            'type' => 'f',
            'release' => 2020,
        ]);
        Film::create([
            'banner' => 'home-alone.jpg',
            'video' => 'https://www.youtube.com/embed/0iNmVVlmmv8',
            'trailer' => 'warkopdkitrailer.mp4',
            'name' => 'Home alone',
            'synopsis' => 'Kevin, 8 tahun, tak sengaja tertinggal dirumah saat keluarganya liburan ke Perancis. Awalnya ia justru merasa merdeka, tapi saat komplotan pencuri mencoba masuk, ia mencari seribu akal untuk bertahan!',
            'producer' => 'JJohn hughes, Tarquin gotch, Mark levinson',
            'duration' => '1 hours 43 min',
            'genre' => 'Comedy/Adventure/Children???s',
            'type' => 'f',
            'release' => 2020,
        ]);

        // Drama
        Film::create([
            'banner' => 'parasite.jpg',
            'video' => 'https://www.youtube.com/embed/SEUXfv87Wpk',
            'trailer' => 'parasitetrailer.mp4',
            'name' => 'Parasite',
            'synopsis' => 'Keluarga Ki-taek beranggotakan empat orang pengangguran dengan masa depan suram menanti mereka. Suatu hari Ki-woo anak laki-laki tertua direkomendasikan oleh sahabatnya yang merupakan seorang mahasiswa dari universitas bergengsi agar Ki-woo menjadi guru les yang dibayar mahal dan membuka secercah harapan penghasilan tetap. Dengan penuh restu serta harapan besar dari keluarga, Ki-woo menuju ke rumah keluarga Park untuk wawancara. Setibanya di rumah Mr. Park pemilik perusahaan IT global, Ki-woo bertemu dengan Yeon-kyo, wanita muda yang cantik di rumah itu. Setelah pertemuan itu, serangkaian kejadian dimulai.',
            'producer' => 'Bong joon-ho, Jang yeong-hwan, Kwak sin-ae, Yang kwon moon',
            'duration' => '2 hours 12 min',
            'genre' => 'Drama/Mystery',
            'type' => 'p',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'alien-movie-poster-sigourney-weaver-movie-poster-wallpaper-preview.jpg',
            'video' => 'https://www.youtube.com/embed/jQ5lPt9edzQ',
            'trailer' => 'parasitetrailer.mp4',
            'name' => 'Alien',
            'synopsis' => 'Sebuah tim penyelamat menjawab panggilan darurat dan mendarat di planet asing untuk mencari sejumlah korban. Ternyata, di sana mereka harus berhadapan dengan makhluk luar angkasa yang menyeramkan.',
            'producer' => 'Gordon carroll, David giler',
            'duration' => '1 hours 57 min',
            'genre' => 'Drama/Horror/Mystery/Adventure/Sci-fi/Fantasy',
            'type' => 'p',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'AvatarMv.jpg',
            'video' => 'https://www.youtube.com/embed/6ziBFh3V1aM',
            'trailer' => 'parasitetrailer.mp4',
            'name' => 'Avatar',
            'synopsis' => 'Jake, marinir lumpuh, menggantikan saudaranya menempati Navi Pandora demi sebuah misi. Setelah diterima oleh para penduduk asli sebagai bagian dari mereka, ia harus memutuskan dimana kesetiaannya.',
            'producer' => 'James cameron, Jon landau',
            'duration' => '2 hours 42 min',
            'genre' => 'Drama/Action/Sci-fi/Adventure',
            'type' => 'p',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'mission-impossible.jpg',
            'video' => 'https://www.youtube.com/embed/wb49-oV0F78',
            'trailer' => 'parasitetrailer.mp4',
            'name' => 'Mission Impossible: Fallout',
            'synopsis' => 'Ketika sebuah misi IMF berjalan di luar rencana, keselamatan dunia terancam. Ethan Hunt beraksi sendiri sesuai arahan awal, dan CIA mulai mempertanyakan loyalitas dan motifnya. Hunt harus berpacu melawan waktu, diburu para pembunuh dan mantan rekan misinya, untuk mencegah sebuah ancaman global.',
            'producer' => 'Tom cruise, J. J Abrams, Jake myers, Christoper Mcquarrie',
            'duration' => '2 hours 28 min',
            'genre' => 'Drama/Action/Thriller',
            'type' => 'p',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'sang-pemimpi.jpg',
            'video' => 'https://www.youtube.com/embed/WF8l3t53K74',
            'trailer' => 'parasitetrailer.mp4',
            'name' => 'Sang pemimpi',
            'synopsis' => 'Kisah perjuangan hidup Ikal dan sepupunya, Arai, dan sahabatnya, Jimbron - sebuah potret para remaja yang tengah mencari identitas diri dan seksualitasnya, dengan latar belakang Belitong tempo dulu.',
            'producer' => 'Mira lesmana',
            'duration' => '2 hours 2 min',
            'genre' => 'Drama/Fiction',
            'type' => 'f',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'tenet.jpg',
            'video' => 'https://www.youtube.com/embed/L3pk_TBkihU',
            'trailer' => 'parasitetrailer.mp4',
            'name' => 'Tenet',
            'synopsis' => 'Dipersenjatai hanya dengan sepatah kata???Tenet???dan berjuang untuk kelangsungan dunia, sang protagonis mengarungi senjakala dunia spionase internasional dalam sebuah misi yang membawa pada sesuatu yang melebihi alir waktu.',
            'producer' => 'Emma thomas, Christoper nolan',
            'duration' => '2 hours 30 min',
            'genre' => 'Drama/Sci-fi/Thriller/Spy/Adventure/Suspense',
            'type' => 'p',
            'release' => 2019,
        ]);

        // Horror
        Film::create([
            'banner' => 'danur3.jpg',
            'video' => 'https://www.youtube.com/embed/9EsGdyVx6HM',
            'trailer' => 'danur3trailer.mp4',
            'name' => 'Danur 3',
            'synopsis' => 'Setelah bersahabat dengan hantu-hantu kecilnya selama bertahun-tahun, Risa (Prilly Latuconsina) yang semakin dewasa mulai merasa bahwa dirinya harus memiliki kehidupan normal seperti perempuan lainnya. Apalagi sekarang Risa sudah memiliki pacar bernama Dimas (Rizky Nazar), yang bekerja sebagai penyiar radio. Risa bahkan tidak menceritakan kepada Dimas tentang kemampuannya melihat hantu, dan kenyataan bahwa dia memiliki 5 sahabat kecil yang bukan manusia. Persahabatan Risa dan Peter CS menjadi goyah, setelah Risa merasa Peter CS mulai mengusili Dimas. Risa akhirnya memilih menutup mata batinnya agar dia bisa memulai hidup normal. Tapi ternyata, setelah menutup mata batinnya, mulai terjadi kejadian aneh.',
            'producer' => 'Manoj punjabi, K.K Dheeraj',
            'duration' => '1 hours 30 min',
            'genre' => 'Horror/Drama',
            'type' => 'p',
            'release' => 2019,
        ]);

        Film::create([
            'banner' => 'rasuk2.jpg',
            'video' => 'https://www.youtube.com/embed/Nc24xCUR9h4',
            'trailer' => 'rasuk2trailer.mp4',
            'name' => 'Rasuk 2',
            'synopsis' => 'From the best selling author of Danur Risa Saraswati. Isabella (Nikita Willy), seorang mahasiswi kedokteran yang sedang menjalani koas, merasa tidak nyaman dengan kemampuan indera keenam yang dimilikinya. Dia berupaya kuat mengabaikan semua penglihatan batin yang dilihatnya, menganggap mereka tidak ada agar bisa hidup layak dengan normal.',
            'producer' => 'Dheeraj kalwani',
            'duration' => '1 hours 35 min',
            'genre' => 'Horror/Thriller',
            'type' => 'f',
            'release' => 2019,
        ]);

        Film::create([
            'banner' => 'perjanjian-dengan-iblis.jpg',
            'video' => 'https://www.youtube.com/embed/b-fDewCr_C8',
            'trailer' => 'perjanjian-dengan-iblistrailer.mp4',
            'name' => 'Perjanjian dengan iblis',
            'synopsis' => 'ANNISA (24thn) menikah dengan BARA (32thn), duda dengan seorang anak perempuan bernama LARA (8thn). Bara ingin agar kedua orang yang dicintainya bisa akrab,maka ia mengajak keduanya piknik ke pulau yang masih jarang didatangi oleh para wisatawan, Pulau Bengalor.',
            'producer' => 'Manoj punjabi, Dheeraj kalwani',
            'duration' => '1 hours 20 min',
            'genre' => 'Horror',
            'type' => 'f',
            'release' => 2018,
        ]);

        Film::create([
            'banner' => 'sebelum-iblis-menjemput.jpg',
            'video' => 'https://www.youtube.com/embed/yCQNva20XTM',
            'trailer' => 'Sebelum-iblis-menjemputtrailer.mp4',
            'name' => 'Sebelum iblis menjemput',
            'synopsis' => 'Film ini bercerita tentang seorang PEREMPUAN MUDA (20-an) dengan hidup yang kelam. IBUnya (50-an) meninggal dengan misterius, kemudian AYAHnya (60-an) meninggalkan Perempuan Muda dan menikah kembali dengan seorang IBU CANTIK (40-an) yang sudah memiliki dua orang ANAK (20-an) dengan umur sepantaran dengan Perempuan Muda.',
            'producer' => 'Timo tjahjanto, Abimana aryasatya, Wicky V. Olindo, Sukhdev singh',
            'duration' => '1 hours 50 min',
            'genre' => 'Horror/Drama',
            'type' => 'p',
            'release' => 2019,
        ]);

        Film::create([
            'banner' => 'suicide.jpg',
            'video' => 'https://www.youtube.com/embed/FFJulY_jwQg',
            'trailer' => 'Suicidetrailer.mp4',
            'name' => 'Suicide Club/Suicide Cirlce',
            'synopsis' => 'Film yang sebenarnya mempunyai judul Suicide Circle ini berfokus pada upaya seorang anggota polisi kawakan yang menjelang masa pensiunnya harus menghadapi kasus terbesar dalam karier kepolisiannya ??? mengusut tuntas kasus fenomena aksi bunuh diri massal yang tiba-tiba melanda seantero Tokyo',
            'producer' => 'Seiya kawamata, Toshiie tomida, Junichi tanaka, Seiji yoshida',
            'duration' => '1 hours 39 min',
            'genre' => 'Horror/Drama/Thriller',
            'type' => 'p',
            'release' => 2019,
        ]);

        Film::create([
            'banner' => 'the-conjuring-3.jpg',
            'video' => 'https://www.youtube.com/embed/bBRAseMeAIU',
            'trailer' => 'the-conjuring-3trailer.mp4',
            'name' => 'The conjuring 3',
            'synopsis' => 'Kisah mengerikan tentang teror, pembunuhan, dan kejahatan tak diketahui sebelumnya kisah yang mengejutkan bahkan dialami oleh keluarga Ed dan Lorraine Warren. Salah satu kasus paling sensasional dari arsip penyelidikan mereka, dimulai dengan pertarungan untuk jiwa seorang anak laki-laki, kemudian membawa mereka kepada seuatu yang belum pernah mereka lihat dan alami sebelumnya.',
            'producer' => 'James wan, Peter safran',
            'duration' => '1 hours 52 min',
            'genre' => 'Horror/Thriller/Mystery',
            'type' => 'p',
            'release' => 2019,
        ]);

        // Romance
        Film::create([
            'banner' => 'spellbound.jpg',
            'video' => 'https://www.youtube.com/embed/2HTxk13yP3M',
            'trailer' => 'peelboundtrailer.mp4',
            'name' => 'Spellbound',
            'synopsis' => 'Menceritakan kisah dari Yeo-Ri yang diperankan oleh Son Ye-Jin, seorang wanita muda yang sejak kecil dapat melihat hantu.Sebab itu, banyak hal-hal tak terduga sering terjadi pada orang yang berada di sekitar Yeo Ri. Karena kekuatan alami yang la miliki Yeo-Ri menjauhkan diri dari dunia luar.Di sisi lain, Jo-Goo diperankan oleh Lee Min-Ki adalah seorang pesulap jalanan. Suatu ketika Dia menonton pertunjukkannya.Jo Goo tertarik dengan Yeo Ri, sosok wanita yang hadir diantara para penonton. ',
            'producer' => 'Won-tae lee, An young jin',
            'duration' => '1 hours 54 min',
            'genre' => 'Romance/Horror',
            'type' => 'p',
            'release' => 2011,
        ]);
        Film::create([
            'banner' => 'a-moment-to-remember.jpg',
            'video' => 'https://www.youtube.com/embed/LFLSwFEiANg',
            'trailer' => 'peelboundtrailer.mp4',
            'name' => 'A Moment to Remember',
            'synopsis' => 'A Moment to Remember bercerita tentang seorang wanita bernama Su Jin (Son Ye Jin) yang tak sengaja bertemu Chul Soo (Jung Woo Sung). Mereka sempat mengalami salah paham ketika Su Jin salah mengambil minuman kaleng di minimarket. Takdir pun mempertemukan mereka kembali.',
            'producer' => 'Cha seoung-jae, Min-Sang kim',
            'duration' => '2 hours 24 min',
            'genre' => 'Romance/Drama/MeloDrama',
            'type' => 'p',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'always.jpg',
            'video' => 'https://www.youtube.com/embed/T1jVzy6Uh1M',
            'trailer' => 'peelboundtrailer.mp4',
            'name' => 'Always',
            'synopsis' => 'Cheol-Min (So Ji-Sub), seorang pria dengan masa lalu yang gelap dan misterius, mengambil pekerjaan malam paruh waktu sebagai petugas parkir. Dia duduk di bilik pembayaran kecil di tempat parkir dan menatap televisi kecil. Seorang wanita bernama Jung-Hwa (Han Hyo-Joo) masuk ke stan. Dia menawarkan sesuatu kepada Cheol-Min dan duduk di sebelahnya. Cheol-Min menyadari wanita itu buta dan dia membingungkannya dengan petugas parkir yang bekerja sebelumnya.',
            'producer' => 'Moon bomi, Kim jung-hee, Lee seong-hun',
            'duration' => '1 hours 48 min',
            'genre' => 'Romance/Drama',
            'type' => 'p',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'exit.jpg',
            'video' => 'https://www.youtube.com/embed/BssmJFpXtTQ',
            'trailer' => 'peelboundtrailer.mp4',
            'name' => 'Exit',
            'synopsis' => 'Action disaster dari produser THE BATTLESHIP ISLAND ???EXIT??? bercerita tentang Yong-nam (CHO Jung-seok) salah satu pemanjat tebing terbaik di perguruan tingginya namun tidak memiliki banyak keberuntungan di tempat lain setelah lulus. Setelah gagal mendapatkan pekerjaan selama bertahun-tahun dan harus bergantung pada orang tuanya hanya untuk bertahan hidup. Untuk membalas budi ibunya Yong-nam ingin merayakan ulang tahun ibunya yang ke-70 di Dream Garden karena wanita impiannya, Eui-ju (LIM Yoona, Girls Generation) bekerja di sana. Namun ketika bencana melanda Seoul, ia harus menggunakan keterampilan panjat tebingnya dengan bantuan Eui-ju untuk menyelamatkan semua orang.',
            'producer' => 'Ryoo seung-wan, Baek hyeon-ik',
            'duration' => '1 hours 44 min',
            'genre' => 'Romance/Action/Comedy/Disaster',
            'type' => 'p',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'snow-is-on-the-sea.jpg',
            'video' => 'https://www.youtube.com/embed/SptDaLg5H5U',
            'trailer' => 'peelboundtrailer.mp4',
            'name' => 'Snow is on the sea',
            'synopsis' => 'Wanita yang bernama Sun Mi (Lee Young-ah) yang merupakan wanita pembuat parfum yang menderita penyakit Myelodysplastic Syndrome sejak anak-anak. Sun Mi keluar masuk rumah sakit sejak kecil. Penyakit yang dialami Sun Mi adalah kelainan darah yang perlahan akan membuat pasien menderita leukemia.',
            'producer' => 'Choi jung-rak',
            'duration' => '1 hours 48 min',
            'genre' => 'Romance/Melodrama',
            'type' => 'p',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'warewolf-boy.jpg',
            'video' => 'https://www.youtube.com/embed/bGyLPT6pQs8',
            'trailer' => 'peelboundtrailer.mp4',
            'name' => 'Warewolf boy',
            'synopsis' => 'Seorang wanita tua mengunjungi pondok desa tempat tinggalnya ketika masih kanak-kanak. Lima puluh tahun yang lalu, ia menemukan "anak lelaki serigala" yang bersembunyi di kegelapan. Perempuan itu mengajarinya menunggu makanannya dengan sabar, bagaimana berpakaian, berbicara, menulis dan kebiasaan manusia lainnya agar ia bisa hidup sebagai pria normal kelak. Anak lelaki itu jatuh cinta pada satu-satunya orang yang memberikan kasih sayang padanya. Namun ketika terdesak, insting hewannya keluar dan membuat penduduk desa ketakutan. Demi menyelamatkan anak lelaki yang mempertaruhkan nyawanya untuk berada di samping si perempuan, maka perempuan itu meninggalkannya dengan janji, "Tunggu aku. Aku akan kembali untukmu,".',
            'producer' => 'InBeom Yoon, Kim su-jin',
            'duration' => '2 hours 6 min',
            'genre' => 'Romance/Melodrama/Fantasy/Drama',
            'type' => 'p',
            'release' => 2019,
        ]);
        Film::create([
            'banner' => 'You_Who_Came_From_the_Stars_Cover.jpg',
            'video' => 'https://www.youtube.com/embed/AyQVdUxCA9E',
            'trailer' => 'peelboundtrailer.mp4',
            'name' => 'You Who Came From The Stars',
            'synopsis' => 'You Who Came From The Stars menceritakan sebuah kisah tentang alien yang mendarat di Bumi pada tahun 1609 selama Dinasti Joseon, Alien tersebut bernama Do Min-joon. Kehadirannya ke bumi ialah untuk mencoba membantu seorang gadis muda Yi Hwa yang melarikan diri karena dirinya merasa akan dibunuh,',
            'producer' => 'Choi moon-suk,  Moon bo-mi',
            'duration' => '2 hours',
            'genre' => 'Romance/Melodrama/Comedy/Fantasy/Sci-fi',
            'type' => 'p',
            'release' => 2019,
        ]);
    }
}
