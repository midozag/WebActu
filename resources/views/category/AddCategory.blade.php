@extends('applayout')
@section('title','Add Category')

@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-2 mx-auto max-w-5xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">{{ isset($category) ? 'Modifier une catégorie' : 'Ajouter une catégorie' }}</h2>
        <form action="{{ isset($category) ? route('category.update',$category) : route('category.store') }}" method="POST">
            @csrf
            @if (isset($category))
                @method('PUT')
            @endif
            <div class="grid gap-4 sm:grid-cols-3 sm:gap-4">
                <div class="">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom de la catégorie</label>
                    <input type="text" name="name" value="{{ old('name',isset($category)?$category->name:'') }}" id="name" class="bg-gray-50 border border-indigo-500 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nom catégorie" required="">
                </div>
                <div class="">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea name="description"  id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-indigo-500 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your description here">{{ old('description',isset($category)?$category->description:'') }}</textarea>
                </div>
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Activer</label>
                    <select name="isActive" id="category" class="bg-gray-50 border border-indigo-500 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        
                        <option value="1" 
                        @if (isset($category))
                            @selected($category->isActive===1)
                        @endif>Activer</option>
                        <option value="0"
                        @if (isset($category))
                            @selected($category->isActive===0)
                        @endif>Ne pas activer</option>
                        
                    </select>
                </div>
                
                
            </div>
            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-indigo-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                {{ isset($category) ? 'Modifier une catégorie' : 'Ajouter une catégorie' }}
            </button>
        </form>
    </div>
  </section>
@endsection