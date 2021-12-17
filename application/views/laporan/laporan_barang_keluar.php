<!--  <style type="text/css">
    table,
    th,
    tr,
    td {
        text-align: center;
    }

    .swal2-popup {
        font-family: inherit;
        font-size: 1.2rem;
    }

    .btn-group,
    .btn-group-vertical {
        position: relative;
        display: initial;
        vertical-align: middle;
    }
</style> -->

 <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">
					
						<div class="row">
									<div class="col-xl-12">
											<div class="breadcrumb-holder">
													<h1 class="main-title float-left">Laporan Barang Keluar</h1>
													<div class="clearfix"></div>
											</div>
									</div>
						</div>
						<!-- end row -->

						<div class="row">
				
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-12">						
							<div class="card mb-3">
								<div class="card-header">
									<h3>Laporan Barang Keluar</h3>
								</div>
									
								<div class="card-body">
									

                				<div class="table-responsive">
									<table id="example" class="table table-bordered table-hover display">
										<!-- <table id="example" class="display nowrap" style="width:100%"> -->
										<thead>
											<tr>
												<th>No</th>
												<th>Kode Barang</th>
					                            <th>Nama Barang</th>
					                            <th>Kategori Barang</th>
					                            <th>Satuan</th>
					                            <th>Stok Keluar</th>
											</tr>
										</thead>										
										<tbody>
											<?php $no = 0;
					                        foreach ($laporan as $row) { ?>
					                        <tr>
					                            <td><?php echo ++$no; ?></td>
					                            <td><?php echo $row->kode_barang; ?></td>
					                            <td><?php echo $row->nama_barang; ?></td>
					                            <td><?php echo $row->nama_kategori; ?></td>
					                            <td><?php echo $row->satuan; ?></td>
					                            <td><?php echo $row->stok; ?></td>
					                        </tr>
					                        <?php } ?>
										</tbody>
									</table>
									</div>
									
								</div>														
							</div><!-- end card-->					
						</div>

            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->

	<script>
//     $(document).ready(function() {
//     $('#example').DataTable( {
//         dom: 'Bfrtip',
//         buttons: [
//             'copy', 'csv', 'excel', 'pdf', 'print'
//         ]
//     } );
// } );
$(document).ready(function() {
		$('#example').DataTable({

			dom: 'Blfrtip',
			buttons: [{
					extend: 'csvHtml5',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5],
					},
				},
				{
					extend: 'excelHtml5',
					title: 'LAPORAN BARANG KELUAR',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5],
					},
				},
				{
					extend: 'copyHtml5',
					title: 'Laporan Barang Keluar',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5],
					},
				},
				{
					extend: 'pdfHtml5',
					orientation: 'portrait',
					pageSize: 'LEGAL',
					title: 'Laporan Barang Keluar',
					download: 'open',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5],
					},
					customize: function(doc) {
						doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
						doc.styles.tableBodyEven.alignment = 'center';
						doc.styles.tableBodyOdd.alignment = 'center';
					},
				},
				{
					extend: 'print',
					oriented: 'portrait',
					pageSize: 'A4',
					title: 'Laporan Barang Keluar',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5],
					},
				},
			],
			"fnDrawCallback": function() {
				$('.image-link').magnificPopup({
					type: 'image',
					closeOnContentClick: true,
					closeBtnInside: false,
					fixedContentPos: true,
					image: {
						verticalFit: true
					},
					zoom: {
						enabled: true,
						duration: 300 // don't foget to change the duration also in CSS
					},
				});
			}
		});
	});
</script>