
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Contoh Website </title>
    <link rel="stylesheet" href="style.css" />
    <script>
        //fungsi menampilkan harga produk dan menghitung total bayar
        function tampilkanHarga(){
            var select = document.getElementById("nama_produk");
            var hargaInput = document.getElementById("harga_produk");
            var selectedOption = select.options[select.selectedIndex];
            var harga = selectedOption.getAttribute("data-harga");
            hargaInput.value = harga; // menampilkan harga  di input produk 

            hitungTotalBayar();

        }
        function hitungTotalBayar(){
            var harga = parseFloat(document.getElementById("harga_produk"). value);
            var jumlah = parseInt(document.getElementById("jumlah_produk"). value);

            if (!isNaN(harga) && !isNaN(jumlah) && jumlah > 0 ){
                var totalBayar = harga * jumlah;
                document.getElementById("total_bayar").value = totalBayar;
            }else{
                document.getElementById("total_bayar").value = '';
            }
            }
            </script>
            </head>



            <body>
                <header>
                    <h1> Selamat Datang di Platform Kami </h1>
        </header>
        <ul>

        <li><a href="#">Beranda</a></li>
            <li><a href="katalog.php">Katalog Produk</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>

        <h2 align = "center">FORM INPUT PEMBELIAN</h2>
        <div class = "container">
            <form action ="crud_penjualan.php" method="post" enctype="multipart/form-data">
            <div class ="row">
            <div class ="col-25">
                <label for="">Nama Produk</label>
        </div>
        <div class ="col-75">
            <select id ="nama_produk" name="nama_produk" onchange="tampilkanHarga()">
                <option value ="">Pilih Produk</option>
    
                </option>
                
                </select>
                </div>
                </div>

            

        <div class="row">
            <div class="col-25">
                <label for="fname">Jumlah Produk</label>
            </div>

            <div class="col-75">
                <input type="number" id="jumlah_produk" name="jumlah_produk" oninput="hitungTotalBayar()"> 
            </div>
        </div>


        <div class="row">
            <div class="col-25">
                <label for="fname">Total Bayar</label>
            </div>

            <div class="col-75">
                <input type="text" name="total_bayar" id="total_bayar" readonly> 
            </div>
        </div>


        <br>
        <div class ="row">
        <input type="submit" class="tombol" value="Pesan Sekarang" name="btnSimpan">
                </div>
                </form>
                </div>
                <footer>
                    <p class="text">&copy; 2025 websiteKu. Selamat Berbelanja.</p>
                </footer>
                </body>
                </html>








