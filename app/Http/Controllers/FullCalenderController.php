<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use App\Models\Schedule;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;


class FullCalenderController extends Controller
{
    
   public function calendarindex(){
        return view('calendarevents/events');
   }

   public function createevent(){
        return view('calendarevents.addevent');
   }

   public function create(Request $request)
   {
       $item = new Event();
       $item->title = $request->title;
       $item->start = $request->start;
       $item->end = $request->end;
       $item->description = $request->description; 
       $item->color = $request->color;
       $item->save();
       return redirect()->route('calendars')->with('success', 'Event created successfully');
     
       
   }

   public function getEvents()
   {
       $schedules = Event::all();
       return response()->json($schedules);
   }

   public function deleteEvent($id)
   {
       $schedules= event::findOrFail($id);
       $schedules->delete();
       return response()->json(['message' => 'Event deleted successfully']);
   }

   public function update(Request $request, $id)
   {
       $schedules = event::findOrFail($id);

       $schedules->update([
           'start' => Carbon::parse($request->input('start_date'))->setTimezone('UTC'),
           'end' => Carbon::parse($request->input('end_date'))->setTimezone('UTC'),
       ]);

       return response()->json(['message' => 'Event moved successfull']);
   }

   public function resize(Request $request, $id)
   {
       $schedules = event::findOrFail($id);

       $newEndDate = Carbon::parse($request->input('end_date'))->setTimezone('UTC');
       $schedules->update(['end' => $newEndDate]);

       return response()->json(['message' => 'Event resized successfull.']);
   }

   public function search(Request $request)
   {
       $searchKeywords = $request->input('title');

       $matchingEvents = event::where('title', 'like', '%' . $searchKeywords . '%')->get();

       return response()->json($matchingEvents);
   }
   
  



    ///new/////
    public function editEvent($id)
    {
        $event = Event::findOrFail($id);
        return view('updateevent', compact('event'));
       
    }

    public function updateEvent(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->title = $request->title;
        $event->start = $request->start;
        $event->end = $request->end;
        $event->description = $request->description;
        $event->save();

        return Redirect('fullcalender')->with('success', 'Event updated successfully');
    }

}








     