<div class="card">
  <div class="card-header no-border">
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
            $thead=$this->M_dashboard->getStatus();
            foreach ($thead as $row) {
              echo "<th>".$row['STAT_NAME']."</th>";
            }
             ?>
             <th>Total</th>
             <th>Detail</th>
          </tr>
          </thead>
          <tbody align="center">
            <?php
            $witel=$this->M_dashboard->getWitel();
            $total = 0;
            foreach ($witel as $row) {
              ?>
              <tr>
                <th><?=$row['WTEL_NAME']?></th>
              <?php
                  $count = $this->M_dashboard->getCount($row['WTEL_ID']);
                  foreach ($count as $key) {
                    if($row['WTEL_ID'] != Null){
              ?>
                    <td><?=$key['jumlah']?></td>
              <?php
                  }else{
              ?>
                  <td>0</td>
              <?php
                }
                  $total = $total + $key['jumlah'];
                  }
              ?>
                
                <td><?=$total?></td>
                <td>
                  <a href="<?php echo base_url().'C_report/detailWitel/'.$row['WTEL_ID'];?>" class="text-muted">
                    <i class="fa fa-search"></i>
                  </a>
                </td>
              </tr>
              <?php
              $total = 0;
            }
            ?>
            
          </tbody>
        </table>
       </div>
    </div>