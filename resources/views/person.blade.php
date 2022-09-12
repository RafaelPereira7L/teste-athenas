@extends('layouts.default')

@section('title', 'Início')

@section('content')


<section class="text-gray-600">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -m-4">
            <table class="table-auto w-full text-left whitespace-no-wrap">
                <thead>
                <tr>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ID</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Nome</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 hidden lg:flex">Email</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Categoria</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-right">Ações</th>
                </tr>
                </thead>
                <tbody class="divide-y">
                    @if ($person)
                    <tr>
                        <td class="px-4 py-3">{{ $person->id }}</td>
                        <td class="px-4 py-3">{{ $person->name }}</td>
                        <td class="px-4 py-3 hidden lg:flex">{{ $person->email }}</td>
                        <td class="px-4 py-3">{{ $person->category->id }} - {{ $person->category->name }}</td>
                        <td class="px-4 py-3 text-sm text-right space-x-3 text-gray-900">
                            <a href="" class="mt-3 text-indigo-500 inline-flex items-center cursor-pointer">Editar</a>
                            <a href="" class="mt-3 text-red-500 inline-flex items-center cursor-pointer">Deletar</a>
                        </td>
                    </tr>
                    @endif

                </tbody>
            </table>
            </div>
        </div>
    </section>

@endsection
