	<!-- Begin Page Content -->
	<div class="container-fluid">
	    <?= $this->session->flashdata('pesan'); ?>
	    <div class="row">
	        <div class="col-lg-12">
	            <?php if(validation_errors()) { ?>
	            <div class="alert alert-danger" role="alert">
	                <?= validation_errors();?>
	            </div>
	            <?php }?>
	            <table class="table table-hover">
	                <thead>
	                    <tr>
	                        <th scope="col">#</th>
	                        <th scope="col">Nama</th>
	                        <th scope="col">Email</th>
	                        <th scope="col">Image</th>
	                        <th scope="col">Pilihan</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    <?php
						$a = 1;
						foreach ($anggota as $b) { 
						?>
	                    <tr>
	                        <th scope="row"><?= $a++; ?></th>
	                        <td><?= $b['nama']; ?></td>
	                        <td><?= $b['email']; ?></td>
	                        <td>
	                            <picture>
	                                <source srcset="" type="image/svg+xml" />
	                                <img src="<?= base_url('assets/img/') . $b['image'];?>" class="img-fluid img-thumbnail" width="100" alt="..." />
	                            </picture>
	                        </td>
	                        <td>
	                            <a href="<?=base_url('user/ubahanggota/').$b['id'];?>" class="badge badge-info">
	                            	<i class="fas fa-edit"></i> Ubah
	                            </a>
	                            <a href="<?= base_url('user/hapusanggota/').$b['id'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.''.$b['nama'];?> ?');" class="badge badge-danger">
	                            	<i class="fasfa-trash"></i> Hapus
	                            </a>
	                        </td>
	                    </tr>
	                    <?php } ?>
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>
	<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
