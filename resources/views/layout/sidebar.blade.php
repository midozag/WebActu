<div class="fixed left-0 top-0 w-64 h-full bg-indigo-500 p-4 z-50 sidebar-menu transition-transform">
    <a href="{{route('dashboard')}}" class="flex items-center pb-4 border-b border-b-gray-800">
        @if (Auth::user()->image AND file_exists(public_path("assets/profile/".Auth::user()->image)))
              <img src="{{  asset('assets/profile/'.Auth::user()->image )}}" alt="" class="w-10 h-10 rounded object-cover">
           @else
              <img src="{{  asset('assets/img/logo.png' )}}" alt="" class="w-10 h-10 rounded object-cover"> 
           @endif   
        <span class="text-lg font-bold text-white ml-3">{{ Auth::user()->name }}</span>
    </a>
    <ul class="mt-4">
        <li class="mb-1 group active">
            <a href="{{route('dashboard')}}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-indigo-900 hover:text-gray-100 rounded-md group-[.active]:bg-indigo-900 group-[.active]:text-white group-[.selected]:bg-indigo-900 group-[.selected]:text-gray-100">
                <i class="ri-home-2-line mr-3 text-lg"></i>
                <span class="text-sm">Dashboard</span>
            </a>
        </li>
        <li class="mb-1 group">
            <a href="#" class="flex items-center gap-3 py-2 px-4 text-gray-300 hover:bg-indigo-900 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-indigo-900 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                <i class="ri-article-line"></i>
                <span class="text-sm">Articles</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Ajouter article</a>
                </li> 
                <li class="mb-4">
                    <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Liste des articles</a>
                </li> 
                
            </ul>
        </li>
        <li class="mb-1 group">
            <a href="#" class="flex items-center gap-3 py-2 px-4 text-gray-300 hover:bg-indigo-900 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-indigo-900 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                <i class="ri-box-1-line"></i>
                <span class="text-sm">catégories</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="{{route('category.create')}}" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Ajouter catégorie</a>
                </li> 
                <li class="mb-4">
                    <a href="{{ route('category.index') }}" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Liste des catégories</a>
                </li> 
                
            </ul>
        </li>
        <li class="mb-1 group">
            <a href="#" class="flex items-center gap-3 py-2 px-4 text-gray-300 hover:bg-indigo-900 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-indigo-900 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                <i class="ri-user-3-fill"></i>
                <span class="text-sm">Auteurs</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Ajouter auteurs</a>
                </li> 
                <li class="mb-4">
                    <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Liste des auteurs</a>
                </li> 
                
            </ul>
        </li>
        <li class="mb-1 group">
            <a href="#" class="flex items-center gap-3 py-2 px-4 text-gray-300 hover:bg-indigo-900 hover:text-gray-100 rounded-md group-[.active]:bg-indigo-900 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="ri-message-2-line"></i>
                <span class="text-sm">Commentaires</span>
            </a>
        </li>
        <li class="mb-1 group">
            <a href="#" class="flex items-center gap-3 py-2 px-4 text-gray-300 hover:bg-indigo-900 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-indigo-900 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                <i class="ri-tape-fill"></i>
                <span class="text-sm">Médias sociaux</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Ajouter media</a>
                </li> 
                <li class="mb-4">
                    <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Liste des médias</a>
                </li> 
                
            </ul>
        </li>
        <li class="mb-1 group">
            <a href="#" class="flex items-center gap-3 py-2 px-4 text-gray-300 hover:bg-indigo-900 hover:text-gray-100 rounded-md group-[.active]:bg-indigo-900 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="ri-contacts-book-2-line"></i>
                <span class="text-sm">Contacts</span>
            </a>
        </li>
        <li class="mb-1 group">
            <a href="#" class="flex items-center py-2 px-4 text-gray-300 hover:bg-indigo-900 hover:text-gray-100 rounded-md group-[.active]:bg-indigo-900 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="ri-settings-2-line mr-3 text-lg"></i>
                <span class="text-sm">Settings</span>
            </a>
        </li>
        <li class="mb-1 group">
            <a href="#" class="flex items-center gap-3 py-2 px-4 text-gray-300 hover:bg-indigo-900 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-indigo-900 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                <i class="ri-pages-line"></i>
                <span class="text-sm">Pages</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Ajouter page</a>
                </li> 
                <li class="mb-4">
                    <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Liste des pages</a>
                </li> 
                
            </ul>
        </li>
    </ul>
</div>
<div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay">

</div>