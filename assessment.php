//fatih
<!DOCTYPE html>
<html>
<head>
    <title>Open Library</title>
</head>
<body>
    <h1>Daftar Koleksi Buku Perpustakaan</h1> 
    <ul>
        <li>Arsene Lupin</li>
        <li>Sherlock Holmes</li>
        <li>Game of Thrones</li>
    </ul>

    <h2>Peminjaman Buku</h2>
    <form>
        Nama Peminjam: <input type="text" id="namaPeminjam"><br><br>
        Judul Buku yang Ingin Dipinjam: <input type="text" id="judulBuku"><br><br>
        <button type="button" onclick="pinjamBuku()">Cari</button>
    </form>

    <p id="hasil"></p>

    <script>
        function pinjamBuku() {
            var nama = document.getElementById("namaPeminjam").value.toLowerCase();
            var judul = document.getElementById("judulBuku").value.toLowerCase();
            var hasil = document.getElementById("hasil");
            
            // Daftar member
            var members = ["agan", "budi", "citra", "dewi", "najwa", "pati"];

            // Cek member
            if (members.indexOf(nama) === -1) {
                hasil.innerHTML = "Maaf, Anda bukan member!";
                return;
            }

            //Output
            if (judul === "arsene lupin") {
                hasil.innerHTML = "Judul: Arsene Lupin<br>Pengarang: Maurice LeBlanc<br>Tahun: 1860<h4>Buku tidak tersedia.<h4>";
            } else if (judul === "sherlock holmes") {
                hasil.innerHTML = "Judul: Sherlock Holmes<br>Pengarang: Sir Arthur Conan Doyle<br>Tahun: 1920<h4>Berhasil dipinjam!<h4>";
            } else if (judul === "game of thrones") {
                hasil.innerHTML = "Judul: Game Of Thrones<br>Pengarang: George R Martin<br>Tahun: 1990<h4>Berhasil dipinjam!<h4>";
            } else {
                hasil.innerHTML = "<h4>Buku tidak ditemukan.<h4>";
            }
        }
    </script>
</body>
</html>
