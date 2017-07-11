<?php 
include_once 'header.php';
include_once 'sidebar.php';

 ?>
		<div class="col-md-10" id="content-supir">
			<h1 class="page-header">Data Supir Bis ATS</h1>
			<div class="text-right">
				<a href="operator-create-supir.html"><button type="button" class="btn btn-warning" style="margin-bottom: 20px">Create Supir</button></a>
			</div>
			<table class="table table-bordered">
				<tr>
					<th>No</th>
					<th>ID Supir</th>
					<th>Nama</th>
					<th>No. Telp</th>
					<th>Action</th>
				</tr>
				<tr>
					<td>1</td>
					<td>S123D</td>
					<td>Dodi</td>
					<td>087444589222</td>
					<td>
						<a href="operator-edit-supir-1.html"><button type="button" class="btn btn-warning">Edit</button></a>
						<button type="button" class="btn btn-warning">Delete</button>
						<a href="operator-detail-supir-2.html"><button type="button" class="btn btn-warning">Detail</button></a>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td>S234A</td>
					<td>Ali</td>
					<td>089825104444</td>
					<td>
						<a href="operator-edit-supir-2.html"><button type="button" class="btn btn-warning">Edit</button></a>
						<button type="button" class="btn btn-warning">Delete</button>
						<a href="operator-detail-supir-2.html"><button type="button" class="btn btn-warning">Detail</button></a>
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