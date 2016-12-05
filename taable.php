<section class="content-header">
      <h1>
        Simple Tables
        <small>preview of simple tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>
<?php
include("koneksi.php");
$sql = "SELECT * FROM mobil";
$query = mysqli_query($conn, $sql);
 
?>
    <section class="content">
      <div class="row">
        <div class="col-md-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">ShowRoomMobil Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tbody><tr>
                  <th style="width: 10px">No</th>
                  <th>ID Mobil</th>
                  <th>Merk</th>
                  <th>Model</th>
                  <th>Tipe</th>
                  <th>Tahun Produksi</th>
                  <th>Pilihan</th>
                </tr>
                <?php
                $i=1;
                 while($row = mysqli_fetch_array($query)){
                 
                   ?>
                <tr>
                  <td><?=$i;?></td>
                  <td><?=$row['Id_Mobil'];?></td>
                  <td><?=$row['Merk'];?></td>
                  <td><?=$row['Model'];?></td>
                  <td><?=$row['Tipe'];?></td>
                  <td><?=$row['Tahun_Produksi'];?></td>
                  
                  <td>
                   <div class="btn-group">
                   <button type="button" class="btn btn-success">Option</button>
                   <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>

                  <ul class="dropdown-menu" role="menu">
                    <li><a href="http://localhost/templates/pages/examples/register.php">+</a></li>
                    <li><a href="http://localhost/templates/pages/examples/updatedata.php">Edit</a></li>
                    <li><a href="http://localhost/templates/pages/examples/hapus.php">Hapus</a></li>

                   
                  </ul>
                </div>
                </td>
                </tr>
                <tr>
                <?php
                $i++;
                  }
                ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        </div>
      </div>
    </section>