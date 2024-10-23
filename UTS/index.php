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
        </div>
    </header>

    <div class="login-container">
        <h5>Mohon login terlebih dahulu</h5>
        <form id="myForm" method="post" action="proses_validasi.php">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            <div id="nama-error" style="color: red;"></div>
            <div id="password-error" style="color: red;"></div>
            <input type="submit" value="Submit">
        </form>
    </div>

</form>

<div id="response"></div>

<script src="script.js"></script>
</body>
</html>