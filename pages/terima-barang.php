<?php
require 'koneksi.php';


if (tambahBarang($_POST) == 1) {
?>
    <script>
        let url = "list-barang.php";
        window.location.href = url;
    </script>
<?php
}
