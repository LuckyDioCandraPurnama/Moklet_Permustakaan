<?php
    //jika tombol simpan di tekan/klik
    if(isset($_POST['submit'])){
        $nama			= $_POST['nama'];
        $kelas	= $_POST['kelas'];
        $telp	= $_POST['telp'];

        $sql = mysqli_query($koneksi, "UPDATE t_anggota SET nama='$nama', kelas='$kelas', telp='$telp' WHERE id='$id'") or die(mysqli_error($koneksi));

        if($sql){
            echo '<script>alert("Berhasil menyimpan data."); document.location="edit_petugas.php?id='.$id.'";</script>';
        }else{
            echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
        }
    }
?>
