<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected  static $mean = [
        'Tidak takut',
        'berani',
        'Belas kasih',
        'harta mulia',
        'menonjol',
        'bulan purnama',
        'berani, keberanian',
        'kehormatan',
        'Bercahaya',
        'Dermawan',
        'Kebaikan',
        'terkenal',
        'Istana',
        'Hakim',
        'Pembalas',
        'Menang',
        'Lembah yang indah',
        'Ingatan',
        'Kehormatan diri',
        'Pangeran yang mempesona',
        'Sumpah Seorang Ksatria',
        'Berkembang',
        'sukses',
        'Kemenangan',
        'Bunga-bunga',
        'yang berseri',
        'yang gemilang',
        'lebih cerah',
        'Tumbuh tinggi seperti bintang-bintang',
        'Jujur',
        'Perpaduan kilau cahaya',
        'Bijaksana',
        'Pemberani',
        'Pertama',
        'tiada bandingan',
        'Seorang bangsawan',
        'Kedamaian',
        'Kuat',
        'Orang yang mulia',
        'Seorang anak',
        'Lembut',
        'pekerja keras',
        'Kuat dan bertenaga',
        'Jagat raya',
        'Orang kepercayaan',
        'Sebuah benteng yang kuat',
        'Seorang yang ramah',
        'Anak laki-laki yang ramah',
        'Yang tercinta',
        'Orang yang tekun',
        'Kekal abadi',
        'Seorang pemimpin',
        'Lelaki setia',
        'Penyabar',
        'Sahabat yang makmur',
        'Anak setia',
        'Penuh energi',
        'Pemimpin yang abadi',
        'Gagah berani',
        'Tombak',
        'Yang terpandai',
        'Anak yang teguh',
        'Menguasai',
        'Manis',
        'Wahyu/petunjuk',
        'Pengetahuan',
        'Pemberian Tuhan yang indah',
        'Laki-laki yang terbaik',
        'Matahari',
        'Orang yang baik',
        'Penglihatan',
        'Kemenangan',
        'Berpikir jauh ke depan',
        'Ahli menggunakan tonggak',
        'Lautan',
        'Tampan',
        'Keberuntungan',
        'Sebuah cahaya',
        'Kesatria',
        'Ahli hukum',
        'Penuh semangat dan mudah beradaptasi',
        'Orang yang kreatif',
        'Kegembiraan',
        'Muda',
        'segar',
        'Kesucian',
        'Cerdas',
        'Hadiah dari Tuhan',
        'Berumur panjang',
        'Keindahan',
        'Keberuntungan',
        'Penguasa yang terkenal',
        'Berwarna biru',
    ];

    protected static $work = [
        'Guru',
        'Arsitek',
        'Nelayan',
        'Perawat',
        'Perawat',
        'Bidan',
        'Pemadam Kebakaran',
        'Kondektur',
        'Pilot',
        'Masinis',
        'Wartawan',
        'Penulis',
        'Insinyur Mesin',
        'Ahli Gizi',
        'Pustakawan',
        'Hakim',
        'Notaris',
        'Teller Bank',
        'Koki',
        'Artis',
        'Penerjemah',
        'Tentara',
        'Tukang cukur',
        'Pedagang',
        'Tukang kayu',
        'Fotografer',
        'Peneliti',
        'Peternak',
        'Nahkoda',
        'Petani'
    ];



    protected static $horoscope = [
        "A" => "Kamu tidak terlalu romantis, tapi kamu tertarik dalam bertindak. Artinya bisnis. Bagi kamu, apa yang kamu lihat adalah apa yang kamu dapat. Kamu tidak memiliki kesabaran untuk mengkritik dan tidak dapat diganggu dengan orang yang mencoba terlihat lemah, manis dan menggoda. Kamu adalah orang yang ada di baris terdepan.",
        "B" => "Kamu menyerah dalam berbagai hal sensual. Kamu menikmati suasana romantis dan menghanyutkan. Kamu sangat senang menerima hadiah sebagai ekspresi dari pasangan kamu. Kamu ingin di manjakan dan kamu tahu bagaimana memanjakan pasangan kamu.",
        "C" => "Kamu adalah individu yang sosial, dan sangat penting untuk kamu memiliki hubungan. Kamu membutuhkan kedekatan dan kebersamaan.",
        "D" => "Begitu kamu sampai menginginkan seseorang, kamu akan maju dengan gempita dalam mengejarnya. Kamu tidak mudah menyerah dalam perjalanan. Kamu sangat perhatian dan menjaga. Jika seseorang memiliki masalah, kamu sangat ingin membantu. Kamu sangat berhasrat, setia dan serius dalam keterlibatan, dan terkadang posesif dan pencemburu.",
        "E" => "Kebutuhan terbesar kamu adalah berbicara. Jika pasangan kamu bukan pendengar yang baik, kamu akan mengalami masalah dalam hubungan tersebut. Seseorang harus secara intelektual merangsang atau kamu tidak akan secara seksual menjadi terangsang. Kamu membutuhkan teman untuk cinta dan persahabatan. Kamu membenci ketidakharmonisan dan gangguan, tapi terkadang kamu menyukai argumen yang baik. Kamu sangat menuntut banyak, karena sangat menyukai tantangan. Namun begitu kamu memberikan cintamu, kamu tidak diragukan lagi kesetiaannya.",
        "F" => "Kamu idealistik dan romantis. Kamu mencari pasangan terbaik yang dapat kamu temukan. Kamu sangat setia, memiliki sensual dan berhasrat. Kamu dapat menjadi suka mempertunjukan kecantikan. Kamu dilahirkan untuk menjadi romantis. Kejadian romantis menjadi favorit kamu. Kamu dapat menjadi pecinta yang murah hati.",
        "G" => "Kamu pekerja yang baik, mencari kesempurnaan dalam diri kamu dan pasangan. Kamu merespon kepada pasangan yang memiliki intelektual sama atau lebih baik, dan mereka yang dapat meningkatkan status kamu. Kamu sensual dan tahu bagaimana meraih titik tertinggi dari suatu rangsangan. Kamu dapat menjadi sangat aktif, seakan tidak pernah lelah. Tugas dan kewajiban kamu mengambil alih dari segala hal. Kamu dapat mengalami kesulitan memiliki kedekatan terhadap seseorang.",
        "H" => "Kamu mencari pasangan yang mampu meningkatkan gairah hidup, kesenangan dan semua yang kamu cari. Kamu akan menjadi sangat murah hati terhadap pasangan apabila kamu mendapatkan komitmen. Kamu sangat kuat dan bakat kamu adalah sebenarnya investasi terhadap partner. Sebelum membuat komitmen, kamu cenderung lebih hati-hati terhadap semua gerakan.",
        "I" => "Kamu memiliki kebutuhan yang besar untuk di cintai dan dihargai. Kamu menikmati kemewahan, sensualitas dan cinta. Kamu mencari kekasih yang tahu apa yang mereka lakukan. Kamu sangat berkeinginan untuk bereksperimen dan mencoba berbagai tipe ekspresi baru.",
        "J" => "Kamu dipenuhi dengan kekuatan fisik. Jika digunakan untuk hal baik, tidak ada yang dapat menghalangi kamu. Kamu dapat membawa hal romantis dalam pikiran kamu. Kamu juga dapat membawa hubungan jarak jauh dengan mudah. Idealistik dan perlu percaya dalam cinta.",
        "K" => "Kamu penuh dengan rahasia dan pemalu. Kamu sexy dan berhasrat, hanya dalam hubungan intim saja bagian alami ini akan muncul. Kamu membawa kehidupan cinta dengan sangat serius dan tidak bermain main. Kamu memiliki kesabaran untuk menunggu orang yang tepat untuk muncul. Kamu suka memberi dan murah hati dan terkadang kurang memperhatikan diri sendiri. Secara alami kamu orang yang baik dan manis, yang menarik banyak orang. Kamu adalah teman yang baik.",
        "L" => "Kamu dapat menjadi sangat romantis, memiliki pasangan adalah segalanya bagimu. Kamu bebas dalam mengekspresikan cinta dan berani mengambil kesempatan untuk mencoba pengalaman baru. Kamu perlu merasakan bahwa pasangan kamu secara intelijen menarik, sebaliknya, kamu akan kesulitan untuk menjaga hubungan.",
        "M" => "Kamu sangat emosional dan mudah marah. Ketika terlibat dalam hubungan, kamu membuang semua energi ke dalamnya. Tidak ada yang dapat menghentikan kamu. Kamu mengharapkan orang yang sama-sama berhasrat dan tekun. Kamu percaya dalam energi yang tidak pernah habis. Kamu senang mengatur pasangan dan sangat imajinatif.",
        "N" => "Kamu mungkin terlihat tidak berdosa, tidak terduga dan pemalu, tapi kita tahu bahwa penampilan dapat menipu. Ketika berbicara mengenai cinta, kamu bukanlah pemula. Dengan mudah kamu mendapatkan ide untuk bercinta.",
        "O" => "Kamu sangat tertarik dalam aktivitas yang menarik, namun kamu juga dapat menjadi pemalu terhadap keinginan kamu. Kamu dapat mengubah banyak energi untuk menghasilkan uang. Kamu sangat berhasrat, pecinta yang baik, mengharapkan kualitas yang sama dari pasangan. Cinta adalah masalah serius untuk kamu dan kamu mengharapkan keseriusan. Terkadang hasrat kamu dapat berubah menjadi suatu hal positif, sesuatu yang harus selalu kamu perhatikan.",
        "P" => "Kamu sangat sadar terhadap masalah sosial. Kamu tidak akan berpikir melakukan apapun yang dapat menjelekan imej atau reputasi kamu. Penampilan diperhatikan. Kamu membutuhkan pasangan yang berpenampilan baik dan pandai. Anehnya kamu sering melihat pasangan sebagai musuh. Kamu sangat sosial dan sensual.",
        "Q" => "Kamu memiliki energi fisik yang luar biasa dan membutuhkan aktivitas rutin. Tidak mudah untuk pasangan mengikuti kamu. Kamu adalah pecinta yang antusias dan cenderung tertarik pada orang karena latar belakang dan penampilan yang eksotis. Kamu membutuhkan banyak romantika, hati, bunga dan percakapan yang selalu menarik untuk dibicarakan.",
        "R" => "Kamu adalah individu yang selalu menuntut aksi. Kamu membutuhkan seseorang yang dapat sesuai dengan kamu. Kamu menghargai pikiran yang baik daripada segi fisik meskipun, ketertarikan fisik tetap penting bagi kamu. Kamu mungkin tidak menunjukan perasaan cinta dengan jujur, namun cinta adalah sesuatu yang penting untuk kamu.",
        "S" => "Buat kamu, adalah kesenangan sebelum bisnis. Begitu kamu membuat komitmen, kamu lengket bagaikan lem. Kamu dapat mudah cemburu dan posesif. Kamu cenderung egois dan senang menjadi pusat perhatian. Kamu sangat sensitif, perhatian dan private. Kamu suka memikirkan hal romantis yang diiringi musik dan lampu yang ringan.",
        "T" => "Kamu sensitif dan menyukai pasangan yang dapat mengambil bagian. Kamu cenderung untuk berkhayal dan mudah jatuh cinta. Dalam cinta, kamu romantis dan idealistik. Kamu penggoda yang baik dan yang ada dalam kepala kamu adalah bagaimana kamu dapat membuat hubungan sesuai mimpi. Kamu menyukai jalan sendiri. Kamu tidak menyukai perubahan dan kamu menyukai bergantung dalam kondisi yang sama. Kamu perlu mendengarkan apa yang orang lain katakan meskipun kamu tidak ingin mendengarnya, nasihat mereka mungkin menyelamatkan cintamu.",
        "U" => "Kamu antusias dan paling bahagia ketika dalam percintaan. Ketika tidak dalam cinta, kamu menlihat orang yang kamu kagumi. Kamu melihat romantika sebagai tantangan. Kamu menikmati memberikan hadiah dan terlihat baik. Kamu mau memperhatikan perasaan orang lain di atas perasaan sendiri.",
        "V" => "Kamu sangat individualistis dan menghargai kebebasan, ruang dan kesenangan. Kamu menunggu sampai kamu mengetahui orang dengan baik sebelum kamu memberikan komitmen. Kamu tertarik terhadap tipe eksentrik dan percaya umur bukanlah hambatan. Kamu sangat baik dalam menghadapi bahaya dan takut.",
        "W" => "Kamu sangat bangga, gigih dan menolak untuk menjawab tidak terhadap pertanyaan. Ego kamu yang mengambil alih setiap waktu. Kamu idealistik dan merasakan cinta yang sangat dalam, sehingga cenderung mencurahkan diri kedalam hubungan tersebut. Kamu menyukai permainan cinta.",
        "X" => "Kamu cenderung mudah merasa bosan dan ingin terus digoda. Kamu dapat mengatasi lebih dari satu hubungan dengan mudah. Kamu sangat berbakat dan memiliki masalah untuk meredam pemikiran kamu.",
        "Y" => "Kamu sensual dan mandiri. Jika kamu tidak memiliki jalan, kamu ingin melupakan semua hal. Kamu ingin mengontrol hubungan kamu yang berjalan tidak baik. Kamu perlu membuktikan diri kamu yang terbaik. Kamu membutuhkan feedback. Jika kamu bisa menghasilkan uang, kamu akan melupakan cinta untuk sesaat.",
        "Z" => "Kamu sangat romantis namun terkadang merasakan bahwa untuk mencintai berarti siap untuk menderita. Kamu melayani pasangan dengan baik. Kamu melihat diri kamu sebagai penyelamat cinta. Kamu menarik orang yang memiliki masalah yang tidak biasa.",
    ];



    public static function getMean()
    {
        $mean = '';
        $n = [];
        for ($i = 0; $i < 3; $i++) {
            do {
                $rand = random_int(0, count(Pengguna::$mean));
            } while (in_array($rand, $n));
            array_push($n, $rand);
            $mean .= Pengguna::$mean[$rand];
            if ($i != 2) {
                $mean .= ', ';
            }
        }
        return $mean;
    }

    public static function getWork()
    {
        return fake()->randomElement(Pengguna::$work);
    }

    public static function getHoroscope($name)
    {
        $letter = strtoupper($name[0]);
        return Pengguna::$horoscope[$letter];
    }
}
