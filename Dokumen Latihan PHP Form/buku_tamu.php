<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Website Layout</title>
    <style>
        * {
            box-sizing: border - box;
        }

        /* Style the header */
        .header {
            background-color: #f1f1f1;
            padding: 20px;
            text-align: center;
        }

        /* Style the to navigation bar*/
        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        /* Style the topnav links */
        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* change color on hover */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit] {

            background-color: #45A049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        textarea {
            width: 100%;
            height: 150px;
            background-color: #f8f8f8;
            padding: 12px 20px;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            resize: none;
            text-align: left;
        }

        #tamu {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #tamu td,
        #tamu th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #tamu tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #tamu tr:hover {
            background-color: #ddd;
        }

        #tamu tr {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: black;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Tutorial Web</h1>
        <p>Memperlajari Dasar Pembuatan Website</p>
    </div>
    <div class="topnav">
        <a href="home.html">Home</a>
        <a href="#">JavaScript</a>
        <a href="#">PHP</a>
        <a href="buku_tamu.php">Buku Tamu</a>
        <a href="reg.php">Registrasi</a>
    </div>
    <div class="row">
        <div class="column">
            <h2>Buku Tamu</h2>\
            <div>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
                    <label for="">Nama</label>
                    <input type="text" name="fnama" placeholder="Nama Anda...">
                    <label for="">Email</label>
                    <input type="text" name="femail" placeholder="Email.. ">
                    <label>Provinsi</label>
                    <select id="prov" name="fprovinsi">
                        <option value="Jateng">Jateng</option>
                        <option value="Jabar">Jabar</option>
                        <option value="Jatim">Jatim</option>
                    </select>
                    <label>Pesan</label><br>
                    <textarea name="fpesan"></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
            <div>
                <?php
                if (isset($_POST['fnama'])) {
                    $nama = $_POST['fnama'];
                    $email = $_POST['femail'];
                    $prov = $_POST['fprovinsi'];
                    $pesan = $_POST['fpesan'];

                    echo "Daftar Tamu";
                    echo "<table id='tamu'>";
                    echo "<tr><th>No</th><th>Nama</th><th>Email</th><th>Provinsi</th><th>Pesan</th></tr>";
                    echo "<tr><th>1.</th><th>$nama</th><th>$email</th><th>$prov</th><th>$pesan</th></tr>";
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>