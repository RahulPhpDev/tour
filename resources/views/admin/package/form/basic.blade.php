<div class="block w-full overflow-x-auto">
        <form enctype="multipart/form-data" class="mt-2 lg:w-2/3 space-y-6" method = "post" action="{{route('admin.package.store')}}">
            @csrf
            <div>
                <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Title</label>
                <input type="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Destination Title">
            </div>
            <div>
                <label for="description" class="text-sm font-medium text-gray-900 block mb-2"> Description</label>
                <textarea name="description" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" required></textarea>
            </div>
            <div>
                <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Price</label>
                <input type="text" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Price">
            </div>

            <div>
                <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Upload Image</label>
                <input type="file" name="image" >
            </div>

            <button type="submit" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center">Save</button>

        </form>
    </div>