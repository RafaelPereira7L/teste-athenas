@extends('layouts.default')

@section('title', 'Editar pessoa')


@section('content')
<section class="text-gray-600">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-2/4 w-full mx-auto overflow-auto">
                <h1 class="text-2xl font-medium title-font text-center mb-2 text-gray-900">Editar pessoa</h1>

            <form
            id="person-form"
            method="POST"
            enctype="multipart/form-data"
            action="{{ route('person.update', $person->id) }}"
        >
            @csrf
            @method('put')
                <div class="flex flex-wrap flex-col justify-center items-center ">
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Nome da pessoa</label>
                            <input
                            value="{{old('name', $person->name)}}"
                            type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        @error('name')
                            <p class="text-red-500 text-xs font-medium italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Email</label>
                            <input
                            value="{{old('email', $person->email)}}"
                            type="text" id="email" name="email"
                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                        </div>
                        @error('email')
                            <p class="text-red-500 text-xs font-medium italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Categoria</label>

                        <select class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out" name="category_id" form="person-form"
                        >
                        <option></option>

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id === $person->category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                          </select>

                        @error('category_id')
                            <p class="text-red-500 text-xs font-medium italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="p-2 w-full">
                        <button type="submit" class="flex mt-2 mx-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Editar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
