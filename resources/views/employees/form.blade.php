<label for="Name">{{'Name'}}</label>
<input type="text" name="Name" id="Name" value="{{isset($employee->Name) ? $employee->Name : ''}}">
<br>

<label for="Email">{{'Email'}}</label>
<input type="email" name="Email" id="Email" value="{{isset($employee->Email) ? $employee->Email : ''}}">
<br>

<label for="FirstLastName">{{'FirstLastName'}}</label>
<input type="text" name="FirstLastName" id="FirstLastName" value="{{isset($employee->FirstLastName) ? $employee->FirstLastName : ''}}">
<br>

<label for="Name">{{'SecondLastName'}}</label>
<input type="text" name="SecondLastName" id="SecondLastName" value="{{isset($employee->SecondLastName) ? $employee->SecondLastName : ''}}">
<br>

<label for="Photo">{{'Photo'}}</label>
@if(isset($employee->Photo))
<br>
<img src="{{ asset('storage').'/'.$employee->Photo}}" alt="" width="200">
<br>
@endif
<input type="file" name="Photo" id="Photo" value="">
<br>