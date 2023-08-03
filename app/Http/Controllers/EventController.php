<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Event;
use App\Models\Country;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        return view('events.index', [
            'events' => Event::with('country')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('events.create', [
            'countries' => Country::all(),
            'tags' => Tag::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateEventRequest $request): RedirectResponse
    {

        if($request->hasFile('image')) {

            $data = $request->validated();
            $data['image'] = Storage::putFile('events', $request->file('image'));
            $data['user_id'] = auth()->id();
            $data['slug'] = Str::slug($request->title);

            $event = Event::create($data);
            $event->tags()->attach($request->tags);
            return to_route('events.index');
        }
        else return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event): View
    {
        return View('events.edit', [
            'countries' => Country::all(),
            'tags' => Tag::all(),
            'event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event): RedirectResponse
    {
        $data = $request->validated();

        if($request->hasFile('image')) {
            Storage::delete($event->image);
            $data['image'] = Storage::putFile('events', $request->file('image'));
        }

        $data['slug'] = Str::slug($request->title);
        $event->update($data);
        $event->tags()->sync($request->tags);

        return to_route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
