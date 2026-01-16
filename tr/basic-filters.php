<?php $title = "Ceka Endüstriyel" ?>
<?php include ('Utils/header.php') ?>
<?php $navbarmargin = true ?>
<?php include ('Elements/navbar.php') ?>

<!-- Açıklayıcı metin -->
<section class="bg-white py-16">
  <div class="max-w-screen-xl mx-auto px-6 text-gray-800">
    <h1 class="text-4xl font-extrabold mb-10">Basic Filters</h1>

    <p class="text-2xl mb-6 leading-relaxed">
      CEKA Basic Filter units combine mechanical filtration and ultraviolet disinfection in a single compact system. Designed for ease of installation and operation, these filters are ideal for small to medium-sized aquaculture and water treatment applications.
    </p>

    <p class="text-2xl mb-6 leading-relaxed">
      The integration of a bag filter with UV treatment ensures both physical particle removal and microbial load reduction, helping maintain optimal water quality with minimal maintenance.
    </p>

    <p class="text-2xl leading-relaxed">
      With flow capacities ranging from 5 m³/h to 40 m³/h, CEKA Basic Filters offer reliable performance, energy efficiency, and durable design tailored to various system requirements.
    </p>
  </div>
</section>

<?php
$title = "";
$subtitle = "Basic Filter";
$Images = [
    'BLSS 1' => 'Renders/BasicFilters/BF1.png',
    'BLSS 2' => 'Renders/BasicFilters/BF2.png',
    'BLSS 3' => 'Renders/BasicFilters/BF3.png',
];
$Models = [
    '$PROPERTIES' => [
        'Capacity',
        'Energy',
        'Torba Mesh',
        'UV Dosage',
        'Sensor',
        'Size',
    ],
    'BLSS-05' => [
        '5 m3/h',
        '0,33 kw',
        '50/100 Micron',
        '250 mj',
        'Pressure/Temperature',
        '550x500x1250',
    ],
    'BLSS-10' => [
        '10 m3/h',
        '0,61 kw',
        '50/100 Micron',
        '250 mj',
        'Pressure/Temperature',
        '700x500x1250',
    ],
    'BLSS-20' => [
        '20 m3/h',
        '0,99 kw',
        '50/100 Micron',
        '250 mj',
        'Pressure/Temperature',
        '800x600x1250',
    ],
    'BLSS-40' => [
        '40 m3/h',
        '2,52 kw',
        '50/100 Micron',
        '250 mj',
        'Pressure/Temperature',
        '900x650x1250',
    ],
];
?>
<?php include ('Elements/data.php') ?>

<?php include ('Elements/footer.php') ?>
<?php include ('Utils/body.php') ?>
