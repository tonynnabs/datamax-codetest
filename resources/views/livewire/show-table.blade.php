<div>
    <div class="justify-end items-center mt-5">
        <div class="flex justify-end items-center">
            <h3 class="mr-3">Search</h3>
            <div>
                <input wire:model.debounce.300ms="search" type="text" class="border border-gray-300 text-sm rounded" >
            </div>
        </div>

    </div>
    <div class="flex justify-center items-center mt-10 w-full">
        <table class="table-auto border-collapse border border-gray-300 w-full">
            <thead>
                <tr>
                    <x-table-header title="Name"/>
                    <x-table-header title="ISBN"/>
                    <x-table-header title="Authors"/>
                    <x-table-header title="Pages"/>
                    <x-table-header title="Country"/>
                    <x-table-header title="Released"/>
                </tr>
            </thead>
            <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <x-table-data>{{$book['name']}}</x-table-data>
                            <x-table-data>{{$book['isbn']}}</x-table-data>
                            <x-table-data>{{collect($book['authors'])->implode(', ')}}</x-table-data>
                            <x-table-data>{{$book['numberOfPages']}}</x-table-data>
                            <x-table-data>{{$book['country']}}</x-table-data>
                            <x-table-data>{{Carbon\Carbon::parse($book['released'])->diffForHumans()}}</x-table-data>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

</div>
