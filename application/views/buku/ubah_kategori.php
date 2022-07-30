<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <select name="id_kategori" class="form-control form-control-user">
                    <option value="">Pilih Kategori</option>
                    <?php foreach ($kategori as $k) { ?>
                    <option value="<?= $k['id_kategori'];?>"><?= $k['nama_kategori'];?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
</div>
