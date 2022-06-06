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
                <h5 class="card-title">Edit Data Buku</h5>

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
                      <!-- <strong>Data Buku</strong> -->
					  <?php if (validation_errors()): ?>
				  	<div class="alert alert-danger" role="alert">
					  <?php echo validation_errors(); ?>
					</div>
			  	<?php endif ?>
				<?php 
                echo $form 
                ?>
			    <!-- <table>
			    	<?php form_open('') ?>
			    	<tr>
							<td>
                                <?php form_label('Judul', 'judul') ?>
							</td>
							<td>
                                <?php form_input('judul', $b['judul'], 'id = judul') ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php form_label('Pengarang', 'pengarang') ?>
							</td>
							<td>
                                <?php form_input('pengarang', $b['pengarang'], 'id = pengarang') ?>
							</td>
						</tr>
						<tr>
							<td>
                                <?php form_label('Penerbit', 'penerbit') ?>
							</td>
							<td>
                                <?php form_input('penerbit', $b['penerbit'], 'id = penerbit') ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php form_label('Tahun Terbit', 'tahun') ?>
							</td>
							<td>
                                <?php form_input('tahun', $b['tahun'], 'id = tahun') ?>
							</td>
						</tr>
						<tr>
							<td>
                                <?php form_label('Genre', 'genre') ?>
							</td>
							<td>
                                <?php form_dropdown('genre', $options, $b['genre'], 'id=genre') ?>
							</td>
						</tr>
						<tr>
							<td>
                                <?php form_submit('simpan', 'Simpan Data')?>
							</td>
						</tr>
			    </table> -->
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