<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
</head>
<body>
    <form action="/user/save" method="POST">
    <h3> Add User </h3>
    <div class="form-group">
            <input type="text" class="form-control" name="user_id" placeholder="Id">
         </div>
         <div class="form-group">
            <input type="text" class="form-control" name="user_nama" placeholder="Nama">
         </div>
         <div class="form-group">
            <input type="text" class="form-control" name="user_email" placeholder="Email">
         </div>
         <div class="form-label-group">
         <input type="text" class="form-control" name="user_pass" placeholder="Password">
  		</div>
        <br>
         <button class="btn btn-dark" type="submit">Simpan Data</button>
</form>
</body>
</html>