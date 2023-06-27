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
                <a href="../account/editProfile.php"><ion-icon name="person-outline"></ion-icon></a>
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
                <div class="add-new-province"><a href="../selection/selectionPage.php">Switch province</a></div>
            </div>
        </div>
    </nav>
    
    <h1>Provinsi Bali</h1>

    <div class="logoProv">
        <img src="../../../images/LogoBali.png" alt="">
        <div class="general">
            <p>
                <b>Pulau:</b><span id="span1">Diantara Pulau Jawa dan Pulau Lombok</span><br>
                <b>Guberner:</b><span id="span2">Dr. Ir. I Wayan Koster, M.M.</span><br>
                <b>Julukan:</b><span id="span3">Pulau Dewata, Pulau Seribu Pura</span><br>
                <b>Ibu Kota:</b><span id="span4">Denpasar</span><br>
                <b>Agama Mayoritas:</b><span id="span5">Hindu</span><br>
                <b>Zona Waktu:</b><span id="span6">Waktu Indonesia bagian Tengah (WITA)</span> <br>
                <b>Titik Tertinggi:</b><span id="span7">Gunung Agung</span>
            </p>
            
        </div>
    </div>

    <div class="accordion">
        <!-- Makanan Khas -->
        <div class="test">
          <input type="checkbox" name="example_accordion" id="section1" class="accordion__input">
          <label for="section1" class="accordion__label">Section #1: Makanan Khas</label>
          <div class="accordion__content">
                <div class="guide">
                    <div class="current-province">
                        <ion-icon name="information-circle-outline" class="ikon"></ion-icon>
                    </div>
                    <div class="dropdown-container" id="guide2">
                        <p>Try clicking the cylinder under !</p>
                    </div>
                </div>

                <div class="content-makanan">
                    <div class="container-makanan">
                            <div class="content-slide">
                                <input type="radio" name="select" id="slide1" checked>
                                <input type="radio" name="select" id="slide2">
                                <input type="radio" name="select" id="slide3">
                                <input type="radio" name="select" id="slide4">
                                <input type="radio" name="select" id="slide5">
                                <input type="radio" name="select" id="slide6">
                                <input type="radio" name="select" id="slide7">
                                <input type="checkbox" id="slideImg">
            
                                <div class="slider-makanan">
                                    <label for="slide1" class="slide slide1"></label>
                                    <label for="slide2" class="slide slide2"></label>
                                    <label for="slide3" class="slide slide3"></label>
                                    <label for="slide4" class="slide slide4"></label>
                                    <label for="slide5" class="slide slide5"></label>
                                    <label for="slide6" class="slide slide6"></label>
                                    <label for="slide7" class="slide slide7"></label>
                                </div>
            
                                <div class="inner">
                                    <label for="slideImg" class="gmbr">
                                        <img class="img1" src="../../../images/AyamBetutu.jpg">
                                    </label>
                                    <div class="konten konten1">
                                        <div class="jdul">Ayam Betutu</div>
                                        <div class="isip">
                                            Ayam Betutu merupakan masakan nusantara khas bali yang awalnya berasal dari wilayah Gianyar, Ubud 
                                            kemudian meluas ke berbagai kota bahkan terkenal sampai ke mancanegara. <br>
                                            Bebek atau ayam dibalur dengan bumbu <b><i>base genep</i></b> yang terbuat dari 15 jenis rempah 
                                            khas indonesia sehingga menghasilkan cita rasa yang kaya akan rempah yang kuat dan tajam. Daging 
                                            kemudian dibungkus dengan daun pinang atau daun pisang kemudian dibakar. Cara pembakaran tradisional 
                                            adalah dengan cara dikubur selama delapan sampai sepuluh jam didalam tanah dengan bara.
                                        </div>
                                        <a href="https://id.theasianparent.com/ayam-betutu"><button>Read More</button></a>
                                    </div>
                                </div>
            
                                <div class="inner">
                                    <label for="slideImg" class="gmbr">
                                        <img class="img2" src="../../../images/BulungBuni.jpeg">
                                    </label>
                                    <div class="konten konten2">
                                        <div class="jdul">Bulung Buni Kuah Pindang</div>
                                        <div class="isip">
                                            Bulung buni kuah pindang merupakan kuliner khas yang berasal dari Kabupaten Jembrana dan sering ditemukan didaerah pesisir pantai. 
                                            Bulung buni kuah pindang memiliki banyak manfaat untuk kesehatan, beberapa diantaranya seperti mencegah
                                            kanker, darah tinggi, dan ostoeporosis.<br>
                                            Rumput laut hijau yang dihidangkan dengan dibaluri bumbu kelapa parut, kuah pindang, lengkuas, cabai merah, terasi bakar, dan perasan jeruk limau. 
                                            Cita rasa dari bulung buni kuah pindang ini merupakan perpaduan rasa pedas dari bumbu, rasa gurih dari kuah pindang, dan rasa asin dari bulung 
                                            buni yang memiliki tekstur seperti daun tapi memiliki kantong yang berisi cairan. <br>
                                            
                                        </div>
                                        <a href="https://budaya-indonesia.org/Rujak-Bulung"><button>Read More</button></a>
                                    </div>
                                </div>
            
                                <div class="inner">
                                    <label for="slideImg" class="gmbr">
                                        <img class="img3" src="../../../images/NasiCampurBali.jpg">
                                    </label>
                                    <div class="konten konten3">
                                        <div class="jdul">Nasi Campur Bali</div>
                                        <div class="isip">
                                            Nasi Campur Bali merupakan campuran nasi dengan berbagai macam lauk pauk dengan cita rasa yang gurih 
                                            seperti ayam yang dipanggang dengan bumbu bali, telur, beberapa jenis campuran sayuran, dan juga sate lilit. <br>
                                            Beberapa daerah yang cukup populer untuk mencicipi nasi campur bali antara lain di daerah Teuku Umar, Seminyak, dan Kuta.
                                        </div>
                                        <a href="https://www.nibble.id/nasi-campur-terenak-di-bali/"><button>Read More</button></a>
                                    </div>
                                </div>

                                <div class="inner">
                                    <label for="slideImg" class="gmbr">
                                        <img class="img4" src="../../../images/NasiJinggo.jpeg">
                                    </label>
                                    <div class="konten konten4">
                                        <div class="jdul">Nasi Jinggo</div>
                                        <div class="isip">
                                           Nasi Jinggo atau Nasi Jenggo adalah sejenis Nasi Kucing khas bali. Penjual nasi jinggo sangat mudah ditemui diseluruh wilayah di Bali.<br>
                                           Nasi Jinggo merupakan makanan siap saji yang dikemas menggunakan daun pisang dengan porsi kecil dengan isian berupa nasi putih sekepalan tangan dengan lauk-pauk dan sambal.
                                           Nasi Jinggo memiliki beragam pilihan lauk mulai dari ayam, ikan, sapi, telur, hingga daging babi. Lauk-pauk yang ada biasanya adalah sambal goreng tempe, serundeng, mi goreng atau sayuran. 
                                        </div>
                                        <a href="https://www.detik.com/bali/kuliner/d-6310820/asal-usul-nasi-jinggo-nasi-kucing-dari-bali-pemadam-kelaparan"><button>Read More</button></a>
                                    </div>
                                </div>

                                <div class="inner">
                                    <label for="slideImg" class="gmbr">
                                        <img class="img5" src="../../../images/NasiTepeng.jpg">
                                    </label>
                                    <div class="konten konten5">
                                        <div class="jdul">Nasi Tepeng</div>
                                        <div class="isip">
                                            Nasi Tepeng adalah sarapan pilihan utama bagi masyarakat bali khususnya yang tinggal di Kabupaten Gianyar. <br>
                                            Nasi khas Gianyar ini memiliki tekstur agak lembek seperti bubur yang didalamnya terdapat beragam jenis bahan seperti nangka, ayam 
                                            goreng, kacang panjang, kacang merah, terong, daun kelor, telur dan berbagai rempah khas bali.
                                            Nasi Tepeng memiliki cita rasa yang gurih dan sedikit pedas karena beras yang digunakan direbus bersama santan yang kemudian dicampur 
                                            dengan kunyit, daun salam, garam serta lada.
                                        </div>
                                        <a href="https://www.kintamani.id/nasi-tepeng-khas-gianyar-kuliner-pagi-hari-yang-murah-meriah-di-bali/"><button>Read More</button></a>
                                    </div>
                                </div>

                                <div class="inner">
                                    <label for="slideImg" class="gmbr">
                                        <img class="img6" src="../../../images/SatePlecing.jpg">
                                    </label>
                                    <div class="konten konten6">
                                        <div class="jdul">Sate Plecing</div>
                                        <div class="isip">
                                            Sate Plecing khas daerah Singaraja, umumnya sama dengan sate yang ada di Indonesia. Berbahan dasar daging ikan laut, ayam, sapi atau daging babi.
                                            Pembeda dari sate plecing ini adalah bumbunya yang didominasi cabai merah dengan aroma terasi dan limau yang menyengat. Bahan utama dari bumbu plecing
                                            khas bali adalah  cabai rawit, cabai merah besar, bawang merah, gula pasir, terasi, garam, tomat segar dan tentunya jeruk limau sehingga makanan in memiliki 
                                            rasa pedas, gurih, dan asam segar dari limau. 
                                        </div>
                                        <a href="https://www.singarajapost.com/kuliner/pr-6085230088/resep-sate-plecing-menu-identik-pulau-bali-yang-jadi-favorit-wisatawan"><button>Read More</button></a>
                                    </div>
                                </div>

                                <div class="inner">
                                    <label for="slideImg" class="gmbr">
                                        <img class="img7" src="../../../images/TumAyam.jpg">
                                    </label>
                                    <div class="konten konten7">
                                        <div class="jdul">Tum Ayam</div>
                                        <div class="isip">
                                            Pembuatan Tum Ayam sama seperti pembuatan pepes. Daging ayam dicincang kemudian dibumbui dengan berbagai rempah dan santan,
                                            lalu dibungkus dengan daun pisang dan dikukus. Tum Ayam memiliki cita rasa yang gurih dari bumbu dan juga santan yang digunakan. Daun 
                                            pisang yang digunakan sebagai bungkus juga menambah aroma tersendiri
                                        </div>
                                        <a href="https://katalogkuliner.com/2015/08/masakan-bali-tum-daging-dan-tum-ayam-khas-bali.html"><button>Read More</button></a>
                                    </div>
                                </div>

                            </div>
                    </div>
                </div>
          </div>
        </div>

        <!-- Pakaian Adat -->
        <div class="test">
          <input type="checkbox" name="example_accordion" id="section2" class="accordion__input">
          <label for="section2" class="accordion__label">Section #2: Pakaian Adat</label>
          <div class="accordion__content">
                <div class="guide">
                    <div class="current-province">
                        <ion-icon name="information-circle-outline" class="ikon"></ion-icon>
                    </div>
                    <div class="dropdown-container" id="guide2">
                        <p>Hover on the cards!</p>
                    </div>
                </div>

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
                                <p>
                                    Kain dengan motif kotak-kotak yang biasanya dikenakan dibagian lapisan atas kain kamen dengan cara diikat melingkari bagian pinggang berlawanan arah jarum jam.
                                    Kain Saput umumnya digunakan untuk upacara keagamaan atau pernikahan.
                                </p>
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
                                <p>Pakaian tradisional masyrakat bali yang digunakan saat upacara pernikahan atau potong gigi. 
                                    Pakaian ini dilengkapi dengan berbagai aksesoris emas dan riasan sehingga memiliki kesan mewah dan spesial, 
                                    maka dari itu payas agung tidak ditujukan untuk berbagai aktivitas.
                                </p>
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
                                <p>Payas Madya memiliki kesan yang lebih santai dan bisa dikenakan dalam ritual keagamaan dan pesat adat.
                                   Padas madya tidak dikenakan dengan aksesoris yang terlalu banyak sehingga bisa juga dikenakan untuk aktivitas sehari-hari.</p>
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
                                <p>Payas Alit merupakan pakaian adat yang jauh lebih sederhana dan digunakan dikenakan untuk aktivitas sehari-hari atau 
                                    untuk keperluan ibadah ke pura.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="tombol">
                        <a href="https://www.gramedia.com/literasi/pakaian-adat-bali/"><button>Read More</button></a>
                    </div>
                </div>
          </div>
        </div>

        <!-- Alat Musik Tradisional -->
        <div class="test">
          <input type="checkbox" name="example_accordion" id="section3" class="accordion__input">
          <label for="section3" class="accordion__label">Section #3: Alat Musik Tradisional</label>
          <div class="accordion__content" id="atmus">
            <div class="guide">
                <div class="current-province">
                    <ion-icon name="information-circle-outline" class="ikon"></ion-icon>
                </div>
                <div class="dropdown-container" id="guide2">
                    <p>Read Only !</p>
                </div>
            </div>

            <div class="mvv-container">
                <div class="mv-block">
                    <div class="image">
                        <img src="../../../images/GamelanBali.png" alt="">
                    </div>
                    <div class="kata">
                        <h7>Gamelan Bali</h7>
                        <p class ="kecil" align="justify">Gamelan Bali merupakan alat musik tradisional Bali berupa ansambel yang terdiri dari berbagai macam alat-alat musik lainnya 
                            seperti gong, gambang, kendang, kempul, bonang dan masih banyak lagi yang lainnya.Gamelan Bali biasanya digunakan oleh 
                            masyarakat Bali dalam berbagai acara adat dan juga ritual keagamaan yang ada di Bali. Dimana ada sekitar 25 jenis gamelan yang 
                            berkembang di berbagai pedesaan, ada yang terbuat dari bambu dan ada yang terbuat dari logam.
                        </p>
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
                        <h7>Rindik</h7>
                        <p align="justify">Nama Rindik berasal dari bahasa Jawa kuno yang berarti ditempatkan dengan rapi dan memiliki sedikit celah. 
                            Instrumen ini dimainkan oleh dua hingga lima orang, dua memainkan Rindik dan sisanya memainkan suling dan gong puru. <br><br>
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
                        <h7>Ceng - Ceng</h7>
                        <p align = "justify">Salah satu elemen kunci dari gamelan Bali yang membedakannya dari gamelan lainnya adalah alat musik Ceng-ceng. Dalam perangkat 
                            Gamelan Bali, alat musik mirip simbal ini dapat memberikan efek suara yang dinamis saat dimainkan di ansambel Gamelan. Suara 
                            yang dikeluarkan merupakan hasil dari perpaduan delapan buah logam bundar yang diadu satu dengan lainnya. Ceng-ceng terdiri dari
                            6 logam bulat di bagian bawah dan 2 logam bulat di bagian atas. Cara bermainnya dengan memukul logam putaran atas dengan logam 
                            putaran bawah. Alat musik ini disebut juga dengan ceng-ceng ricik.</p>
                    </div>
                </div>

                <div class="tombol">
                    <a href="https://www.gramedia.com/best-seller/alat-musik-bali/"><button>Read More</button></a>
                </div>

            </div>
          </div>
            
        </div>

        <!-- Rumah Adat -->
        <div class="test">
            <input type="checkbox" name="example_accordion" id="section4" class="accordion__input">
            <label for="section4" class="accordion__label">Section #4: Rumah Adat</label>
            <div class="accordion__content">
                <div class="guide">
                    <div class="current-province">
                        <ion-icon name="information-circle-outline" class="ikon"></ion-icon>
                    </div>
                    <div class="dropdown-container" id="guide2">
                        <p>Hover on the inner box !</p>
                    </div>
                </div>

                <div class="container-rumah">
                    <div class="card" style="--clr:#0b495e;">
                        <div class="imgBx">
                            <img src="../../../images/balegede.jpg" alt="">
                        </div>
                        <div class="content-rumah">
                            <h2>Bale Gede</h2>
                            <p> Rumah dengan ruangan berukuran paling besar serta memiliki ciri khas struktur atap bertingkat yang disebut dengan 
                                <b><i>meru</i></b> dan diperkokoh dengan 12 tiang. Bale Gede merupakan salah satu warisan budaya Bali yang kaya akan 
                                makna filosofis mulai dari atap, tiang, hingga ornamen yang ada didalamnya. Bale gede dibangun lebih tinggi dari 
                                rumah adat lainnya karena digunakan sebagai tempat diadakannya beragam upacara adat, membakar sesaji dan berkumpul
                                untuk menyantap makanan khas bali.
                            </p>
                        </div>            
                    </div>
            
                    <div class="card" style="--clr:#0b495e;">
                        <div class="imgBx">
                            <img src="../../../images/pawarengan.jpeg" alt="">
                        </div>
                        <div class="content-rumah">
                            <h2>Rumah Pawarengan</h2>
                            <p>Rumah Pawarengan adalah Rumah yang biasanya digunakan sebagai tempat untuk menyimpan dan mengolah makanan atau yang
                                biasanya disebut dapur. Rumah Pawarengan berukuran sedang dan terletak disebelah barat laut atau selatan dari rumah
                                utama.Rumah ini memiliki 2 ruangan, untuk memasak dan untuk menyimpan makanan, peralatan masak dan lain sebagainya.
                            </p>
                        </div>            
                    </div>
            
                    <div class="card" style="--clr:#0b495e;">
                        <div class="imgBx">
                            <img src="../../../images/lumbung.jpg" alt="">
                        </div>
                        <div class="content-rumah">
                            <h2>Rumah Lumbung</h2>
                            <p>Rumah adat dengan atap berbentuk seperti kerucut yang semakin menyempit pada bagian puncaknya atau biasa disebut "kul
                                -kul" atau "sirap" dan bagian bawahnya yang berbentuk segi empat dengan dinding yang dilengkapi dengan bilik-bilik 
                                kayu sebagai tempat menyimpan makanan pokok yang tahan lama seperti padi dan jagung. Rumah adat Lumbung juga 
                                dilengkapi dengan tiang-tiang penyangga dan lantai yang terbuat dari kayu. Selain itu, rumah adat Lumbung sering 
                                dihiasi dengan ukiran dan ornamen-ornamen khas Bali yang indah.
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
                <div class="guide">
                    <div class="current-province">
                        <ion-icon name="information-circle-outline" class="ikon"></ion-icon>
                    </div>
                    <div class="dropdown-container" id="guide2">
                        <p>Try clicking the cylinder under!</p>
                    </div>
                </div>

                <div class="content-makanan">
                    <div class="container-makanan">
                        <div class="content-slide">
                            <input type="radio" name="select1" id="slide1u" checked>
                            <input type="radio" name="select1" id="slide2u">
                            <input type="radio" name="select1" id="slide3u">    
                            <input type="checkbox" id="slideImgu">
            
                            <div class="slider-makanan">
                                <label for="slide1u" class="slide slide1u"></label>
                                <label for="slide2u" class="slide slide2u"></label>
                                <label for="slide3u" class="slide slide3u"></label>
                            </div>
            
                            <div class="inner">
                                <label for="slideImg" class="gmbr">
                                    <img class="img1u" src="../../../images/ngaben.jpg">
                                </label>
                                <div class="konten konten1u">
                                    <div class="jdul">Ngaben</div>
                                    <div class="isip">
                                        Ngaben merupakan upacara adat prosesi pembakaran jenazah di Bali yang dipimpin oleh pendeta. Ngaben merupakan upacara yang penting dan sakral bagi orang Bali dan upacara ini harus 
                                        dilakukan meskipun waktunya agak lama (dilakukan beberapa tahun kemudian) karena masyarkat bali memercayai bahwa upacara Ngaben dapat membebaskan roh orang 
                                        yang telah meninggal dari ikatan duniawi menuju surga dan menunggu reinkarnasi. <br>
                                        Upacara ngaben merupakan rangkaian kegiatan yang berlangsung beberapa hari lamanya mulai dari penyelenggaraan jenazah sampai membuang abu ke laut besar dan 
                                        memerlukan biaya yang cukup besar untuk membuat sesajen dan perlengkapan lainnya. 
                                    </div>
                                    <a href="https://katadata.co.id/agung/berita/63294be7b5374/mengenal-tradisi-ngaben-cara-masyarakat-hindu-bali-menuju-nirwana"><button>Read More</button></a>
                                </div>
                            </div>
            
                            <div class="inner">
                                <label for="slideImg" class="gmbr">
                                    <img class="img2u" src="../../../images/melasti.jpeg">
                                </label>
                                <div class="konten konten2u">
                                    <div class="jdul">Melasti</div>
                                    <div class="isip">
                                        Upacara Melasti merupakan sebuah tradisi yang dilakukan oleh umat Hindu dengan cara membasuh muka atau menyentuh air disumber mata air seperti pinggir laut atau
                                        danau. Upacara ini biasanya dilaksanakan 3 - 4 hari sebelum Hari Raya Nyepi sebagai upaya penyucian diri dan alam dan sebagai simbol menghanyutkan kotoran alam dengan 
                                        menggunakan air kehidupan. Diluar rangkaian hari suci Nyepi upacara melasti juga sering dilaksanakan oleh umat Hindu. Misalnya sebagai rangkaian dari karya agung 
                                        pada suatu pura. Sejumlah objek wisata pantai populer dijadikan sebagai tujuan Melasti adalah pantai Kuta, Jimbaran, Padang Galak Sanur dan Amed.    
                                    </div>
                                    <a href="https://www.balitoursclub.net/upacara-melasti-di-bali/"><button>Read More</button></a>
                                </div>
                            </div>
            
                            <div class="inner">
                                <label for="slideImg" class="gmbr">
                                    <img class="img3u" src="../../../images/tumpek.jpeg">
                                </label>
                                <div class="konten konten3u">
                                    <div class="jdul">Tumpek Landep</div>
                                    <div class="isip">
                                        Ritual Tumpek Landep merupakan bentuk rasa syukur umat Hindu terhadap Sang Hyang Widhi yang telah memberikan ketajaman pemikiran kepada manusia, adapun ketajaman itu 
                                        disimbolkan layaknya senjata yang berbentuk lancip/runcing seperti keris, tombak dan pedang. Dewasa kini, senjata lancip itu sudah meluas pengertiannya. Tak hanya keris 
                                        dan tombak, juga benda-benda hasil cipta karsa manusia yang dapat mempermudah hidup seperti sepeda motor, mobil, mesin, komputer dan sebagainya. 
                                        yang dapat membantu memudahkan dan memberi perlindungan kepada penggunanya dalam menjalani kehidupan.
                                    </div>
                                    <a href="https://tamanbali.desa.id/artikel/2017/9/2/makna-dan-filosofi-tumpek-landep-yang-tidak-boleh-dilupakan"><button>Read More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Destinasi Wisata -->
        <div class="test">
            <input type="checkbox" name="example_accordion" id="section6" class="accordion__input">
            <label for="section6" class="accordion__label">Section #6: Destinasi Wisata</label>
            <div class="accordion__content">
                <div class="guide">
                    <div class="current-province">
                        <ion-icon name="information-circle-outline" class="ikon"></ion-icon>
                    </div>
                    <div class="dropdown-container" id="guide2">
                        <p>Hover on the inner box !</p>
                    </div>
                </div>

                <div class="container-rumah">
                    <div class="card" style="--clr:#0b495e;">
                        <div class="imgBx">
                            <img src="../../../images/Tanah Lot.jpg" alt="">
                        </div>
                        <div class="content-rumah">
                            <h2>Tanah Lot</h2>
                            <p>Tanah Lot merupakan salah satu tempat wisata yang paling banyak dikunjungi di Bali, terutama oleh para wisatawan 
                                yang mencari keindahan alam dan keunikan kebudayaan Bali. Tanah Lot terletak di Tabanan, 30 km dari Denpasar. 
                                Pada Tanah Lot juga terdapat Pura Tanah Lot yang berdiri tegak diatas karang sekitar 300 meter di lepas pantai 
                                menghadap ke laut lepas. 
                            </p>
                            <div class="tombol">
                                <a href="https://www.indonesia.travel/id/id/destinasi/bali-nusa-tenggara/tanah-lot"><button>Read More</button></a>
                            </div>
                        </div>            
                    </div>
            
                    <div class="card" style="--clr:#0b495e;">
                        <div class="imgBx">
                            <img src="../../../images/GWK.jpg" alt="">
                        </div>
                        <div class="content-rumah">
                            <h2>Garuda Wisnu Kencana</h2>
                            <p class="gwk">Garuda Wisnu Kencana (GWK) adalah sebuah taman budaya yang terletak di desa Ungasan, Kabupaten Badung, Bali.
                                GWK memiliki patung Garuda Wisnu Kencana, yang merupakan patung <b>tertinggi ketiga di dunia</b> 
                                dengan ketinggian 121 meter, terdiri dari patung Burung Garuda dan Patung Dewa Wisnu. Selain itu, GWK juga memiliki area area lainnya.
                                Taman budaya Garuda Wisnu Kencana dibangun 
                                sebagai simbol dari kebangkitan budaya Indonesia dan menjadi salah satu objek wisata terkenal di Bali. 
                            </p>
                            <div class="tombol">
                                <a href="https://www.detik.com/bali/wisata/d-6370356/garuda-wisnu-kencana-gwk-bali-lokasi-harga-tiket-dan-fasilitasnya"><button>Read More</button></a>
                            </div>
                        </div>            
                    </div>
            
                    <div class="card" style="--clr:#0b495e;">
                        <div class="imgBx">
                            <img src="../../../images/Pura.jpeg" alt="">
                        </div>
                        <div class="content-rumah">
                            <h2>Pura Luhur Uluwatu</h2>
                            <p class="gwk1">Pura Luhur Uluwatu adalah sebuah pura Hindu yang terletak di desa Pecatu, Kecamatan Kuta Selatan, Kabupaten 
                                Badung. Pura Luhur Uluwatu terletak di atas tebing yang menjorok ke laut dan memiliki pemandangan yang sangat indah, 
                                Selain itu, pura ini juga dikenal sebagai tempat yang suci yang di dalamnya terdapat beberapa bangunan suci dan beberapa 
                                patung dewa dan dewi Hindu.
                                Pura Luhur Uluwatu juga terkenal sebagai rumah bagi gerombolan kera ekor panjang abu-abu dan tempat pergelaran pertunjukan 
                                cerita dari kitab ramayana dan tarian Kecak yang dilakukan di area teater pura pada sore hari.
                               
                            </p>
                            <div class="tombol">
                                <a href="https://www.gotravelaindonesia.com/pura-luhur-uluwatu/"><button>Read More</button></a>
                            </div>
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
                <div class="guide">
                    <div class="current-province">
                        <ion-icon name="information-circle-outline" class="ikon"></ion-icon>
                    </div>
                    <div class="dropdown-container" id="guide2">
                        <p>You can play the video and change tabs by clicking the song title above!</p>
                    </div>
                </div>

                <div class="mytabs">
                    <input type="radio" id="tab1" name="page1" checked="checked">
                    <label for="tab1">Dewa Ayu</label>
                    <div class="tab">
                        <h2>Dewa Ayu</h2>
                        <video src="../../../audio/Dewa Ayu.mp4" controls></video>
                        <p>Lagu adat Dewa Ayu adalah salah satu lagu tradisional dari Bali, Indonesia. Lagu ini biasanya dinyanyikan oleh para wanita dalam upacara-upacara adat Bali, seperti upacara pernikahan, upacara keagamaan, atau upacara kehormatan.
                            Secara musikal, lagu Dewa Ayu memiliki irama yang khas dengan menggunakan instrumen tradisional Bali seperti gamelan, gender, dan kendang. Lirik lagu Dewa Ayu biasanya berisi doa atau ungkapan syukur kepada para dewa dan nenek moyang.
                            Lagu Dewa Ayu biasanya dinyanyikan dalam bahasa Bali yang klasik, sehingga tidak mudah dimengerti oleh orang yang tidak berasal dari Bali. Namun, dalam beberapa versi modern, lagu ini dapat disertai dengan terjemahan dalam bahasa Indonesia atau bahasa Inggris.
                            Lagu Dewa Ayu memiliki makna yang dalam dan menjadi simbol kebersamaan dalam budaya Bali. Lagu ini juga sering dijadikan sebagai sarana untuk menjaga keharmonisan dalam masyarakat Bali.
                        </p>
                        
                    </div>
            
                    <input type="radio" id="tab2" name="page1">
                    <label for="tab2">Janger</label>
                    <div class="tab">
                        <h2>Janger</h2>
                        <video src="../../../audio/Janger.mp4" controls></video>
                        <p>Janger adalah salah satu lagu tradisional Bali yang terkenal. Lagu ini berasal dari daerah Buleleng di Bali, dan biasanya dinyanyikan oleh kelompok pria dan wanita dalam acara-acara adat atau pertunjukan seni.
                            Secara musikal, lagu Janger memiliki irama yang ceria dan menggembirakan. Lagu ini biasanya diiringi dengan alat musik tradisional Bali seperti gamelan, kendang, dan ceng-ceng. Lirik lagu Janger biasanya berisi tentang cinta dan keindahan alam Bali.
                            Lagu Janger biasanya dinyanyikan oleh kelompok pria dan wanita secara bergantian. Pada bagian awal lagu, kelompok pria akan memulai dengan lagu yang berisi tentang keindahan Bali dan mengajak kelompok wanita untuk bergabung. Kemudian, kelompok wanita akan menjawab dengan lagu yang berisi tentang cinta dan mengajak kelompok pria untuk menari bersama.
                            Tarian yang menemani lagu Janger biasanya berisi gerakan yang ceria dan lincah, sehingga cocok untuk menghibur penonton. Selain itu, lagu Janger juga sering dipadukan dengan tari Topeng, di mana para penari mengenakan topeng tradisional Bali.
                            Lagu Janger menjadi simbol kebersamaan dan keindahan alam Bali. Lagu ini juga menjadi ciri khas budaya Bali yang terkenal di seluruh dunia.
                        </p>
                    </div>
            
                    <input type="radio" id="tab3" name="page1">
                    <label for="tab3">Ngusak Asik</label>
                    <div class="tab">
                        <h2>Ngusak Asik</h2>
                        <video src="../../../audio/NgusakAsik.mp4" controls></video>
                        <p>Ngusak Asik sebagai salah satu lagu daerah telah diakui secara resmi sebagai lagu yang berasal dari Bali. Lagu Ngusak Asik yang berasal dari Bali ini memilikin tempo cepat dan melodi jenaka. Seperti kebanyakan lagu Bali, lagu ini juga banyak menggunakan inversi dan repetisi berirama.
                            Lagu ini secara garis besar menggambarkan ciri khas dan juga adat istiadat penduduk setempat yang menceritakan tentang kisah cinta antara seorang anak laki-laki dan seorang gadis.
                            Lagu Ngusak Asik sering dipertunjukkan pada berbagai acara adat seperti upacara keagamaan, pernikahan, dan penyambutan tamu penting. Lagu ini menjadi salah satu bagian dari seni dan budaya Bali yang sangat dihargai oleh masyarakat Bali dan juga menjadi daya tarik bagi wisatawan yang berkunjung ke Bali.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tari Adat -->
        <div class="test">
            <input type="checkbox" name="example_accordion" id="section8" class="accordion__input">
            <label for="section8" class="accordion__label">Section #8: Tari Adat</label>
            <div class="accordion__content">
                <div class="guide">
                    <div class="current-province">
                        <ion-icon name="information-circle-outline" class="ikon"></ion-icon>
                    </div>
                    <div class="dropdown-container" id="guide2">
                        <p>Read Only !</p>
                    </div>
                </div>
                
                <div class="mvv-container">
                    <div class="mv-block">
                        <div class="image">
                            <img src="../../../images/TariPendet.jpeg" alt="">
                        </div>
                        <div class="kata">
                            <h7>Gamelan Bali</h7>
                            <p class ="kecil" align="justify">
                                Tari pendet adalah tarian pemujaan yang sering dipentaskan di pura oleh umat Hindu sebagai bagian dari prosesi 
                                ibadah untuk menyambut datangnya Dewa dari langit. Jenis tarian Bali ini dimainkan oleh penari wanita dalam jumlah 
                                tertentu dengan mengenakan pakaian adat khas Bali. Para penari dilengkapi pula dengan hiasan bunga serta membawa 
                                sesajen.Tarian ini juga berkembang menjadi tari penyambutan atau lebih dikenal tari selamat datang bagi tamu atau 
                                wisatawan yang berkunjung ke Pulau Dewata. Selain itu, tari pendet juga kerap dipentaskan saat pembukaan acara-acara
                                resmi.
                            </p>
                        </div>
                    </div>
                
                    <div class="mv-block">
                        <div class="image">
                            <img src="../../../images/TariLegong.jpg" alt="">
                        </div>
                        <div class="kata">
                            <h7>Tari Legong</h7>
                            <p align="justify">
                                Menurut sejarahnya, tari legong adalah tarian yang berasal dari lingkungan keraton. Akan tetapi seiring perkembangan
                                zaman, tarian ini menyebar di masyarakat dan dapat dijumpai saat acara-acara lain. Kata “legong” mempunyai makna, 
                                yaitu “leg” atau luwes dan “gong” yang berarti gamelan tradisional Bali.Saat menarikan tarian ini, penari legong 
                                yang berjumlah 2 atau 3 orang akan membawakan gerakan elok dan gemulai dengan membawa kipas. Gerakan penari akan 
                                diiringi oleh alat musik tradisional Bali. Beberapa jenis tari legon Bali adalah legong keraton atau lasem, legong 
                                jobog, legong legod bawa, legong sudarsana, dan legong kuntul.
                            </p>
                        </div>
                    </div>
            
                    <div class="mv-block">
                        <div class="image">
                            <img src="../../../images/TariKecak.jpg" alt="">
                        </div>
                        <div class="kata">
                            <h7>Tari Kecak</h7>
                            <p align = "justify">
                                Tari kecak adalah tarian Bali yang sangat terkenal. Tarian ini dimainkan oleh puluhan bahkan ratusan penari laki-
                                laki yang membentuk formasi lingkaran. Ciri utama dari tari kecak adalah teriakan kata “cak cak cak” secara serentak
                                oleh para penari dengan gerakan dua tangan keatas.Tarian kecak mengisahkan tentang cerita Ramayana, yaitu saat 
                                terjadinya pertempuran antara Rama yang dibantu oleh Hanoman untuk melawan Rahwana. Tari ini merupakan ciptaan dari
                                seniman tari bali bernama Wayan Limbak yang bekerjasama dengan seniman lukis Jerman bernama Walter Spies pada tahun
                                1930-an.
                            </p>
                        </div>
                    </div>

                    <div class="mv-block">
                        <div class="image">
                            <img src="../../../images/TariBarong.jpg" alt="">
                        </div>
                        <div class="kata">
                            <h7>Tari Barong</h7>
                            <p align = "justify">
                                Tari yang berasal dari Bali ini dimainkan oleh penari dengan mengenakan kostum barong berwajah seram berhiaskan 
                                ornamen khas Bali. Kata barong dalam tarian ini diduga berasal dari kata “bahruang” atau berarti beruang. Meski 
                                berasal dari akta beruang, akan tetapi banyak model topeng lain, seperti barong asu, baron blablasan, barong gajah, 
                                barong macan dan sebagainya. Oleh beberapa masyarakat, topeng barong terkadang juga menjadi hiasan rumah. Tarian 
                                barong dilakukan oleh dua orang penari laki-laki. Penari posisi depan adalah pemakai topeng, sedangkan penari yang 
                                berda dibelakangnya bertugas untuk menggerakan tubuh dan ekor barong. Nilai, makna dan filosofi yang diangkat dalam
                                tari barong Bali adalah peperangan antara sifat baik dan buruk. Sifat baik diwakili oleh barong, sedangkan sifat 
                                jahat diwakili oleh rangda. Tarian ini sangat sakral dan hanya dipentaskan pada upacara ritual tertentu.
                            </p>
                        </div>
                    </div>
    
                    <div class="tombol">
                        <a href="https://rimbakita.com/tari-bali/"><button>Read More</button></a>
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