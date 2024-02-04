<head>
    <title>DPEE - Create Service</title>
    <link rel="shortcut icon" href="/img/logo (1).ico" type="image/x-icon">


    <style>
        input[type="file"] {
            display: none;
        }

        .custom-file-upload {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
            width: 100%;
        }

        #file-upload:hover {
            background: black;
            color: white;
        }
    </style>

</head>
<x-app-layout>
    <x-slot name="header">
        <div class=" col-12" style="display: flex;justify-content: space-between;">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Service') }}
            </h2>
            <div class="">
                <a href="/admin" class="btn btn border border-danger">retour</a>
            </div>
        </div>
    </x-slot>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="ale-rt alert-danger" role="alert">
        {{$error}}
    </div>
    @endforeach
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 d-flex justify-content-center">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg " style="width: 70%;">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="form">
                            <label class="form-label" for="title">
                                title
                            </label><br>
                            <input class="form-control" type="text" name="title" placeholder="Tapez le nom du service"><br>

                            <label for="description" class="form-label">
                                Description
                            </label><br>
                            <textarea name="description" class="form-control" placeholder="Tapez la description du service" id="" cols="30" rows="10"></textarea><br>

                            <div class="d-flex justify-content-center">

                                <label for="file-upload" class="custom-file-upload btn border border-secondary border-1 ">
                                    sélectionner l'image du service
                                </label>  
                                <input id="file-upload" name="image" type="file" accept="image/*" required />
                            </div>

                            <div class="d-flex justify-content-center  mt-5">
                                <button class="btn btn-info bg-blue-400 col-4">
                                    Save
                                </button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
</body>

</html>