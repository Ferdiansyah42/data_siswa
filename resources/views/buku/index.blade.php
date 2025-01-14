@include('layout.header')
        <h3>buku</h3>
        <a href="{{ route('buku.create') }}" class="tombol">tambah</a>
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>judul Buku</th>
                    <th>Pengarang</th>
                    <th>Tahun</th>
                    <th>Penerbit</th>
                    <th>kategori</th>
                    <th>aksi</th>
                </tr>
            </thead>
            
        </table>
@include('layout.footer')