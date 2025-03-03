<?php

function tampil_rekom_bpnt($mysqli)
{
    $nomor = 1;
    $help = 'PIP';
    // $query = $mysqli->query("SELECT * FROM tabel_daftar_bansos");
    $query = $mysqli->query("SELECT * FROM tabel_kependudukan WHERE status_bantuan='diproses' and pekerjaan= 'PELAJAR/MAHASISWA'" );
    
    while ($row = $query->fetch_assoc()) {

        // $sql_dusun = $mysqli->query("SELECT * FROM tabel_dusun WHERE id='$row[DSN]'");
        // $row_dusun = $sql_dusun->fetch_assoc();
?>
        <tr>
            <td><?= $nomor++ ?></td>           
            <td><?= $row['NIK'] ?></td>
            <td><?= $row['NAMA_LGKP'] ?></td>
            <td><?= $row['TGL_LHR'] ?></td>
            <td><?= $row['pekerjaan'] ?></td>
            
            <td>
                <form action="terima" method="POST">
                    <input type="hidden" name="nik" value="<?= $row['NIK'] ?>">
                    <input type="hidden" name="nama" value="<?= $row['NAMA_LGKP'] ?>">
                    <input type="hidden" name="alamat" value="<?= $row['KECAMATAN'] ?>">
                    <input type="hidden" name="ttl" value="<?= $row['TGL_LHR'] ?>">
                    <input type="hidden" name="agama" value="<?= $row['AGAMA'] ?>">
                    <input type="hidden" name="pekerjaan" value="<?= $row['pekerjaan'] ?>">
                    
                    <input type="hidden" name="jenis_bansos" value="<?= $help ?>">
                    
                    <button type="submit" name="update_bpnt" class="btn btn-primary btn-xs" onclick="return confirm('Yakin menambahkan data ini ke Bantuan Sembako BPNT ?')"><i class="fas fa-plus"></i> Tambah Bantuan</button>
                </form>
            </td>
        </tr>
    <?php
    }
}

function tampil_rekom_pkh($mysqli)
{
    $nomor = 1;
    $help = 'BSP';
    // $query = $mysqli->query("SELECT * FROM tabel_daftar_bansos");
    $query = $mysqli->query("SELECT * FROM tabel_kependudukan WHERE status_bantuan='diproses'" );
    
    while ($row = $query->fetch_assoc()) {

        // $sql_dusun = $mysqli->query("SELECT * FROM tabel_dusun WHERE id='$row[DSN]'");
        // $row_dusun = $sql_dusun->fetch_assoc();
?>
        <tr>
        <td><?= $nomor++ ?></td>           
            <td><?= $row['NIK'] ?></td>
            <td><?= $row['NAMA_LGKP'] ?></td>
            <td><?= $row['TGL_LHR'] ?></td>
            <td><?= $row['pekerjaan'] ?></td>
            
            <td>
                <form action="terima" method="POST">
                    <input type="hidden" name="nik" value="<?= $row['NIK'] ?>">
                    <input type="hidden" name="nama" value="<?= $row['NAMA_LGKP'] ?>">
                    <input type="hidden" name="alamat" value="<?= $row['KECAMATAN'] ?>">
                    <input type="hidden" name="ttl" value="<?= $row['TGL_LHR'] ?>">
                    <input type="hidden" name="agama" value="<?= $row['AGAMA'] ?>">
                    <input type="hidden" name="pekerjaan" value="<?= $row['pekerjaan'] ?>">
                    
                    <input type="hidden" name="jenis_bansos" value="<?= $help ?>">
                    
                    <button type="submit" name="update_bpnt" class="btn btn-primary btn-xs" onclick="return confirm('Yakin menambahkan data ini ke Bantuan Sembako BPNT ?')"><i class="fas fa-plus"></i> Tambah Bantuan</button>
                </form>
            </td>
        </tr>
    <?php
    }
}


function tampil_rekom_bst($mysqli)
{
    $nomor = 1;
    $help = 'BNPT';
    // $query = $mysqli->query("SELECT * FROM tabel_daftar_bansos");
    $query = $mysqli->query("SELECT * FROM tabel_kependudukan WHERE status_bantuan='diproses'" );
    
    while ($row = $query->fetch_assoc()) {

        // $sql_dusun = $mysqli->query("SELECT * FROM tabel_dusun WHERE id='$row[DSN]'");
        // $row_dusun = $sql_dusun->fetch_assoc();
?>
        <tr>
        <td><?= $nomor++ ?></td>           
            <td><?= $row['NIK'] ?></td>
            <td><?= $row['NAMA_LGKP'] ?></td>
            <td><?= $row['TGL_LHR'] ?></td>
            <td><?= $row['pekerjaan'] ?></td>
            
            <td>
                <form action="terima" method="POST">
                    <input type="hidden" name="nik" value="<?= $row['NIK'] ?>">
                    <input type="hidden" name="nama" value="<?= $row['NAMA_LGKP'] ?>">
                    <input type="hidden" name="alamat" value="<?= $row['KECAMATAN'] ?>">
                    <input type="hidden" name="ttl" value="<?= $row['TGL_LHR'] ?>">
                    <input type="hidden" name="agama" value="<?= $row['AGAMA'] ?>">
                    <input type="hidden" name="pekerjaan" value="<?= $row['pekerjaan'] ?>">
                    
                    <input type="hidden" name="jenis_bansos" value="<?= $help ?>">
                    
                    <button type="submit" name="update_bpnt" class="btn btn-primary btn-xs" onclick="return confirm('Yakin menambahkan data ini ke Bantuan Sembako BPNT ?')"><i class="fas fa-plus"></i> Tambah Bantuan</button>
                </form>
            </td>
        </tr>
    <?php
    }
}
function tampil_rekom_blt($mysqli)
{
    $nomor = 1;
    $help = 'BLT DANA DESA';
    // $query = $mysqli->query("SELECT * FROM tabel_daftar_bansos");
    $query = $mysqli->query("SELECT * FROM tabel_kependudukan WHERE status_bantuan='diproses'" );
    
    while ($row = $query->fetch_assoc()) {

        // $sql_dusun = $mysqli->query("SELECT * FROM tabel_dusun WHERE id='$row[DSN]'");
        // $row_dusun = $sql_dusun->fetch_assoc();
?>
        <tr>
        <td><?= $nomor++ ?></td>           
            <td><?= $row['NIK'] ?></td>
            <td><?= $row['NAMA_LGKP'] ?></td>
            <td><?= $row['TGL_LHR'] ?></td>
            <td><?= $row['pekerjaan'] ?></td>
            
            <td>
                <form action="terima" method="POST">
                    <input type="hidden" name="nik" value="<?= $row['NIK'] ?>">
                    <input type="hidden" name="nama" value="<?= $row['NAMA_LGKP'] ?>">
                    <input type="hidden" name="alamat" value="<?= $row['KECAMATAN'] ?>">
                    <input type="hidden" name="ttl" value="<?= $row['TGL_LHR'] ?>">
                    <input type="hidden" name="agama" value="<?= $row['AGAMA'] ?>">
                    <input type="hidden" name="pekerjaan" value="<?= $row['pekerjaan'] ?>">
                    
                    <input type="hidden" name="jenis_bansos" value="<?= $help ?>">
                    
                    <button type="submit" name="update_bpnt" class="btn btn-primary btn-xs" onclick="return confirm('Yakin menambahkan data ini ke Bantuan Sembako BPNT ?')"><i class="fas fa-plus"></i> Tambah Bantuan</button>
                </form>
            </td>
        </tr>
    <?php
    }
}

function tampil_penerima($mysqli)
{
    $nomor = 1;
    $query_penerima = $mysqli->query("SELECT * FROM tabel_kependudukan WHERE status_bantuan='diterima'");
    while ($row_peneriama = $query_penerima->fetch_assoc()) {

        $sql_dusun = $mysqli->query("SELECT * FROM tabel_dusun WHERE id='$row_peneriama[DSN]'");
        $row_dusun = $sql_dusun->fetch_assoc();
        ?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $row_peneriama['NIK'] ?></td>
            <td><?= $row_peneriama['NAMA_LGKP'] ?></td>
            <td><?= $row_peneriama['jenis_bantuan'] ?></td>
            <td><?= tgl_indo($row_peneriama['TGL_LHR']) ?></td>
            
            <td>
                <form action="terima_bansos" method="post">
                    <input type="hidden" name="nik" value="<?= $row_peneriama['NIK'] ?>">
                    <input type="hidden" name="nama" value="<?= $row_peneriama['NAMA_LGKP'] ?>">
                    <input type="hidden" name="jenis_bantuan" value="<?= $row_peneriama['jenis_bantuan'] ?>">
                    <button class="btn btn-danger btn-xs"><i onclick="return confirm('apakah bantuan sudah di serahkan?')"></i> Ambil bansos</button>
                </form>
            </td>
        </tr>
<?php
    }
}
function tampil_pengambil($mysqli)
{
    $nomor = 1;
    $query_penerima = $mysqli->query("SELECT * FROM bansos_diambil");
    while ($row_peneriama = $query_penerima->fetch_assoc()) {

        ?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $row_peneriama['NIK'] ?></td>
            <td><?= $row_peneriama['nama'] ?></td>
            <td><?= $row_peneriama['jenis_bantuan'] ?></td>
            <td><?= tgl_indo($row_peneriama['tanggal_diambil']) ?></td>
            
            
        </tr>
<?php
    }
}
