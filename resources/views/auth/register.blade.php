@extends('layouts.app')

@section('content')
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Primewaretrades.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.html">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="font/flaticon.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- jquery-->
    <script src="js/jquery-3.5.0.min.js"></script>
    <link rel="stylesheet" href="../sweetalert2/dist/sweetalert2.min.css">
    <style>
        .select2-selection.select2-selection--single,
        input {
            border: unset !important;
            border: 1px solid #e7e7e7 !important;
            border-radius: unset !important;
        }

        .select2-selection.select2-selection--single {
            padding-bottom: 30px;
            padding-top: 5px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #9c9393 !important
        }

        input[type=text],
        input[type=email],
        input[type=number],
        input[type=tel],
        input[type=password] {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }

        i.toggle-password {
            margin-right: 10px;
        }

        @media(min-width:992px) {
            .yeyyue {
                height: 100vh;
            }

            .ytrwiklwk {
                overflow-x: scroll;
            }

            .fxt-content {
                margin-top: 400px;
            }

            .ytyuytyikmnjwm {
                display: flex;
                justify-content: center;
            }
        }

        .fxt-template-layout19 .fxt-bg-img:before {
            content: unset !important;
        }

        .select2.select2-container.select2-container--default {
            max-width: 100% !important;
        }

        .select2.select2-container.select2-container--default.select2-container--above {
            width: 100% !important;
        }

        .select2.select2-container.select2-container--default {
            width: 100% !important;
        }

        .ytyuytyikmnjwm {
            display: flex;
            justify-content: center;
        }

        @media(max-width: 400px) {
            .yeyyue {
                /* background-position-x: -400px !important; */
            }
        }


        @media(max-width: 700px) {
            .hshsgsg {
                display: none !important;
            }
        }

        .yeyyue {
            background-position-x: left !important;
        }

        .yeyyue.ytrwiklwk {
            background-color: rgba(1, 18, 60, .9) !important;
        }

        h2,
        span,
        p {
            color: #fff !important;
        }

        .kiksksk992mmw {
            background: #c49a0e !important;
            color: #fff !important;
        }

        input#htmlInput {
            color: #c49a0e !important;
        }

        #pass-length-error,
        #pass-error {
            color: #bb1010 !important;
        }

        .select2-results__option span {
            color: #01123c !important;
        }

        /*@media(max-width: 480px)*/
    </style>
</head>


<section class="fxt-template-animation fxt-template-layout19" style="background-color:  ">
    <div class="container-fluid" style="background-image: url();">
        <div class="row">
            <div class="col-md-3 col-12"></div>
            <div class="col-md-6 col-12 fxt-bg-color yeyyue ytrwiklwk">
                <div class="fxt-content" style="margin-top:1rem">
                    <div class="fxt-form">
                        <a href="/" class="fxt-logo">
                            <center>
                                
							<img style="height: 150px; 
                            margin-top:1rem;" src="{{ asset('/storage/images/JxZzyOwMTIiMwrL6YErxStgJCXHX2067rm32AiKW.png') }}"
                             alt="Logo">
                            </center>
                        </a>

                        <h2 style="text-transform: uppercase; text-align: center; margin-bottom: 20px">Create an
                            account</h2>
                        <p style="text-align: center; font-size: 17px">Account creation has never been easier and
                            faster! <br> Simply supply the information required in the form below to create a new
                            account.</p> <br>



<div class="container" >

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"style=" width:100% ; background-color: #01123c ;" >
                <div class="card-header text-white" style="text-align: center; ">{{ __('Register') }}</div>

                <div class="card-body" >
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">

                            <div class="col-md-12 " style="padding-bottom:1rem">
                                 
                                <input id="name" type="text" placeholder="Enter Name" class="form-control @error('name') is-invalid @enderror form-group fxt-transformY-50 fxt-transition-delay-1 " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">

                            <div class="col-md-12 " style="padding-bottom:1rem">
                                  
                                <input id="email" placeholder="Enter Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" mb-3">

                            <div class="col-md-12 " style="padding-bottom:1rem">
                                
                                 
                                <input id="password" placeholder="Enter Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">

                            <div class="col-md-12 " style="padding-bottom:1rem">
                               
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="mb-3">
                        <div class="col-md-12 d-flex" style="padding-bottom:1rem">
                           
                            <input id="email" placeholder="Enter bitcoin_wallet_address" type="text" class="form-control " name="bitcoin_wallet_address" >

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-md-12 " style="padding-bottom:1rem">
                             
                            <input id="email" placeholder="Enter USSDT_address" type="text" class="form-control " name="usdt_wallet_address" >

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                        <div class="col-md-12 " style="padding-bottom:1rem">
                            
                            <input id="email" placeholder="ethereum_wallet_address" type="text" class="form-control " name="etherem_wallet_address" >

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>




                        <div class="col-md-12 " style="padding-bottom:1rem">
                            
                            <input id="email" placeholder="Refferal code (optional)" type="text" class="form-control " name="reffered_by" >

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6 offset-md-4" style="padding-bottom:1rem">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if (Session::has('success'))
    <p style="color:green;">{{ Session::get('success') }}</p>
@endif


@if (Session::has('error'))
    <p style="color:rgb(222, 76, 3);">{{ Session::get('error') }}</p>
@endif
@endsection
