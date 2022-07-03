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
