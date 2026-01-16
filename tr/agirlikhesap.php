<?php 
$title = "Ağırlık Hesaplama | CEKA Endüstriyel";
$navbarmargin = false; 
?>
<?php include ('Utils/header.php') ?>
<?php include ('Elements/navbar.php') ?>

<div class="pt-32"></div>

<section class="py-10 px-6 max-w-screen-xl mx-auto text-gray-800">
  <h1 class="text-3xl font-bold mb-2">Ağırlık Hesaplama</h1>
  <p class="text-gray-600 mb-6">Plaka, kutu, boru, mil (çubuk) ve dairesel plaka gibi standart geometriler için malzeme ağırlığı hesaplama aracıdır.</p>

  <!-- Malzeme seçimi / Yoğunluklar -->
  <div class="grid md:grid-cols-3 gap-6 mb-8">
    <div class="p-4 border rounded-xl">
      <label class="block text-sm mb-1">Malzeme</label>
      <select id="mat" class="w-full border rounded-lg p-2">
        <option value="PP|905">Polipropilen (PP) ~905 kg/m³</option>
        <option value="HDPE|950">Polietilen (HDPE) ~950 kg/m³</option>
        <option value="PVC|1400">PVC ~1400 kg/m³</option>
        <option value="PVDF|1780">PVDF ~1780 kg/m³</option>
        <option value="Delrin (POM)|1410">Delrin (POM) ~1410 kg/m³</option>
        <option value="Akrilik (PMMA)|1180">Akrilik (PMMA) ~1180 kg/m³</option>
        <option value="Kestamid (PA6G)|1150">Kestamid (PA6G) ~1150 kg/m³</option>
        <option value="SS316L|8000">Paslanmaz 316L ~8000 kg/m³</option>
        <option value="SS304|7900">Paslanmaz 304 ~7900 kg/m³</option>
        <option value="AL|2700">Alüminyum ~2700 kg/m³</option>
        <option value="Bronz|8800">Bronz ~8800 kg/m³</option>
      </select>
      <label class="block text-sm mt-3 mb-1" for="rho">Yoğunluk (kg/m³)</label>
      <input id="rho" type="number" step="0.1" class="w-full border rounded-lg p-2" />
      <p class="text-xs text-gray-500 mt-2">Yoğunluğu elle değiştirebilirsiniz.</p>
    </div>

    <div class="p-4 border rounded-xl">
      <label class="block text-sm mb-1">Geometri</label>
      <select id="shape" class="w-full border rounded-lg p-2">
        <option value="plate">Plaka / Sac (dikdörtgen)</option>
        <option value="box_hollow">Kutu Profil (içi boş)</option>
        <option value="pipe">Boru (silindirik, et kalınlıklı)</option>
        <option value="rod">Mil / Çubuk (katı silindir)</option>
        <option value="circle_plate">Dairesel Plaka (kapak)</option>
      </select>
    </div>

    <div class="p-4 border rounded-xl">
      <label class="block text-sm mb-1">Adet</label>
      <input id="qty" type="number" min="1" value="1" class="w-full border rounded-lg p-2" />
      <label class="block text-sm mt-3 mb-1">Parça Adı / Not</label>
      <input id="note" type="text" placeholder="Örn: Mil, Boru, Kapak" class="w-full border rounded-lg p-2" />
    </div>
  </div>

  <!-- Boyutlar dinamik alanı ve hesap sonuçları -->
  <div id="dims" class="grid md:grid-cols-3 gap-6 mb-6"></div>

  <div class="grid md:grid-cols-3 gap-6 mb-6">
    <div class="p-4 border rounded-xl bg-gray-50">
      <h3 class="font-semibold mb-2">Hacim (bir parça)</h3>
      <div class="text-2xl" id="vol">0.000000 m³</div>
    </div>
    <div class="p-4 border rounded-xl bg-gray-50">
      <h3 class="font-semibold mb-2">Ağırlık (bir parça)</h3>
      <div class="text-2xl" id="kg_each">0.00 kg</div>
    </div>
    <div class="p-4 border rounded-xl bg-gray-50">
      <h3 class="font-semibold mb-2">Toplam Ağırlık</h3>
      <div class="text-2xl" id="kg_total">0.00 kg</div>
    </div>
  </div>

  <div class="flex flex-wrap items-center gap-3 mb-10">
    <button id="addItem" class="px-4 py-2 rounded-lg bg-black text-white">Listeye Ekle</button>
    <button id="resetForm" class="px-4 py-2 rounded-lg border">Sıfırla</button>
    <button id="exportCSV" class="ml-auto px-4 py-2 rounded-lg border">CSV İndir</button>
  </div>

  <div class="overflow-x-auto">
    <table class="w-full text-sm border rounded-xl overflow-hidden">
      <thead class="bg-gray-100">
        <tr>
          <th class="p-3 text-left">Parça</th>
          <th class="p-3 text-left">Geometri</th>
          <th class="p-3 text-left">Malzeme</th>
          <th class="p-3 text-left">Boyutlar</th>
          <th class="p-3 text-right">Adet</th>
          <th class="p-3 text-right">kg / adet</th>
          <th class="p-3 text-right">Toplam kg</th>
          <th class="p-3 text-right">Sil</th>
        </tr>
      </thead>
      <tbody id="rows"></tbody>
      <tfoot>
        <tr class="bg-gray-50">
          <td colspan="6" class="p-3 font-semibold text-right">Genel Toplam</td>
          <td class="p-3 font-bold text-right" id="grand">0.00 kg</td>
          <td></td>
        </tr>
      </tfoot>
    </table>
  </div>
</section>

<script>
(function(){
  const $ = (id)=>document.getElementById(id);
  const fmtKG = (x)=> (isFinite(x)? x.toFixed(2):"0.00")+" kg";
  const fmtVOL = (x)=> (isFinite(x)? x.toFixed(6):"0.000000")+" m³";
  const matEl = $("mat"), shapeEl = $("shape"), qtyEl = $("qty"), noteEl = $("note"), dimsBox = $("dims");

  function setShapeFields(shape){
    dimsBox.innerHTML = "";
    const card = document.createElement('div');
    card.className = "p-4 border rounded-xl";
    card.innerHTML = `<h3 class='font-semibold mb-2'>Boyutlar</h3>`;

    if(shape==='plate'){
      card.innerHTML += `<label class='block text-sm mb-1'>Uzunluk L (mm)</label><input id='L' type='number' class='w-full border rounded-lg p-2' /><label class='block text-sm mt-3 mb-1'>Genişlik W (mm)</label><input id='W' type='number' class='w-full border rounded-lg p-2' /><label class='block text-sm mt-3 mb-1'>Et Kalınlığı t (mm)</label><input id='T' type='number' class='w-full border rounded-lg p-2' />`;
    }
    if(shape==='box_hollow'){
      card.innerHTML += `<label class='block text-sm mb-1'>Dış Uzunluk Lₒ (mm)</label><input id='Lo' type='number' class='w-full border rounded-lg p-2' /><label class='block text-sm mt-3 mb-1'>Dış Genişlik Wₒ (mm)</label><input id='Wo' type='number' class='w-full border rounded-lg p-2' /><label class='block text-sm mt-3 mb-1'>Dış Yükseklik Hₒ (mm)</label><input id='Ho' type='number' class='w-full border rounded-lg p-2' /><label class='block text-sm mt-3 mb-1'>Et Kalınlığı t (mm)</label><input id='T' type='number' class='w-full border rounded-lg p-2' />`;
    }
    if(shape==='pipe'){
      card.innerHTML += `<label class='block text-sm mb-1'>Dış Çap OD (mm)</label><input id='OD' type='number' class='w-full border rounded-lg p-2' /><label class='block text-sm mt-3 mb-1'>Et Kalınlığı t (mm)</label><input id='T' type='number' class='w-full border rounded-lg p-2' /><label class='block text-sm mt-3 mb-1'>Uzunluk L (mm)</label><input id='L' type='number' class='w-full border rounded-lg p-2' />`;
    }
    if(shape==='rod'){
      card.innerHTML += `<label class='block text-sm mb-1'>Çap D (mm)</label><input id='D' type='number' class='w-full border rounded-lg p-2' /><label class='block text-sm mt-3 mb-1'>Uzunluk L (mm)</label><input id='L' type='number' class='w-full border rounded-lg p-2' />`;
    }
    if(shape==='circle_plate'){
      card.innerHTML += `<label class='block text-sm mb-1'>Çap D (mm)</label><input id='D' type='number' class='w-full border rounded-lg p-2' /><label class='block text-sm mt-3 mb-1'>Et Kalınlığı t (mm)</label><input id='T' type='number' class='w-full border rounded-lg p-2' />`;
    }

    dimsBox.appendChild(card);
    dimsBox.querySelectorAll('input').forEach(el=>el.addEventListener('input', compute));
  }

  function mmToM(x){return x/1000;}
  function getDensity(){
    const rhoEl=$("rho");
    let rho=parseFloat(rhoEl.value)||0;
    if(!rho){
      const[,r]=matEl.value.split('|');
      rho=parseFloat(r);
    }
    const[name]=matEl.value.split('|');
    return{name,rho};
  }
  function compute(){
    const {rho}=getDensity();
    const q=parseFloat(qtyEl.value)||1;
    const shape=shapeEl.value;
    let V=0;
    if(shape==='plate'){
      const L=mmToM($("L").value),W=mmToM($("W").value),T=mmToM($("T").value);
      V=L*W*T;
    }
    if(shape==='box_hollow'){
      const Lo=mmToM($("Lo").value),Wo=mmToM($("Wo").value),Ho=mmToM($("Ho").value),T=mmToM($("T").value);
      const Li=Math.max(Lo-2*T,0),Wi=Math.max(Wo-2*T,0),Hi=Math.max(Ho-2*T,0);
      V=Math.max(Lo*Wo*Ho-Li*Wi*Hi,0);
    }
    if(shape==='pipe'){
      const OD=mmToM($("OD").value),T=mmToM($("T").value),L=mmToM($("L").value);
      const Ro=OD/2,Ri=Math.max(Ro-T,0);
      V=Math.PI*(Ro*Ro-Ri*Ri)*L;
    }
    if(shape==='rod'){
      const D=mmToM($("D").value),L=mmToM($("L").value);
      V=Math.PI*(D*D/4)*L;
    }
    if(shape==='circle_plate'){
      const D=mmToM($("D").value),T=mmToM($("T").value);
      V=Math.PI*(D*D/4)*T;
    }
    const kgEach=V*rho;
    const kgTotal=kgEach*q;
    $("vol").textContent=fmtVOL(V);
    $("kg_each").textContent=fmtKG(kgEach);
    $("kg_total").textContent=fmtKG(kgTotal);
    return{V,kgEach,kgTotal};
  }

  function syncRho(){
    const[,r]=matEl.value.split('|');
    $("rho").value=parseFloat(r);
  } 
  matEl.addEventListener('change',()=>{syncRho();compute();});
  shapeEl.addEventListener('change',e=>{setShapeFields(e.target.value);compute();});
  qtyEl.addEventListener('input',compute);
  syncRho();
  setShapeFields(shapeEl.value);
})();
</script>

<?php include ('Elements/footer.php') ?>
