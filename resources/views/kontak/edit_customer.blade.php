<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layouts.head')
</head>
<body>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6 ">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">edit customer</h6>
                </div>
                <div class="card-body">
                    <div class="p-3">
                        <form class="user" action="/customer/{{ $customer->id }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" >Nama</span>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ $customer->nama }}">
                            </div>
                            <div class="input-group  mb-3">
                                <span class="input-group-text" >kode</span>
                                <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode" value="{{ $customer->kode }}">
                            </div>
                            <div class="input-group  mb-3">
                                <span class="input-group-text" >hp</span>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{ $customer->phone }}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                            </div>
                            <div class="input-group  mb-3">
                                <span class="input-group-text" >e-mail</span>
                                <input type="text" class="form-control" id="email" value="{{ $customer->email }}" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text" >Alamat</span>
                                <textarea class="form-control" name="address" aria-label="With textarea">{{ $customer->address }}</textarea>.
                                </div>

                            <hr>
                            <button class="btn btn-primary btn-user btn-block" type="submit" name="submit" id="submit" value="update" >Simpan</button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{ route('customer') }}">cancel editing</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
