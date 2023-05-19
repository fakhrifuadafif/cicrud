<div class="container">
    <div class="row">
        <div class="col-md-10">

            <h3 class="mt-3">list of peoples</h3>

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; 
                    foreach( $peoples as $people):?>
                    <tr>
                        <th><?= $i++ ?></th>
                        <td> <?= $people['name'];?> </td>
                        <td> <?= $people['email'];?> </td>
                        <td> <a href="" class="badge badge-warning">detail</a>
                        <a href="" class="badge badge-success">edit</a>
                        <a href="" class="badge badge-danger">hapus</a></td>

                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>