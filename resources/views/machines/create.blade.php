<x-layout title="Create Machines">
  <h1 class="text-white text-center text-4xl m-10">Create Machines</h1>
  <form class="bg-gray-800 w-96 m-auto gap-5 flex flex-col items-center p-5 rounded-md drop-shadow-md" action="{{route('machines.store')}}" method="POST">
    @csrf
    <div class="flex flex-col items-start gap-2 justify-start">
      <label class="text-white" for="name">Name:</label>
      <input type="text" class="px-2 py-1 drop-shadow-md" name="name" required id="name" placeholder="machine name">
    </div>
    <button class="bg-green-600 w-52 hover:bg-green-900 m-auto text-white rounded-sm" type="submit">Submit</button>
  </form>
</x-layout>