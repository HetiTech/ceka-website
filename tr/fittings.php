<?php 
$title = "Fittings | Flanş & Manşon Ölçüleri | CEKA Endüstriyel";
$navbarmargin = false; 
?>
<?php include ('Utils/header.php') ?>
<?php include ('Elements/navbar.php') ?>

<div class="pt-32"></div>

<section class="py-10 px-6 max-w-screen-xl mx-auto text-gray-800">
  <h1 class="text-3xl font-bold mb-2">Standart Parça Ölçüleri</h1>
  <p class="text-gray-600 mb-6">
    Flanş ve manşon gibi bağlantı elemanlarının ölçü ve (varsa) yaklaşık ağırlık tabloları. PN seçimine göre flanş tabloları otomatik değişir.
  </p>

  <!-- Kontroller -->
  <div class="grid md:grid-cols-12 gap-4 items-end mb-6">
    <div class="md:col-span-5 p-4 border rounded-xl">
      <label class="block text-sm font-medium mb-2">Parça Grubu</label>
      <div class="flex gap-6">
        <label class="inline-flex items-center gap-2 text-sm">
          <input type="radio" name="grp" value="flange" class="accent-black" checked> Flanşlar
        </label>
        <label class="inline-flex items-center gap-2 text-sm">
          <input type="radio" name="grp" value="coupling" class="accent-black"> Manşonlar
        </label>
      </div>
    </div>

    <div id="pnBox" class="md:col-span-3 p-4 border rounded-xl">
      <label class="block text-sm font-medium mb-2">PN (Basınç Sınıfı)</label>
      <select id="pn" class="w-full border rounded-lg p-2">
        <option>PN6</option>
        <option selected>PN10</option>
        <option>PN16</option>
      </select>
      <p class="text-xs text-gray-500 mt-2">TS/EN 1092-1 Tip 01 düz flanş referansı.</p>
    </div>

    <div class="md:col-span-4 p-4 border rounded-xl">
      <label class="block text-sm font-medium mb-2">Tabloda Ara</label>
      <input id="q" type="search" placeholder="örn: DN50, M16" class="w-full border rounded-lg p-2"/>
      <div class="flex gap-2 mt-3">
        <button id="csv" class="px-3 py-2 border rounded-lg">CSV İndir</button>
        <button id="reset" class="px-3 py-2 border rounded-lg">Sıfırla</button>
      </div>
    </div>
  </div>

  <!-- İllüstrasyon -->
  <div class="mb-6">
    <div class="flex flex-col md:flex-row gap-4 items-center">
      <img id="illus" src="/Files/Drawings/flans.png" alt="Teknik çizim" class="w-full md:w-1/3 rounded-xl border shadow-sm">
      <div class="text-sm text-gray-600">
        Seçilen parça grubuna uygun teknik görünüm. Flanş tablolarında tek görsel kullanılır (PN6/10/16 için aynı). 
        Manşonlar için BSP/NPT ve BSP DIN2999 referans kesit görseli.
      </div>
    </div>
  </div>

  <!-- Tablolar -->
  <div class="overflow-x-auto border rounded-xl">
    <table class="w-full text-sm" id="tbl">
      <thead class="bg-gray-100" id="thead"></thead>
      <tbody id="tbody"></tbody>
    </table>
  </div>

  <p class="text-xs text-gray-500 mt-3">
    Not: Tablodaki ölçüler referans amaçlıdır. Proje ve standart seçimine göre doğrulanmalıdır.
  </p>
</section>

<script>
(function(){
  // ------- Görsel fallback (kırık resim olursa gizle) -------
  const illus = document.getElementById('illus');
  if (illus) {
    illus.addEventListener('error', () => { illus.style.display = 'none'; });
  }

  // ------- Veri -------
  // Flanş kolon seti (EN 1092-1 Tip 01)
  const FLANGE_COLUMNS = [
    {k:'DN', t:'DN'},
    {k:'d5', t:'d₅ (Boru OD) mm'},
    {k:'D',  t:'D (Dış Çap) mm'},
    {k:'b',  t:'b (Kalınlık) mm'},
    {k:'k',  t:'k (Cıvata Çevresi) mm'},
    {k:'d4', t:'d₄ (RF) mm'},
    {k:'f',  t:'f (RF Yük.) mm'},
    {k:'n',  t:'n (Cıvata Adedi)'},
    {k:'screw',t:'Vida / Cıvata'},
    {k:'d2', t:'d₂ (Delik) mm'},
    {k:'weight', t:'Ağırlık (kg/ad)'}
  ];

  // Örnek veri: PN10 (ilk satırlar). PN6/PN16 şimdilik boş değil → sayfa boş görünmesin diye birkaç satır ekledim.
  const FLANGE_DATA = {
    'PN6':  [
      {DN:15, d5:22,  D:95,  b:14, k:65,  d4:45, f:2, n:4,  screw:'M12', d2:14, weight:0.55},
      {DN:20, d5:27.5,D:105, b:14, k:75,  d4:58, f:2, n:4,  screw:'M12', d2:14, weight:0.80}
    ],
    'PN10': [
      {DN:15, d5:22,  D:95,  b:14, k:65,  d4:45, f:2, n:4,  screw:'M12', d2:14, weight:0.59},
      {DN:20, d5:27.5,D:105, b:16, k:75,  d4:58, f:2, n:4,  screw:'M12', d2:14, weight:0.85},
      {DN:25, d5:34.5,D:115, b:16, k:85,  d4:68, f:2, n:4,  screw:'M12', d2:14, weight:1.01},
      {DN:32, d5:43.5,D:140, b:18, k:100, d4:78, f:2, n:4,  screw:'M16', d2:18, weight:1.70},
      {DN:40, d5:49.5,D:150, b:18, k:110, d4:88, f:3, n:4,  screw:'M16', d2:18, weight:1.80},
      {DN:50, d5:61.5,D:165, b:20, k:125, d4:102,f:3, n:4,  screw:'M16', d2:18, weight:2.50}
    ],
    'PN16': [
      {DN:15, d5:22,  D:95,  b:16, k:65,  d4:45, f:2, n:4,  screw:'M12', d2:14, weight:0.62},
      {DN:20, d5:27.5,D:105, b:18, k:75,  d4:58, f:2, n:4,  screw:'M12', d2:14, weight:0.92}
    ]
  };

  // Manşon tablosu (örnek yapı)
  const COUPLING_COLUMNS = [
    {k:'std',  t:'Standard'},
    {k:'size', t:'Ölçü (DN/Ø)'},
    {k:'L',    t:'Boy L (mm)'},
    {k:'d1',   t:'d₁ (mm)'},
    {k:'d3',   t:'d₃ (mm)'},
    {k:'weight',t:'Ağırlık (kg/ad)'}
  ];
  const COUPLING_DATA = [
    {std:'BSPT/NPT', size:'DN20', L:50, d1:26, d3:32, weight:0.08},
    {std:'BSP DIN2999', size:'DN20', L:45, d1:26, d3:32, weight:0.07},
    {std:'BSPT/NPT', size:'DN32', L:60, d1:42, d3:49, weight:0.14},
    {std:'BSP DIN2999', size:'DN32', L:55, d1:42, d3:49, weight:0.12}
  ];

  // ------- Elemanlar -------
  const grpRadios = document.querySelectorAll('input[name="grp"]');
  const pnBox = document.getElementById('pnBox');
  const pnSel = document.getElementById('pn');
  const q = document.getElementById('q');
  const thead = document.getElementById('thead');
  const tbody = document.getElementById('tbody');
  const csvBtn = document.getElementById('csv');
  const resetBtn = document.getElementById('reset');

  // ------- Render helpers -------
  function renderHeader(cols){
    thead.innerHTML = '<tr>'+cols.map(c=>`<th class="p-3 text-left">${c.t}</th>`).join('')+'</tr>';
  }
  function renderRows(cols, rows){
    const term = (q.value||'').toLowerCase();
    const filtered = rows.filter(r=> JSON.stringify(r).toLowerCase().includes(term));
    if (filtered.length === 0) {
      tbody.innerHTML = `<tr class="border-t"><td class="p-3 text-center text-gray-500" colspan="${cols.length}">Bu seçim için veri bulunamadı.</td></tr>`;
      return;
    }
    tbody.innerHTML = filtered.map(r=>{
      return '<tr class="border-t">'+cols.map(c=>`<td class="p-3">${(r[c.k]??'')}</td>`).join('')+'</tr>';
    }).join('');
  }
  function exportCSV(cols, rows){
    const header = cols.map(c=>`"${c.t}"`).join(',');
    const lines = rows.map(r=> cols.map(c=>`"${(r[c.k]??'').toString().replaceAll('"','""')}"`).join(',') );
    const csv = [header].concat(lines).join('\n');
    const blob = new Blob([csv],{type:'text/csv;charset=utf-8;'});
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a'); a.href = url; a.download = 'ceka_parca_olculeri.csv'; a.click(); URL.revokeObjectURL(url);
  }

  // ------- State & UI -------
  function currentGroup(){
    return Array.from(grpRadios).find(r=>r.checked).value; // 'flange' | 'coupling'
  }
  function getData(){
    if(currentGroup()==='flange'){
      const pn = pnSel.value; return {cols:FLANGE_COLUMNS, rows: (FLANGE_DATA[pn]||[])};
    } else {
      return {cols:COUPLING_COLUMNS, rows: COUPLING_DATA};
    }
  }
  function setIllustration(){
    const img = document.getElementById('illus');
    if(!img) return;
    if(currentGroup()==='flange'){
      img.src = '/Files/Drawings/flans.png'; // tek görsel
      img.alt = 'Flanş teknik görünüm';
    } else {
      img.src = '/Files/Drawings/manson.png';
      img.alt = 'Manşon teknik görünüm';
    }
  }
  function refresh(){
    const grp = currentGroup();
    pnBox.style.display = (grp==='flange') ? '' : 'none';
    const {cols, rows} = getData();
    setIllustration();
    renderHeader(cols); renderRows(cols, rows);
  }

  // ------- Events -------
  grpRadios.forEach(r=> r.addEventListener('change', refresh));
  pnSel.addEventListener('change', refresh);
  q.addEventListener('input', refresh);
  resetBtn.addEventListener('click', ()=>{ q.value=''; refresh(); });
  csvBtn.addEventListener('click', ()=>{ const {cols, rows} = getData(); exportCSV(cols, rows); });

  // init
  refresh();
})();
</script>

<?php include ('Elements/footer.php') ?>
