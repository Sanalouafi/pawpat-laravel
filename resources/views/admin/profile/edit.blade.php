<x-admin>
    <div
        class="max-w-2xl mx-4 sm:max-w-sm md:max-w-sm lg:max-w-sm xl:max-w-sm sm:mx-auto md:mx-auto lg:mx-auto xl:mx-auto mt-16 bg-white shadow-xl rounded-lg text-gray-900">
        <div class="rounded-t-lg h-32 overflow-hidden">
            <img class="object-cover object-top w-full" src="{{ URL::asset('img/loginBg.jpg') }}" alt='Mountain'>
        </div>
        <div class="mx-auto w-32 h-32 relative -mt-16 border-4 border-white rounded-full overflow-hidden">
            <img class="object-cover object-center h-32" src='{{ $user->getFirstMediaUrl('user') }}'
                alt='Woman looking front'>
        </div>
        <div class="text-center mt-2">
            <h2 class="font-semibold">{{ $user->name }}</h2>
            <p class="text-gray-500">{{ $user->email }}</p>
            <p class="text-gray-500">{{ $user->phone }}</p>
        </div>
        <div class="p-4 border-t mx-8 mt-2">
            <button
                class="w-1/2 block mx-auto rounded-full bg-blue-900 hover:shadow-lg font-semibold text-white px-6 py-2"
                onclick="showProfileEdit()">Update</button>
        </div>
    </div>
    <div class="max-w-2xl mx-4 my-6 sm:max-w-sm md:max-w-sm lg:max-w-sm xl:max-w-sm sm:mx-auto md:mx-auto lg:mx-auto xl:mx-auto mt-16 bg-white shadow-xl rounded-lg text-gray-900"
        id="profile-edit" style="display: none;">
        <form class="space-y-4" action="{{ route('admin.update', $user->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="text-gray-900 font-medium text-xs text-center flex flex-col items-center justify-center">
                <label for="image-input" class="cursor-pointer">
                    <img id="preview-image"
                        class="w-40 h-40 object-cover shadow-xl border-2 border-gray-400 rounded-full"
                        src="{{ $user->getFirstMediaUrl('user') }}" alt="logo" style="width: 150px; height:150px ;">
                </label>
                <input type="file" id="image-input" name="profile" class="hidden" onchange="previewImage(event)">
            </div>

            <div class="form__input mb-4">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Name</label>
                <input type="text" name="name" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="name@company.com" value="{{ $user->name }}" />
            </div>

            <div class="form__input mb-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Email</label>
                <input type="email" name="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="name@company.com" value="{{ $user->email }}" />
            </div>
            <div class="form__input mb-4">
                <label for="current_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Current password</label>
                <input type="password" name="current_password" id="current_password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="********" />
            </div>
            <div class="form__input mb-4">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                     password</label>
                <input type="password" name="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="********" />
            </div>
            <div class="form__input mb-4">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Phone</label>
                <input type="text" name="phone" id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="0606060606" value="{{ $user->phone }}" />
            </div>
            <button type="submit"
                class="w-full text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                style="">
                save
            </button>

        </form>

    </div>
    <script>
        function showProfileEdit() {
            var profileEdit = document.getElementById('profile-edit');
            if (profileEdit.style.display === 'none') {
                profileEdit.style.display = 'block';
            } else {
                profileEdit.style.display = 'none';
            }
        }
    </script>
</x-admin>
