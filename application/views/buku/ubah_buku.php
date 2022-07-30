<div class="container">
    <div class="card">
        <div class="card-body">
			<?= form_open_multipart('buku/ubahBuku/'.$buku['id']); ?>
           	<div class="form-group">
           		<input type="hidden" name="id" value="<?php echo $buku['id']; ?>">
                <input type="text" class="form-control form-control-user" id="judul_buku" name="judul_buku" placeholder="Masukkan Judul Buku" value="<?php echo $buku['judul_buku']; ?>" />
                <?= form_error('judul_buku', '<small class="text- danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <select name="id_kategori" class="form-control form-control-user">
                    <option value="">Pilih Kategori</option>
                    <?php foreach ($kategori as $k) { ?>
                    <option <?php if($buku['id_kategori'] == $k['id_kategori']) { echo 'selected'; } ?> value="<?= $k['id_kategori'];?>"><?= $k['nama_kategori']; if($buku['id_kategori'] == $k['id_kategori']) { echo ' [Terpilih]'; } ?></option>
                    <?php } ?>
                </select>
                <?= form_error('id_kategori', '<small class="text- danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="pengarang" name="pengarang" placeholder="Masukkannama pengarang" value="<?php echo $buku['pengarang']; ?>" />
                <?= form_error('pengarang', '<small class="text- danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="penerbit" name="penerbit" placeholder="Masukkan nama penerbit"  value="<?php echo $buku['penerbit']; ?>" />
                <?= form_error('penerbit', '<small class="text- danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <select name="tahun" class="form-control form-control-user">
                    <option value="">Pilih Tahun</option>
                    <?php for ($i = date('Y'); $i > 1000; $i--) { ?>
                    <option <?php if($buku['tahun_terbit'] == $i) { echo 'selected'; } ?> value="<?= $i;?>"><?= $i; if($buku['tahun_terbit'] == $i) { echo ' [Terpilih]'; } ?></option>
                    <?php } ?>
                </select>
                <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="isbn" name="isbn" placeholder="Masukkan ISBN" value="<?php echo $buku['isbn']; ?>" />
                <?= form_error('isbn', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan nominalstok" value="<?php echo $buku['stok']; ?>" />
                <?= form_error('isbn', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="file" class="form-control form-control-user" id="image" name="image" />
            </div>
            <div class="float-right">
				<button type="submit" class="btn btn-primary">Ubah</button>
				<button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali</button>
			</div>
        </div>
    </div>
</div>
