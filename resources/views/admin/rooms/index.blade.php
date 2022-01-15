<x-layouts.app>

    <x-slot name="title">
        Rooms
    </x-slot>



    <x-slot name="slot">
        
        
            <div class="d-grid gap-2 col-6 mx-auto">
           @foreach ($rooms as $room) 
            
              

                    <a href="{{ route('rooms.show', ['room' => $room]) }} " type="button" class="btn btn-primary">Room {{$room->id}}</a>
                   
            
                
            @endforeach
           </div>
        


    </x-slot>

</x-layouts.app>
