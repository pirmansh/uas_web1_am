<?php

include("config.php");

// cek apakah tombol kirim pesan sudah diklik atau belum?
if (isset($_POST['send'])) {
    $nmlengkap = $_POST['nmlengkap'];
    $email = $_POST['email'];
    $jnskelamin = $_POST['jnskelamin'];
    $provinsi = $_POST['provinsi'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];
    $kodepos = $_POST['kodepos'];

    // buat query
    $sql = "INSERT INTO registrasi (nmlengkap, email, jnskelamin, provinsi, alamat, kodepos, nohp) VALUES ('$nmlengkap', '$email', '$jnskelamin', '$provinsi', '$alamat', '$kodepos', '$nohp')";
    $query = mysqli_query($db, $sql);

    if ($query) {

        header('Location: registrasi.php?status=sukses');
    } else {

        header('Location: registrasi.php?status=gagal');
    }
}

?>
<?php echo file_get_contents("./include/header.php") ?>
<div class="content">
    <?php if (isset($_GET['status'])) : ?>
        <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "<div id='info' class='alert alert-success'>Registrasi Anda Berhasil di Prosess!!</div>";
            } else {
                echo "<div id='info' class='alert alert-danger'>Registrasi Anda Berhasil Gagal!!</div>";
            }
            ?>
        </p>
    <?php endif; ?>
    <div class="title">Registrasi</div>
    <div class="form">
        <form onsubmit="return validateFormRegistrasi(this)" action="" method="POST">
            <label for="nmlengkap"><span>Nama Lengkap</span><input type="text" class="input-field" name="nmlengkap" id="nmlengkap" /></label>
            <label for="email"><span>Email</span><input type="email" class="input-field" name="email" id="email" /></label>
            <label for="jnskelamin"><span>Jenis Kelamin</span><input type="radio" class="radio" name="jnskelamin" id="lakilaki" value="LK" /> Laki-laki <input type="radio" class="radio" name="jnskelamin" id="perempuan" value="PR" /> Perempuan </label>
            <label for="nohp"><span>No. HP</span><input type="number" class="input-field" name="nohp" id="nohp" onKeyDown="if(this.value.length==20) { alert('No. HP harus di isi! max 20 digit!!'); return this.value = ''; }" /></label>
            <label for="provinsi"><span>Provinsi</span>
                <select name="provinsi" id="provinsi" class="select-field">
                    <option disabled selected value> -- Pilih Provinsi -- </option>
                    <?php
                    $sql = "SELECT * FROM provinsi";
                    $query = mysqli_query($db, $sql);
                    while ($provinsi = mysqli_fetch_array($query)) {
                        echo "<option value='" . $provinsi['kdprov'] . "'>" . $provinsi['nmprov'] . "</option>";
                    }
                    ?>
                </select>
            </label>
            <label for="alamat"><span>Alamat</span><textarea rows="10" type="text" class="input-field" name="alamat" id="alamat"></textarea></label>
            <label for="kodepos"><span>Kode Pos</span><input type="number" class="input-field" name="kodepos" id="kodepos" onKeyDown="if(this.value.length==6){ alert('kode pos harus di isi max 6 digit!!'); return this.value = '' }" /></label>
            <div class="button">
                <button type="submit" name="send" id="send" class="btn btn-kirimpesan">Submit</button>
                <button type="reset" name="batal" id="batal" class="btn btn-batal">Batal</button>
            </div>
        </form>
    </div>
</div>
<?php echo file_get_contents("./include/footer.php") ?>