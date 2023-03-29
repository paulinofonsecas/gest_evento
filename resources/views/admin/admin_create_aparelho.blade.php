<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Criar produto</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{ asset('theme/plugins/fontawesome-free/css/all.min.css') }}>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href={{ asset('theme/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}>
    <!-- Toastr -->
    <link rel="stylesheet" href={{ asset('theme/plugins/toastr/toastr.min.css') }}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{ asset('theme/dist/css/adminlte.min.css') }}>
    <!-- Select2 -->
    <link rel="stylesheet" href={{ asset('theme/plugins/select2/css/select2.min.css') }}>
    <link rel="stylesheet" href={{ asset('theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}>

    <!-- Font Awesome -->
    <link rel="stylesheet" href={{ asset('theme/plugins/fontawesome-free/css/all.min.css') }}>
    <!-- daterange picker -->
    <link rel="stylesheet" href={{ asset('theme/plugins/daterangepicker/daterangepicker.css') }}>
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href={{ asset('theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}>
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href={{ asset('theme/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}>
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href={{ asset('theme/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}>
    <!-- Select2 -->
    <link rel="stylesheet" href={{ asset('theme/plugins/select2/css/select2.min.css') }}>
    <link rel="stylesheet" href={{ asset('theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}>
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href={{ asset('theme/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}>
    <!-- BS Stepper -->
    <link rel="stylesheet" href={{ asset('theme/plugins/bs-stepper/css/bs-stepper.min.css') }}>
    <!-- dropzonejs -->
    <link rel="stylesheet" href={{ asset('theme/plugins/dropzone/min/dropzone.min.css') }}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{ asset('theme/dist/css/adminlte.min.css') }}>
</head>

<body class="hold-transition">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')
        <div class="py-7">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <div class="col-6">
                                    <h2 class="card-title">Criar produto</h2>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('aparelho.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <x-input-label for="nome" :value="__('Nome')" />
                                            <x-text-input id="nome" class="block mt-1 w-full" type="text"
                                                name="nome" required autofocus autocomplete="username" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="descricao">Descrição</label>
                                            <textarea class="form-control" name="descricao" id="descricao" rows="3" placeholder="Descreva o aparelho"></textarea>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="precoAluger">Preço de aluguer</label>
                                            <input type="number" name="precoAluger" class="form-control"
                                                id="precoAluger" placeholder="Preço de aluger">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="imageFile">Imagem do aparelho</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="imageFile" class="custom-file-input"
                                                        id="imagefile">
                                                    <label class="custom-file-label" for="imageFile">Escolha o
                                                        arquivo</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src={{ asset('theme/plugins/jquery/jquery.min.js') }}></script>
    <!-- Select2 -->
    <script src={{ asset('theme/plugins/select2/js/select2.full.min.js') }}></script>
    <!-- Bootstrap 4 -->
    <script src={{ asset('theme/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <!-- SweetAlert2 -->
    <script src={{ asset('theme/plugins/sweetalert2/sweetalert2.min.js') }}></script>
    <!-- Toastr -->
    <script src={{ asset('theme/plugins/toastr/toastr.min.js') }}></script>
    <script src={{ asset('theme/plugins/filterizr/jquery.filterizr.min.js') }}></script>
    <script src={{ asset('theme/plugins/ekko-lightbox/ekko-lightbox.min.js') }}></script>
    <!-- AdminLTE App -->
    <script src={{ asset('theme/dist/js/adminlte.js') }}></script>
    <!-- bs-custom-file-input -->
    <script src={{ asset('theme/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}></script>
    <!-- InputMask -->
    <script src={{ asset('theme/plugins/moment/moment.min.js') }}></script>
    <script src={{ asset('theme/plugins/inputmask/jquery.inputmask.min.js') }}></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src={{ asset('theme/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}></script>
    <!-- Bootstrap Switch -->
    <script src={{ asset('theme/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}></script>
    <!-- BS-Stepper -->
    <script src={{ asset('theme/plugins/bs-stepper/js/bs-stepper.min.js') }}></script>
    <script>
        $(function() {
            bsCustomFileInput.init();

            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()
        });
    </script>
</body>


</html>