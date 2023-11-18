@extends('layouts.admin.template_magang')

@section('content')

    

<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <!-- <h1 class="h3 mb-0  mt-5 font-weight-bold">Dashboard</h1> -->
</div>



    <div class="row justify-content-center pb-5">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">{{ __('Selamat Datang') }}</div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  <span class="font-weight-bold">{{ Auth::user()->username }}</span>
                    {{ __('di Aptikma') }}
                </div>
            </div>
        </div>
</div>

@endsection