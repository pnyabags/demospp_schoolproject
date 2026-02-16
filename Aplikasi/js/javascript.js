var searchsiswa = document.getElementById('search-siswa');
var tablesiswa = document.getElementById('table-siswa');

    searchsiswa.addEventListener('keyup', function(){
       var xhr = new XMLHttpRequest();
       
       xhr.onreadystatechange = function (){
           if (xhr.readyState == 4 && xhr.status == 200) {
               tablesiswa.innerHTML = xhr.responseText;
       }
    }

       xhr.open('GET', 'ajax/search_siswa.php?search=' + searchsiswa.value, true);
       xhr.send;
    });