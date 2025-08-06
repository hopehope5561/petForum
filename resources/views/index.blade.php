<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Expressmama.com - Sosyal I Expressmama Sosyal</title>
  @vite('resources/css/index.css')
  
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link href="https://fonts.cdnfonts.com/css/outfit" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
  <!--EN ÜST BİLGİ ALANI (MOBİLDE KAPALI)-->
  <div class="HeaderTop">
    <header class="top-header">
      <div class="container">
        <div class="social-media"><a href="https://www.facebook.com/expressmama.co/" target="_blank"><i
              class="fab fa-facebook"></i> </a> <a href="https://www.instagram.com/expressmama.com.tr/" target="_blank">
            <i class="fab fa-instagram"></i> </a> <a href="https://www.youtube.com/channel/UC7a6kKxsTzj_LElBDRoxmlw"
            target="_blank"> <i class="fab fa-youtube"></i> </a> <a href="https://www.tiktok.com/@expressmama"
            target="_blank"> <i class="fab fa-tiktok"></i> </a> <a
            href="https://www.linkedin.com/company/expressmamacom" target="_blank"> <i class="fab fa-linkedin"></i> </a>
        </div>

        <div class="free-shipping"><i class="fas fa-truck"></i>&nbsp;200 TL Üzeri Ücretsiz Kargo</div>
        <a class="contact" href="https://wa.me/905332905540" target="_blank"><i class="fab fa-whatsapp"></i>
          <span>Sipariş &amp; Destek: 0533 290 55 40</span> </a>
      </div>
    </header>
  </div>
  <!--EN ÜST BİLGİ ALANI (MOBİLDE KAPALI)-->

  <!--START LOGO-->
  <div class="header">
    <div class="logo">
      <img src="https://static.ticimax.cloud/66297//uploads/editoruploads/jhkjhkhjkj.png?t=20240715143822" alt=""
        class="logo-web">
      <img src="https://static.ticimax.cloud/66297//uploads/editoruploads/jhkjhkhjkj.png?t=20240715143822" alt=""
        class="logo-mobil">
    </div>
  </div>
  <!--FİNİSH LOGO-->

  <!--START ÜYE GİRİŞ KAYIT ALANI-->
  <div class="login-container">
    <div class="login">
      <a href="./login.html" style="text-decoration: none; color:#424040;">
        <i class="fa-solid fa-user"></i>
      </a>
      <div class="basked">
      <a href="./sepetim.html" style="text-decoration: none; color:#424040;">
        <i class="fa-solid fa-cart-shopping"></i>
      </a>
    </div> 
    </div>
  </div>
  <!--FİNİSH ÜYE GİRİŞ KAYIT ALANI-->

  <!-- START WEB ARAMA KUTUSU - SAĞ MENÜ YARDIM HESABIM ve SEPETİM -->
  <!-- Arama Kutusu -->
  <div class="search-box-container-web-design">
    <form class="search-box-main" id="searchForm">
            <input type="text" id="searchInput" placeholder="Kedi, köpek, aksesuarlar..." autocomplete="off">
            <button type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>

    <!-- Sağ Menü -->
    <div class="login-actions">
      <div class="help-container">
        <a href="#" class="login-action">Yardım</a>
        <div class="help-popup">
          <div class="popup-header">
            <i class="fa-solid fa-face-smile-beam"></i> %100 Mutlu Müşteri Hizmeti
          </div>
          <div class="popup-content">
            <div class="phone-number">0533 290 55 40</div>
            <div class="working-hours">Pazartesi - Cumartesi 08:30 - 20:30</div>

            <a href="#" class="menu-item-help-popup">
              <div class="menu-icon"><i class="fa-solid fa-headset"></i></div>
              Canlı Yardım
            </a>

            <a href="#" class="menu-item-help-popup">
              <div class="menu-icon"><i class="fa-solid fa-tags"></i></div>
              İndirimli Ürünler
            </a>

            <a href="#" class="menu-item-help-popup">
              <div class="menu-icon"><i class="fa-solid fa-coins"></i></div>
              Para Puan Kazanımı
            </a>

          </div>
        </div>
      </div>
      <div class="myaccount-container">
      <a href="./login.html" class="login-action"><i class="fa-regular fa-user"></i> Hesabım</a>
      <div class="myaccount-popup">
        <div class="popup-header">
          <span id="user-name" class="popup-header-user-name">MelihBektaş</span>
          <a href="#">
            <i class="fa-solid fa-bell" id="popup-header-user-name-icon-renk"></i>
          </a>
          <a href="#">
            <i class="fa-solid fa-envelope" id="popup-header-user-name-icon-renk"></i>
          </a>
        </div>
        <div class="popup-content">

          <a href="#" class="menu-item-myaccount-popup">
            <div class="menu-icon"><i class="fa-solid fa-box"></i></div>
            Siparişlerim
          </a>

          <a href="#" class="menu-item-myaccount-popup">
            <div class="menu-icon"><i class="fa-solid fa-location-dot"></i></div>
            Teslimat Adreslerim
          </a>

          <a href="#" class="menu-item-myaccount-popup">
            <div class="menu-icon"><i class="fa-solid fa-credit-card"></i></div>
            Kayıtlı Kartlarım
          </a>

          <a href="#" class="menu-item-myaccount-popup">
            <div class="menu-icon"><i class="fa-solid fa-coins"></i></div>
            Para Puanlarım
          </a>

          <a href="#" class="menu-item-myaccount-popup">
            <div class="menu-icon"><i class="fa-solid fa-user"></i></div>
            Üyelik Bilgilerim
          </a>

          <a href="#" class="menu-item-myaccount-popup">
            <div class="menu-icon"><i class="fa-solid fa-shield-dog"></i></div>
           Sahiplendirme İlanlarım
          </a>

          <a href="#" class="menu-item-myaccount-popup">
            <div class="menu-icon"><i class="fa-solid fa-id-card"></i></div>
            Petlerim
          </a>

          <a href="#" class="menu-item-myaccount-popup">
            <div class="menu-icon"><i class="fa-solid fa-award"></i></div>
            Rozetlerim
          </a>

          <a href="#" class="menu-item-myaccount-popup">
            <div class="menu-icon"><i class="fa-solid fa-right-from-bracket"></i></div>
            Çıkış Yap
          </a>
        </div>
      </div>
      </div>
      <div class="basket-container">
      <a href="#" class="login-action"><i class="fa-solid fa-cart-shopping"></i> Sepetim</a>
      <div class="basket-popup">
        <div class="popup-header">
          <span class="basket-alert">Sepet Toplamı</span>
        </div>
        <div class="popup-content">
          <div class="popup-basket-total-price">
          <span id="basket-total-price">0 TL</span>
        </div>
          <i class="fa-solid fa-lock"></i>
          <span>256bit SSL ile %100 Güvenli Ödeme</span>
        </div>
        <div class="popup-basket">
          <a href="https://www.expressmama.com/checkout" class="popup-basket-button-link">
          <button class="popup-basket-button" id="popup-basket-button-text">Sepete Git</button>
          </a>
        </div>
      </div>
      </div>
    </div>
  </div>
  <!-- FİNİSH WEB ARAMA KUTUSU - SAĞ MENÜ YARDIM HESABIM ve SEPETİM -->

  <!---START WEB HEADER KATEGORİLER--->
  <div class="main-menu-container">
    <nav class="main-menu">
      <a href="#">Kedi Ürünleri</a>
      <a href="#">Köpek Ürünleri</a>
      <a href="#">Kuş Ürünleri</a>
      <a href="#">Kemirgen Ürünleri</a>
      <a href="#">Kampanyalar</a>
      <a href="#">Pati Kulüp</a>
      <a href="#">Yuva Arayanlar</a>
    </nav>
  </div>
  <!---FİNİSH WEB HEADER KATEGORİLER--->


  <!--START ARAMA KUTUSU SADECE MOBİLE ÖZEL-->
  <!--START MOBİL YAN MENÜ SADECE MOBİLE ÖZEL-->
  <div class="nav-menu-mobil-icon-container">
    <button class="menu-button" onclick="toggleMenu()"><i class="fa-solid fa-bars"></i></button>
    <div class="nav-menu-mobil" id="nav-menu-mobil">
      <div class="nav-menu-mobil-header">
        <div class="close-btn">
          <button onclick="toggleMenu()" style="background:none; border:none;">
            <i class="fa-solid fa-xmark" style="color: red; font-size:30px;"></i>
          </button>
        </div>
        <div class="nav-menu-mobil-logo">
          <img src="./logo-01.png" alt="" class="nav-menu-mobil-logo">
        </div>
        <div class="nav-menu-mobil-category">
          <div class="nav-menu-mobil-category-header">Alışveriş
            <div class="nav-menu-mobil-category-list">
              <ul>
                <li><a href="#"><i class="fa-solid fa-cat"></i>Kedi Ürünleri<i class="fa-solid fa-circle-chevron-right"
                      id="nav-menu-mobil-icon"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-dog"></i>Köpek Ürünleri<i class="fa-solid fa-circle-chevron-right"
                      id="nav-menu-mobil-icon"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-dove"></i>Kuş Ürünleri<i class="fa-solid fa-circle-chevron-right"
                      id="nav-menu-mobil-icon"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-otter"></i>Kemirgen Ürünleri<i
                      class="fa-solid fa-circle-chevron-right" id="nav-menu-mobil-icon"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-percent"></i>Kampanyalar<i
                      class="fa-solid fa-circle-chevron-right" id="nav-menu-mobil-icon"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="nav-menu-mobil-category-header">Paticiklerin Dünyası
            <div class="nav-menu-mobil-category-list">
              <ul>
                <li><a href="#"><i class="fa-solid fa-paw"></i>Yuva Arayanlar<i class="fa-solid fa-circle-chevron-right"
                      id="nav-menu-mobil-icon"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-blog"></i>Blog<i class="fa-solid fa-circle-chevron-right"
                      id="nav-menu-mobil-icon"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-comments"></i>Soru Cevap<i
                      class="fa-solid fa-circle-chevron-right" id="nav-menu-mobil-icon"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-address-book"></i>Rehber<i
                      class="fa-solid fa-circle-chevron-right" id="nav-menu-mobil-icon"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-camera"></i>Fotoğraf Yarışması<i
                      class="fa-solid fa-circle-chevron-right" id="nav-menu-mobil-icon"></i></a></li>
              </ul>
              <div class="nav-menu-mobil-footer">
                <div class="nav-menu-mobil-footer-list">
                  <ul>
                    <li><a href="#"><i class="fa-solid fa-circle-exclamation"></i>Yardım<i
                          class="fa-solid fa-circle-chevron-right" id="nav-menu-mobil-icon"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--FİNİSH ARAMA KUTUSU SADECE MOBİLE ÖZEL-->
  <!--FİNİSH MOBİL YAN MENÜ SADECE MOBİLE ÖZEL-->


  <!--START KATEGORİLER MOBİL 01-->
  <div class="category-grid-mobil">
    <div class="category-item-mobil">
      <span class="icon-mobil">&#10148;</span> Soru Cevap
    </div>
    <div class="category-item-mobil">
      <span class="icon-mobil">&#10148;</span> Foto Yarışması
    </div>
    <div class="category-item-mobil">
      <span class="icon-mobil">&#10148;</span> Yuva Arayanlar
    </div>
    <div class="category-item-mobil">
      <span class="icon-mobil">&#10148;</span> Rehber
    </div>
    <div class="category-item-mobil">
      <span class="icon-mobil">&#10148;</span> Kedi İlanları
    </div>
    <div class="category-item-mobil">
      <span class="icon-mobil">&#10148;</span> Köpek İlanları
    </div>
    <div class="category-item-mobil">
      <span class="icon-mobil">&#10148;</span> Kedi Cinsleri
    </div>
    <div class="category-item-mobil">
      <span class="icon-mobil">&#10148;</span> Köpek Cinsleri
    </div>
    <div class="category-item-mobil">
      <span class="icon-mobil">&#10148;</span> Kedi İsimleri
    </div>
    <div class="category-item-mobil">
      <span class="icon-mobil">&#10148;</span> Köpek İsimleri
    </div>
  </div>
  <!--FİNİSH KATEGORİLER MOBİL 01-->

  <!--START YUVA ARAYANLAR 02-->
  <div class="homepage-section">
    <div class="homepage-section-header">
      <div class="homepage-section-title">
        <h2 class="homepage-section-title-text" id="homepage-section-title-text-information">Yuva Arayanlar</h2>
      </div>
      <div class="homepage-section-number">
        <h2 class="homepage-section-number-text" id="ilan-sayisi-count">{{$count}}</h2>
        <h2 class="homepage-section-number-text" id="ilan-sayisi-label">İLAN</h2>
        <i class="fa-solid fa-up-right-from-square" id="ilan-sayisi-icon-link"></i>
      </div>
      <div class="homepage-section-alert-yuvalandi">
        <div class="homepage-section-alert-yuvalandi-number">
          <i class="fa-solid fa-paw" id="yuvalanan-sayisi-icon"></i>
          <h2 class="homepage-section-alert-yuvalandi-number-text" id="yuvalanan-sayisi-count">165.000</h2>
          <h2 id="yuvalanan-sayisi-label">KEDİ KÖPEK ve KUŞ YUVA BULDU!</h2>
        </div>
      </div>
     <div class="homepage-section-ilan">
    <div class="homepage-section-ilan-item">
    {{-- Sahiplendirme konularından sadece 3 tanesini döngüye sokuyoruz --}}
    @foreach ($sahiplendirmeTopics->take(3) as $topic)
        <div class="homepage-section-ilan-item-image" id="ilan-item-image-{{ $loop->index }}">
            <a href="" title="{{ $topic->title }}">
                <img
                    src="{{ $topic->image_url }}"
                    data-original="{{ $topic->thumbnail_url }}"
                    id="ilan-image-mobil-{{ $loop->index }}" 
                    alt="{{ $topic->title }}"
                    class="img-thumbnail-mobil rounded p-0 lazy loaded thumbnail-kare" 
                    loading="lazy"
                    data-ll-status="loaded" 
                />
                <div class="homepage-section-ilan-item-text">
                    <h4 class="ilan-basligi-mobil" id="ilan-basligi-text-{{ $loop->index }}">
                        {{ $topic->title }}
                    </h4>
                </div>
            </a>
        </div>
    @endforeach
</div>

    
    <div class="homepage-section-ilan-item-button">
        <div class="homepage-section-ilan-item-button-icon">
            <a href="#"><i class="fa-solid fa-circle-right" id="ilan-item-button-icon-1"></i></a>
        </div>
        <div class="homepage-section-ilan-item-button-text">
            <a href="#">
                <h2 class="homepage-section-ilan-item-button-text" id="ilan-item-button-text-1">
                    YUVA ARAYANLAR
                </h2>
            </a>
        </div>
    </div>
</div>
    </div>
  </div>
  </div>
  <!--FİNİSH YUVA ARAYANLAR 02-->

  <!--START SORU CEVAP 03-->
  <div class="soru-cevap-container">
    <div class="soru-cevap-header">
        <span>Soru Cevap</span>
        <span><i class="fa-solid fa-up-right-from-square" id="question-answer-link-icon"></i></span>
    </div>
    <ul class="soru-cevap-list">
        @forelse ($topics as $topic)
            <li>
                {{-- Kullanıcı profil resmi --}}
                @if ($topic->user && $topic->user->image_path)
                    <img src="{{ asset($topic->user->image_path) }}" class="avatar" />
                @else
                    {{-- Kullanıcı resmi yoksa varsayılan bir avatar gösteririz --}}
                    <img src="{{ asset('path/to/default-avatar.png') }}" class="avatar" />
                @endif
                
                <div class="soru-cevap-content">
                    {{-- Kullanıcı adı ve soyadı --}}
                    <span class="user">
                        {{ $topic->user->name ?? 'Anonim' }} {{ $topic->user->lastName ?? '' }}
                    </span>
                    {{-- Konunun oluşturulma zamanı --}}
                    <span class="time">{{ $topic->created_at }}</span>
                    {{-- Soru başlığı/içeriği --}}
                    <div class="question">
                        <a href="">{{ Str::limit($topic->title, 70) }}</a>
                    </div>
                    <div class="homepage-section-question-answer-icon-alert">
                        {{-- Buradaki ikonlar dinamik veriye bağlıysa burayı da güncelleyebiliriz --}}
                        <div class="homepage-section-question-answer-icon-questionnaire">
                            <i class="fa-solid fa-chart-pie" id="questionnaire-icon-{{ $loop->index }}"></i>
                        </div>
                        <div class="homepage-section-question-answer-icon-camera">
                            <i class="fa-solid fa-camera" id="camera-icon-{{ $loop->index }}"></i>
                        </div>
                    </div>
                </div>
            </li>
        @empty
            {{-- Soru Cevap kategorisinde henüz bir konu yoksa bu kısım çalışır --}}
            <li>
                <div class="soru-cevap-content">
                    <div class="question">Henüz soru eklenmedi.</div>
                </div>
            </li>
        @endforelse
    </ul>
</div>
  <!--FİNİSH SORU CEVAP ANASAYFA 03-->

  <!--START HAFTANIN ŞAMPİYONLARI ANASAYFA 04-->
  <div class="homepage-section-photo-contest-alert">
    <div class="homepage-section-photo-contest-alert-text">
      <h2 id="photo-contest-header">Haftanın Şampiyonları</h2>
    </div>
    <div class="homepage-section-photo-contest-alert-img">
      <img src="https://images.petlebi.com/v7/_ptlb/up/pet/sm_218848_1751800156_4213.jpg" id="photo-contest-cat-img"
        alt="Kedi şampiyon">
      <img src="https://images.petlebi.com/v7/_ptlb/up/pet/sm_228240_1751826633_202.jpg" id="photo-contest-dog-img"
        alt="Köpek şampiyon">
    </div>
    <div class="homepage-section-photo-contest-alert-cat-name">
      <h2 id="champion-cat-name">casper</h2>
    </div>
    <div class="homepage-section-photo-contest-alert-dog-name">
      <h2 id="champion-dog-name">pablo</h2>
    </div>
    <div class="homepage-section-photo-contest-alert-name-text">
      <h2 id="champion-title">Şampiyonlara</h2>
      <h2 id="champion-prize">50 TL</h2>
      <h2 id="champion-gift-label">HEDİYE!</h2>
      <a href="#" id="champion-details-link">Detaylar <i class="fa-solid fa-up-right-from-square"></i></a>
    </div>
    <div class="homepage-section-photo-contest-alert-enter">
      <div class="homepage-section-photo-contest-alert-enter-button">
        <i class="fa-solid fa-right-to-bracket" id="enter-button-icon"></i>
        <button class="homepage-section-photo-contest-alert-enter-button" id="photo-contest-enter-btn">Yarışmaya
          Katıl</button>
      </div>
    </div>
  </div>
  <!--FİNİSH HAFTANIN ŞAMPİYONLARI WEB ANASAYFA 04-->

  <!--START FOOTER ANASAYFA 01 06-->
  <div class="homepage-section-footer-sosyal-forum">
    <div class="homepage-section-footer-sosyal-forum-header-text">
      <h2 id="footer-forum-header">Expressmama Sosyal Hayvan Severler Kulübü</h2>
    </div>
    <div class="homepage-section-footer-sosyal-forum-main-text">
      <h3 id="footer-forum-description">
        ExpressMama.com’da kedi veya köpek ırklarını inceleyebilir, sahiplenmek istediğiniz cinsler hakkında bilgi
        sahibi olabilir; ücretsiz sahiplendirme ilanlarıyla hayatınızı paylaşacağınız kedi veya köpeği
        sahiplenebilirsiniz.<br><br>
        Sahiplendikten sonra ExpressMama.com'daki kedi isimleri ve köpek isimleri sayfaları sayesinde evciliniz için en
        uygun ismi kolayca bulabilirsiniz.<br><br>
        Kedi veya köpeğinizle yaşarken karşılaştığınız soru veya sorunlarda, Soru-Cevap bölümünde soru sorarak diğer
        hayvanseverlerin deneyimlerinden faydalanabilirsiniz.
      </h3>
    </div>
  </div>
  <!--FİNİSH FOOTER ANASAYFA 01 06-->

  <!--START FOOTER 02 07-->
  <div class="homepage-section-container-footer">
    <div class="homepage-section-container-footer-menu-container">
      <div class="homepage-section-container-footer-menu-item">
        <h2 class="homepage-section-container-footer-menu-item-text" id="footer-hakkinda">Hakkımızda</h2>
      </div>
      <div class="homepage-section-container-footer-menu-item">
        <h2 class="homepage-section-container-footer-menu-item-text" id="footer-gizlilik">Yardım</h2>
      </div>
      <div class="homepage-section-container-footer-menu-item">
        <h2 class="homepage-section-container-footer-menu-item-text" id="footer-yardim">Rozetler & Pati Puan</h2>
      </div>
      <div class="homepage-section-container-footer-menu-item">
        <h2 class="homepage-section-container-footer-menu-item-text" id="footer-kariyer">İletişim</h2>
      </div>
    </div>
    <div class="homepage-section-container-footer-menu-container-two">
      <div class="homepage-section-container-footer-menu-item">
        <h2 class="homepage-section-container-footer-menu-item-text" id="footer-teslimat-kosullari">Teslimat Koşulları
        </h2>
      </div>
      <div class="homepage-section-container-footer-menu-item">
        <h2 class="homepage-section-container-footer-menu-item-text" id="footer-satis">Satış Sözleşmesi</h2>
      </div>
      <div class="homepage-section-container-footer-menu-item">
        <h2 class="homepage-section-container-footer-menu-item-text" id="footer-garanti">Garanti ve İade</h2>
      </div>
      <div class="homepage-section-container-footer-menu-item">
        <h2 class="homepage-section-container-footer-menu-item-text" id="footer-gizlilik">Gizlilik ve Çerez</h2>
      </div>
    </div>
  </div>
  <!--FİNİSH FOOTER 02 07-->

  <!--START SOSYAL MEDYA 08-->
  <div class="homepage-section-footer-social-media">
    <div class="homepage-section-footer-social-media-item">
      <i class="fa-brands fa-instagram" id="instagram-icon"></i>
    </div>
    <div class="homepage-section-footer-social-media-item">
      <i class="fa-brands fa-facebook" id="facebook-icon"></i>
    </div>
    <div class="homepage-section-footer-social-media-item">
      <i class="fa-brands fa-twitter" id="twitter-icon"></i>
    </div>
    <div class="homepage-section-footer-social-media-item">
      <i class="fa-brands fa-youtube" id="youtube-icon"></i>
    </div>
    <div class="homepage-section-footer-social-media-item">
      <i class="fa-brands fa-tiktok" id="tiktok-icon"></i>
    </div>
  </div>
  <!--FİNİSH SOSYAL MEDYA 08-->

  <!--START SİTE ÇALIŞMA BİLGİ 09-->
  <div class="homepage-section-footer-customer-service">
    <div class="homepage-section-footer-customer-service-item">
      <h3 id="customer-service-title">MUTLU MÜŞTERİ HİZMETLERİ</h3>
    </div>
    <div class="homepage-section-footer-customer-service-item">
      <h2 id="customer-service-number">0 533 290 5540</h2>
    </div>
    <div class="homepage-section-footer-customer-service-item">
      <h4 id="customer-service-online-date">Pazartesi - Cumartesi I 08:30 - 18:00</h4>
    </div>
  </div>
  <!--FİNİSH SİTE ÇALIŞMA BİLGİ 09-->

  <!--START SİTE FİRMA BİLGİ 10-->
  <div class="homepage-section-footer-company-alert">
    <div class="homepage-section-footer-company-alert-item-qr">
      <img src="https://static.ticimax.cloud/66297/uploads/footertasarim/9/b2a5ddef-43b1-45e0-afbd-b3beeff65c83.jpg"
        alt="expressmama.com-etbis">
    </div>
    <div class="homepage-section-footer-company-alert-item-company-text">
      <h4 id="company-alert-text">Mustafa Olgun Olgun Ticaret Expressmama.com</h4>
    </div>
    <div class="homepage-section-footer-company-alert-item-company-tax-office">
      <h5 id="company-alert-tax-office">Gaziler Vergi Dairesi - 6410023066 - 29852311898 </h5>
    </div>
    <div class="homepage-section-footer-company-alert-item-company-address">
      <h5 id="company-alert-address">Baruthane Mah. 787. Sok. No:2/1 55100 İlkadım/Samsun</h5>
    </div>
  </div>
  <!--FİNİSH FİRMA BİLGİ 10-->

  <!--START DATE BİLGİ 11-->
  <div class="homepage-section-footer-copyright">
    <h3 id="copyright-text">© 2023-2025 ExpressMama.com Tüm Hakları Saklıdır.</h3>
  </div>
  <!--FİNİSH DATE BİLGİ 11-->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
  <script src="./index.js"></script>
</body>

</html>