<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <label for="current_password">Nom</label>
            <input
                class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-indigo-500 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-1"
                name="current_password" type="password" placeholder="CurrentPassword"  id="current_password"/>      
        </div>

        <div>
            <label for="update_password_password">Nom</label>
            <input
                class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-indigo-500 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-1"
                name="password" type="password" placeholder="NewPassword"  id="update_password_password"/> 
        </div>

        <div>
            <label for="update_password_password_confirmation">Nom</label>
            <input
                class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-indigo-500 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-1"
                name="password_confirmation" type="password" placeholder="ConfirmNewPassword"  id="update_password_password_confirmation"/>
            
        </div>

        <button
           class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                   
          <span class="ml-3">
              Update Password
          </span>
        </button>
    </form>
</section>
