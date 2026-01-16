<section>

<?php
foreach ($Images as $name => $image) {
    $willbeadded = "";
    $willbenamed = "";
    if (!startsWith($name, '$nil')) {
        $willbenamed = $name;
        $willbeadded = "<figcaption class=\"mt-2 text-sm text-center text-gray-500\">{$name}</figcaption>";
    }
    echo '
<div id="' . $name . '_fullview" data-image-modal="true" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    ' . $willbenamed . '
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="' . $name . '_fullview">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-4 md:p-5 space-y-4">
                <figure>
                    <img class="w-full h-auto rounded-lg border-1 shadow-md border-gray-300" data-src="/Files/' . $image . '" alt="{$name}">
                    ' . $willbeadded . '
                </figure>
            </div>
        </div>
    </div>
</div>
        ';
}
?>

<div class="flex justify-center mt-5">
    <h2 class="mb-4 text-3xl font-extrabold text-gray-900 md:text-5xl lg:text-6xl">
        <span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-700 from-blue-900"><?php echo $title ?></span> <span class="text-gray-400 text-2xl"><?php echo $subtitle ?></span>
    </h2>
</div>
<div class="flex items-center justify-center p-4">
    <div class="relative shadow-md sm:rounded-lg max-w-[280rem] w-max  max-h-[40rem] overflow-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase">
                <tr class="sticky top-0 shadow-md z-[3]">
                    <th scope="col" class="shadow-[inset_-1px_0_#e5e7eb] px-6 py-3 bg-gray-50 sticky left-0">
                        Model
                    </th>
                    <?php
                    $add = false;
                    foreach ($Models as $ModelName => $value) {
                        if ($ModelName == '$PROPERTIES') {
                            continue;
                        }
                        $class = "";
                        if ($add) {
                            $class = "bg-gray-50";
                        } else {
                            $class = "bg-white";
                        }
                        $add = !$add;
                        echo "
                                <th scope=\"col\" class=\"px-6 py-3 {$class}\">
                                    {$ModelName}
                                </th>
                            ";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($Models['$PROPERTIES'] as $index => $property) {
                    $datas = '';
                    $add = false;
                    foreach ($Models as $ModelName => $value) {
                        if ($ModelName == '$PROPERTIES') {
                            continue;
                        }
                        $class = "";
                        if ($add) {
                            $class = "bg-gray-50";
                        }
                        $add = !$add;
                        $datas .= "
                            <td class=\"px-6 py-4 {$class}\">
                                {$Models[$ModelName][$index]}
                            </td>
                        ";
                    }
                    echo "
                        <tr class=\"border-b border-gray-200\">
                            <th scope=\"row\" class=\"shadow-[inset_-1px_0_#e5e7eb] z-[2] sticky left-0 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50\">
                                {$property}
                            </th>
                            {$datas}
                        </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<div class="flex justify-center items-center p-3 flex-wrap gap-5">
    <?php
    foreach ($Images as $name => $image) {
        $willbeadded = "";
        if (!startsWith($name, '$nil')) {
            $willbeadded = '<figcaption class="mt-2 text-sm text-center text-gray-500">' . $name . '</figcaption>';
        }
        echo '
                <figure data-modal-target="' . $name . '_fullview" data-modal-toggle="' . $name . '_fullview" class="cursor-pointer max-w-2xl">
                    <img class="h-auto max-w-full rounded-lg border-1 shadow-md border-gray-300 object-contain" src="/Utils/image-getter.php?path=' . $image . '&scale=0.4" alt="' . $name . '">
                    ' . $willbeadded . '
                </figure>
            ';
    }
    ?>
</div>
</section>