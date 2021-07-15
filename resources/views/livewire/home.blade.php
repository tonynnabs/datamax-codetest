<div class="p-10">
    <div class="justify-end items-center mt-5">
        <div class="flex justify-end items-center">
            <h3 class="mr-3">Search</h3>
            <div>
                <input type="text" class="border border-gray-300 text-sm rounded" >

            </div>
        </div>
    </div>
    <div class="flex justify-center items-center mt-10 w-full">
        <table class="table-auto border-collapse border border-gray-300 w-full">
            <thead>
                <tr>
                    <th scope="col" class="font-bold px-6 py-3 text-left text-xs text-gray-500 uppercase tracking-wider border-collapse border-2 border-gray-300">Name</th>
                    <th scope="col" class="font-bold px-6 py-3 text-left text-xs text-gray-500 uppercase tracking-wider border-collapse border-2 border-gray-300">ISBN</th>
                    <th scope="col" class="font-bold px-6 py-3 text-left text-xs text-gray-500 uppercase tracking-wider border-collapse border-2 border-gray-300">Authors</th>
                    <th scope="col" class="font-bold px-6 py-3 text-left text-xs text-gray-500 uppercase tracking-wider border-collapse border-2 border-gray-300">Pages</th>
                    <th scope="col" class="font-bold px-6 py-3 text-left text-xs text-gray-500 uppercase tracking-wider border-collapse border-2 border-gray-300">Country</th>
                    <th scope="col" class="font-bold px-6 py-3 text-left text-xs text-gray-500 uppercase tracking-wider border-collapse border-2 border-gray-300">Released</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($books as $book)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap border-collapse border-2 border-gray-300">{{$book['name']}}</td>
                        <td class="px-6 py-4 whitespace-nowrap border-collapse border-2 border-gray-300">{{$book['isbn']}}</td>
                        <td class="px-6 py-4 whitespace-nowrap border-collapse border-2 border-gray-300">{{collect($book['authors'])->implode(', ')}}</td>
                        <td class="px-6 py-4 whitespace-nowrap border-collapse border-2 border-gray-300">{{$book['numberOfPages']}}</td>
                        <td class="px-6 py-4 whitespace-nowrap border-collapse border-2 border-gray-300">{{$book['country']}}</td>
                        <td class="px-6 py-4 whitespace-nowrap border-collapse border-2 border-gray-300">{{Carbon\Carbon::parse($book['released'])->diffForHumans()}}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <div class="flex justify-between items-center mt-5">
        <p>Showing 1 to 10 of 57 entries</p>
        <div>
            <ul class="flex items-center">
                <li class="py-2 px-3 border border-collapse border-gray-200">Previous</li>
                <li class="text-blue-500 py-2 px-3 border border-collapse border-gray-200"><a wire:click="changePage(1)" href="/?page=1$pageSize=6">1</a></li>
                <li class="text-blue-500 py-2 px-3 border border-collapse border-gray-200">2</li>
                <li class="text-blue-500 py-2 px-3 border border-collapse border-gray-200">3</li>
                <li class="text-blue-500 py-2 px-3 border border-collapse border-gray-200">4</li>
                <li class="text-blue-500 py-2 px-3 border border-collapse border-gray-200">Next</li>
            </ul>
        </div>
    </div>
</div>
