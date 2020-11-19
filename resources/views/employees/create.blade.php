
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <form method="post" action="{{url('/employees')}}" enctype="multipart/form-data">

                    {{csrf_field()}}

                    <label for="Name">{{'Name'}}</label>
                    <input type="text" name="Name" id="Name" value="">
                    <br>

                    <label for="Email">{{'Email'}}</label>
                    <input type="email" name="Email" id="Email" value="">
                    <br>

                    <label for="FirstLastName">{{'FirstLastName'}}</label>
                    <input type="text" name="FirstLastName" id="FirstLastName" value="">
                    <br>

                    <label for="Name">{{'SecondLastName'}}</label>
                    <input type="text" name="SecondLastName" id="SecondLastName" value="">
                    <br>

                    <label for="Photo">{{'Photo'}}</label>
                    <input type="file" name="Photo" id="Photo" value="">
                    <br>

                    <input type="submit" value="Save">

                    <a href="{{url('/employees')}}">Back</a>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>