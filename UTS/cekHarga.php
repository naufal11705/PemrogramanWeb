<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Laundry</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
        <div class="header-container">
            <h1>Laundry Q</h1>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="cekHarga.php">Cek Harga</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <h3>Cek Harga</h3>
        <form id="cekHargaForm">
            <div class="form-group">
                <label for="berat">Berat (kg):</label>
                <input type="number" id="berat" class="form-control" value="0" min="1" required>
            </div>
            <div class="form-group">
                <label for="jenis">Jenis Layanan:</label>
                <select id="jenis" class="form-control">
                    <option value="Cuci Kering">Cuci Kering</option>
                    <option value="Cuci Setrika">Cuci Setrika</option>
                    <option value="Setrika">Setrika</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kecepatan">Kecepatan:</label>
                <select id="kecepatan" class="form-control">
                    <option value="Reguler">Reguler</option>
                    <option value="Ekspress">Ekspress</option>
                </select>
            </div>
            <div class="form-group">
                <label for="diskon">Diskon:</label>
                <select id="diskon" class="form-control">
                    <option value="Non Member">Non Member</option>
                    <option value="Member">Member</option>
                    <option value="Kupon">Kupon</option>
                </select>
            </div>
            <button type="button" class="btn btn-primary" onclick="calculatePrice()">Check</button>
        </form>

        <div id="result-transaksi" style="margin-top: 20px;"></div>
        <div id="result-diskon" style="margin-top: 20px;"></div>
        <div id="result" style="margin-top: 20px;"></div>
    </div>

    <script>
            function calculatePrice() {
        let berat = parseInt(document.getElementById("berat").value);
        let jenis = document.getElementById("jenis").value;
        let kecepatan = document.getElementById("kecepatan").value;
        let diskon = document.getElementById("diskon").value;

        let hargaPerKilo;
        if (jenis === "Cuci Kering") {
            hargaPerKilo = 5000;
        } else if (jenis === "Cuci Setrika") {
            hargaPerKilo = 8000;
        } else if (jenis === "Setrika") {
            hargaPerKilo = 6000;
        }

        let totalPrice = hargaPerKilo * berat;

        if (kecepatan === "Ekspress") {
            totalPrice += 2000 * berat;
        }

        document.getElementById("result-transaksi").innerText = "Total transaksi adalah Rp " + totalPrice.toLocaleString();

        let totalDiscount = totalPrice;

        if (diskon === "Member") {
            totalPrice *= 0.9;
            totalDiscount -= totalPrice;
            document.getElementById("result-diskon").innerText = "Total diskon adalah Rp " + totalDiscount.toLocaleString();
        } else if (diskon === "Kupon" && berat > 2) {
            totalPrice -= hargaPerKilo * 2;
            totalDiscount -= totalPrice;
            document.getElementById("result-diskon").innerText = "Total diskon adalah Rp " + totalDiscount.toLocaleString();
        }

        totalPrice = Math.max(0, totalPrice);
        document.getElementById("result").innerText = "Total harus dibayarkan adalah: Rp " + totalPrice.toLocaleString();
    }
    </script>
</body>
</html>
