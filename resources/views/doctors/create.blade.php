@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="register-form">
        <div class="main-div">
            <div class="registration-panel">
                <h2>Add Doctor Registration</h2>
            </div>
            {{ Form::open(array('url' => 'doctors','class'=> 'inline-display')) }}
                      
                 <div class='form-group' style="display: none;">
                    @foreach ($roles as $role)
                        @if($role->name == 'doctor')
                            <input checked="checked" name="roles[]" type="checkbox" value="{{$role->id}}">
                        @endif
                    @endforeach
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <div class='input-group date' id='datepicker'>
                            <label class="control-label" for="">Registration Date</label>
                            <input type='text' class="form-control date" name="reg_date" id="reg_date" readonly="readonly" value=""/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('reg_id') ? ' has-error' : '' }} col-md-4">
                    <label class="control-label" for="">Registration No</label>
                    <input type="text" class="form-control" id="reg_id" name="reg_id" value="<?=$reg_id?>" readonly="readonly">
                    </div>

                <div class="form-group col-md-4">
                    <label class="control-label" for="">Salutation</label>
                    <select id="salutation_id" name="salutation_id" class="form-control">
                        <option value=""></option>
                        @foreach($salutation as $salutation_item):
                        <option value="{{$salutation_item->id}}">{{$salutation_item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }} col-md-4">
                    <label class="control-label" for="">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value=" ">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="">Middle Name</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name" value=" ">
                </div>
                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }} col-md-4">
                    <label class="control-label" for="">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value=" ">
                </div>
                
                <div class="form-group col-md-4">
                    <label class="control-label" for="">Gender</label>
                    <select id="gender" name="gender" class="form-control">
                        <option value=""></option>
                        @foreach($gender as $gender_key => $gender_item):
                        <option value="{{$gender_key}}" >{{$gender_item}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label class="control-label" for="">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="">
                </div>
                <div class="form-group col-md-4">
                    <div class='input-group date' id='datepicker1'>
                        <label class="control-label" for="">Date of Birth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type='text' class="form-control date" name="dob" id="dob" value="" readonly="readonly" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <label class="control-label" for="">Mobile</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" value="">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="">
                </div>

                <div class="form-group col-md-4">
                    <label class="control-label" for="">Aadhar</label>
                    <input type="text" class="form-control" id="aadhar_no" name="aadhar_no" value="">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="">PAN</label>
                    <input type="text" class="form-control" id="pan_no" name="pan_no" value="">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="">Address</label>
                    <textarea  class="form-control" id="address" name="address" ></textarea>
                </div>

                <div class="form-group" id="gmc-file-upload-section">
                    <select id="sel-qualification-1" name="sel-qualification-1" class="form-control"  >
                        <option value="">Select Qualification 1</option>
                        @foreach($qualification as $qualification_item):
                        <option value="{{$qualification_item->id}}">{{$qualification_item->name}}</option>
                        @endforeach
                    </select>
                    <div class='file_upload' id="f1">
                        <input type="file" class="form-control" name="qualification[]">
                        <div id='file_tools'>
                            salutation
                        </div>
                </div>
              </div>
                <div class="row">
                    <div class="col-md-offset-8 col-md-2">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    <div class="col-md-2">
                        <a href="/doctors" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection

 