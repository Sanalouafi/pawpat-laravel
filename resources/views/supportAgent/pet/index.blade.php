<x-support-agent>
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Pet Section
        </h2>
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Modal toggle -->

            <button data-modal-target="add-pet" data-modal-toggle="add-pet" type="button"
                class="w-48 px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-blue-900 border border-transparent rounded-lg active:bg-blue-900 hover:bg-blue-800 focus:outline-none focus:shadow-outline-blue">
                Add new
            </button>

            <!-- Main modal -->
            <div id="add-pet" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 max-h-full" style="width: 50%;">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Add new Pet
                            </h3>
                            <button type="button"
                                class="en\d-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="add-pet">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5">
                            <form class="space-y-4" action="{{ route('supportAgentPet.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div
                                    class="text-gray-900 font-medium text-xs text-center flex flex-col items-center justify-center">
                                    <label for="image-input" class="cursor-pointer">
                                        <img id="preview-image"
                                            class="w-40 h-40 object-cover shadow-xl border-2 border-gray-400 rounded-full"
                                            src="{{ URL::asset('img/pets.jpg') }}" alt="logo"
                                            style="width: 150px; height:150px ;">
                                    </label>
                                    <input type="file" id="image-input" name="image" class="hidden"
                                        onchange="previewImage(event)">
                                </div>
                                <div class="flex">
                                    <div class="form__input w-1/2 mr-2">
                                        <label for="name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                        <input type="text" name="name" id="name"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="alex" required />
                                    </div>
                                    <div class="form__input w-1/2">
                                        <label for="breed"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Breed</label>
                                        <input type="text" name="breed" id="breed"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="German Shepherd" required />
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="form__input w-1/2 mr-2">
                                        <label for="Birth date"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Birth date</label>
                                        <input type="date" name="birth_date" id="Birth date"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="" required />
                                    </div>
                                    <div class="form__input w-1/2">
                                        <label for="rescued date"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Rescued date</label>
                                        <input type="date" name="rescued_date" id="rescued date"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="" required />
                                    </div>
                                </div>



                                <div>
                                    <fieldset class="chkgroup  " role="radiogroup" aria-labelledby="gender">
                                        <label
                                            id="gender"class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Gender</label>
                                        <div class="flex justify-center mt-2">
                                            <div class="space-x-16">
                                                <input type="radio" id="male" value="Male" name="gender">
                                                <label class="label__gender" for="male">Male</label>
                                            </div>
                                            <div class="space-x-16">
                                                <input type="radio" value="Female" id="female" name="gender">
                                                <label class="label__gender" for="female">Female</label>
                                            </div>
                                        </div>


                                    </fieldset>
                                </div>
                                <div class="form__input">
                                    <label for="color"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        color</label>
                                    <input type="text" name="color" id="color"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="black" required />
                                </div>

                                <div class="flex">
                                    <div class="form__input w-1/2 mr-2">
                                        <label for="weight"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            weight</label>
                                        <input type="number" name="weight" id="weight"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            required />
                                    </div>
                                    <div class="form__input w-1/2">
                                        <label for="size"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            size</label>
                                        <input type="number" name="size" id="size"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            required />
                                    </div>
                                </div>

                                <div class="form__input">
                                    <label for="description"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Description</label>
                                    <textarea
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        name="description" id="description" cols="30" rows="5"></textarea>
                                </div>
                                <div class="form__input">
                                    <label for="type_id"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pet
                                        Type</label>
                                    <select name="type_id" id="type_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        required>
                                        <option value="" disabled selected>Pet Type</option>
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->type_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="flex justify-between mx-2">
                                    <div class="flex ">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mr-6">Adoption
                                            status</label>
                                        <div class="checkbox-adoption">
                                            <input class="tgl tgl-ios" id="adoption" name="adoption_status"
                                                type="checkbox" onchange="adoptionStatus()" />
                                            <label class="tgl-btn" for="adoption"></label>
                                        </div>
                                        <input type="hidden" id="adoptionValue" name="adoption_status"
                                            value="0">
                                    </div>
                                    <div class="flex ">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mr-6">Vaccination
                                            status</label>
                                        <div class="checkbox-adoption">
                                            <input class="tgl tgl-ios" id="vaccination" name="vaccination_status"
                                                type="checkbox" onchange="vaccinationStatus()" />
                                            <label class="tgl-btn" for="vaccination"></label>
                                        </div>
                                        <input type="hidden" id="vaccinationValue" name="vaccination_status"
                                            value="0">
                                    </div>
                                </div>


                                <button type="submit"
                                    class="w-full text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    style="">
                                    save
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- New Table -->
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Pet</th>
                            <th class="px-4 py-3">Birth date</th>
                            <th class="px-4 py-3">Rescued date</th>
                            <th class="px-4 py-3">Vaccination status</th>
                            <th class="px-4 py-3">Adoption Status</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($pets as $pet)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full"
                                                src="{{ $pet->getFirstMediaUrl('pet') }}" alt=""
                                                loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner"
                                                aria-hidden="true"></div>
                                        </div>
                                        <div>
                                            <p class="font-semibold">{{ $pet->name }}</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">
                                                {{ $pet->type->type_name }}
                                            </p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">{{ $pet->gender }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $pet->birth_date->format('Y-m-d') }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $pet->rescued_date->format('Y-m-d') }}
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    @if ($pet->vaccination_status === true)
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            yes
                                        </span>
                                    @else
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                            no
                                        </span>
                                    @endif

                                </td>
                                <td class="px-4 py-3 text-xs">
                                    @if ($pet->adoption_status === true)
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            yes
                                        </span>
                                    @else
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                            no
                                        </span>
                                    @endif

                                </td>
                                <td class="px-4 py-3 text-sm flex ">
                                    <!-- Modal toggle -->
                                    <div class="flex items-center">
                                        {{-- show --}}
                                        <a href="{{ route('supportAgentPet.show', $pet->id) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 mr-8 mt-1">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>

                                        </a>
                                        {{-- edit --}}
                                        <a data-modal-target="edit-pet{{ $pet->id }}"
                                            data-modal-toggle="edit-pet{{ $pet->id }}" class="mr-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 mr-2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                            </svg>
                                        </a>
                                        {{-- delete --}}
                                        <form action="{{ route('supportAgentPet.destroy', $pet->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6 mt-2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                                </svg>
                                            </button>
                                        </form>

                                    </div>
                                </td>


                            </tr>

                            <!-- Main edit modal -->
                            <div id="edit-pet{{$pet->id}}" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 max-h-full" style="width: 50%;">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Edit Pet informations
                                            </h3>
                                            <button type="button"
                                                class="en\d-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="edit-pet{{$pet->id}}">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5">
                                            <form class="space-y-4" action="{{ route('supportAgentPet.store') }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div
                                                    class="text-gray-900 font-medium text-xs text-center flex flex-col items-center justify-center">
                                                    <label for="image-input" class="cursor-pointer">
                                                        <img id="preview-image"
                                                            class="w-40 h-40 object-cover shadow-xl border-2 border-gray-400 rounded-full"
                                                            src="{{ URL::asset('img/pets.jpg') }}" alt="logo"
                                                            style="width: 150px; height:150px ;">
                                                    </label>
                                                    <input type="file" id="image-input" name="image"
                                                        class="hidden" onchange="previewImage(event)">
                                                </div>
                                                <div class="flex">
                                                    <div class="form__input w-1/2 mr-2">
                                                        <label for="name"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                                        <input type="text" name="name" id="name"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            placeholder="alex" required />
                                                    </div>
                                                    <div class="form__input w-1/2">
                                                        <label for="breed"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Breed</label>
                                                        <input type="text" name="breed" id="breed"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            placeholder="German Shepherd" required />
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div class="form__input w-1/2 mr-2">
                                                        <label for="Birth date"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Birth date</label>
                                                        <input type="date" name="birth_date" id="Birth date"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            placeholder="" required />
                                                    </div>
                                                    <div class="form__input w-1/2">
                                                        <label for="rescued date"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Rescued date</label>
                                                        <input type="date" name="rescued_date" id="rescued date"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            placeholder="" required />
                                                    </div>
                                                </div>



                                                <div>
                                                    <fieldset class="chkgroup  " role="radiogroup"
                                                        aria-labelledby="gender">
                                                        <label
                                                            id="gender"class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Gender</label>
                                                        <div class="flex justify-center mt-2">
                                                            <div class="space-x-16">
                                                                <input type="radio" id="male" value="Male"
                                                                    name="gender">
                                                                <label class="label__gender"
                                                                    for="male">Male</label>
                                                            </div>
                                                            <div class="space-x-16">
                                                                <input type="radio" value="Female" id="female"
                                                                    name="gender">
                                                                <label class="label__gender"
                                                                    for="female">Female</label>
                                                            </div>
                                                        </div>


                                                    </fieldset>
                                                </div>
                                                <div class="form__input">
                                                    <label for="color"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                        color</label>
                                                    <input type="text" name="color" id="color"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        placeholder="black" required />
                                                </div>

                                                <div class="flex">
                                                    <div class="form__input w-1/2 mr-2">
                                                        <label for="weight"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            weight</label>
                                                        <input type="number" name="weight" id="weight"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            required />
                                                    </div>
                                                    <div class="form__input w-1/2">
                                                        <label for="size"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            size</label>
                                                        <input type="number" name="size" id="size"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            required />
                                                    </div>
                                                </div>

                                                <div class="form__input">
                                                    <label for="description"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                        Description</label>
                                                    <textarea
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        name="description" id="description" cols="30" rows="5"></textarea>
                                                </div>
                                                <div class="form__input">
                                                    <label for="type_id"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pet
                                                        Type</label>
                                                    <select name="type_id" id="type_id"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        required>
                                                        <option value="" disabled selected>Pet Type</option>
                                                        @foreach ($types as $type)
                                                            <option value="{{ $type->id }}">
                                                                {{ $type->type_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="flex justify-between mx-2">
                                                    <div class="flex ">
                                                        <label
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mr-6">Adoption
                                                            status</label>
                                                        <div class="checkbox-adoption">
                                                            <input class="tgl tgl-ios" id="adoption"
                                                                name="adoption_status" type="checkbox"
                                                                onchange="adoptionStatus()" />
                                                            <label class="tgl-btn" for="adoption"></label>
                                                        </div>
                                                        <input type="hidden" id="adoptionValue"
                                                            name="adoption_status" value="0">
                                                    </div>
                                                    <div class="flex ">
                                                        <label
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mr-6">Vaccination
                                                            status</label>
                                                        <div class="checkbox-adoption">
                                                            <input class="tgl tgl-ios" id="vaccination"
                                                                name="vaccination_status" type="checkbox"
                                                                onchange="vaccinationStatus()" />
                                                            <label class="tgl-btn" for="vaccination"></label>
                                                        </div>
                                                        <input type="hidden" id="vaccinationValue"
                                                            name="vaccination_status" value="0">
                                                    </div>
                                                </div>


                                                <button type="submit"
                                                    class="w-full text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                    style="">
                                                    save
                                                </button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </tbody>
                </table>
            </div>

        </div>
        <script>
            function adoptionStatus() {
                var checkbox = document.getElementById('adoption');
                var hiddenInput = document.getElementById('adoptionValue');
                hiddenInput.value = checkbox.checked ? '1' : '0';
            }

            function vaccinationStatus() {
                var checkbox = document.getElementById('vaccination');
                var hiddenInput = document.getElementById('vaccinationValue');
                hiddenInput.value = checkbox.checked ? '1' : '0';
            }
        </script>
    </div>
</x-support-agent>
