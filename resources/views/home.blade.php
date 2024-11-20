<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="/resources/css/app.css">
    <title>Perpustakaan UNIMA</title>
</head>
<body class="h-full bg-gray-50">
<div class="min-h-full">
    <x-navbar></x-navbar>

    <x-header></x-header>
    <div class="relative isolate pt-16">
        <!-- Section Home -->
        <section id="home" class="flex flex-col justify-center items-center h-[calc(100vh-64px)] text-center text-white px-6" style="border: 1px solid black">
            <div class="w-3/4 mx-auto">
                <!-- Gambar -->
                <img src="https://unima.ac.id/uploads/img_logo/1650416196421.png" alt="Logo Unima" class="size-40 mx-auto rounded-lg">
                
                <!-- Judul -->
                <h1 class="mt-8 text-4xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    PERPUSTAKAAN UNIVERSITAS NEGERI MANADO
                </h1>

                <!-- Deskripsi -->
                <p class="mt-4 w-full text-lg text-justify indent-14 text-gray-700">
                    Perpustakaan Universitas Negeri Manado (UNIMA) adalah pusat informasi dan pembelajaran yang dirancang untuk mendukung aktivitas akademik, penelitian, dan pengembangan ilmu pengetahuan di lingkungan universitas. Dengan koleksi yang beragam, mulai dari buku teks, jurnal ilmiah, skripsi, hingga sumber digital, perpustakaan ini menjadi pusat referensi yang komprehensif bagi mahasiswa, dosen, dan staf akademik.
                    Mengintegrasikan teknologi modern, perpustakaan UNIMA menyediakan layanan digital yang memungkinkan akses ke e-book, jurnal elektronik, dan database ilmiah internasional. Ruang baca yang nyaman, area diskusi, dan fasilitas multimedia menjadikan perpustakaan ini sebagai tempat yang ideal untuk belajar dan berkolaborasi.
                    Komitmen perpustakaan UNIMA terhadap keberlanjutan pendidikan tercermin dalam program-programnya, seperti pelatihan literasi informasi, seminar, dan layanan konsultasi akademik. Dengan visi menjadi perpustakaan unggul di tingkat nasional dan internasional, perpustakaan UNIMA terus berinovasi dalam memberikan pelayanan terbaik kepada seluruh sivitas akademika.Perpustakaan Universitas Negeri Manado (UNIMA) adalah pusat informasi dan pembelajaran yang dirancang untuk mendukung aktivitas akademik, penelitian, dan pengembangan ilmu pengetahuan di lingkungan universitas. Dengan koleksi yang beragam, mulai dari buku teks, jurnal ilmiah, skripsi, hingga sumber digital, perpustakaan ini menjadi pusat referensi yang komprehensif bagi mahasiswa, dosen, dan staf akademik.
                    Mengintegrasikan teknologi modern, perpustakaan UNIMA menyediakan layanan digital yang memungkinkan akses ke e-book, jurnal elektronik, dan database ilmiah internasional. Ruang baca yang nyaman, area diskusi, dan fasilitas multimedia menjadikan perpustakaan ini sebagai tempat yang ideal untuk belajar dan berkolaborasi.
                </p>
            </div>
        </section>
        <!--Section Visi Misi-->
        <section id="visi-misi" class="flex flex-col justify-start items-center pt-14 h-[calc(100vh-64px)] text-center text-white px-6" style="border: 1px solid black">
            <div class="max-w-7xl mx-auto text-center h-4/6" style="border: 3px solid red">
                <h2 class="text-5xl font-bold font-serif text-gray-900" style="letter-spacing: 3px">VISI & MISI</h2>
                <div class="mt-12 flex flex-col lg:flex-row gap-10 font-serif h-full">
                    <!-- Bagian Visi -->
                    <div class="flex-1 px-8 py-8" style="border: 1px solid black">
                        <h3 class="text-3xl font-semibold text-gray-800 text-left">VISI</h3>
                        <p class="mt-4 text-lg text-gray-700 text-justify tracking-wide">
                        Menyediakan perpustakaan yang unggul dengan fasilitas yang lengkap dan mampu memberikan pelayanan yang berkualitas kepada pengguna dengan berbasis pada teknologi.
                        </p>
                    </div>

                    <!-- Garis Vertikal -->
                    <div class="border-l-2 border-gray-300 min-h-full mx-4"></div>

                    <!-- Bagian Misi -->
                    <div class="flex-1 px-8 py-8" style="border: 1px solid black">
                        <h3 class="text-3xl font-semibold text-gray-800 text-right">MISI</h3>                            <p class="mt-4 text-lg text-gray-700 text-justify tracking-wide">
                            1. Menyelenggarakan pendidikan tinggi yang berkualitas dan relevan dengan kebutuhan masyarakat.<br>
                            2. Melakukan penelitian untuk pengembangan ilmu pengetahuan yang bermanfaat bagi masyarakat.<br>
                            3. Mengabdi kepada masyarakat melalui pengabdian yang berbasis pada penelitian dan pengembangan.
                        </p>
                    </div>
                </div>
            </div>
            {{-- <div class="mt-16">
                <img src="{{ asset('img/undraw_summer_1wi4.svg') }}" alt="Illustration" class="mx-auto max-w" style="border: 1px solid black">
            </div> --}}
        </section>
        <!-- Section -->
    </div>
</div>
</body>
</html>
