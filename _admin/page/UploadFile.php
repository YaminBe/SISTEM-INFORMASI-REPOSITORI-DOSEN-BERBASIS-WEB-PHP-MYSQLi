  <div class="panel box-shadow-none content-header">
    <div class="panel-body">
      <div class="col-md-12">
          <h3 class="animated fadeInLeft"> Input File Karya</h3>
          <p class="animated fadeInDown">
            Dashboard <span class="fa-angle-right fa"></span> Input file
          </p>
      </div>
    </div>
  </div>


<div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading" style="background-color: #2196F3;">
                      <h4 style="color: #ffff;"> <span class="fa fa-folder"></span> Form Upload File Karya</h4>
                    </div>
                    <div class="col-md-12 panel-body">
                      <div class="col-md-12">
                        <form class="cmxform" id="signupForm" method="POST" action="" enctype="multipart/form-data">
                          <?php
                          $sql = mysqli_query($konek,"SELECT * FROM tb_karya ORDER BY id_karya DESC LIMIT 1") or die(mysqli_error($konek));
                          $data = mysqli_fetch_array($sql);
                          ?>
              
                          <div class="col-md-12">
                            <div class="form-group form-animate-text">
                              <input type="hidden" name="id_karya" value=" <?php echo $data['id_karya'] ?>">
                              <!-- <p class="text-danger">Isikan Kolom Berikut Seperti Judul / Lainya Untuk Penamaan File Yanga Akan Di Upload</p> -->
                            </div>
                        </div>
                          <div class="col-md-12">
                            <div class="form-group form-animate-text">
                              <input type="text" class="form-text" id="validate_firstname" name="nama" required>
                              <span class="bar"></span>
                              <label> Judul Karya / Nama File Lainnya ... *</label>
                            </div>
                          </div>
                        <div class="col-md-12">
                        <p>
                        Silahkan Upload file dengan melengkapi form di bawah ini. File yang bisa di Upload hanya file dengan ekstensi .doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf, .rar, .exe, .zip, .jpg, .png dan besar file (file size) maksimal hanya 2 MB.
                        </p>
                        </div>
                      
                       <div class="col-lg-6">
                          <div class="input-group fileupload-v1">
                            <input type="file" name="file" class="fileupload-v1-file hidden"/>
                            <input type="text" class="form-control fileupload-v1-path" placeholder="File Path..." disabled>
                            <span class="input-group-btn">
                              <button class="btn fileupload-v1-btn" type="button"><i class="fa fa-folder"></i> Pilih Lokasi File</button>
                            </span>
                          </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->
                        <br>

                                          
                          <div class="col-md-12">
                            <p class="text-danger"> Jika Kolom Telah Terisi dengan baik, Tekan Tombol Next Untuk Upload File</p>
                              <input name="upload" class="submit btn btn-primary btn-lg" type="submit" value="Save And Done"">
                        </div>
                      </form>
                      <?php
include '../koneksi.php';

//fungsi untuk mengkonversi size file
function formatBytes($bytes, $precision = 2) { 
$units = array('B', 'KB', 'MB', 'GB', 'TB'); 

$bytes = max($bytes, 0); 
$pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
$pow = min($pow, count($units) - 1); 

$bytes /= pow(1024, $pow); 

return round($bytes, $precision) . ' ' . $units[$pow]; 
} 

if(@$_POST['upload']){
$allowed_ext  = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');

$file_name    = $_FILES['file']['name'];
$file_ext     = strtolower(end(explode('.', $file_name)));
$file_size    = $_FILES['file']['size'];
$file_tmp     = $_FILES['file']['tmp_name'];

$id_karya       = $_POST['id_karya'];
$nama         = $_POST['nama'];
$tgl          = date("Y-m-d");


if(in_array($file_ext, $allowed_ext) === true){
if($file_size < 3044070){
$lokasi = '../file/'.$nama.'.'.$file_ext;
move_uploaded_file($file_tmp, $lokasi);
$in = mysqli_query($konek,"INSERT INTO tb_file (

  id_file,id_karya,tanggal_upload,nama_file,tipe_file,ukuran_file,file) VALUES(NULL,'$id_karya','$tgl', '$nama', '$file_ext', '$file_size', '$lokasi')");
if($in){
  echo "<script>
  alert('Sukses !! Data Berhasil DiUpload Kedatabase !!');
  window.location='?page=v_karya';
</script>";

}else{
echo '<div class="error">ERROR: Gagal upload file!</div>';
}
}else{
echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
}
}else{
echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
}
}

?> 


                    </div>
                  </div>
                </div>
              </div>
          </div>
