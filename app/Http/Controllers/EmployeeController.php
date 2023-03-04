<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::query()->where('flag', 1)->get();

        return view('admin.dashboard', compact('employee'));
        // return $employee;
    }

    public function show($id)
    {
        $employee = Employee::with('position')->where('flag', 1)->find($id);
        if(!$employee){
            return response()->json(['message' => 'user not found!']);
        }
        return view('admin.employee.view', compact('employee'));
        // return $employee;
    }

    public function create()
    {
        return view('admin.employee.create');
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

        $employee = Employee::create($request->all);
        $employee->position()->attach($request->position);

        return view('admin.employee.index');
        // return $employee;
    }

    public function edit($id)
    {
        $employee = Employee::with('position')->find($id);

        return view('admin.employee.edit', compact('$employee'));
    //     return $employee;
    }

    public function update($id)
    {

    }

    public function deFlag($id)
    {
        $employee = Employee::with('position')->where('flag', 1)->find($id);
        $employee->flag = 0;
        $employee->update();

        return redirect()->route('/', $employee)->withFlashSuccess(__('Product Succesfully Deleted.'));
        // return $employee;
    }

    public function destroy($id)
    {
        $employee = Employee::with('position')->where('flag', 1)->find($id);


        return redirect()->route('/', $employee)->withFlashSuccess(__('Product Succesfully Deleted.'));
    }
}
