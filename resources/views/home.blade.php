<x-guest-layout>
    <div class="m-10">
        <livewire:show-table :books="$books" :pageSize="$page_size">
        <div class="flex justify-between items-center mt-5">
            <p>Showing {{$current_page}} to {{$index_num}} of {{$books->count()}} entries</p>
            <div>
                @include('includes.pagination')
            </div>
        </div>
    </div>

</x-guest-layout>
