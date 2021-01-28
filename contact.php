<?php

include("config.php");

// cek apakah tombol kirim pesan sudah diklik atau belum?
if (isset($_POST['send'])) {
    $namapengirim = $_POST['namapengirim'];
    $emailpengirim = $_POST['emailpengirim'];
    $kategoripesan = $_POST['kategoripesan'];
    $subjekpesan = $_POST['subjekpesan'];
    $isipesan = $_POST['isipesan'];
    $tanggal = date('Y-m-d');

    // buat query
    $sql = "INSERT INTO kontak_kami (namapengirim, tanggalkirim, emailpengirim, subjekpesan, isipesan, kategoripesan) VALUES ('$namapengirim','$tanggal', '$emailpengirim', '$subjekpesan', '$isipesan', '$kategoripesan')";
    $query = mysqli_query($db, $sql);

    if ($query) {

        header('Location: contact.php?status=sukses');
    } else {

        header('Location: contact.php?status=gagal');
    }
}

?>
<?php echo file_get_contents("./include/header.php") ?>
<div class="content">
    <?php if (isset($_GET['status'])) : ?>
        <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "<div id='info' class='alert alert-success'>Pesan berhasil terkirim!</div>";
            } else {
                echo "<div id='info' class='alert alert-danger'>Pesan gagal terkirim!</div>";
            }
            ?>
        </p>
    <?php endif; ?>
    <div class="title">Hubungi Kami</div>
    <div class="form">
        <form onsubmit="return validateFormOnSubmit(this)" action="" method="POST">
            <label for="namapengirim"><span>Nama Lengkap</span><input type="text" class="input-field" name="namapengirim" id="namapengirim" /></label>
            <label for="emailpengirim"><span>Email</span><input type="email" class="input-field" name="emailpengirim" id="emailpengirim" /></label>
            <label for="kategoripesan"><span>Kategori</span>
                <select name="kategoripesan" id="kategoripesan" class="select-field">
                    <option disabled selected value> -- pilih kategori -- </option>
                    <?php
                    $sql = "SELECT * FROM kategori_pesan";
                    $query = mysqli_query($db, $sql);
                    while ($kategori = mysqli_fetch_array($query)) {
                        echo "<option value='" . $kategori['namakategori'] . "'>" . $kategori['namakategori'] . "</option>";
                    }
                    ?>
                </select>
            </label>
            <label for="subjekpesan"><span>Subjek Pesan</span><input type="text" class="input-field" name="subjekpesan" id="subjekpesan" /></label>
            <label for="isipesan"><span>Isi Pesan</span><textarea rows="10" type="text" class="input-field" name="isipesan" id="isipesan"></textarea></label>
            <div class="button">
                <button type="submit" name="send" id="send" class="btn btn-kirimpesan">Kirim Pesan</button>
                <button onsubmit="clear()" type="submit" name="batal" id="batal" class="btn btn-batal">Batal</button>
            </div>
        </form>
    </div>
</div>
<?php echo file_get_contents("./include/footer.php") ?>