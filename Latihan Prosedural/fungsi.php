<?php 
include "koneksi.php";

// ambil data mahasiswa
function getMahasiswa(){
    global $koneksi;
   
    return mysqli_query($koneksi, "SELECT * FROM mahasiswa");
}
//ambil data mahasiswa berdasarkan id
function getMahasiswaById($id){
    global $koneksi;
   return mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id=$id"));
}

/* simpan data mahasiswa */
function tambahMahasiswa($nim, $nama, $prodi) {
    global $koneksi;
    mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES (
        NULL,'$nim','$nama','$prodi'
    )");
}

/* update data mahasiswa */
function updateMahasiswa($id, $nim, $nama, $prodi) {
    global $koneksi;
    mysqli_query($koneksi, "UPDATE mahasiswa SET
        nim='$nim',
        nama='$nama',
        prodi='$prodi'
        WHERE id=$id
    ");
}

/* hapus data mahasiswa */
function hapusMahasiswa($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id=$id");
}

?>