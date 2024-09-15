<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peminjaman</title>
    <!-- Import Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Import Google Icon Font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        
        .main-content {
            margin-left: 300px; 
            padding: 20px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <ul id="slide-out" class="sidenav sidenav-fixed">
        <li>
            <div class="user-view">
                <div class="background" style="background-color: #007bff;">
            </div>
                <a href="#name"><span class="white-text name"><h3>Admin</h3></span></a>
            </div>
        </li>
        <li><a href="/peminjaman"><i class="material-icons">book</i>Peminjaman</a></li>
        <li><a href="/perpus"><i class="material-icons">library_books</i>Buku</a></li>
        <li><a href="/datauser"><i class="material-icons">person</i>User</a></li>
    </ul>

    <!-- Konten Utama -->
    <div class="main-content">
        <h3 class="center-align">Daftar Peminjaman</h3>
        <div class="row">
            <div class="col s12">
                <a href="/peminjaman/create" class="btn waves-effect waves-light green"><i class="material-icons left">add</i> Tambah Peminjaman</a>
                <table class="highlight responsive-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Buku ID</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Status Peminjaman</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($peminjaman as $item): ?>
                        <tr>
                            <td><?= $item['PeminjamanID']; ?></td>
                            <td><?= $item['UserID'];?></td>
                            <td><?= $item['BukuID'];?></td>
                            <td><?= $item['TanggalPeminjaman']; ?></td>
                            <td><?= $item['TanggalPengembalian']; ?></td>
                            <td><?= $item['StatusPeminjaman']; ?></td>
                            <td>
                                <a href="/peminjaman/edit/<?= $item['PeminjamanID']; ?>" class="btn yellow darken-2 waves-effect waves-light">
                                    <i class="material-icons">edit</i>
                                </a>
                                <a href="/peminjaman/delete/<?= $item['PeminjamanID']; ?>" class="btn red waves-effect waves-light" onclick="return confirm('Apakah Anda yakin?')">
                                    <i class="material-icons">delete</i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
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
