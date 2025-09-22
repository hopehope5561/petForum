<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Expressmama.com - Sosyal I Expressmama Sosyal</title>
  @vite('resources/css/sor.css')
  @vite('resources/css/index.css')
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link href="https://fonts.cdnfonts.com/css/outfit" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

  <style>


body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .soru-cevap-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 25px;
            margin: 0 auto;
            max-width: 1000px;
        }

        .soru-cevap-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #e9ecef;
            margin-bottom: 25px;
        }

        .soru-cevap-header span:first-child {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
        }

        .myaccount-popup{ display:none; }
.myaccount-popup.show{ display:block; }


        .soru-cevap-header i {
            color: #6c757d;
            font-size: 18px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .soru-cevap-header i:hover {
            color: #007bff;
        }

        .soru-cevap-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .topic-item {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 15px 20px;
            margin-bottom: 12px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .topic-item:hover {
            background: #e3f2fd;
            border-color: #2196f3;
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .topic-title {
            font-weight: 500;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .topic-meta {
            font-size: 14px;
            color: #6c757d;
        }

        /* Özelleştirilmiş Pagination Stilleri */
        .custom-pagination {
            margin: 30px 0 0 0;
            padding: 0;
        }

        .custom-pagination .pagination {
            justify-content: center;
            gap: 8px;
        }

        .custom-pagination .page-item .page-link {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 10px 15px;
            color: #495057;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            background-color: white;
            min-width: 45px;
            text-align: center;
        }

        .custom-pagination .page-item .page-link:hover {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
        }

        .custom-pagination .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
        }

        .custom-pagination .page-item.disabled .page-link {
            background-color: #f8f9fa;
            border-color: #dee2e6;
            color: #6c757d;
            cursor: not-allowed;
        }

        .custom-pagination .page-item.disabled .page-link:hover {
            transform: none;
            box-shadow: none;
            background-color: #f8f9fa;
            border-color: #dee2e6;
            color: #6c757d;
        }

        /* Önceki/Sonraki butonları için özel stiller */
        .custom-pagination .page-item:first-child .page-link,
        .custom-pagination .page-item:last-child .page-link {
            font-weight: 600;
            padding: 10px 18px;
        }

        /* Sayfa bilgisi metnini gizle */
        .pagination-info,
        .showing-results,
        p:contains("Showing") {
            display: none !important;
        }

        /* Laravel'in otomatik eklediği sayfa bilgisi metinlerini gizle */
        .d-flex.justify-content-between.flex-wrap.flex-sm-nowrap.align-items-center.py-4 p,
        .pagination-wrapper p {
            display: none !important;
        }

        /* Responsive tasarım */
        @media (max-width: 768px) {
            .custom-pagination .page-item .page-link {
                padding: 8px 12px;
                min-width: 38px;
                font-size: 14px;
            }
            
            .soru-cevap-container {
                margin: 0 10px;
                padding: 20px 15px;
            }
        }

        /* Ekstra güvenlik: Tüm "showing" metinlerini gizle */
        *:contains("showing"),
        *:contains("Showing"),
        *:contains("results"),
        *:contains("Results") {
            display: none !important;
        }
  </style>

  </head>

<body>
  <!--EN ÜST BİLGİ ALANI (MOBİLDE KAPALI)-->
  <div class="HeaderTop">
    <header class="top-header" style="background-color: #2E2E2E;">
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
<div class="search-box-container-web-design">
 <!--START LOGO-->
  <div class="header">
    <div class="logo">
      <a title="Expressmama.com Online Petshop" class="header-logo" href="http://127.0.0.1:8000/">
      <img src="https://static.ticimax.cloud/66297//uploads/editoruploads/jhkjhkhjkj.png?t=20240715143822" alt=""
        class="logo-web">
      </a>

      <a title="Expressmama.com Online Petshop" href="http://127.0.0.1:8000/">
      <img src="https://static.ticimax.cloud/66297//uploads/editoruploads/jhkjhkhjkj.png?t=20240715143822" alt=""
        class="logo-mobil">
      </a>
    </div>
  </div>
  <!--FİNİSH LOGO-->

  <!--START ÜYE GİRİŞ KAYIT ALANI-->
  <!-- <div class="login-container">
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
  </div> -->
  <!--FİNİSH ÜYE GİRİŞ KAYIT ALANI-->

  <!-- START WEB ARAMA KUTUSU - SAĞ MENÜ YARDIM HESABIM ve SEPETİM -->
  <!-- Arama Kutusu -->
  
    

    <!-- Sağ Menü -->
    <div class="login-actions">
      <!-- <div class="help-container">
       
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
        </div> -->
      </div>
        @auth
      <div class="myaccount-container">
      
      <div class="myaccount-container">
          @endauth
  @auth

    <a href="#" class="login-action" id="myaccountToggle">
      <i class="fa-regular fa-user"></i> Hesabım
    </a>

    <div class="myaccount-popup" id="myaccountPopup">
      <div class="popup-header">
        <span id="user-name" class="popup-header-user-name">
          {{ Auth::user()->name }}
        </span>
      </div>

      <div class="popup-content">
        <a href="{{ route('account.profile') }}" class="menu-item-myaccount-popup">
          <div class="menu-icon"><i class="fa-solid fa-user"></i></div>
          Üyelik Bilgilerim
        </a>

        <a href="{{ route('account.topics') }}" class="menu-item-myaccount-popup">
  <div class="menu-icon"><i class="fa-solid fa-shield-dog"></i></div>
  Konularım
</a>

        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
          @csrf
          <button type="submit" class="menu-item-myaccount-popup" style="background:none;border:none;padding:0;cursor:pointer;">
            <div class="menu-icon"><i class="fa-solid fa-right-from-bracket"></i></div>
            Çıkış Yap
          </button>
        </form>
      </div>
    </div>
  @endauth

  @guest
    <a href="https://www.expressmama.com/UyeGiris" class="login-action">
      <i class="fa-regular fa-user"></i> Giriş Yap
    </a>
  @endguest
</div>

      </div>
     
    </div>
  </div>
  <!-- FİNİSH WEB ARAMA KUTUSU - SAĞ MENÜ YARDIM HESABIM ve SEPETİM -->

  <!---START WEB HEADER KATEGORİLER--->
  <div class="main-menu-container">
    <nav class="main-menu">
      <a href="https://www.expressmama.com/kedi">Kedi Ürünleri</a>
      <a href="https://www.expressmama.com/köpek">Köpek Ürünleri</a>
      <a href="https://www.expressmama.com/kus">Kuş Ürünleri</a>

      <a href="https://www.expressmama.com/kemirgen">Kemirgen Ürünleri</a>
      <a href="https://www.expressmama.com/kampanyalar">Kampanyalar</a>
      <a href="https://www.expressmama.com/kus">Pati Kulüp</a>
      <a href="https://www.expressmama.com/kus">Yuva Arayanlar</a>
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
    <!-- <div class="question-answer-wrapper">
        <div class="breadcrumb-line">
            <div class="question-answer-container">
                <div class="row">
                    <div class="col-md-12">
                        <ol class="question-answer-breadcrump">
                            <li class="breadcrump-item">
                                <a href="https://sosyal.expressmama.com" title="expressmama sosyal"
                                    class="breadcrump-link">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrump-item active">
                                <i class="fa-solid fa-angle-right" id="question-answer-breadcrump-icon"></i>
                                <a href="https://sosyal.expressmama.com¨/soru-cevap" title="Soru Cevap"
                                    class="breadcrump-link">Soru
                                    Cevap</a>
                            </li>
                            <li class="breadcrump-item active">
                                <i class="fa-solid fa-angle-right"
                                    id="question-answer-breadcrump-icon-new-question-icon"></i>
                                <a href="https://sosyal.expressmama.com¨/soru-cevap" title="Soru Cevap"
                                    class="breadcrump-link">Yeni
                                    Soru Sor</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="ask-new-question-header-container">
        <div class="ask-new-question-header">
            <div class="ask-new-question-header-block">
                <div class="ask-new-question-header-block-title">
                    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <h1 class="container-title">Yeni Soru Sor</h1>
                    <form action="{{ route('topic.create') }}" method="post" role="form" enctype="multipart/form-data"
                        class="form-horizontal">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label for="inputTopic" class="col-md-1 control-label">Konu</label>
                                <div class="">
                                   <select name="category" class="form-control" id="form-header-select">
                                        @foreach ($categorys as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTitle" class="col-md-1 control-label">Başlık</label>
                                <div class="">
                                    <textarea id="form-header-select" name="title" class="form-control"
                                        placeholder="Sorunuzun özetini anlaşılır bir şekilde buraya yazmalısınız. Soru Cümlesi olmalıdır."
                                        id="inputTitle" rows="3" maxlength="255"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription" class="col-md-1 control-label">Soru</label>
                                <div class="">
                                    <div class="md-editör" id="1753537654648">
                                
                                        <textarea name="content" id="form-header-select" class="form-control md-input"
                                            placeholder="Sorunuzu detaylı anlatırsanız, diğer üyeler ve uzmanlardan daha doğru cevaplar alabilirsiniz."
                                            data-iconlibrary="fa" data-provide="markdown"
                                            data-hidden-buttons='["cmdCode","cmdPreview"]' maxlength="2000" rows="5"
                                            style="resize: none;"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Kuş Kemirgen Sürüngen ve Akvaryum Seçeneği Seçildiğinde 
    ** Listede Olacaklar **
    Ad
    Yaş
    Cinsiyet
    -->

    <!--Kedi ve Köpek Listelerinde Aşağıdaki Seçenekler kesinlikle olmalıdır olmaması gerekenler yukarıdaki not kısmına yazıldı.-->
    <div class="adoption-container">
      <div class="adoption-header">Petinizin Özelliklerini Giriniz!</div>
      <div class="adoption-content">
        <form action="#" method="post" class="adoption-form">
          <div class="form-group">
            <label for="pet-type">Pet Türü Seçiniz</label>
            <select class="form-control" id="form-header-select">
              <option value="cat">Kedi</option>
              <option value="dog">Köpek</option>
              <option value="bırd">Kuş</option>
              <option value="rodent">Kemirgen</option>
              <option value="reptile">Sürüngen</option>
              <option value="aquarium">Akvaryum</option>
            </select>
            <form action="#" method="post" class="adoption-form">
          <div class="form-group">
            <label for="pet-type">Pet Bilgileri</label><br>
              <label for="pet-type">Adı</label>
              <textarea type="text" placeholder="Bir adı yoksa siz şuanlık belirtebilirsiniz." id="form-header-select" class="form-control md-input"></textarea>
              <label for="pet-type">Irk</label>
      <!--Bu Kısımda Irk Seçimi olacak Yukarıdaki Pet Türü Seçiniz Kısmındaki Seçime göre aşağıdaki Irk Listesi değişecek-->
             <select class="form-control" id="form-header-select">
							  								  <option value="" selected="">Seçiniz</option>
							  								  <option value="5">Abyssinian</option>
							  								  <option value="9">American Bobtail</option>
							  								  <option value="6">American Curl</option>
							  								  <option value="10">American Keuda</option>
							  								  <option value="7">American Shorthair</option>
							  								  <option value="11">American Wirehair</option>
							  								  <option value="8">Ankara Kedisi</option>
							  								  <option value="12">Australian Mist</option>
							  								  <option value="13">Balinese</option>
							  								  <option value="17">Bengal</option>
							  								  <option value="14">Birman</option>
							  								  <option value="18">Bombay</option>
							  								  <option value="15">Brazilian Shorthair</option>
							  								  <option value="334">British Longhair</option>
							  								  <option value="2">British Shorthair</option>
							  								  <option value="16">Burmese</option>
							  								  <option value="19">Burmilla (Silver Burmese)</option>
							  								  <option value="20">Californian Spangled</option>
							  								  <option value="23">Chartreux</option>
							  								  <option value="21">Chinchilla</option>
							  								  <option value="24">Colorpoint Shorthair</option>
							  								  <option value="22">Cornish Rex</option>
							  								  <option value="25">Cymric</option>
							  								  <option value="26">Devon Rex</option>
							  								  <option value="27">Egyptian Maular</option>
							  								  <option value="29">European Burmese</option>
							  								  <option value="28">European Shorthair</option>
							  								  <option value="30">Exotic Shorthair</option>
							  								  <option value="31">Havana Brown</option>
							  								  <option value="33">Himalayan</option>
							  								  <option value="32">Honey Bear</option>
							  								  <option value="34">İran Kedisi (Persian)</option>
							  								  <option value="35">Japon Bobtail</option>
							  								  <option value="36">Javanese</option>
							  								  <option value="37">Kashmir </option>
							  								  <option value="38">Korat</option>
							  								  <option value="39">Laperm</option>
							  								  <option value="40">Maine Coon</option>
							  								  <option value="43">Manx</option>
							  								  <option value="41">Mavi Rus</option>
							  								  <option value="44">Mojave Spotted (Mojave çöl Kedisi)</option>
							  								  <option value="42">Munchkin</option>
							  								  <option value="45">Nebelung</option>
							  								  <option value="46">Norwegian Forest</option>
							  								  <option value="47">Ocicat</option>
							  								  <option value="49">Oriental Longhair</option>
							  								  <option value="48">Oriental Shorthair</option>
							  								  <option value="50">Pixie Bob</option>
							  								  <option value="51">Ragamuffin</option>
							  								  <option value="52">Ragdoll</option>
							  								  <option value="331">Sarman</option>
							  								  <option value="53">Savannah</option>
							  								  <option value="1">Scottish Fold</option>
							  								  <option value="54">Selkirk Rex</option>
							  								  <option value="58">Sibirya Kedisi</option>
							  								  <option value="55">Singapura</option>
							  								  <option value="59">Siyam Kedisi</option>
							  								  <option value="56">Snowshoe (Karayak)</option>
							  								  <option value="60">Soke</option>
							  								  <option value="57">Somali</option>
							  								  <option value="61">Sphynx</option>
							  								  <option value="62">Tekir Kedi</option>
							  								  <option value="64">Tiffanie</option>
							  								  <option value="63">Tiffany/Chantilly</option>
							  								  <option value="65">Tonkinese</option>
							  								  <option value="330">Tuxedo (Smokin) Kedi</option>
							  								  <option value="66">Van Kedisi</option>
							  								  <option value="67">York Chocolate</option>
							  						  </select>
      <!--KÖPEK IRK LİSTESİ-->
      <!-- <select class="form-control" id="form-header-select">
							  								  <option value="" selected="">Seçiniz</option>
							  								  <option value="70">Affenpinscher</option>
							  								  <option value="85">Afgan Tazısı</option>
							  								  <option value="68">Aidi</option>
							  								  <option value="86">Ainu</option>
							  								  <option value="69">Airedale Terrier</option>
							  								  <option value="88">Akbaş</option>
							  								  <option value="71">Akita İnu</option>
							  								  <option value="332">Aksaray Malaklısı</option>
							  								  <option value="89">Alabay (Alabai)</option>
							  								  <option value="72">Alaskan Malamute</option>
							  								  <option value="90">Alman Av Terrieri</option>
							  								  <option value="73">Alman Çoban Köpeği</option>
							  								  <option value="91">Alman Kalın Tüylü Pointer</option>
							  								  <option value="74">Alman Kısa Tüylü Pointer</option>
							  								  <option value="92">Alman Spanieli</option>
							  								  <option value="75">Alpine Dachsbracke</option>
							  								  <option value="93">Amerikan Bulldog</option>
							  								  <option value="76">Amerikan Cocker Spaniel</option>
							  								  <option value="94">Amerikan Eskimo</option>
							  								  <option value="77">Amerikan Pitbull Terrier</option>
							  								  <option value="95">Amerikan Staffordshire Terrier</option>
							  								  <option value="78">Amerikan Su Spanieli</option>
							  								  <option value="96">Amerikan Tilki Tazısı</option>
							  								  <option value="79">Amerikan Tüysüz Terrieri</option>
							  								  <option value="97">Amerikan Yerli Köpeği</option>
							  								  <option value="80">Appenzell Dağ Köpeği</option>
							  								  <option value="99">Ariegeois</option>
							  								  <option value="81">Avustralya Çoban Köpeği</option>
							  								  <option value="100">Avustralya Sığır Köpeği</option>
							  								  <option value="83">Avustralya Terrier</option>
							  								  <option value="101">Avustralyalı Kelpie</option>
							  								  <option value="84">Avusturya Tazısı</option>
							  								  <option value="102">Avusturyalı Pinscher</option>
							  								  <option value="103">Bandogge Mastiff</option>
							  								  <option value="119">Basenji</option>
							  								  <option value="104">Basset Hound</option>
							  								  <option value="120">Bavyera Dağ Tazısı</option>
							  								  <option value="105">Beagle</option>
							  								  <option value="121">Beauceron</option>
							  								  <option value="107">Bedlington Terrier</option>
							  								  <option value="122">Belçika Groenendael</option>
							  								  <option value="108">Belçika Laekenois</option>
							  								  <option value="123">Belçika Malinois</option>
							  								  <option value="306">Belçika Tervuren</option>
							  								  <option value="124">Bergamasco</option>
							  								  <option value="109">Bernese Dağ Köpeği</option>
							  								  <option value="125">Bichon Frise</option>
							  								  <option value="110">Bichon Havanese</option>
							  								  <option value="126">Billy</option>
							  								  <option value="111">Bloodhound</option>
							  								  <option value="127">Border Collie</option>
							  								  <option value="112">Border Terrier</option>
							  								  <option value="128">Borzoi</option>
							  								  <option value="113">Boston Terrier</option>
							  								  <option value="129">Bouvier des Ardennes</option>
							  								  <option value="114">Bouvier des Flandres</option>
							  								  <option value="130">Boxer</option>
							  								  <option value="115">Brezilya Mastiff</option>
							  								  <option value="131">Briard</option>
							  								  <option value="116">Brittany</option>
							  								  <option value="307">Brüksel Griffonu</option>
							  								  <option value="117">Bull Terrier</option>
							  								  <option value="132">Bullmastiff</option>
							  								  <option value="118">Büyük İsveç Dağ Köpeği</option>
							  								  <option value="133">Cairn Terrier</option>
							  								  <option value="143">Canaan Köpeği</option>
							  								  <option value="134">Cane Corso Italiano</option>
							  								  <option value="144">Cao da Serra da Estrela</option>
							  								  <option value="135">Cao de Castro Laboreiro</option>
							  								  <option value="145">Cao de Serra de Aires</option>
							  								  <option value="136">Cardigan Welsh Corgi</option>
							  								  <option value="146">Catahoula Leopar Köpeği</option>
							  								  <option value="151">Çatalburun</option>
							  								  <option value="137">Cavalier King Charles Spanieli</option>
							  								  <option value="147">Cesky Terrier</option>
							  								  <option value="138">Chesapeake Bay Retriever</option>
							  								  <option value="148">Chiens Francaises</option>
							  								  <option value="139">Chihuahua</option>
							  								  <option value="149">Chow Chow (çin Aslanı)</option>
							  								  <option value="142">Çin Creste Köpeği</option>
							  								  <option value="152">Çin Shar Pei</option>
							  								  <option value="140">Clumber Spaniel</option>
							  								  <option value="150">Collie</option>
							  								  <option value="333">Coton De Tulear</option>
							  								  <option value="141">Curly Coated Retriever</option>
							  								  <option value="153">Dachshund (Sosis)</option>
							  								  <option value="157">Dalmatian</option>
							  								  <option value="154">Dandie Dinmont Terrier</option>
							  								  <option value="158">Dev Schnauzer</option>
							  								  <option value="156">Doberman Pinscher</option>
							  								  <option value="159">Dogo Arjantin</option>
							  								  <option value="160">Entlebucher</option>
							  								  <option value="161">Eskimo Köpeği</option>
							  								  <option value="162">Field Spaniel</option>
							  								  <option value="166">Fin Tazısı</option>
							  								  <option value="163">Finnish Spitz</option>
							  								  <option value="167">Flat Coated Retriever</option>
							  								  <option value="164">Fox Terrier (Smooth)</option>
							  								  <option value="168">Fox Terrier (Wire)</option>
							  								  <option value="165">Fransız Bulldog</option>
							  								  <option value="169">Fransız Mastiff</option>
							  								  <option value="170">Glen of Imaal Terrier</option>
							  								  <option value="175">Golden Retriever</option>
							  								  <option value="171">Gordon Setter</option>
							  								  <option value="176">Grand Bleu de Gascogne</option>
							  								  <option value="172">Grand Gascon Saintongeois</option>
							  								  <option value="177">Great Dane (Danua)</option>
							  								  <option value="173">Great Phyrenees</option>
							  								  <option value="178">Greyhound</option>
							  								  <option value="174">Grönland Köpeği</option>
							  								  <option value="179">Hanover Tazısı</option>
							  								  <option value="182">Harrier</option>
							  								  <option value="180">Hırvat Çoban Köpeği</option>
							  								  <option value="183">Hollanda Çoban Köpeği</option>
							  								  <option value="181">Hovawart</option>
							  								  <option value="184">Ibizan Hound</option>
							  								  <option value="192">İlirya çoban Köpeği</option>
							  								  <option value="185">İngiliz Bulldog</option>
							  								  <option value="193">İngiliz Cocker Spaniel</option>
							  								  <option value="186">İngiliz Setter</option>
							  								  <option value="194">İngiliz Springer Spaniel</option>
							  								  <option value="329">İngiliz Tilki Tazısı</option>
							  								  <option value="195">İrlandalı Kurt Tazısı</option>
							  								  <option value="187">İrlandalı Setter</option>
							  								  <option value="196">İrlandalı Su Spanieli</option>
							  								  <option value="188">İrlandalı Terrier</option>
							  								  <option value="197">İskoç Geyik Tazısı</option>
							  								  <option value="189">İskoç Terrier</option>
							  								  <option value="198">İspanyol Mastiff</option>
							  								  <option value="190">İsveç çoban köpeği</option>
							  								  <option value="199">İsveç Geyik Avcısı</option>
							  								  <option value="191">İtalyan Tazısı</option>
							  								  <option value="200">İzlanda Köpeği</option>
							  								  <option value="201">Jack Russell Terrier</option>
							  								  <option value="202">Japon Chin</option>
							  								  <option value="203">Kangal</option>
							  								  <option value="208">Karelya Ayı Köpeği</option>
							  								  <option value="209">Kars Çoban Köpeği</option>
							  								  <option value="204">Karst Çoban Köpeği</option>
							  								  <option value="210">Katalan Çoban Köpeği</option>
							  								  <option value="205">Keeshond</option>
							  								  <option value="211">Kerry Blue Terrier</option>
							  								  <option value="206">King Charles Spaniel</option>
							  								  <option value="212">Komondor</option>
							  								  <option value="207">Kuvasz</option>
							  								  <option value="213">Kyüshü</option>
							  								  <option value="214">Labrador Retriever</option>
							  								  <option value="218">Lakeland Terrier</option>
							  								  <option value="215">Landseer</option>
							  								  <option value="219">Lapphund</option>
							  								  <option value="216">Lapponian Çoban Köpeği</option>
							  								  <option value="220">Leonberger</option>
							  								  <option value="217">Lhasa Apso</option>
							  								  <option value="221">Lowchen</option>
							  								  <option value="222">Maltese</option>
							  								  <option value="226">Manchester Terrier</option>
							  								  <option value="223">Maremma Çoban Köpeği</option>
							  								  <option value="227">Mastiff</option>
							  								  <option value="224">Minyatür Bull Terrier</option>
							  								  <option value="228">Minyatür Pinscher</option>
							  								  <option value="225">Minyatür Schnauzer</option>
							  								  <option value="229">Mudi</option>
							  								  <option value="230">Napoliten Mastiff</option>
							  								  <option value="234">Newfoundland</option>
							  								  <option value="231">Norfolk Terrier</option>
							  								  <option value="235">Norrbottenspets</option>
							  								  <option value="232">Norsk Buhund</option>
							  								  <option value="236">Norveç Geyik Avcısı</option>
							  								  <option value="233">Norwich Terrier</option>
							  								  <option value="237">Old English Sheepdog</option>
							  								  <option value="239">Otterhound</option>
							  								  <option value="240">Pappilon</option>
							  								  <option value="251">Pekingese</option>
							  								  <option value="241">Pembroke Welsh Corgi</option>
							  								  <option value="252">Peru Tüysüz Köpeği</option>
							  								  <option value="242">Petit Basset Griffon Vendien</option>
							  								  <option value="253">Petit Bleu de Gascogne</option>
							  								  <option value="243">Pharaoh Hound</option>
							  								  <option value="254">Picardy Çoban Köpeği</option>
							  								  <option value="244">Plott Tazısı</option>
							  								  <option value="255">Pointer</option>
							  								  <option value="245">Poitevin</option>
							  								  <option value="256">Polonya Tazısı</option>
							  								  <option value="246">Pomeranyalı</option>
							  								  <option value="257">Poodle (Minyatür Kaniş)</option>
							  								  <option value="247">Poodle(Standart Kaniş)</option>
							  								  <option value="258">Portekiz Su Köpeği</option>
							  								  <option value="308">Presa Canario</option>
							  								  <option value="248">Pug</option>
							  								  <option value="259">Puli</option>
							  								  <option value="249">Pumi</option>
							  								  <option value="260">Pyrenees Çoban Köpeği</option>
							  								  <option value="250">Pyrenees Mastiff</option>
							  								  <option value="261">Rafeiro do Alentejo</option>
							  								  <option value="263">Rhodesian Ridgeback</option>
							  								  <option value="262">Rottweiler</option>
							  								  <option value="264">Russian Spaniel</option>
							  								  <option value="265">Sakallı Collie</option>
							  								  <option value="276">Saluki</option>
							  								  <option value="266">Samoyed</option>
							  								  <option value="277">Sanshu</option>
							  								  <option value="267">Schipperkee</option>
							  								  <option value="278">Sealyham Terrier</option>
							  								  <option value="268">Shetland Çoban Köpeği</option>
							  								  <option value="279">Shiba Inu</option>
							  								  <option value="269">Shih Tzu</option>
							  								  <option value="280">Sibirya Kurdu (Husky)</option>
							  								  <option value="270">Silky Terrier</option>
							  								  <option value="281">Siyah ve Açık Kahverengi Rakun Tazısı</option>
							  								  <option value="271">Skye Terrier</option>
							  								  <option value="282">Slovak Tchouvatch</option>
							  								  <option value="272">Soft Coated Wheaten Terrier</option>
							  								  <option value="283">Sokö (Sokak Köpeği)</option>
							  								  <option value="273">St. Bernard (Saint Bernard)</option>
							  								  <option value="284">Staffordshire Bull Terrier</option>
							  								  <option value="274">Standart Schnauzer</option>
							  								  <option value="285">Steinbracke</option>
							  								  <option value="275">Styrian Dağ Tazısı</option>
							  								  <option value="286">Sussex Spanieli</option>
							  								  <option value="287">Tatra Çoban Köpeği</option>
							  								  <option value="291">Tibet Terrieri</option>
							  								  <option value="288">Tibetli Mastiff</option>
							  								  <option value="292">Tibetli Spaniel</option>
							  								  <option value="289">Tosa</option>
							  								  <option value="293">Trigg Tazısı</option>
							  								  <option value="290">Türk Tazısı</option>
							  								  <option value="294">Tüysüz Collie</option>
							  								  <option value="295">Tyrolean Tazısı</option>
							  								  <option value="296">Valee Çoban Köpeği</option>
							  								  <option value="297">Vizsla</option>
							  								  <option value="298">Weimaraner</option>
							  								  <option value="302">Welsh Springer Spaniel</option>
							  								  <option value="299">Welsh Terrier</option>
							  								  <option value="303">West Highland White Terrier</option>
							  								  <option value="300">Westphalia Basseti</option>
							  								  <option value="304">Whippet</option>
							  								  <option value="301">Wirehaired Pointing Griffon</option>
							  								  <option value="305">Yorkshire Terrier</option>
							  						  </select> -->
      
    <label for="pet-type">Yaş</label>
    <select class="form-control" id="form-header-select">
							  								  <option value="" selected="">Seçiniz</option>
							  								  <option value="1">Yavru (0-6 Aylık)</option>
							  								  <option value="2">Genç (6 Aylık - 2 Yaş)</option>
							  								  <option value="3">Yetişkin (2 - 7 Yaş)</option>
							  								  <option value="4">Yaşlı (7 Yaş ve üzeri)</option>
							  						  </select>
     <label for="pet-type">Cinsiyet</label>
     <select class="form-control" id="form-header-select">
							  								  <option value="" selected="">Seçiniz</option>
							  								  <option value="1">Erkek</option>
							  								  <option value="2">Dişi</option>
							  						  </select>
      <label for="pet-type">Boyut</label>
      <select class="form-control" id="form-header-select">
							  								  <option value="" selected="">Seçiniz</option>
							  								  <option value="1">Küçük Boy</option>
							  								  <option value="2">Orta Boy</option>
							  								  <option value="3">Büyük Boy</option>
							  						  </select>
      <label for="pet-type">İlan Kimden</label>
      <select class="form-control" id="form-header-select">
							  								  <option value="" selected="">Seçiniz</option>
							  								  <option value="1">Barınaktan</option>
							  								  <option value="2">Veteriner Hekimden</option>
							  								  <option value="3">Geçiçi Evinden</option>
							  								  <option value="4">Sokaktan</option>
							  								  <option value="5">Sahibinden</option>
							  						  </select>
      <label for="pet-type">Şehir</label> 
      <select class="form-control" id="form-header-select">
							  								  <option value="" selected="">Seçiniz</option>
							  								  <option value="1">Adana</option>
							  								  <option value="2">Adıyaman</option>
							  								  <option value="3">Afyonkarahisar</option>
							  								  <option value="4">Ağrı</option>
							  								  <option value="68">Aksaray</option>
							  								  <option value="5">Amasya</option>
							  								  <option value="6">Ankara</option>
							  								  <option value="7">Antalya</option>
							  								  <option value="75">Ardahan</option>
							  								  <option value="8">Artvin</option>
							  								  <option value="9">Aydın</option>
							  								  <option value="10">Balıkesir</option>
							  								  <option value="74">Bartın</option>
							  								  <option value="72">Batman</option>
							  								  <option value="69">Bayburt</option>
							  								  <option value="11">Bilecik</option>
							  								  <option value="12">Bingöl</option>
							  								  <option value="13">Bitlis</option>
							  								  <option value="14">Bolu</option>
							  								  <option value="15">Burdur</option>
							  								  <option value="16">Bursa</option>
							  								  <option value="17">Çanakkale</option>
							  								  <option value="18">Çankırı</option>
							  								  <option value="19">Çorum</option>
							  								  <option value="20">Denizli</option>
							  								  <option value="21">Diyarbakır</option>
							  								  <option value="81">Düzce</option>
							  								  <option value="22">Edirne</option>
							  								  <option value="23">Elazığ</option>
							  								  <option value="24">Erzincan</option>
							  								  <option value="25">Erzurum</option>
							  								  <option value="26">Eskişehir</option>
							  								  <option value="27">Gaziantep</option>
							  								  <option value="28">Giresun</option>
							  								  <option value="29">Gümüşhane</option>
							  								  <option value="30">Hakkari</option>
							  								  <option value="31">Hatay</option>
							  								  <option value="76">Iğdır</option>
							  								  <option value="32">Isparta</option>
							  								  <option value="34">İstanbul</option>
							  								  <option value="35">İzmir</option>
							  								  <option value="46">Kahramanmaraş</option>
							  								  <option value="78">Karabük</option>
							  								  <option value="70">Karaman</option>
							  								  <option value="36">Kars</option>
							  								  <option value="37">Kastamonu</option>
							  								  <option value="38">Kayseri</option>
							  								  <option value="79">Kilis</option>
							  								  <option value="71">Kırıkkale</option>
							  								  <option value="39">Kırklareli</option>
							  								  <option value="40">Kırşehir</option>
							  								  <option value="41">Kocaeli</option>
							  								  <option value="42">Konya</option>
							  								  <option value="43">Kütahya</option>
							  								  <option value="44">Malatya</option>
							  								  <option value="45">Manisa</option>
							  								  <option value="47">Mardin</option>
							  								  <option value="33">Mersin</option>
							  								  <option value="48">Muğla</option>
							  								  <option value="49">Muş</option>
							  								  <option value="50">Nevşehir</option>
							  								  <option value="51">Niğde</option>
							  								  <option value="52">Ordu</option>
							  								  <option value="80">Osmaniye</option>
							  								  <option value="53">Rize</option>
							  								  <option value="54">Sakarya</option>
							  								  <option value="55">Samsun</option>
							  								  <option value="63">Şanlıurfa</option>
							  								  <option value="56">Siirt</option>
							  								  <option value="57">Sinop</option>
							  								  <option value="58">Sivas</option>
							  								  <option value="73">Şırnak</option>
							  								  <option value="59">Tekirdağ</option>
							  								  <option value="60">Tokat</option>
							  								  <option value="61">Trabzon</option>
							  								  <option value="62">Tunceli</option>
							  								  <option value="64">Uşak</option>
							  								  <option value="65">Van</option>
							  								  <option value="77">Yalova</option>
							  								  <option value="66">Yozgat</option>
							  								  <option value="67">Zonguldak</option>
							  						  </select>
       <!-- <label for="pet-type">İlçe</label><br> -->
        <!-- <select class="form-control" id="form-header-select"> -->
      <!--Buraya JSON kodu ile ilçeler seçiniz ile ilçeler gelecek.-->                        
      <label for="pet-type">Ad Soyad</label>
      <textarea type="text" placeholder="Ad Soyad Giriniz" id="form-header-select" class="form-control md-input"></textarea>
      <label for="pet-type">Telefon</label>
      <textarea type="text" placeholder="0(5**) *** ** **" id="form-header-select" class="form-control md-input"></textarea>                   

<div class="adoption-warning">
  <div class="adoption-list">
    <p><i class="fa-solid fa-circle-exclamation"></i> Sadece <b>ücretsiz sahiplendirmeler</b> için ilan verilebilir.</p>
    <p><i class="fa-solid fa-circle-exclamation"></i> Evcil hayvan arıyorsanız "arıyorum" içerikli ilanlar açmak yerine sahiplendirme ilanlarına bakabilirsiniz. Böylelikle yuva arayan dostlarımıza da daha kolay ulaşmış olursunuz. Sahiplendirme ilanları için tıklayınız.</p>
    <p><i class="fa-solid fa-circle-exclamation"></i> Sahiplendirmek istediğiniz her evsiz hayvan için <b>ayrı ayrı ilan vermelisiniz.</b> Bu sayede daha da hızlı yuva bulabilirsiniz.</p>
    <p><i class="fa-solid fa-circle-exclamation"></i> Sahiplendirme ilanlarının doğruluğu, dostlarımıza en hızlı şekilde yuva bulabilmek adına bizim için çok değerli.Bu nedenle kurallara uygun olmayan ilanlar veren üyelerin <b>üyelikleri yeniden açılmamak üzere iptal edilir.</b></p>
    </div>
</div>
</div>
                           
                            <div class="row bottom-margin-15">      
                              <div class="form-group mt-4">
    <input type="file" name="images[]" id="images" class="form-control" accept="image/*" multiple>
    <small class="form-text text-muted">Birden fazla fotoğraf seçebilirsiniz.</small>
</div>
</div>

  
                            
                            <div class="form-group row mt-4">
                                <div class="col-md-offset-1">
                                    <button type="submit" class="btn btn-primary">Gönder Yayınla!</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>


  


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
    
     <script src="https://cdn.ckeditor.com/ckeditor5/41.0.1/classic/ckeditor.js"></script>
    
     @vite(['resources/css/sor.css', 'resources/js/sor.js'])
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

        <script src="./sor.js"></script>

  <script>
  document.addEventListener('click', (e) => {
    const toggle = document.getElementById('myaccountToggle');
    const popup  = document.getElementById('myaccountPopup');
    if (!toggle || !popup) return;

    if (e.target.closest('#myaccountToggle')) {
      e.preventDefault();
      popup.classList.toggle('show'); // CSS’inde .show ile görünür yap
    } else if (!e.target.closest('#myaccountPopup')) {
      popup.classList.remove('show');
    }
  });

  const el = document.querySelector('.header .logo a');
const r = el.getBoundingClientRect();
console.log(document.elementFromPoint(r.left + r.width/2, r.top + r.height/2));

</script>


</body>

</html>