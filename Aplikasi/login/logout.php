<?php
session_start();

session_destroy();
echo "<script>
alert('Berhasil logout');
window.location='../index.html';
</script>";