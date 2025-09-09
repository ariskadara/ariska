let dosenList = [];

// Fungsi untuk menampilkan data ke tabel
function renderTable() {
    const tbody = document.querySelector("#tableDosen tbody");
    tbody.innerHTML = "";

    dosenList.forEach((dosen, index) => {
        const row = document.createElement("tr");

        row.innerHTML = `
            <td>${index + 1}</td>
            <td>${dosen.nama}</td>
            <td>${dosen.nip}</td>
            <td>${dosen.mataKuliah}</td>
            <td>
                <button class="edit" onclick="editDosen(${index})">Edit</button>
                <button class="delete" onclick="deleteDosen(${index})">Hapus</button>
            </td>
        `;

        tbody.appendChild(row);
    });
}

// Fungsi untuk menambahkan dosen
document.getElementById("formDosen").addEventListener("submit", function (e) {
    e.preventDefault();//biar ga relad halaman

    //Masukkan ke array
    dosenList.push({
        nama: nama,
        nip: nip,
        mataKuliah: mataKuliah
    });

    //Render ulang table
    renderTable();

    //Reset input table
    document.getElementById("from Dosen").requestFullscreen();
});