<?php 
$id = $_GET['id'];
$sql = mysqli_query($konek,"SELECT * FROM tb_jenis WHERE id_jenis='$id'");
$data = mysqli_fetch_array($sql);
?>
<div class="container">

<div class="row title-bar">
<div class="col-md-12">

  <h4 class="wow fadeInUp"> <span class="fa fa-search"></span> Datail Jenis Karya |<b><?php echo $data['jenis'] ?></b></h4>

		<?php 
		$query= "SELECT * FROM tb_karya
		INNER JOIN tb_jenis ON tb_karya.id_jenis=tb_jenis.id_jenis
		WHERE tb_jenis.jenis='$data[jenis]'  ";
		$sql_ds = mysqli_query($konek,$query) or die(mysqli_error($con)) ;
		while ( $data= mysqli_fetch_array($sql_ds) ) { ?>
		   <ul class="list-unstyled link-list">
			<li class="list-group-item">
			<a href="?page=detail&id=<?php echo $data['id_karya']; ?>">
				<?php echo $data['jenis'] ?> ( <?php echo $data['tahun_terbit'] ?>) <b>Judul :</b> <strong><?php echo $data['judul'] ?></strong> 
			</a>

			</li>
		</ul>
		<?php
		}
		?>

</div>
</div>
	
</div>