@extends('applayout')
@section('title','Add Category')

@section('content')
    

    

<div class="relative  shadow-md sm:rounded-lg">
    <table class="w-full h-10 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            Liste des catégories
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID de la catégorie
                </th>
                <th scope="col" class="px-6 py-3">
                    Nom
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Activation
                </th>
                
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
         @foreach ($categories as $category )
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
               #00{{ $category->id }}
            </th>
            <td class="px-6 py-4">
                {{ $category->name }}
            </td>
            <td class="px-6 py-4">
                {{ $category->description }}
            </td>
            <td class="px-6 py-4">
                {{ $category->isActive === 1 ? 'ACTIVE' : 'DESACTIVE' }}
            </td>
            <td class="pl-14 py-4">
                <button class="show relative"> 
                    <i class="ri-more-2-fill"></i>
                </button>
                <div class="drop absolute  right-20 z-10  border-2 rounded-md hidden">
                    <ul >
                        <li class="py-1 px-0  hover:bg-[#E9ECEF] text-center">
                            <a href="{{ route('category.edit',$category->id) }}"><i class="ri-edit-line "></i>Modifier</a>
                        </li>
                        <li class="py-1 px-1 hover:bg-[#E9ECEF] text-center">
                            <a href=""><i class="ri-delete-bin-6-line"></i>Supprimer</a>
                        </li>
                    </ul>
                </div>
                
            </td>
            </tr>   
         @endforeach
            
            
            
        </tbody>
    </table>
</div>



@endsection