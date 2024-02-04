<title>{{$projet->title}}</title>
<link rel="shortcut icon" href="/img/logo (1).ico" type="image/x-icon">

<style>
    .mmg {
        /* max-width: 400px; */
        padding: 10px;
        border-radius: 20px;
        max-height: 250px;
    }

    table {
        max-width: 300px;
    }

    .hvr:hover {
        padding: 20px;
        color: orange;
        background-color: #1a2b56;
        font-size: 20px;
    }

    .with {
        width: 100%;
        height: 100%;
        display: flex;
        padding: 15px;
        justify-content: space-between;
    }

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
                {{$projet->title}}
            </h2>
            <div class="">
                <a href="/adminprojet" class="btn btn-danger">retour</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg d-flex flex-wrap justify-content-center flex-column">

                <div class="col-12 d-flex justify-content-center">
                    <img src="{{asset('/storage/projetsPicture'.'/' . $projet->image)}}" class="mmg justify-content-center d-flex " alt="...">
                </div>
                <div class="d-flex justify-content-center flex-column text-center  p-4">
                    <h1 class="fs-1 fw-bold mb-5">
                        {{$projet->title}}
                    </h1>
                    <h1 class="fs-3 text-success fw-bold mb-5">
                        Durée: {{$projet->duree}}
                    </h1>
                    <p>
                        {{$projet->description}}
                    </p>
                </div>

                <div class="d-flex justify-content-center">


                    <div class="px-2 d-flex justify-content-between">
                        <a href="{{url('/adminprojet/'. $projet->id .'/edit')}}" class="btn  px-1 py-0"><span class="sp2 material-symbols-outlined">edit</span></a>
                        <form method="POST" action="{{ url('adminprojet/' . $projet->id .'/delete')}}">
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