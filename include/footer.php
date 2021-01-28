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

    function clear() {
        let namapengirim = document.getElementById('namapengirim').value = '',
            emailpengirim = document.getElementById('emailpengirim').value = '',
            kategoripesan = document.getElementById('kategoripesan').value = '',
            subjekpesan = document.getElementById('subjekpesan').value = '',
            isipesan = document.getElementById('isipesan').value = '';
    }
</script>
</body>

</html>