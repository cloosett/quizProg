<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Learning;
use App\Models\Quiz;
use Illuminate\Http\Request;

class LearningController extends Controller
{
    public function index()
    {
        $learnings = Learning::paginate(10);
        return view('admin.learning.learning', compact('learnings'));
    }

    public function create()
    {
        return view('admin.learning.create');
    }

    public function store(Request $request)
    {
        $learning = Learning::create([
            'title' => $request->title,
            'description' => $request->description,
            'tags' => $request->tags,
            'level' => $request->level,
            'text' => $request->learning,
            'slug' => $request->slug,
            'status' => $request->status === 'on' ? 1 : 0
        ]);

        return redirect()->route('admin.learning');
    }

    public function edit($id)
    {
        $learning = Learning::find($id)->first();
        return view('admin.learning.edit', compact('learning'));
    }

    public function update(Request $request, $id)
    {
        $learning = Learning::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'tags' => $request->tags,
            'level' => $request->level,
            'text' => $request->learning,
            'slug' => $request->slug,
            'status' => $request->status === 'on' ? 1 : 0
        ]);

        return redirect()->route('admin.learning');
    }

    public function destroy($id)
    {
        $learning = Learning::findOrFail($id);
        $learning->delete();
        return redirect()->route('admin.learning');
    }
}
