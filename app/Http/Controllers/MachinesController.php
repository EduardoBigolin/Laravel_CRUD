<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;;

class MachinesController
{
  public function index()
  {
    $machine = Machine::all();
    return view('machines.index')->with("machines", $machine);
  }

  public function create()
  {
    return view("machines.create");
  }

  public function store(Request $request)
  {
    Machine::create($request->only(['name']));
    return redirect()->route("machines.index")->with("sucess", "Creaded machine with success");
  }

  public function show(Machine $machine)
  {
    return view("machines.show")->with('machine', $machine);
  }

  public function edit(Machine $machine)
  {
    return view('machines.edit')->with('machine', $machine);
  }

  public function update(Request $request, Machine $machine)
  {
    $machine->fill($request->all())->save();
    return redirect()->route("machines.index")->with('sucess', 'Edit Machine with success');
  }

  public function destroy(Machine $machine)
  {
    $machine->delete();
    return redirect()->route("machines.index")->with('sucess', 'Delete Machine with success');
  }
}
