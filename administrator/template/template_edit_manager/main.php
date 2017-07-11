<?php 
include_once 'header.php';
include_once 'sidebar.php';

 ?>


		<div class="col-md-6" id="edit">
			<h1>Edit Data Manajer Bis ATS</h1>
			<form class="form-horizontal">
					  <div class="form-group">
					    <label for="inputNama1" class="col-sm-3 control-label">ID Manajer</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputNama1" value="M123W">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputKTP1" class="col-sm-3 control-label">Nama</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputKTP1" value="Waluyo">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputTelp1" class="col-sm-3 control-label">No.KTP</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputTelp1" value="6102833579763147">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputKelamin1" class="col-sm-3 control-label">Jenis Kelamin</label>
					    <div class="col-sm-4">
					    <label class="radio-inline">
					      <input type="radio" name="optradio" value="1">Laki-laki
					    </label>
					    <label class="radio-inline">
					      <input type="radio" name="optradio" value="2">Perempuan
					    </label>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputRekening1" class="col-sm-3 control-label">No. Telp</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputRekening1" value="089621538044">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputAlamat1" class="col-sm-3 control-label">Alamat</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputAlamat1" value="Podomoro">
					    </div>
					  </div>
					   <div class="form-group">
					    <div class="col-sm-offset-10 col-sm-5">
					      <button type="button" class="btn btn-warning">Ubah</button>
					    </div>
					   </div>
					</form>
		</div>
		</div>
	</div>
</div>

<?php 

include_once 'footer.php';
 ?>