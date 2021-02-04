<div>
    <label class="block text-sm font-medium text-gray-700">
        {{$heading}}
    </label>
    <div class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
        <div class="space-y-1 text-center">
            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                aria-hidden="true">
                <path
                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <div class="flex text-sm text-gray-600 justify-center">
                <label for="{{$name}}" class="bg-indigo-500 px-5 text-center text-white py-2 rounded-lg">
                    <span>Upload a file</span>
                    <input id="{{$name}}" name="{{$name}}" type="file" class="sr-only" accept="{{$accept}}">
                </label>
                <!-- <p class="pl-1">or drag and drop</p> -->
            </div>
            <p class="text-xs text-gray-500">
                {{$filetypes}}
            </p>
        </div>
    </div>
</div>