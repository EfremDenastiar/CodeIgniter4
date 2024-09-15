<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <!-- Import Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Import Google Icon Font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        .main-content {
            padding: 20px;
            margin-left: 300px;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <ul id="slide-out" class="sidenav sidenav-fixed">
        <li>
            <div class="user-view">
                <div class="background" style="background-color: #007bff;"></div>
                <a href="#name"><span class="white-text name"><h3>Admin</h3></span></a>
            </div>
        </li>
        <li><a href="/peminjaman"><i class="material-icons">book</i>Peminjaman</a></li>
        <li><a href="/perpus"><i class="material-icons">library_books</i>Buku</a></li>
        <li><a href="/datauser"><i class="material-icons">person</i>User</a></li>
    </ul>

    <!-- Main Content -->
    <div class="main-content">
        <h3 class="center-align">Data User</h3>
        <div class="col s12">
            <a href="/register" class="btn waves-effect waves-light green"><i class="material-icons left">add</i>Tambah Data User</a>
            <table class="highlight responsive-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($user as $data): ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $data['Username'] ?></td>
                            <td><?= $data['Password'] ?></td>
                            <td><?= $data['Email'] ?></td>
                            <td><?= $data['NamaLengkap'] ?></td>
                            <td><?= $data['Alamat'] ?></td>
                            <td>
                                <form action="user/edit" method="post">
                                    <input type="hidden" name="UserID" value="<?= $data['UserID']?>">
                                    <button type="submit"class="btn yellow darken-2 waves-effect waves-light"><i class="material-icons">edit</i></button>
                                </form>
                            </td>
                            <td>
                                <form action="user/hapus" method="post">
                                    <input type="hidden" name="UserID" value="<?= $data['UserID']?>">
                                    <button type="submit" class="btn red waves-effect waves-light" onclick="return confirm('Apakah Anda yakin?')"><i class="material-icons">delete</i></button>
                                </form> 
                            </td>
                        </tr>
                    <?php $no++; endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Import Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
        });
    </script>

</body>
</html>
