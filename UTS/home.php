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

    <script>
        var i = 0;
        $(document).ready(function () {
            $('#sliderTitle, #slider img').hide();
            showNextImage();
            setInterval('showNextImage()', 2000);
        });

        function showNextImage() {
            $('#sliderImage' + i).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
            $('#title' + i).appendTo('#sliderTitle').fadeIn(1100).delay(1100).fadeOut(1100);
            if (i == 2) i = 0;
            else i++;
        }
    </script>
</head>
<body>
    <div id="slider">
        <img id="sliderImage1" src="img/gambar1.webp">
        <img id="sliderImage2" src="img/gambar2.webp">
    </div>
    <div id="sliderTitle">
        <h4 class="slideTitle" id="title1">Gambar 1</h4>
        <h4 class="slideTitle" id="title2">Gambar 2</h4>
    </div>

    <h2>Company Profile</h2>
    <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse dolorem aliquam commodi culpa nulla placeat cumque possimus natus, qui error dolores omnis impedit repudiandae praesentium aliquid adipisci ducimus corrupti illo similique ipsam voluptatum nam. Sunt delectus eum deserunt eius. Repudiandae excepturi dolor molestias totam, animi pariatur illum laudantium adipisci saepe dolores, aspernatur laboriosam sunt, eum facere quibusdam laborum. Aperiam at accusamus harum odio recusandae explicabo porro reprehenderit est ut ad cum, molestiae beatae nulla repellendus ullam. Sit, dignissimos nihil? Eum, asperiores. Error magni ex voluptatibus suscipit eaque, quasi aliquam veritatis iure distinctio non perspiciatis, quibusdam ratione sunt eius sequi quo assumenda corrupti ducimus qui sit beatae in ipsam? Facilis accusantium obcaecati ipsum sequi explicabo placeat nam ipsam hic error mollitia officiis quibusdam deserunt dolor tenetur dolorum expedita ratione voluptatibus, aliquid, recusandae eveniet nobis. Omnis praesentium rem natus. Dolorum laudantium repudiandae quos minima tempore laborum exercitationem deleniti ratione eveniet velit ab, repellat quibusdam quo consequatur! Nobis, ipsam explicabo. Vel libero, animi reprehenderit possimus dolorum velit error minima rerum? Aut cum officia esse, laborum iste amet atque, maxime nisi voluptate totam quo ducimus enim sapiente, libero ullam maiores doloremque? Sapiente modi sint culpa consequuntur? Hic, fugiat reprehenderit. Fugit, maxime esse? Consequatur, dolorem.
    </p>
    
</body>
</html>