<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden ">
                <h2 className = 'text-lg font-semibold text-center'>School Report</h2>
               

                
<div class="overflow-x-auto relative">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
            <th scope="col" class="py-3 px-6">Student name</th>

            @if(isset($subjects))
                    @foreach($subjects as $subject)
                        <th scope="col" class="py-3 px-6">{{$subject->name}}</th>
                    @endforeach
                    <th scope="col" class="py-3 px-6">Mean</th>
                    <th scope="col" class="py-3 px-6">Median</th>
                    <th scope="col" class="py-3 px-6">Mode</th>
                    <th scope="col" class="py-3 px-6"></th>
            @endif
              
            </tr>
        </thead>
        <tbody>
            @if(isset($students))
                    @foreach($students as $student)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                        <th scope="col" class="py-3 px-6">{{$student->name}}</th>
                        @if(isset($subjects))
                            @foreach($subjects as $subject)
                                <td class="py-4 px-6">
                                    {{$subject->scores()->where('student_id', $student->id)->first() ? $subject->scores()->where('student_id', $student->id)->first()->value : 0}} 
                                </td>

                            @endforeach
                            <td class="py-4 px-6">
                            {{$student->scores->avg('value') ?? 0}}
                            </td>
                            <td class="py-4 px-6">
                            {{$student->scores->median('value') ?? 0}}
                            </td>
                            <td class="py-4 px-6">
                           
                            {{$student->scores->mode('value') > 0 ? $student->scores->mode('value')[0] : 0}}
                            </td>
                          
                           
                        @endif
                        
                        
                        
                     
                        <td class="py-4 px-6">
                            
                            <a href="/score/{{$student->id}}" class ="text-blue-400" style="color:blue;">Enter Score</a> 
                        </td>
            </tr>

                    @endforeach
            @endif
               
                
            
        </tbody>
    </table>
</div>

            </div>
        </div>
    </div>
</x-app-layout>
