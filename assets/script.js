// Validasi Form Sederhana
function validasiForm() {
    let inputs = document.querySelectorAll('.form-control');
    for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].value.trim() === "") {
            alert("Semua kolom harus diisi!");
            inputs[i].focus();
            return false;
        }
    }
    return true;
}

// Konfirmasi Hapus Data
function konfirmasiHapus(event) {
    if (!confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        event.preventDefault();
    }
}

// Menghubungkan fungsi hapus ke semua tombol dengan class .btn-danger
document.addEventListener("DOMContentLoaded", function() {
    let tombolHapus = document.querySelectorAll(".btn-danger");
    tombolHapus.forEach(function(tombol) {
        tombol.addEventListener("click", konfirmasiHapus);
    });
});