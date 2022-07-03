<?php

$conn = mysqli_connect("localhost", "root", "", "kustore");

if (mysqli_connect_errno()) {
    echo "Koneksi data gagal :" . mysqli_connect_error();
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{

    global $conn;

    $first_name = $data["first-name"];
    $last_name = $data["last-name"];
    $email = $data["email"];
    $country = $data["country"];
    $address = $data["street-address"];
    $city = $data["city"];
    $province = $data["region"];
    $postal_code = $data["postal-code"];
    $about = $data["about"];
    $notif = $data["comments"];
    $push = $data["push-notifications"];
    $file_upload = $_FILES['file-upload']['name'];
    $errorfiles = $_FILES['file-upload']['error'];
    $tmpname = $_FILES['file-upload']['tmp_name'];
    if ($errorfiles == 0) {
        move_uploaded_file($tmpname, "upload/" . $file_upload);
    }

    $nama_file = "upload/e.txt";

    $data = "$file_upload";
    $file = fopen($nama_file, "w");
    fwrite($file, $data);
    fclose($file);

    $query = "INSERT INTO data_diri (first_name,last_name,email,country,address,city,province,postal_code,about,img,notif_email,push)
    VALUES ('$first_name',
    '$last_name',
    '$email',
    '$country',
    '$address',
    '$city',
    '$province',
    '$postal_code',
    '$about',
    '$file_upload',
    '$notif',
    '$push'
    )";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function update($data)
{

    global $conn;

    $id = ($data['id']);
    $first_name = $data["first-name"];
    $last_name = $data["last-name"];
    $email = $data["email"];
    $country = $data["country"];
    $address = $data["street-address"];
    $city = $data["city"];
    $province = $data["region"];
    $postal_code = $data["postal-code"];
    $about = $data["about"];
    $notif = $data["comments"];
    $push = $data["push-notifications"];
    $file_upload = $_FILES['file-upload']['name'];
    $errorfiles = $_FILES['file-upload']['error'];
    $tmpname = $_FILES['file-upload']['tmp_name'];
    if ($errorfiles == 0) {
        move_uploaded_file($tmpname, "upload/" . $file_upload);
    }

    $nama_file = "upload/e.txt";

    $data = "$file_upload";
    $file = fopen($nama_file, "w");
    fwrite($file, $data);
    fclose($file);


    $hasil =  "UPDATE data_diri SET
        first_name ='$first_name',
        last_name = '$last_name',
        email = '$email',
        country = '$country',
        address = '$address',
        city = '$city',
        province = '$province',
        postal_code = '$postal_code',
        about = '$about',
        img = '$file_upload',
        notif_email = '$notif',
        push = '$push'
        WHERE id_data_diri ='$id' ";
    mysqli_query($conn, $hasil);

    return mysqli_affected_rows($conn);
}


function register($data)
{

    global $conn;

    $nama = $data['nama'];
    $email = $data['email'];
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // Cek email sudah ada atau belum
    $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");
    if (mysqli_fetch_assoc($result)) {
        echo
        "<script>
    alert ('email sudah terdaftar');
    </script>";
        return false;
    }

    // Cek Konfirmasi password 
    if ($password !== $password2) {
        echo
        "<script>
        alert ('Konfirmasi Password Tidak Sesuai');
        </script>";

        return false;
    }

    // Enkripsi Password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    mysqli_query($conn, "INSERT INTO user (nama,email,password) VALUES('$nama','$email','$password')");

    return mysqli_affected_rows($conn);
}


function login($data)
{
    global $conn;
    $email = $data['email'];
    $password = $data['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    // Cek Email
    if (mysqli_num_rows($result) === 1) {

        // Cek Password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            header("location : home.php");
            exit;
        }
    }
}
