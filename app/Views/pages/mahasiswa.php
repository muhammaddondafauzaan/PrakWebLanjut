<a href="/create"><button type="button">Tambah Mahasiswa</button>
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
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>