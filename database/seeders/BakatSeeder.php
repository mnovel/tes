<?php

namespace Database\Seeders;

use App\Models\Bakat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bakat = [
            [
                'name' => 'Linguistik',
                'short_description' => '',
                'full_description' => 'Kecerdasan yang meliputi kemampuan mengolah kata secara efektif, baik secara lisan maupun tulisan. Seorang linguistik menikmati aktivitas yang melibatkan penggunaan kata, seperti membaca, menulis, berdiskusi, belajar bahasa asing. Biasanya, mereka terampil dalam meyakinkan/mempengaruhi orang lain ataupun berdebat. Selain itu, mereka juga dapat dengan mudah memahami ucapan orang lain. Kecerdasan ini biasanya berhubungan dengan mata pelajaran bahasa, Sejarah.',
                'recommendation' => 'Karena jurusan yang berhubungan dengan linguistik berkaitan dengan teori dan tata bahasa, cobalah cari tahu lebih dalam tentang apa yang dipelajari dari jurusan ini. Selain itu, berlatihlah untuk menyusun kata saat akan berbicara dengan guru, orang tua, atau teman untuk membiasakan diri berkomunikasi dengan baik. Jika kamu lebih tertarik dengan teori bahasa, pertimbangkan jurusan seperti pendidikan, kebahasaan, atau sastra. Namun bila kamu lebih tertarik pada penerapan bahasa dalam kehidupan sehari-hari, jurusan komunikasi atau jurusan lain sejenis akan lebih cocok. Ingatlah, dalam jurusan yang berhubungan dengan linguistik, membaca buku maupun artikel akan menjadi bagian penting keseharianmu.',
                'icon' => ''
            ],
            [
                'name' => 'Logis Matematis',
                'short_description' => '',
                'full_description' => 'Kecerdasan yang meliputi kemampuan penalaran logis dan penggunaan angka dalam pemecahan masalah. Seorang logis-matematis menyukai aktivitas yang berkaitan dengan angka, teka-teki, logika, dan ilmu pengetahuan, seperti game puzzle/teka-teki atau mata pelajaran yang memiliki rumus (matematika, IPA, atau komputer).  Selain itu, rasa keingintahuan yang tinggi terhadap hubungan sebab-akibat suatu hal, senang untuk mengurutkan sesuatu berdasarkan kategori, serta mudah untuk menghafal sesuatu.',
                'recommendation' => 'Jurusan yang berhubungan dengan logis matematis akan menggunakan ilmu pasti sebagai dasarnya, jadi perbanyaklah membaca buku terkait dan berlatih. Kalian akan sering berhadapan dengan angka dan dituntut untuk berpikir logis serta memiliki kemampuan analisis yang baik. Mulailah membiasakan diri dengan pola pemecahan masalah yang terstruktur. Selain itu, pertimbangkan bidang yang kamu minati, seperti teknologi, ekonomi, sains, teknik, atau politik. Hal ini akan memudahkanmu dalam memilih jurusan yang sesuai dari beragam pilihan yang tersedia.',
                'icon' => ''
            ],
            [
                'name' => 'Visual Spasial',
                'short_description' => '',
                'full_description' => 'Kecerdasan yang meliputi kemampuan memahami, membayangkan,   dan mengingat sebuah konsep ruang, posisi, lokasi, dan beragam bentuk dimensi dalam bentuk visual. Seorang visual-spasial mudah dalam membaca peta, menggambar, berkreasi, dapat dengan mudah melihat sebuah objek dari sudut pandang berbeda, memahami makna dari suatu bentuk, senang berimajinasi, dan senang belajar menggunakan film, gambar dan audio.',
                'recommendation' => 'Sebelum memasuki jurusan yang berhubungan dengan visual-spasial, pastikan kamu memiliki dasar pengetahuan tentang bentuk ruang, dan tata letak yang baik. Kreativitas akan selalu diandalkan, jadi usahakan terus latih imajinasi dan kemampuan visualisasi. Selain itu, kamu perlu menentukan arah minatmu: apabila kamu senang menggambar atau mendesain, maka jurusan desain/seni akan cocok untukmu. Biasanya jurusan seni/desain akan meminta portofolio sebagai syarat mendaftar. Apabila lebih tertarik pada teknis, seperti perencanaan atau struktur, maka akan lebih sesuai bila kamu masuk dalam teknik atau jurusan lain yang terkait.',
                'icon' => ''
            ],
            [
                'name' => 'Interpersonal',
                'short_description' => '',
                'full_description' => 'Kecerdasan yang meliputi kemampuan memahami dan berinteraksi dengan lingkungan sekitar secara baik dengan melibatkan empati. Seorang interpersonal cenderung mudah untuk berteman dan gemar aktivitas yang berkaitan dengan kelompok dan komunikasi, seperti diskusi, debat dan kerja kelompok. Selain itu, terkadang mereka dapat membaca dan memahami emosi orang di sekitarnya dan nyaman untuk dijadikan tempat bercerita orang lain.',
                'recommendation' => 'Jurusan yang berhubungan dengan interpersonal akan selalu berinteraksi dengan masyarakat, maka dibutuhkan rasa percaya diri, empati dan keterampilan berkomunikasi. Latihlah kemampuan berbicara di depan umum seperti menyampaikan pendapat, bertanya saat di kelas atau di dalam rapat organisasi, serta mengikuti diskusi kelompok. Gemar bersosialisasi juga membantu meningkatkan rasa percaya diri dan membangun relasi. Pertimbangkan arah minatmu: apabila suka membantu orang, maka jurusan pendidikan, Kesehatan, dan pekerja sosial akan cocok denganmu. Apabila lebih tertarik pada organisasi dan kepemimpinan, maka jurusan manajemen/komunikasi dapat menjadi pilihanmu yang tepat.',
                'icon' => ''
            ],
            [
                'name' => 'Intrapersonal',
                'short_description' => '',
                'full_description' => 'Kecerdasan yang meliputi kemampuan memahami diri sendiri, seperti keinginan, minat dan harapan yang menyebabkan apa yang dilakukannya berdasarkan pemahaman tersebut. Seorang intrapersonal cenderung senang bekerja sendiri, sering mengintrospeksi diri, dan dapat dengan mudah menyelesaikan masalah secara mandiri.',
                'recommendation' => 'Jurusan yang berhubungan dengan intrapersonal erat kaitannya dengan pemikiran kritis dan logis. Jika kamu memiliki rasa keingintahuan tinggi terhadap sesuatu, jurusan ini akan cocok untukmu karena kamu akan diajak untuk memandang suatu hal dari berbagai perspektif. Maka penting untuk membiasakan diri membaca buku, artikel, maupun jurnal guna memperluas wawasan. Selain itu, kamu akan belajar memahami diri sendiri maupun orang lain secara mendalam, termasuk pada pola pikir dan emosi.',
                'icon' => ''
            ],
            [
                'name' => 'Kinestetik',
                'short_description' => '',
                'full_description' => 'Kecerdasan yang meliputi kemampuan menggunakan dan mengorganisasikan seluruh tubuh untuk mengekspresikan diri dan dalam menghasilkan sebuah produk. Seorang kinestetik senang bergerak untuk merasakan pengalaman secara langsung dan menyukai mata pelajaran seperti olahraga dan prakarya.',
                'recommendation' => 'Jurusan yang berhubungan dengan kinestetik akan mengandalkan koordinasi tubuh yang baik, ketangkasan, dan kreativitas, terutama dalam pembuatan sebuah produk dan pengoperasian alat. Kamu juga perlu memiliki fisik yang kuat serta kebugaran karena jurusan ini akan banyak melibatkan praktik. Pertimbangkan arah minatmu: apabila kamu lebih menyukai bidang seni gerak, maka jurusan seni dan keolahragaan akan cocok untukmu, jika kamu lebih suka bekerja secara teknis, maka jurusan yang cocok adalah antara teknik atau desain.',
                'icon' => ''
            ],
            [
                'name' => 'Naturalis',
                'short_description' => '',
                'full_description' => 'Kecerdasan yang meliputi kemampuan berinteraksi dengan alam, seperti dapat dengan mudah untuk mengenali dan membedakan beragam jenis tumbuhan maupun hewan. Seorang naturalis juga peka terhadap fenomena yang terjadi di lingkungan sekitar.',
                'recommendation' => 'Jurusan yang berhubungan dengan naturalis akan banyak berinteraksi dengan lingkungan, hewan, tumbuhan, dan ekosistem mereka. Maka disarankan kalian menyukai pelajaran biologi/ekologi/hal-hal terkait alam serta peduli terhadap beragam isu yang terjadi di lingkungan. Kamu akan belajar mengenali dan membedakan beragam jenis hewan/tumbuhan serta dapat memahami ekosistem sekitar. Pertimbangkan dengan baik arah minatmu; jika kamu tertarik pada bidang konservasi alam atau penelitian, maka jurusan ilmu lingkungan, biologi, argroteknologi, atau jurusan terkait akan cocok denganmu. Jika kamu lebih menyukai penerapan, maka pilihlah antara jurusan pertanian, kehutanan, peternakan dan jurusan lain yang relevan.',
                'icon' => ''
            ],
            [
                'name' => 'Kinestetik',
                'short_description' => '',
                'full_description' => 'Kecerdasan yang meliputi kemampuan peka terhadap suara, nada, pola dan ritme. Seorang musikal senang mendengarkan, menikmati, membedakan, bahkan mengubah suatu lagu, dapat menyanyikan lagu dengan nada yang tepat serta dapat mengenali beragam suara.',
                'recommendation' => 'Jurusan yang berhubungan dengan musikal tentunya memilki kaitan erat dengan kemampuan mendengarkan, memahami, atau bahkan menciptakan musik sendiri. Maka sangat disarankan untuk terus berlatih, baik dalam bernyanyi, bermain alat musik, ataupun mengkreasikan sebuah musik. Kamu akan mempelajari beragam teknik musik, warna nada, dan penyusunan lagu. Hal ini tentunya akan meningkatkan kreativitas dan kemampuanmu dalam pengembangan sebuah karya.',
                'icon' => ''
            ],
        ];

        foreach ($bakat as $resBakat) {
            Bakat::create($resBakat);
        }
    }
}
