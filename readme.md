# ADMIN HIMA v2 PROD Cheat

> Template Admin AdminLTE yang telah dimodifikasi untuk digunakan dengan PHP dan MySQL



Ini merupakan paket Admin Hima 2 yang siap produksi (Digunakan dalam membuat web sesuai dengan kebutuhan Anda). 

Untuk pembelajaran dan contoh dapat melihat AdminHima2 + Contoh di https://github.com/arpaulustindi/adminhima2



Berikut merupakan cheat code :

## A. MENU

1. Head Menu

   ```php
   menu_item_head('CONTOH CRUD MYSQL');
   ```

   

2. Menu Tree

   ```php
   menu_tree_open('DATA MASTER','fas fa-database'); 
       menu_tree_item('JURUSAN',$_rl_.'contoh_crud_mysql/master/jurusan');
       menu_tree_item('PROGRAM STUDI','#'); 
   menu_tree_close();
   ```

   

3. Menu SIngle

   ```php
   menu_item_single('MAHASISWA',$_rl_.'#','fas fa-users');
   ```

   

## B. PAGE



```php+HTML
<?php
$_r_ = '';
include($_r_.'_tema/adminlte.php');

$tab_caption = 'Halaman Kosong';
$judul_content = 'Contoh Halaman Kosong';
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
            <!--Mulai Conten dari sini-->
            	<!--ISIAN PAGE / HALAMAN BERUPA TABEL/FORM/GRAFIK-->
            <!--/.Content Sampai di sini-->
            <?php html_body_content_close();?>
    </div>
</body>
</html>
```



## C. FORM BASIC

1. Form Basic Awal (Kosong)

   ```html
   <!-- FORM -->
       <form role="form" action="#" method="POST" enctype="multipart/form-data">
           <div class="card-body">
               <!-- FORM ELEMENT DISINI-->
           </div>
   
           <div class="card-footer">
           	<!-- Form Button -->
               <button type="reset" class="btn btn-default">Reset</button>
               <button type="submit" class="btn btn-primary float-right">Submit</button>
               <!-- /.Form Button -->
           </div>
        </form>
   <!-- /.FORM -->
   ```

   

2. Form Basic Element : text (Teks Singkat)

   ```html
   <!-- Form Group Text -->
       <div class="form-group">
          <label for="kol_text">Contoh Text :</label>
          <input type="text" class="form-control" name="kol_text" id="kol_text" placeholder="Masukan Text/Nama/Akun/dlsb">
       </div>
   <!-- /.Form Group Text -->
   ```

   

3. Form Basic Element : number (Angka)

   ```html
   <!-- Form Group Angka -->
   <div class="form-group">
       <label for="kol_email">Contoh Angka :</label>
       <input type="number" class="form-control" name="kol_angka" id="kol_angka" placeholder="Hanya Menerima Input Angka">
   </div>
   <!-- /.Form Group Angka -->
   ```

   

4. Form Basic Element : email (Untuk eMail)

   ```html
   <!-- Form Group Email -->
   <div class="form-group">
       <label for="kol_email">Contoh Email :</label>
       <input type="email" class="form-control" name="kol_email" id="kol_email" placeholder="Masukan Email Anda">
   </div>
   <!-- /.Form Group Email -->
   ```

   

5. Form Basic Element : password (Untuk Sandi)

   ```html
   <!-- Form Group Sandi -->
   <div class="form-group">
       <label for="kol_sandi">Contoh Sandi :</label>
       <input type="password" class="form-control" name="kol_sandi" id="kol_sandi" placeholder="Sandi">
   </div>
   <!-- /.Form Group Sandi -->
   ```

   

6. Form Basic Element : textarea (Teks Panjang)

   ```html
   <!-- Form Group Text Area -->
   <div class="form-group">
       <label for="kol_text_area">Text Area :</label>
       <textarea class="form-control" name="kol_text_area" id="kol_text_area">Isi Teks Area</textarea>
   </div>
   <!-- /.Form Group Text Area -->
   ```

   

7. Form Basic Element : file (Upload File)

   ```html
   <!-- Form Group File -->
   <div class="form-group">
       <label for="kol_file">Masukan File</label>
       <div class="input-group">
           <div class="custom-file">
               <input type="file" class="custom-file-input" id="kol_file" id="kol_file">
               <label class="custom-file-label" for="kol_file">Pilih File</label>
           </div>
       </div>
   </div>
   <!-- /.Form Group File -->
   ```

   

8. Form Basic Element : select (List Pilihan)

   ```html
   <!-- Form Group Select -->
   <div class="form-group">
       <label for="kol_select">Select :</label>
       <select class="form-control" name="kol_select" id="kol_select">
           <option value="1" selected>Satu</option>
           <option value="2">Dua</option>
           <option value="3">Tiga</option>
       </select>
   </div>
   <!-- /.Form Group Select -->
   ```

   

9. Form Basic Element : check (Pilihan Jamak)

   ```html
   <!-- Form Group Check -->
   <div class="form-group">
       <div class="form-check">
           <input type="checkbox" class="kol_ceka" name="kol_ceka" id="kol_ceka">
           <label class="form-check-label" for="kol_cek">Cek Pilihan A</label>
       </div>
       <div class="form-check">
           <input type="checkbox" class="kol_cekb" name="kol_cekb" id="kol_cekb">
           <label class="form-check-label" for="kol_cekb">Cek Pilihan B</label>
       </div>
   </div>
   <!-- /.Form Group Check -->
   ```

   

10. Form Basic Element : radio (Pilihan Tunggal)

    ```html
    <!-- Form Group Radio -->
    <div class="form-group">
        <div class="form-radio">
            <input type="radio" class="kol_cek" name="kol_opsi1" id="kol_opsi1">
            <label class="form-radio-label" for="kol_opsi">Opsi 1</label>
        </div>
        <div class="form-radio">
            <input type="radio" class="kol_cek" name="kol_opsi2" id="kol_opsi2">
            <label class="form-radio-label" for="kol_opsi2">Opsi 2</label>
        </div>
    </div>
    <!-- /.Form Group Radio -->
    ```

    

11. Form Basic Element : hidden (elemen tersembunyi)

    ```html
    <!-- Form Group Hidden -->
    <div class="form-group">
        <label for="kol_hidden">Contoh Hidden :</label>
        <input type="hidden" class="form-control" name="kol_hidden" id="kol_hidden" value="Tidak Ditampilkan /Hidden">
    </div>
    <!-- /.Form Group Hidden -->
    ```

    

## D. FORM ADVANCE

1. Form Advance Awal (Kosong)

   ```html
   <!-- FORM ADVANCE -->
   <form role="form" action="#" method="POST" enctype="multipart/form-data">
       <div class="card-body">
           <!-- FORM ELEMENT DISINI-->
       </div>
       <div class="card-footer">
       <!-- Form Advance Button -->
       <button type="reset" class="btn btn-default"><i class="fas fa-sync"></i> Reset</button>
       <button type="submit" class="btn btn-success float-right"><i class="fas fa-check"></i> Submit</button>
       <!-- /.Form Advance Button -->
       </div>
   </form>
   <!-- /.FORM ADVANCE -->
   ```

   

2. Form Advance Awal : text (Teks Singkat)

   ```html
   <!-- Form Advance Group Text -->
   <div class="form-group">
       <label for="kol_text">Contoh Text :</label>
       <div class="input-group">
           <div class="input-group-prepend">
               <span class="input-group-text"><i class="far fa-user"></i></span>
           </div>
           <input type="text" class="form-control" name="kol_text" id="kol_text" placeholder="Masukan Text/Nama/Akun/dlsb">
       </div>
   </div>
   <!-- /.Form Advance Group Text -->
   ```

   

3. Form Advance Awal : number (Angka)

   ```html
   <!-- Form Advance Group Angka -->
   <div class="form-group">
       <label for="kol_email">Contoh Angka :</label>
       <div class="input-group">
           <div class="input-group-prepend">
               <span class="input-group-text"><b>Rp.</b></span>
           </div>
           <input type="number" class="form-control" name="kol_angka" id="kol_angka" placeholder="Hanya Menerima Input Angka">
       </div>
   </div>
   <!-- /.Form Advance Group Angka -->
   ```

   

4. Form Advance Awal : email (Untuk eMail)

   ```html
   <!-- Form Advance Group Email -->
   <div class="form-group">
       <label for="kol_email">Contoh Email :</label>
       <div class="input-group">
           <div class="input-group-prepend">
               <span class="input-group-text"><i class="far fa-envelope"></i></span>
           </div>
           <input type="email" class="form-control" name="kol_email" id="kol_email" placeholder="Masukan Email Anda">
       </div>
   </div>
   <!-- /.Form Advance Group Email -->
   ```

   

5. Form Advance Awal : password (Untuk Sandi)

   ```html
   <!-- Form Advance Group Sandi -->
   <div class="form-group">
       <label for="kol_sandi">Contoh Sandi :</label>
       <div class="input-group">
           <div class="input-group-prepend">
               <span class="input-group-text"><i class="fas fa-lock"></i></span>
           </div>
           <input type="password" class="form-control" name="kol_sandi" id="kol_sandi" placeholder="Sandi">
       </div>
   </div>
   <!-- /.Form Advance Group Sandi -->
   ```

   

6. Form Advance Awal : select2 (List Pilihan dengan Pencarian)

   HTML

   ```html
   <!-- Form Advance Group Select2 -->                                  
   <div class="form-group">
       <label for="kol_select">Plugin Select2:</label>
       <div class="input-group">
           <div class="input-group-prepend">
               <span class="input-group-text"><b>...</b></span>
           </div>
           <select class="form-control select2bs4" name="kol_select" id="kol_select">
               <option value="1" selected>Satu</option>
               <option value="2" selected>Dua</option>
               <option value="3" selected>Tiga</option>
           </select>
       </div>
   </div>
   <!-- /Form Advance Group Select2 -->
   ```

   JAVASCRIPT

   ```js
   <script>    
       $(function () {
           $('.select2bs4').select2({
               theme: 'bootstrap4'
           });
       })    
   </script>
   ```

   

7. Form Advance Awal : datepicker (Untuk Tanggal)

   HTML

   ```html
   <!-- Form Advance Group Date Picker --> 
   <div class="form-group">
       <label for="kol_select">Plugin Datepicker:</label>
       <div class="input-group">
           <div class="input-group-prepend">
               <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
           </div>
           <input type="text" class="form-control datepicker" name="kol_text" id="kol_text" placeholder="Pilih Tanggal">
       </div>
   </div>
   <!-- /Form Advance Group Date Picker -->
   ```

   JAVASCRIPT

   ```javascript
   <script>    
       $(function () {
           $('.select2bs4').select2({
               theme: 'bootstrap4'
           });
       })    
   </script>
   ```

   

## E. TABLE

1. Table Awal (Tabel)

   HTML

   ```html
   <!-- Tabel -->
   <table class="table table-bordered table-striped tfull-feature">
   	<!-- Tabel Header-->
       <!-- Tabel Body-->
   </table>
   <!-- /.Tabel -->
   ```

   JAVASCRIPT

   ```javascript
   <script>    
       $(function () {
           $('.tfull-feature').DataTable({
               "paging": true,
               "lengthChange": false,
               "searching": true,
               "ordering": true,
               "info": true,
               "autoWidth": false,
               "responsive": true,
           });
           
       });
   </script>
   ```

   

2. Table Head (Judul / Teks)

   ```html
   <!-- Tabel Header-->
   <thead>
       <!-- Baris-->
       <tr>
           <!-- Kumpulan Kolom-->
           <th>NIM</th>
           <th>Nama</th>
           <th>Jurusan</th>
           <th>Prodi</th>
           <th>Aksi</th>
           <!-- /.Kumpulan Kolom-->
       </tr>
       <!-- /.Baris-->
   </thead>
   <!-- /.Tabel Header-->
   ```

   

3. Table Body

   ```html
   <!-- Tabel Body-->
   <tbody>
   	<!-- Table Row -->
   </tbody>
   <!-- /.Tabel Body-->
   ```

   

4. Table Row

   ```html
   <!-- Baris-->
   <tr>
   	<!-- Table Columns -->       
   </tr>
   <!-- /.Baris-->  
   ```

   

5. Table Column

   ```html
   <!-- Kumpulan Kolom-->
   <td>1705001</td>
   <td>Mahasiswa 0</td>
   <td>TKK</td>
   <td>Sistem Informasi</td>
   <td>
       <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
       <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</a>
   </td>
   <!-- /.Kumpulan Kolom-->
   ```



## F. GRAFIK CHART

1. Chart Area

   HTML

   ```html
   <div class="row">
       <!-- /.Kolom Grafik-->
       <div class="col-md-5">
           <div class="card card-primary">
               <div class="card-header">
                   <h3 class="card-title">GRAFIK : AREA</h3>
               </div>
               <div class="card-body">
               <!-- Kanvas Grafik Area-->
               <canvas id="grafik_area" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
               <!-- /.Kanvas Grafik Area-->
               </div>
           </div>
               
       </div>
       <!-- /.Kolom Grafik-->
   </div>
   ```

   JAVASCRIPT

   ```javascript
   <script>
       //SCRIPT GRAFIK AREA
       var kanvas_grafik_area = $('#grafik_area').get(0).getContext('2d');
       var data_grafik_area = {
           labels  : ['Januari', 'Februari', 'Maret', 'April', 'Mai', 'Juni', 'Juli'],
           datasets: [
               {
               label               : 'Pisang Goreng',
               backgroundColor     : 'rgba(60,141,188,0.9)',
               borderColor         : 'rgba(60,141,188,0.8)',
               pointRadius          : false,
               pointColor          : '#3b8bba',
               pointStrokeColor    : 'rgba(60,141,188,1)',
               pointHighlightFill  : '#fff',
               pointHighlightStroke: 'rgba(60,141,188,1)',
               data                : [28, 48, 40, 19, 86, 27, 90]
               },
               {
               label               : 'Tahu Isi',
               backgroundColor     : 'rgba(210, 214, 222, 1)',
               borderColor         : 'rgba(210, 214, 222, 1)',
               pointRadius         : false,
               pointColor          : 'rgba(210, 214, 222, 1)',
               pointStrokeColor    : '#c1c7d1',
               pointHighlightFill  : '#fff',
               pointHighlightStroke: 'rgba(220,220,220,1)',
               data                : [65, 59, 80, 81, 56, 55, 40]
               },
           ]
       }
       var options_grafik_area = {
           maintainAspectRatio : true,
           responsive : true,
           legend: {
               display: true
           },
           scales: {
               xAxes: [{
               gridLines : {
                   display : true,
               }
               }],
               yAxes: [{
               gridLines : {
                   display : true,
               }
               }]
           }
       }
       var grafik_area = new Chart(kanvas_grafik_area, { 
           type: 'line',
           data: data_grafik_area, 
           options: options_grafik_area
       });
       //.SCRIPT GRAFIK AREA
   </script>
   ```

   

2. Chart Line

   HTML

   ```html
   <div class="row">
       <!-- Kolom Grafik-->
       <div class="col-md-5">
           <div class="card card-primary">
               <div class="card-header">
                   <h3 class="card-title">GRAFIK : LINE</h3>
               </div>
               <div class="card-body">
               <!-- Kanvas Grafik Line-->
               <canvas id="grafik_line" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
               <!-- /.Kanvas Grafik Line-->
               </div>
           </div>
               
       </div>
       <!-- /.Kolom Grafik-->
   </div>
   ```

   JAVASCRIPT

   ```javascript
   <script>
       //SCRIPT GRAFIK LINE
       var kanvas_grafik_line = $('#grafik_line').get(0).getContext('2d');
       var data_grafik_line = {
           labels  : ['Januari', 'Februari', 'Maret', 'April', 'Mai', 'Juni', 'Juli'],
           datasets: [
               {
               label               : 'Bakar Rica',
               backgroundColor     : 'rgba(60,141,188,0.9)',
               borderColor         : 'rgba(60,141,188,0.8)',
               pointRadius          : false,
               pointColor          : '#3b8bba',
               pointStrokeColor    : 'rgba(60,141,188,1)',
               pointHighlightFill  : '#fff',
               pointHighlightStroke: 'rgba(60,141,188,1)',
               data                : [28, 48, 40, 19, 86, 27, 90]
               },
               {
               label               : 'Garo Rica',
               backgroundColor     : 'rgba(210, 214, 222, 1)',
               borderColor         : 'rgba(210, 214, 222, 1)',
               pointRadius         : false,
               pointColor          : 'rgba(210, 214, 222, 1)',
               pointStrokeColor    : '#c1c7d1',
               pointHighlightFill  : '#fff',
               pointHighlightStroke: 'rgba(220,220,220,1)',
               data                : [65, 59, 80, 81, 56, 55, 40]
               },
           ]
       }
       var options_grafik_line = {
           maintainAspectRatio : true,
           responsive : true,
           legend: {
               display: true
           },
           scales: {
               xAxes: [{
               gridLines : {
                   display : true,
               }
               }],
               yAxes: [{
               gridLines : {
                   display : true,
               }
               }]
           }
       }
   
       data_grafik_line.datasets[0].fill = false;
       data_grafik_line.datasets[1].fill = false;
       data_grafik_line.datasetFill = false
       var grafik_line = new Chart(kanvas_grafik_line, { 
           type: 'line',
           data: data_grafik_line, 
           options: options_grafik_line
       })
       //.SCRIPT GRAFIK LINE
   </script>
   ```

   

3. Chart Bar

   HTML

   ```html
   <div class="row">
       <!-- Kolom Grafik-->
       <div class="col-md-5">
           <div class="card card-primary">
               <div class="card-header">
                   <h3 class="card-title">GRAFIK : BAR</h3>
               </div>
               <div class="card-body">
               <!-- Kanvas Grafik Bar-->
               <canvas id="grafik_bar" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
               <!-- /.Kanvas Grafik Bar-->
               </div>
           </div>
       </div>
       <!-- /.Kolom Grafik-->
   </div>
   ```

   JAVASCRIPT

   ```javascript
   <script>
       //SCRIPT GRAFIK BAR
       var kanvas_grafik_bar = $('#grafik_bar').get(0).getContext('2d');
       var data_grafik_bar = {
           labels  : ['Januari', 'Februari', 'Maret', 'April', 'Mai', 'Juni', 'Juli'],
           datasets: [
               {
               label               : 'Kopi',
               backgroundColor     : 'rgba(60,141,188,0.9)',
               borderColor         : 'rgba(60,141,188,0.8)',
               pointRadius          : false,
               pointColor          : '#3b8bba',
               pointStrokeColor    : 'rgba(60,141,188,1)',
               pointHighlightFill  : '#fff',
               pointHighlightStroke: 'rgba(60,141,188,1)',
               data                : [28, 48, 40, 19, 86, 27, 90]
               },
               {
               label               : 'Susu',
               backgroundColor     : 'rgba(210, 214, 222, 1)',
               borderColor         : 'rgba(210, 214, 222, 1)',
               pointRadius         : false,
               pointColor          : 'rgba(210, 214, 222, 1)',
               pointStrokeColor    : '#c1c7d1',
               pointHighlightFill  : '#fff',
               pointHighlightStroke: 'rgba(220,220,220,1)',
               data                : [65, 59, 80, 81, 56, 55, 40]
               },
           ]
       }
       var option_grafik_bar = {
           responsive              : true,
           maintainAspectRatio     : false,
           datasetFill             : false
       }
       var grafik_bar = new Chart(kanvas_grafik_bar, {
           type: 'bar', 
           data: data_grafik_bar,
           options: option_grafik_bar
       })
       //.SCRIPT GRAFIK BAR
   </script>
   ```

   

4. Chart Pie

   HTML

   ```html
   <div class="row">
       <!-- Kolom Grafik-->
       <div class="col-md-5">
           <div class="card card-primary">
               <div class="card-header">
                   <h3 class="card-title">GRAFIK : PIE</h3>
               </div>
               <div class="card-body">
               <!-- Kanvas Grafik Pie-->
               <canvas id="grafik_pie" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
               <!-- /.Kanvas Grafik Pie-->
               </div>
           </div>
               
       </div>
       <!-- /.Kolom Grafik-->
   </div>
   ```

   JAVASCRIPT

   ```javascript
   <script>
       //SCRIPT GRAFIK PIE
       var kanvas_grafik_pie = $('#grafik_pie').get(0).getContext('2d');
       var data_grafik_pie = {
           labels: [
               'Kopi', 
               'Teh',
               'Susu', 
               'Jus Mangga', 
               'Jus Alvokad', 
               'Perasan Jeruk', 
           ],
           datasets: [
               {
               data: [700,500,400,600,300,100],
               backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
               }
           ]
       }
       var option_grafik_pie     = {
           maintainAspectRatio : false,
           responsive : true,
       }
   
       var grafik_pie = new Chart(kanvas_grafik_pie, {
           type: 'pie',
           data: data_grafik_pie,
           options: option_grafik_pie      
       })
       //.SCRIPT GRAFIK PIE
   </script>
   ```

   

apabila ada pertanyaan silahkan kirim email ke Arifin P. Tindi di `paulustindi@gmail.com`