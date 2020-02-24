@extends('adminlte::page')

@section('content')

<div class="container" style="margin-top: 40px;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 bhoechie-tab-menu">
            <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                    <h3 class="fa fa-tachometer-alt"></h3><br/>Overview
                </a>
                <a href="#" class="list-group-item text-center">
                    <h3 class="fa fa-user-tag"></h3><br/>Provisional Registration
                </a>
                <a href="#" class="list-group-item text-center">
                    <h3 class="fa fa-user-md"></h3><br/>Permanent Registration
                </a>
                <a href="#" class="list-group-item text-center">
                    <h3 class="fa fa-user-shield"></h3><br/>Renewal of Registration
                </a>
                <a href="#" class="list-group-item text-center">
                    <h3 class="fa fa-user-secret"></h3><br/>NOC
                </a>
                <a href="#" class="list-group-item text-center">
                    <h3 class="fa fa-user-graduate"></h3><br/>Additional Qualification
                </a>
            </div>
        </div>
        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 bhoechie-tab">

            <!-- Overview section -->
            <div class="bhoechie-tab-content active">

                <h3 style="margin-top: 0;color:#55518a">Requests</h3>
                <table class="table table-striped custab">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Registration No.</th>
                        <th>Name</th>
                        <th>Request Type</th>
                        <th class="text-center">Status</th>
                    </tr>
                    </thead>
                    <tr>
                        <td>1</td>
                        <td> -- </td>
                        <td>Dr Dummy Lal</td>
                        <td>Provisional Registration</td>
                        <td class="text-center">Pending for Approval</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>--</td>
                        <td>Dr Dummy Lal</td>
                        <td>Provisional Registration</td>
                        <td class="text-center">Approved <a class='btn btn-info btn-xs' href="#"><span class="fa fa-money-bill-alt"></span>
                                Make Payment</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>PRG000345</td>
                        <td>Dr Dummy Lal</td>
                        <td>Provisional Registration</td>
                        <td class="text-center">Payment Recieved <a class='btn btn-info btn-xs' href="#"><span class="fa fa-file-download"></span>
                                Download Certificate</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td> -- </td>
                        <td>Dr Dummy Lal</td>
                        <td>Permanent Registration</td>
                        <td class="text-center">Pending for Approval</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>--</td>
                        <td>Dr Dummy Lal</td>
                        <td>Permanent Registration</td>
                        <td class="text-center">Approved <a class='btn btn-info btn-xs' href="#"><span class="fa fa-money-bill-alt"></span>
                                Make Payment</a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>PKMT33209</td>
                        <td>Dr Dummy Lal</td>
                        <td>Permanent Registration</td>
                        <td class="text-center">Payment Recieved <a class='btn btn-info btn-xs' href="#"><span class="fa fa-file-download"></span>
                                Download Certificate</a></td>
                    </tr>
                </table>

                <h3 style="margin-top: 0;color:#55518a">Alerts</h3>
                <table class="table table-striped custab">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Registration No.</th>
                        <th>Name</th>
                        <th>Request Type</th>
                        <th>Expiring On</th>
                        <th class="text-center"></th>
                    </tr>
                    </thead>
                    <tr>
                        <td>1</td>
                        <td> PRG000345 </td>
                        <td>Dr Dummy Lal</td>
                        <td>Permanent Registration Renewal</td>
                        <td>18 Nov 2018</td>
                        <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="fa fa-money-bill-alt"></span>
                                Pay & Renew</a></td>
                    </tr>
                </table>
            </div>

            <!-- Provisional section -->
            <div class="bhoechie-tab-content">

                <div class="registration-panel panel">
                    <h2>Provisional Registration</h2>
                </div>
                <form id="Login" class="row">
                    <div class="col-md-12 name-panel">
                        <p>Contact Details</p>
                        <h4>Present Address</h4>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Address Line 1</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Address Line 2</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Pincode</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">City</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">State</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Landline No</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>


                        <h4>Permanent Address</h4>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Address Line 1</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Address Line 2</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Pincode</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">City</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">State</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Landline No</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                    </div>

                    <div class="col-md-12 name-panel">
                        <p>Professional Details</p>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Passed From</label>
                            <select id="passedfrom" name="passedfrom" class="form-control">
                                <option value="1">Goa Medical College(Goa)</option>
                                <option value="2">Other State</option>
                                <option value="3">Other Country</option>
                            </select>
                        </div>
                        <div class="form-group col-md-8">
                            &nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;
                        </div>

                        <div class="form-group col-md-4">
                            <label class="control-label" for="filebutton">Internship Card</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="filebutton">Birth Certificate</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>

                        <div class="form-group col-md-4 otherstate">
                            <label class="control-label" for="filebutton">NOC from State Medical Council</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                        <div class="form-group col-md-4 otherstate">
                            <label class="control-label" for="filebutton">Provisional Reg. From Medical Council</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                        <div class="form-group col-md-4 otherstate">
                            <label class="control-label" for="filebutton">Final Year Marksheet</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                        <div class="form-group col-md-4 otherstate">
                            <label class="control-label" for="filebutton">Passing Certificate</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                        <div class="form-group col-md-4 otherstate">
                            <label class="control-label" for="filebutton">Pattern Of intership training</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                        <div class="form-group col-md-4 otherstate">
                            <label class="control-label" for="filebutton">NOC from University</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                        <div class="form-group col-md-4 otherstate">
                            <label class="control-label" for="filebutton">NOC from Medical Council of India</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                        <div class="form-group col-md-4 otherstate">
                            <label class="control-label" for="filebutton">NOC from Goa University</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>

                        <div class="form-group col-md-4 othercountry">
                            <label class="control-label" for="filebutton">Secretary Test Result</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                        <div class="form-group col-md-4 othercountry">
                            <label class="control-label" for="filebutton">Elegibility Certificate</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                        <div class="form-group col-md-4 othercountry">
                            <label class="control-label" for="filebutton">Translation</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                        <div class="form-group col-md-4 othercountry">
                            <label class="control-label" for="filebutton">Degree Certificate</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                        <div class="form-group col-md-4 othercountry">
                            <label class="control-label" for="filebutton">Passing Certificate</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                        <div class="form-group col-md-4 othercountry">
                            <label class="control-label" for="filebutton">Marksheet</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                        <div class="form-group col-md-4 othercountry">
                            <label class="control-label" for="filebutton">Photo</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>

                    </div>

                    <div class="form-group col-md-offset-8 col-md-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

            <!-- Permanent section -->
            <div class="bhoechie-tab-content">

                <div class="registration-panel panel">
                    <h2>Permanent Registration</h2>
                </div>
                <form id="Login" class="row">
                    <div class="col-md-12 name-panel">
                        <p>Contact Details</p>
                        <h4>Present Address</h4>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Address Line 1</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Address Line 2</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Pincode</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">City</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">State</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Landline No</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>


                        <h4>Permanent Address</h4>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Address Line 1</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Address Line 2</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Pincode</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">City</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">State</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Landline No</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                    </div>

                    <div class="col-md-12 name-panel">
                        <p>Professional Details</p>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">University</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">College</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Passing</label><br/>
                            <select id="passedfrom" name="passedfrom" class="form-control show-inline" style="margin-right: 10px;">
                                <option value="Month">Month</option>
                                <option value="Jan">Jan</option>
                                <option value="Feb">Feb</option>
                            </select>
                            <select id="passedfrom" name="passedfrom" class="form-control show-inline">
                                <option value="Year">Year</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Speciality</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Qualification</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Other Subject</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>

                        <div class="form-group col-md-4">
                            <label class="control-label" for="filebutton">Your Photo</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="filebutton">10th Pass Certificate</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="filebutton">12th Pass Certificate</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="filebutton">Aadhar</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="filebutton">MBBS Degree</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="filebutton">Provisional Certificate</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                    </div>

                    <div class="form-group col-md-offset-8 col-md-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

            <!-- Renewal section -->
            <div class="bhoechie-tab-content">
                <div class="registration-panel panel">
                    <h2>Renewal of Registration</h2>
                </div>
                <table class="table table-striped custab">
                    <thead>
                    <tr>
                        <th>Registration No.</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th class="text-center">Last Renewed</th>
                    </tr>
                    </thead>
                    <tr>
                        <td> SNG4007J </td>
                        <td>Dr Dummy Lal</td>
                        <td>Mapusa Bardez</td>
                        <td class="text-center">24 Oct 2014</td>
                    </tr>
                </table>
                <form id="Login" class="row">
                    <div class="col-md-12 name-panel">
                        <p>CME Details</p>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">No of CME Attended</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="">Upload all CME Certificate</label>
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                    </div>

                    <div class="drive-wrapper drive-grid-view">
                        <div class="grid-items-wrapper">
                            <div class="drive-item module text-center">
                                <a href="#" class="remove-btn"><i class="fa fa-times-circle"></i></a>
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">CME Notes.txt</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-text-o text-primary"></i></a>
                                    </div>
                                </div>
                                <!-- <div class="drive-item-footer module-footer">
                                <ul class="utilities list-inline">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i
                                                class="fa fa-download"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i
                                                class="fa fa-trash"></i></a></li>
                                </ul>
                            </div> -->
                            </div>
                            <div class="drive-item module text-center">
                                <a href="#" class="remove-btn"><i class="fa fa-times-circle"></i></a>
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">CME.png</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-text-o text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <a href="#" class="remove-btn"><i class="fa fa-times-circle"></i></a>
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">CME two.jpg</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-text-o text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-offset-8 col-md-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

            <!-- NOC Section -->
            <div class="bhoechie-tab-content">
                <div class="registration-panel panel">
                    <h2>Application for NOC</h2>
                </div>
                <table class="table table-striped custab">
                    <thead>
                    <tr>
                        <th>Registration No.</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th class="text-center">Last Renewed</th>
                    </tr>
                    </thead>
                    <tr>
                        <td> SNG4007J </td>
                        <td>Dr Dummy Lal</td>
                        <td>Mapusa Bardez</td>
                        <td class="text-center">24 Oct 2014</td>
                    </tr>
                </table>
                <form id="Login" class="row">
                    <div class="form-group col-md-6">
                        <label class="control-label" for="">Reason for Certificate</label>
                        <input type="email" class="form-control" id="inputEmail">
                    </div>
                    <div class="form-group col-md-offset-8 col-md-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

            <!-- Additional Qualification Section -->
            <div class="bhoechie-tab-content">
                <div class="registration-panel panel">
                    <h2>Additional Qualification</h2>
                </div>
                <table class="table table-striped custab">
                    <thead>
                    <tr>
                        <th>Registration No.</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th class="text-center">Last Renewed</th>
                    </tr>
                    </thead>
                    <tr>
                        <td> SNG4007J </td>
                        <td>Dr Dummy Lal</td>
                        <td>Mapusa Bardez</td>
                        <td class="text-center">24 Oct 2014</td>
                    </tr>
                </table>
                <form id="Login" class="row">
                    <div class="form-group col-md-4">
                        <label class="control-label" for="">Name of College</label>
                        <input type="email" class="form-control" id="inputEmail">
                    </div>
                    <div class="form-group col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label class="control-label" for="">Passing</label><br/>
                        <select id="passedfrom" name="passedfrom" class="form-control show-inline" style="margin-right: 10px;">
                            <option value="Month">Month</option>
                            <option value="Jan">Jan</option>
                            <option value="Feb">Feb</option>
                        </select>
                        <select id="passedfrom" name="passedfrom" class="form-control show-inline">
                            <option value="Year">Year</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label class="control-label" for="filebutton">Degree Certificate</label>
                        <input id="filebutton" name="filebutton" class="input-file" type="file">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label" for="filebutton">Passing Certificate</label>
                        <input id="filebutton" name="filebutton" class="input-file" type="file">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label" for="filebutton">MCI Recognition Letter</label>
                        <input id="filebutton" name="filebutton" class="input-file" type="file">
                    </div>

                    <div class="form-group col-md-offset-8 col-md-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>




@endsection