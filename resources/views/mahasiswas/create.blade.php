<h1>Input Mahasiswa</h1>

<form action="" method="POST">
    @csrf
    Nama:<input type="text" name="nama">
    Jurusan:<input type="text" name="jurusan">
    NIM:<input type="text" name="nim">
    Image URL: <input type="text" name="image_url">
    
    <input type="submit" value="save">
    
</form>