<?php

require 'koneksi.php';



var_dump($_POST);
if (register($_POST > 0)) {

    echo "<script>
    alert ('user baru');
    </script>";
} else {
    echo mysqli_error($conn);
}
