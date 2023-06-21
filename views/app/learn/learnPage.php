<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../style/learnPage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/17cb31a600.js" crossorigin="anonymous"></script>
    <title>IndoCano</title>
    <link rel="icon" href="../../../images/logo indocano 2.png">
</head>
<body>
    <nav>
        <div class="greetings">
            <img src="../../../images/logo indocano 2.png" alt="">
        </div>

        <div class="navigation">
            <div class="nav-logo">
                <a href="../homePage.php"><ion-icon name="home-outline"></ion-icon></a>
                <span class="text">Home</span>
            </div>

            <div class="nav-logo">
                <a href="../quiz/quizPage.php"><ion-icon name="barbell-outline"></ion-icon></a>
                <span class="text">Train</span>
            </div>

            <div class="nav-logo">
                <a href="../learn/learnPage.php"><ion-icon name="book-outline"></ion-icon></a>
                <span class="text">Learn</span>
            </div>

            <div class="nav-logo">
                <a href="../account/changeUsername.php"><ion-icon name="person-outline"></ion-icon></a>
                <span class="text">Account</span>
            </div>  
        </div>

        <div class="change-province-button">
            <div class="current-province">
                <img src="../../../images/Provinsi Bali.png" alt="">
            </div>
            <div class="dropdown-container">
                <span>Current Province</span>
                <hr>
                <div class="enrolled-province">
                    <div class="province-image">
                        <img src="../../images/Provinsi Bali.png" alt="">
                    </div>
                    <div class="province-name">Provinsi Bali</div>
                </div>
                <hr>
                <div class="add-new-province"><a href="">Switch province</a></div>
            </div>
        </div>
    </nav>
    
    <div class="judul">
        <img src="../../../images/LogoBali.png" alt="">
        <h1>Provinsi Bali</h1>
    </div>

    <div class="accordion">
        <!-- Makanan Khas -->
        <div class="test">
          <input type="checkbox" name="example_accordion" id="section1" class="accordion__input">
          <label for="section1" class="accordion__label">Section #1: Makanan Khas</label>
          <div class="accordion__content">
                <div class="container-makanan">
                     <div class="content-slide">
                        <div class="imgslide fade">
                             <div class="numberslide">1 / 7</div>
                             <img src="../../../images/AyamBetutu.jpg" class="GM" alt="">
                             <div class="text">Ayam Betutu</div>
                        </div>

                        <div class="imgslide fade">
                            <div class="numberslide">2 / 7</div>
                            <img src="../../../images/BulungBuni.jpeg" class="GM" alt="">
                            <div class="text">Bulung Buni Kuah Pindang</div>
                        </div>
                         
                        <div class="imgslide fade">
                             <div class="numberslide">3 / 7</div>
                             <img src="../../../images/NasiCampurBali.jpg" class="GM" alt="">
                             <div class="text">Nasi Campur Bali</div>
                        </div>
 
                        <div class="imgslide fade">
                             <div class="numberslide">4 / 7</div>
                             <img src="../../../images/NasiJinggo.jpeg" class="GM" alt="">
                             <div class="text">Nasi Jinggo</div>
                        </div>

                        <div class="imgslide fade">
                            <div class="numberslide">5 / 7</div>
                            <img src="../../../images/NasiTepeng.jpg" class="GM" alt="">
                            <div class="text">Nasi Tepeng</div>
                        </div>

                        <div class="imgslide fade">
                            <div class="numberslide">6 / 7</div>
                            <img src="../../../images/SatePlecing.jpg" class="GM" alt="">
                            <div class="text">Sate Plecing</div>
                        </div>

                        <div class="imgslide fade">
                            <div class="numberslide">7 / 7</div>
                            <img src="../../../images/TumAyam.jpg" class="GM" alt="">
                            <div class="text">Tum Ayam</div>
                        </div>
 
                        <a class="prev" onclick="nextslide(-1)">&#10094;</a>
                        <a class="next" onclick="nextslide(1)">&#10095;</a>
                     </div>
 
                     <div class="page">
                         <span class="dot" onclick="dotslide(1)"></span>
                         <span class="dot" onclick="dotslide(2)"></span>
                         <span class="dot" onclick="dotslide(3)"></span>
                         <span class="dot" onclick="dotslide(4)"></span>
                         <span class="dot" onclick="dotslide(5)"></span>
                         <span class="dot" onclick="dotslide(6)"></span>
                         <span class="dot" onclick="dotslide(7)"></span>
                     </div>
 
                </div>
          </div>
        </div>

        <!-- Pakaian Adat -->
        <div class="test">
          <input type="checkbox" name="example_accordion" id="section2" class="accordion__input">
          <label for="section2" class="accordion__label">Section #2: Pakaian Adat</label>
          <div class="accordion__content">
                <div class="content-pakaian">
                    <div class="container">
                        <div class="card">
                            <div class="front">
                                <img src="../../../images/Udeng.jpg" alt="">
                            </div>
                            <div class="back">
                                <h4>Udeng</h4>
                                <p>Kain yang menutupi kepala dari dua sisi yang melambangkan pengendalian diri. Di Bali, ada tiga jenis udeng yang umumnya 
                                    dikenal. Udeng jejateran, Udeng Kepak dara, dan Udeng beblatukan</p>
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div class="card">
                            <div class="front">
                                <img src="../../../images/BajuSafari.jpeg" alt="">
                            </div>
                            <div class="back">
                                <h4>Baju Safari</h4>
                                <p>Kemeja safari umumnya berwarna putih, dengan kerah dan kancing, dilengkapi dengan saku di bagian dada serta di bagian 
                                    bawah. Warna putih pada baju safari ini melambangkan kesucian dan kesakralan.</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="container">
                        <div class="card">
                            <div class="front">
                                <img src="../../../images/KainKamen.jpg" alt="">
                            </div>
                            <div class="back">
                                <h4>Kain Kamen</h4>
                                <p>kain yang dapat digunakan oleh pria maupun perempuan untuk menutupi pinggang sampai mata kaki. Untuk pria, Kain kamen 
                                    dililit dari kiri ke kanan dengan meninggalkan ujung di bagian bawahnya dengan jarak sejengkal di atas telapak kaki.</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="container">
                        <div class="card">
                            <div class="front">
                                <img src="../../../images/KebayaBali.jpg" alt="">
                            </div>
                            <div class="back">
                                <h4>Kebaya Bali</h4>
                                <p>Kebaya Bali bisa dibuat dari berbagai jenis bahan dan dapat ditambahkan renda dan/atau korset. Kebaya Bali identik 
                                    dengan warna-warna cerah untuk menggambarkan keceriaan sekaligus keanggunan perempuan di Bali.</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="container">
                        <div class="card">
                            <div class="front">
                                <img src="../../../images/KainSaput.jpeg" alt="">
                            </div>
                            <div class="back">
                                <h4>Kain Saput</h4>
                                <p>Kebaya Bali bisa dibuat dari berbagai jenis bahan dan dapat ditambahkan renda dan/atau korset. Kebaya Bali identik 
                                    dengan warna-warna cerah untuk menggambarkan keceriaan sekaligus keanggunan perempuan di Bali.</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="container">
                        <div class="card">
                            <div class="front">
                                <img src="../../../images/PayasAgung.png" alt="">
                            </div>
                            <div class="back">
                                <h4>Payas Agung</h4>
                                <p>Payas Agung</p>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="card">
                            <div class="front">
                                <img src="../../../images/PayasMadya.jpg" alt="">
                            </div>
                            <div class="back">
                                <h4>Payas Madya</h4>
                                <p>Payas Madya</p>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="card">
                            <div class="front">
                                <img src="../../../images/Pakaian-Adat-Bali-Payas-Alit.jpg" alt="">
                            </div>
                            <div class="back">
                                <h4>Payas Alit</h4>
                                <p>Payas Alit</p>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        </div>

        <!-- Alat Musik Tradisional -->
        <div class="test">
          <input type="checkbox" name="example_accordion" id="section3" class="accordion__input">
          <label for="section3" class="accordion__label">Section #3: Alat Musik Tradisional</label>
          <div class="accordion__content" id="atmus">
            <div class="mvv-container">
                <div class="mv-block">
                    <div class="image">
                        <img src="../../../images/GamelanBali.png" alt="">
                    </div>
                    <div class="kata">
                        <h5>Gamelan Bali</h5>
                        <p class ="kecil" align="justify">Gamelan Bali merupakan alat musik tradisional Bali berupa ansambel yang terdiri dari berbagai macam alat-alat musik lainnya 
                            seperti gong, gambang, kendang, kempul, bonang dan masih banyak lagi yang lainnya.Gamelan Bali biasanya digunakan oleh 
                            masyarakat Bali dalam berbagai acara adat dan juga ritual keagamaan yang ada di Bali. Dimana ada sekitar 25 jenis gamelan yang 
                            berkembang di berbagai pedesaan, ada yang terbuat dari bambu dan ada yang terbuat dari logam.</p> <br>
                        <p class="kecil">Gamelan terdiri dari beberapa bagian seperti berikut ini: <br>
                            1. Gamelan tua yang terdiri dari gambang, saron, selonding kayu, gong besi, gong luwang, selonding besi, angklung klentang dan 
                            gender wayang. <br>
                            2. Gamelan madya yang terdiri dari pegambuhan, semar pegulingan, pelegongan, bebarongan, joged pingitan, gong gangsa jongkok, 
                            bebonangan, dan rindik gandrung. <br>
                            3. Gamelan baru antara lain pengerjaan, gong kebyar, pejangeran, angklung bilah tujuh, joged bungbung, dan gong suling.
                        </p>
                    </div>
                </div>
            
                <div class="mv-block">
                    <div class="image">
                        <img src="../../../images/rindik.jpeg" alt="">
                    </div>
                    <div class="kata">
                        <h5>Rindik</h5>
                        <p align="justify">Nama Rindik berasal dari bahasa Jawa kuno yang berarti ditempatkan dengan rapi dan memiliki sedikit celah. 
                            Instrumen ini dimainkan oleh dua hingga lima orang, dua memainkan Rindik dan sisanya memainkan suling dan gong puru. <br>
                            Rindik merupakan salah satu alat musik Bali yang dipukul dan terbuat dari bambu. Alat musik tradisional ini 
                            memiliki lima nada dasar pada bilah bambunya dan cara memainkannya dengan memukulnya dengan palu khusus. Rindik sering digunakan
                            dalam tradisi joged bumbung. Selain itu, alat ini sering digunakan sebagai pelengkap resepsi pernikahan dan penyambutan tamu. 
                        </p>
                    </div>
                </div>
        
                <div class="mv-block">
                    <div class="image">
                        <img src="../../../images/Ceng-ceng.jpg" alt="">
                    </div>
                    <div class="kata">
                        <h5>Ceng - Ceng</h5>
                        <p align = "justify">Salah satu elemen kunci dari gamelan Bali yang membedakannya dari gamelan lainnya adalah alat musik Ceng-ceng. Dalam perangkat 
                            Gamelan Bali, alat musik mirip simbal ini dapat memberikan efek suara yang dinamis saat dimainkan di ansambel Gamelan. Suara 
                            yang dikeluarkan merupakan hasil dari perpaduan delapan buah logam bundar yang diadu satu dengan lainnya. Ceng-ceng terdiri dari
                            6 logam bulat di bagian bawah dan 2 logam bulat di bagian atas. Cara bermainnya dengan memukul logam putaran atas dengan logam 
                            putaran bawah. Alat musik ini disebut juga dengan ceng-ceng ricik.</p>
                    </div>
                </div>
            </div>
          </div>
            
        </div>

        <!-- Rumah Adat -->
        <div class="test">
            <input type="checkbox" name="example_accordion" id="section4" class="accordion__input">
            <label for="section4" class="accordion__label">Section #4: Rumah Adat</label>
            <div class="accordion__content">
                <div class="container-rumah">
                    <div class="card" style="--clr:#009688;">
                        <div class="imgBx">
                            <img src="../../../images/balegede.jpg" alt="">
                        </div>
                        <div class="content-rumah">
                            <h2>Bale Gede</h2>
                            <p>Rumah Bale Gede adalah salah satu jenis arsitektur tradisional Bali yang memiliki ciri khas bangunan dengan struktur atap bertingkat. Bale 
                                Gede biasanya merupakan rumah adat Bali yang digunakan sebagai tempat tinggal keluarga yang terdiri dari beberapa generasi.Bale Gede 
                                memiliki ciri khas atap bertingkat yang disebut dengan "meru". Meru merupakan bentuk atap bertingkat yang terdiri dari beberapa lapis dan 
                                jumlah tiang yang sesuai dengan tingkatan. Tiang-tiang pada meru disebut dengan "saka guru" yang merupakan simbol dari sembilan dewa utama 
                                agama Hindu.Selain itu, Bale Gede juga memiliki tiga bagian utama, yaitu "jeroan" yang merupakan bagian paling dalam rumah dan digunakan 
                                sebagai tempat beribadah, "jaba tengah" yang merupakan tempat berkumpul keluarga, dan "jaba sisi" yang merupakan ruang tamu untuk para tamu.
                                Bale Gede juga memiliki berbagai ornamen dan ukiran yang indah dan rumit. Ornamen dan ukiran tersebut umumnya memiliki motif bunga, daun, dan
                                binatang seperti burung, naga, dan kura-kura, yang memiliki makna filosofis dalam kepercayaan agama Hindu.Bale Gede dianggap sebagai salah 
                                satu warisan budaya Bali yang penting dan kaya akan makna filosofis. Bentuk atap yang unik dan ornamen-ornamen yang rumit pada Bale Gede 
                                menjadi daya tarik bagi wisatawan yang berkunjung ke Bali.
                            </p>
                        </div>            
                    </div>
            
                    <div class="card" style="--clr:#ff3e7f;">
                        <div class="imgBx">
                            <img src="../../../images/pawarengan.jpeg" alt="">
                        </div>
                        <div class="content-rumah">
                            <h2>Rumah Pawarengan</h2>
                            <p>Rumah Pawarengan adalah jenis arsitektur tradisional Bali yang terbuat dari kayu dan bambu. Rumah ini biasanya digunakan sebagai tempat 
                                untuk penyimpanan beras dan peralatan pertanian. Pawarengan juga sering dijadikan sebagai tempat berkumpul keluarga dan komunitas saat 
                                musim panen tiba.Pawarengan memiliki ciri khas atap yang tinggi dan tajam, serta struktur bangunan yang sederhana dan terbuka. Pada bagian 
                                atap terdapat ventilasi yang berfungsi untuk mengalirkan udara dan sinar matahari agar sirkulasi udara di dalam bangunan tetap lancar dan 
                                udara tidak lembap.Rumah Pawarengan umumnya dibangun di dataran tinggi Bali yang memiliki iklim yang lebih dingin, sehingga atap tajam 
                                berguna untuk mencegah turunnya suhu di dalam bangunan. Selain itu, bahan-bahan alami seperti kayu dan bambu juga memastikan ventilasi 
                                alami dan ramah lingkungan.
                            </p>
                        </div>            
                    </div>
            
                    <div class="card" style="--clr:#03a9f4;">
                        <div class="imgBx">
                            <img src="../../../images/lumbung.jpg" alt="">
                        </div>
                        <div class="content-rumah">
                            <h2>Rumah Lumbung</h2>
                            <p>Rumah adat Lumbung adalah jenis rumah adat tradisional masyarakat Bali yang khusus digunakan sebagai tempat penyimpanan padi atau beras. 
                                Rumah adat Lumbung memiliki bentuk yang unik dan menarik, dengan atap berbentuk seperti kerucut dan bagian bawahnya yang berbentuk persegi 
                                atau segi empat.Bentuk atap yang khas pada rumah adat Lumbung disebut "kul-kul" atau "sirap". Kul-kul pada atap Lumbung merupakan atap 
                                dengan bentuk kerucut yang semakin menyempit pada bagian puncaknya. Pada bagian bawah atap terdapat dinding-dinding yang dilengkapi dengan 
                                bilik-bilik kayu sebagai tempat menyimpan beras atau padi.Rumah adat Lumbung juga dilengkapi dengan tiang-tiang penyangga dan lantai yang 
                                terbuat dari kayu. Selain itu, rumah adat Lumbung sering dihiasi dengan ukiran dan ornamen-ornamen khas Bali yang indah dan rumit.Fungsi 
                                utama rumah adat Lumbung adalah sebagai tempat penyimpanan padi atau beras, karena bahan makanan tersebut merupakan bahan makanan pokok 
                                masyarakat Bali. Namun, rumah adat Lumbung juga sering digunakan sebagai tempat pertemuan dan berbagai acara adat Bali.Rumah adat Lumbung 
                                merupakan salah satu warisan budaya Bali yang kaya akan makna filosofis dan nilai-nilai tradisional. Bentuk atap yang unik dan ornamen-
                                ornamen khas Bali pada Lumbung menjadi daya tarik bagi wisatawan yang berkunjung ke Bali.  
                            </p>
                        </div>            
                    </div>
                </div>
            </div>
              
        </div>

        <!-- Upacara Adat -->
        <div class="test">
            <input type="checkbox" name="example_accordion" id="section5" class="accordion__input">
            <label for="section5" class="accordion__label">Section #5: Upacara Adat</label>
            <div class="accordion__content">
                <div class="slider-container">
                    <div class="left">
                        <div style="background-color: #f5f5f5;">
                            <h2>Upacara Ngaben</h2>
                            <p>Upacara ngaben adalah upacara yang sangat penting dan sakral bagi orang Bali dan harus dilakukan walaupun waktunya agak lama.
                                Maksudnya adalah pelaksanaan upacara ngaben boleh dilakukan beberapa tahun kemudian atau setelah keluarga mempunyai dana yang 
                                cukup. Upacara ngaben memerlukan biaya yang cukup besar sekarang berkisar di atas 10 juta. Biaya tersebut digunakan untuk 
                                membuat sesajen dan perlengkapan lainnya. Upacara ngaben dianggap sebagai simbol pengantar atma/jiwa ke alam pitra atau alam 
                                baka dan ini merupakan prinsip pertama dalam antologi upacara ngaben.Upacara ngaben merupakan rangkaian kegiatan yang 
                                berlangsung beberapa hari lamanya mulai dari penyelenggaraan jenazah sampai membuang abu ke laut besar. Setiap rangkaian 
                                kegiatan disertai sesajian yang disiapkan oleh anggota keluarga. Sesajen dibuat secara bersamasama menjelang hari pelaksanaan 
                                ngaben. Upacara ngaben dilaksanakan karena adanya anggapan bahwa roh tidak sampai ketempat asalnya yakni surga. Dunia gaib 
                                mendorong manusia untuk melakukan berbagai perbuatan, bertujuan mencari keselarasan hubungan, yang disebut kelakuan keagamaan 
                                atau religiousbehavior. Kelakuan keagamaan yang dilaksanakan menurut tatakelakuan yang baku disebut upacara keagamaan atau 
                                religious ceremonies atau rites. Tiap upacara keagamaan dapat terbagi kedalam empat komponen ialah: <br>
                                1. Tempat upacara, <br>
                                2 saat upacara, <br>
                                3 benda-benda dan alat upacara dan <br>
                                4, orang-orang yang melakukan dan memimpin upacara (Koentjaraningrat, 1974:253). <br>
                                Upacara ngaben dipimpin oleh pendeta, dalam hal ini pendeta berperan penting pada pelakaksanaan ngaben. Melalui pendeta arwah 
                                leluhur bisa kembali ketempat asal dan keluarga yang ditinggalkan bisa tenang ini juga sebagai wujud rasa hormat anggota 
                                keluarga terhadap orang tuanya. Setelah itu barulah anggota keluarga dapat beraktivitas kembali seperti biasa.
                            </p>
                        </div>
            
                        <div style="background-color: #f5f5f5;">
                            <h2>Upacara Melasti</h2>
                            <p>Upacara melasti atau melis merupakan salah satu upacara yang dilaksanakan ditepi laut ataupun danau. Upacara ini bertujuan untuk
                                <i>nganyudang malaning gumi ngamet tirta amerta</i> yang berarti menghanyutkan kotoran alam dengan menggunakan air kehidupan. 
                                Dalam pandangan Hindu, laut diyakini sebagai salah satu tempat yang memiliki energi positif dari alam dan dapat dimanfaatkan 
                                bagi kesejahteraan makhluk hidup (Wiana, 2014:37). <br>
                                Upacara melasti di Bali lebih populer sebagai salah satu rangkaian dari hari suci Nyepi, yang sering dilaksanakan setahun sekali
                                berdasarkan perhitungan kalender Caka. Diluar rangkaian hari suci Nyepi upacara melasti juga sering dilaksanakan oleh umat Hindu.
                                Misalnya sebagai rangkaian dari karya agung pada suatu pura. Namun saat rangkaian hari suci Nyepi, upacara melasti serentak 
                                dilaksanakan oleh Desa Adat yang ada di Bali. Kesemarakan dari upacara melasti memiliki makna tersendiri bagi umat Hindu. 
                                Terdapat kerinduan dalam diri untuk melaksanakan upacara melasti tersebut, sehingga ketika upacara melasti dilaksanakan umat
                                Hindu mengikuti prosesinya dengan penuh antusias. Hal ini merupakan bentuk kongkrit dari kecintaan umat Hindu terhadap tradisi 
                                keagamaan yang dimilikinya. Antusisme semacam ini harus selalu dipupuk dan diarahkan secara tepat agar pelaksanaan upacara
                                keagamaan mendatangkan maanfaat bagi alam semesta
                            </p>
                        </div>
            
                        <div style="background-color: #f5f5f5;">
                            <h2>Upacara Tumpek Landep</h2>
                            <p>Ritual Tumpek Landep merupakan hari peringatan turunnya kekuatan Sang Hyang Widhi ke dunia, yang dikhususkan untuk memohon 
                                keselamatan kepada Tuhan yang Maha Esa dalam manifestasinya sebagai Dewa Senjata atau dengan kata lain ritual Tumpek Landep 
                                merupakan bentuk rasa syukur umat Hindu terhadap Sang Hyang Widhi yang telah memberikan ketajaman pemikiran kepada manusia, 
                                adapun ketajaman itu disimbolkan layaknya senjata yang berbentuk lancip/runcing seperti keris, tombak dan pedang (Sudarsana, 2003 : 15).
                                <br>
                                Pesatnya perkembangan ilmu pengetahuan dan teknologi di tengah-tengah masyarakat menjadi faktor pendorong perubahan atas cara 
                                pandangan masyarakat suku Bali di Desa Puudongi, Kecamatan Polinggona, Kabupaten Kolaka terhadap ritual Tumpek Landep. Dahulu 
                                ritual Tumpek Landep yang semula bertujuan untuk mengembalikan dan menjaga kesucian serta kekuatan sakti yang terkandung dari 
                                benda - benda pusaka seperti keris, tombak dan pedang, kini ritual Tumpek Landep dilaksanakan untuk mensucikan semua benda yang
                                terbuat dari bahan dasar besi, logam dan emas seperti mobil, motor, perahu, cangkul, pisau, senjata api, komputer, televisi dan
                                lain-lain yang dapat membantu memudahkan dan memberi perlindungan kepada penggunanya dalam menjalani kehidupan.
                            </p>
                        </div>
                    </div>
            
                    <div class="right">
                        <div style="background-image: url(../../../images/ngaben.jpg);"></div>
                        <div style="background-image: url(../../../images/melasti.jpeg);"></div>
                        <div style="background-image: url(../../../images/tumpek.jpeg);"></div>
                    </div>
            
                    <div class="action-buttons">
                        <button class="down">
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <button class="up">
                            <i class="fa-solid fa-chevron-up"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Destinasi Wisata -->
        <div class="test">
            <input type="checkbox" name="example_accordion" id="section6" class="accordion__input">
            <label for="section6" class="accordion__label">Section #6: Destinasi Wisata</label>
            <div class="accordion__content">
                <div class="container-rumah">
                    <div class="card" style="--clr:#009688;">
                        <div class="imgBx">
                            <img src="../../../images/Tanah Lot.jpg" alt="">
                        </div>
                        <div class="content-rumah">
                            <h2>Tanah Lot</h2>
                            <p>Tanah Lot merupakan salah satu tempat wisata yang paling banyak dikunjungi di Bali, terutama oleh para wisatawan 
                                yang mencari keindahan alam dan keunikan kebudayaan Bali.
                            </p>
                        </div>            
                    </div>
            
                    <div class="card" style="--clr:#ff3e7f;">
                        <div class="imgBx">
                            <img src="../../../images/GWK.jpg" alt="">
                        </div>
                        <div class="content-rumah">
                            <h2>Garuda Wisnu Kencana</h2>
                            <p>Garuda Wisnu Kencana (GWK) adalah sebuah taman budaya yang terletak di desa Ungasan, Kabupaten Badung, Bali, 
                                Indonesia. Taman budaya ini memiliki patung Garuda Wisnu Kencana, yang merupakan patung tertinggi ketiga di dunia 
                                dengan ketinggian 121 meter, terdiri dari patung Garuda (burung mitologi Hindu) dengan lebar sayap 64 meter dan 
                                patung Wisnu (dewa pelindung) dengan tinggi 20 meter. Selain itu, GWK juga memiliki area teater, galeri seni, toko 
                                suvenir, restoran, serta taman rekreasi dan pemandangan yang menarik.Taman budaya Garuda Wisnu Kencana dibangun 
                                sebagai simbol dari kebangkitan budaya Indonesia dan menjadi salah satu objek wisata terkenal di Bali. Selain 
                                menyajikan patung Garuda Wisnu Kencana yang megah, GWK juga menampilkan berbagai pertunjukan seni dan budaya 
                                Indonesia, seperti tari Kecak, tari Barong, dan pertunjukan musik tradisional Bali.
                                Selain itu, di dalam taman budaya GWK juga terdapat galeri seni yang menampilkan karya-karya seniman Indonesia dan 
                                toko suvenir yang menjual berbagai macam produk kerajinan tangan Indonesia. Wisatawan juga dapat menikmati berbagai
                                hidangan kuliner Indonesia dan internasional di restoran-restoran yang tersedia di dalam area GWK.
                            </p>
                        </div>            
                    </div>
            
                    <div class="card" style="--clr:#03a9f4;">
                        <div class="imgBx">
                            <img src="../../../images/Pura.jpeg" alt="">
                        </div>
                        <div class="content-rumah">
                            <h2>Pura Luhur Uluwatu</h2>
                            <p>Pura Luhur Uluwatu adalah sebuah pura Hindu yang terletak di ujung selatan Bali, tepatnya di desa Pecatu, Kecamatan 
                                Kuta Selatan, Kabupaten Badung. Pura Luhur Uluwatu dibangun pada abad ke-11 oleh seorang raja Bali yang bernama Mpu 
                                Kuturan, dan saat ini menjadi salah satu objek wisata terkenal di Bali.
                                Pura Luhur Uluwatu terletak di atas tebing yang menjorok ke laut dan memiliki pemandangan yang sangat indah, terutama
                                saat matahari terbenam. Selain itu, pura ini juga dikenal sebagai tempat yang suci dan menjadi salah satu pura paling 
                                penting di Bali. Di dalam pura, terdapat beberapa bangunan suci dan beberapa patung dewa dan dewi Hindu, termasuk 
                                patung Ganesha, dewa yang dipercayai sebagai penghalau rintangan.
                                Selain sebagai tempat suci, Pura Luhur Uluwatu juga terkenal sebagai tempat yang menarik bagi para wisatawan. Salah 
                                satu atraksi yang paling terkenal adalah pertunjukan tari Kecak yang dilakukan di area pura. Pertunjukan tari Kecak di
                                Pura Luhur Uluwatu biasanya dimulai pada sore hari, menjelang matahari terbenam, dan dilakukan di area teater yang 
                                terletak di luar pura. Pertunjukan ini melibatkan puluhan pria yang duduk melingkar di atas panggung dan menyerukan 
                                suara "cak" secara bersamaan, sambil menari mengikuti cerita Ramayana.
                                Untuk masuk ke dalam area Pura Luhur Uluwatu, wisatawan perlu membayar tiket masuk yang cukup terjangkau. Selain itu, 
                                wisatawan juga diwajibkan untuk mengenakan kain sarung yang disediakan di area pura untuk menghormati kesucian tempat 
                                tersebut.  
                            </p>
                        </div>            
                    </div>
                </div>
            </div>
        </div>

        <!-- Lagu Adat -->
        <div class="test">
            <input type="checkbox" name="example_accordion" id="section7" class="accordion__input">
            <label for="section7" class="accordion__label">Section #7: Lagu Adat</label>
            <div class="accordion__content">
                <div class="mytabs">
                    <input type="radio" id="tab1" name="page1" checked="checked">
                    <label for="tab1">Dewa Ayu</label>
                    <div class="tab">
                        <h2>Dewa Ayu</h2>
                        <p>Lagu adat Dewa Ayu adalah salah satu lagu tradisional dari Bali, Indonesia. Lagu ini biasanya dinyanyikan oleh para wanita dalam upacara-upacara adat Bali, seperti upacara pernikahan, upacara keagamaan, atau upacara kehormatan.
                            Secara musikal, lagu Dewa Ayu memiliki irama yang khas dengan menggunakan instrumen tradisional Bali seperti gamelan, gender, dan kendang. Lirik lagu Dewa Ayu biasanya berisi doa atau ungkapan syukur kepada para dewa dan nenek moyang.
                            Lagu Dewa Ayu biasanya dinyanyikan dalam bahasa Bali yang klasik, sehingga tidak mudah dimengerti oleh orang yang tidak berasal dari Bali. Namun, dalam beberapa versi modern, lagu ini dapat disertai dengan terjemahan dalam bahasa Indonesia atau bahasa Inggris.
                            Lagu Dewa Ayu memiliki makna yang dalam dan menjadi simbol kebersamaan dalam budaya Bali. Lagu ini juga sering dijadikan sebagai sarana untuk menjaga keharmonisan dalam masyarakat Bali.
                        </p>
                        <video src="../../../audio/Dewa Ayu.mp4" controls></video>
                    </div>
            
                    <input type="radio" id="tab2" name="page1">
                    <label for="tab2">Janger</label>
                    <div class="tab">
                        <h2>Janger</h2>
                        <p>Janger adalah salah satu lagu tradisional Bali yang terkenal. Lagu ini berasal dari daerah Buleleng di Bali, dan biasanya dinyanyikan oleh kelompok pria dan wanita dalam acara-acara adat atau pertunjukan seni.
                            Secara musikal, lagu Janger memiliki irama yang ceria dan menggembirakan. Lagu ini biasanya diiringi dengan alat musik tradisional Bali seperti gamelan, kendang, dan ceng-ceng. Lirik lagu Janger biasanya berisi tentang cinta dan keindahan alam Bali.
                            Lagu Janger biasanya dinyanyikan oleh kelompok pria dan wanita secara bergantian. Pada bagian awal lagu, kelompok pria akan memulai dengan lagu yang berisi tentang keindahan Bali dan mengajak kelompok wanita untuk bergabung. Kemudian, kelompok wanita akan menjawab dengan lagu yang berisi tentang cinta dan mengajak kelompok pria untuk menari bersama.
                            Tarian yang menemani lagu Janger biasanya berisi gerakan yang ceria dan lincah, sehingga cocok untuk menghibur penonton. Selain itu, lagu Janger juga sering dipadukan dengan tari Topeng, di mana para penari mengenakan topeng tradisional Bali.
                            Lagu Janger menjadi simbol kebersamaan dan keindahan alam Bali. Lagu ini juga menjadi ciri khas budaya Bali yang terkenal di seluruh dunia.
                        </p>
                        <video src="../../../audio/Janger.mp4" controls></video>
                    </div>
            
                    <input type="radio" id="tab3" name="page1">
                    <label for="tab3">Ngusak Asik</label>
                    <div class="tab">
                        <h2>Ngusak Asik</h2>
                        <p>Ngusak Asik sebagai salah satu lagu daerah telah diakui secara resmi sebagai lagu yang berasal dari Bali. Lagu Ngusak Asik yang berasal dari Bali ini memilikin tempo cepat dan melodi jenaka. Seperti kebanyakan lagu Bali, lagu ini juga banyak menggunakan inversi dan repetisi berirama.
                            Lagu ini secara garis besar menggambarkan ciri khas dan juga adat istiadat penduduk setempat yang menceritakan tentang kisah cinta antara seorang anak laki-laki dan seorang gadis.
                            Lagu Ngusak Asik sering dipertunjukkan pada berbagai acara adat seperti upacara keagamaan, pernikahan, dan penyambutan tamu penting. Lagu ini menjadi salah satu bagian dari seni dan budaya Bali yang sangat dihargai oleh masyarakat Bali dan juga menjadi daya tarik bagi wisatawan yang berkunjung ke Bali.
                        </p>
                        <video src="../../../audio/NgusakAsik.mp4" controls></video>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tari Adat -->
        <div class="test">
            <input type="checkbox" name="example_accordion" id="section8" class="accordion__input">
            <label for="section8" class="accordion__label">Section #8: Tari Adat</label>
            <div class="accordion__content">
                <div class="tempat">

                    <div class="kartu active">
                      <div class="shadow"></div> 
                      <div class="label">
                        <div class="icon" style="--color: green">
                          <ion-icon name="sunny"></ion-icon>
                        </div>
                        <div class="info">
                          <div class="title">Tari Pendet</div>
                          <div>Tarian Khas Bali</div>
                        </div>
                      </div>
                    </div>
              
                    <div class="kartu">
                      <div class="shadow"></div> 
                      <div class="label">
                        <div class="icon" style="--color: blue">
                          <ion-icon name="sparkles"></ion-icon>
                        </div>
                        <div class="info">
                          <div class="title">Tari Kecak</div>
                          <div>Tarian Khas Bali</div>
                        </div>
                      </div>
                    </div>
              
                    <div class="kartu">
                      <div class="shadow"></div> 
                      <div class="label">
                        <div class="icon" style="--color: orange">
                          <ion-icon name="thunderstorm"></ion-icon>
                        </div>
                        <div class="info">
                          <div class="title">Tari Legong</div>
                          <div>Tarian Khas Bali</div>
                        </div>
                      </div>
                    </div>
              
                    <div class="kartu">
                      <div class="shadow"></div> 
                      <div class="label">
                        <div class="icon" style="--color: black">
                          <ion-icon name="snow"></ion-icon>
                        </div>
                        <div class="info">
                          <div class="title">Tari Barong</div>
                          <div>Tarian Khas Bali</div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        var slideIndex = 1;
            showSlide(slideIndex);
        
        function nextslide(n){
            showSlide(slideIndex += n);
        }

        function dotslide(n){
            showSlide(slideIndex=n);
        }

        function showSlide(n){
            var i;
            var slides = document.getElementsByClassName("imgslide");
            var dot = document.getElementsByClassName("dot");

            if(n>slides.length){
                slideIndex = 1;
            }

            if(n<1){
                slideIndex = slides.length;
            }

            for(i=0; i<slides.length; i++){
                slides[i].style.display = "none";
            }

            for(i=0; i<slides.length; i++){
                dot[i].className = dot[i].className.replace(" active","");
            }

            slides[slideIndex-1].style.display = "block";
            dot[slideIndex - 1].className += " active";
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../script/wisata.js"></script>
    <script src="../../../script/upacara.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script src="../../../script/tari.js"></script>
</body>
</html>
</body>
</html>