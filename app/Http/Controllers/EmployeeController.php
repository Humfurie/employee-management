<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Position;
use Carbon\Carbon;

use function Ramsey\Uuid\v1;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::query()->where('flag', 1)->paginate(10);

        return view('admin.employee', compact('employee'));
        // return $employee;
    }

    public function show($id)
    {
        $employee = Employee::with('position')->where('flag', 1)->find($id);
        if (!$employee) {
            return response()->json(['message' => 'user not found!']);
        }
        return view('admin.employee.view', compact('employee'));
        // return $employee;
    }

    public function create()
    {
        $positions = Position::query()->where('flag', 1)->get();
        return view('admin.employee.create', compact('positions'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'position' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()]);
        }

        $employee = Employee::create($request->all());
        $employee->position()->attach($request->position);

        return redirect()->route('employee.show', compact('employee'));
        // return $employee;
    }

    public function edit($id)
    {
        $employee = Employee::with('position')->where('flag', 1)->find($id);
        if (!$employee) {
            return response()->json(['message' => 'user not found!']);
        }

        $positions = Position::query()->where('flag', 1)->get();

        return view('admin.employee.edit', compact('employee', 'positions'));
        //     return $employee;
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'position' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()]);
        }

        $employee = Employee::with('position')->where('flag', 1)->find($id);

        if (!$employee) {
            return response()->json(['message' => 'There is no such Employee'], 404);
        }

        $employee->update($request->all());
        $employee->position()->sync($request->position);

        return redirect()->route('employee.show', $employee);
    }

    public function showDelete($id)
    {
        $employee = Employee::with('position')->where('flag', 1)->find($id);
        if (!$employee) {
            return response()->json(['message' => 'user not found!']);
        }
        return view('admin.employee.delete', compact('employee'));
    }
    public function softDelete($id)
    {
        $employee = Employee::with('position')->where('flag', 1)->find($id);
        $employee->flag = 0;
        $employee->deleted_at = Carbon::now()->toDateTimeString();
        $employee->update();

        return redirect()->route('employee', $employee);
    }

    
    public function showTrash()
    {
        $employee = Employee::query()->where('flag', 0)->paginate(10);
        
        return view('admin.employee.trash.table', compact('employee'));
    }

    public function showRestore($id)
    {
        $employee = Employee::with('position')->where('flag', 0)->find($id);
        if (!$employee) {
            return response()->json(['message' => 'user not found!']);
        }
        return view('admin.employee.trash.restore', compact('employee'));
    }
    
    public function restore($id)
    {
        $employee = Employee::with('position')->where('flag', 0)->find($id);
        $employee->flag = 1;
        $employee->update();

        return redirect()->route('employee', $employee);
    }

    public function permaDelete($id)
    {
        $employee = Employee::with('position')->where('flag', 0)->find($id);
        if (!$employee) {
            return response()->json(['message' => 'user not found!']);
        }
        return view('admin.employee.trash.destroy', compact('employee'));
    }

    public function destroy($id)
    {
        $employee = Employee::with('position')->where('flag', 0)->find($id);
        if (!$employee) {
            return response()->json(['message' => 'user not found!']);
        }
        $employee->delete();
        return redirect()->route('employee.showTrash');
    }
}
