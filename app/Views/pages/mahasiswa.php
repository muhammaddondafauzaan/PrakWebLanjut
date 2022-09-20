<a href="/create" type="button" class="btn btn-primary mb-3">Tambah</a>
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Daftar Mahasiswa</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Created_at</th>
                        <th scope="col">Updated_at</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $mhs) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $mhs['npm']; ?></td>
                            <td><?= $mhs['nama']; ?></td>
                            <td><?= $mhs['created_at']; ?></td>
                            <td><?= $mhs['updated_at']; ?></td>
                            <td>
        <div class="d-flex">
          <a class="btn btn-warning mr-3" href="/edit/<?= $mhs['id_mahasiswa'] ?>">Edit</a>
          <form action="/delete/<?= $mhs['id_mahasiswa'] ?>" method="post">
            <input name="_method" value="DELETE" type="hidden">
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </div>
      </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>