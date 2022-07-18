<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden ">
                <h2 className = 'text-lg font-semibold text-center'>Score student: {{$student->name}}</h2>

                <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
  <form action="{{route('score.store')}}" method="POST">

    <input type = 'hidden' name='student_id' value = "{{$student->id}}"></input>
    
    @if(isset($subjects))
                    @foreach($subjects as $subject)
                    <div class="form-group mb-6 flex gap-6 items-center">
      <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">{{$subject->name}}</label>
      <input type="number" 
      value = "{{$subject->scores()->where('student_id', $student->id)->first() ? $subject->scores()->where('student_id', $student->id)->first()->value : 0}}"
      name = "score_{{$subject->id}}"
      id = "score_{{$subject->id}}"
      class="form-control
        block
        w-32
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
        aria-describedby="emailHelp" placeholder="score">
     
    </div>
                    @endforeach
                  
            @endif

            @csrf
 
    <button type="submit" class="
      px-6
      py-2
      bg-slate-700
    
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out">Save</button>
  </form>
</div>
          
            </div>
        </div>
    </div>
</x-app-layout>
