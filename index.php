<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	
    <title>Anasayfa | Yoloğlu</title>

    <link rel="shortcut icon" href="favicon.png" />

    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">



</head>

<body>

  <div class="anadiv">
	
		<div id="menu">
			<div id="logo">SUAT YOLOGLU</div>
			<nav>
				<a href="#" onclick="smoothScroll(document.getElementById('anasayfa'))"><i class="fas fa-home ikon"></i>Anasayfa</a>
				<a href="#" onclick="smoothScroll(document.getElementById('hakkimda'))"><i class="fas fa-user-alt ikon"></i>Hakkımda</a>
				<a href="#" onclick="smoothScroll(document.getElementById('egitimler'))"><i class="fas fa-university ikon"></i>Eğitimlerim</a>
				<a href="#" onclick="smoothScroll(document.getElementById('iletisim'))"><i class="fas fa-phone-alt ikon"></i>İletişim</a>
			</nav>
    </div>


    <div id="anasayfa">
        <div id="black"></div>

        <div id="icerik">
            <h2>Yoloğlu</h2>
            <hr width=300 align=left>
            <p> Merhaba,Ben Suat Yoloğlu Web Sayfama Hoşgeldiniz. </p>
        </div>

    </div>


    <div id="hakkimda">

        <h3>Hakkımda</h3>

        <div class="container">

            <div id="sol">
                <h5 id="h5sol">"İnsan düşleri öldüğü gün ölür." Der Yaşar Kemal Düşlerim Ölene Kadar savaşacağım. </h5>
            </div>

            <div id="sag">
                <span>K</span>
                <p class="psag"> ocaeli'de doğup büyüdüm. Lise öğrenimi mi İzmit Endüstri Meslek Lisesin de Bilişim Teknolojileri alanı Ağ İşletmenliği dalında tamamladım. Şuan da Kafkas Üniversitesi Yönetim Bilişim Sistemleri 1.Sınıf Öğrencisiyim. Hedefim önümdeki 3 yıl boyunca kendimi Web Programlama ve Yapay Zeka alanında geliştirmek.
                </p>
                <p class="psag"> Kendime gelecek olursam dünya hayatının tadını çıkarmayı seven birisiyim. Teknolojik gelişmeleri takip etmeyi, Polisiye Roman ve şiir Okumayı, Spor yapmayı, Ata Binmeyi ve Kodlamayı severim. Kararlı Azimli Hür İradeli Bir Bireyim. </p>
            </div>

            <img src="./img/about.jpg" alt="" class="img-fluid mt100">

            <p id="pson">"İnsanların çoğu özgürlüğü gerçekten istemezler; çünkü özgürlük sorumluluk gerektirir ve insanların çoğu da bundan korkar." Sigmund Freud</p>

        </div>
    </div>

    <div id="egitimler">
        <div class="container">

            <h3>Eğitimlerim</h3>
            <div class="owl-carousel owl-theme">
                <div class="card item" data-merge=1.5>
                    <img src="img/some1.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">HTML5</h5>
                    <p class="cardp">HTML, web sitelere ait sayfaların hazırlanması için kullanılır.</p>

                </div>

                <div class="card item" data-merge=1.5>
                    <img src="img/some2.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">CSS3</h5>
                    <p class="cardp">CSS, Web sitelerine renk, görsel ve düzen vermek için kullanılır.</p>

                </div>

                <div class="card item" data-merge=1.5>
                    <img src="img/some3.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">PHP</h5>
                    <p class="cardp">PHP, özellikle web uygulamaları geliştirme ve dinamik web sayfaları hazırlamak için kullanılır.</p>

                </div>

                <div class="card item" data-merge=1.5>
                    <img src="img/some4.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">PYTHON</h5>
                    <p class="cardp">Python nesne tabanlı programlamayı destekleyen bir programlama dilidir.</p>

                </div>

            </div>

        </div>

    </div>

    <div id="iletisim">
        <div id="container">
            <h3 id="h3iletisim">İletişim</h3>


            <form method="post" action="index.php">
                <div id="iletisimopak">
                    <div id="formgroup">

                        <div id="solform">

                            <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                            <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                        </div>

                        <div id="sagform">

                            <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control">
                            <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">

                        </div>

                        <textarea name="mesaj" id="" cols="30" placeholder="Mesaj Giriniz" rows="10" required class="form-control"></textarea>

                        <input type="submit" value="Gönder">
                    </div>
                    <div id="social">
                       <h3 id="socialbaslik">Social Media</h3>
                        <a href="https://www.linkedin.com/in/suat-yolo%C4%9Flu/"><i class="fab fa-linkedin-in ikons"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100010012263053"><i class="fab fa-facebook-square ikons"></i></a>
                        <a href="https://www.instagram.com/suatyologlu/"><i class="fab fa-instagram ikons"></i></a>
                        <a href="https://twitter.com/suatyologlu"><i class="fab fa-twitter ikons"></i></a>
                    
                    </div>


                </div>
            </form>

            <footer>
                <div id="copyright">2021|Tüm Hakları Saklıdır.</div>

                <a href="#menu"><i class="fas fa-chevron-circle-up" id="up"></i></a>

                <div id="yukari">
                </div>
            </footer>

        </div>
    </div>  
	
 </div>
	
    


    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>

    <?php
    include("baglanti.php");
    
    if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"] ))
    {
        $adsoyad=$_POST["isim"];
        $telefon=$_POST["tel"];
        $email=$_POST["mail"];
        $konu=$_POST["konu"];
        $mesaj=$_POST["mesaj"];  
            
        $ekle= "INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";   
        
                    //eklemesorgusu
        if($baglan->query($ekle)===TRUE)
        {
              echo "<script>alert('Mesajınız Başarılı Bir Şekilde Göderilmiştir.')</script>";
        }
        
               else{
                   echo"<script>alert('Mesajınız Gönderilirken Bir Hata Meydana Geldi.')</script>";
               }
    }
        
    ?>

<script> 
	window.smoothScroll = function (target) {
    var scrollContainer = target;
    do { //find scroll container
        scrollContainer = scrollContainer.parentNode;
        if (!scrollContainer) return;
        scrollContainer.scrollTop += 1;
    } while (scrollContainer.scrollTop == 0);

    var targetY = 0;
    do { //find the top of target relatively to the container
        if (target == scrollContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);

    scroll = function (c, a, b, i) {
        i++;
        if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function () {
            scroll(c, a, b, i);
        }, 20);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}
	</script>

</body>

</html>