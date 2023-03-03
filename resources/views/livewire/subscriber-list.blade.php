<div>

    @if(session('message'))
        <p class="p-4 bg-green-300 border border-gray-300">{{session('message')}}</p>
    @endif


    <ul class="mt-4 list-disc list-inside bg-gray-100 rounded-lg p-4">
        @foreach($subs as $sub)
            <li class="text-gray-800 my-2">hallo {{ $sub->name }} - <i>({{$sub->email}})</i></li>
        @endforeach
    </ul>

    <button wire:click="deleteAllSubscribers" class="p-4 bg-red-400">CLICK ME!</button>

</div>
