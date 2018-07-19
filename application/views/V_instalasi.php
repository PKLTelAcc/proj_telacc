<!-- Main content -->
<div class="content">
	<div class="row">
	  <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Input Instalsai</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
	        <div class="row">
	          <div class="col-md-12 ">
	            <form action="<?php echo base_url().'C_instalasi/form'; ?>" method="POST">
	            	<div class="form-group">
	                  <label class=" control-label">ID TA</label>
	                  <div class="input-group">
	                      <input class="form-control" placeholder="== Pilih ID TA ==" name="txtIDTAMuncul" id="myInput" required="true" readonly="true">
	                      <input class="form-control" id="txtIDTA" type="hidden" name="txtIDTA">
						<div class="input-group-btn">
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalIDTAInstalasi">Search</button>
						</div>
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Witel</label>
	                  <div>
	                      <input class="form-control" placeholder="Witel" id="inputWitel" type="text" name="txtWtelMuncul" required="true" readonly="true">
	                      <input class="form-control" id="witel" type="hidden" name="txtWtel">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Sub Witel</label>
	                  <div>
	                      <input class="form-control" placeholder="Sub Witel" id="inputSubWitel" type="text" name="txtSwitMuncul" required="true" readonly="true">
	                      <input class="form-control" id="subWitel" type="hidden" name="txtSwit">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Program</label>
	                  <div>
	                      <input class="form-control" placeholder="Program" id="inputProgram" type="text" name="txtProgMuncul" required="true" readonly="true">
	                      <input class="form-control" id="program" type="hidden" name="txtProg">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nama Lokasi</label>
	                  <div>
	                      <input class="form-control" placeholder="Nama Lokasi" id="namaLokasi" type="text" name="txtLokasi" required="true" readonly="true">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nilai Material</label>
	                  <div>
	                      <input class="form-control" placeholder="Nilai Material" type="number" name="txtMaterial" required="true">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nilai Jasa</label>
	                  <div>
	                      <input class="form-control" placeholder="Nilai Jasa" type="number" name="txtJasa" required="true">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nilai Total</label>
	                  <div>
	                      <input class="form-control" placeholder="Nilai Total" type="number" name="txtTotal" required="true">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Jumlah ODP</label>
	                  <div>
	                      <input class="form-control" placeholder="Jumlah ODP" type="number" name="txtODP" required="true">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nama Waspang</label>
	                  <div class="input-group">
	                      <input class="form-control" placeholder="== Pilih Surveyer ==" name="txtSurveyerMuncul" id="myInput2" required="true">
	                      <input class="form-control" id="txtSurveyer" type="hidden" name="txtSurveyer">
						<div class="input-group-btn">
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalSurveyer">Search</button>
						</div>
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">NIK Waspang</label>
	                  <div>
	                      <input class="form-control" placeholder="NIK Surveyer" id="nik" type="text" name="txtNIK" required="true" readonly="true">
	                  </div>
	              	</div>
	              	<div class="form-group">
						<label class="control-label">Mitra</label>
						<div class="input-group">
							<select class="form-control" name="txtMitra" id="cmbMitra" required="true" >
								<option value="0">== Pilih Mitra ==</option>
									<?php  
										foreach ($mitra as $row){
											echo "<option value='".$row['MTRA_ID']."'>";
											echo $row ['MTRA_NAME'];
											echo "</option>";
										}
									?>
							</select>
							<div class="input-group-btn">
						  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalMitra">Search</button>
						</div>
						</div>
					</div>
	              	<div class="form-group">
	                  <label class=" control-label">Tanggal Selesai Instalasi</label>
	                  <div>
	                    <span id="qty">
	                      <input class="form-control" type="date" name="dateSurvey" required="true">  
	                    </span>
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Target Selesai</label>
	                  <div>
	                    <span id="qty">
	                      <input class="form-control" type="date" name="dateTarget" required="true">  
	                    </span>
	                  </div>
	              	</div>
	              	<div class="form-group">
						<label class="control-label">Status</label>
						<div>
							<select class="form-control" name="txtStat" id="cmbStat" required="true" >
								<option value="0">== Pilih Status ==</option>
									<?php  
										foreach ($status as $row){
											echo "<option value='".$row['STAT_ID']."'>";
											echo $row ['STAT_NAME'];
											echo "</option>";
										}
									?>
							</select>
						</div>
					</div>
	                  <div class="form-group">
	                  <label class=" control-label">Progres</label>
	                  <div>
	                    <span id="qty">
	                      <textarea class="form-control" type="text" name="txtprogres" placeholder="Alamat Lokasi"></textarea>
	                    </span>
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Kendala</label>
	                  <div>
	                    <span id="qty">
	                      <textarea class="form-control" type="text" name="txtkendala" placeholder="Alamat Lokasi"></textarea>
	                    </span>
	                  </div>
	              	</div>
	              	<div class="form-group">
	                <div class="row">
	                  <div class="col-md-10">
	                    <button type="reset" class="btn btn-danger pull-right">Cancel</button>
	                  </div>
	                  <div class="col-md-2">
	                    <button type="submit" class="btn btn-danger pull-right" data-toggle="modal" data-target="#modal-success2" onclick="modalKonfirmasiTakJadi()" >Input Data</button>
	                  </div>
	              	</div>
	                </div>
	              </div>
	            </form>
	          </div>
	          <!-- /.col -->
	        </div>
	        <!-- /.row -->
	      </div>
	    </div>
	      <!-- /.box -->
	  </div> <!-- col-input -->
	  <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Data Survey</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
			<table class="table table-bordered table-hover table-striped" id="lookup">
				<thead>
					<tr>
						<th>No.</th>
						<th>ID TA</th>
			<!-- 			<th>Nama Witel</th>
						<th>Nama Sub Witel</th>
						<th>Program</th>
						<th>Nama Lokasi</th> -->
						<th>Nilai Material</th>
						<th>Nilai Jasa</th>
						<th>Nilai Total</th>
						<th>Jumlah ODP</th>
						<th>Mitra</th>
						<th>Nama Waspang</th>
						<th>NIK Waspang</th>
						<th>Tanggal Selesai Survey</th>
						<th>Target Selesai</th>
						<th>Status</th>
						<th>Progres</th>
						<th>Kendala</th>
						<th style="text-align: center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no=1;
						foreach ($instalasi as $row) {
							echo "<tr>";
							echo "<td>".$no."</td>";
							echo "<td>".$row['WODE_ID_TA']."</td>";
							// echo "<td>".$row['WTEL_NAME']."</td>";
							// echo "<td>".$row['SWIT_NAME']."</td>";
							// echo "<td>".$row['PROG_NAME']."</td>";
							// echo "<td>".$row['WODE_NAMA_LOKASI']."</td>";
							echo "<td>".$row['INST_MATERIAL']."</td>";
							echo "<td>".$row['INST_JASA']."</td>";
							echo "<td>".$row['INST_TOTAL']."</td>";
							echo "<td>".$row['INST_ODP']."</td>";
							echo "<td>".$row['MTRA_NAME']."</td>";
							echo "<td>".$row['PEGA_NAME']."</td>";
							echo "<td>".$row['PEGA_NIK']."</td>";
							echo "<td>".$row['INST_TANGGAL']."</td>";
							echo "<td>".$row['INST_TARGET']."</td>";
							echo "<td>".$row['STAT_NAME']."</td>";
							echo "<td>".$row['INST_PROGRES']."</td>";
							echo "<td>".$row['INST_KENDALA']."</td>";
							echo "<td><a href='".base_url()."C_instalasi/formUpdate/".$row['INST_ID']."'>Edit</a> | <a href='".base_url()."C_instalasi/delete/".$row['INST_ID']."'>Delete</a></td>";
							echo "</tr>";

							$no++;
						}
					 ?>
				</tbody>
			</table>
	      </div>
	    </div>
	      <!-- /.box -->
	  </div> <!-- col-input -->
	</div>
</div>
<!-- /.content -->

<!-- modal IDTA -->
<div class="modal fade" id="modalIDTAInstalasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data Instalasi</h4>
            </div>
            <div class="modal-body">
                <table id="surveyIDTA" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>ID TA</th>
                        <th>Witel</th>
                        <th>Sub Witel</th>
                        <th>Program</th>
                       	<th>Nama Lokasi</th>
                      </tr>
                    </thead>        
                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($workOrder as $row) {
                        ?>
                          <tr class="isi" style="cursor: pointer;" data-id = "<?=$row['WODE_ID']?>" data-lokasi="<?php echo $row['WODE_NAMA_LOKASI']; ?>" data-program="<?php echo $row['PROG_ID']; ?>" data-inputProgram="<?php echo $row['PROG_NAME']; ?>" data-subWitel="<?php echo $row['SWIT_ID']; ?>" data-inputSubWitel="<?php echo $row['SWIT_NAME']; ?>" data-witel="<?php echo $row['WTEL_ID']; ?>" data-idta="<?php echo $row['WODE_ID_TA']; ?>" data-inputWitel="<?php echo $row['WTEL_NAME']; ?>">
                            <td><?php echo $no?></td>
                            <td><?php echo $row['WODE_ID_TA']?></td>
                            <td><?php echo $row['WTEL_NAME']?></td>
                            <td><?php echo $row['SWIT_NAME']?></td>
                            <td><?php echo $row['PROG_NAME']?></td>
                            <td><?php echo $row['WODE_NAMA_LOKASI']?></td>
                          </tr>
                        <?php
                        $no++;
                      }
                      ?>
                    </tbody>
                </table>  
            </div>
        </div>
    </div>
</div>

<!-- Modal Surveyer -->
<div class="modal fade" id="modalSurveyer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data instalasi</h4>
            </div>
            <div class="modal-body">
                <table id="surveyer" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NIK Waspang</th>
                        <th>Nama Waspang</th>
                      </tr>
                    </thead>        
                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($pegawai as $row) {
                        ?>
                          <tr class="isi2" style="cursor: pointer;" data-id2 = "<?=$row['PEGA_ID']?>" data-nik="<?php echo $row['PEGA_NIK']; ?>" data-pegawai="<?php echo $row['PEGA_NAME']; ?>">
                            <td><?php echo $no?></td>
                            <td><?php echo $row['PEGA_NIK']?></td>
                            <td><?php echo $row['PEGA_NAME']?></td>
                          </tr>
                        <?php
                        $no++;
                      }
                      ?>
                    </tbody>
                </table>  
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalMitra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data instalasi</h4>
            </div>
            <div class="modal-body">
                <table id="tableMitra" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama Mitra</th>
                      </tr>
                    </thead>        
                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($mitra as $row) {
                        ?>
                          <tr class="isi3" style="cursor: pointer;" data-id3 = "<?=$row['MTRA_ID']?>" data-mitra="<?php echo $row['MTRA_NAME']; ?>">
                            <td><?php echo $no?></td>
                            <td><?php echo $row['MTRA_NAME']?></td>
                          </tr>
                        <?php
                        $no++;
                      }
                      ?>
                    </tbody>
                </table>  
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
	$(document).on('click', '.isi', function (e) {
		document.getElementById("txtIDTA").value 		= $(this).attr('data-id');
        document.getElementById("myInput").value 		= $(this).attr('data-idta');
        document.getElementById("namaLokasi").value 	= $(this).attr('data-lokasi');
        document.getElementById("program").value 		= $(this).attr('data-program');
        document.getElementById("inputProgram").value 	= $(this).attr('data-inputProgram');
        document.getElementById("subWitel").value 		= $(this).attr('data-subWitel');
        document.getElementById("inputSubWitel").value 	= $(this).attr('data-inputSubWitel');
        document.getElementById("witel").value 			= $(this).attr('data-witel');
        document.getElementById("inputWitel").value 	= $(this).attr('data-inputWitel');
        $('#modalIDTAInstalasi').modal('hide');
	});

    $(document).on('click', '.isi2', function (e) {
		document.getElementById("txtSurveyer").value 		= $(this).attr('data-id2');
        document.getElementById("myInput2").value 		= $(this).attr('data-pegawai');
        document.getElementById("nik").value 			= $(this).attr('data-nik');
        $('#modalSurveyer').modal('hide');        
    });
    $(document).on('click', '.isi3', function (e) {
		document.getElementById("cmbMitra").value 		= $(this).attr('data-id3');
        $('#modalMitra').modal('hide');        
    });
</script>

<!-- =========================================================================================================================================== -->

<!-- <h3>Input Survey</h3>
<form action="<?php echo base_url().'C_survey/form'; ?>" method="POST">
	<label>ID TA</label>
	<input name="txtIDTAMuncul" id="myInput" required="true">
	<input id="txtIDTA" type="hidden" name="txtIDTA">
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalIDTASurvey">Search</button><br>	
	<label>Witel</label>
	<input id="inputWitel" type="text" name="txtWtelMuncul" required="true" readonly="true">
	<input id="witel" type="hidden" name="txtWtel"><br>
	<label>Sub Witel</label>
	<input id="inputSubWitel" type="text" name="txtSwitMuncul" required="true" readonly="true">
	<input id="subWitel" type="hidden" name="txtSwit"><br>
	<label>Program</label>
	<input id="inputProgram" type="text" name="txtProgMuncul" required="true" readonly="true">
	<input id="program" type="hidden" name="txtProg"><br>
	<label>Nama Lokasi</label>
	<input id="namaLokasi" type="text" name="txtLokasi" required="true" readonly="true"><br>
	<label>Nilai Material</label>
	<input type="number" name="txtMaterial" required="true"><br>
	<label>Nilai Jasa</label>
	<input type="number" name="txtJasa" required="true"><br>
	<label>Nilai Total</label>
	<input type="number" name="txtTotal" required="true"><br>
	<label>Jumlah ODP</label>
	<input type="number" name="txtODP" required="true"><br>
	<label>Nama Surveyer</label>
	<input name="txtSurveyerMuncul" id="myInput2" required="true">
	<input id="txtSurveyer" type="hidden" name="txtSurveyer">
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalSurveyer">Search</button><br>
	<label>NIK Surveyer</label>
	<input id="nik" type="text" name="txtNIK" required="true" readonly="true"><br>
	<label>Tanggal Selesai Survey</label>
	<input type="date" name="dateSurvey" required="true"><br>
	<label>Status</label>
	<select name="txtStat" id="cmbStat" required="true">
		<option value="0">== Pilih Status ==</option>
		<?php  
			foreach ($status as $row){
				echo "<option value='".$row['STAT_ID']."'>";
				echo $row ['STAT_NAME'];
				echo "</option>";
			}
		?>
	</select> <br>
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form> -->

<!-- <hr>

<h3>Data Survey</h3>
<table border="1">
	<thead>
		<tr>
			<th>No.</th>
			<th>ID TA</th>
			<th>Nama Witel</th>
			<th>Nama Sub Witel</th>
			<th>Program</th>
			<th>Nama Lokasi</th>
			<th>Nilai Material</th>
			<th>Nilai Jasa</th>
			<th>Nilai Total</th>
			<th>Jumlah ODP</th>
			<th>Nama Surveyer</th>
			<th>NIK Surveyer</th>
			<th>Tanggal Selesai Survey</th>
			<th>Status</th>
			<th style="text-align: center">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no=1;
			foreach ($survey as $row) {
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$row['WODE_ID_TA']."</td>";
				// echo "<td>".$row['WTEL_NAME']."</td>";
				// echo "<td>".$row['SWIT_NAME']."</td>";
				// echo "<td>".$row['PROG_NAME']."</td>";
				// echo "<td>".$row['WODE_NAMA_LOKASI']."</td>";
				echo "<td>".$row['SURV_MATERIAL']."</td>";
				echo "<td>".$row['SURV_JASA']."</td>";
				echo "<td>".$row['SURV_TOTAL']."</td>";
				echo "<td>".$row['SURV_ODP']."</td>";
				echo "<td>".$row['PEGA_NAME']."</td>";
				echo "<td>".$row['PEGA_NIK']."</td>";
				echo "<td>".$row['SURV_TANGGAL']."</td>";
				echo "<td>".$row['STAT_NAME']."</td>";
				echo "<td><a href='".base_url()."C_survey/formUpdate/".$row['SURV_ID']."'>Edit</a> | <a href='".base_url()."C_survey/delete/".$row['SURV_ID']."'>Delete</a></td>";
				echo "</tr>";

				$no++;
			}
		 ?>
	</tbody>
</table> -->


