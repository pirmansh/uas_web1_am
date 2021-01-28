<hr>
<div class="footer">
    <p>Lokasi Kami: Jl. Perjuangan Raya Ruko Surya Blok R12 No.20 Kota Bekasi-Jawa Barat</p>
    <p>No. Telp: (021) 8968-9689-98</p>
</div>
</div>
<script>
    notif = document.getElementById('info');
    if (notif) {
        setTimeout(function() {
            notif.remove();
        }, 6000);
    }

    function validateFormOnSubmit(theForm) {

        let namapengirim = document.getElementById('namapengirim').value,
            emailpengirim = document.getElementById('emailpengirim').value,
            kategoripesan = document.getElementById('kategoripesan').value,
            subjekpesan = document.getElementById('subjekpesan').value,
            isipesan = document.getElementById('isipesan').value;

        if (namapengirim == "") {
            alert('Nama pengirim harus di isi!');
            return false;
        }
        if (emailpengirim == "") {
            alert('Email pengirim harus di isi!');
            return false;
        }
        if (kategoripesan == "") {
            alert('Kategori pesan harus di isi!');
            return false;
        }
        if (subjekpesan == "") {
            alert('Subjek pesan harus di isi!');
            return false;
        }
        if (isipesan == "") {
            alert('Isi pesan harus di isi!');
            return false;
        }

        return true;

    };

    function validateFormRegistrasi(theForm) {

        let nmlengkap = document.getElementById('nmlengkap').value,
            email = document.getElementById('email').value,
            nohp = document.getElementById('nohp').value,
            kodepos = document.getElementById('kodepos').value,
            provinsi = document.getElementById('provinsi').value,
            alamat = document.getElementById('alamat').value;

        if (nmlengkap == "") {
            alert('Nama harus di isi!');
            return false;
        }
        if (email == "") {
            alert('Email harus di isi!');
            return false;
        }
        if (document.querySelectorAll('input[type="radio"]:checked').length === 0) {
            alert('Jenis kelamin harus di isi!');
            return false;
        }
        if (nohp == "") {
            alert('No. HP harus di isi!');
            return false;
        }

        if (provinsi == "") {
            alert('Provinsi harus di isi!');
            return false;
        }
        if (alamat == "") {
            alert('Isi pesan harus di isi!');
            return false;
        }
        if (kodepos == "") {
            alert('Kode Pos harus di isi!');
            return false;
        }

        return true;

    };
</script>
</body>

</html>