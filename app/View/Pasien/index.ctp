<h2>Pasien</h2>
<?php if(empty($pasien)): ?>
    Tidak ada pasien dalam database
<?php else: ?>
    <table>
        <tr>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Golongan Darah</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($pasien as $pasien): ?>
        <tr>
            <td>
                <?php echo $pasien['nama'] ?>
            </td>
            <td>
                <?php echo $pasien['tempat_lahir'] ?>
            </td>
            <td>
                <?php echo $pasien['tgl_lahir'] ?>
            </td>
            <td>
                <?php echo $pasien['alamat'] ?>
            </td>
            <td>
                <?php echo $pasien['gol_darah'] ?>
            </td>
            <td>
                <!-- Daftar aksi yang akan ditambahkan nanti -->
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<?php echo $html->link('Tambah Agenda', array('action'=>'add')); ?>