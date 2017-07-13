<?php 
include_once 'header.php';
include_once 'sidebar.php';
 ?>
 
		<div class="col-md-10" id="content-supir">
			<h1 class="page-header">Data Penumpang Bis ATS</h1>
			<table class="table table-bordered">
				<tr>
					<th>No</th>
					<th>ID</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Action</th>
				</tr>
				<tr>
					<td>1</td>
					<td>P123B</td>
					<td>Budi</td>
					<td>Laki-laki</td>
					<td>
						<a href="operator-pemesanan-penumpang-1.html"><button type="button" class="btn btn-warning">Pemesanan</button></a>
						<a href="operator-pembayaran-penumpang-1.html"><button type="button" class="btn btn-warning">Pembayaran</button></a>
						<button type="button" class="btn btn-warning">Delete</button>
						<a href="operator-detail-penumpang-1.html"><button type="button" class="btn btn-warning">Detail</button></a>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td>P234A</td>
					<td>Ani</td>
					<td>Perempuan</td>
					<td>
						<a href="operator-pemesanan-penumpang-1.html"><button type="button" class="btn btn-warning">Pemesanan</button></a>
						<a href="operator-pembayaran-penumpang-1.html"><button type="button" class="btn btn-warning">Pembayaran</button></a>
						<button type="button" class="btn btn-warning">Delete</button>
						<a href="operator-detail-penumpang-1.html"><button type="button" class="btn btn-warning">Detail</button></a>
					</td>
				</tr>
			</table>
		</div>
		</div>
	</div>
</div>

<?php 
include_once 'footer.php';

 ?>