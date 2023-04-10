<div class="container">
<div class="row title-bar">
	<div class="col-md-3">
		<ul>
			<?php 
			$no=1;

			$sql=mysqli_query($konek,"SELECT id_karya,tahun_terbit FROM tb_karya GROUP BY tahun_terbit");
			while ($data = mysqli_fetch_array($sql)) {
			?>
				<li style="color: #fff;" class="list-group-item">
					<a href="?page=tahun&id=<?php echo $data['id_karya']; ?>" title="" style="text-decoration:line 1px solid;font-size: 18px;color: red;">
					<?php echo $no++; ?> . <?php echo $data['tahun_terbit']; ?>
					</a>
				</li>
			<?php 

			} ?>
		</ul>			
		</div><!-- col-md-3 -->

			<?php 
			$id = @$_GET['id'];
			$sql = mysqli_query($konek,"SELECT * FROM tb_karya WHERE id_karya='$id'");
			$data = mysqli_fetch_array($sql);
			?>
<div class="col-md-9" style="border-left: 2px solid;">
	<h4>Berikut Data Karya Tahun <code><?php echo $data['tahun_terbit']; ?></code> </h4>
		<?php 
		$no=1;
		$query= "SELECT * FROM tb_karya
		INNER JOIN tb_jenis ON tb_karya.id_jenis=tb_jenis.id_jenis
		INNER JOIN tb_dosen ON tb_karya.id_dosen=tb_dosen.id_dosen
		WHERE tb_karya.tahun_terbit='$data[tahun_terbit]'  ";
		$sql_ds = mysqli_query($konek,$query) or die(mysqli_error($con)) ;

		while ( $data= mysqli_fetch_array($sql_ds) ) { ?>
		<ul> 
			<li style="color: #fff;" class="list-group-item">
				<a href="?page=detail&id=<?php echo $data['id_karya']; ?>">
				 <b><?php echo $data['nama_dosen'] ?> (<?php echo $data['tahun_terbit']; ?>)</b> | Judul : <?php echo $data['judul'] ?> | (<?php echo $data['jenis']; ?>)</a>
			</li>
		</ul>
		<?php
		}
		?>

</div>
</div>
</div>