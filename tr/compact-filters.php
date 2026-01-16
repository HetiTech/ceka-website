<?php $title = "Ceka Endüstriyel" ?>
<?php $navbarmargin = true ?>
<?php include ('Utils/header.php') ?>
<?php include ('Elements/navbar.php') ?>

<!-- Introductory Description in English -->
<section class="bg-white py-16">
  <div class="max-w-screen-xl mx-auto px-6 text-gray-800">
    <h1 class="text-4xl font-extrabold mb-10">Compact LSS Filtration Systems</h1>

    <p class="text-2xl mb-6 leading-relaxed">
      Our compact Life Support Systems (LSS) are designed to ensure optimal water quality and biological stability for aquaculture and aquatic exhibits. These all-in-one skid units integrate mechanical, biological, and chemical filtration processes in a compact footprint to meet the specific needs of high-efficiency operations.
    </p>

    <p class="text-2xl leading-relaxed">
      Featuring integrated protein skimmers, bio-reactors, UV sterilizers, and automation-ready control systems, our solutions support a wide range of capacities and livestock loads. Built with robust materials and engineering precision, CEKA’s filtration systems are trusted in intensive aquaculture, quarantine systems, and RAS operations globally.
    </p>
  </div>
</section>

<!-- Product Data Section -->
<?php
$title = "";
$subtitle = "ACF-10M Filter";
$Images = [
    'ACF-10M' => 'Renders/afcm10.png',
];
$Models = [
    '$PROPERTIES' => [
        'Pump Quantity',
        'PS Capacity (1,5 RT)',
        'Pump and Motor Power',
        'Trickle Volume',
        'MBBR Volume',
        'Biological Surface Area',
        'Dry Load',
        'Operational Load',
        'Operational Water Volume',
        'Footprint',
        'Max Height',
        'Sump Max Water Level',
        'Flow meter',
        'Auto Foam Rinse',
        'Water Level Sensor',
        'Water Level Pressure Sensor',
        'ORP Probe',
        'pH Probe',
        'PLC Control Panel',
        'Manual Control Panel',
    ],
    'ACF-10' => [
        '3 pcs',
        '12 m³/h',
        '1,28 kW',
        '0,28 m³',
        '–',
        '105 m²',
        '230 kg',
        '980 kg',
        '0,6 m³',
        '2000 mm x 1400 mm',
        '2260 mm',
        '850 mm',
        'Standard',
        'Standard',
        'Standard',
        'Standard',
        'Optional',
        'Optional',
        'Optional',
        'Optional',
    ],
    'ACF-10M' => [
        '3 pcs',
        '12 m³/h',
        '1,28 kW',
        '0,28 m³',
        '0,28 m³',
        '215 m²',
        '340 kg',
        '2250 kg',
        '1,8 m³',
        '3200 mm x 1450 mm',
        '2260 mm',
        '850 mm',
        'Standard',
        'Standard',
        'Standard',
        'Standard',
        'Optional',
        'Optional',
        'Optional',
        'Optional',
    ],
];
?>
<?php include ('Elements/data.php') ?>
<?php include ('Elements/footer.php') ?>
<?php include ('Utils/body.php') ?>
