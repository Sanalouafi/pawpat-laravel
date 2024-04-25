<x-support-agent>
    <div class="container px-6 mx-auto grid mt-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row -mx-4">
                <div class="md:flex-1 px-4">
                    <div class="h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                        <img class="w-full h-full object-cover" src="{{ $pet->getFirstMediaUrl('pet') }}"
                            alt="Product Image">
                    </div>

                </div>
                <div class="md:flex-1 px-4">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">{{ $pet->name }}</h2>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                        {{ $pet->type->type_name }}
                    </p>
                    <div class="flex mb-4">
                        <div class="mr-4">
                            <span class="font-bold text-gray-700 dark:text-gray-300">Weight:</span>
                            <span class="text-gray-600 dark:text-gray-300">{{ $pet->weight }}</span>
                        </div>
                        <div>
                            <span class="font-bold text-gray-700 dark:text-gray-300">Size:</span>
                            <span class="text-gray-600 dark:text-gray-300">{{ $pet->size }}</span>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <div class="mr-4">
                            <span class="font-bold text-gray-700 dark:text-gray-300">Birth date:</span>
                            <span class="text-gray-600 dark:text-gray-300">{{ $pet->birth_date->format('Y-m-d') }}</span>
                        </div>
                        <div>
                            <span class="font-bold text-gray-700 dark:text-gray-300">rescued date:</span>
                            <span class="text-gray-600 dark:text-gray-300">{{ $pet->rescued_date->format('Y-m-d') }}</span>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <div class="mr-4">
                            <span class="font-bold text-gray-700 dark:text-gray-300 mr-2">vaccination status:</span>
                            @if ($pet->vaccination_status=== true)
                            <span class="text-green-600 bold dark:text-green-300 ">Yes</span>

                            @else
                            <span class="text-red-600 dark:text-red-300">No</span>

                            @endif
                        </div>
                        <div class="mr-4">
                            <span class="font-bold text-gray-700 dark:text-gray-300 mr-2">Adoption status:</span>
                            @if ($pet->adoption_status=== true)
                            <span class="text-green-600 bold dark:text-green-300">Yes</span>

                            @else
                            <span class="text-red-600 dark:text-red-300">No</span>

                            @endif
                        </div>

                    </div>
                    <div class="mb-4">
                        <span class="font-bold text-gray-700 dark:text-gray-300">pet Color:</span>
                        <span class="text-gray-600 dark:text-gray-300">{{ $pet->color }}</span>
                    </div>

                    <div>
                        <span class="font-bold text-gray-700 dark:text-gray-300"> Description:</span>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">
                            {{$pet->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-support-agent>
