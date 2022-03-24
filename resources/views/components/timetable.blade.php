
    <div class="table-responsive">
{{-- users initially
404 layout

throttling 
mailtrap
--}}
        <table class="table table-bordered text-center">
            <thead>
                <tr class="bg-light-gray">
                    <th class="text-uppercase">Time
                    </th>
                    <th class="text-uppercase">Monday <br> {{\Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('d')}} </th>
                    <th class="text-uppercase">Tuesday <br>{{\Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('d')}}</th>
                    <th class="text-uppercase">Wednesday <br>{{\Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('d')}}</th>
                    <th class="text-uppercase">Thursday <br>{{\Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('d')}}</th>
                    <th class="text-uppercase">Friday <br>{{ \Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('d')}}</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td class="align-middle">09:00</td>
                    <td>
                        {{-- @foreach($room->events() as $event)
                        {{$event}}
                        @endforeach --}}

                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                         \Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 09:00:00'))->exists())
                          
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">9:00-10:00</div>    
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 10:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">9:00-10:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '9:00:00', 'slot2' => '10:00:00', 'date' => $monday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">9:00-10:00</div>
                        @endif
                    </td>
                    
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 09:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">9:00-10:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 10:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">9:00-10:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '9:00:00', 'slot2' => '10:00:00', 'date' => $tuesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">9:00-10:00</div>
                        @endif
                    </td>

                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 09:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">9:00-10:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 10:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">9:00-10:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '9:00:00', 'slot2' => '10:00:00', 'date' => $wednesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">9:00-10:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 09:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">9:00-10:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 10:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">9:00-10:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '9:00:00', 'slot2' => '10:00:00', 'date' => $thursday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">9:00-10:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 09:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">9:00-10:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 10:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">9:00-10:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '9:00:00', 'slot2' => '10:00:00', 'date' => $friday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">9:00-10:00</div>
                        @endif
                    </td>
                    
                </tr>

                <tr>
                    <td class="align-middle">10:00</td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 10:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">10:00-11:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 11:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">10:00-11:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '10:00:00', 'slot2' => '11:00:00', 'date' => $monday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">10:00-11:00</div>
                        @endif
                    </td>
                    <td class="bg-light-gray">
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 10:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">10:00-11:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 11:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">10:00-11:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '10:00:00', 'slot2' => '11:00:00', 'date' => $tuesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">10:00-11:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 10:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">10:00-11:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 11:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">10:00-11:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '10:00:00', 'slot2' => '11:00:00', 'date' => $wednesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">10:00-11:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 10:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">10:00-11:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 11:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">10:00-11:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '10:00:00', 'slot2' => '11:00:00', 'date' => $thursday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">10:00-11:00</div>
                        @endif
                    </td>
                    
                    <td class="bg-light-gray">
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 10:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">10:00-11:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 11:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">10:00-11:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '10:00:00', 'slot2' => '11:00:00', 'date' => $friday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">10:00-11:00</div>
                        @endif
                    </td>
                </tr>

                <tr>
                    <td class="align-middle">11:00</td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 11:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">11:00-12:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 12:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">11:00-12:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '11:00:00', 'slot2' => '12:00:00', 'date' => $monday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">11:00-12:00</div>
                            
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 11:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">11:00-12:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 12:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">11:00-12:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '11:00:00', 'slot2' => '12:00:00', 'date' => $tuesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">11:00-12:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 11:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">11:00-12:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 12:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">11:00-12:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '11:00:00', 'slot2' => '12:00:00', 'date' => $wednesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">11:00-12:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 11:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">11:00-12:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 12:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">11:00-12:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '11:00:00', 'slot2' => '12:00:00', 'date' => $thursday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">11:00-12:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 11:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">11:00-12:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 12:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">11:00-12:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '11:00:00', 'slot2' => '12:00:00', 'date' => $friday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">11:00-12:00</div>
                        @endif
                    </td>
                    
                </tr>

                <tr>
                    <td class="align-middle">12:00</td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 12:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">12:00-13:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 13:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">12:00-13:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '12:00:00', 'slot2' => '13:00:00', 'date' => $monday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">12:00-13:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 12:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">12:00-13:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 13:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">12:00-13:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '12:00:00', 'slot2' => '13:00:00', 'date' => $tuesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">12:00-13:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 12:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">12:00-13:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 13:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">12:00-13:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '12:00:00', 'slot2' => '13:00:00', 'date' => $wednesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">12:00-13:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 12:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">12:00-13:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 13:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">12:00-13:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '12:00:00', 'slot2' => '13:00:00', 'date' => $thursday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">12:00-13:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 12:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">12:00-13:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 13:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">12:00-13:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '12:00:00', 'slot2' => '13:00:00', 'date' => $friday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">12:00-13:00</div>
                        @endif
                    </td>
                    
                </tr>

                <tr>
                    <td class="align-middle">13:00</td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 13:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">13:00-14:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 14:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">13:00-14:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '13:00:00', 'slot2' => '14:00:00', 'date' => $monday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">13:00-14:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 13:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">13:00-14:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 14:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">13:00-14:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '13:00:00', 'slot2' => '14:00:00', 'date' => $tuesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">13:00-14:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 13:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">13:00-14:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 14:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">13:00-14:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '13:00:00', 'slot2' => '14:00:00', 'date' => $wednesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">13:00-14:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 13:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">13:00-14:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 14:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">13:00-14:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '13:00:00', 'slot2' => '14:00:00', 'date' => $thursday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">13:00-14:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 13:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">13:00-14:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 14:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">13:00-14:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '13:00:00', 'slot2' => '14:00:00', 'date' => $friday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">13:00-14:00</div>
                        @endif
                    </td>
                    
                </tr>
                <tr>
                    <td class="align-middle">14:00</td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 14:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">14:00-15:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 15:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">14:00-15:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '14:00:00', 'slot2' => '15:00:00', 'date' => $monday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">14:00-15:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 14:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">14:00-15:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 15:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">14:00-15:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '14:00:00', 'slot2' => '15:00:00', 'date' => $tuesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">14:00-15:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 14:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">14:00-15:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 15:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">14:00-15:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '14:00:00', 'slot2' => '15:00:00', 'date' => $wednesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">14:00-15:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 14:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">14:00-15:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 15:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">14:00-15:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '14:00:00', 'slot2' => '15:00:00', 'date' => $thursday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">14:00-15:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 14:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">14:00-15:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 15:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">14:00-15:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '14:00:00', 'slot2' => '15:00:00', 'date' => $friday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">14:00-15:00</div>
                        @endif
                    </td>
                    
                </tr>
                <tr>
                    <td class="align-middle">15:00</td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 15:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">15:00-16:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 16:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">15:00-16:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '15:00:00', 'slot2' => '16:00:00', 'date' => $monday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">15:00-16:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 15:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">15:00-16:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 16:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">15:00-16:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '15:00:00', 'slot2' => '16:00:00', 'date' => $tuesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">15:00-16:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 15:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">15:00-16:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 16:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">15:00-16:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '15:00:00', 'slot2' => '16:00:00', 'date' => $wednesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">15:00-16:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 15:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">15:00-16:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 16:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">15:00-16:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '15:00:00', 'slot2' => '16:00:00', 'date' => $thursday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">15:00-16:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 15:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">15:00-16:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 16:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">15:00-16:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '15:00:00', 'slot2' => '16:00:00', 'date' => $friday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">15:00-16:00</div>
                        @endif
                    </td>
                    
                </tr>
                <tr>
                    <td class="align-middle">16:00</td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 16:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">16:00-17:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 17:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">16:00-17:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '16:00:00', 'slot2' => '17:00:00', 'date' => $monday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">16:00-17:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 16:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">16:00-17:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 17:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">16:00-17:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '16:00:00', 'slot2' => '17:00:00', 'date' => $tuesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">16:00-17:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 16:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">16:00-17:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 17:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">16:00-17:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '16:00:00', 'slot2' => '17:00:00', 'date' => $wednesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">16:00-17:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 16:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">16:00-17:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 17:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">16:00-17:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '16:00:00', 'slot2' => '17:00:00', 'date' => $thursday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">16:00-17:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 16:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">16:00-17:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 17:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">16:00-17:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '16:00:00', 'slot2' => '17:00:00', 'date' => $friday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">16:00-17:00</div>
                        @endif
                    </td>
                    
                </tr>
                <tr>
                    <td class="align-middle">17:00</td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 17:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">17:00-18:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 18:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">17:00-18:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '17:00:00', 'slot2' => '18:00:00', 'date' => $monday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">17:00-18:00</div>
                            
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 17:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">17:00-18:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 18:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">17:00-18:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '17:00:00', 'slot2' => '18:00:00', 'date' => $tuesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">17:00-18:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 17:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">17:00-18:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 18:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">17:00-18:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '17:00:00', 'slot2' => '18:00:00', 'date' => $wednesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">17:00-18:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 17:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">17:00-18:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 18:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">17:00-18:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '17:00:00', 'slot2' => '18:00:00', 'date' => $thursday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">17:00-18:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 17:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">17:00-18:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 18:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">17:00-18:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '17:00:00', 'slot2' => '18:00:00', 'date' => $friday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">17:00-18:00</div>
                        @endif
                    </td>
                    
                </tr>
                
                </tr>
            </tbody>
            
        </table>
    </div>


