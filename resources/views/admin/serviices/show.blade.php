<title>{{$services->title}}</title>
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
</style>
<x-app-layout>
    <x-slot name="header">
        <div class=" col-12" style="display: flex;justify-content: space-between;">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{$services->title}}
            </h2>
            <div class="">
                <a href="/adminservice" class="btn btn-danger">retour</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg d-flex flex-wrap justify-content-center flex-column">

                <div class="col-12 d-flex justify-content-center">
                    <img src="{{asset('/storage/images'.'/' . $services->image)}}" class="mmg justify-content-center d-flex " alt="...">
                </div>
                <div class="d-flex justify-content-center flex-column text-center  p-4">
                    <h1 class="fs-1 fw-bold mb-5">
                        {{$services->title}}
                    </h1>
                    <p>
                        {{$services->description}}
                    </p>
                    <div class="col-12 d-flex justify-content-center">

                        <table class="table text-center mt-5">
                            <thead>
                                <tr class="border-white">
                                    <th class="fs-3 pb-4">Bureaux</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($BureauxOfservice as $Bureau)
                                <tr class="border-white">
                                    <td class="hvr p-0 align-items-center d-flex justify-content-between">
                                        <a href="{{url('/adminbureau/'. $Bureau->id .'/show')}}" class="with">
                                            <span class="material-symbols-outlined">
                                                expand_circle_down
                                            </span>
                                            <h5 class="text-start">
                                                {{$Bureau->title}}
                                            </h5>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>