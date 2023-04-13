<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tambah produk</title>
    @include('layouts.head')
</head>
<body>
<div class="p-10">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6 ">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">create produk</h6>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                </div>
                <div class="card-body">
                    <div class="p-3">
                        <form class="user" action="/store_produk" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" id="product_category_name" name="product_category_name" placeholder="katagori" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="nama produk" required>
                            </div>
                            <div class="input-group p-3">
                                <span class="input-group-text" >keterangan</span>
                                <textarea class="form-control" name="product_detail" aria-label="With textarea" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="product_unit" name="product_unit" placeholder="satuan (pcs/kg/ltr/dus)" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="product_base_price" name="product_base_price" placeholder="harga dasar" required onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="product_sale_price" name="product_sale_price" placeholder="harga jual" required onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                            </div>


                            <hr>
                            <button class="btn btn-primary btn-user btn-block" type="submit" name="submit" id="submit" value="save" >Simpan</button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="/produk">back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
