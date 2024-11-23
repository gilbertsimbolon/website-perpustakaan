<section id="buku" class="flex flex-col justify-start items-center pt-14 h-[calc(100vh-64px)] text-center text-white px-6" style="border: 1px solid black">
    <div class="w-5/6 mx-auto text-center h-5/6" style="border: 1px solid red">
        <h2 class="text-5xl font-bold font-serif text-gray-900" style="letter-spacing: 2px">DAFTAR BUKU</h2>
        < class="overflow-x-auto">
            <table class="table-auto w-full text-sm text-left text-gray-900 border-collapse border border-gray-200">
                <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Judul</th>
                        <th class="border border-gray-300 px-4 py-2">Penulis</th>
                        <th class="border border-gray-300 px-4 py-2">Penerbit</th>
                        <th class="border border-gray-300 px-4 py-2">ISBN</th>
                        <th class="border border-gray-300 px-4 py-2">Tahun Terbit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">{{ $book->id }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->judul }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->penulis }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->penerbit }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->isbn }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->tahun_terbit }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Navigasi Paginasi -->
        <div class="mt-4">
            {{ $books->links() }}
        </div>
    </div>
</section>