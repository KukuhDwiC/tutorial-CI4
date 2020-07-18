

<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script>
      $(function() {
         $('#save').click(function() {
            $('#myForm').submit()
            $('#tambahdata').modal('hide')
         })
      })
   </script>

    <title>User</title>
  </head>
  <body>
  <div class="container mt-1">
      <h1>Selamat Datang Di Halaman User, <?= session()->get('user_nama'); ?>.</h1>
      <a class="btn btn-dark" href="/user/tambahdata" role="button">Menambahkan Data</a>
  <table border=1>
    <thead>
    <tr>
      <th>User ID</th>
      <th>Nama</th>
      <th>E-mail</th>
      <th> Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($user as $row):?>
    <tr>
      <td><?=$row['user_id'];?></td>
      <td><?=$row['user_nama'];?></td>
      <td><?=$row['user_email'];?></td>
      <td> 
      <a class="btn btn-success" href="/user/edit/<?= $row['user_id']; ?>" role="button">Edit</a>
      <a class="btn btn-danger text-white" onclick="hapusData(<?= $row['user_id']; ?>)" role="button">Delete</a>
           </td>
    </tr>
    <?php endforeach;?>
    </tbody>
    </table>
  <a class="btn btn-primary btn-lg" href="<?= base_url('login/logout'); ?>" role="button">Logout</a>
</div>
<script>
      function hapusData(id) {
         message = confirm('are sure want to delete this data ?')

         if (message) {
            window.location.href = ("<?= base_url('user/delete'); ?>") + "/" + id
         } else return false
      }
   </script>
  </body>
</html>