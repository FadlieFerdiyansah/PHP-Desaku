<?php
require_once 'koneksi.php';
session_start();

session_destroy();
header("Location: index.php");
