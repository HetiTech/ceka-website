<?php
session_start();

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
} elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else {
    $lang = 'tr';
}

$translations = [
    'tr' => [
        'home' => 'Ana Sayfa',
        'contact' => 'İletişim',
        'welcome' => 'Hoşgeldiniz',
        'page_title' => 'CEKA Endüstriyel',
        'language' => 'Dil',
        'mixer_tanks_title' => 'Karıştırıcı Tanklar',
        'protein_skimmers_title' => 'Protein Skimmerlar',
        'sand_filters_title' => 'Kum Filtreleri',
        'academy_title' => 'CEKA Academy',
        'aquaculture_tanks_title' => 'Akuakültür Tankları',
        'basic_filters_title' => 'Temel Filtreler',
        'compact_filters_title' => 'Kompakt Filtreler',
        'filtration_equipments_title' => 'Filtrasyon Ekipmanları',
        'welcome_message' => 'CEKA Endüstriyel Mühendislik\'e Hoşgeldiniz!',
        'intro_text' => 'Kaliteli tank ve filtrasyon sistemleri üreticisiyiz.',
        // Sayfa metinleri ve diğer çeviriler buraya eklenecek
    ],
    'en' => [
        'home' => 'Home',
        'contact' => 'Contact',
        'welcome' => 'Welcome',
        'page_title' => 'CEKA Industrial',
        'language' => 'Language',
        'mixer_tanks_title' => 'Mixer Tanks',
        'protein_skimmers_title' => 'Protein Skimmers',
        'sand_filters_title' => 'Sand Filters',
        'academy_title' => 'CEKA Academy',
        'aquaculture_tanks_title' => 'Aquaculture Tanks',
        'basic_filters_title' => 'Basic Filters',
        'compact_filters_title' => 'Compact Filters',
        'filtration_equipments_title' => 'Filtration Equipments',
        'welcome_message' => 'Welcome to CEKA Industrial Engineering!',
        'intro_text' => 'We are a quality producer of tanks and filtration systems.',
        // Sayfa metinleri ve diğer çeviriler buraya eklenecek
    ],
];

function t($key) {
    global $translations, $lang;
    return $translations[$lang][$key] ?? $key;
}
?>
