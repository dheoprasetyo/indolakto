<?php
    session_start();
    /**
     * auth.php
     * digunakan untuk proses autentikasi
     * apabila user belum valid maka akan diarahkan ke halaman login
     * apabila user valid, maka akan diarahkan ke halaman index menurut jabatan user tersebut
     */

    //memanggil file connect.php
    require_once "connect.php";
    // $conn = sqlsrv_connect( $serverName, $connectionInfo);


    // menangkap data yang dikirim dari form jika 
    $username = $_POST['username'];
    $password = $_POST['password'];
    // menyeleksi data admin dengan username dan password yang sesuai
    // $data = mysqli_query($conn,"select * from user where username='$username' and password='$password'") or die(mysqli_error());
    $tsql = "Select * From [dbo].[user] where username = '$username' and password='$password'";
    // menghitung jumlah data yang ditemukan
    // $cek = mysqli_num_rows($data);
    $stmt = sqlsrv_query( $conn, $tsql);
    
    if($stmt> 0){
        
        while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['level'] = $row['level'];
            print(
                $row['username'].",".$row['password'].",".$row['level']);
            
        }
        header("location:../index.php");
        print(
            $row['username'].",".$row['password'].",".$row['level']);
    }
    else{
        header("location:../login.php");
        print(
            $row['username'].",".$row['password'].",".$row['level']);
    }
?>