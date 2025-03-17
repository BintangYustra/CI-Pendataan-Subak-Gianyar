<div class="container">
    <div class="row">
        <div class="">
            <h3>Daftar</h3>
            <table class="table" style=" border: 1px solid #CCC; border-collapse: collapse; border: none;">
                <thead>
                    <tr>
                    <th>Nama Subak</th>
                    <th>Lokasi Subak</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pendataan as $key => $row) : ?>
                        <tr>
                            <td><?php echo $row['nama_subak'] ?></td>
                            <td><?php echo $row['lokasi_subak'] ?></td>
                            <td><a href="" class=""><button type="button" class="btn btn-outline-warning">Detail</button></a></td>
                            <!-- <td><a href="" class=""><button type="button" class="btn btn-outline-info">Edit</button></a></td>
                            <td><a href="" class=""><button type="button" class="btn btn-outline-danger">Delete</button></a></td>  -->
                        </tr>
                    <?php endforeach ?>
                </tbody>

            </table>

        </div>
    </div>
    
    
</div>

<div class="b-example-divider" style="width: 100%; height: 3rem; border-width: 1px 0;"></div>