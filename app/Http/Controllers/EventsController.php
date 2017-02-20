<?php

namespace App\Http\Controllers;

use App\Events;

use Illuminate\Http\Request;

class EventsController extends Controller
{


    public function index()
    {

        $inct = Events::where('comp', 0)->count();
        $ct = Events::where('comp', 1)->count();
        $events = Events::where('comp',0)->latest()->paginate(5);
        return view('index', compact('events','ct','inct'));
    }

    public function add()
    {
        return view ('add');
    }

    public function store()
    {
        $this->validate(request(), [
            'event' => 'required',
            'deadline' => 'required',
            'comp' => 'required'
        ]);

        // dd(request('event'));
        Events::create(request(['event', 'deadline', 'comp']));


        return redirect()->route('todomain');
    }

    public function delete()
    {
        $inct = Events::where('comp', 0)->count();
        $ct = Events::where('comp', 1)->count();

        $delid = request('delid');

        $events = Events::find($delid);

        //$events->updated_at->format('d-m-Y');

        //dd($events->updated_at);

        $events->comp =request('comp');
        $events->save();





        return view('completed', compact('events','ct','inct'));
        // return redirect('/todo/completed');

    }

    public function edit()
    {
        //$event = Events::finOrFail($editid);

        //return view('edit')->withTask($event);

        $inct = Events::where('comp', 0)->count();
        $ct = Events::where('comp', 1)->count();
        $editid = request('editid');
        $upd = Events::find($editid);
        // return view::make('edit', array('upd' => $upd));
        return view ('edit', compact('upd','ct','inct'));

    }

    public function update()
    {
        /*$this->validate(request(), [
            'event' => 'required',
            'deadline' => 'required',
        ]);*/


        $fid = request('fid');
        $events = Events::find($fid);

        /*$this->validate(request(), [
            'event' => 'required',
            'deadline' => 'required',
        ]);*/

        //Events::create(request(['event', 'deadline']));
        $events->event =request('event');
        $events->deadline =request('deadline');
        $events->save();

        return redirect('/todo');


    }

    public function completed()
    {
        $inct = Events::where('comp', 0)->count();
        $ct = Events::where('comp', 1)->count();
        $events = Events::latest()->get();
        return view('completed', compact('events','ct','inct'));
    }


    public function c_tasks()
    {
        $inct = Events::where('comp', 0)->count();
        $ct = Events::where('comp', 1)->count();
        $events = Events::where('comp',1)->orderby('updated_at','desc')->paginate(5);
        return view('c_tasks', compact('events','ct','inct'));
    }




}
