<ul class="flex items-center">
    <li class="py-2 px-3 border border-collapse border-gray-200"><a class="{{($current_page == 1) ? 'text-gray-300 pointer-events-none' : 'text-blue-500 '}}" href="{{route('table.paginate', ['page_num' => $current_page - 1, 'page_size' => $page_size])}}">Previous</a></li>
    @for ($i = 1; $i <= $index_num; $i++)
        <li class="{{($current_page == $i) ? 'bg-blue-500 text-white' : 'text-blue-500 '}} py-2 px-3 border border-collapse border-gray-200"><a href="{{route('table.paginate', ['page_num' => $i, 'page_size' => $page_size])}}">{{$i}}</a></li>
    @endfor
    <li class="py-2 px-3 border border-collapse border-gray-200"><a class="{{($current_page == $index_num) ? 'text-gray-300 pointer-events-none' : 'text-blue-500 '}}" href="{{route('table.paginate', ['page_num' => $current_page + 1, 'page_size' => $page_size])}}">Next</a></li>
</ul>
