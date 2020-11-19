<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <a href="{{url('/employees/create')}}">New employee</a>
                
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>First last name</th>
                            <th>Second last name</th>
                            <th>Created at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <img src="{{ asset('storage').'/'.$employee->Photo}}" alt="" width="200">
                                </td>
                                <td>{{$employee->Name}}</td>
                                <td>{{$employee->Email}}</td>
                                <td>{{$employee->FirstLastName}}</td>
                                <td>{{$employee->SecondLastName}}</td>
                                <td>{{$employee->created_at}}</td>
                                <td> 
                                    <a href="{{url('/employees/'.$employee->id.'/edit')}}">Editar</a>
                                    | 
                                    <form method="post" action="{{ url('/employees/'.$employee->id) }}">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" onclick="return confirm('Are you sure ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>