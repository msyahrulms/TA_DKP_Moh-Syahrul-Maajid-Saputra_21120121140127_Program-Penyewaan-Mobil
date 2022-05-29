<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rental Mobil Ndeso</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <head>
      
    <body>
      <header>
            <h2 class="text-center">
                Rental Mobil Ndeso
            </h2>
      </header>
      <div class="wrapper">
            <div class="container bg-white">
                  <h2 class="container-header text-center">Data Hasil Peminjaman Anda</h2>
                  <table class="form">
                    <tr>
                      <td>Selamat datang
                      <?php echo $nama = $_POST['nama']; ?></td> 
                    </tr>
                    <tr>
                      <td>Lokasi Peminjaman :
                      <?php echo $lokasipinjam = $_POST['lokasipinjam']; ?></td> 
                    </tr>
                    <tr>
                      <td>Lokasi Pengembalian :
                      <?php echo $lokasikembali = $_POST['lokasikembali']; ?></td> 
                    </tr>
                    <tr>
                      <td>Tanggal Peminjaman :
                      <?php echo $tanggalpinjam = $_POST['tanggalpinjam']; ?></td> 
                    </tr>
                    <tr>
                      <td>Tanggal Pengembalian :
                      <?php echo $tanggalkembali = $_POST['tanggalkembali']; ?></td> 
                    </tr>
                    <tr>
                      <td>Kontak yang dapat dihubungi :
                      <?php echo $nomor = $_POST['nomor'];?></td>
                    </tr>
                    <tr>                  
                      <td>
                      <?php 
                        $jm = $_POST['jm'];
                        $uang = isset($_POST['uang'])?abs((int)$_POST['uang']):'';
                        switch($uang){
                            case ($uang>=225000):
                                if ($jm >= 'ta') {
                                    echo 'Terima kasih telah melakukan transaksi peminjaman mobil di rental kami :)';
                                    }
                                else {
                                    echo 'Mohon maaf nominal uang yang Anda masukkan belum cukup :)';
                                    }
                                    break;
                            case ($uang>=225000):
                                if ($jm >= 'da') {
                                    echo 'Terima kasih telah melakukan transaksi peminjaman mobil di rental kami :)';
                                    }
                                else {
                                    echo 'Mohon maaf nominal uang yang Anda masukkan belum cukup :)';
                                    }
                                    break;
                            case ($uang>=225000):
                                if ($jm >= 'ds') {
                                    echo 'Terima kasih telah melakukan transaksi peminjaman mobil di rental kami :)';
                                    }
                                else {
                                    echo 'Mohon maaf nominal uang yang Anda masukkan belum cukup :)';
                                    }
                                    break;
                            case ($uang>=225000):
                                if ($jm >= 'dx') {
                                    echo 'Terima kasih telah melakukan transaksi peminjaman mobil di rental kami :)';
                                    }
                                else {
                                    echo 'Mohon maaf nominal uang yang Anda masukkan belum cukup :)';
                                    }
                                    break;
                            case ($uang>=250000):
                                if ($jm >= 'tna') {
                                    echo 'Terima kasih telah melakukan transaksi peminjaman mobil di rental kami :)';
                                    }
                                else {
                                    echo 'Mohon maaf nominal uang yang Anda masukkan belum cukup :)';
                                    }
                                    break;
                            case ($uang>=250000):
                                if ($jm >= 'hb') {
                                    echo 'Terima kasih telah melakukan transaksi peminjaman mobil di rental kami :)';
                                    }
                                else {
                                    echo 'Mohon maaf nominal uang yang Anda masukkan belum cukup :)';
                                    }
                                    break;
                            case ($uang>=250000):
                                if ($jm >= 'dnx') {
                                    echo 'Terima kasih telah melakukan transaksi peminjaman mobil di rental kami :)';
                                    }
                                else {
                                    echo 'Mohon maaf nominal uang yang Anda masukkan belum cukup :)';
                                    }
                                    break;
                            case ($uang>=275000):
                                if ($jm >= 'tga') {
                                    echo 'Terima kasih telah melakukan transaksi peminjaman mobil di rental kami :)';
                                    }
                                else {                                    
                                    echo 'Mohon maaf nominal uang yang Anda masukkan belum cukup :)';
                                    }
                                    break;
                            case ($uang>=275000):
                                if ($jm >= 'dgx') {
                                    echo 'Terima kasih telah melakukan transaksi peminjaman mobil di rental kami :)';
                                    }
                                else {                                    
                                    echo 'Mohon maaf nominal uang yang Anda masukkan belum cukup :)';
                                    }
                                    break;
                            case ($uang>=300000):
                                if ($jm >= 'tav') {
                                    echo 'Terima kasih telah melakukan transaksi peminjaman mobil di rental kami :)';
                                    }
                                else {                                    
                                    echo 'Mohon maaf nominal uang yang Anda masukkan belum cukup :)';
                                    }
                                    break;
                            case ($uang>=250000):
                                if ($jm >= 'tc') {
                                    echo 'Terima kasih telah melakukan transaksi peminjaman mobil di rental kami :)';
                                    }
                                else {                                    
                                    echo 'Mohon maaf nominal uang yang Anda masukkan belum cukup :)';
                                    }
                                    break;
                            case ($uang>=325000):
                                if ($jm >= 'hjr') {
                                    echo 'Terima kasih telah melakukan transaksi peminjaman mobil di rental kami :)';
                                    }
                                else {                                    
                                    echo 'Mohon maaf nominal uang yang Anda masukkan belum cukup :)';
                                    }
                                    break;
                        default:
                            echo 'Mohon maaf nominal uang yang Anda masukkan belum cukup :)';
                            break;
                        }
                      ?>
                      <br>
                      <br>
                      <form class="form" action="mobil.html" method="post" id="form">
                      <input type="submit" value="Kembali" name="submit" class="btn-btn-primary">
                      </form>
                          </td> 
                    </tr>
                  </table>
            </div>
      </div>      
     </body>
</html>