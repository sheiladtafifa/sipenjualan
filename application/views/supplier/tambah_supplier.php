 <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">
					
						<div class="row">
									<div class="col-xl-12">
											<div class="breadcrumb-holder">
													<h1 class="main-title float-left">Tambah Supplier</h1>
													<div class="clearfix"></div>
											</div>
									</div>
						</div>
						<!-- end row -->

						<div class="row">
			
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">						
						<div class="card mb-3">
							<div class="card-header">
								<h3>Tambah Supplier</h3>
							</div>
								
							<div class="card-body">
											<?php if($this->session->flashdata('berhasil')): ?>
                            <div class="alert alert-success alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <h4>  <i class="icon fa fa-check"></i> Sukses!</h4>
                              <?php echo $this->session->flashdata('berhasil');?>
                            </div>
                          <?php endif; ?>
                          <?php if($this->session->flashdata('gagal')): ?>
                            <div class="alert alert-danger alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <h4>  <i class="icon fa fa-check"></i> Gagal!</h4>
                              <?php echo $this->session->flashdata('gagal');?>
                            </div>
                          <?php endif; ?>
					
							<form action = "<?php echo base_url('index.php/Supplier/insert');?>/" method="post">
                                <div class="form-group">
                                    <label>Nama Supplier</label>
                                    <input type="text" name="nama_supplier" data-parsley-trigger="change" required placeholder="Masukkan Nama Supplier" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Telp Supplier</label>
                                    <input type="text" name="telp_supplier" data-parsley-trigger="change" required placeholder="Masukkan Telp Supplier" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Alamat Supplier</label>
                                    <textarea class="form-control" name="alamat_supplier" data-parsley-trigger="change" required placeholder="Masukkan Alamat Supplier"></textarea>
                                    <!-- <input type="text" name="alamat_supplier" data-parsley-trigger="change" required placeholder="Masukkan Alamat Supplier" class="form-control"> -->
                                </div>
                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
										
							</div>														
						</div><!-- end card-->					
                    </div>

            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->