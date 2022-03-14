<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <nav style="background-color: lightgrey;" class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SHOP</a>
        </div>
    </nav>      
    <h2 style="text-align: left;" >BELANJA ONLINE</h2>
        <div class="container-fluid d-flex">
            <div class="container">
                <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Customer</label> 
                        <div class="col-8">
                            <input id="customer" name="customer" placeholder="Masukkan nama anda" type="text" class="form-control">
                        </div>
                </div>
                <div class="form-group row">
                    <label for="produk" class="col-4 col-form-label">Pilih Produk</label> 
                        <div class="col-8">
                            <select id="produk" name="produk" class="custom-select">
                                <option value="ip">Iphone</option>
                                <option value="laptop">Laptop</option>
                                <option value="mobil">Mobil</option>
                            </select>
                        </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Masukkan Jumlah yang ingin dibeli" type="text" class="form-control">
                        </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="proses" type="submit" value="Simpan" class="btn btn-succes">Simpan</button>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 30em;">
                <div class="card-header">
                    <label for="harga" class="col-4 col-form-label">Daftar Harga</label>     
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Iphone : 21.000.000</li>
                    <li class="list-group-item">Laptop : 10.000.000</li>
                    <li class="list-group-item">Mobil : 5000.000</li>
                </ul>
                <div class="card-header">
                    Harga bisa berubah setiap saat
                </div>
            </div>
        </div>
<?php

            $customer = $_POST['customer'];
            $produk = $_POST['produk'];
            $jumlah = $_POST ['jumlah'];

            if ($produk == 'Iphone'){
                $harga = 2000000;
            }elseif ($produk == 'Laptop'){
                $harga = 1100000;
            }elseif ($produk == 'Mobil'){
                $harga = 5200000;
            }

            $total = $jumlah * $harga;
            echo'<br/> Nama Customer : '.$customer;
            echo'<br/> Produk Pilihan : '.$produk;
            echo'<br/> Jumlah Beli : '.$jumlah;
            echo'<br/> Total Bel : '.$total;

        ?>
        </form>

      