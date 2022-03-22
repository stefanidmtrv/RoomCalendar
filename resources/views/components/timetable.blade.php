<div class="container">

    <div class="table-responsive">

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
                    <td class="align-middle">09:00am</td>
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
                    <td class="align-middle">10:00am</td>
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
                    <td class="align-middle">11:00am</td>
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
                    <td class="align-middle">12:00pm</td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 12:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">12:00-01:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 13:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">12:00-01:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '12:00:00', 'slot2' => '13:00:00', 'date' => $monday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">12:00-01:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 12:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">12:00-01:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 13:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">12:00-01:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '12:00:00', 'slot2' => '13:00:00', 'date' => $tuesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">12:00-01:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 12:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">12:00-01:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 13:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">12:00-01:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '12:00:00', 'slot2' => '13:00:00', 'date' => $wednesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">12:00-01:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 12:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">12:00-01:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 13:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">12:00-01:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '12:00:00', 'slot2' => '13:00:00', 'date' => $thursday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">12:00-01:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 12:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">12:00-01:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 13:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">12:00-01:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '12:00:00', 'slot2' => '13:00:00', 'date' => $friday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">12:00-01:00</div>
                        @endif
                    </td>
                    
                </tr>

                <tr>
                    <td class="align-middle">01:00pm</td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 13:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">01:00-02:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 14:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">01:00-02:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '13:00:00', 'slot2' => '14:00:00', 'date' => $monday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">01:00-02:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 13:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">01:00-02:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 14:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">01:00-02:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '13:00:00', 'slot2' => '14:00:00', 'date' => $tuesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">01:00-02:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 13:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">01:00-02:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 14:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">01:00-02:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '13:00:00', 'slot2' => '14:00:00', 'date' => $wednesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">01:00-02:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 13:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">01:00-02:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 14:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">01:00-02:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '13:00:00', 'slot2' => '14:00:00', 'date' => $thursday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">01:00-02:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 13:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">01:00-02:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 14:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">01:00-02:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '13:00:00', 'slot2' => '14:00:00', 'date' => $friday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">01:00-02:00</div>
                        @endif
                    </td>
                    
                </tr>
                <tr>
                    <td class="align-middle">02:00pm</td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 14:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">02:00-03:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 15:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">02:00-03:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '14:00:00', 'slot2' => '15:00:00', 'date' => $monday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">02:00-03:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 14:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">02:00-03:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 15:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">02:00-03:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '14:00:00', 'slot2' => '15:00:00', 'date' => $tuesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">02:00-03:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 14:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">02:00-03:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 15:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">02:00-03:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '14:00:00', 'slot2' => '15:00:00', 'date' => $wednesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">02:00-03:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 14:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">02:00-03:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 15:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">02:00-03:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '14:00:00', 'slot2' => '15:00:00', 'date' => $thursday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">02:00-03:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 14:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">02:00-03:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 15:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">02:00-03:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '14:00:00', 'slot2' => '15:00:00', 'date' => $friday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">02:00-03:00</div>
                        @endif
                    </td>
                    
                </tr>
                <tr>
                    <td class="align-middle">03:00pm</td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 15:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">03:00-04:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 16:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">03:00-04:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '15:00:00', 'slot2' => '16:00:00', 'date' => $monday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">03:00-04:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 15:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">03:00-04:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 16:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">03:00-04:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '15:00:00', 'slot2' => '16:00:00', 'date' => $tuesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">03:00-04:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 15:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">03:00-04:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 16:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">03:00-04:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '15:00:00', 'slot2' => '16:00:00', 'date' => $wednesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">03:00-04:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 15:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">03:00-04:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 16:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">03:00-04:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '15:00:00', 'slot2' => '16:00:00', 'date' => $thursday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">03:00-04:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 15:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">03:00-04:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 16:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">03:00-04:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '15:00:00', 'slot2' => '16:00:00', 'date' => $friday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">03:00-04:00</div>
                        @endif
                    </td>
                    
                </tr>
                <tr>
                    <td class="align-middle">04:00pm</td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 16:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">04:00-05:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 17:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">04:00-05:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '16:00:00', 'slot2' => '17:00:00', 'date' => $monday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">04:00-05:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 16:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">04:00-05:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 17:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">04:00-05:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '16:00:00', 'slot2' => '17:00:00', 'date' => $tuesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">04:00-05:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 16:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">04:00-05:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 17:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">04:00-05:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '16:00:00', 'slot2' => '17:00:00', 'date' => $wednesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">04:00-05:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 16:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">04:00-05:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 17:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">04:00-05:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '16:00:00', 'slot2' => '17:00:00', 'date' => $thursday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">04:00-05:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 16:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">04:00-05:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 17:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">04:00-05:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '16:00:00', 'slot2' => '17:00:00', 'date' => $friday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">04:00-05:00</div>
                        @endif
                    </td>
                    
                </tr>
                <tr>
                    <td class="align-middle">05:00pm</td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 17:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">05:00-06:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(0)->format('Y-m-d 18:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">05:00-06:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '17:00:00', 'slot2' => '18:00:00', 'date' => $monday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">05:00-06:00</div>
                            
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 17:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">05:00-06:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d 18:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">05:00-06:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '17:00:00', 'slot2' => '18:00:00', 'date' => $tuesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">05:00-06:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 17:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">05:00-06:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d 18:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">05:00-06:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '17:00:00', 'slot2' => '18:00:00', 'date' => $wednesday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">05:00-06:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 17:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">05:00-06:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d 18:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">05:00-06:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '17:00:00', 'slot2' => '18:00:00', 'date' => $thursday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">05:00-06:00</div>
                        @endif
                    </td>
                    <td>
                        @if(\App\Models\Event::where('room_id', $room)->where('start_date_time',
                        \Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 17:00:00'))->exists())
                         
                            <button class="btn btn-danger disabled">Booked</button>
                            <div class="margin-10px-top font-size14">05:00-06:00</div>
                        @elseif(\Carbon\Carbon::parse(\Carbon\Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d 18:00:00'))->isPast())
                            <button class="btn btn-success disabled">Book</button>
                            <div class="margin-10px-top font-size14">05:00-06:00</div>
                        @else
                            <a class="btn btn-success" href="{{ route('events.create',
                            ['slot1'=> '17:00:00', 'slot2' => '18:00:00', 'date' => $friday, 'roomid' => $room]) }}">Book</a>
                            <div class="margin-10px-top font-size14">05:00-06:00</div>
                        @endif
                    </td>
                    
                </tr>
                
                </tr>
            </tbody>
            
        </table>
    </div>
</div>
<style>

body{
    margin-top:20px;
}
.bg-light-gray {
    background-color: #f7f7f7;
}
.table-bordered thead td, .table-bordered thead th {
    border-bottom-width: 2px;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
}


.bg-sky.box-shadow {
    box-shadow: 0px 5px 0px 0px #00a2a7
}

.bg-orange.box-shadow {
    box-shadow: 0px 5px 0px 0px #af4305
}

.bg-green.box-shadow {
    box-shadow: 0px 5px 0px 0px #4ca520
}

.bg-yellow.box-shadow {
    box-shadow: 0px 5px 0px 0px #dcbf02
}

.bg-pink.box-shadow {
    box-shadow: 0px 5px 0px 0px #e82d8b
}

.bg-purple.box-shadow {
    box-shadow: 0px 5px 0px 0px #8343e8
}

.bg-lightred.box-shadow {
    box-shadow: 0px 5px 0px 0px #d84213
}


.bg-sky {
    background-color: #02c2c7
}

.bg-orange {
    background-color: #e95601
}

.bg-green {
    background-color: #5bbd2a
}

.bg-yellow {
    background-color: #f0d001
}

.bg-pink {
    background-color: #ff48a4
}

.bg-purple {
    background-color: #9d60ff
}

.bg-lightred {
    background-color: #ff5722
}

.padding-15px-lr {
    padding-left: 15px;
    padding-right: 15px;
}
.padding-5px-tb {
    padding-top: 5px;
    padding-bottom: 5px;
}
.margin-10px-bottom {
    margin-bottom: 10px;
}
.border-radius-5 {
    border-radius: 5px;
}

.margin-10px-top {
    margin-top: 10px;
}
.font-size14 {
    font-size: 14px;
}

.text-light-gray {
    color: #d6d5d5;
}
.font-size13 {
    font-size: 13px;
}

.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
}
.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
    </style>

    <script>
       
    </script>