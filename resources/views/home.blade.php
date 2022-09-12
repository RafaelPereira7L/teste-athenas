@extends('layouts.default')

@section('title', 'Início')

@section('content')


<section class="text-gray-600">
    <div class="container px-5 py-24 mx-auto">

        @if(session('success'))
        <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded mb-6" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif

        <div class="flex flex-wrap -m-4 mb-4">
            <table class="table-auto w-full text-left whitespace-no-wrap">
                <thead>
                <tr>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ID</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Nome</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 hidden lg:flex">Email</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Categoria</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-right"></th>
                </tr>
                </thead>
                <tbody class="divide-y">
                    @foreach ($persons as $person)
                    <tr @if($loop->even) class="bg-gray-100" @endif>
                        <td class="px-4 py-3">{{ $person->id }}</td>
                        <td class="px-4 py-3">{{ $person->name }}</td>
                        <td class="px-4 py-3 hidden lg:flex">{{ $person->email }}</td>
                        <td class="px-4 py-3">{{ $person->category->id }} - {{ $person->category->name }}</td>
                        <td class="px-4 py-3 text-sm text-center space-x-3 text-gray-900">
                            <a href="{{route('person.show', $person->id)}}" class="mt-3 text-blue-500 font-medium inline-flex items-center cursor-pointer">Ver detalhes</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        {{$persons->links()}}
        </div>
    </section>

@endsection
