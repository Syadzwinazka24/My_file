<?php
include("inc_header.php");
if(!in_array("siswa", $_SESSION['admin_akses'])){
    echo "kamu tidak punya akses";
    include("inc_footer.php");
    exit();
}
?>
<h1>Halaman Siswa</h1>
Selamat Datang Di Halaman Siswa
<?php
include("inc_footer.php");
?>