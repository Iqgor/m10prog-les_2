<ul class="flex">
    <li class="mr-3 px-4 px-2  rounded-sm @if(Route::currentRouteName() == 'mensen') bg-gray @else bg-blue @endif"><a href="{{route('mensen.index')}}">Mensen</a></li>
    <li class="mr-3 px-4 px-2 bg-blue rounded-sm"><a href="{{route('about.me')}}">About</a></li>
    <li class="mr-3 px-4 px-2 bg-blue rounded-sm">Test</li>
    <li class="mr-3 px-4 px-2 bg-blue rounded-sm">Test</li>
</ul>