<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Dosen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tambah Dosen</h2>
    <form id="formDosen">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="nip">NIP:</label>
        <input type="text" id="nip" name="nip" required>

        <label for="mataKuliah">Mata Kuliah:</label>
        <input type="text" id="mataKuliah" name="mataKuliah" required>

        <button type="submit">Tambah</button>
    </form>

    <h2>Data Dosen</h2>
    <table id="tableDosen">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Mata Kuliah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data akan ditampilkan di sini -->
        </tbody>
    </table>

    <script src="script.js"></script>
</body>
</html>