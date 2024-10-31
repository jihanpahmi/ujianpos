<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit Penyedia Jasa</div>
                <div class="col-4">
                    <a href="?m=penyediajasa&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>
            <?php
            include_once('config.php');
            $id = $_GET ['id'];
            $sql = "SELECT * FROM suppliers WHERE id='$id'";
            $query = mysqli_query($con, $sql);
            $r = mysqli_fetch_array($query);
            ?>
            <div class="card-body">
                <form action="?m=penyediajasa&s=update" method="post">
                    <div class="mb-3">
                    <input type="text" name="name" value="<?=$r['name']?>" class="form-control" placeholder="Nama Penyedia Jasa" required autofocus>
                    </div>
                    <div class="mb-3">
                    <input type="text" name="address" value="<?=$r['address']?>" class="form-control" placeholder="Alamat Rumah" required autofocus>
                    </div>
                    <div class="mb-3">
                    <input type="number" name="phone" value="<?=$r['phone']?>" class="form-control" placeholder="No Handphone">
                    </div>
                    <div class="mb-3">
                    <input type="number" name="email" value="<?=$r['email']?>" class="form-control" placeholder="Nama Email">
                    </div>
                    <div class="mb-3">
                    <input type="hidden" name="id" value="<?=$r['id']?>">
                    <input type="reset" class="btn btn-warning">&nbsp;
                    <input type="submit" name="update" value="Update" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
                    

            
                                      
                         
                
  