<html>
    <head>
        <title>
            Tampil Data Mahasiswa
        </title>
    </head>

    <body>
        <center>
            <table>
                <tr>
                    <th colspan="3">
                        Tampil Data Mahasiswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                        <?= $nama; ?>
                    </td>
                </tr>
                <tr>
                    <th>Email Address</th>
                    <th>:</th>
                    <td>
                        <?= $email; ?>
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <td>
                        <?= $kelamin; ?>
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td>
                        <?= $tempatlahir; ?>
                    </td>
                </tr>
                <tr>
                    <th>Tanggal lahir</th>
                    <th>:</th>
                    <td>
                        <?= $tanggallahir; ?>
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <td>
                        <?= $alamat; ?>
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <th>:</th>
                    <td>
                        <?= $agama; ?>
                    </td>
                </tr>
                <tr>
                    <th>Asal Sekolah</th>
                    <th>:</th>
                    <td>
                        <?= $asalsekolah; ?>
                    </td>
                </tr>
                <tr>
                    <th>Asal Jurusan</th>
                    <th>:</th>
                    <td>
                        <?= $jurusan; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('matakuliah'); ?>"> kembali
                        </a>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>