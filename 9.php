<?php
if (isset($_GET['nama'])) {
    $nama = htmlspecialchars($_GET['nama']); // untuk keamanan, hindari XSS
    echo "Halo, " . $nama . "!";
} else {
    echo "Nama belum diberikan di URL.";
}
?>
