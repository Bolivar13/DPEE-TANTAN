<head>
    <title>DPEE - Bureaux</title>
    <link rel="shortcut icon" href="/img/logo (1).ico" type="image/x-icon">

    <style>
        .card {
            background-color: #1a2b56;
        }

        .card:hover {
            background-position: 0 100%;
            background-color: #1a2b56;
            color: orange;
        }

        .sp3 {
            color: orange;
        }

        .sp2 {
            color: orange;
        }

        .sp2:hover {
            color: orange;
        }

        .sp3:hover {
            color: red;
        }
    </style>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <div class=" col-12" style="display: flex;justify-content: space-between;">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Bureaux') }}
                </h2>
                <div class="btn d-flex align-items-center btn-info">
                    <a href="adminbureau/create" class="align-items-center d-flex">
                        <span class="material-symbols-outlined">add</span>&nbsp;
                        <span>
                            Nouveau
                        </span>
                    </a>
                </div>
            </div>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg d-flex flex-wrap ">
                    <div class="d-flex justify-content-center flex-wrap">
                        @foreach ($bureaux as $bureau)
                        <div class="card border border-black border-3 m-4 sp1 d-flex justify-content-center " style="width: 18rem;   ">
                            <a class="card-body text-center" href="{{url('/adminbureau/'.$bureau->id.'/show')}}">
                                <h1 class="card-title fw-bold fs-5">{{$bureau->title}}</h1>
                            </a>
                            <div class="px-2 d-flex justify-content-between">
                                <a href="{{url('/adminbureau/'. $bureau->id .'/edit')}}" class="btn  px-1 py-0"><span class="sp2 material-symbols-outlined">edit</span></a>
                                <form method="POST" action="{{ url('adminbureau/' . $bureau->id . '/delete')}}">
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