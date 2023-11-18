@extends('layouts.admin.app')

@section('content')

<body class="bg-biru">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 bg-hitam">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4  mb-4 text-white"><b>Create an Account!</b></h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('create-admin') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="username" name="username"
                                        placeholder="Username">
                                    @error('username')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password"
                                        placeholder="Password">
                                    @error('password')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn bg-biru btn-user btn-block text-white">Sign up</button>
                            </form>
                            <hr> 
                            <div class="text-center reg">
                                <a class="small" href="{{ route('masuk') }}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>