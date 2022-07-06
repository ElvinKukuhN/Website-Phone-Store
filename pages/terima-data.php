<?php
require 'koneksi.php';


if (tambah($_POST) == 1) {
?>
    <script>
        let url = "data-user-terima.php";
        window.location.href = url;
    </script>
<?php
}
