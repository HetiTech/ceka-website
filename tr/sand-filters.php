<?php $title = "Ceka Endüstriyel" ?>
<?php include ('Utils/header.php') ?>
<?php $navbarmargin = true ?>
<?php include ('Elements/navbar.php') ?>

<!-- Açıklayıcı metin -->
<section class="bg-white py-16">
  <div class="max-w-screen-xl mx-auto px-6 text-gray-800">
    <h1 class="text-4xl font-extrabold mb-10">Sand Filters</h1>

    <p class="text-2xl mb-6 leading-relaxed">
      CEKA Sand Filters are essential components in water treatment and recirculating aquaculture systems, designed to remove suspended solids and fine particles through a natural filtration process. Their reliability and simplicity make them ideal for both industrial and aquaculture applications.
    </p>

    <p class="text-2xl mb-6 leading-relaxed">
      Each model is filled with a specific volume of high-performance filtration sand and designed to accommodate various flow capacities — ranging from 8 m³/h up to 150 m³/h. Our filters ensure optimal particle retention and low maintenance operation, delivering long-term clarity and system efficiency.
    </p>

    <p class="text-2xl leading-relaxed">
      CEKA offers robust construction with chemical-resistant materials and flexible connection options, ensuring compatibility with a wide range of system configurations.
    </p>
  </div>
</section>

<?php
$title = "";
$subtitle = "Sand Filters";
$Images = [
    '$nil' => 'Renders/KF.png',
    '$nil2' => 'Renders/KF2.png',
];
$Models = [
    '$PROPERTIES' => [
        'Diameter',
        'Flow',
        'Sand',
        'Connection',
    ],
    'SF450' => [
        '450 mm',
        '8.0 m3/h',
        '75 kg',
        '50 mm',
    ],
    'SF600' => [
        '600 mm',
        '14.0 m3/h',
        '125 kg',
        '50 mm',
    ],
    'SF750' => [
        '750 mm',
        '21.0 m3/h',
        '225 kg',
        '63 mm',
    ],
    'SF900' => [
        '900 mm',
        '31.0 m3/h',
        '375 kg',
        '63 mm',
    ],
    'SF1250' => [
        '1250 mm',
        '55.0 m3/h',
        '1400 kg',
        '90 mm',
    ],
    'SF1600' => [
        '1600 mm',
        '95.0 m3/h',
        '3500 kg',
        '125 mm',
    ],
    'SF2000' => [
        '2000 mm',
        '150.0 m3/h',
        '6000 kg',
        '160 mm',
    ],
];
?>
<?php include ('Elements/data.php') ?>
<?php include ('Elements/footer.php') ?>
<?php include ('Utils/body.php') ?>
