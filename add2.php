<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BEM TRILOGI</title>
    <link rel="stylesheet" href="asset/labora.css">
    <link rel="stylesheet" type="text/css" href="asset/table.css">
</head>
<body>
    <div>
        <h1>BEM TRILOGI</h1>
        <h2>Tambah prodi</h2>
    </div>
    <div>
        <a href="index.php"><img class="emojika" alt="about" src="asset/home.png">  Home</a>
        <a href="index2.php"><img class="emojika" alt="about" src="asset/list.png">  List Prodi</a>
        <a href="index3.php"><img class="emojika" alt="about" src="asset/list.png">  List Departemen</a>
        <a href="add.php"><img class="emojika" alt="about" src="asset/add.png">  Add Data</a>
        <a href="add3.php"><img class="emojika" alt="about" src="asset/add.png">  Add Departemen</a>
        <a href="about.php"><img class="emojika" alt="about" src="asset/man.png">  About Us</a>
        <hr>
    </div>
    <div>
        <form action="add2.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr> 
                    <td>Kode</td>
                    <td><input type="text" name="Kode" placeholder="FX-XX" required></td>
                </tr>
                <tr> 
                    <td>Nama</td>
                    <td><input type="text" name="Nama" placeholder="Nama" required></td>
                </tr>
                <tr> 
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
            <?php
                if(isset($_POST['Submit'])){  
                    $ID = $_POST['Kode'];
                    $Nama = $_POST['Nama']; 
                    include_once("koneksi.php"); //untuk manggil file koneksi
                    $result = mysqli_query($mysqli, "INSERT INTO studi(kode_studi, nama_prodi) VALUES ('$ID', '$Nama')");
                    if ($result) {
                        echo "<script>alert('Data Berhasil Di Inputkan :)')</script>";
                        header("location: index2.php");
                    }
                    else{
                        echo "<script>alert('Data Tidak Berhasil Di Inputkan: Mungkin karena Kodenya udah ada)')</script>";
                        header("location: add2.php");
                        //coment di browser
                    }
                }
            ?>
        </form>
    </div>
</body>
</html>