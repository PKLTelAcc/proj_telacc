<div class="card" id="tableDashboardInstalasi">
  <div class="card-header no-border">
    <?php 
     if ($_SESSION['level'] == 'SUPER USER' || $_SESSION['level'] == 'ADMIN INSTALASI') {
     ?>
    <h3 class="card-title"></h3>
      <div class="card-tools">
          <!-- <a href="#" class="btn btn-tool btn-sm">
            <i class="fa fa-download"></i>
          </a>
          <a href="#" class="btn btn-tool btn-sm">
            <i class="fa fa-bars"></i>
          </a> -->
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped table-valign-middle">
          <thead>
          <tr>
            <th>WITEL</th>
            <?php
            $thead=$this->M_dashboardInstalasi->getStatusInstalasiDasboard();
            foreach ($thead as $row) {
            ?>
              <th>
                  <a href="<?php echo base_url().'C_dashboardInstalasi/detailStatusInst/'.$row['STIN_ID'];?>" class="text-info">
                  <?php echo $row['STIN_NAME'];?>
                  </a>
              </th>
            <?php
            }
             ?>
             <th>Total</th>
          </tr>
          </thead>
          <tbody align="center">
            <?php
            $witel=$this->M_dashboardInstalasi->getWitel();
            $total = 0;
            foreach ($witel as $row) {
              ?>
              <tr>
                <th><?=$row['WTEL_NAME']?></th>
              <?php
                  $count = $this->M_dashboardInstalasi->getCount($row['WTEL_ID']);
                  foreach ($count as $key) {
              ?>
                    <td>
                      <?php if ($key['INST_STIN_ID'] != null) { ?>
                      <a href="<?php echo base_url().'C_dashboardInstalasi/detailInst/'.$row['WTEL_ID'].'/'.$row['STIN_ID'];?>" class="text-info">
                      <?php } ?>
                        <?=$key['jumlah']?>
                      </a>
                    </td>
              <?php
                  $total = $total + $key['jumlah'];
                }
              ?>
                  <td><?=$total?></td>
              </tr>
              <?php
              $total = 0;
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
          </tbody>
        </table>
       </div>
    </div>