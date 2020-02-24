@extends('adminlte::page')

@section('content')

 <div class="row">
                <div class="form-group col-md-2">                    
                    <a href="doctors/create" class="btn btn-primary">Add New</a>
                </div> 
                <div class="form-group col-md-2">                    
                   <a href="articles/exportCSV" class="btn btn-primary">CSV Export</a>
                </div>
</div>
<div class="row">
 <div class="table-responsive col-md-12">
                    <table class="table table-striped" id="dr-listing">
                        <thead>
                            <tr>
                                <th>Reg. No.</th>
                                <th>Name</th>                                
                                <th>Email Id</th>
                                <th>Mobile No</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                          
                           
                        </tbody>
                    </table>
                </div>
            </div>
@endsection

@section('js')
    <script> $(document).ready(function() {
    $('#dr-listing').DataTable( {
        initComplete : function() {
        var input = $('.dataTables_filter input').unbind(),
            self = this.api(),
            $searchButton = $('<button class="btn btn-warning">')
                       .text('search')
                       .click(function() {
                          self.search(input.val()).draw();
                       }),
            $clearButton = $('<button class="btn btn-info">')
                       .text('clear')
                       .click(function() {
                          input.val('');
                          $searchButton.click(); 
                       }) 
        $('.dataTables_filter').append($searchButton, $clearButton);
        },
        "ajax": 'doctorslist',
        "processing": true,
        "serverSide": true,
        "lengthMenu": [20, 40, 60, 80, 100],
        "pageLength": 20,
        columns: [
        	{data: "reg_id"},
            { data: null, render: function ( data, type, row ) {
                // Combine the first and last names into a single table field
                return data.first_name+' '+data.last_name;
            } },             
            { data: "email" },
            { data: "mobile" },
            {
                data: null,render: function ( data, type, row ) {
                // Combine the first and last names into a single table field
                return "<a class='btn btn-info btn-xs' href='doctors/"+data.id+"/edit'><span class='fa fa-edit'></span>Update</a>"
            }  
            }
        ]
    } );
} ); </script>
@stop
