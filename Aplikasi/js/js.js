var searchsiswa = document.getElementById('searchsiswa');
var tablesiswa = document.getElementById('tablesiswa');

var searchkelas = document.getElementById('searchkelas');
var tablekelas = document.getElementById('tablekelas');

var searchpetugas = document.getElementById('searchpetugas');
var tablepetugas = document.getElementById('tablepetugas');

var searchspp = document.getElementById('searchspp');
var tablespp = document.getElementById('tablespp');

var searchhistori = document.getElementById('searchhistori');
var tablehistori = document.getElementById('tablehistori');

if (searchsiswa) {
    searchsiswa.addEventListener('keyup', function () {

        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                tablesiswa.innerHTML = xhr.responseText;
            }
        }


        xhr.open('GET', '../ajax/search_siswa.php?cari=' + searchsiswa.value, true);
        xhr.send();

    });

} else if (searchkelas) {
    searchkelas.addEventListener('keyup', function () {

        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                tablekelas.innerHTML = xhr.responseText;
            }
        }


        xhr.open('GET', '../ajax/search_kelas.php?cari=' + searchkelas.value, true);
        xhr.send();

    });
} else if (searchpetugas) {
    searchpetugas.addEventListener('keyup', function () {

        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                tablepetugas.innerHTML = xhr.responseText;
            }
        }


        xhr.open('GET', '../ajax/search_petugas.php?cari=' + searchpetugas.value, true);
        xhr.send();

    });
} else if (searchspp) {
    searchspp.addEventListener('keyup', function () {

        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                tablespp.innerHTML = xhr.responseText;
            }
        }


        xhr.open('GET', '../ajax/search_spp.php?cari=' + searchspp.value, true);
        xhr.send();

    });
} else if (searchhistori) {
    searchhistori.addEventListener('keyup', function () {

        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                tablehistori.innerHTML = xhr.responseText;
            }
        }


        xhr.open('GET', '../ajax/search_histori.php?cari=' + searchhistori.value, true);
        xhr.send();

    });
}