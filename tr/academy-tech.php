<?php 
session_start();
$lang = $_SESSION['lang'] ?? 'tr';

$title = "CEKA Academy";

include 'Utils/header.php';
include 'Elements/navbar.php';
?>

<style>
  body { margin: 0; }
  nav { margin-bottom: 70px; }
  main { padding-top: 60px; }
  .accordion-item {
    border: 1px solid #ccc;
    margin-bottom: 12px;
    border-radius: 6px;
    background-color: #f1f4f8;
  }
  .accordion-item:first-of-type {
    margin-top: 40px;
  }
  .accordion-header {
    background: #dde2e8;
    padding: 15px 20px;
    cursor: pointer;
    font-weight: 600;
    border-radius: 6px 6px 0 0;
    user-select: none;
  }
  .accordion-content {
    padding: 20px;
    display: none;
    background: #ffffff;
    border-top: 1px solid #ccc;
    border-radius: 0 0 6px 6px;
  }

  /* --- Akordeon içindeki tablolar için net kenarlıklar --- */
  .accordion-content table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
  }
  .accordion-content th,
  .accordion-content td {
    border: 1px solid #cfd6e4;
    padding: 10px;
    vertical-align: top;
    text-align: left;
  }
  .accordion-content th {
    background: #dde2e8;
    font-weight: 600;
  }
  /* --- Bitti --- */
</style>

<main class="max-w-screen-xl mx-auto px-6 py-8">
  <h1 class="text-3xl font-bold mb-6">CEKA Academy</h1>

  <!-- YENİ: PP/PE Tank Tasarımı Yazı Dizisi (blog48t - blog57t) -->
  <div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion('accordionPPPE')">
      PP/PE Tank Tasarımı: Mühendislik Yazı Dizisi
    </div>
    <div id="accordionPPPE" class="accordion-content">
      <?php 
        $pppeArticles = [
          ['title' => '1. PP/PE Tank Tasarımında Olmazsa Olmaz 12 Kriter', 'file' => 'blog48t.php'],
          ['title' => '2. Konik Taban mı, Düz Taban mı? Doğru Seçim Rehberi', 'file' => 'blog49t.php'],
          ['title' => '3. Kimyasal Tanklarda Et Kalınlığı Seçimi', 'file' => 'blog50t.php'],
          ['title' => '4. PP ve PE Malzeme Karşılaştırması (Kimya – Gıda – Deniz Suyu)', 'file' => 'blog51t.php'],
          ['title' => '5. Endüstriyel Tanklarda Manhole ve Fittings Yerleşimi', 'file' => 'blog52t.php'],
          ['title' => '6. Tanklarda Statik/Dinamik Yük ve Şase Tasarımı', 'file' => 'blog53t.php'],
          ['title' => '7. PP/PE Kaynak Teknikleri ve Kalite Kontrol', 'file' => 'blog54t.php'],
          ['title' => '8. Isı Genleşmesi, UV Dayanımı ve Yaşlanma', 'file' => 'blog55t.php'],
          ['title' => '9. Büyük Hacimli Tanklarda Stabilite (10–100 Ton)', 'file' => 'blog56t.php'],
          ['title' => '10. Proses Entegrasyonu: Karıştırıcı, Sensör ve Pompa Bağlantıları', 'file' => 'blog57t.php'],
        ];

        foreach ($pppeArticles as $idx => $article) {
          echo "<div class='accordion-item' style='margin-bottom:10px;'>";
          echo "<div class='accordion-header' onclick=\"toggleSubAccordion('subaccordionPPPE$idx')\">";
          echo htmlspecialchars($article['title']);
          echo "</div>";
          echo "<div id='subaccordionPPPE$idx' class='accordion-content'>";
          include __DIR__ . "/academyfiles/" . $article['file'];
          echo "</div></div>";
        }
      ?>
    </div>
  </div>
  <!-- YENİ blok sonu -->

  <!-- Vakum Pompaları Kapalı Devre Soğutma -->
  <div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion('accordionVakum')">
      Vakum Pompalarında Kapalı Devre Soğutma Sistemlerinin Önemi
    </div>
    <div id="accordionVakum" class="accordion-content">
      <?php 
        $vakumArticles = [
          ['title' => '1. Açık Devre Soğutmanın Riskleri', 'file' => 'blog43t.php'],
          ['title' => '2. Kapalı Devre Soğutma Sisteminin Prensibi', 'file' => 'blog44t.php'],
          ['title' => '3. Vakum Pompalarında Uygulama Örnekleri', 'file' => 'blog45t.php'],
          ['title' => '4. Ekonomik ve Çevresel Kazanımlar', 'file' => 'blog46t.php'],
          ['title' => '5. CEKA’nın Çözüm Yaklaşımı', 'file' => 'blog47t.php'],
        ];

        foreach ($vakumArticles as $v => $article) {
          echo "<div class='accordion-item' style='margin-bottom:10px;'>";
          echo "<div class='accordion-header' onclick=\"toggleSubAccordion('subaccordionVakum$v')\">";
          echo htmlspecialchars($article['title']);
          echo "</div>";
          echo "<div id='subaccordionVakum$v' class='accordion-content'>";
          include __DIR__ . "/academyfiles/" . $article['file'];
          echo "</div></div>";
        }
      ?>
    </div>
  </div>
  <!-- Vakum blok sonu -->

  <!-- Enerji ve Yakıt -->
  <div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion('accordionEnerji')">
      Enerji ve Yakıt Sektöründe Plastik Tank Kullanımı
    </div>
    <div id="accordionEnerji" class="accordion-content">
      <?php 
        $enerjiArticles = [
          ['title' => 'Yakıt Depolamada Güvenlik: Plastik Tankların Sızdırmazlık ve Dayanıklılık Avantajları', 'file' => 'blog33t.php'],
          ['title' => 'Biyoyakıt ve Alternatif Enerjiler İçin Plastik Tankların Uygunluğu', 'file' => 'blog34t.php'],
          ['title' => 'Taşımada Hafiflik ve Verimlilik: Plastik Tankların Lojistikteki Katkıları', 'file' => 'blog35t.php'],
          ['title' => 'Enerji Tesislerinde Plastik Tankların Ekonomik ve Çevresel Avantajları', 'file' => 'blog36t.php'],
          ['title' => 'Metal Tanklara Karşı Plastik Tanklar: Enerji ve Yakıt Depolamada Stratejik Seçim', 'file' => 'blog37t.php'],
        ];

        foreach ($enerjiArticles as $idx => $article) {
          echo "<div class='accordion-item' style='margin-bottom:10px;'>";
          echo "<div class='accordion-header' onclick=\"toggleSubAccordion('subaccordionEnerji$idx')\">";
          echo htmlspecialchars($article['title']);
          echo "</div>";
          echo "<div id='subaccordionEnerji$idx' class='accordion-content'>";
          include __DIR__ . "/academyfiles/" . $article['file'];
          echo "</div></div>";
        }
      ?>
    </div>
  </div>

  <!-- Aktif Karbon -->
  <div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion('accordionAktifKarbon')">
      Aktif Karbon Hava Filtrelerinin Önemi
    </div>
    <div id="accordionAktifKarbon" class="accordion-content">
      <?php 
        $aktifKarbonArticles = [
          ['title' => '1. Aktif Karbon Hava Filtresi Nedir ve Nasıl Çalışır?', 'file' => 'blog28t.php'],
          ['title' => '2. Endüstriyel Uygulamalarda Aktif Karbon Hava Filtrelerinin Faydaları', 'file' => 'blog29t.php'],
          ['title' => '3. Aktif Karbon vs. Diğer Hava Filtrasyon Teknolojileri', 'file' => 'blog30t.php'],
          ['title' => '4. Doğru Aktif Karbon Filtresini Seçme Kriterleri', 'file' => 'blog31t.php'],
          ['title' => '5. Aktif Karbon Hava Filtrelerinde Bakım ve Ömür Yönetimi', 'file' => 'blog32t.php'],
        ];

        foreach ($aktifKarbonArticles as $idx => $article) {
          echo "<div class='accordion-item' style='margin-bottom:10px;'>";
          echo "<div class='accordion-header' onclick=\"toggleSubAccordion('subaccordionAktifKarbon$idx')\">";
          echo htmlspecialchars($article['title']);
          echo "</div>";
          echo "<div id='subaccordionAktifKarbon$idx' class='accordion-content'>";
          include __DIR__ . "/academyfiles/" . $article['file'];
          echo "</div></div>";
        }
      ?>
    </div>
  </div>

  <!-- UV Cihazları -->
  <div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion('accordionUV')">
      Su Filtrasyonunda Ultraviyole (UV) Cihazlarının Önemi
    </div>
    <div id="accordionUV" class="accordion-content">
      <?php 
        $uvArticles = [
          ['title' => '1. UV Teknolojisine Giriş: Su Filtrasyonunda Temel Prensipler', 'file' => 'blog38t.php'],
          ['title' => '2. Endüstriyel Tesislerde UV Cihazlarının Sağladığı Hijyen Avantajları', 'file' => 'blog39t.php'],
          ['title' => '3. UV Cihazlarının Enerji Verimliliği ve İşletme Maliyetleri', 'file' => 'blog40t.php'],
          ['title' => '4. Plastik Tank ve UV Cihazı Entegrasyonu: Dayanıklılık ve Güvenlik', 'file' => 'blog41t.php'],
          ['title' => '5. Geleceğin Su Arıtma Çözümleri: UV Teknolojisinin Sürdürülebilirlik Katkısı', 'file' => 'blog42t.php'],
        ];

        foreach ($uvArticles as $k => $article) {
          echo "<div class='accordion-item' style='margin-bottom:10px;'>";
          echo "<div class='accordion-header' onclick=\"toggleSubAccordion('subaccordionUV$k')\">";
          echo htmlspecialchars($article['title']);
          echo "</div>";
          echo "<div id='subaccordionUV$k' class='accordion-content'>";
          include __DIR__ . "/academyfiles/" . $article['file'];
          echo "</div></div>";
        }
      ?>
    </div>
  </div>

  <!-- Kimya Endüstrisi -->
  <div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion('accordionKimya')">
      Kimya Endüstrisinde Plastik Tankların Stratejik Kullanımı
    </div>
    <div id="accordionKimya" class="accordion-content">
      <?php 
        $kimyaArticles = [
          ['title' => 'Kimyasal Ortamlarda Korozyon Direnci: Plastik Tankların Metalden Üstünlüğü', 'file' => 'blog23t.php'],
          ['title' => 'Zorlayıcı Koşullarda Maliyet Etkinliği: Plastik Tankların Toplam Yaşam Döngüsü Avantajı', 'file' => 'blog24t.php'],
          ['title' => 'Asit ve Bazlarla Uyum: Doğru Polimer Seçimi Nasıl Yapılır?', 'file' => 'blog25t.php'],
          ['title' => 'Prosese Özel Üretim: Reaktör, Karıştırıcı ve Tampon Tanklarda Plastik Kullanımı', 'file' => 'blog26t.php'],
          ['title' => 'Çevresel Güvenlik ve Mevzuat Uyumu: Plastik Tanklarla Yasal Standartları Karşılamak', 'file' => 'blog27t.php'],
        ];

        foreach ($kimyaArticles as $index => $article) {
          echo "<div class='accordion-item' style='margin-bottom:10px;'>";
          echo "<div class='accordion-header' onclick=\"toggleSubAccordion('subaccordionKimya$index')\">";
          echo htmlspecialchars($article['title']);
          echo "</div>";
          echo "<div id='subaccordionKimya$index' class='accordion-content'>";
          include __DIR__ . "/academyfiles/" . $article['file'];
          echo "</div></div>";
        }
      ?>
    </div>
  </div>

  <!-- Kaplama ve Kimyasal Proses -->
  <div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion('accordion0')">
      Kaplama ve Kimyasal Proses Tesislerinde Plastik Tank Kullanımının Avantajları
    </div>
    <div id="accordion0" class="accordion-content">
      <?php 
        $kaplamaArticles = [
          ['title' => 'Kimyasal Dayanım ve Malzeme Uyumu', 'file' => 'blog18t.php'],
          ['title' => 'Maliyet Etkinliği ve Ekonomik Seçim', 'file' => 'blog19t.php'],
          ['title' => 'Temizlik Kolaylığı ve Renk Geçişi', 'file' => 'blog20t.php'],
          ['title' => 'Çevre Dostu Üretim ve Geri Dönüşüm', 'file' => 'blog21t.php'],
          ['title' => 'Uzun Ömürlü ve Bakım Gerektirmeyen Kullanım', 'file' => 'blog22t.php'],
        ];

        foreach ($kaplamaArticles as $index => $article) {
          echo "<div class='accordion-item' style='margin-bottom:10px;'>";
          echo "<div class='accordion-header' onclick=\"toggleSubAccordion('subaccordionKaplama$index')\">";
          echo htmlspecialchars($article['title']);
          echo "</div>";
          echo "<div id='subaccordionKaplama$index' class='accordion-content'>";
          include __DIR__ . "/academyfiles/" . $article['file'];
          echo "</div></div>";
        }
      ?>
    </div>
  </div>

  <!-- Boya Sektörü -->
  <div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion('accordion1')">
      Boya Sektöründe Neden Plastik Tank Kullanmalıyız?
    </div>
    <div id="accordion1" class="accordion-content">
      <?php 
        $paintArticles = [
          ['title' => 'Kimyasal Dayanım ve Malzeme Uyumu', 'file' => 'blog13t.php'],
          ['title' => 'Maliyet Etkinliği ve Ekonomik Seçim', 'file' => 'blog14t.php'],
          ['title' => 'Temizlik Kolaylığı ve Renk Geçişi', 'file' => 'blog15t.php'],
          ['title' => 'Çevre Dostu Üretim ve Geri Dönüşüm', 'file' => 'blog16t.php'],
          ['title' => 'Uzun Ömürlü ve Bakım Gerektirmeyen Kullanım', 'file' => 'blog17t.php'],
        ];

        foreach ($paintArticles as $index => $article) {
          echo "<div class='accordion-item' style='margin-bottom:10px;'>";
          echo "<div class='accordion-header' onclick=\"toggleSubAccordion('subaccordionPaint$index')\">";
          echo htmlspecialchars($article['title']);
          echo "</div>";
          echo "<div id='subaccordionPaint$index' class='accordion-content'>";
          include __DIR__ . "/academyfiles/" . $article['file'];
          echo "</div></div>";
        }
      ?>
    </div>
  </div>

  <!-- RAS -->
  <div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion('accordion2')">
      Modern Akuakültürde RAS Sistemleri
    </div>
    <div id="accordion2" class="accordion-content">
      <?php 
        $blogArticles = [
          ['title' => 'RAS Sistemlerine Giriş', 'file' => 'blog1t.php'],
          ['title' => 'Modern Akuakültürde RAS Avantajları', 'file' => 'blog2t.php'],
          ['title' => 'Etkili Filtrasyon Sistemlerinin Tasarımı', 'file' => 'blog3t.php'],
          ['title' => 'Akuakültürde Su Kalitesinin Önemi', 'file' => 'blog4t.php'],
          ['title' => 'Sürdürülebilir Akuakültür Uygulamaları', 'file' => 'blog5t.php'],
          ['title' => 'Geri Döngülü Akuakültürde Gelecek Trendler', 'file' => 'blog6t.php'],
        ];

        foreach ($blogArticles as $i => $article) {
          echo "<div class='accordion-item' style='margin-bottom:10px;'>";
          echo "<div class='accordion-header' onclick=\"toggleSubAccordion('subaccordionRAS$i')\">";
          echo htmlspecialchars($article['title']);
          echo "</div>";
          echo "<div id='subaccordionRAS$i' class='accordion-content'>";
          include __DIR__ . "/academyfiles/" . $article['file'];
          echo "</div></div>";
        }
      ?>
    </div>
  </div>

  <!-- Plastik & Çelik Tanklar -->
  <div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion('accordion3')">
      Plastik ve Çelik Tanklar: Neden Plastik Tercih Edilmeli?
    </div>
    <div id="accordion3" class="accordion-content">
      <?php 
        $plastikArticles = [
          ['title' => 'Akuakültür Sistemlerinde Plastik Tankların Mekanik Avantajları', 'file' => 'blog7t.php'],
          ['title' => 'Plastik ve Çelik Tankların Maliyet Etkinliği', 'file' => 'blog8t.php'],
          ['title' => 'Dayanıklılık ve Bakım Karşılaştırması', 'file' => 'blog9t.php'],
          ['title' => 'Özelleştirilmiş Plastik Tanklar: Akuakültür için Tasarım Esnekliği', 'file' => 'blog10t.php'],
          ['title' => 'Çevresel Etki: Plastik Tankların Geri Dönüşümü ve Sürdürülebilirliği', 'file' => 'blog11t.php'],
          ['title' => 'Hijyenik Tasarım: Plastik Tanklarda Biyofilm Önleme', 'file' => 'blog12t.php'],
        ];

        foreach ($plastikArticles as $j => $article) {
          echo "<div class='accordion-item' style='margin-bottom:10px;'>";
          echo "<div class='accordion-header' onclick=\"toggleSubAccordion('subaccordionPlastik$j')\">";
          echo htmlspecialchars($article['title']);
          echo "</div>";
          echo "<div id='subaccordionPlastik$j' class='accordion-content'>";
          include __DIR__ . "/academyfiles/" . $article['file'];
          echo "</div></div>";
        }
      ?>
    </div>
  </div>

</main>

<script>
function toggleAccordion(id) {
  const el = document.getElementById(id);
  if (!el) return;

  const isOpen = (el.style.display === 'block');

  // önce tüm ana akordeon içeriklerini kapat
  document.querySelectorAll('main > .accordion-item > .accordion-content').forEach(acc => {
    acc.style.display = 'none';
  });

  // tüm alt akordeonları kapat
  document.querySelectorAll('.accordion-content .accordion-content').forEach(sub => {
    sub.style.display = 'none';
  });

  // tıklanan zaten açıksa -> kapalı bırak
  // kapalıysa -> sadece onu aç
  if (!isOpen) {
    el.style.display = 'block';
  }
}

function toggleSubAccordion(id) {
  // Aynı grup içindeki diğer alt akordeonları kapat
  document.querySelectorAll('.accordion-content .accordion-content').forEach(sub => {
    if (sub.id !== id) sub.style.display = 'none';
  });

  // Tıklananı aç/kapat
  const el = document.getElementById(id);
  if (!el) return;
  el.style.display = (el.style.display === 'block') ? 'none' : 'block';
}
</script>

<?php include 'Elements/footer.php'; ?>
