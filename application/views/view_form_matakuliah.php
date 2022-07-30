<html>
    <head>
        <title>Form Input Matakuliah</title>
    </head>
    <body>
        <center>
            <form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
        <table>
        <tr>
            <th colspan="3">
            PENDAFTARAN MAHASISWA
            </th>
         </tr>
        <tr>
            <td colspan="3">
        </tr>
        
<tr>
    <th>Nama Lengkap</th>
    <th>:</th>
    <td>
        <input type="text" name="nama" placeholder="NAMA LENGKAP" id="nama">
    </td>
</tr>
<tr>
    <th>Email Address</th>
    <th>:</th>
    <td>
        <input type="text" name="email" placeholder="EMAIL" id="email">
    </td>
</tr>
<tr>
    <th>Jenis Kelamin</th>
    <th>:</th>
    <td>
        <input type="radio" name="kelamin" id="kelamin"> Male
        <input type="radio" name="kelamin" id="kelamin"> Female
    </td>
</tr>
<tr>
    <th>Tempat Tanggal Lahir</th>
    <th>:</th>
    <td>
        <input type="text" name="tempatlahir" placeholder="TEMPAT" id="tempatlahir">
        <input type="text" name="tanggallahir" placeholder="TANGGAL" id="tanggallahir">
    </td>
</tr>
<tr>
    <th>Alamat</th>
    <th>:</th>
    <td>
        <input type="text" name="alamat" placeholder="ALAMAT" id="alamat">
    </td>
</tr>
<tr>
    <th>Agama</th>
    <th>:</th>
    <td>
        <input type="radio" name="agama" id="agama"> Islam
        <input type="radio" name="agama" id="agama"> Kristen
        <input type="radio" name="agama" id="agama"> Hindu
        <input type="radio" name="agama" id="agama"> Buddha
    </td>
</tr>
<tr>
    <th>Asal Sekolah</th>
    <th>:</th>
    <td>
        <input type="text" name="asalsekolah" placeholder="ASAL SEKOLAH" id="asalsekolah">
    </td>
</tr>
<tr>
    <th>Asal Jurusan</th>
    <th>:</th>
    <td>
        <select name="jurusan" id="jurusan">
            <option value=""> PILIH JURUSAN </option>
            <option value="2"> Informatika Komputer </option>
            <option value="3"> Administrasi Perkantoran </option>
            <option value="4"> Komputerisasi Akuntansi </option>
        </select>
    </td>
</tr>
<tr>
    <td colspan="3" align="center">
        <input type="submit" value="Submit">
    </td>
</tr>

        </table>
        </form>
        </center>
    </body>
</html>