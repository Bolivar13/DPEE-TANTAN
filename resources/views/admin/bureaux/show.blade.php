<title>{{$bureau->title}}</title>
<link rel="shortcut icon" href="/img/logo (1).ico" type="image/x-icon">

<style>
    .sp2:hover {
        color: orange;
    }

    .sp3:hover {
        color: red;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <div class=" col-12" style="display: flex;justify-content: space-between;">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{$bureau->title}}
            </h2>
            <div class="">
                <a href="/adminbureau" class="btn btn-danger">retour</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg d-flex flex-wrap justify-content-center flex-column">
                <div class="d-flex justify-content-center flex-column text-center  p-4">
                    <span>
                        Bureau:
                    </span>
                    <h1 class="fs-1 fw-bold mb-5">
                        {{$bureau->title}}
                    </h1>
                    <span>
                        Description:
                    </span>
                    <p>
                        {{$bureau->description}}
                    </p>

                </div>
                <div class="d-flex justify-content-center">
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

            </div>
        </div>
    </div>
</x-app-layout>