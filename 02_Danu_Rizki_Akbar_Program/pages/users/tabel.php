
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
         body{
      background: url(pp.jpg);
  background-repeat: no-repeat;
  background-size: 100%;
}
  </style>
  <body>
<div class="card mt-5">
    <div class="card-body">
        <p>
            <button class="btn btn-success btn-sm" id="btn-add"><i class="bi bi-plus-circle"></i>  Tambah Pesanan</button>
        </p>
        <div class="table-responsive">
            <table class="table table-sm table-striped table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Tujuan</th>
                        <th>Tanggal</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // panggil koneksi
                    require_once '../../koneksi.php';
                    $no=1;
                    $sql = mysqli_query($koneksi,"SELECT id,nama,tujuan,tanggal,harga FROM regis ");
                    foreach ($sql as $row) {
                        // var_dump($row);
                        ?>
                        <tr>
                        <td><?=$no++?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['tujuan']?></td>
                        <td><?=$row['tanggal']?></td>
                        <td><?=$row['harga']?></td>
                        <td>
                            <button class="btn btn-warning btn-sm btn-edit" data-id="<?=$row['id']?>"><i class="bi bi-pencil"></i> Edit</button>
                            <button class="btn btn-danger btn-sm btn-delete" data-id="<?=$row['id']?>" ><i class="bi bi-trash"></i> Delete</button>
                        </td>
                    </tr>
 
                        <?php
                    }
 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="viewmodal"></div>
<script>
    $('#btn-add').click(function (e) { 
        e.preventDefault();
        $.ajax({
            url: "pages/users/add.php",
            data: "data",
            dataType: "html",
            success: function (add) {
                // console.log(add);
                $('.viewmodal').html(add);
                $('#addUserModal').modal('show');
            }
        });
    });
    // EDIT
    $('.btn-edit').click(function (e) { 
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            url: "pages/users/edit.php",
            data: {
                id : id
            },
            dataType: "html",
            success: function (edit) {
                // console.log(add);
                $('.viewmodal').html(edit);
                $('#editUserModal').modal('show');
            }
        });
    });
    $('.btn-delete').click(function (e) { 
        e.preventDefault();
        var id = $(this).data('id');
            Notiflix.Confirm.show(
            'Konfirmasi Hapus',
            'Apakah anda yakin akan menghapus data ini ?',
            'Ya, Hapus Data',
            'Batal',
            function okCb() {
 
                $.ajax({
                    type : "post",
                    url: "pages/users/proses.php",
                    data: {
                        id : id,
                        action : 'delete'
                    },
                    dataType: "json",
                    success: function (res) {
                        if (res.status==true) {
                        Notiflix.Notify.success(res.msg);
                        UserPage()
                        }
                    }
                });
   
            },
            {
            },
            );
      
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
 
 