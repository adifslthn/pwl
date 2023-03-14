<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'perpus');
if (!$koneksi) {
    echo "can't connect ";
}