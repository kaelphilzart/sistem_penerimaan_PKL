@extends('layouts.navbar')

@section('sidebar')

<div class="py-4 mb-3">
        <img src="../assets/img/banner-registrasi.png" class="img-fluid" alt="...">
    </div>
    <div class="container">
        <h3 class="text-center biru">INTERNSHIP PT.APTIKMA</h3>
        <div class="col-md-12 col-12 py-4">
            <form class="inputan"method="POST" action="{{route('magang.daftar-magang')}}" enctype="multipart/form-data">
              @csrf
            <div class="mb-3">
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                        placeholder="E-mail">
                        @error('email')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" aria-describedby="emailHelp"
                        placeholder="Nama Lengkap">
                        @error('nama_lengkap')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
                    @error('tempat_lahir')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggalLahir">Tanggal Lahir:</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir">
                    @error('tgl_lahir')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                </div>
                <div class="mb-3">
                <input type="text" class="form-control" id="asal_instansi" name="asal_instansi" placeholder="Asal Instansi">
                        @error('asal_instansi')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="minat" name="minat" aria-label="Floating label select example">

                        <option value="Data Scientist">Data Scientist</option>
                        <option value="Web Developers">Web Developers</option>
                        <option value="Mobile Developers">Mobile Developers</option>
                        <option value="Design UI UX">Design UI UX</option>
                        <option value="Design Grafis">Design Grafis</option>
                    </select>
                    <label for="floatingSelect">Internship Yang Diminati</label>

                    @error('minat')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="skill" name="skill"></textarea>
                    <label for="floatingTextarea">Silahkan menyebutkan Skill yang dimiliki</label>
                    @error('skill')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                  </div>
                <div class="mb-3">
                    <label for="cv" class="form-label">Your CV</label>
                    <input class="form-control" type="file" id="cv" name="cv">
                    @error('cv')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                </div>
                <!-- <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div> -->
                <div class="d-grid gap-2">
                    <button class="btn btn-info" type="submit">Submit</button>
                  
                  </div>
                
            </form>
        </div>

    </div>



    @endsection