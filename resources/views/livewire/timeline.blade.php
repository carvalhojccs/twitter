<div>
    @foreach ($tweets as $tweet)
        <div class="flex p-4  border-b border-gray-300">            
                    {{ $tweet->body }}
       
            </div>
        </div>
    @endforeach
</div>
