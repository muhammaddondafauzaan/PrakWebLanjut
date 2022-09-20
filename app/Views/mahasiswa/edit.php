<form action="/update/<?= $id_mahasiswa ?>" method="post">
  <div class="form-group">
    <label for="npm">NPM</label>
    <input type="text" name="npm" class="form-control" id="npm" value="<?= $npm ?>">
  </div>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" value="<?= $nama ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>