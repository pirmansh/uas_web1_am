<?php include("./config.php"); ?>
<?php echo file_get_contents("./include/header.php") ?>
<div class="content">
    <div class="title">Daftar Buah</div>
    <div class="search">
        <form action="" method="GET">
            <label for="cari"><span style="margin-right: 5px;">Cari Buah</span><input type="text" class="search-field" name="cari" id="cari" /></label><button name="search" type="submit" class="btn btn-cari">Cari</button>
        </form>
    </div>
    <table class="table-buah">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_GET['search'])) {
                $cari = $_GET['cari'];
                $sql = mysqli_query($db, "SELECT * FROM buah WHERE namabuah LIKE '%" . $cari . "%'");
            } else {
                $sql = mysqli_query($db, "SELECT * FROM buah");
            }
            while ($buah = mysqli_fetch_array($sql)) {
                $stok;
                $style;
                if ($buah['readystock'] <= 0) {
                    $stok = 'Kosong';
                    $style = 'text-danger';
                } else {
                    $stok = 'Tersedia';
                    $style = '';
                }
                echo "<tr>";
                echo "<td class='gambar'>" . "<img src='" . $buah['gambarbuah'] . "'>" . "</td>";
                echo "<td class='deskripsi'>" .
                    "<p>Kode Buah : " . $buah['kodebuah'] . "</p>" .
                    "<p>Harga Buah : Rp. " . strrev(implode('.', str_split(strrev(strval($buah['hargabuah'])), 3))) . "/kg</p>" .
                    "<p>Jenis Buah : " . $buah['jenisbuah'] . "</p>" .
                    "<p>Ketersediaan Stok : <span class='" . $style . "'>" . $stok . "</span></p> 
                    </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php echo file_get_contents("./include/footer.php") ?>