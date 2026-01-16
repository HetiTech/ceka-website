<div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

  <!-- Sol Kısım: Ürün Görselleri -->
  <div class="space-y-4">
    <img 
      src="/mainimage/mainimage009a.png" 
      alt="Aktif Karbon Koku Filtresi Görsel 1"
      class="w-full rounded-xl shadow-md object-cover"
    >

    <img 
      src="/mainimage/mainimage010a.png" 
      alt="Aktif Karbon Koku Filtresi Görsel 2"
      class="w-full rounded-xl shadow-md object-cover"
    >
  </div>

  <!-- Sağ Kısım: Ürün Bilgileri -->
  <div>

    <!-- Üst kategori şeridi -->
    <p class="text-xs font-semibold uppercase tracking-wide text-green-700 mb-1">
      Gaz – Sıvı Ayırma / Koku Giderimi
    </p>

    <h2 class="text-2xl font-bold text-gray-800 mb-4">
      Aktif Karbon Koku Filtresi
    </h2>

    <!-- Ürün Açıklaması -->
    <p class="text-gray-700 leading-relaxed mb-6">
      Aktif karbon koku filtreleri; atıksu arıtma tesisleri, kimyasal proses 
      tankları, gıda ve endüstriyel üretim ortamları gibi alanlarda gaz fazındaki 
      <strong>H₂S, VOC, organik buharlar ve kötü kokuların</strong> tutulması için kullanılan 
      adsorpsiyon sistemleridir.
    </p>

    <!-- Tasarım Özellikleri -->
    <h3 class="text-lg font-semibold text-gray-800 mb-2">Teknik Tasarım Özellikleri</h3>
    <ul class="list-disc pl-6 space-y-2 text-gray-700 mb-6">
      <li>Malzeme: PP / PE (kimyasal dayanımlı gövde ve bağlantılar)</li>
      <li>Karbon yatağı yüksekliği: 300–1000 mm (proje gereksinimine göre)</li>
      <li>Dolgu: Granül aktif karbon (4–8 mm pellet veya eşdeğer)</li>
      <li>Hava giriş/çıkış PN10 flanş veya hortum adaptörü ile bağlantı</li>
      <li>Kolay bakım için üst kapak / gövde sökülebilir tasarım</li>
      <li>Drenaj ve kondens tahliye hattı ile su birikmesini önleme</li>
    </ul>

    <!-- Kullanım Alanları -->
    <h3 class="text-lg font-semibold text-gray-800 mb-2">Kullanım Alanları</h3>
    <ul class="list-disc pl-6 space-y-2 text-gray-700 mb-6">
      <li>Atıksu arıtma tesisleri (havalandırma ve dengeleme tankları)</li>
      <li>Kimyasal ve proses tanklarının gaz fazı</li>
      <li>Gıda üretim tesislerinde proses tankları ve depolar</li>
      <li>Depolama tankları (yakıt, yağ, kimyasal)</li>
      <li>Pompa istasyonları ve kapalı koku kaynakları</li>
    </ul>

    <!-- Hızlı Hesaplama -->
    <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 mt-6">
      <h4 class="font-bold text-gray-800 mb-3">Hızlı Boyutlandırma</h4>

      <p class="text-gray-600 text-sm mb-3">
        Ortalama hava debisine göre yaklaşık karbon miktarını hesaplayın. 
        (Basitleştirilmiş, ilk tahmin için kullanılabilecek yöntemdir.)
      </p>

      <label class="text-sm font-semibold text-gray-700">Hava Debisi (m³/h)</label>
      <input 
        type="number" 
        id="airFlow" 
        class="w-full mt-1 mb-3 p-2 border rounded-lg"
        placeholder="Örn. 120"
      >

      <button 
        onclick="calcCarbon()"
        class="px-4 py-2 bg-green-600 text-white rounded-lg w-full hover:bg-green-700 transition"
      >
        Hesapla
      </button>

      <p id="carbonResult" class="text-gray-800 font-semibold mt-3 hidden"></p>
    </div>

  </div>
</div>

<script>
function calcCarbon() {
  const Q = parseFloat(document.getElementById('airFlow').value);

  if (isNaN(Q) || Q <= 0) {
    alert("Lütfen geçerli bir hava debisi giriniz.");
    return;
  }

  // Basit kabul: 1 m³/h hava için ~1.2 L karbon
  const L = Q * 1.2;  
  const kg = L * 0.45; // yaklaşık yoğunluk katsayısı

  const result = document.getElementById('carbonResult');
  result.classList.remove('hidden');
  result.textContent = 
    "Yaklaşık karbon ihtiyacı: " + L.toFixed(1) + " litre (" + kg.toFixed(1) + " kg)";
}
</script>
