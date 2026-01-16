<?php $title = "Ceka Endüstriyel" ?>
<?php include ('Utils/header.php') ?>
<?php $navbarmargin = true ?>
<?php include ('Elements/navbar.php') ?>

<!-- MBBR Açıklama -->
<section class="bg-white py-16">
  <div class="max-w-screen-xl mx-auto px-6 text-gray-800">
    <h1 class="text-4xl font-extrabold mb-10">MBBR (Moving Bed Biofilm Reactor)</h1>
    <p class="text-2xl mb-6 leading-relaxed">
      CEKA MBBR sistemleri, biyolojik arıtma süreçlerinde kullanılan modern ve etkili çözümler sunar. Yüksek yüzey alanına sahip hareketli medya sayesinde bakterilerin tutunarak çoğalması sağlanır ve organik yük etkili bir şekilde giderilir.
    </p>
    <p class="text-2xl leading-relaxed">
      Farklı çap ve hacim seçenekleri ile sunulan CEKA MBBR tankları, yüksek verimli biyolojik arıtma sağlarken bakım ihtiyacını minimuma indirir. Polipropilen gövdesi ve PVC bağlantılarıyla kimyasal ve yapısal dayanıklılık sağlar.
    </p>
  </div>
</section>

<?php
$title = "";
$subtitle = "MBBR";
$Images = [
    'MBBR' => 'Renders/MBBR.png',
];
$Models = [
    '$PROPERTIES' => [
        'Volume - m3',
        'Tank Diameter - mm',
        'Tank Height -',
        'Material',
        'Fittings',
    ],
    'MBBR' => [
        '250 - 20.000',
        '500 - 2500',
        '1200 - 4000',
        'Polypropylene',
        'PVC',
    ],
];
?>
<?php include ('Elements/data.php') ?>

<!-- Biotower Açıklama -->
<section class="bg-white py-16">
  <div class="max-w-screen-xl mx-auto px-6 text-gray-800">
    <h1 class="text-4xl font-extrabold mb-10">Biotower</h1>
    <p class="text-2xl mb-6 leading-relaxed">
      CEKA Biotower sistemleri, düşey akışlı biyolojik filtreleme sağlayarak, amonyak ve nitrit gideriminde etkin rol oynar. Su, filtrasyon medyası üzerinden süzülürken, yüzeyde oluşan biyofilm sayesinde kirleticiler parçalanır.
    </p>
    <p class="text-2xl leading-relaxed">
      Silindirik ve dikdörtgen form seçenekleri ile sunulan Biotower’lar, hem kompakt sistemlere hem de yüksek debili sistemlere uyarlanabilir. Kimyasal dayanımı yüksek polipropilen yapısı ve sağlam PVC bağlantıları ile CEKA güvencesi sunar.
    </p>
  </div>
</section>

<?php
$title = "";
$subtitle = "Biotower";
$Images = [
    'Biotower Rectengular' => 'Renders/Biotower2.png',
    'Biotower Cylinder' => 'Renders/Biotower.png',
];
$Models = [
    '$PROPERTIES' => [
        'Volume - Liter',
        'Tank Diameter / Dimensions - mm',
        'Tank Height - mm',
        'Material',
        'Fittings',
    ],
    'Biotower' => [
        '400  - 10.000',
        '500  - 1500',
        '500  - 1500',
        'Polypropylene',
        'PVC',
    ],
];
?>
<?php include ('Elements/data.php') ?>

<!-- Ozone Destructor Açıklama -->
<section class="bg-white py-16">
  <div class="max-w-screen-xl mx-auto px-6 text-gray-800">
    <h1 class="text-4xl font-extrabold mb-10">Ozone Destructor</h1>
    <p class="text-2xl mb-6 leading-relaxed">
      CEKA Ozon Yıkıcı sistemleri, proses çıkışında oluşan artık ozon gazını güvenli şekilde bertaraf etmek amacıyla tasarlanmıştır. Aktif karbon dolgu ile çalışan sistem, çevre ve operatör güvenliği açısından kritik bir bileşendir.
    </p>
    <p class="text-2xl leading-relaxed">
      Kompakt yapısı ve yüksek absorpsiyon kapasitesi sayesinde sistemin genel verimliliğini artırırken, CEKA mühendisliği ile uzun ömürlü ve güvenilir çözümler sunar.
    </p>
  </div>
</section>

<?php
$title = "";
$subtitle = "Ozone Destructor";
$Images = [
    'Ozone Destructor' => 'Renders/OzoneDestructor.png',
];
$Models = [
    '$PROPERTIES' => [
        'Activated Carbon Volume',
        'Tank Diameter',
        'Tank Height',
        'Tank material',
        'Material',
    ],
    'Ozone Destructor' => [
        '20 – 200 lt',
        '110  - 600 mm',
        '1000 – 1400 mm',
        '0.2 – 6 m2',
        'Polypropylene',
    ],
];
?>
<?php include ('Elements/data.php') ?>

<!-- Ozone Reactor Açıklama -->
<section class="bg-white py-16">
  <div class="max-w-screen-xl mx-auto px-6 text-gray-800">
    <h1 class="text-4xl font-extrabold mb-10">Ozone Reactor</h1>
    <p class="text-2xl mb-6 leading-relaxed">
      CEKA Ozon Reaktörleri, ozon gazının su ile güvenli ve etkin şekilde karışmasını sağlayan basınçlı tank sistemleridir. Suda çözünmüş organik maddelerin, bakteri ve virüslerin gideriminde yüksek başarı sağlar.
    </p>
    <p class="text-2xl leading-relaxed">
      Kompakt tasarımı ve kimyasallara dayanıklı malzeme yapısıyla, CEKA Ozon Reaktörleri ileri düzey dezenfeksiyon ihtiyaçları için ideal çözümler sunar.
    </p>
  </div>
</section>

<?php
$title = "";
$subtitle = "Ozone Reactor";
$Images = [
    'Ozone Reactor' => 'Renders/OzonReaktor.png',
];
$Models = [
    '$PROPERTIES' => [
        'Volume - Liter',
        'Tank Diameter / Dimensions - mm',
        'Tank Height - mm',
        'Material',
        'Fittings',
    ],
    'Ozone Reactor' => [
        '400  - 10.000',
        '500  - 1500',
        '500  - 1500',
        'Polypropylene',
        'PVC',
    ],
];
?>
<?php include ('Elements/data.php') ?>

<?php include ('Elements/footer.php') ?>
<?php include ('Utils/body.php') ?>
