@extends('layouts.navbar')

@section('sidebar')
<div class="py-4 mb-3">
        <img src="../assets/img/banner-registrasi.png" class="img-fluid" alt="...">
    </div>
    <div class="container">
        <h3 class="text-center biru">INTERNSHIP PT.APTIKMA</h3>
    </div>

    <div class="container">
        <div class="row text-center py-5">
            <div class="col-md-4 col-12 pb-5">
                <img src="../assets/img/res-1.png" alt="" width="70%" class="img-fluid res-img">
                <figcaption>Data Sientist</figcaption>
            </div>
            <div class="col-md-4 col-12 pb-5">
                <img src="../assets/img/res-2.png" alt="" width="70%" class="img-fluid res-img">
                <figcaption>Web Developers</figcaption>
            </div>
            <div class="col-md-4 col-12 pb-2">
                <img src="../assets/img/res-3.png" alt="" width="70%" class="img-fluid res-img">
                <figcaption>Mobile Developers</figcaption>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-2"></div>
            <div class="col-md-4 col-12 pb-5">
                <img src="../assets/img/res-4.png" alt="" width="70%" class="img-fluid res-img">
                <figcaption>Design UI-UX</figcaption>
            </div>
            <div class="col-md-4 col-12">
                <img src="../assets/img/res-5.png" alt="" width="70%" class="img-fluid res-img">
                <figcaption>Design Grafis</figcaption>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center biru">Mekanisme Internship PT. Aptikma</h2>
        <p class="text-center">Tujuan internship pada PT. Aptikma adalah memberikan kesempatan kepada pelajar di
            Indonesia untuk
            improve diri dan upgrade skill. Apabila Anda beruntung, bisa berkelanjutan untuk menjadi karyawan.
            Jadi pastikan jika Anda internship di Aptikma, Anda mempunyai keinginan tinggi untuk menjadi
            karyawan dan bersedia untuk mengikuti seleksi.</p>
    </div>
    <div class="container">
        <div class="row py-3 mx-auto">
            <div class="col-md-6 col-4 pt-2 ">
                <ol class="numbered-list">
                    <li class="pb-5">
                        Tes Kualifikasi
                    </li>
                    <li class="pb-5">Interview</li>
                    <li class="pb-5">Recruitment</li>
                </ol>
            </div>
           <div class="col-md-6 col-8 mx-auto">
            <ul class="pb-4">
                <li>
                    Mengisi formulir pendaftaran Internship
                </li>
                <li>Apply CV</li>
            </ul>
            <ul class="pb-4">
                <li>
                    Akan mendapatkan jadwal interview
                </li>
                <li>Mengikuti Interview sesuai Job yang dipilih</li>
            </ul>
            <ul class="pb-4">
                <li>
                    Pengumuman diterima atau tidak nya Internship 
                </li>
                <li>Kesepakatan kontrak dengan HR</li>
            </ul>
           </div>
        </div>
    </div>
    <div class="container">
    <div class="col-md-12 col-12 text-center pb-3">
        <a href="##">
        <button class="col-md-8 col-8 bt-persyaratan rounded py-2" ><h3>Persyaratan</h3></button>
    </a>
    </div>
    <h3 class="text-center py-2">“PASTIKAN ANDA SUDAH MEMENUHI PERSYARATAN
        DEMI KELANCARAN INTERNSHIP”</h3>
       <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="mx-auto">
                <ul class="li-syarat">
                    <li>Memiliki laptop dengan performa yang mumpuni</li>
                    <li>Bersedia bekerja dalam jaringan</li>
                    <li>Domisili daerah di Jawa Timur</li>
                    <li>Menguasai basic skill pada posisi yang dipilih</li>
                    <li>Lolos interview</li>
                    <li>Memiliki kemauan untuk belajar dan dapat beradaptasi dengan cepat</li>
                    <li>Memiliki kemampuan analitis guna pemecahan masalah</li>
                    <li>Mampu berkomunikasi dengan baik dan berpenampilan rapi</li>
                </ul>
               <h3 class="py-3 text-black link"><a href="{{route('formPage')}}">Form Registrasi Internship -></a></h3> 
            </div>
        </div>
       </div>
</div>
@endsection