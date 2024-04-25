<x-admin>
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Support Agent
        </h2>
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Modal toggle -->

            <button data-modal-target="add-support-agent" data-modal-toggle="add-support-agent" type="button"
                class="w-48 px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-blue-900 border border-transparent rounded-lg active:bg-blue-900 hover:bg-blue-800 focus:outline-none focus:shadow-outline-blue">
                Add new
            </button>

            <!-- Main modal -->
            <div id="add-support-agent" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Add new Support Agent
                            </h3>
                            <button type="button"
                                class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="add-support-agent">
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
                            <form class="space-y-4" action="{{ route('adminSupport.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div
                                    class="text-gray-900 font-medium text-xs text-center flex flex-col items-center justify-center">
                                    <label for="image-input" class="cursor-pointer">
                                        <img id="preview-image"
                                            class="w-40 h-40 object-cover shadow-xl border-2 border-gray-400 rounded-full"
                                            src="{{ URL::asset('img/support_agent.png') }}" alt="logo"
                                            style="width: 150px; height:150px ;">
                                    </label>
                                    <input type="file" id="image-input" name="profile" class="hidden"
                                        onchange="previewImage(event)">
                                </div>
                                <div class="form__input">
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Name</label>
                                    <input type="text" name="name" id="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="name@company.com" required />
                                </div>

                                <div class="form__input">
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Email</label>
                                    <input type="email" name="email" id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="name@company.com" required />
                                </div>
                                <div class="form__input">
                                    <label for="password"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Password</label>
                                    <input type="password" name="password" id="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="********" required />
                                </div>
                                <div class="form__input">
                                    <label for="phone"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Phone</label>
                                    <input type="text" name="phone" id="phone"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="0606060606" required />
                                </div>
                                <div class="flex justify-between">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mr-2">Availability</label>
                                    <div class="checkbox-availability">
                                        <input class="tgl tgl-ios" id="availability" name="availability" type="checkbox"
                                            onchange="updateAvailability()" />
                                        <label class="tgl-btn" for="availability"></label>
                                    </div>
                                    <input type="hidden" id="availabilityValue" name="availability" value="0">
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
                            <th class="px-4 py-3">Support Agent</th>
                            <th class="px-4 py-3">Phone</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($supportAgents as $supportAgent)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full"
                                                src="{{ $supportAgent->getFirstMediaUrl('supportAgent') }}"
                                                alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner"
                                                aria-hidden="true"></div>
                                        </div>
                                        <div>
                                            <p class="font-semibold">{{ $supportAgent->user->name }}</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">
                                                {{ $supportAgent->user->email }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $supportAgent->user->phone }}
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    @if ($supportAgent->availability === 1)
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            Approved
                                        </span>
                                    @else
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                            Denied
                                        </span>
                                    @endif

                                </td>
                                <td class="px-4 py-3 text-sm flex items-center">
                                    <!-- Modal toggle -->
                                    <div class="flex items-center">
                                        <a data-modal-target="edit-support-agent{{ $supportAgent->id }}"
                                            data-modal-toggle="edit-support-agent{{ $supportAgent->id }}" class="mr-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-6 h-6 mr-2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('adminSupport.destroy', $supportAgent->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="w-6 h-6 mt-2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>


                            </tr>
                            <!-- Main edit modal -->
                            <div id="edit-support-agent{{ $supportAgent->id }}" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                edit the Support Agent
                                            </h3>
                                            <button type="button"
                                                class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="edit-support-agent{{ $supportAgent->id }}">
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
                                            <form class="space-y-4"
                                                action="{{ route('adminSupport.update', $supportAgent->id) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div
                                                    class="text-gray-900 font-medium text-xs text-center flex flex-col items-center justify-center">
                                                    <label for="edit-image-input{{ $supportAgent->id }}"
                                                        class="cursor-pointer">
                                                        <img id="preview-edit-image{{ $supportAgent->id }}"
                                                            class="w-40 h-40 object-cover shadow-xl border-2 border-gray-400 rounded-full"
                                                            src="{{ $supportAgent->getFirstMediaUrl('supportAgent') }}"
                                                            alt="logo" style="width: 150px; height:150px ;">
                                                    </label>
                                                    <input type="file"
                                                        id="edit-image-input{{ $supportAgent->id }}" name="profile"
                                                        class="hidden"
                                                        onchange="previewEditImage(event, {{ $supportAgent->id }})">
                                                </div>

                                                <div class="form__input mb-4">
                                                    <label for="name"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                        Name</label>
                                                    <input type="text" name="name" id="name"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        placeholder="name@company.com"
                                                        value="{{ $supportAgent->user->name }}" />
                                                </div>

                                                <div class="form__input mb-4">
                                                    <label for="email"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                        Email</label>
                                                    <input type="email" name="email" id="email"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        placeholder="name@company.com"
                                                        value="{{ $supportAgent->user->email }}" />
                                                </div>

                                                <div class="form__input mb-4">
                                                    <label for="phone"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                        Phone</label>
                                                    <input type="text" name="phone" id="phone"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        placeholder="0606060606"
                                                        value="{{ $supportAgent->user->phone }}" />
                                                </div>
                                                <div class="flex justify-between mb-4">
                                                    <label
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mr-2">Availability</label>
                                                    <div class="checkbox-availability">
                                                        <input class="tgl tgl-ios"
                                                            id="editAvailability-{{ $supportAgent->id }}"
                                                            type="checkbox"
                                                            onchange="editAvailability({{ $supportAgent->id }})"
                                                            {{ $supportAgent->availability ? 'checked' : '' }}>
                                                        <label class="tgl-btn"
                                                            for="editAvailability-{{ $supportAgent->id }}"></label>
                                                    </div>
                                                    <input type="hidden"
                                                        id="editAvailabilityValue-{{ $supportAgent->id }}"
                                                        name="availability"
                                                        value="{{ $supportAgent->availability ? '1' : '0' }}">
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

    </div>
    <script>
        function updateAvailability() {
            var checkbox = document.getElementById('availability');
            var hiddenInput = document.getElementById('availabilityValue');
            hiddenInput.value = checkbox.checked ? '1' : '0';
        }

        function editAvailability(supportAgentId) {
            var checkbox = document.getElementById(`editAvailability-${supportAgentId}`);
            var hiddenInput = document.getElementById(`editAvailabilityValue-${supportAgentId}`);
            hiddenInput.value = checkbox.checked ? '1' : '0';
        }
    </script>
</x-admin>
