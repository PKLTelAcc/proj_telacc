<!-- Main content -->
<div class="content">
	<div class="row">
		<?php
      if ($_SESSION['level'] == 'SUPER USER' || $_SESSION['level'] == 'ADMIN INSTALASI') {
	      	foreach ($statusInstalasi as $key) {
        ?>
	  <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Report <?php echo $key['STIN_NAME']; ?></h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
			<table class="table table-bordered table-hover table-striped" id="LAPORAN<?php echo $key['STIN_NAME']; ?>">
				<thead>
					<tr>
						<th>No</th>
						<th>ID TA</th>
						<th>Witel</th>
						<th>Sub Witel</th>
						<th>Program</th>
						<th>Lokasi</th>
						<th>Nilai ODP</th>
						<th>Nilai Material</th>
						<th>Nilai Jasa</th>
						<th>Nilai Total</th>
						<th>Mitra</th>
<!-- KOMEN INI JANGAN DIHAPUS -->
						<!-- <th>Nama Waspang</th>
						<th>NIK Waspang</th> -->
<!-- SAMPAI SINI -->
						<th>Status</th>
						<th>Status Instalasi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1;
		 				foreach ($dataReportByStatusInst as $row) {
		 				if ($key['STIN_NAME']==$row['STIN_NAME']) {
		 					echo "<tr>";
		 					echo "<td>".$no."</td>";
		 					echo "<td>".$row['WODE_ID_TA']."</td>";
		 					echo "<td>".$row['WTEL_NAME']."</td>";
		 					echo "<td>".$row['SWIT_NAME']."</td>";
		 					echo "<td>".$row['PROG_NAME']."</td>";
		 					echo "<td>".$row['WODE_NAMA_LOKASI']."</td>";
		 					echo "<td>".$row['INST_ODP']."</td>";
		 					echo "<td>".$row['INST_MATERIAL']."</td>";
		 					echo "<td>".$row['INST_JASA']."</td>";
		 					echo "<td>".$row['INST_TOTAL']."</td>";
		 					echo "<td>".$row['MTRA_NAME']."</td>";
//KOMEN INI JANGAN DIHAPUS
							// echo "<td>".$row['PEGA_NAME']."</td>";
							// echo "<td>".$row['PEGA_NIK']."</td>";
//SAMPAI SINI
		 					echo "<td>".$row['STAT_NAME']."</td>";
		 					echo "<td>".$row['STIN_NAME']."</td>";
		 					echo "</tr>";
		 					$no++;
		 					}
		 				}
		 			 ?>
				</tbody>
			</table>
	      </div>
	    </div>
	      <!-- /.box -->
	  </div> <!-- col-input -->
	  <?php
			}
		?>
	</div>
</div>
<!-- /.content -->

<?php
	foreach ($statusInstalasi as $key) {
?>
<script type="text/javascript">
    $(function () {
        $('#LAPORAN<?php echo $key['STIN_NAME']; ?>').dataTable( {
          "bSort": false,
          dom:'B <"content-header" <"col-sm-2"l> f>tipH',
          buttons: [ 'excel' ]
        } );
  });
</script>
<?php
	}
?>


<?php
      }
      if ($_SESSION['level'] != 'SUPER USER' || $_SESSION['level'] != 'ADMIN INSTALASI') {
        echo '<div class="col-md-12">';
      }else{
        echo '<div class="col-md-6">';
      }
    ?>