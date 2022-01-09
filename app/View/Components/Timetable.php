<?php
namespace App\View\Components;
use App\Models\Event;

use Illuminate\View\Component;

class Timetable extends Component
{

    protected $events;

    public function __construct()
    {
        $this->event = Event::all();
    }

    public function render(){
        return view('components.timetable');
    }
}
