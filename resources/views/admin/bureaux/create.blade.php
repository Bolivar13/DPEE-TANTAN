<head>
    <title>DPEE - Create Bureau</title>
    <link rel="shortcut icon" href="/img/logo (1).ico" type="image/x-icon">


</head>
<x-app-layout>
    <x-slot name="header">
        <div class=" col-12" style="display: flex;justify-content: space-between;">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Bureau') }}
            </h2>
            <div class="">
                <a href="/adminbureau" class="btn btn border border-danger">retour</a>
            </div>
        </div>
    </x-slot>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{$error}}
    </div>
    @endforeach
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 d-flex justify-content-center">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg " style="width: 70%;">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="">
                        @csrf
                        <div class="form">
                            <label class="form-label" for="title">
                                title
                            </label><br>
                            <input class="form-control" placeholder="Tapez le nom du bureau" type="text" name="title"><br>

                            <label for="description" class="form-label">
                                Description
                            </label><br>
                            <textarea name="description" class="form-control" placeholder="Tapez la description du bureau" id="" cols="30" rows="10"></textarea><br>

                            <select name="service_id" class="form-control" id="">
                                <option value="0" disabled selected>Choisissez une service</option>
                                @foreach ($services as $service)
                                <option value="{{$service->id}}">{{$service->title}}</option>
                                @endforeach
                                <option value="0">pas de service</option>
                            </select>

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