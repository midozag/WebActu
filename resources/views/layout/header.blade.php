<div class="py-2 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
    <button type="button" class="text-lg text-gray-600 sidebar-toggle">
        <i class="ri-menu-line"></i>
    </button>
    
    <ul class="ml-auto flex items-center">
        <li class="mr-1 dropdown">
            <button type="button" class="dropdown-toggle text-gray-400 w-8 h-8 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                <i class="ri-search-line"></i>
            </button>
            <div class="dropdown-menu shadow-md shadow-black/5 z-30 hidden max-w-xs w-full bg-white rounded-md border border-gray-100">
                <form action="" class="p-4 border-b border-b-gray-100">
                    <div class="relative w-full">
                        <input type="text" class="py-2 pr-4 pl-10 bg-gray-50 w-full outline-none border border-gray-100 rounded-md text-sm focus:border-blue-500" placeholder="Search...">
                        <i class="ri-search-line absolute top-1/2 left-4 -translate-y-1/2 text-gray-400"></i>
                    </div>
                </form>
                <div class="mt-3 mb-2">
                    <div class="text-[13px] font-medium text-gray-400 ml-4 mb-2">Recently</div>
                    <ul class="max-h-64 overflow-y-auto">
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Create landing page</div>
                                    <div class="text-[11px] text-gray-400">$345</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Create landing page</div>
                                    <div class="text-[11px] text-gray-400">$345</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Create landing page</div>
                                    <div class="text-[11px] text-gray-400">$345</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Create landing page</div>
                                    <div class="text-[11px] text-gray-400">$345</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Create landing page</div>
                                    <div class="text-[11px] text-gray-400">$345</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Create landing page</div>
                                    <div class="text-[11px] text-gray-400">$345</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Create landing page</div>
                                    <div class="text-[11px] text-gray-400">$345</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Create landing page</div>
                                    <div class="text-[11px] text-gray-400">$345</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        
            
      <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
           @if (Auth::user()->image AND  file_exists(public_path("assets/profile/".Auth::user()->image)))
              <img src="{{  asset('assets/profile/'.Auth::user()->image )}}" alt="" class="w-10 h-10 rounded object-cover">
           @else
              <img src="{{  asset('assets/img/logo.png' )}}" alt="" class="w-10 h-10 rounded object-cover"> 
           @endif    
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="black" class="w-6 h-4 font-bold">
                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
           </svg>
      </button>

      <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
         <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
           <li>
             <a href="{{ route('profile.edit') }}" class="block text-center py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
           </li>
  
          <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
            <button class="w-full  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</button>
            </form>
          </li>
         </ul>
      </div>

        
</div>