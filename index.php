<?php
//Ket % bisa diubah
//Ket # sebaiknya jangan diubah

$_r_ = ''; //% 0 Escape ''  =>berada dalam folder yang sama dengan root folder aplikasi

include($_r_.'_tema/adminlte.php'); //# Menambahkan Library Template

$tab_caption = 'Beranda'; //% Caption pada tab browser
$judul_content = 'Halaman Beranda'; //% Judul Utama Pada Halaman
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php html_head();?>
    <?php html_link_css($_r_);?>
    <?php html_link_js($_r_);?>
    <title><?php echo $tab_caption;?></title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php html_body_nav();?>
            <?php html_body_sidebar_open();?>
                <?php sidebar_akun($_r_);?>
                <?php sidebar_menu_open();?>
                <?php include($_r_.'_config/menu.php');?>
                <?php sidebar_menu_close();?>
            <?php html_body_sidebar_close();?>

            <?php html_body_content_open($judul_content);?>
            <h1>Beranda Admin Hima</h1>
            <!--/.Content Sampai di sini-->
            <?php html_body_content_close();?>
    </div>
</body>
</html>