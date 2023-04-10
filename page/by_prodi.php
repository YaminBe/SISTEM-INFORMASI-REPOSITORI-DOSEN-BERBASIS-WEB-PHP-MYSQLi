<div class="container">
		<div class="row">
		<div class="col-md-3">
	<h3>Browse By Prodi</h3>
			<ul>
					<?php 
					$sql=mysqli_query($konek,"SELECT * FROM tb_dosen
				 	INNER JOIN tb_prodi ON tb_dosen.id_prodi=tb_prodi.id_prodi
				 	INNER JOIN tb_karya ON tb_dosen.id_dosen=tb_karya.id_dosen
				 	INNER JOIN tb_jenis ON tb_karya.id_jenis=tb_jenis.id_jenis
				 	GROUP BY tb_prodi.id_prodi");
				 while ($data = mysqli_fetch_array($sql)) {
				 ?>
				     <li>
				      <a href="?page=prodi&id=<?php echo $data['id_prodi']; ?>" title="" style="text-decoration:line 1px solid;font-size: 18px;"> <?php echo $data['prodi']; ?> (<?php echo $data['tahun_terbit']; ?>)
				      		
				      	</a>
				     </li>
				     <?php 
				   
				 } ?>
				</ul>
			</div>
			<div class="col-md-9" style="border-left: 2px solid #2196F3;">
			<hr>
			<?php echo $data['prodi']; ?>

<?php 
$no=1;
$query= "SELECT * FROM tb_dosen
				 	INNER JOIN tb_prodi ON tb_dosen.id_prodi=tb_prodi.id_prodi
				 	INNER JOIN tb_karya ON tb_dosen.id_dosen=tb_karya.id_dosen
				 	INNER JOIN tb_jenis ON tb_karya.id_jenis=tb_jenis.id_jenis
 WHERE tb_dosen.id_dosen='$data[id_karya]'  ";
$sql_ds = mysqli_query($konek,$query) or die(mysqli_error($con)) ;
while ( $data= mysqli_fetch_array($sql_ds) ) { ?>

		<ul>

			<li style="color: #fff;"> <span class="fa fa-angle-double-right" style="color: black;"></span><a href="?page=detail&id=<?php echo $data['id_karya']; ?>" title=""> <b><?php echo $data['nama_dosen'] ?> (<?php echo $data['tahun_terbit']; ?>)</b> | Judul : <?php echo $data['judul'] ?> | (<?php echo $data['jenis']; ?>)</a></li>
		<!-- 
			<td><a href="?page=detail&id=<?php echo $data['id_karya']; ?>" class="btn btn-success btn-xs"> <span class="fa fa-search-plus"></span> Detail </a></td> -->
		</ul>
			<?php
			}
			?>

		</div>
		</div>
	
</div>