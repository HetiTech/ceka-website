<?php 
$title = "Ürünleri Tanıyalım | CEKA Akademi";
$navbarmargin = false;
?>
<?php include('Utils/header.php'); ?>
<?php include('Elements/navbar.php'); ?>

<div class="pt-32"></div>

<section class="bg-white min-h-screen pb-16">
  <div class="max-w-screen-xl mx-auto px-4">
    
    <!-- Başlık ve açıklama -->
    <header class="text-center mb-10">
      <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-4">
        Ürünleri Tanıyalım – Teknik Rehberler
      </h1>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">
        Bu bölümde, CEKA’nın ürettiği ve proseslerde kullandığı ekipmanları 
        pazarlama dilinden uzak, tamamen teknik bakış açısıyla ele alıyoruz. 
        Her bir ürün için; ne işe yaradığını, nasıl çalıştığını, hangi durumlarda 
        tercih edilmesi gerektiğini ve tasarımda dikkat edilmesi gereken noktaları 
        detaylıca bulabilirsiniz.
      </p>
    </header>

    <!-- AKORDİYONLAR -->
    <div class="space-y-4">

      <!-- Akordiyon 1: Tambur Filtre -->
      <div class="border border-gray-200 rounded-2xl overflow-hidden bg-gray-50">
        <!-- Başlık butonu -->
        <button 
          type="button"
          class="w-full flex items-center justify-between px-4 md:px-6 py-4 md:py-5 text-left hover:bg-gray-100 transition-colors"
          onclick="toggleProductAccordion('product-tambur')"
        >
          <div>
            <p class="text-xs font-semibold uppercase tracking-wide text-blue-700 mb-1">
              Mekanik Filtrasyon / Katı – Sıvı Ayırma
            </p>
            <h2 class="text-lg md:text-xl font-bold text-gray-800">
              Tambur Filtre (Drum Filter)
            </h2>
            <p class="text-xs md:text-sm text-gray-500 mt-1">
              RAS ve endüstriyel proseslerde otomatik askıda katı madde tutulması için kullanılır.
            </p>
          </div>

          <div class="ml-4 flex items-center">
            <span 
              id="icon-product-tambur"
              class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-gray-300 text-gray-600 text-xl leading-none"
            >
              +
            </span>
          </div>
        </button>

        <!-- İçerik -->
        <div 
          id="panel-product-tambur"
          class="hidden border-t border-gray-200 bg-white px-4 md:px-6 pb-6 md:pb-8 pt-2 md:pt-4"
        >
          <?php include('Products/tambur_filtre.php'); ?>
        </div>
      </div>

      <!-- Akordiyon 2: Protein Skimmer -->
      <div class="border border-gray-200 rounded-2xl overflow-hidden bg-gray-50">
        <!-- Başlık butonu -->
        <button 
          type="button"
          class="w-full flex items-center justify-between px-4 md:px-6 py-4 md:py-5 text-left hover:bg-gray-100 transition-colors"
          onclick="toggleProductAccordion('protein-skimmer')"
        >
          <div>
            <p class="text-xs font-semibold uppercase tracking-wide text-purple-700 mb-1">
              Organik Madde Uzaklaştırma / Gaz – Sıvı Ayırma
            </p>
            <h2 class="text-lg md:text-xl font-bold text-gray-800">
              Protein Skimmer (Foam Fractionator)
            </h2>
            <p class="text-xs md:text-sm text-gray-500 mt-1">
              Deniz suyu RAS ve hatchery sistemlerinde çözünmüş organik madde uzaklaştırma.
            </p>
          </div>

          <div class="ml-4 flex items-center">
            <span 
              id="icon-protein-skimmer"
              class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-gray-300 text-gray-600 text-xl leading-none"
            >
              +
            </span>
          </div>
        </button>

        <!-- İçerik -->
        <div 
          id="panel-protein-skimmer"
          class="hidden border-t border-gray-200 bg-white px-4 md:px-6 pb-6 md:pb-8 pt-2 md:pt-4"
        >
          <?php include('Products/protein_skimmer.php'); ?>
        </div>
      </div>

      <!-- Akordiyon 3: Aktif Karbon Koku Filtresi -->
      <div class="border border-gray-200 rounded-2xl overflow-hidden bg-gray-50">
        <!-- Başlık butonu -->
        <button 
          type="button"
          class="w-full flex items-center justify-between px-4 md:px-6 py-4 md:py-5 text-left hover:bg-gray-100 transition-colors"
          onclick="toggleProductAccordion('product-aktif-karbon')"
        >
          <div>
            <p class="text-xs font-semibold uppercase tracking-wide text-green-700 mb-1">
              Kimyasal Emisyon / Gaz Arıtma
            </p>
            <h2 class="text-lg md:text-xl font-bold text-gray-800">
              Aktif Karbon Koku Filtresi
            </h2>
            <p class="text-xs md:text-sm text-gray-500 mt-1">
              H₂S, VOC ve kötü kokuların giderimi için adsorpsiyon filtresi.
            </p>
          </div>

          <div class="ml-4 flex items-center">
            <span 
              id="icon-product-aktif-karbon"
              class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-gray-300 text-gray-600 text-xl leading-none"
            >
              +
            </span>
          </div>
        </button>

        <!-- İçerik -->
        <div 
          id="panel-product-aktif-karbon"
          class="hidden border-t border-gray-200 bg-white px-4 md:px-6 pb-6 md:pb-8 pt-2 md:pt-4"
        >
          <?php include('Products/aktif_karbon_koku_filtreleri.php'); ?>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
  function toggleProductAccordion(id) {
    const panel = document.getElementById('panel-' + id);
    const icon  = document.getElementById('icon-' + id);
    if (!panel) return;

    const isHidden = panel.classList.contains('hidden');

    // Tek açılır akordiyon: diğer tüm panelleri kapat
    const allPanels = document.querySelectorAll('[id^="panel-product-"], [id^="panel-protein-"]');
    const allIcons  = document.querySelectorAll('[id^="icon-product-"], [id^="icon-protein-"]');

    allPanels.forEach(p => {
      if (p !== panel) p.classList.add('hidden');
    });

    allIcons.forEach(i => {
      if (i !== icon) i.textContent = '+';
    });

    // Tıklanan paneli aç/kapat
    if (isHidden) {
      panel.classList.remove('hidden');
      if (icon) icon.textContent = '–';
    } else {
      panel.classList.add('hidden');
      if (icon) icon.textContent = '+';
    }
  }

  function calculateDrumSize() {
    const flowInput    = document.getElementById('flowRate');
    const micronSelect = document.getElementById('micronSelect');
    const resultBox    = document.getElementById('drumResult');
    const resultText   = document.getElementById('drumSizeText');
    const capacityText = document.getElementById('drumCapacityText');
    const errorBox     = document.getElementById('drumError');

    const Q      = parseFloat(flowInput.value);   // m3/h
    const micron = parseInt(micronSelect.value, 10);

    if (isNaN(Q) || Q <= 0) {
      errorBox.textContent = "Lütfen geçerli bir debi değeri giriniz (m³/h).";
      errorBox.classList.remove('hidden');
      resultBox.classList.add('hidden');
      return;
    }

    errorBox.classList.add('hidden');

    // Basit kapasite katsayıları (m³/h / m²) – mikron küçüldükçe kapasite azalır
    const capacityFactors = {
      250: 150,
      100: 90,
      50: 60,
      30: 40
    };

    const k = capacityFactors[micron] || 90;

    // Gerekli aktif filtre alanı (m²)
    const Areq = Q / k;

    // Tambur çapı seçenekleri (mm)
    const diameters = [800, 1000, 1200, 1500, 2000];

    let selectedD = diameters[0];
    let selectedL = 1.0;

    // Tamburun yaklaşık %40'ının suya daldığını varsayalım
    const submergence = 0.4;

    for (let i = 0; i < diameters.length; i++) {
      const Dmm = diameters[i];
      const Dm  = Dmm / 1000;                  // metre
      const areaPerMeter = Math.PI * Dm * submergence; // 1 m boy için aktif alan

      let L = Areq / areaPerMeter;             // gerekli tambur boyu (m)

      if (L < 0.4) L = 0.4;                    // çok kısa olmasın

      if (L <= 3.0) {                          // 3 m üzeri uzun, daha büyük çap deneriz
        selectedD = Dmm;
        selectedL = L;
        break;
      } else {
        selectedD = Dmm;
        selectedL = L;
      }
    }

    const Lrounded = Math.round(selectedL * 10) / 10;

    const DmFinal       = selectedD / 1000;
    const effectiveArea = Math.PI * DmFinal * submergence * Lrounded; // m²
    const approxCapacity = effectiveArea * k; // m³/h

    resultText.textContent =
      "Yaklaşık tambur gövde ölçüsü: " + selectedD + " mm çap × " + Lrounded.toFixed(1) + " m boy";

    capacityText.textContent =
      "Bu ölçüler ile " + micron + " µm bez kullanıldığında yaklaşık " +
      approxCapacity.toFixed(1) + " m³/h mekanik filtrasyon kapasitesi hedeflenmektedir.";

    resultBox.classList.remove('hidden');
  }
</script>

<?php include('Elements/footer.php'); ?>
