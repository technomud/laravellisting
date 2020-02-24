@extends('layouts.app')

@section('content')
<div class="container">
    <div class="register-form">
        <div class="main-div">
            <div class="registration-panel">
                <h2>Doctor Registration</h2>
            </div>
            <form  method="POST" class="row" action="{{ route('register') }}">

                <div class="form-group col-md-4">
                    <label class="control-label" for="">Salutation</label>
                    <select id="salutation" name="salutation" class="form-control">
                        <option value=""></option>
                        <option value="1">DR.</option>
                        <option value="2">Mr.</option>
                    </select>
                </div>
                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }} col-md-4">
                    <label class="control-label" for="">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="">Middle Name</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name">
                </div>
                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }} col-md-4">
                    <label class="control-label" for="">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="">Mobile</label>
                    <input type="email" class="form-control" id="mobile" name="mobile">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="">Aadhar</label>
                    <input type="email" class="form-control" id="aadhar_no" name="aadhar_no">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="">PAN</label>
                    <input type="email" class="form-control" id="pan_no" name="pan_no">
                </div>
                <div class="form-group col-md-4">
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </div>
                <div class="form-group col-md-2 text-center">
                    <label class="control-label captcha" for="">MCG2245K</label>
                </div>
                <div class="form-group col-md-4">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Enter Text From Image">
                </div>
                <div class="form-group col-md-2 text-center">
                </div>
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection