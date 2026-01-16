<?php include_once('Utils/lang.php'); ?>

<nav class="bg-[rgba(255,255,255,1)] border-gray-200 shadow-md <?php if (!$navbarmargin) { echo 'absolute'; } ?> w-full z-10">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/?lang=<?= $lang ?>" class="flex items-center space-x-1 rtl:space-x-reverse">
      <img src="/Files/CEKA.jpg" class="h-[4rem]" alt="CEKA Logo" />
    </a>

    <!-- Mobile toggle -->
    <button data-collapse-toggle="navbar-multi-level" type="button"
      class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
      aria-controls="navbar-multi-level" aria-expanded="false">
      <span class="sr-only">Menüyü Aç</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M1 1h15M1 7h15M1 13h15" />
      </svg>
    </button>

    <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">

        <!-- Ürünlerimiz Ana Menü -->
        <li class="relative group">
          <a href="#" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
            Ürünlerimiz
            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
          </a>

          <!-- ALT MENÜ -->
          <ul class="absolute hidden group-hover:block top-full left-0 bg-white shadow-lg rounded-md z-50 w-48">
            <!-- Tank Grubu -->
            <li class="relative group/tank">
              <!-- ✅ Tıklayınca tanklar.php açılıyor -->
              <a href="/tanklar.php?lang=<?= $lang ?>" class="flex justify-between items-center px-4 py-2 hover:bg-gray-100">
                Tank Grubu
                <svg class="w-2.5 h-2.5 ms-2.5" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
              </a>

              <!-- ✅ Sadece üç tank tipi, "Tüm Tanklar" YOK -->
              <ul class="absolute hidden group-hover/tank:block top-0 left-full bg-white shadow-lg rounded-md z-50 w-56">
                <li>
                  <a href="/tank-pp.php?lang=<?= $lang ?>" class="block px-4 py-2 hover:bg-gray-100">
                    Polipropilen Tanklar
                  </a>
                </li>
                <li>
                  <a href="/tank-pe.php?lang=<?= $lang ?>" class="block px-4 py-2 hover:bg-gray-100">
                    Polietilen Tanklar
                  </a>
                </li>
                <li>
                  <a href="/tank-ss.php?lang=<?= $lang ?>" class="block px-4 py-2 hover:bg-gray-100">
                    Paslanmaz Tanklar
                  </a>
                </li>
              </ul>
            </li>

            <!-- Filtrasyon Grubu -->
            <li class="relative group/filtrasyon">
              <a href="#" class="flex justify-between items-center px-4 py-2 hover:bg-gray-100">
                Filtrasyon Grubu
                <svg class="w-2.5 h-2.5 ms-2.5" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
              </a>
              <ul class="absolute hidden group-hover/filtrasyon:block top-0 left-full bg-white shadow-lg rounded-md z-50 w-56">
                <li><a href="/airfilter.php?lang=<?= $lang ?>" class="block px-4 py-2 hover:bg-gray-100">Hava Filtreleri</a></li>
                <li><a href="/waterfilter.php?lang=<?= $lang ?>" class="block px-4 py-2 hover:bg-gray-100">Su Filtreleri</a></li>
              </ul>
            </li>

            <!-- Pompa Grubu -->
            <li>
              <a href="/pump.php?lang=<?= $lang ?>" class="block px-4 py-2 hover:bg-gray-100">Pompa Grubu</a>
            </li>

            <!-- Fason Kesim -->
            <li>
              <a href="/cnc-kesim.php?lang=<?= $lang ?>" class="block px-4 py-2 hover:bg-gray-100">Fason Kesim</a>
            </li>
          </ul>
        </li>

        <!-- Teknik Bilgiler -->
        <li class="relative group">
          <a href="#" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
            Teknik Bilgiler
            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
          </a>
          <ul class="absolute hidden group-hover:block top-full left-0 bg-white shadow-lg rounded-md z-50 w-56">
            <li>
              <a href="/agirlikhesap.php?lang=<?= $lang ?>" class="block px-4 py-2 hover:bg-gray-100">Ağırlık Hesapla</a>
            </li>
            <!--
            <li>
              <a href="/fittings.php?lang=<?= $lang ?>" class="block px-4 py-2 hover:bg-gray-100">Standart Ölçüler</a>
            </li>
            -->
          </ul>
        </li>

        <!-- Diğer Sayfalar -->
        <li>
          <a href="/about-us.php?lang=<?= $lang ?>" class="block py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#0E3D83] md:p-0">
            Hakkımızda
          </a>
        </li>
        <li>
          <a href="/academy.php?lang=<?= $lang ?>" class="block py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#0E3D83] md:p-0">
            CEKA Akademi
          </a>
        </li>
        <li>
          <a href="/contact.php?lang=<?= $lang ?>" class="block py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#0E3D83] md:p-0">
            Bize Ulaşın
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
