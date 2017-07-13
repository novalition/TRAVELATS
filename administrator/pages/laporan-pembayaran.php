<div class="col-md-10" id="content-manajer">
			<h1 class="page-header">Laporan Pembayaran</h1>
			<div class="text-right">
				<button type="button" class="btn btn-warning">Export Excel</button>
				<button type="button" class="btn btn-warning">Export Word</button>
			</div>
			<table class="table table-bordered">
				<tr>
					<th>No</th>
					<th>ID Penumpang</th>
					<th>ID Pesanan</th>
					<th>Hari/Tanggal</th>
					<th>Jenis Pembayaran</th>
					<th>Total Bayar</th>
				</tr>
<?php $i=1; 
foreach ($isi_pembayaran as $pm) {?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $pm['id_operator'] ?></td>
					<td><?= $pm['id_pesanan'] ?></td>
					<td><?= $pm['tanggal_pembayaran'] ?></td>
					<td><?= $pm['no_pembayaran'] ?></td>
					<td><?= $pm['total_bayar'] ?></td>
				</tr>
<?php $i++; }  ?>
			</table>
		</div>
		</div>
	</div>
</div>