<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="/resources/css/app.css">
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/d3-org-chart@3"></script>
    <script src="https://cdn.jsdelivr.net/npm/d3-flextree@2.1.2/build/d3-flextree.js"></script>
    <title>Perpustakaan UNIMA</title>
</head>
<body class="h-full bg-gray-50">
<div class="min-h-full">
    <x-navbar></x-navbar>

    <div class="relative isolate pt-16">
        <!-- Section Home -->
        <x-home-section></x-home-section>
        <!-- Section Visi Misi -->
        <x-visi-misi-section></x-visi-misi-section>q
        <!-- Section Struktur -->
        <x-struktur-section></x-struktur-section>
        <!-- Section Pegawai -->
        <x-pegawai-section></x-pegawai-section>
        <!-- Section Buku -->
        <x-buku-section></x-buku-section>
    </div>
</div>
</body>
</html>
