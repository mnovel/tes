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
                'type' => 'Single',
                'questions' => [
                    [
                        'question' => 'Saya tertarik untuk belajar kata/bahasa baru',
                        'options' => [
                            ['answer' => 'Setuju', 'bakat' => 'Linguistik'],
                            ['answer' => 'Tidak Setuju', 'bakat' => null]
                        ]
                    ],
                    // [
                    //     'question' => 'Saya senang bercerita atau berbicara tentang banyak hal',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Linguistik'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya lebih suka menulis untuk menyampaikan materi baru /pesan pada seseorang daripada mengingatnya',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Linguistik'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Salah satu pelajaran favorit saya adalah bahasa (Indonesia/inggris)',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Linguistik'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya suka menyusun kata dan dapat dengan mudah menemukan salah ketik (typo)',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Linguistik'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Bermain dengan angka dan rumus adalah hal mudah untuk saya',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Logis Matematis'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Matematika adalah salah satu pelajaran favorit saya',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Logis Matematis'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya suka permainan strategi, seperti catur atau permainan serupa',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Logis Matematis'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya suka mengukur dan mengurutkan sesuatu berdasarkan urutan tertentu',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Logis Matematis'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya suka membuat persamaan sederhana agar dapat menjelaskan sesuatu yang sulit dipahami orang lain',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Logis Matematis'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya mudah membaca peta/denah',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Visual Spasial'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya suka untuk mengekspresikan diri melalui gambar/lukisan',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Visual Spasial'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Puzzle, sudoku, menyusun balok adalah salah satu permainan favorit saya',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Visual Spasial'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya lebih mudah mengingat wajah seseorang daripada namanya',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Visual Spasial'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya bisa mengingat tata letak barang di kelas/kamar saya dengan baik',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Visual Spasial'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya memiliki minat pada hal yang berkaitan dengan musik',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Musikal'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya peka terhadap berbagai suara yang berbeda',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Musikal'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya bisa menyanyikan lagu dengan nada yang tepat',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Musikal'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya tertarik untuk mempelajari beragam alat musik',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Musikal'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya bisa dengan mudah mengingat nada lagu ketika seseorang bertanya pada saya',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Musikal'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya suka mempelajari tentang alam dan lingkungan sekitar',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Naturalis'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya bisa membedakan jenis-jenis tanaman/hewan',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Naturalis'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Wisata alam adalah salah satu destinasi pilihan saya ketika berlibur',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Naturalis'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya penasaran ketika menemui jenis buah/sayur yang belum pernah saya lihat',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Naturalis'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya suka memelihara hewan peliharaan',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Naturalis'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Olahraga adalah salah satu pelajaran favorit saya',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Kinestetik'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya suka aktivitas di luar ruangan',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Kinestetik'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya lebih suka belajar dengan praktek seperti, mendesain, eksperimen, olahraga',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Kinestetik'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya senang menciptakan suatu produk seperti memasak, menjahit, menggambar',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Kinestetik'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya merasa memiliki koordinasi mata dan tangan yang baik',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Kinestetik'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya suka memuji seseorang ketika mereka telah melakukan sesuatu dengan baik',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Interpersonal'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya suka berinteraksi/berkomunikasi dengan orang lain daripada diam',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Interpersonal'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Teman-teman saya sering bercerita kepada saya untuk meminta saran/dukungan',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Interpersonal'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya suka bergaul dengan siapa saja',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Interpersonal'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Terkadang saya suka memikirkan bagaimana reaksi/pandangan orang lain terhadap saya',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Interpersonal'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Setiap hari saya berpikir apa yang telah saya lakukan dalam sehari',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Intrapersonal'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya mengetahui kelebihan dan kekurangan yang saya miliki',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Intrapersonal'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya percaya bahwa saya bertanggung jawab terhadap setiap perbuatan saya',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Intrapersonal'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya sering memikirkan tentang permasalahan yang ada di dalam organisasi ataupun keluarga saya, dan apa yang bisa saya lakukan untuk menyelesaikannya',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Intrapersonal'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Saya memiliki hobi dan minat khusus terhadap sesuatu',
                    //     'options' => [
                    //         ['answer' => 'Setuju', 'bakat' => 'Intrapersonal'],
                    //         ['answer' => 'Tidak Setuju', 'bakat' => null]
                    //     ]
                    // ]
                ]
            ],
            [
                'type' => 'Multiple',
                'questions' => [
                    [
                        'question' => 'Sekolah akan mengadakan sebuah acara, dimana kamu ditunjuk untuk bertugas mengatur acara tersebut. Didalamnya terdapat beberapa susunan kepantiaan, dan kamu bebas untuk memilih tugasnya. Berikut adalah pilihannya',
                        'options' => [
                            ['answer' => 'MC : Menjadi pembawa acara, menyusun naskah, dan berbicara di depan penonton', 'bakat' => 'Linguistik'],
                            ['answer' => 'Sie Humas : Menjadi fasilitator antara pihak-pihak pendukung acara dan anggota panitia lainnya', 'bakat' => 'Interpersonal'],
                            ['answer' => 'Sie Dekorasi Panggung : Mendesain panggung, memilih warna, tata letak, dan menciptakan konsep visual yang menarik', 'bakat' => 'Visual Spasial'],
                            ['answer' => 'Sie Acara : Merencanakan jalannya acara, memastikan jalannya acara, dan mengevaluasi pelaksanaannya', 'bakat' => 'Intrapersonal'],
                            ['answer' => 'Sie Penata Suara/Musik : Mengatur musik yang sesuai dengan tema acara agar menciptakan suasana yang mendukung', 'bakat' => 'Musikal'],
                            ['answer' => 'Sie Konsumsi : Mengatur penyediaan makanan dan minuman yang ramah lingkungan', 'bakat' => 'Naturalis'],
                            ['answer' => 'Sie Bendahara : Mengelola anggaran, memperkirakan kebutuhan biaya, dan membuat laporan keuangan yang dibutuhkan selama acara', 'bakat' => 'Logis Matematis'],
                            ['answer' => 'Sue Koreografi : Membuat koreografi untuk ditampilkan dan mengatur properti yang dibutuhkan', 'bakat' => 'Kinestetik']
                        ]
                    ],
                    // [
                    //     'question' => 'Kamu akan melakukan adventure trip bersama teman-temanmu. Sebelum itu, kalian akan merancang perjalanan dan membagi tugas pada tiap anak. Berikut adalah pilihannya:',
                    //     'options' => [
                    //         ['answer' => 'Menentukan rute perjalanan yang efisien dan destinasi terdekat yang akan dikunjungi menggunakan google maps', 'bakat' => 'Visual Spasial'],
                    //         ['answer' => 'Memilih tempat menginap untuk beristirahat sesuai dengan kenyamanan dan suasana', 'bakat' => 'Intrapersonal'],
                    //         ['answer' => 'Menentukan playlist musik yang sesuai dengan suasana perjalanan dan selera kelompok', 'bakat' => 'Musikal'],
                    //         ['answer' => 'Mengatur aktivitas/kegiatan fisik yang akan dilakukan selama perjalanan', 'bakat' => 'Kinestetik'],
                    //         ['answer' => 'Mengelola anggaran dan memperkirakan biaya kebutuhan', 'bakat' => 'Logis Matematis'],
                    //         ['answer' => 'Menentukan barang-barang untuk keperluan kegiatan outdoor yang akan dibawa dan ramah lingkungan', 'bakat' => 'Naturalis'],
                    //         ['answer' => 'Berkoordinasi dengan pihak tempat penginapan dan destinasi untuk membooking', 'bakat' => 'Interpersonal'],
                    //         ['answer' => 'Merangkum catatan perjalanan yang menarik untuk diupload di sosial media', 'bakat' => 'Linguistik']
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Dari aktivitas berikut, mana yang akan kamu pilih?',
                    //     'options' => [
                    //         ['answer' => 'Belajar bahasa inggris', 'bakat' => 'Linguistik'],
                    //         ['answer' => 'Bermain catur', 'bakat' => 'Logis Matematis'],
                    //         ['answer' => 'Mendesain poster', 'bakat' => 'Visual Spasial'],
                    //         ['answer' => 'Menyanyi', 'bakat' => 'Musikal'],
                    //         ['answer' => 'Merawat kucing', 'bakat' => 'Naturalis'],
                    //         ['answer' => 'Bermain badminton', 'bakat' => 'Kinestetik'],
                    //         ['answer' => 'Mengikuti kegiatan volunteer', 'bakat' => 'Interpersonal'],
                    //         ['answer' => 'Menulis buku harian', 'bakat' => 'Intrapersonal']
                    //     ]
                    // ],
                    // [
                    //     'question' => 'Dari profesi berikut, mana yang paling membuatmu tertarik?',
                    //     'options' => [
                    //         ['answer' => 'Pembawa acara (MC)', 'bakat' => 'Linguistik'],
                    //         ['answer' => 'Programmer', 'bakat' => 'Logis Matematis'],
                    //         ['answer' => 'Arsitek', 'bakat' => 'Visual Spasial'],
                    //         ['answer' => 'Penyanyi', 'bakat' => 'Musikal'],
                    //         ['answer' => 'Konten creator alam', 'bakat' => 'Naturalis'],
                    //         ['answer' => 'Koki', 'bakat' => 'Kinestetik'],
                    //         ['answer' => 'Guru', 'bakat' => 'Interpersonal'],
                    //         ['answer' => 'Penulis', 'bakat' => 'Intrapersonal']
                    //     ]
                    // ]
                ]
            ]
        ];

        $versi = VersiPertanyaan::firstOrCreate(['name' => 'Versi 1', 'status' => 'Active']);

        foreach ($pertanyaan as $resPertanyaan) {
            foreach ($resPertanyaan['questions'] as $question) {
                $pertanyaan = Pertanyaan::create([
                    'versi_id' => $versi->id,
                    'type' => $resPertanyaan['type'],
                    'question' => $question['question'],
                ]);

                foreach ($question['options'] as $opsi) {
                    Option::create([
                        'pertanyaan_id' => $pertanyaan->id,
                        'answer' => $opsi['answer'],
                        'bakat_id' => Bakat::where('name', $opsi['bakat'])->first()->id ?? null,
                    ]);
                }
            }
        }
    }
}
