<?php
$queries = array();

if (!$_SERVER['QUERY_STRING']) {
    die ("Error: Invalid query");
}

parse_str($_SERVER['QUERY_STRING'], $queries);

if (!$queries['path'] || !$queries['scale']) {
    die ("Error: Invalid query params");
}

$scale = (float) $queries['scale'];

if ($scale > 1 || $scale < 0.05) {
    die ("Error: scale can't be more than 1 or lower than 0.05");
}

$filename = "{$_SERVER['DOCUMENT_ROOT']}/Files/{$queries['path']}";
if (!file_exists($filename)) {
    die ("Error: File does not exists.");
}

list($width, $height, $type, $attr) = getimagesize($filename);

if ($type == 2) { // jpg
    $image = imagecreatefromjpeg($filename);
} else if ($type == 3) { // png
    $image = imagecreatefrompng($filename);
} else {
    die ("Error: Unsupported file type.");
}

$target_width = round($width * $scale);
$target_height = round($height * $scale);

$imgResized = imagecreatetruecolor($target_width, $target_height);
if (!file_exists("{$_SERVER['DOCUMENT_ROOT']}/Utils/tmp/")) { 
    mkdir("{$_SERVER['DOCUMENT_ROOT']}/Utils/tmp/", 0777, true); 
} 
$newImagePath = "{$_SERVER['DOCUMENT_ROOT']}/Utils/tmp/" . uniqid();
if ($type == 2) {
    $newImagePath .= '.jpg';
    imagecopyresampled($imgResized, $image, 0, 0, 0, 0, $target_width, $target_height, $width, $height);
    imagejpeg($imgResized, $newImagePath);
    $filetype = 'image/jpeg';
} else if ($type == 3) {
    $newImagePath .= '.png';
    imagealphablending($imgResized, FALSE);
    imagesavealpha($imgResized, TRUE);
    imagecopyresampled($imgResized, $image, 0, 0, 0, 0, $target_width, $target_height, $width, $height);
    imagepng($imgResized, $newImagePath);
    $filetype = 'image/png';
}


header('Content-Type:' . $filetype);
header('Content-Length: ' . filesize($newImagePath));
readfile($newImagePath);

unlink($newImagePath)

    /*



    // send the right headers
    header("Content-Type: image/png");
    header("Content-Length: " . filesize($imgResized));

    // dump the picture and stop the script
    fpassthru($imgResized);


    $path_info = pathinfo($path);



    foreach ($path_info as $info => $value) {
        echo "" . $info . "->" . $value . " ";

    }
    */
    ?>