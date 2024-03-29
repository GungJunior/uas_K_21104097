<h3>Edit Data Dosen</h3>

<div class="alert alert-primary" role="alert" id="sukses">
  Data Telah diubah
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal diubah
</div>

<form id="dosenUpdate">
  <div class="mb-3">
    <label for="nidn" class="form-label">NIDN</label>
    <input type="text" class="form-control" id="txnidn" disabled>
    <div id="nidnHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="namad" class="form-label">Nama Dosen</label>
    <input type="text" class="form-control" id="txnamad">
    <div id="namadHelp" class="form-text">Ubah Nama Dosen.</div>
  </div>
  <div class="mb-3">
    <label for="jkeld" class="form-label">Jenis Kelamin</label>
    <select class="form-control" id="txjkeld">
        <option value="-"> Pilih Jenis Kelamin </option>
        <option value="L"> Laki-Laki </option>
        <option value="P"> Perempuan </option>
    </select>    
    <div id="jkeldHelp" class="form-text">Pilih Jenis Kelamin Dosen</div>
  </div>
  <div class="mb-3">
    <label for="tgld" class="form-label">Tgl Lahir</label>
    <input type="date" class="form-control" id="txtgld">
    <div id="tgldHelp" class="form-text">Ubah Tgl Lahir dosen</div>
  </div>
  <div class="mb-3">
    <label for="jabatan" class="form-label">Jabatan Dosen</label>
    <input type="text" class="form-control" id="txjabatan">
    <div id="jabatanHelp" class="form-text">Ubah Jabatan Dosen</div>
  </div>
  <div class="mb-3">
    <label for="mengampuh" class="form-label">Mengampuh Mata Kuliah</label>
    <input type="text" class="form-control" id="txmengampuh">
    <div id="mengampuhHelp" class="form-text">Ubah Mengampuh Mata Kuliah</div>
  </div>
  
  <button type="button" class="btn btn-primary" onclick="dosenupdatedata()">Update Data</button>
  <button type="button" class="btn btn-secondary" onclick="batal()"> Batal </button>
</form>
<script src="dosen-caridata.js"></script>
<script src="dosen-updatedata.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";
  function batal(){
      location.replace("http://127.0.0.1/test 2/client/index.php?pg=dsn");
  }
</script>