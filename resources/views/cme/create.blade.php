@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column" data-form-type="formoid">
                <!---Formbuilder Form--->

                    {{ Form::open(array('url' => 'cme','class'=> 'mbr-form form-with-styler','data-form-title'=>"Mobirise Form")) }}
                    <input type="hidden" name="email"  data-form-email="true" value="Tf3KxJRC5Zid44xUt4e17REXPrpxBu0VM5MtNxiakcPiW/3JuM0Os0MfNEoPB8WpVRxk+AjPAc+gKPPCMtjqfNAGTodlbCpr3nvQn2M2sGQ6l17fo/fExJJmFFimMOTV">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">
                            Thanks for filling out the form!
                        </div>
                        <div hidden="hidden" data-form-alert-danger=""
                             class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md-4  form-group" data-for="name">
                            <label for="name-form1-22"
                                   class="form-control-label mbr-fonts-style display-7">Name of the
                                Organization </label>
                            <select name="cme_masters_id" data-form-field="Name" required="required"
                                    class="form-control display-7" id="name-form1-22">
                                <option value="">Select</option>
                                @foreach($cmemaster as $cmemaster_item):
                                <option value="{{$cmemaster_item->id}}">{{$cmemaster_item->name}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-22"> -->
                        </div>
                        <div class="col-md-4  form-group" data-for="cmedatetime">

                            <div class='input-group date' id='datepicker' style=
                            "width: 100%;">
                                <label for="email-form1-22"
                                       class="form-control-label mbr-fonts-style display-7">Date of CME :</label>
                                <input type='text' class="form-control date" name="start_end_date" id="cmedatetime" readonly="readonly" value=""/>
                                <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            </div>

                        </div>
                        <div class="col-md-2  form-group" data-for="starttimeofcme">

                            <label for="email-form1-22"
                                    class="form-control-label mbr-fonts-style display-7">
                                    Start time of CME :</label>
                            <input type='text' class="form-control date" name="starttimeofcme" id="starttimeofcme" readonly="readonly" value=""/>

                        </div>
                        <div class="col-md-2  form-group" data-for="endtimeofcme">

                            <label for="email-form1-22"
                                    class="form-control-label mbr-fonts-style display-7">End time of CME :</label>
                            <input type='text' class="form-control date" name="endtimeofcme" id="endtimeofcme" readonly="readonly" value=""/>
                        
                        </div>


                        @for($i = 0;$i<5;$i++)

                            <div data-for="topicofcme" class="col-md-3  form-group">
                                <label for="phone-form1-22"
                                       class="form-control-label mbr-fonts-style display-7">Topic of CME</label>
                                <input type="text" name="topicofcme_{{$i}}" data-form-field="topicofcme"
                                       class="form-control display-7" id="phone-form1-22">
                            </div>
                            <div data-for="durationofcme" class="col-md-1  form-group">
                                <label for="phone-form1-22"
                                       class="form-control-label mbr-fonts-style display-7">Duration</label>
                                <input type="text" name="durationofcme_{{$i}}"
                                       data-form-field="durationofcme"
                                       class="form-control display-7" id="phone-form1-22">
                            </div>
                            <div data-for="nameofthespeaker" class="col-md-3  form-group">
                                <label for="phone-form1-22"
                                       class="form-control-label mbr-fonts-style display-7">Name of
                                    the Speaker</label>
                                <input type="text" name="nameofthespeaker_{{$i}}"
                                       data-form-field="nameofthespeaker"
                                       class="form-control display-7" id="phone-form1-22">
                            </div>
                            <div data-for="designationQualificationspeaker"
                                 class="col-md-3  form-group">
                                <label for="phone-form1-22"
                                       class="form-control-label mbr-fonts-style display-7">Designation &
                                    Qualification of Speaker</label>
                                <input type="text" name="designationQualificationspeaker_{{$i}}"
                                       data-form-field="designationQualificationspeaker"
                                       class="form-control display-7" id="phone-form1-22">
                            </div>
                            <div data-for="biodataofspeaker" class="col-md-2  form-group">
                                <label for="phone-form1-22"
                                       class="form-control-label mbr-fonts-style display-7">Bio-data
                                    of speaker</label>
                                <input type="file" name="biodataofspeaker_{{$i}}"
                                       data-form-field="biodataofspeaker"
                                       id="phone-form1-22">
                            </div>

                        @endfor


                        <div data-for="abstractoflecture" class="col-md-12 form-group">
                            <label for="message-form1-22"
                                   class="form-control-label mbr-fonts-style display-7">Abstract of
                                lecture</label>
                            <textarea name="abtract_of_lecture" data-form-field="abstractoflecture"
                                      class="form-control display-7"
                                      id="message-form1-22"></textarea>
                        </div>
                        <div class="col-md-12 align-center">
                            <button type="submit" class="btn btn-primary btn-form display-4">SEND
                                FORM
                            </button>
                        </div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
@endsection