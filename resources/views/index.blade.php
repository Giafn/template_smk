@extends('layouts.app')

@section('content')

<div class="w-full lg:px-36 px-5 bg-cover bg-center bg-no-repeat " style="background: linear-gradient(210deg, #22b2ba, #104e86);"> 
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
        <div class="flex  flex-col items-start justify-center p-4 lg:ps-24 lg:pb-16">
            <h4 class="text-white mb-2">Layanan Informasi Digital</h4>
            <h1 class="text-4xl font-bold text-white">SMK Widya Dirgantara</h1>
            <p class="text-white">SMK Widya Dirgantara adalah sekolah terbaik di Indonesia yang berdiri sejak tahun 2000. SMK Widya Dirgantara memiliki program studi yang berkualitas dan berstandar nasional.</p>
            <a href="/to_be_created" class="bg-kuning text-biru py-2 px-4 rounded-full mt-4 font-bold border-2 border-white">Daftar Sekarang !</a>
        </div>
        <div class="flex items-center justify-center xl:pt-32 pt-10">
            <img src="https://smartschool.smansapolewali.sch.id/upload/d46e6ec320de16dea69c4dbf1a426c4f.png" alt="logo" class="w-full">
        </div>
    </div>
</div>

<div class="w-full bg-putih lg:pt-10 lg:pb-5 lg:px-36 px-5 py-5">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-5">
        <div class="col-span-1 bg-biru text-white p-8 rounded-3xl">
            <h1 class="text-xl font-bold text-kuning">Sejarah</h1>
            <p class="text-sm mt-3">SMK Widya Dirgantara berdiri sejak tahun 2000 dan telah meluluskan ribuan siswa yang berkualitas.</p>
            <a href="/to_be_created" class="text-sm text-kuning mt-3">Baca Selengkapnya<i class="fas fa-arrow-right ms-1"></i></a>
        </div>
        <div class="col-span-1 bg-biru text-white p-8 rounded-3xl">
            <h1 class="text-xl font-bold text-kuning">Visi Misi</h1>
            <p class="text-sm mt-3">Visi SMK Widya Dirgantara adalah menjadi sekolah terbaik di Indonesia dan memiliki lulusan yang berkualitas.</p>
            <a href="/to_be_created" class="text-sm text-kuning mt-3">Baca Selengkapnya<i class="fas fa-arrow-right ms-1"></i></a>
        </div>
        <div class="col-span-1 bg-biru text-white p-8 rounded-3xl">
            <h1 class="text-xl font-bold text-kuning">Sambutan Kepala Sekolah</h1>
            <p class="text-sm mt-3">Selamat datang di SMK Widya Dirgantara, sekolah terbaik di Indonesia. Kami siap membantu anda dalam menempuh pendidikan.</p>
            <a href="/to_be_created" class="text-sm text-kuning mt-3">Baca Selengkapnya<i class="fas fa-arrow-right ms-1"></i></a>
        </div>
    </div>
    <div class="lg:mb-16 lg:mt-20 mt-10 mb-10">
        <div class="mb-10 text-center">
            <h2 class="text-2xl lg:text-3xl font-bold text-biru">Profil SMK Widya Dirgantara</h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 items-center">
            <div class="col-span-1">
                <h3 class="text-xl font-bold text-biru mb-4">
                    SMK Widya Dirgantara
                </h3>
                <p class="text-md text-gray-600">SMK Widya Dirgantara adalah sekolah terbaik di Indonesia yang berdiri sejak tahun 2000. SMK Widya Dirgantara memiliki program studi yang berkualitas dan berstandar nasional. SMK Widya Dirgantara memiliki fasilitas yang lengkap dan modern. SMK Widya Dirgantara memiliki tenaga pengajar yang berkualitas dan berpengalaman. SMK Widya Dirgantara memiliki program kegiatan eks Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima debitis sunt itaque porro quod, explicabo nobis eius iste non aut iure odit pariatur cupiditate asperiores eum, labore atque ab at, vitae deserunt est veniam sapiente animi nihil. Vel sit laudantium necessitatibus nemo itaque perferendis deserunt natus asperiores aut harum velit, hic vitae enim esse odio iusto recusandae beatae debitis facilis fuga autem. Cupiditate animi soluta ex totam, est quam nam vel suscipit eius quis, repellendus asperiores, nemo temporibus recusandae aspernatur doloribus necessitatibus. Eum non, molestias facilis saepe velit maxime facere rem. Eius eos non fugit. Praesentium mollitia ex ab ullam.
                </p>
            </div>
            <div class="col-span-1 flex justify-center embed-wrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/C9eirG99vwI?si=T_fp_aQPRqt2t07K" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

{{-- sambutan kepala sekolah start --}}
<div class="w-full bg-putih lg:py-10 lg:px-36 px-5 py-5">
    <div class="mb-10 text-center">
        <h2 class="text-2xl lg:text-3xl font-bold text-biru">Sambutan Kepala Sekolah</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 items-center">
        <div class="col-span-1 flex justify-center items-center">
            <img src="/img/guru/payayat.png" alt="logo" class="rounded-3xl shadow-md lg:w-4/6 md:w-5/6 w-full">
        </div>
        <div class="col-span-1">
            <p class="text-md text-gray-600">SMK Widya Dirgantara adalah sekolah terbaik di Indonesia yang berdiri sejak tahun 2000. SMK Widya Dirgantara memiliki program studi yang berkualitas dan berstandar nasional. SMK Widya Dirgantara memiliki fasilitas yang lengkap dan modern. SMK Widya Dirgantara memiliki tenaga pengajar yang berkualitas dan berpengalaman. SMK Widya Dirgantara memiliki program kegiatan eks Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima debitis sunt itaque porro quod, explicabo nobis eius iste non aut iure odit pariatur cupiditate asperiores eum, labore atque ab at, vitae deserunt est veniam sapiente animi nihil. Vel sit laudantium necessitatibus nemo itaque perferendis deserunt natus asperiores aut harum velit, hic vitae enim esse odio iusto recusandae beatae debitis facilis fuga autem. Cupiditate animi soluta ex totam, est quam nam vel suscipit eius quis, repellendus asperiores, nemo temporibus recusandae aspernatur doloribus necessitatibus. Eum non, molestias facilis saepe velit maxime facere rem. Eius eos non fugit. Praesentium mollitia ex ab ullam.
            </p>
        </div>
    </div>
</div>

{{-- program studi start --}}
<div class="container mx-auto px-4 py-5">
    <h1 class="text-2xl lg:text-3xl font-bold mb-6 text-center text-biru">Program Studi</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        <div class="flex lg:flex-col justify-start item-start lg:items-center p-6 bg-white rounded-lg shadow-lg border border-gray-200">
            <i class="fa-solid fa-computer mx-3 text-biru text-2xl lg:text-6xl mb-4 my-auto"></i>
            <span class="text-xl font-medium">Teknik Komputer dan Jaringan</span>
        </div>
        <div class="flex lg:flex-col justify-start item-start lg:items-center p-6 bg-white rounded-lg shadow-lg border border-gray-200">
            <i class="fa-solid fa-car-side mx-3 text-biru text-2xl lg:text-6xl mb-4 my-auto"></i>
            <span class="text-xl font-medium">Teknik Kendaraan Ringan</span>
        </div>
        <div class="flex lg:flex-col justify-start item-start lg:items-center p-6 bg-white rounded-lg shadow-lg border border-gray-200">
            <i class="fa-solid fa-motorcycle mx-3 text-biru text-2xl lg:text-6xl mb-4 my-auto"></i>
            <span class="text-xl font-medium">Teknik Sepeda Motor</span>
        </div>
        <div class="flex lg:flex-col justify-start item-start lg:items-center p-6 bg-white rounded-lg shadow-lg border border-gray-200">
            <i class="fas fa-cogs mx-3 text-biru text-2xl lg:text-6xl mb-4 my-auto"></i>
            <span class="text-xl font-medium">Teknik Permesinan</span>
        </div>
    </div>
</div>
{{-- program studi end --}}

{{-- fasilias start --}}
<div class="w-full bg-white lg:py-10 lg:px-36 px-5 py-5">
    <div class="mb-10 text-center">
        <h2 class="text-2xl lg:text-3xl font-bold text-biru">Fasilitas SMK Widya Dirgantara</h2>
    </div>
    <div class="flex justify-center flex-wrap gap-5">
        <div class="flex justify-center lg:w-3/12 md:w-2/5 w-full text-white p-5 rounded-3xl" style="background: linear-gradient(210deg, #22b2ba, #104e86);">
            <div>
                <img src="https://www.tangerangkota.go.id/files/berita/40075perpustakaan-daerah-kota-tangerang-sediakan-beragam-ribuan-koleksi-buku-40075.jpeg" alt="Perpustakaan" class="w-full h-48 lg:h-96 object-cover rounded-3xl mb-3">
                <h1 class="text-xl font-bold text-kuning">Perpustakaan</h1>
                <p class="text-sm mt-3">Perpustakaan SMK Widya Dirgantara memiliki koleksi buku yang lengkap dan terbaru.</p>
                <a href="/to_be_created" class="text-sm text-kuning mt-3 inline-flex items-center">Lihat Selengkapnya <i class="fas fa-arrow-right ms-1"></i></a>
            </div>
        </div>
        <div class="flex justify-center lg:w-3/12 md:w-2/5 w-full text-white p-5 rounded-3xl" style="background: linear-gradient(210deg, #22b2ba, #104e86);">
            <div>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR58HetTduVNmOUOsP-RhmIVd04XIyVDRaeAQ&s" alt="Perpustakaan" class="w-full h-48 lg:h-96 object-cover rounded-3xl mb-3">
                <h1 class="text-xl font-bold text-kuning">Laboratorium</h1>
                <p class="text-sm mt-3">Laboratorium SMK Widya Dirgantara memiliki peralatan yang lengkap dan modern.</p>
                <a href="/to_be_created" class="text-sm text-kuning mt-3 inline-flex items-center">Lihat Selengkapnya <i class="fas fa-arrow-right ms-1"></i></a>
            </div>
        </div>
        <div class="flex justify-center lg:w-3/12 md:w-2/5 w-full text-white p-5 rounded-3xl" style="background: linear-gradient(210deg, #22b2ba, #104e86);">
            <div>
                <img src="https://cdn.antaranews.com/cache/1200x800/2022/11/01/Picsart_22-11-01_12-05-50-664.jpg" alt="Perpustakaan" class="w-full h-48 lg:h-96 object-cover rounded-3xl mb-3">
                <h1 class="text-xl font-bold text-kuning">Kantin</h1>
                <p class="text-sm mt-3">Kantin SMK Widya Dirgantara menyediakan makanan yang sehat dan bergizi.</p>
                <a href="/to_be_created" class="text-sm text-kuning mt-3 inline-flex items-center">Lihat Selengkapnya <i class="fas fa-arrow-right ms-1"></i></a>
            </div>
        </div>
    </div>
</div>
{{-- fasilias end --}}

{{-- list guru start --}}
<div class="w-full text-white lg:py-10 lg:px-36 px-5 py-5" style="background: linear-gradient(210deg, #22b2ba, #104e86);">
    <div class="mb-10 text-center">
        <h2 class="text-2xl lg:text-3xl font-bold text-kuning">Daftar Guru SMK Widya Dirgantara</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mb-5">
        <div class="col-span-1 bg-putih text-gray-500 p-4 rounded-3xl border border-gray-200 shadow-md flex flex-col">
            <img src="/img/guru/pa_teguh.jpg" alt="gambar" class="w-full h-48 lg:h-96 object-cover rounded-3xl mb-3">
            <div class="flex-1">
                <h3 class="text-lg font-bold text-biru mb-2">Teguh S.Kom.</h3>
                <p class="text-sm mb-2">Guru dan Kaprog Teknik Komputer dan Jaringan</p>
                <a href="/to_be_created" class="text-sm text-biru flex items-center">Lihat Profil<i class="fas fa-arrow-right ms-1"></i></a>
            </div>
        </div>
        <div class="col-span-1 bg-putih text-gray-500 p-4 rounded-3xl border border-gray-200 shadow-md flex flex-col">
            <img src="/img/guru/pa_ronal.jpg" alt="gambar" class="w-full h-48 lg:h-96 object-cover rounded-3xl mb-3">
            <div class="flex-1">
                <h3 class="text-lg font-bold text-biru mb-2">Ronal G S.Pd.</h3>
                <p class="text-sm mb-2">Guru Teknik Kendaraan Ringan</p>
                <a href="/to_be_created" class="text-sm text-biru flex items-center">Lihat Profil<i class="fas fa-arrow-right ms-1"></i></a>
            </div>
        </div>
        <div class="col-span-1 bg-putih text-gray-500 p-4 rounded-3xl border border-gray-200 shadow-md flex flex-col">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Unknown_person.jpg/694px-Unknown_person.jpg" alt="gambar" class="w-full h-48 lg:h-96 object-cover rounded-3xl mb-3">
            <div class="flex-1">
                <h3 class="text-lg font-bold text-biru mb-2">Dewi Lestari</h3>
                <p class="text-sm mb-2">Guru Teknik Sepeda Motor</p>
                <a href="/to_be_created" class="text-sm text-biru flex items-center">Lihat Profil<i class="fas fa-arrow-right ms-1"></i></a>
            </div>
        </div>
        <div class="col-span-1 bg-putih text-gray-500 p-4 rounded-3xl border border-gray-200 shadow-md flex flex-col">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Unknown_person.jpg/694px-Unknown_person.jpg" alt="gambar" class="w-full h-48 lg:h-96 object-cover rounded-3xl mb-3">
            <div class="flex-1">
                <h3 class="text-lg font-bold text-biru mb-2">Rudi Hartono</h3>
                <p class="text-sm mb-2">Guru Teknik Permesinan</p>
                <a href="/to_be_created" class="text-sm text-biru flex items-center">Lihat Profil<i class="fas fa-arrow-right ms-1"></i></a>
            </div>
        </div>
    </div>
    <div class="flex justify-center w-full">
        <a href="/to_be_created" class="text-white py-2 px-4 rounded-full mt-4 font-bold border-2 border-white">Lihat Semua Guru</a>
    </div>
</div>
{{-- list guru end --}}

{{-- info start --}}
<div class="w-full bg-putih lg:py-10 lg:px-36 px-5 py-5">
    <div class="">
        <div class="mb-10 text-center">
            <h2 class="text-2xl lg:text-3xl font-bold text-biru">Informasi dan Berita Terbaru</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-5">
            <!-- Card 1 -->
            <div class="col-span-1 lg:col-span-2 bg-white text-gray-500 p-4 rounded-md border border-gray-200 shadow-md flex flex-col">
                <img src="/img/slider/juaraPramuka.jpg" alt="gambar" class="w-full h-48 lg:h-96 object-cover rounded-md mb-3">
                <div class="flex-1">
                    <h3 class="text-lg font-bold text-biru mb-2" style="border-bottom: 4px solid #ffdd01;">SMK WD Juara Pramuka</h3>
                    <p class="text-sm mb-2">Program studi Teknik Komputer dan Jaringan adalah program studi yang berkualitas dan berstandar nasional.</p>
                    <a href="/to_be_created" class="text-sm text-biru flex items-center">Baca Selengkapnya<i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-span-1 lg:col-span-1 bg-white text-gray-500 p-4 rounded-md border border-gray-200 shadow-md flex flex-col">
                <img src="/img/slider/pendekar.jpg" alt="gambar" class="w-full h-48 lg:h-96 object-cover rounded-md mb-3">
                <div class="flex-1">
                    <h3 class="text-lg font-bold text-biru mb-2" style="border-bottom: 4px solid #ffdd01;">Pendekar Zulfi</h3>
                    <p class="text-sm mb-2">Program studi Teknik Kendaraan Ringan adalah program studi yang berkualitas dan berstandar nasional.</p>
                    <a href="/to_be_created" class="text-sm text-biru flex items-center">Baca Selengkapnya<i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-span-1 lg:col-span-1 bg-white text-gray-500 p-4 rounded-md border border-gray-200 shadow-md flex flex-col">
                <img src="/img/slider/pembangunan.jpg" alt="gambar" class="w-full h-48 lg:h-96 object-cover rounded-md mb-3">
                <div class="flex-1">
                    <h3 class="text-lg font-bold text-biru mb-2" style="border-bottom: 4px solid #ffdd01;">Pembangunan Lantai 2</h3>
                    <p class="text-sm mb-2">Program studi Teknik Kendaraan Ringan adalah program studi yang berkualitas dan berstandar nasional.</p>
                    <a href="/to_be_created" class="text-sm text-biru flex items-center">Baca Selengkapnya<i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-span-1 lg:col-span-1 bg-white text-gray-500 p-4 rounded-md border border-gray-200 shadow-md flex flex-col">
                <img src="/img/slider/kegiatanStudiTour.jpg" alt="gambar" class="w-full h-48 lg:h-96 object-cover rounded-md mb-3">
                <div class="flex-1">
                    <h3 class="text-lg font-bold text-biru mb-2" style="border-bottom: 4px solid #ffdd01;">Studi Tour</h3>
                    <p class="text-sm mb-2">Program studi Teknik Kendaraan Ringan adalah program studi yang berkualitas dan berstandar nasional.</p>
                    <a href="/to_be_created" class="text-sm text-biru flex items-center">Baca Selengkapnya<i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-span-1 lg:col-span-1 bg-white text-gray-500 p-4 rounded-md border border-gray-200 shadow-md flex flex-col">
                <img src="/img/slider/goldMedal.jpg" alt="gambar" class="w-full h-48 lg:h-96 object-cover rounded-md mb-3">
                <div class="flex-1">
                    <h3 class="text-lg font-bold text-biru mb-2" style="border-bottom: 4px solid #ffdd01;">Pemenang Medali Emas</h3>
                    <p class="text-sm mb-2">Program studi Teknik Kendaraan Ringan adalah program studi yang berkualitas dan berstandar nasional.</p>
                    <a href="/to_be_created" class="text-sm text-biru flex items-center">Baca Selengkapnya<i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
    {{-- lihat semua  --}}
    <div class="flex justify-center w-full">
        <a href="/to_be_created" class="text-biru py-2 px-4 rounded-full mt-4 font-bold border-2 border-biru">Lihat Semua Berita</a>
    </div>
</div>
{{-- info end --}}

{{-- modal auto open on load --}}
<div class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center z-50">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    <div class="modal-container bg-white w-11/12 md:max-w-5xl mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Pengumuman</p>
                <div class="modal-close cursor-pointer z-50" onclick="closeModal()">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M18 1.5l-1.5-1.5-6 6-6-6-1.5 1.5 6 6-6 6 1.5 1.5 6-6 6 6 1.5-1.5-6-6z"></path>
                    </svg>
                </div>
            </div>
            <!--Body-->
            <p>Modal content can go here</p>
            <!--Footer-->
            <div class="flex justify-end pt-2">
                <button class="modal-close px-4 bg-kuning p-3 rounded-lg text-biru hover:bg-kuning" onclick="closeModal()">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection