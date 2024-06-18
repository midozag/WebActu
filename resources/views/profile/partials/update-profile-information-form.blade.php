<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Informations de profil
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Modifier votre nom et adresse mail
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        
            <div class="mt-4">
                <div class="">
                <label for="name">Nom</label>
                <input
                class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-indigo-500 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-1"
                type="name" name="name" placeholder="Name" value="{{ old('name',$user->name) }}" id="name"/>        
                </div>
                <div class="mt-3">
                <label for="email">Email</label>    
                <input
                class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-indigo-500 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-1"
                type="email" name="email" id="email" placeholder="Email" value="{{ old('email',$user->email) }}" />
                </div>
                <div class="mt-3">
                <label for="image">image</label><br>
                <input type="file" name="image" id="image" class="mt-1">
                </div>
                <button
                   class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                   
                   <span class="ml-3">
                       Submit
                   </span>
                </button>
            </div>
            
            

    </form>
    
</section>
