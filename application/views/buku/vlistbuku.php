<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
      
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Daftar Buku</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <p class="text-center">
                      <!-- <strong>List Buku</strong> -->
					  <div class="container d-flex justify-content-center">

						<div class="card">
						
							<div class="container my-3">
								<!-- <a class="btn btn-primary" href="<?php base_url() ?>home/inputForm" role="button">Input Materi</a> -->
							</div>
							<div class="card-body ">
							<div class="row">
								<div class="col-md-5">
									<table class="table">
									<thead class="table-dark">
										<th>ID</th>
										<th>Judul</th>
										<th>Pengarang</th>
										<th>Penerbit</th>
										<th>Tahun</th>
										<th>Genre</th>
										<th>Detail</th>
										<th>edit</th>
										<th>hapus</th>
									</thead>
									<tbody>
										<?php foreach ($list as $b): ?>
											<tr>
												<td> <?php echo $b['id_buku'] ?> </td>
												<td> <?php echo $b['judul'] ?> </td>
												<td> <?php echo $b['pengarang'] ?> </td>
												<td> <?php echo $b['penerbit'] ?> </td>
												<td> <?php echo $b['tahun'] ?> </td>
												<td> <?php echo $b['nama_genre'] ?> </td>
												<td>
													<a type="button" class="btn btn-primary btn-sm" href="<?php base_url() ?>Home/detail/<?php echo $b['id_buku'] ?>">Detail</a>
												</td>
												<td>
													<a type="button" class="btn btn-warning btn-sm" href="<?php base_url() ?>edit/<?php echo $b['id_buku'] ?>">Edit</a>
												</td>
												<td>
													<a type="button" class="btn btn-danger btn-sm" href="<?php base_url() ?>hapus/<?php echo $b['id_buku'] ?>">Hapus</a>
												</td>
											</tr>
										<?php endforeach ?>
									</tbody>
									</table>
								</div>
							</div>
						</div>
</div>
</div>


                    </p>

                  
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
             
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->