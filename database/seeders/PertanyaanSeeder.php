<?php

namespace Database\Seeders;

use App\Models\Bakat;
use App\Models\Option;
use App\Models\Pertanyaan;
use App\Models\VersiPertanyaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pertanyaan = [
            [
                "question" => "Saya tertarik untuk belajar kata/bahasa baru 🧑‍🏫",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Linguistik"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya senang bercerita atau berbicara tentang banyak hal 🗣️",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Linguistik"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya lebih suka menulis untuk menyampaikan materi baru /pesan pada seseorang daripada mengingatnya ✍️",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Linguistik"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Salah satu pelajaran favorit saya adalah bahasa (Indonesia/inggris) 📚",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Linguistik"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya suka menyusun kata dan dapat dengan mudah menemukan salah ketik (typo) 💻",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Linguistik"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Bermain dengan angka dan rumus adalah hal mudah untuk saya 🔢",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Logis Matematis"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Matematika adalah salah satu pelajaran favorit saya 👨‍🔬",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Logis Matematis"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya suka permainan strategi, seperti catur, sudoku, atau permainan serupa ♟️",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Logis Matematis"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya suka mengukur dan mengurutkan sesuatu berdasarkan urutan tertentu 📃",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Logis Matematis"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya suka membuat persamaan sederhana agar dapat menjelaskan sesuatu yang sulit dipahami orang lain 👩‍🏫",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Logis Matematis"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya mudah membaca peta/denah 🗺️",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Visual Spasial"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya suka untuk mengekspresikan diri melalui gambar/lukisan 🎨",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Visual Spasial"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Puzzle adalah salah satu permainan favorit saya 🧩",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Visual Spasial"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya lebih mudah mengingat wajah seseorang daripada namanya 🧑",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Visual Spasial"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya bisa mengingat tata letak barang di kelas/kamar saya dengan baik 🗄️",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Visual Spasial"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya memiliki minat pada hal yang berkaitan dengan musik 🎼",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Musikal"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya peka terhadap berbagai suara yang berbeda🔉",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Musikal"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya bisa menyanyikan lagu dengan nada yang tepat 🧑‍🎤",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Musikal"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya tertarik untuk mempelajari beragam alat musik 🎸",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Musikal"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya bisa dengan mudah mengingat nada lagu ketika seseorang bertanya pada saya 🎶",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Musikal"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya suka mempelajari tentang alam dan lingkungan sekitar 🌲",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Naturalis"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya bisa membedakan jenis-jenis tanaman/hewan 🐞",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Naturalis"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Wisata alam adalah salah satu destinasi pilihan saya ketika berlibur 🏕️",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Naturalis"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya penasaran ketika menemui jenis buah/sayur yang belum pernah saya lihat 🥬",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Naturalis"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya suka memelihara hewan peliharaan 🐈",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Naturalis"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Olahraga adalah salah satu pelajaran favorit saya 🏈",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Kinestetik"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya suka aktivitas di luar ruangan 🪁",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Kinestetik"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya lebih suka belajar dengan praktek seperti, mendesain, eksperimen, dan olahraga 🧑‍🌾",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Kinestetik"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya senang menciptakan suatu produk seperti memasak, menjahit, dan menggambar 🧵",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Kinestetik"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya merasa memiliki koordinasi mata dan tangan yang baik 💃",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Kinestetik"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya suka memuji seseorang ketika mereka telah melakukan sesuatu dengan baik 🫂",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Interpersonal"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya suka berinteraksi/berkomunikasi dengan orang lain 🤼",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Interpersonal"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Teman-teman saya sering bercerita kepada saya untuk meminta saran/dukungan 👥",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Interpersonal"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya suka bergaul dengan siapa saja 🧑‍🤝‍🧑",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Interpersonal"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Terkadang saya suka memikirkan bagaimana reaksi/pandangan orang lain terhadap saya 💬",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Interpersonal"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Setiap hari saya berpikir apa yang telah saya lakukan dalam sehari 🤔",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Intrapersonal"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya mengetahui kelebihan dan kekurangan yang saya miliki 🤸‍♀️",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Intrapersonal"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya percaya bahwa saya bertanggung jawab terhadap setiap perbuatan saya 👀",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Intrapersonal"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya sering memikirkan tentang permasalahan yang ada di dalam organisasi ataupun keluarga saya, dan apa yang bisa saya lakukan untuk menyelesaikannya 💭",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Intrapersonal"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Saya memiliki hobi dan minat khusus terhadap sesuatu 🏄",
                "type" => "Single",
                "options" => [
                    [
                        "answer" => "Setuju",
                        "bakat" => "Intrapersonal"
                    ],
                    [
                        "answer" => "Tidak Setuju",
                        "bakat" => null
                    ]
                ]
            ],
            [
                "question" => "Sekolah akan mengadakan sebuah acara, dimana kamu ditunjuk untuk bertugas mengatur acara tersebut. Didalamnya terdapat beberapa susunan kepantiaan, dan kamu bebas untuk memilih tugasnya. Lalu tugas mana yang akan kamu pilih?",
                "type" => "Multiple",
                "options" => [
                    [
                        "answer" => "🎙️MC : Menjadi pembawa acara, menyusun naskah, dan berbicara di depan penonton",
                        "bakat" => "Linguistik"
                    ],
                    [
                        "answer" => "🧑‍🤝‍🧑Sie Humas : Menjadi fasilitator antara pihak-pihak pendukung acara dan anggota panitia lainnya",
                        "bakat" => "Interpersonal"
                    ],
                    [
                        "answer" => "🎪Sie Dekorasi Panggung : Mendesain panggung, memilih warna, tata letak, dan menciptakan konsep visual yang menarik",
                        "bakat" => "Visual Spasial"
                    ],
                    [
                        "answer" => "📒Sie Evaluasi : Mengevaluasi pelaksanaan acara",
                        "bakat" => "Intrapersonal"
                    ],
                    [
                        "answer" => "🎵Sie Penata Suara/Musik : Mengatur musik yang sesuai dengan tema acara agar menciptakan suasana yang mendukung",
                        "bakat" => "Musikal"
                    ],
                    [
                        "answer" => "🌿Sie Dekorasi : Mengatur dekorasi dari bahan alami / tanaman untuk penghias panggung",
                        "bakat" => "Naturalis"
                    ],
                    [
                        "answer" => "💵Sie Bendahara : Mengelola anggaran, memperkirakan kebutuhan biaya, dan membuat laporan keuangan yang dibutuhkan selama acara",
                        "bakat" => "Logis Matematis"
                    ],
                    [
                        "answer" => "💃Sie Koreografi : Membuat koreografi untuk ditampilkan dan mengatur properti yang dibutuhkan",
                        "bakat" => "Kinestetik"
                    ]
                ]
            ],
            [
                "question" => "Kamu akan melakukan adventure trip bersama teman-temanmu. Sebelum itu, kalian akan merancang perjalanan dan membagi tugas pada tiap anak. Lalu bagian mana yang akan kamu pilih?",
                "type" => "Multiple",
                "options" => [
                    [
                        "answer" => "🚗Menentukan rute perjalanan yang efisien dan destinasi terdekat yang akan dikunjungi menggunakan google maps",
                        "bakat" => "Visual Spasial"
                    ],
                    [
                        "answer" => "🛏️Memilih tempat menginap untuk beristirahat sesuai dengan kenyamanan dan suasana",
                        "bakat" => "Intrapersonal"
                    ],
                    [
                        "answer" => "🎵Menentukan playlist musik yang sesuai dengan suasana perjalanan dan selera kelompok",
                        "bakat" => "Musikal"
                    ],
                    [
                        "answer" => "🛝Mengatur jadwal kegiatan yang akan dilakukan selama liburan",
                        "bakat" => "Logis Matematis"
                    ],
                    [
                        "answer" => "🍳Merancang menu makanan dan memasak",
                        "bakat" => "Kinestetik"
                    ],
                    [
                        "answer" => "⛺Menentukan barang-barang untuk keperluan kegiatan outdoor yang akan dibawa dan ramah lingkungan",
                        "bakat" => "Naturalis"
                    ],
                    [
                        "answer" => "📞Berkoordinasi dengan pihak tempat penginapan dan destinasi untuk membooking",
                        "bakat" => "Interpersonal"
                    ],
                    [
                        "answer" => "✍️Merangkum catatan perjalanan yang menarik untuk diupload di sosial media",
                        "bakat" => "Linguistik"
                    ]
                ]
            ],
            [
                "question" => "Kamu mendapatkan banyak tugas sekolah yang harus dikerjakan dan hal itu membuatmu jenuh. Lalu kegiatan apa yang dapat mengembalikan semangatmu untuk mengerjakan tugas?",
                "type" => "Multiple",
                "options" => [
                    [
                        "answer" => "📝Menuliskan daftar prioritas tugas serta catatan kecil tentang cara menyelesaikannya",
                        "bakat" => "Linguistik"
                    ],
                    [
                        "answer" => "📑Membagi tugas menjadi beberapa bagian kecil dan menyelesaikan secara berurutan",
                        "bakat" => "Logis Matematis"
                    ],
                    [
                        "answer" => "🖌️Menggambar atau mendesain sesuatu untuk menyegarkan pikiran",
                        "bakat" => "Visual Spasial"
                    ],
                    [
                        "answer" => "🎧Mendengarkan musik favorit dan bernyanyi untuk meningkatkan mood",
                        "bakat" => "Musikal"
                    ],
                    [
                        "answer" => "🍃Keluar sejenak untuk menikmati udara segar dan pemandangan",
                        "bakat" => "Naturalis"
                    ],
                    [
                        "answer" => "🤸‍♂️Melakukan aktivitas fisik seperti berolahraga ringan atau sekadar bergerak agar tubuh lebih rileks",
                        "bakat" => "Kinestetik"
                    ],
                    [
                        "answer" => "🤝Berbincang dengan teman/keluarga untuk berbagi cerita",
                        "bakat" => "Interpersonal"
                    ],
                    [
                        "answer" => "🧘‍♂️Mengambil waktu sejenak untuk diri sendiri dan berelaksasi untuk menenangkan pikiran",
                        "bakat" => "Intrapersonal"
                    ]
                ]
            ],
            [
                "question" => "Kelulusan sekolah sudah semakin dekat. Kalian sepakat untuk mengadakan acara perpisahan. Kamu bebas untuk berkontribusi sesuai dengan minat dan kemampuanmu. Dari pilihan berikut, apa yang ingin kamu lakukan ?",
                "type" => "Multiple",
                "options" => [
                    [
                        "answer" => "💌Menulis surat atau pesan yang menyentuh untuk teman-teman",
                        "bakat" => "Linguistik"
                    ],
                    [
                        "answer" => "🧾Membuat rancangan jalannya acara",
                        "bakat" => "Logis Matematis"
                    ],
                    [
                        "answer" => "👨‍🎨Mendesain sebuah kartu ucapan atau membuat ilustrasi kenangan",
                        "bakat" => "Visual Spasial"
                    ],
                    [
                        "answer" => "🎶Mendokumentasikan kegiatan perpisahan dan menambahkan lagu yang sesuai",
                        "bakat" => "Musikal"
                    ],
                    [
                        "answer" => "🌵Memberikan kenang-kenangan berupa tanaman kecil",
                        "bakat" => "Naturalis"
                    ],
                    [
                        "answer" => "🎉Mengadakan pertunjukkan atau kuis interaktif",
                        "bakat" => "Kinestetik"
                    ],
                    [
                        "answer" => "🗣️Menjadi MC untuk memimpin jalannya acara",
                        "bakat" => "Interpersonal"
                    ],
                    [
                        "answer" => "📖Membuat jurnal/scrapbook yang berisikan kenangan yang telah dilewati bersama",
                        "bakat" => "Intrapersonal"
                    ]
                ]
            ],
            [
                "question" => "Ketika di dunia perkuliahan, kamu akan menjumpai UKM (Unit Kegiatan Mahasiswa). UKM merupakan klub ekstrakulikuler untuk wadah mahasiswa dalam mengeksplor minat dan bakatnya. Kegiatannya hampir sama ketika kamu mengikuti ekskul di SMA. Jika diperbolehkan memilih 3 UKM, maka mana yang akan kamu pilih?",
                "type" => "Multiple",
                "options" => [
                    [
                        "answer" => "📚UKM Bahasa Asing – diperuntukkan untuk mahasiswa yang tertarik untuk mempelajari bahasa asing",
                        "bakat" => "Linguistik"
                    ],
                    [
                        "answer" => "💰UKM Kewirausahaan – diperuntukkan untuk mahasiswa yang tertarik untuk menjadi wirausaha yang memilili inovasi-inovasi terkini",
                        "bakat" => "Logis Matematis"
                    ],
                    [
                        "answer" => "📸UKM Fotografi – diperuntukkan untuk mahasiswa yang menyukai keestetikan dan senang mengabadikan momen",
                        "bakat" => "Visual Spasial"
                    ],
                    [
                        "answer" => "🎤UKM Musik – diperuntukkan untuk mahasiswa yang senang dengan dunia musik dan ingin mengekspresikan dirinya melalui instrumen musik dan suara",
                        "bakat" => "Musikal"
                    ],
                    [
                        "answer" => "🌱UKM Pecinta Lingkungan Hidup – diperuntukkan untuk mahasiswa yang tertarik untuk konservasi lingkungan",
                        "bakat" => "Naturalis"
                    ],
                    [
                        "answer" => "🏊UKM Olahraga – diperuntukkan untuk mahasiswa yang gemar berolahraga, baik ringan maupun berat",
                        "bakat" => "Kinestetik"
                    ],
                    [
                        "answer" => "🧑‍🤝‍🧑UKM Peduli Kemanusiaan – diperuntukkan untuk mahasiswa yang memiliki jiwa sosial tinggi dan senang untuk membantu masyarakat sekitar",
                        "bakat" => "Interpersonal"
                    ],
                    [
                        "answer" => "🧑‍🏫UKM Pengembangan Diri – diperuntukkan untuk mahasiswa yang ingin mengenal diri sendiri secara mendalam dan mengembangkan soft skill dan hard skill",
                        "bakat" => "Intrapersonal"
                    ]
                ]
            ],
            [
                "question" => "Ketika memiliki waktu luang, aktivitas mana yang akan kamu pilih?",
                "type" => "Multiple",
                "options" => [
                    [
                        "answer" => "📖Membaca buku/wattpad",
                        "bakat" => "Linguistik"
                    ],
                    [
                        "answer" => "🔢Bermain game yang menggunakan strategi, seperti sudoku",
                        "bakat" => "Logis Matematis"
                    ],
                    [
                        "answer" => "🖌️Menggambar/berkreasi membuat sesuatu",
                        "bakat" => "Visual Spasial"
                    ],
                    [
                        "answer" => "🎧Mendengarkan musik",
                        "bakat" => "Musikal"
                    ],
                    [
                        "answer" => "🏞️Mengunjungi taman/wisata alam sekitar",
                        "bakat" => "Naturalis"
                    ],
                    [
                        "answer" => "👨‍🍳Memasak atau berkreasi membuat sesuatu",
                        "bakat" => "Kinestetik"
                    ],
                    [
                        "answer" => "🗣️Bertukar cerita dengan teman",
                        "bakat" => "Interpersonal"
                    ],
                    [
                        "answer" => "✍️Journaling",
                        "bakat" => "Intrapersonal"
                    ]
                ]
            ],
            [
                "question" => "Zaman akan semakin berubah ditandai dengan perkembangan teknologi, perubahan sosial dan kebutuhan dunia kerja yang pesat. Berikut adalah beberapa pilihan profesi yang diperkirakan butuh untuk masa depan, manakah yang akan kamu pilih?",
                "type" => "Multiple",
                "options" => [
                    [
                        "answer" => "💻Copywriter – orang yang membuat tulisan/artikel yang menarik dengan tujuan untuk menawarkan suatu produk",
                        "bakat" => "Linguistik"
                    ],
                    [
                        "answer" => "📈Data Analyst – orang yang menganalisis sebuah informasi untuk membantu perusahaan/pelanggan dalam membuat sebuah keputusan",
                        "bakat" => "Logis Matematis"
                    ],
                    [
                        "answer" => "🤖VR (Virtual Reality) & AR (Augmented Reality) Designer – orang yang membuat objek, karakter, atau lingkungan yang realistis, dan animasi yang halus untuk diterapkan pada VR/AR",
                        "bakat" => "Visual Spasial"
                    ],
                    [
                        "answer" => "🎼Sound Designer – orang yang bertanggung jawab untuk menciptakan dan mengatur suara dalam sebuah projek",
                        "bakat" => "Musikal"
                    ],
                    [
                        "answer" => "🏖️Ecotourism Specialist – orang yang melakukan penilaian terhadap praktek wisata dan dampak yang dihasilkan pada lingkungan sekitarnya",
                        "bakat" => "Naturalis"
                    ],
                    [
                        "answer" => "🎮Esport Player – orang yang bertanding game di tingkat profesional",
                        "bakat" => "Kinestetik"
                    ],
                    [
                        "answer" => "🤝Network Specialist – orang yang bertugas untuk membangun dan memelihara kerjasama dalam sebuah komunitas/instansi",
                        "bakat" => "Interpersonal"
                    ],
                    [
                        "answer" => "👥Psikolog – orang yang membantu klien untuk memahami diri mereka dan mengatasi permasalahan emosional serta pengembangan diri",
                        "bakat" => "Intrapersonal"
                    ]
                ]
            ],
            [
                "question" => "Dari profesi berikut, mana yang paling membuatmu tertarik?",
                "type" => "Multiple",
                "options" => [
                    [
                        "answer" => "🗣️Pembawa acara (MC)",
                        "bakat" => "Linguistik"
                    ],
                    [
                        "answer" => "👩‍💻Programmer",
                        "bakat" => "Logis Matematis"
                    ],
                    [
                        "answer" => "👷‍♂️Arsitek",
                        "bakat" => "Visual Spasial"
                    ],
                    [
                        "answer" => "🧑‍🎤Penyanyi",
                        "bakat" => "Musikal"
                    ],
                    [
                        "answer" => "🏔️Konten creator alam",
                        "bakat" => "Naturalis"
                    ],
                    [
                        "answer" => "👨‍🍳Koki",
                        "bakat" => "Kinestetik"
                    ],
                    [
                        "answer" => "👩‍🏫Guru",
                        "bakat" => "Interpersonal"
                    ],
                    [
                        "answer" => "✏️Penulis",
                        "bakat" => "Intrapersonal"
                    ]
                ]
            ],
            [
                "question" => "Dari aktivitas berikut, mana yang akan kamu pilih?",
                "type" => "Multiple",
                "options" => [
                    [
                        "answer" => "📝Belajar bahasa inggris",
                        "bakat" => "Linguistik"
                    ],
                    [
                        "answer" => "♟️Bermain catur",
                        "bakat" => "Logis Matematis"
                    ],
                    [
                        "answer" => "🎨Mendesain poster",
                        "bakat" => "Visual Spasial"
                    ],
                    [
                        "answer" => "🎤Menyanyi",
                        "bakat" => "Musikal"
                    ],
                    [
                        "answer" => "🐈Merawat kucing",
                        "bakat" => "Naturalis"
                    ],
                    [
                        "answer" => "🏸Bermain badminton",
                        "bakat" => "Kinestetik"
                    ],
                    [
                        "answer" => "🫂 Mengikuti kegiatan volunteer",
                        "bakat" => "Interpersonal"
                    ],
                    [
                        "answer" => "✍️Menulis buku harian",
                        "bakat" => "Intrapersonal"
                    ]
                ]
            ],
            [
                "question" => "Ketika kamu belajar, cara belajar mana yang paling sesuai denganmu?",
                "type" => "Multiple",
                "options" => [
                    [
                        "answer" => "📰Membaca buku, mencatat, dan menggarisbawahi bagian-bagian yang penting",
                        "bakat" => "Linguistik"
                    ],
                    [
                        "answer" => "🧮Membuat tabel maupun grafik untuk mengurutkan materi secara sistematis",
                        "bakat" => "Logis Matematis"
                    ],
                    [
                        "answer" => "💻Membuat mindmap/peta pikiran untuk merangkum sebuah materi",
                        "bakat" => "Visual Spasial"
                    ],
                    [
                        "answer" => "📻Mendengarkan musik sambil belajar",
                        "bakat" => "Musikal"
                    ],
                    [
                        "answer" => "🍁Belajar di tempat terbuka",
                        "bakat" => "Naturalis"
                    ],
                    [
                        "answer" => "🛠️Mempraktekkan secara langsung sesuai dengan materi",
                        "bakat" => "Kinestetik"
                    ],
                    [
                        "answer" => "👯Belajar kelompok bersama teman",
                        "bakat" => "Interpersonal"
                    ],
                    [
                        "answer" => "🖊️Belajar secara individu dan mengaitkan dengan pengalaman pribadi",
                        "bakat" => "Intrapersonal"
                    ]
                ]
            ]
        ];

        $versi = VersiPertanyaan::firstOrCreate(['name' => 'Versi 1', 'status' => 'Active']);

        foreach ($pertanyaan as $resPertanyaan) {
            $pertanyaan = Pertanyaan::create([
                'versi_id' => $versi->id,
                'type' => $resPertanyaan['type'],
                'question' => $resPertanyaan['question'],
            ]);

            foreach ($resPertanyaan['options'] as $opsi) {
                Option::create([
                    'pertanyaan_id' => $pertanyaan->id,
                    'answer' => $opsi['answer'],
                    'bakat_id' => Bakat::where('name', $opsi['bakat'])->first()->id ?? null,
                ]);
            }
        }
    }
}
