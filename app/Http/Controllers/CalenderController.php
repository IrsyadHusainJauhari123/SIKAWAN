<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CruthEvent;
use App\Models\User;
use Auth;

class CalenderController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = CruthEvent::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
        }
        return view('admin.Kalender.index');
    }

    public function indexUser(Request $request)
    {
        if ($request->ajax()) {
            $data = CruthEvent::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
        }
        return view('kalender-user');
    }

    public function action(Request $request)
    {
        if ($request->ajax()) {
            if ($request->type == 'add') {
                $event = CruthEvent::create([
                    'title'        =>    $request->title,
                    'start'        =>    $request->start,
                    'end'        =>    $request->end
                ]);

                return response()->json($event);
            }

            if ($request->type == 'update') {
                $event = CruthEvent::find($request->id)->update([
                    'title'        =>    $request->title,
                    'start'        =>    $request->start,
                    'end'        =>    $request->end
                ]);

                return response()->json($event);
            }

            if ($request->type == 'delete') {
                $event = CruthEvent::find($request->id)->delete();

                return response()->json($event);
            }
        }
    }
}
