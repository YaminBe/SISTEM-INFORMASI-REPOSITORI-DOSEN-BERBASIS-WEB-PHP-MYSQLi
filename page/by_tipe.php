<div class="container">
<div class="row title-bar">
<div class="col-md-12">
	<h3>Browse By Jenis or Type Karya</h3>
			<ul>
					<?php 
					$sql=mysqli_query($konek,"SELECT * FROM tb_dosen
				 	INNER JOIN tb_prodi ON tb_dosen.id_prodi=tb_prodi.id_prodi
				 	INNER JOIN tb_karya ON tb_dosen.id_dosen=tb_karya.id_dosen
				 	INNER JOIN tb_jenis ON tb_karya.id_jenis=tb_jenis.id_jenis

				  GROUP BY tb_jenis.jenis");
				 while ($data = mysqli_fetch_array($sql)) {
				 ?>
				
                            <li style="color: #fff;" class="list-group-item">
				      <a href="?page=jenis&id=<?php echo $data['id_jenis']; ?>" title="" style="text-decoration:line 1px solid;font-size: 18px;"><?php echo $data['jenis']; ?>  [ <?php echo $data['prodi']; ?>]
				      		
				      	</a>
				     </li>
				     <?php 
				   
				 } ?>
				</ul>
	
</div>
</div>
</div>
