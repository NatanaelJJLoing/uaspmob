<h1>List Mahasiswa</h1>
<table>
    <thead>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>NIM</th>
    </thead>
    <tbody>
        @foreach ($mahasiswas as $mahasiswa)
            <tr>
                <td>{{$mahasiswa->nama}}</td> 
                <td>{{$mahasiswa->jurusan}}</td>
                <td>{{$mahasiswa->nim}}</td>
            </tr>
        @endforeach
    </tbody>

    <a href="/mahasiswas/create">Create</a>
</table>