		<div class="col-md-10" id="content-manajer">
			<h1 class="page-header">Laporan Pemesanan Tiket</h1>
			<div class="text-right">
				<button type="button" class="btn btn-warning">Export Excel</button>
				<button type="button" class="btn btn-warning">Export Word</button>
			</div>
			<table class="table table-bordered">
				<tr>
					<th>No</th>
					<th>ID Pemesanan</th>
					<th>ID Penumpang</th>
					<th>No. Kursi</th>
					<th>ID Jadwal</th>
					<th>Tanggal Pesan</th>
				</tr>
				<?php $i=1; 
foreach ($isi_pemesanan as $pm) {?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $pm['id_pemesanan'] ?></td>
					<td><?= $pm['id_penumpang'] ?></td>
					<td><?= $pm['no_kursi'] ?></td>
					<td><?= $pm['id_jadwal'] ?></td>
					<td><?= $pm['tanggal_pesan'] ?></td>
				</tr>
<?php $i++; }  ?>
			</table>
		</div>
		</div>
	</div>
</div>