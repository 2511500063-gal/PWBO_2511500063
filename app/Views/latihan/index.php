    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>
            </div>
        </div>
            <div class="row">
                <div class="col-lg-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Data Latihan       
                </button>
                <br><br>
                <h3>Daftar Latihan</h3>
                <ul class="list-group">
                    <?php foreach($data['lthn'] as $lthn) : ?>
                        <li class="list-group-item">
                            <?php echo $lthn['nama']; ?>
                            <a href="<?php echo BASEURL; ?>/latihan/hapus/<?php echo $lthn['id']; ?>"class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin');">
                                hapus</a>
                            <a href="<?php echo BASEURL; ?>/latihan/detail/<?php echo $lthn['id']; ?>"class="badge badge-primary float-right ml-1">
                                detail</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Latihan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="<?php echo BASEURL; ?>/latihan/tambah" method="post">  
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="user">User</label>
                <input type="text" class="form-control" id="user" name="user">
            </div>
            <div class="form-group">
                <label for="rank">Rank</label>
                <input type="text" class="form-control" id="rank" name="rank">
            </div>
             <div class="form-group">
                <label for="wr">wr</label>
                <input type="text" class="form-control" id="wr" name="wr">
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
        </div>
        </div>
    </div>
    </div>