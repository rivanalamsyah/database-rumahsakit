<h2>Pasien</h2>
<?php if(empty($pasien)): ?>
Tidak ada pasien dalam daftar
<?php else: ?>
<table>
<tr>
<th>Nama</th>
<th>Tempat Lahir</th>
<th>Tgl Lahir</th>
<th>Alamat</th>
<th>Gol Darah</th>
<th>Action</th>
</tr>
<?php foreach ($pasien as $pasien): ?>
<tr>
<td>
<?php echo $pasien['Pasien']['nama'] ?>
</td>
<td>
<?php echo $pasien['Pasien']['tempatlahir'] ?>
</td>
<td>
<?php echo $pasien['Pasien']['tgllahir'] ?>
</td>
<td>
<?php echo $pasien['Pasien']['alamat'] ?>
<?php echo $pasien['Pasien']['goldarah'] ?>
</td>
<td>
<!—-disinilah daftar aksi yang nanti akan kita
tambahkan-->
</td>
</tr>
<?php endforeach; ?>
</table>
<?php endif;?>