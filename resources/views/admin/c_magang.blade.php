@extends('layouts.admin.template')

@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-2 text-gray-800">Internship</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pendaftar</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                  
            </div>
           
    </div>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Nama Lengkap</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Asal</th>
                        <th>Minat</th>
                        <th>Skill</th>
                        <th>CV</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $key => $dataMember)
                    <tr>
                        <td>{{ $data->firstItem() + $key }}</td>
                        <td>{{ $dataMember->email }}</td>
                        <td>{{ $dataMember->nama_lengkap }}</td>
                        <td>{{ $dataMember->tempat_lahir }}</td>
                        <td>{{ $dataMember->tgl_lahir }}</td>
                        <td>{{ $dataMember->asal_instansi }}</td>
                        <td>{{ $dataMember->minat }}</td>
                        <td>{{ $dataMember->skill }}</td>
                        <td>
                        @if($dataMember->cv)
    @php
        $fileName = basename($dataMember->cv);
    @endphp
    <a href="{{ asset($dataMember->cv) }}" target="_blank">{{ $fileName }}</a>
@else
    Tidak ada file
@endif
                        </td>
                        <td>
                        <form action="{{route('cmagang.tolak', $dataMember->id_cmagang)}}" method="post">@csrf
                    <button class="btn btn-danger px-3 mb-2" onClick="return confirm('Yakin Hapus Data?')">Tolak</button>
                    </form>
                    <form action="{{route('cmagang.terima', $dataMember->id_cmagang)}}" method="post">
                        @csrf
                    <button class="btn btn-success px-2" onClick="return confirm('Yakin Diterima?')" type="submit">Terima</button>
                    </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          
           
            <div style="col-12 col-md-6">
            {{ $data->links() }}
       
            </div>
        </div>
       
    </div>
</div>

</div>
<!-- /.container-fluid -->


@endsection