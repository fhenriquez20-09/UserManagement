<div class="row">
    <div>
        <div class="image-wrap">
            <label class="label-description" for="Photo">{{'Photo'}}</label>
            @if(isset($employee->Photo))
            <br>
            <img src="{{ asset('storage').'/'.$employee->Photo}}" alt="">
            <br>
            @endif
            <input type="file" name="Photo" id="Photo" value="">
        </div>
    </div>
    <div class="general-content">
        <div class="row">
            <div class="col-6">
                <label class="label-description" for="Name">{{'Name'}}</label>
                <div>
                    <input class="form-control" type="text" name="Name" id="Name" value="{{isset($employee->Name) ? $employee->Name : ''}}">
                </div>
                
                <label class="label-description" for="Email">{{'Email'}}</label>
                <div>
                    <input class="form-control" type="email" name="Email" id="Email" value="{{isset($employee->Email) ? $employee->Email : ''}}">
                </div>
            </div>
            <div class="col-6">
                <label class="label-description" for="FirstLastName">{{'First last name'}}</label>
                <div>
                    <input class="form-control" type="text" name="FirstLastName" id="FirstLastName" value="{{isset($employee->FirstLastName) ? $employee->FirstLastName : ''}}">
                </div>
                
                <label class="label-description" for="Name">{{'Second last name'}}</label>
                <div>
                    <input class="form-control" type="text" name="SecondLastName" id="SecondLastName" value="{{isset($employee->SecondLastName) ? $employee->SecondLastName : ''}}">
                </div>
            </div>
        </div>
        
    </div>
</div>
