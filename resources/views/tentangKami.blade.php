@extends('layouts.navbar')

@section('sidebar')
          <div class="py-4 mb-3">
                <img src="../assets/img/banner.png" class="img-fluid" alt="...">
          </div>
          <div class="container">
            <div class="row pt-3">
                <div class="col-md-6">
                    <img src="../assets/img/rapat.png" class="img-fluid" alt="...">
                    <div class="row">
                      <div class="col-md-3 col-3">
                        <img src="../assets/img/ab1.png" width=""class="img-fluid" alt="...">
                      </div>
                      <div class="col-md-3 col-3">
                        <img src="../assets/img/ab2.png" class="img-fluid" alt="...">
                      </div>
                      <div class="col-md-3 col-3">
                        <img src="../assets/img/ab3.png" class="img-fluid" alt="...">
                      </div><div class="col-md-3 col-3">
                        <img src="../assets/img/ab4.png" class="img-fluid" alt="...">
                      </div>
                      <div class="col-12 mt-2" style="font-size:x-small;">
                        <p>Foto foto kegiatan aptikma yang sudah di dokumentasikan, baik kegiatan formal maupun informal</p>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <p class="text-justify">PT Aptikma Teknologi Indonesia (nickname : Aptikma), 
                    didirikan atas dasar kecintaan terhadap dunia IT dan
                    programming, bukan hanya sekedar berorientasi bisnis. 
                    Aptikma mulai beroperasi pada tahun 2015 di Kota Malang.</p>
                    <p class="text-justify">Mulai tahun 2019, Aptikma memiliki kantor representative di Jakarta. 
                      Hal itu dikarenakan mayoritas client kami berasal dari Jakarta, 
                      sehingga diharapkan dapat mempermudah komunikasi dan koordinasi.</p>
                      <p class="text-justify">
                        Dalam menjawab kebutuhan IT, solusi yang di tawarkan Aptikma
                        menggunakan 3 metode:
                        </p>
                        <ul class="list text-justify">
                          <li>Produk : Untuk kebutuhan software yang sesuai dengan produk Aptikma. 
                            Seperti Asset Management System, ERP dan POS</li>
                            <li> Service : Untuk kebutuhan yang tidak ada dalam list produk aptikma, 
                              solusi yang kami berikan adalah custom development</li>
                              <li>Konsultansi : Solusi yang diberikan lebih mengarah kepada managemen 
                                dan planning seperti Perancangan Blue Print atau IT Master Plan</li>
                        </ul>
                </div>
            </div>
          </div>

          <div class="col-12" style="background-color: #F2EEEE;">
          <div class="container">
            <div class="row mx-auto pb-2">
              <div class="col-md-6 pt-3 " style="margin-bottom: 0px;">
                <p style="margin-bottom: 0px;">Publikasi dan Promosi</p>
                <h4 class="">Dapatkan Company Profile Aptikma</h4>
                <div class="row mx-auto py-2">
                  <div class="col-sm-6 mb-2">
                  <input type="text" placeholder="Nama Anda" class="shadow-sm col-10 py-1" style="background-color: #FDF1F1; border: 0px; border-radius: 2px;">
                </div>
                  <div class="col-sm-6 mb-2">
                    <input type="email" placeholder="Email" class="shadow-sm col-10 py-1" style="background-color: #FDF1F1; border: 0px; border-radius: 2px;">
                  </div>
                  <div class="py-2">
                  <button class="col-sm-6 col-10 text-center bt-about py-2" >Request (15 MB)
                    <i class="fas fa-arrow-up"></i> 
                  </button>
                </div>
                </div>
              </div>
              <div class="col-md-6 pt-3 text-center">
                <img src="../assets/img/about1.png" class="img-fluid" alt="...">
              </div>
            </div>
          </div>
          </div>

          <div class="container py-5">
            <h3 class=" text-center">Prinsip Kerja</h3>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-md-6">
                  <p>
                    <ul>
                      <li class="list">Solution Oriented</li>
                      <p>Anda cukup menceritakan problem yang Anda miliki, 
                        kami yang akan menyipapkan solusi dengan mempertimbangkan
                         berbagai hal seperti level Perusahaan Anda, Biaya, ataupun Resources.
                        </p>
                        <li class="list">Maintain is a must</li>
                        <p>Di Aptikma, Anda tidak hanya mendapat layanan untuk membuat 
                          sebuah aplikasi, tapi juga maintenance setelah aplikasi selesai. 
                          Termasuk juga rencana dan eksekusi improvement.</p>
                          <li class="list">24/7 excellent support</li>
                        <p>Anda tak perlu khawatir dengan after sales support, karena 
                          sudah tersedia tim untuk Anda bahkan diluar jam kerja ataupun diluar hari kerja.</p>
                    </ul>
                  </p>
              </div>
              <div class="col-md-6">
                <img src="images/about2.png"  alt="" class="img-fluid">
                <p>Hore..... !!!! <br>
                  Bimbingan Teknis dan Pelatihan aplikasi PKH+ Dinas Provinsi Jawa Timur 
                  di Kabupaten Jember. Kegiatan ini dilakukan dalam fase implementasi 
                  setelah development selesai <br>
                  ~ Because the correct solution always bring happiness ~</p>
              </div>
            </div>
          </div>
@endsection