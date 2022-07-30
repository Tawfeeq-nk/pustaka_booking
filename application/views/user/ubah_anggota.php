<div class="container">
    <div class="card">
        <div class="card-body">
			<?= form_open_multipart('user/ubahanggota/'.$anggota['id']); ?>
           	<div class="form-group">
           		<input type="hidden" name="id" value="<?php echo $anggota['id']; ?>">
                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukkan Judul Buku" value="<?php echo $anggota['nama']; ?>" />
                <?= form_error('nama', '<small class="text- danger pl-3">', '</small>'); ?>
            </div>
           	<div class="form-group">
                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Judul Buku" value="<?php echo $anggota['email']; ?>" />
                <?= form_error('email', '<small class="text- danger pl-3">', '</small>'); ?>
            </div>
            <div class="float-right">
				<button type="submit" class="btn btn-primary">Ubah</button>
				<button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali</button>
			</div>
        </div>
    </div>
</div>
