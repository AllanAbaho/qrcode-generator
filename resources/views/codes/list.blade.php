<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            List Codes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                    @endif()

                    <a href="{{route('codes.create')}}" class="btn btn-primary"> Create</a>
                    <i class="fa-solid fa-download"></i>                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Account Number</th>
                                <th scope="col">File Name</th>
                                <th scope="col">Created At</th>
                                <th scope="col">File</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php


                            for ($i = 0; $i < count($codes); $i++) :
                            ?>
                                <tr>
                                    <th scope="row">{{$i+1}}</th>
                                    <td>{{$codes[$i]->account_number}}</td>
                                    <td>{{$codes[$i]->file}}</td>
                                    <td>{{$codes[$i]->created_at}}</td>
                                    <td><a href="{{ asset('images/'.$codes[$i]->file) }}" download>Download<i class="bi bi-0-circle"></i></a></td>

                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>