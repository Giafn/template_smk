<nav class="bg-biru text-white w-full z-20 top-0 left-0 border-gray-200 sticky" style="border-bottom: 5px solid #ffdd01;">
    <ul class="navigation max-w-[90vw] flex flex-wrap justify-between items-center relative mx-auto lg:py-8 py-2">
        <input type="checkbox" id="check" />
        <div class="flex items-center gap-2 lg:gap-4">
            <img src="/img/logo.png" alt="192.168.43.210logo" class="h-10 lg:h-16">
            <div class="flex flex-col items-start gap-2">
                <h1 class="text-xl font-bold text-kuning lg:inline hidden">SMK WIDYA DIRGANTARA</h1>
                <h1 class="text-sm font-bold text-kuning lg:hidden">SMK WIDYA DIRGANTARA</h1>
                <h4 class="text-sm lg:text-gray-100 lg:inline hidden">Siap Kerja, Santun, Mandiri, Kreatif</h4>
            </div>
        </div>
        <span class="menu flex [&>li]:px-4 [&>li>a]:text-center [&>li>a]:relative [&>li>a]:transition [&>li>a]:duration-200 [&>li>a]:ease-in-out [&>li>a]:font-medium [&>li>a]:text-lg">
            <li class="nav-item actived"><a href="/">Beranda</a></li>
            <li class="nav-item">
                <a id="dropdownProfileButton" data-dropdown-toggle="dropdownProfile" class="nav-item hover:cursor-pointer font-sm">
                    Profil <i class="fas fa-caret-down ms-1"></i>
                </a>
                <div id="dropdownProfile" class="z-40 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                    <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownProfileButton">
                        <li>
                            <a href="/to_be_created" class="block px-4 py-2 hover:bg-gray-100">Sejarah</a>
                        </li>
                        <li>
                            <a href="/to_be_created" class="block px-4 py-2 hover:bg-gray-100">Visi Misi</a>
                        </li>
                        <li>
                            <a href="/to_be_created" class="block px-4 py-2 hover:bg-gray-100">Sambutan Kepala Sekolah</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a id="dropdownJurusanButton" data-dropdown-toggle="dropdownJurusan" class="nav-item hover:cursor-pointer">
                    Program Studi <i class="fas fa-caret-down ms-1"></i>
                </a>
                <div id="dropdownJurusan" class="z-40 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                    <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownJurusanButton">
                        <li>
                            <a href="/to_be_created" class="block px-4 py-2 hover:bg-gray-100">Teknik Komputer dan Jaringan</a>
                        </li>
                        <li>
                            <a href="/to_be_created" class="block px-4 py-2 hover:bg-gray-100">Teknik Kendaraan Ringan</a>
                        </li>
                        <li>
                            <a href="/to_be_created" class="block px-4 py-2 hover:bg-gray-100">Teknik Sepeda Motor</a>
                        </li>
                        <li>
                            <a href="/to_be_created" class="block px-4 py-2 hover:bg-gray-100">Teknik Permesinan</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item"><a href="/to_be_created">Ekstrakulikuler</a></li>
            <li class="nav-item"><a href="/to_be_created">Informasi</a></li>
            <li class="nav-item"><a href="/to_be_created">Kontak</a></li>
            
            <label for="check" class="close-menu absolute top-0 right-0 p-4 lg:hidden">
                <i class="fas fa-times"></i>
            </label>
        </span>
        
        <label for="check" class="open-menu py-6 d-flex lg:hidden justify-between">
            <i class="fas fa-bars"></i>
        </label>
    </ul>
</nav>