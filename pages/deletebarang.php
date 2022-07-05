<?php
require 'koneksi.php';

$id = $_GET['id_product'];

$data = mysqli_query($conn, "DELETE FROM product WHERE id_product='$id' ");

if ($data == 1) {
?>
    <script>
        let url = "list-barang.php";
        window.location.href = url;
    </script>
<?php
}
