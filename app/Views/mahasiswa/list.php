<?php
$i = 1;
?>

<a href="/create" class="btn btn-primary my-3">
    Tambah
</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NPM</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Created_At</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mahasiswa as $data) { ?>
            <tr>
                <th scope="row"><?= $i++ ?></th>
                <td><?= $data['npm'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td><?= $data['created_at'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>