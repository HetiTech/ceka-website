<?php 
$title = "CEKA Akademi | Teknik Bilgi Merkezi ve Ürün Rehberleri";
$navbarmargin = false;
?>
<?php include('Utils/header.php'); ?>
<?php include('Elements/navbar.php'); ?>

<div class="pt-32"></div>

<section class="bg-white min-h-screen pb-16">
  <div class="max-w-screen-xl mx-auto px-4">
    
    <!-- Başlık ve açıklama -->
    <header class="text-center mb-12">
      <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">
        CEKA Akademi
      </h1>
      <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
        CEKA Akademi, filtrasyon sistemleri, endüstriyel tank tasarımı ve proses mühendisliği 
        konularında teknik bilgi sunmak amacıyla oluşturulmuş bir bilgi merkezidir. 
        Amacımız; mühendisler, proje firmaları, tesis işletmecileri ve karar vericiler için 
        pratik, anlaşılır ve gerçek saha tecrübesine dayanan içerikler üretmektir.
      </p>
    </header>

    <!-- 2'li grid kart alanı -->
    <div class="grid gap-8 md:grid-cols-2">

      <!-- Kart 1: Teknik Bilgi Merkezi -->
      <a href="/academy-tech.php" 
         class="group block bg-gray-50 hover:bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 p-6 md:p-8 h-full">
        <div class="flex flex-col h-full">
          
          <div class="mb-6">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 mb-3">
              Teknik Yazılar & Analizler
            </span>
            <h2 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-blue-700 transition-colors">
              Teknik Bilgi Merkezi
            </h2>
            <p class="text-gray-600 text-sm md:text-base leading-relaxed">
              Drum filtreler, kompakt filtreler, protein skimmerlar, PP/PE tank tasarımı, 
              RAS sistemleri, proses hesapları ve daha fazlası… 
              Gerçek projelerden ve üretim tecrübemizden süzülmüş teknik içerikler.
            </p>
          </div>

          <ul class="text-gray-500 text-sm space-y-2 mb-6">
            <li>• Filtrasyon ve proses mühendisliği hakkında makaleler</li>
            <li>• Tasarım prensipleri ve hesap örnekleri</li>
            <li>• RAS, gemi inşa ve endüstriyel uygulamalar</li>
          </ul>

          <div class="mt-auto flex items-center text-blue-700 font-semibold text-sm">
            Daha fazla bilgi edin
            <span class="ml-1 transform group-hover:translate-x-1 transition-transform">
              →
            </span>
          </div>

        </div>
      </a>

      <!-- Kart 2: Ürünleri Tanıyalım -->
      <a href="/academy-products.php" 
         class="group block bg-gray-50 hover:bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 p-6 md:p-8 h-full">
        <div class="flex flex-col h-full">
          
          <div class="mb-6">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 mb-3">
              Ürün Rehberleri
            </span>
            <h2 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-emerald-700 transition-colors">
              Ürünleri Tanıyalım – Teknik Rehberler
            </h2>
            <p class="text-gray-600 text-sm md:text-base leading-relaxed">
              Tambur filtre, kompakt filtre, protein skimmer, radial flow settler, 
              PP/PE tanklar, aktif karbon filtreler, UV sistemleri ve diğer çözümlerimizi 
              teknik açıdan tanıyın. Çalışma prensipleri, seçim kriterleri ve kullanım 
              alanlarını detaylıca inceleyin.
            </p>
          </div>

          <ul class="text-gray-500 text-sm space-y-2 mb-6">
            <li>• Ürünlerin teknik olarak nasıl çalıştığını öğrenin</li>
            <li>• Doğru kapasite ve model seçimi için ipuçları</li>
            <li>• Uygulama örnekleri ve kullanım senaryoları</li>
          </ul>

          <div class="mt-auto flex items-center text-emerald-700 font-semibold text-sm">
            Ürün rehberlerini incele
            <span class="ml-1 transform group-hover:translate-x-1 transition-transform">
              →
            </span>
          </div>

        </div>
      </a>

    </div>
  </div>
</section>

<?php include('Elements/footer.php'); ?>
