<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Domain\Position\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PositionController extends Controller
{
    public function index()
    {
        $positions = Position::query()->where('flag', 1)->paginate(5);

        return view('admin.position', compact('positions'));
    }

    public function show($id)
    {
        $positions = Position::query()->where('flag', 1)->find($id);

        return view('admin.position.view', compact('positions'));
    }

    public function create()
    {
        return view('admin.position.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'position' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()]);
        }

        $positions = Position::create($request->all());

        return redirect()->route('position.show', ['position' => $positions->id]);
    }

    public function edit($id)
    {
        $positions = Position::query()->where('flag', 1)->find($id);

        if (! $positions) {
            return response()->json(['message' => 'Position not found!']);
        }

        return view('admin.position.edit', compact('positions'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'position' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()]);
        }

        $positions = Position::query()->where('flag', 1)->find($id);
        if (! $positions) {
            return response()->json(['message' => 'Position not found!']);
        }

        $positions->update($request->all());

        return redirect()->route('position.show', $positions);
    }

    public function showDelete($id)
    {
        $positions = Position::query()->where('flag', 1)->find($id);
        if (! $positions) {
            return response()->json(['message' => 'Position not found!']);
        }

        return view('admin.position.delete', compact('positions'));
    }

    public function softDelete($id)
    {
        $positions = Position::query()->where('flag', 1)->find($id);
        $positions->flag = 0;
        $positions->deleted_at = Carbon::now()->toDateTimeString();
        $positions->update();

        return redirect()->route('position', $positions);
    }

    public function showTrash()
    {
        $positions = Position::query()->where('flag', 0)->paginate(5);

        return view('admin.position.trash.table', compact('positions'));
    }

    public function showRestore($id)
    {
        $positions = Position::query()->where('flag', 0)->find($id);

        return view('admin.position.trash.restore', compact('positions'));
    }

    public function restore($id)
    {
        $positions = Position::query()->where('flag', 0)->find($id);
        $positions->flag = 1;
        $positions->update();

        return redirect()->route('position', $positions);
    }

    public function permaDelete($id)
    {
        $positions = Position::query()->where('flag', 0)->find($id);
        if (! $positions) {
            return response()->json(['message' => 'Position not found!']);
        }

        return view('admin.position.trash.destroy', compact('positions'));
    }

    public function destroy($id)
    {
        $positions = Position::query()->where('flag', 0)->find($id);
        if (! $positions) {
            return response()->json(['message' => 'Position not found!']);
        }

        $positions->delete();

        return redirect()->route('position.showTrash');
    }
}
