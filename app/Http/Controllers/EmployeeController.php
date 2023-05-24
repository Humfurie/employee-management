<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Domain\Employee\Models\Employee;
use Domain\Position\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        if (request('search')) {
            $employees = Employee::where('first_name', 'like', '%' . request('search') . '%')
                ->orWhere('middle_name', 'like', '%' . request('search') . '%')
                ->orWhere('last_name', 'like', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $employees = Employee::query()->paginate(10);
        }
        // $employees = Employee::query()->paginate(10);

        return view('admin.dashboard', compact('employees'));
        // return $employee;
    }

    public function show(Employee $employee)
    {
        if (! $employee) {
            return response()->json(['message' => 'user not found!']);
        }

        return view('admin.employee.view', compact('employee'));
        // return $employee;
    }

    public function create()
    {
        $positions = Position::query()->get();

        return view('admin.employee.create', compact('positions'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'position' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()]);
        }

        $employee = Employee::create($request->all());
        $employee->position()->attach($request->position);

        return redirect()->route('employee.show', compact('employee'));
        // return $employee;
    }

    public function edit(Employee $employee)
    {
        if (! $employee) {
            return response()->json(['message' => 'user not found!']);
        }

        $positions = Position::query()->get();

        return view('admin.employee.edit', compact('employee', 'positions'));
        //     return $employee;
    }

    public function update(Request $request, Employee $employee)
    {;
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'position_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()]);
        }


        if (! $employee) {
            return response()->json(['message' => 'There is no such Employee'], 404);
        }

        $employee->update($request->all());

        return redirect()->route('employee.show', $employee);
    }

    public function showDelete(Employee $employee)
    {

        if (! $employee) {
            return response()->json(['message' => 'user not found!']);
        }

        return view('admin.employee.delete', compact('employee'));
    }

    public function softDelete(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employee', $employee);
    }

    public function showTrashed()
    {
        $employees = Employee::query()->onlyTrashed()->paginate(10);

        return view('admin.employee.trash.table', compact('employees'));
    }

    public function showRestore(Employee $employee)
    {

        if (! $employee) {
            return response()->json(['message' => 'user not found!']);
        }

        return view('admin.employee.trash.restore', compact('employee'));
    }

    public function restore(Employee $employee)
    {


        $employee->restore();

        return redirect()->route('employee');


        // return redirect()->route('employee');
        // return view('admin.dashboard');
    }

    public function showForceDelete(Employee $employee)
    {
        $employee = Employee::with('position')->onlyTrashed()->find($employee);
        if (! $employee) {
            return response()->json(['message' => 'user not found!']);
        }

        return view('admin.employee.trash.destroy', compact('employee'));
    }

    public function forceDelete(Employee $employee)
    {
        $employee = Employee::with('position')->onlyTrashed()->find($employee);
        if (! $employee) {
            return response()->json(['message' => 'user not found!']);
        }
        $employee->forceDelete();

        return redirect()->route('employee.showTrash');
    }

    public function myFunc(Employee $employee)
    {
        return 'Hello world';
    }
}
