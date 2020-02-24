$(document).ready(function () {

    $("div.bhoechie-tab-menu>div.list-group>a").click(function (e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });

    $('.othercountry').hide();
    $('.otherstate').hide();

    $('#passedfrom').on('change', function () {
        console.log("passedfrom", this.value)
        if (this.value == '2') {
            $('.othercountry').hide();
            $('.otherstate').show();
        } else if (this.value == '3') {
            $('.othercountry').show();
            $('.otherstate').hide();
        } else {
            $('.othercountry').hide();
            $('.otherstate').hide();
        }
    });
    $(function() {
        if( $('.date').length > 0 ){
            $('.date').datepicker({  

                format: 'yyyy-mm-dd'

            });  
        }
    });


    //adding upload file feature
    var counter = 2;
    
    var html_qualification='';
        
    $('#del_file').hide();
    $('img#add_file').click(function(){
        if(html_qualification=='')
        {
            $.each(window.qualification_master, function(index, val) {
                html_qualification+='<option value="'+val.id+'">'+val.name+'</option>';
            });
        }
        console.log(html_qualification);
        $('#gmc-file-upload-section').append('<select id="sel-qualification-'+counter+'" name="sel-qualification-'+counter+'" class="form-control"  >'+
                        '<option value="">Select Qualification '+counter+'</option>'+
                        html_qualification+
                    '</select>'+
            '<div class="file_upload" id="f'+counter+'"><input name="qualification[]" type="file">'+counter+'</div>');
        $('#del_file').fadeIn(0);
    counter++;
    });
    $('img#del_file').click(function(){
        if(counter==3){
            $('#del_file').hide();
        }   
        counter--;
        $('#f'+counter).remove();
        $('#sel-qualification-'+counter).remove();
    });
    // end
});