
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg card-form">
                
                <form method="post" action="{{url('/employees')}}" enctype="multipart/form-data">

                    {{csrf_field()}}

                    @include('employees.form')

                    <input type="submit" value="Create">

                    <a href="{{url('/employees')}}">Back</a>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>