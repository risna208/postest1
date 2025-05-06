<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
    font-family: Impact,  'Arial Narrow Bold', sans-serif, 
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

header {
    background-color:rgb(91, 207, 215);
    color: white;
    text-align: center;
    padding: 1em;
}

h1 {
    margin: 0;
}
li a:hover {
    background-color: blue;
}
nav {
    background-color: #ffffff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 10px 20px;
    display: flex;
    justify-content: center;
}

ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    gap: 20px;
    justify-content: center;
    background-color: white;
}

ul li {
    display: inline;
}

ul li a {
    text-decoration: none;
    color:rgb(0, 0, 0);
    font-weight: bold;
    transition: color 0.3s ease;
}

ul li a:hover {
    color:rgb(255, 255, 255);
}


.catalog {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    padding: 20px;
}

.product-card {
    background-color: rgb(252, 252, 252);
    border: 1px solid #ffffff;
    border-radius: 10px;
    margin: 10px;
    padding: 15px;
    width: 150px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: 0.3s;
}

.product-card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.product-card img {
    max-width: 100%;
    border-radius: 10px;
}

.product-card h3 {
    margin: 10px 0;
}

.price {
    color:rgb(215, 48, 48);
    font-weight: bold;
    margin-top: 10px;
}
footer{
    text-align: center;
    padding: 10px;
    background-color: #6fb2fe;
    color:#0b0b0b;
    position:fixed;
    bottom: 0;
    width:100%;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>Daftar Katalog Produk</h1>
    </header>
    <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Katalog Produk</a></li>
            <li><a href="#">Kontak</a></li>
</ul>

    <div class="catalog">
        <div class="product-card">
            <img src="mawar.jpeg"  width ="200px" height="150px" >
            <h3>Mawar Merah</h3>
            <p>Bunga yang berbau wangi dan berwarna indah</p>
            <p class="price">Rp 10.000.000</p>
            <a href="input_penjualan.php" class="buy-button">Beli Sekarang</a>
        </div>
        <div class="product-card">
            <img src="melati.jpeg" width ="200px" height="150px" >
            <h3>Melati</h3>
            <p>Bunga perpaduan batang tegak yang hidup menahun</p>
            <p class="price">Rp 150.000</p>
            <a href="input_penjualan.php" class="buy-button">Beli Sekarang</a>
        </div>
        <div class="product-card">
            <img src="tulip.jpeg"  width ="200px" height="150px" >
            <h3>Tulip</h3>
            <p>Bunga yang memperlambangkan cinta yang sempurna </p>
            <p class="price">Rp 200.000</p>
            <a href="input_penjualan.php" class="buy-button">Beli Sekarang</a>
        </div>
        
           
    </div>
    <footer>
                    <p class="text">&copy; 2025 websiteKu. Selamat Berbelanja.</p>
                </footer>
</body>
</html>