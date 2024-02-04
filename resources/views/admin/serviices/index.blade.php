<head>
    <title>DPEE - Services</title>
    <link rel="shortcut icon" href="/img/logo (1).ico" type="image/x-icon">

    <style>
        .card:hover {
            background-position: 0 100%;
            background-color: lightgoldenrodyellow;
        }

        .sp2:hover {
            color: orange;
        }

        .sp3:hover {
            color: red;
        }

        .mmg {
            width: 100%;
            height: 150px;
        }
    </style>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <div class=" col-12" style="display: flex;justify-content: space-between;">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Services') }}
                </h2>
                <div class="btn d-flex align-items-center btn-info">
                    <a href="adminservice/create" class="align-items-center d-flex">
                        <span class="material-symbols-outlined">add</span>&nbsp;
                        <span>Nouveau</span>
                    </a>
                </div>
            </div>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg d-flex flex-wrap ">
                    <div class="d-flex justify-content-center flex-wrap">
                        @foreach ($services as $service)
                        <div class="card m-4 sp1 d-flex justify-content-center " style="width: 18rem;   ">
                            <a class="card-body text-center" href="{{url('/adminservice/'.$service->id.'/show')}}">
                                <img src="{{asset('/storage/images'.'/' . $service->image)}}" class="mmg justify-content-center d-flex" alt="...">
                                <h1 class="card-title mt-3">{{$service->title}}</h1>
                            </a>
                            <div class="px-2 d-flex justify-content-between">
                                <a href="{{url('/adminservice/'. $service->id .'/edit')}}" class="btn  px-1 py-0"><span class="sp2 material-symbols-outlined">edit</span></a>
                                <form method="POST" action="{{ url('adminservice/' . $service->id)}}">
                                    @method("DELETE")
                                    @csrf
                                    <button class="btn py-0 px-1 m-0">
                                        <span class="sp3 material-symbols-outlined">delete</span>
                                    </button>
                                </Form>


                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>