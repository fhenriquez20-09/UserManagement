
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <form method="post" action="{{url('/employees/'. $employee->id )}}" enctype="multipart/form-data">

                    {{csrf_field()}}
                    {{method_field('PATCH')}}

                    <label for="Name">{{'Name'}}</label>
                    <input type="text" name="Name" id="Name" value="{{$employee->Name}}">
                    <br>

                    <label for="Email">{{'Email'}}</label>
                    <input type="email" name="Email" id="Email" value="{{$employee->Email}}">
                    <br>

                    <label for="FirstLastName">{{'FirstLastName'}}</label>
                    <input type="text" name="FirstLastName" id="FirstLastName" value="{{$employee->FirstLastName}}">
                    <br>

                    <label for="Name">{{'SecondLastName'}}</label>
                    <input type="text" name="SecondLastName" id="SecondLastName" value="{{$employee->SecondLastName}}">
                    <br>

                    <label for="Photo">{{'Photo'}}</label>
                    <img src="{{ asset('storage').'/'.$employee->Photo}}" alt="" width="200">
                    <input type="file" name="Photo" id="Photo" value="{{$employee->Photo}}">
                    <br>

                    <input type="submit" value="Update">

                    <a href="{{url('/employees')}}">Back</a>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>