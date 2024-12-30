<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.list', compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required|string|max:255',
            'event_date' => 'required|date',
            'event_category' => 'required|string|max:255',
            'event_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
        ]);

        $data = $request->all();

        // Jika ada file gambar yang diupload
        if ($request->hasFile('event_image')) {
            $file = $request->file('event_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads/events', $filename, 'public'); // Simpan gambar di folder 'public/uploads/events'
            $data['event_image'] = 'uploads/events/' . $filename;
        }

        Event::create($data);

        return redirect()->route('events.list')->with('success', 'Event added successfully!');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'event_name' => 'required|string|max:255',
            'event_date' => 'required|date',
            'event_category' => 'required|string|max:255',
        ]);

        $event = Event::findOrFail($id);
        $event->update($request->all());

        return redirect()->route('events.list')->with('success', 'Event updated successfully!');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('events.list')->with('success', 'Event deleted successfully!');
    }
}

