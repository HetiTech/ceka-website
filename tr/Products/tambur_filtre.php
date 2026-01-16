<?php
// products/tambur_filtre.php
?>

<article class="bg-gray-50 border border-gray-200 rounded-2xl shadow-sm p-6 md:p-8 mb-6">
  <div class="grid md:grid-cols-2 gap-8 items-start">
    
    <!-- Görsel -->
    <div class="w-full">
      <div class="relative overflow-hidden rounded-2xl shadow-md bg-white">
        <!-- Ana ekranda kullandığın render -->
        <img 
          src="/mainimage/mainimage001a.png" 
          alt="Tambur Filtre (Drum Filter)" 
          class="w-full h-64 md:h-80 object-cover"
        >
      </div>
      <p class="text-xs text-gray-400 mt-2">
        *CEKA tambur filtre renderı temsili olarak gösterilmiştir. Ölçüler model ve kapasiteye göre değişebilir.*
      </p>
    </div>

    <!-- Metin içerik -->
    <div class="space-y-6">
      
      <!-- Ürün başlığı -->
      <header>
        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 mb-3">
          Katı – Sıvı Ayırma / Mekanik Filtrasyon
        </span>
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">
          Tambur Filtre (Drum Filter)
        </h2>
        <p class="text-sm uppercase tracking-wide text-gray-500">
          RAS sistemleri, balık yetiştiriciliği ve endüstriyel prosesler için otomatik yüzey filtrasyonu
        </p>
      </header>

      <!-- Nedir / Ne İşe Yarar -->
      <section class="space-y-2">
        <h3 class="text-lg font-semibold text-gray-800">
          Tambur filtre nedir, ne işe yarar?
        </h3>
        <p class="text-gray-600 text-sm md:text-base leading-relaxed">
          Tambur filtre; su içerisindeki askıda katı maddeleri (yem artıkları, balık dışkısı, 
          lifli atıklar vb.) otomatik olarak süzen, sürekli çalışma prensibine sahip bir 
          <strong>mekanik filtrasyon ekipmanıdır</strong>. Özellikle RAS balık yetiştiriciliği 
          sistemlerinde, deniz suyu ve tatlı su hatlarında, proses sularının geri kazanımında 
          ve endüstriyel atıksu ön arıtımında yaygın olarak kullanılır.
        </p>
      </section>

      <!-- Nasıl çalışır -->
      <section class="space-y-2">
        <h3 class="text-lg font-semibold text-gray-800">
          Nasıl çalışır?
        </h3>
        <p class="text-gray-600 text-sm md:text-base leading-relaxed">
          Su, tamburun iç kısmına veya dış kısmına yönlendirilerek <strong>mikron bez ile kaplı</strong> 
          yüzeyden geçirilir. Akış yönüne göre su, bez yüzeyini geçerken katı partiküller bez üzerinde tutulur. 
          Belirli bir tıkanma seviyesine ulaşıldığında, sistem üzerindeki seviye/kaçak veya 
          diferansiyel seviye sensörü devreye girer:
        </p>
        <ul class="list-disc list-inside text-gray-600 text-sm md:text-base space-y-1">
          <li>Tambur motoru devreye girer ve tambur yavaşça dönmeye başlar.</li>
          <li>Üst kısımda konumlanmış sprey nozüller ile bez yüzeyi ters yıkama yapılır.</li>
          <li>Temizleme suyu ile koparılan partiküller, atık oluk veya atık haznesine taşınır.</li>
          <li>Temizlenen bölge tekrar filtrasyona devam eder ve süreç otomatik olarak sürer.</li>
        </ul>
      </section>

      <!-- Avantajlar -->
      <section class="space-y-2">
        <h3 class="text-lg font-semibold text-emerald-700">
          Başlıca avantajları
        </h3>
        <ul class="list-disc list-inside text-gray-600 text-sm md:text-base space-y-1">
          <li><strong>Sürekli çalışma:</strong> Çevrim kesilmeksizin otomatik olarak kendini temizler.</li>
          <li><strong>Düşük işletme maliyeti:</strong> Sadece motor ve yıkama pompası tüketimi vardır.</li>
          <li><strong>Yüksek su kalitesi:</strong> Uygun mikron seçimi ile ince askıda katılar tutulur (ör. 50–100 µm).</li>
          <li><strong>Otomasyon uyumu:</strong> Seviye sensörleri, PLC, uzaktan izleme altyapısına uyumlu çalışabilir.</li>
          <li><strong>Modüler yapı:</strong> Debi ve yük durumuna göre tambur çapı ve boyu kolayca ölçeklenebilir.</li>
        </ul>
      </section>

      <!-- Dikkat edilmesi gerekenler -->
      <section class="space-y-2">
        <h3 class="text-lg font-semibold text-amber-700">
          Dikkat edilmesi gereken noktalar
        </h3>
        <ul class="list-disc list-inside text-gray-600 text-sm md:text-base space-y-1">
          <li><strong>Ön ızgara / kaba süzme:</strong> Lifli, büyük parçalı atıklar için ön ızgara gerekebilir.</li>
          <li><strong>Mikron seçimi:</strong> Gereğinden düşük mikron seçimi debi kaybına ve sık yıkamaya sebep olabilir.</li>
          <li><strong>Yıkama suyu hattı:</strong> Yüksek basınçlı yıkama için ayrı bir temiz su hattı veya pompa gerekebilir.</li>
          <li><strong>Kurulum kotu:</strong> Hidrolik kayıplar için giriş–çıkış kot farkının doğru ayarlanması önemlidir.</li>
        </ul>
      </section>

    </div>
  </div>

  <!-- 🔧 Tambur Filtre Seçim Aracı -->
  <section class="mt-10 bg-white border border-blue-100 rounded-2xl p-6 md:p-8">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-3">
      Tambur Filtre Ön Boyutlandırma Aracı
    </h3>
    <p class="text-sm md:text-base text-gray-600 mb-6">
      Aşağıya sistem debisini ve kullanılmak istenen filtre bezi mikron değerini girerek 
      <strong>önerilen tambur çapı ve tambur boyu</strong> için hızlı bir ön boyutlandırma yapabilirsiniz. 
      Hesaplama aracının çıktıları, projelendirme öncesi ilk seçim içindir; 
      kesin tasarım için lütfen bizimle iletişime geçin.
    </p>

    <!-- Form -->
    <div class="grid md:grid-cols-3 gap-6 items-end">
      <!-- Debi -->
      <div>
        <label for="flowRate" class="block text-sm font-medium text-gray-700 mb-1">
          Sistem debisi (m³/h)
        </label>
        <input 
          type="number" 
          id="flowRate" 
          class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm px-3 py-2"
          placeholder="Örn: 200"
          min="1"
          step="1"
        >
      </div>

      <!-- Mikron -->
      <div>
        <label for="micronSelect" class="block text-sm font-medium text-gray-700 mb-1">
          Filtre bezi mikronu (µm)
        </label>
        <select 
          id="micronSelect" 
          class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm px-3 py-2"
        >
          <option value="250">250 µm</option>
          <option value="100">100 µm</option>
          <option value="50">50 µm</option>
          <option value="30">30 µm</option>
        </select>
      </div>

      <!-- Button -->
      <div>
        <button 
          type="button"
          onclick="calculateDrumSize()"
          class="w-full inline-flex justify-center items-center px-4 py-2.5 border border-transparent text-sm font-semibold rounded-lg shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-500 transition-colors"
        >
          Tambur boyutunu hesapla
        </button>
      </div>
    </div>

    <!-- Sonuç alanı -->
    <div id="drumResult" class="mt-6 hidden">
      <div class="rounded-xl border border-gray-200 bg-gray-50 px-4 py-4 md:px-6 md:py-5 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
          <p class="text-xs font-semibold uppercase text-gray-500 mb-1">
            ÖNERİLEN TAMBUR ÖLÇÜLERİ (ÖN BOYUTLANDIRMA)
          </p>
          <p id="drumSizeText" class="text-base md:text-lg font-semibold text-gray-800">
            <!-- JS ile doldurulacak -->
          </p>
          <p id="drumCapacityText" class="text-xs md:text-sm text-gray-500 mt-1">
            <!-- JS ile doldurulacak -->
          </p>
        </div>
        <div class="text-xs text-gray-500 md:text-right">
          Bu araç, tipik tambur filtre uygulamaları için varsayımsal bir hesaplama yapar. 
          Proje, katı yükü ve proses koşulları değiştikçe tasarım revize edilebilir.
        </div>
      </div>
    </div>

    <!-- Hata / Uyarı -->
    <div id="drumError" class="mt-4 text-sm text-red-600 hidden"></div>
  </section>
</article>
