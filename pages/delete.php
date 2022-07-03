<?php
require 'koneksi.php';

$id = $_GET['id_data_diri'];

$data = mysqli_query($conn, "delete from data_diri WHERE id_data_diri='$id' ");

if ($data == 1) {
?>
    <script>
        let url = "list-user.php";
        window.location.href = url;
    </script>
<?php
}
