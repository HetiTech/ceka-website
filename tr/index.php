<?php 
$title = "CEKA Endüstriyel | Polietilen, Polipropilen, Paslanmaz Tank ve Filtrasyon Sistemleri Üreticisi";
$navbarmargin = false; 
?>
<?php include ('Utils/header.php') ?>
<?php include ('Elements/navbar.php') ?>

<div class="pt-32"></div>

<!-- ✅ 2’li Slider Görsel Alanı (class tabanlı geçiş + manuel oklar) -->
<style>
  #dual-slider .slide-group { 
    opacity: 0; 
    z-index: 0; 
    transition: opacity 1s ease; 
  }
  #dual-slider .slide-group.active { 
    opacity: 1; 
    z-index: 1; 
  }

  /* Manuel geçiş butonları – CEKA mavisi */
  .slider-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 20;
    background: #1d4ed8;          /* CEKA mavisi */
    color: #fff;
    border: none;
    padding: 0.6rem 0.9rem;
    font-size: 1.35rem;
    line-height: 1;
    border-radius: 0.5rem;
    cursor: pointer;
    box-shadow: 0 6px 18px rgba(0,0,0,.18);
    transition: background .2s ease, transform .1s ease;
  }
  .slider-btn:hover { background: #1e40af; } /* koyu CEKA mavisi */
  .slider-btn:active { transform: translateY(-50%) scale(0.98); }
  .slider-btn.prev { left: 12px; }
  .slider-btn.next { right: 12px; }
</style>

<div class="w-full relative h-[500px] overflow-hidden pointer-events-auto">
  <div class="absolute z-[5] w-full h-full flex items-center justify-center">
    <div class="w-full max-w-screen-xl overflow-hidden rounded-xl shadow-md h-full relative">
      <div id="dual-slider" class="w-full h-full flex">

        <!-- ✅ 1. Slide Grubu -->
        <div class="slide-group active w-full h-full flex absolute top-0 left-0">
          <img src="/mainimage/mainimage001a.png" class="w-1/2 h-full object-cover" alt="CEKA Endüstriyel ürün görseli" loading="eager" decoding="async" />
          <img src="/mainimage/mainimage002a.png" class="w-1/2 h-full object-cover" alt="CEKA Endüstriyel ürün görseli" loading="eager" decoding="async" />
        </div>

        <!-- ✅ 2. Slide Grubu -->
        <div class="slide-group w-full h-full flex absolute top-0 left-0">
          <img src="/mainimage/mainimage003a.png" class="w-1/2 h-full object-cover" alt="CEKA Endüstriyel ürün görseli" loading="lazy" decoding="async" />
          <img src="/mainimage/mainimage004a.png" class="w-1/2 h-full object-cover" alt="CEKA Endüstriyel ürün görseli" loading="lazy" decoding="async" />
        </div>

        <!-- ✅ 3. Slide Grubu (5–6 + yeni fotoğraf, boşluksuz ve hizalı) -->
        <div class="slide-group w-full h-full flex absolute top-0 left-0 overflow-hidden">
          <img src="/mainimage/mainimage005a.png"
               class="w-1/3 h-full object-cover"
               alt="CEKA Endüstriyel ürün görseli" loading="lazy" decoding="async" />
          <img src="/mainimage/mainimage006a.png"
               class="w-1/3 h-full object-cover"
               alt="CEKA Endüstriyel ürün görseli" loading="lazy" decoding="async" />
          <img src="/mainimage/mainimage011a.png"
               class="w-1/3 h-full object-cover"
               alt="CEKA Endüstriyel ürün görseli" loading="lazy" decoding="async" />
        </div>

        <!-- ✅ 4. Slide Grubu -->
        <div class="slide-group w-full h-full flex absolute top-0 left-0">
          <img src="/mainimage/mainimage007a.png" class="w-1/2 h-full object-cover" alt="CEKA Endüstriyel ürün görseli" loading="lazy" decoding="async" />
          <img src="/mainimage/mainimage008a.png" class="w-1/2 h-full object-cover" alt="CEKA Endüstriyel ürün görseli" loading="lazy" decoding="async" />
        </div>

        <!-- ✅ 5. Slide Grubu -->
        <div class="slide-group w-full h-full flex absolute top-0 left-0">
          <img src="/mainimage/mainimage009a.png" class="w-1/2 h-full object-cover" alt="CEKA Endüstriyel ürün görseli" loading="lazy" decoding="async" />
          <img src="/mainimage/mainimage010a.png" class="w-1/2 h-full object-cover" alt="CEKA Endüstriyel ürün görseli" loading="lazy" decoding="async" />
        </div>

      </div>

      <!-- ✅ Manuel Geçiş Butonları -->
      <button class="slider-btn prev" aria-label="Önceki">&#10094;</button>
      <button class="slider-btn next" aria-label="Sonraki">&#10095;</button>
    </div>
  </div>
</div>

<script>
  // ✅ Class tabanlı otomatik + manuel kontrol
  (function () {
    const groups = Array.from(document.querySelectorAll("#dual-slider .slide-group"));
    const prevBtn = document.querySelector(".slider-btn.prev");
    const nextBtn = document.querySelector(".slider-btn.next");
    if (!groups.length) return;

    let i = 0;
    let timer;

    function setActive(idx) {
      groups.forEach((g, k) => g.classList.toggle('active', k === idx));
    }
    function nextSlide() {
      i = (i + 1) % groups.length;
      setActive(i);
    }
    function prevSlide() {
      i = (i - 1 + groups.length) % groups.length;
      setActive(i);
    }
    function resetTimer() {
      clearInterval(timer);
      timer = setInterval(nextSlide, 6000);
    }

    nextBtn.addEventListener("click", () => { nextSlide(); resetTimer(); });
    prevBtn.addEventListener("click", () => { prevSlide(); resetTimer(); });

    setActive(i);
    timer = setInterval(nextSlide, 6000);
  })();
</script>

<!-- ✅ SEO Uyumlu Tanıtım Alanı -->
<section class="py-14 px-6 bg-white text-gray-900 font-sans">
  <div class="max-w-screen-xl mx-auto text-center">
    <h1 class="text-3xl sm:text-4xl font-extrabold mb-4 tracking-tight">
      <strong>Özel Tank</strong> ve <strong>Filtrasyon Sistemleri</strong>
    </h1>

    <p class="text-lg sm:text-xl leading-relaxed max-w-3xl mx-auto mb-6">
      <strong>CEKA</strong>, 
      <a href="/tank-pe.php" class="font-semibold text-blue-700 hover:underline">polietilen tank</a>, 
      <a href="/tank-pp.php" class="font-semibold text-blue-700 hover:underline">polipropilen tank</a>, 
      <strong>paslanmaz çelik</strong> ve <strong>alüminyum</strong> malzemelerden <strong>endüstriyel tanklar</strong>, hava ve su <strong>filtrasyon üniteleri</strong> tasarlayıp üretme konusunda uzmanlaşmıştır. 
      <strong>Gemi İnşa</strong>, <strong>Akuakültür</strong>, <strong>Kimyasal Proses</strong>, <strong>Denizcilik</strong> ve <strong>Mekanik Endüstriler</strong> için tasarlanan çözümlerimiz; 
      <strong>dozaj tankları</strong>, <strong>kompakt filtreler</strong>, <strong>protein skimmer</strong>’lar ve uzun ömürlü, modüler sistemleri kapsamaktadır.
    </p>

    <p class="text-lg sm:text-xl leading-relaxed max-w-3xl mx-auto mb-4">
      Ayrıca <strong>CEKA</strong>, <strong>Ecowac</strong> markasının Türkiye yetkili satış noktası olarak; <strong>sıvı halkalı</strong>, 
      <strong>yağlı paletli</strong>, <strong>kuru vidalı</strong> ve <strong>booster tipi vakum pompaları</strong> ile <strong>endüstriyel vakum sistemleri</strong> de sunmaktadır. 
      <strong>Yüksek verimlilik</strong> ve <strong>uzun ömürlü performans</strong> sağlayan Ecowac çözümleri, <strong>zorlu proses koşulları</strong> için özel olarak geliştirilmiştir.
    </p>

    <p class="text-sm text-gray-600 max-w-3xl mx-auto mb-6">
      Kimyasal depolama ve proses uygulamalarınız için 
      <a href="/tank-pe.php" class="text-blue-700 hover:underline">polietilen tank çözümlerimiz</a> 
      ve 
      <a href="/tank-pp.php" class="text-blue-700 hover:underline">polipropilen tank imalatımız</a> 
      hakkında detaylı bilgiye ilgili sayfalarımızdan ulaşabilirsiniz.
    </p>

    <div class="flex flex-col sm:flex-row gap-4 justify-center mt-6">
      <a href="/Files/CekaProductCatalogue.pdf" download class="px-6 py-3 text-white bg-blue-700 hover:bg-blue-800 rounded-lg text-lg font-medium transition">
        Kataloğu İndirin
      </a>
      <a href="/Files/CEKA Endüstriyel.pdf" download class="px-6 py-3 text-white bg-blue-700 hover:bg-blue-800 rounded-lg text-lg font-medium transition">
        Tanıtım Broşürünü İndir
      </a>
    </div>
  </div>
</section>

<!-- ✅ JSON-LD: Organization + WebSite + LocalBusiness -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://cekaendustriyel.com/#organization",
      "name": "CEKA Endüstriyel",
      "legalName": "CEKA Endüstriyel M\u00fchendislik Demir \u00c7elik Plastik \u0130th. \u0130hr. San. ve Tic. Ltd. \u015e ti.",
      "url": "https://cekaendustriyel.com",
      "logo": "https://cekaendustriyel.com/Files/CEKA.jpg",
      "description": "CEKA End\u00fcstriyel; polietilen (PE), polipropilen (PP), paslanmaz \u00e7elik tanklar ve end\u00fcstriyel hava/su filtrasyon sistemleri tasarlayan ve \u00fcreten bir m\u00fchendislik firmalar\u0131d\u0131r. Kimya, gemi in\u015fa, akuak\u00fclt\u00fcr ve end\u00fcstriyel proses uygulamalar\u0131 i\u00e7in \u00f6zel tank ve filtrasyon \u00e7\u00f6z\u00fcmleri sunar.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Deri OSB Asort Sokak No:2/207",
        "addressLocality": "Tuzla",
        "addressRegion": "İstanbul",
        "postalCode": "34956",
        "addressCountry": "TR"
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://cekaendustriyel.com/#website",
      "url": "https://cekaendustriyel.com",
      "name": "CEKA End\u00fcstriyel Resmi Web Sitesi",
      "publisher": {
        "@id": "https://cekaendustriyel.com/#organization"
      },
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://cekaendustriyel.com/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "LocalBusiness",
      "@id": "https://cekaendustriyel.com/#localbusiness",
      "name": "CEKA End\u00fcstriyel",
      "url": "https://cekaendustriyel.com",
      "image": "https://cekaendustriyel.com/Files/CEKA.jpg",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Deri OSB Asort Sokak No:2/207",
        "addressLocality": "Tuzla",
        "addressRegion": "İstanbul",
        "postalCode": "34956",
        "addressCountry": "TR"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 40.855,
        "longitude": 29.300
      },
      "areaServed": {
        "@type": "Country",
        "name": "Türkiye"
      },
      "description": "End\u00fcstriyel tank, filtrasyon sistemleri ve Ecowac vakum pompalar\u0131 i\u00e7in proje, tasar\u0131m, imalat ve saha montaj hizmetleri."
    }
  ]
}
</script>

<?php include ('Elements/footer.php') ?>
<?php include ('Utils/body.php') ?>
