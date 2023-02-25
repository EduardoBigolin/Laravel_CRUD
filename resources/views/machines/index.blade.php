<x-layout title="List Machines">
  <h1 class="text-white text-center text-4xl m-10">List all machines</h1>
  <div class="flex items-center justify-center m-10">
    <a class="text-white text-center bg-yellow-700 px-4 py-2 rounded-sm" href="{{route('machines.create')}}">Create new Machine</a>
  </div>

  @include("components/message")
  <table class="w-2/5 m-auto text-sm text-center text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="px-6 py-3">Id</th>
        <th scope="col" class="px-6 py-3">Name</th>
        <th scope="col" class="px-6 py-3">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($machines as $machine)
      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$machine->id}}</td>
        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$machine->name}}</td>
        <td class="px-6 py-4 font-medium flex items-center justify-center gap-10 text-gray-900 whitespace-nowrap dark:text-white">
          <a class="bg-blue-400 px-4 py-2 rounded-sm" href="{{route('machines.show', $machine->id)}}">View</a>
          <a class="bg-green-400 px-4 py-2 rounded-sm" href="{{route('machines.edit', $machine->id)}}">Edit</a>
          <form class="bg-red-400 px-4 py-2 rounded-sm" action="{{route('machines.destroy', $machine->id)}}" method="POST">
            @csrf
            @method("DELETE")
            <button>Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</x-layout>