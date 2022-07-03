<?php
require 'koneksi.php';

if (update($_POST) == 1) {
?>
    <script>
        let url = "list-user.php";
        window.location.href = url;
    </script>
<?php
}
