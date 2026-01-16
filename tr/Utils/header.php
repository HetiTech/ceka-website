<?php
function startsWith($string, $prefix)
{
    return substr($string, 0, strlen($prefix)) == $prefix;
}

// HTTPS yönlendirmesi (isteğe bağlı)
/*
if (!(startsWith($_SERVER["HTTP_HOST"], "localhost") || startsWith($_SERVER["HTTP_HOST"], "127.0.0.1")) && (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off")) {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}
*/

// Varsayılan açıklama
if (!isset($description)) {
    $description = "CEKA Endüstriyel, plastik tanklar, filtrasyon sistemleri ve mühendislik çözümleri sunar. Kimya, akuakültür, gemi inşa gibi sektörlere özel çözümler.";
}

// Canonical URL (temel SEO için)
$canonicalUrl = 'https://www.cekaendustriyel.com' . $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= htmlspecialchars($title) ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://www.cekaendustriyel.com/Files/logo-circular-bg.png">

    <!-- Canonical -->
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>">

    <!-- Fonts & Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- SEO Meta Tags -->
    <meta name="description" content="<?= htmlspecialchars($description) ?>">
    <meta name="keywords" content="CEKA, endüstriyel tank, plastik tank, polietilen tank, polipropilen tank, paslanmaz tank, kimyasal tank, paslanmaz filtre, akuakültür sistemleri, RAS sistemleri, kimya tankı, PE tank, PP tank, mühendislik çözümleri, gemi inşa, filtrasyon sistemleri">
    <meta name="author" content="CEKA Endüstriyel">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($description) ?>">
    <meta property="og:image" content="https://www.cekaendustriyel.com/Files/logo-circular-bg.png">
    <meta property="og:url" content="https://www.cekaendustriyel.com<?= $_SERVER['REQUEST_URI'] ?>">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($title) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($description) ?>">
    <meta name="twitter:image" content="https://www.cekaendustriyel.com/Files/logo-circular-bg.png">

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R7HCGET2HX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-R7HCGET2HX');
    </script>
</head>

<body>
