<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital</title>
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

    <!-- Header -->
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
        <h3 class="center-align">Data Buku</h3>
        <div class="col s12">
            <a href="/perpus/tambah" class="btn waves-effect waves-light green"><i class="material-icons left">add</i>Tambah Data Buku</a>
            <table class="highlight responsive-table">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Id Buku</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($buku as $perpus): ?>
                        <tr>
                            <td><?= $no?></td>
                            <td><?= $perpus['id_buku']?></td>
                            <td><?= $perpus['judul']?></td>
                            <td><?= $perpus['penulis']?></td>
                            <td><?= $perpus['penerbit']?></td>
                            <td><?= $perpus['tahun_terbit']?></td>
                            <td>
                                <form form action="perpus/edit" method="post">
                                    <input type="hidden" name="id_buku" value="<?= $perpus['id_buku']?>">
                                    <button type="submit"class="btn yellow darken-2 waves-effect waves-light"><i class="material-icons">edit</i></button>
                                </form>
                            </td>
                            <td>
                                <form action="perpus/hapus" method="post">
                                    <input type="hidden" name="id_buku" value="<?= $perpus['id_buku']?>">
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
