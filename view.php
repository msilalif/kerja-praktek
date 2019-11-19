<div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<th class="text-center">NO</th>
			<th>NAMA</th>
			<th>PASSWORD</th>
			<th>AUDIO</th>
		</tr>
		<?php  
		include "connect.php";
		if(isset($keyword)){
			$param = '%'.mysqli_real_escape_string($konek, $keyword).'%';
			$sql = mysqli_query($konek, "SELECT * FROM user WHERE nama LIKE '".$param."' OR password LIKE '".$param."'");
		}else{ 
			$sql = mysqli_query($konek, "SELECT * FROM user");
		}
			
		$no = 1;
		while($data = mysqli_fetch_array($sql)){
		?>
			<tr>
				<td class="align-middle text-center" name="no"><?php echo $no; ?></td>
				<td class="align-middle"><?php echo $data['nama']; ?></td>
				<td class="align-middle"><?php echo $data['password']; ?></td>
				<td class="align-middle"><audio controls id="audio"><source src="<?php echo $data['audio']?>" type="audio/mpeg;audio/wav"></audio></td>
			</tr>
		<?php
			$no++;
		}
		?>
	</table>
</div>
