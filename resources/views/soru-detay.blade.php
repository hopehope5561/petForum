<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Expressmama.com - Sosyal I Expressmama Sosyal</title>
  @vite('resources/css/index.css')

  <meta name="csrf-token" content="{{ csrf_token() }}">
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
      <a title="Expressmama.com Online Petshop" class="header-logo"href="{{ url('/') }}">
      <img src="https://static.ticimax.cloud/66297//uploads/editoruploads/jhkjhkhjkj.png?t=20240715143822" alt=""
        class="logo-web"></a>
        <a title="Expressmama.com Online Petshop" class="header-logo" href="{{ url('/') }}">
      <img src="https://static.ticimax.cloud/66297//uploads/editoruploads/jhkjhkhjkj.png?t=20240715143822" alt=""
        class="logo-mobil"></a>
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
  
    

    <!-- Sağ Menü -->
    <div class="login-actions">
      <div class="help-container">
       
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
  <!--FİNİSH KATEGORİLER MOBİL 01-->

  <!--START BREADCRUMB-->
  <div class="question-answer-wrapper">
    <div class="breadcrumb-line">
      <div class="question-answer-container">
        <div class="row">
          
        </div>
      </div>
    </div>
  </div>
  <!--FİNİSH BREADCRUMB-->

  <div class="question-answer-contents">
    <main class="question-answer-contents-main">
      <div class="question-answer-contents-main-header">
        <h1>{{ $topic->title }}</h1>
        <div class="header-stats">
         
        </div>
      </div>
      <div class="question-answer-post">
        <div class="question-answer-post-header">
          <div class="post-header-time">
             <span class="post-header-time-date" id="post-header-time-date">
                {{ \Carbon\Carbon::parse($topic->created_at)->format('d.m.Y H:i') }}
            </span>
            </div>
          <div class="uye-img">
            <div class="uye-img-border">
    @if($topic->user && $topic->user->image_path)
        <img src="{{ asset('storage/' . $topic->user->image_path) }}" 
             alt="{{ $topic->user->name }}"
             style="width:60px; height:60px; object-fit:cover; border-radius:50%;">
    @else
        {{-- Varsayılan avatar --}}
        <img src="https://via.placeholder.com/60x60.png?text=👤" 
             alt="default avatar"
             style="width:60px; height:60px; object-fit:cover; border-radius:50%;">
    @endif
</div>

            <div class="user-info">
              <div class="username"><span>{{ $topic->user->name }} </span></div>
              <div class="user-stats">
                <span><i class="fa-solid fa-paw"></i> {{ $topic->user->points }}</span>
                <p class="user-stats-puan">Pati Puan</p>
              </div>
              <div class="user-stats-rank">
                <p class="user-stats-rank-icon-new-paw">🌱</p><span> {{ $topic->user->rank->name }} </span>
                
              </div>
            </div>
            
          </div>
        </div>
        <div class="question-answer-post-content">
  <p>{{ $topic->content }}</p>
</div>

@if($topic->images->isNotEmpty())
  <div class="topic-images grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
    @foreach($topic->images as $img)
      @php $url = Storage::url($img->image_path); @endphp
      <a href="{{ $url }}" target="_blank" rel="noopener">
        <img src="{{ $url }}" alt="{{ $topic->title }} görseli"
             loading="lazy" class="rounded w-full h-auto">
      </a>
    @endforeach
  </div>
@endif

        <!-- Ana Soru Vote Butonu (Mevcut kodunuzdaki question-answer-post-actions kısmını güncelle) -->
<div class="question-answer-post-actions">


   <!-- YENİ EKLENEN YANIT BUTONU -->
  <!-- <button type="button" class="vote-btn" onclick="addQuoteToReply(this)">
    <i class="fa-solid fa-reply"></i> Yanıtla
  </button> -->
  
  <!-- Güncellenmiş Like Butonu - onclick kaldırıldı, JavaScript otomatik handle ediyor -->
  <!-- Like butonu -->
@auth
    <button class="vote-btn"
            data-topic-id="{{ $topic->id }}"
            onclick="voteAnswer(this, 'like')">
        👍 {{ $topic->likes->count() }} Pati
    </button>

    <button type="button" class="vote-btn" onclick="openReportModal({{ $topic->id }})">
        ⚠️ Şikayet Et
    </button>
@endauth

@guest
    <a class="vote-btn" href="{{ route('login') }}">
        👍 Beğenmek için giriş yap
    </a>

    <a class="vote-btn" href="{{ route('login') }}">
        ⚠️ Şikayet için giriş yap
    </a>
@endguest


</div>
    
<div class="comments-section mt-5">
    <h4>{{ $topic->comments->count() }} Cevap</h4>

    @forelse($topic->comments as $comment)
        <div class="comment-box mb-3 p-3 border rounded">
            <div class="d-flex align-items-center mb-2">
                {{-- Kullanıcı fotoğrafı --}}
                <div class="me-2">
                    @if($comment->user && $comment->user->image_path)
                           <img src="{{ asset('storage/' . $topic->user->image_path) }}" 
             alt="{{ $topic->user->name }}"
             style="width:60px; height:60px; object-fit:cover; border-radius:50%;">
                    @else
                        {{-- Varsayılan avatar --}}
                        <img src="https://via.placeholder.com/40x40.png?text=👤"
                             alt="default avatar"
                             class="rounded-circle"
                             style="width:40px; height:40px;">
                    @endif
                </div>

                <div>
                    <strong>{{ $comment->user->name ?? 'Anonim' }}</strong>
                    <span class="text-muted ms-2" style="font-size: 0.9em;">
                        {{ \Carbon\Carbon::parse($comment->created_at)->format('d.m.Y H:i') }}
                    </span>
                </div>
            </div>

            <p class="mt-2">{{ $comment->content }}</p>

            @if($comment->image_path)
                <div class="comment-image mt-2">
                    <img src="{{ asset('storage/' . $comment->image_path) }}" 
                         alt="Cevap görseli"
                         style="max-width:200px; border-radius:8px;">
                </div>
            @endif
        </div>
    @empty
        <p>Henüz hiç cevap yazılmamış. İlk sen yaz! 🐾</p>
    @endforelse
</div>


      <!-- <div class="sort-dropdown" onclick="toggleDropdown()">Eskiden Yeniye ▼
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="sortDropdown">
          <div class="dropdown-item">En Çok Patilenen Göre</div>
          <div class="dropdown-item">Eskiden Yeniye</div>
          <div class="dropdown-item">Yeniden Eskiye</div>
        </div>
      </div> -->
    
      <div class="question-answer-post-content-section">
  <h4 id="answer-header">Cevap Yaz</h4>
  <form method="POST"
        action="{{ route('answer.store', $topic->id) }}"
        enctype="multipart/form-data"
        id="answerForm">
    @csrf


  <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="image-upload">Resim Yükle</span>
      </div>
      <div class="custom-file" id="img-upload">
        <input type="file" class="custom-file-input" id="inputGroupFile01"
               name="images[]" accept="image/*" multiple>
        <label class="custom-file-label" for="inputGroupFile01" id="inputGroupFile02">Dosya Seç</label>
      </div>
    </div>
  
  <!-- Alıntı önizleme alanı (isteğe bağlı) -->
  <div id="quote-preview" style="display: none; background: #f8f9fa; border-left: 4px solid #007bff; padding: 10px; margin-bottom: 10px; font-style: italic;">
    <!-- Alıntı buraya gelecek -->
  </div>
  
   <textarea
      class="reply-input form-control"
      name="content"
      placeholder="Deneyimlerinizi ve önerilerinizi paylaşın..."
      maxlength="2000"
      rows="5"
      required
      style="min-height:120px;"></textarea>

    <div class="reply-tools mt-2 d-flex align-items-center">
      
      <button type="button" onclick="clearReplyInput()"
              class="btn btn-link ms-auto text-danger p-0">
        <i class="fa-solid fa-trash"></i> Temizle
      </button>
    </div>

    @auth
    <button type="submit" class="reply-btn btn btn-primary mt-2">
        Cevabı Gönder
    </button>
@endauth

@guest
    <a href="https://www.expressmama.com/UyeGiris"
       class="reply-btn btn btn-outline-primary mt-2">
        Soru Sormak için Giriş Yap
    </a>
@endguest

  </form>
</div>
</div>
    </main>
    <aside class="sidebar">
      <div class="widget-answer-question">
        <h3>SORUNUZ MU VAR?</h3>
        <p style="color: #666; font-size: 0.9rem; margin-bottom: 15px;">
          Uzmanlardan ve diğer üyelerden faydalı cevaplar almak için:
        </p>
        <div class="homepage-section-new-question">
        <a href="{{ auth()->check() ? route('topic.create') : 'https://www.expressmama.com/UyeGiris' }}" class="btn btn-danger new-question-btn" id="new-question-btn-1">
    Yeni Soru Sor
        </a>
      </div>
  </div>
      </div>
      <div class="widget-similar-questions">
    <h3 id="similar-questions">BENZER SORULAR</h3>
    <ul class="popular-questions">
        @forelse($similarTopics as $sim)
            <li>
                <a href="{{ route('topic.detail', $sim->id) }}">
                    🐾 {{ $sim->title }}
                </a>
            </li>
        @empty
            <li>Benzer soru bulunamadı.</li>
        @endforelse
    </ul>
</div>


    </aside>
  </div>
  <!--Start Şikayet Modal-->
  <div class="modal" id="reportModal">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Şikayet Et</h3>
        <button class="close-btn" onclick="closeReportModal()">×</button>
      </div>

      <div class="form-group">
        <label class="form-label">Sebep</label>
        <select class="form-select" id="reportReason">
          <option value="">Seçiniz</option>
          <option value="spam">Spam veya Reklam</option>
          <option value="inappropriate">Uygunsuz İçerik</option>
          <option value="harassment">Taciz veya Zorbalık</option>
          <option value="fake">Yanlış Bilgi</option>
          <option value="copyright">Telif Hakkı İhlali</option>
          <option value="other">Diğer</option>
        </select>
      </div>

      <div class="form-group">
        <label class="form-label">Açıklama (İsteğe Bağlı)</label>
        <textarea class="form-textarea" id="reportDescription"
          placeholder="Şikayetinizin sebebini yazabilirsiniz..."></textarea>
      </div>

      <div class="modal-actions">
        <button class="btn-cancel" onclick="closeReportModal()">İptal</button>
        <button class="btn-submit" onclick="submitReport()">Şikayet Et</button>
      </div>
    </div>
  </div>
  <!--Finish Şikayet Modal-->




  <script src="./soru-detay.js"></script>

  <script>
// Temizle butonu fonksiyonu
function clearReplyInput() {
    const replyTextarea = document.querySelector('.reply-input');
    if (replyTextarea && confirm('Yazılan metni temizlemek istediğinizden emin misiniz?')) {
        replyTextarea.value = '';
        replyTextarea.focus();
    }
}

// Dinamik alıntı önizleme (isteğe bağlı)
function showQuotePreview(quoteText) {
    const previewDiv = document.getElementById('quote-preview');
    if (previewDiv) {
        previewDiv.innerHTML = quoteText.replace(/\n/g, '<br>');
        previewDiv.style.display = 'block';
    }
}

function hideQuotePreview() {
    const previewDiv = document.getElementById('quote-preview');
    if (previewDiv) {
        previewDiv.style.display = 'none';
    }
}

// Test fonksiyonları - Geliştirme sırasında konsol'da kullanabilirsiniz
window.testVotes = function() {
    console.log('Vote test başlatılıyor...');
    
    // Vote butonlarını otomatik test et
    setTimeout(() => {
        const likeButtons = document.querySelectorAll('.vote-btn');
        likeButtons.forEach((btn, index) => {
            if (btn.textContent.includes('👍')) {
                console.log(`Testing like button ${index}`);
                btn.click();
            }
        });
    }, 1000);
};

// Vote istatistiklerini göster
window.showVoteStats = function() {
    if (typeof voteData !== 'undefined') {
        console.table(voteData);
    } else {
        console.log('Vote data henüz yüklenmedi');
    }
};

document.addEventListener("DOMContentLoaded", function() {
    const viewElement = document.querySelector('.header-stats span:first-child'); // İlk span (görüntülenme)
    
    // localStorage'da mevcut değer var mı kontrol et
    let views = localStorage.getItem('pageViews');
    if (!views) {
        views = 0; // Başlangıç değeri
    } else {
        views = parseInt(views);
    }
    
    // Sayfa her yenilendiğinde 1 arttır
    views++;
    
    // Yeni değeri localStorage'a kaydet
    localStorage.setItem('pageViews', views);
    
    // HTML içeriğini güncelle
    viewElement.innerHTML = `<i class="fa fa-eye"></i> ${views}`; 
});

document.addEventListener("DOMContentLoaded", function() {
    const thumbSpan = document.querySelector('.thumb-count');
    const voteButton = document.querySelector('.vote-btn');

    // LocalStorage'daki değerleri yükle
    let spanCount = localStorage.getItem('thumbSpan') ? parseInt(localStorage.getItem('thumbSpan')) : 0;
    let buttonCount = localStorage.getItem('thumbButton') ? parseInt(localStorage.getItem('thumbButton')) : 9;

    // Sayfa yüklendiğinde değerleri göster
    thumbSpan.innerHTML = `<i class="fa-solid fa-thumbs-up"></i> ${spanCount}`;
    voteButton.innerHTML = `👍 ${buttonCount} Pati`;

    // Butona tıklama olayı
    window.voteAnswer = function(element, type) {
        if (type === 'like') {
            // Değerleri artır
            spanCount++;
            buttonCount++;

            // HTML'i güncelle
            thumbSpan.innerHTML = `<i class="fa-solid fa-thumbs-up"></i> ${spanCount}`;
            element.innerHTML = `👍 ${buttonCount} Pati`;

            // LocalStorage'a kaydet
            localStorage.setItem('thumbSpan', spanCount);
            localStorage.setItem('thumbButton', buttonCount);
        }
    };
});





</script>

<script>
// CSRF
const CSRF = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

// Beğeni: tıkla → toggle et → buton metnini güncelle
async function voteAnswer(btn, type) {
    if (type !== 'like') return;

    const topicId = btn.getAttribute('data-topic-id');
    try {
        const res = await fetch(`/topics/${topicId}/like-toggle`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': CSRF,
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({}) // payload gerek yok
        });

        if (res.status === 401) {
            alert('Beğenmek için lütfen giriş yapın.');
            return;
        }

        const data = await res.json();
        // buton yazısını güncelle
        btn.textContent = `👍 ${data.likes_count} Pati`;

        // (isteğe bağlı) aktiflik stili
        if (data.liked) {
            btn.classList.add('active-like');
        } else {
            btn.classList.remove('active-like');
        }
    } catch (e) {
        console.error(e);
        alert('Bir hata oluştu. Lütfen tekrar deneyin.');
    }
}

// --- Şikayet Modal ---

let CURRENT_TOPIC_ID = null;

function openReportModal(topicId) {
    CURRENT_TOPIC_ID = topicId;
    document.getElementById('reportModal').style.display = 'block';
}

// modal kapat
function closeReportModal() {
    document.getElementById('reportModal').style.display = 'none';
    CURRENT_TOPIC_ID = null;
}

// şikayet gönder
async function submitReport() {
    const reason = document.getElementById('reportReason')?.value || '';
    const description = document.getElementById('reportDescription')?.value || '';

    if (!CURRENT_TOPIC_ID) return;

    try {
        const res = await fetch(`/topics/${CURRENT_TOPIC_ID}/report`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': CSRF,
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ reason, description })
        });

        const data = await res.json();
        if (data.ok) {
            alert(data.message || 'Şikayet alındı.');
            closeReportModal();
            // alanları temizle
            document.getElementById('reportReason').value = '';
            document.getElementById('reportDescription').value = '';
        } else {
            alert('Şikayet gönderilemedi.');
        }
    } catch (e) {
        console.error(e);
        alert('Bir hata oluştu. Lütfen tekrar deneyin.');
    }
}
</script>

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
</script>

</body>

</html>