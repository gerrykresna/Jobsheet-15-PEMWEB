<!-- <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section> -->
    <section class="content-header">
      <h1>
        Tabel Data A
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
    $sql = "SELECT * FROM data";
    $query = mysqli_query($conn, $sql);
    ?>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Condensed Full Width Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tbody><tr>
                  <th style="width: 10px">No</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Jurusan</th>
                  <th>Prodi</th>
                 <th>Aksi</th>
                </tr>
                <!-- 
                -->
                <?php
                 $i =1;
                 while($row = mysqli_fetch_array($query))
                 {
                ?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$row['NIM']?></td>
                  <td><?=$row['Nama']?></td>
                  <td><?=$row['Jurusan']?></td>
                  <td><?=$row['Prodi']?></td>
                  <td>
                  <div class="btn-group">
                  <button type="button" class="btn btn-warning">Pilih</button>
                  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="http://localhost/PEMWEB/template/pages/examples/input.php">Tambah</a></li>
                    <li><a href="http://localhost/PEMWEB/template/pages/examples/update.php">Edit</a></li>
                    <li><a href="http://localhost/PEMWEB/template/pages/examples/delete.php">Hapus</a></li>
                  </ul>
                </div>
                  </td>
                </tr>
                <?php
                $i++;  }
              ?>
                <tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <!-- /.box -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
      </div>
    </section>