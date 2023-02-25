<x-layout title="Edit Machines">
  <h1>Edit Machine</h1>
  <form action="{{route('machines.update', $machine->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name</label>
    <input type="text" name="name" value="{{$machine->name}}" id="name" placeholder="machine name">
    <br />
    <br />
    <button type="submit">Submit</button>
  </form>
</x-layout>