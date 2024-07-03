<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "fotocopy";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Tidak bisa terkoneksi ke database");
}
$pemasok   = "";
$nm_barang  = "";
$banyak     = "";
$nm_staff   = "";
$tanggal    = "";
$error      = "";
$sukses     = "";

if (isset($_POST['simpann'])) {
    $pemasok   = $_POST['pemasok'];
    $nm_barang  = $_POST['nm_barang'];
    $banyak     = $_POST['banyak'];
    $nm_staff   = $_POST['nm_staff'];
    $tanggal    = date('Y-m-d', strtotime($_POST['tanggal']));

    if ($nm_barang && $banyak && $nm_staff && $tanggal) {
        $result_barang = mysqli_query($koneksi, "SELECT kd_barang FROM barang WHERE nm_barang='$nm_barang'");
        $result_staff = mysqli_query($koneksi, "SELECT id_staff FROM staff WHERE nm_staff='$nm_staff'");
        

        // if (mysqli_num_rows($result_barang) > 0 && mysqli_num_rows($result_staff) > 0) {
            $kd_barang = mysqli_fetch_assoc($result_barang)['kd_barang'];
            $id_staff = mysqli_fetch_assoc($result_staff)['id_staff'];
            


            $sql1   = "INSERT INTO pemasok (nm_pemasok) VALUES ('$pemasok')";
            $q1     = mysqli_query($koneksi, $sql1);
            $result_customer = mysqli_query($koneksi, "SELECT id_pemasok FROM pemasok WHERE nm_pemasok='$pemasok'");
            $id_customer = mysqli_fetch_assoc($result_customer)['id_pemasok'];
            $sql2   = "INSERT INTO masok (id_pemasok,id_staff, kd_barang, banyak, tanggal) VALUES ('$id_customer','$id_staff','$kd_barang','$banyak', '$tanggal')";
            $q2     = mysqli_query($koneksi, $sql2);

            // $sql3   = "INSERT INTO staff (nm_staff) VALUES ('$nm_staff')";
            // $q3     = mysqli_query($koneksi, $sql3);

            if ($q1 && $q2) {
                $sukses     = "Berhasil Memasukkan Data";
            } else {
                $error      = "Gagal Memasukan Data";
            }
        // } else {
        //     $error = "Barang atau Staff tidak ditemukan"; 
        // }
    } else {
        $error = "Silahkan Masukkan Semua Data";
    }
}
                if ($error) {
    
                    
                       
                        echo $error;
                      
                  
               
                }
                
            
                if ($sukses) {
               
                  
                       
                        echo $sukses;
                       
                   
             
                }
             
?>