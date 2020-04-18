<?php
$_rl_ = 'http://localhost/adminhima2/'; #Sesuaikan dengan nama folder

menu_item_single('BERANDA',$_rl_,'fas fa-home'); //#Menambahkan Menu Item Single Beranda

menu_item_head(); //#Menambahkan Menu Head Contoh
menu_item_single(); //#Menambahkan Menu Item Single Contoh
    menu_tree_open(); //#-->Membuka Menu Tree Contoh
        menu_tree_item(); //#Menambahkan Menu Tree Item Contoh
    menu_tree_close(); //#<--Menutup Menu Tree Contoh

/*
CATATAN UNTUK Menu Tree 
dimulai dengan menu_tree_open(...)
ditutup dengan menu_tree_close(...)
*/
?>