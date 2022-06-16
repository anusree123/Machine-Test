
@extends('layouts.app')

@section('content')

<section class="user-section">
    <div class="container">
        <div class="row">
           <div class="col-md-12 search-container">
            <label>Search</label>
            <div class="form-group">
               <input type="text" name="search" id="search" class="form-control" placeholder="Search name/designation/department"/>
            </div>
    </div>
</div>

<div class="row">
            @if(count($users) > 0)
             @foreach($users as $user)
            <div class="col-md-6">
                <div class="card">
                    <h5>{{$user->name}}</h5>
                    <h6>{!! DesignationHelper::getDesignation($user->id)  !!}</h6>
                    <p>{!! DesignationHelper::getDepartment($user->id)  !!}</p>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-md-12">
                <div class="card">
                   <p style="text-align: center;">No result found!!</p>
                </div>
            </div>
            @endif
</div>

</div>
</section>
 @endsection


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script type="text/javascript">

     $(document).on('keyup', '#search', function() {
        
        $query = $(this).val();
        console.log($query);
       

    $.ajax({
        url: "{{ route('user.action') }}",
        method: 'GET',
        data: {
            'query': $query
        },
        dataType: 'json',
        success: function(data) {
            $('div').html(data.table_data);
        }

        
    });
});

</script>
<script language="javascript" type="text/javascript">
    function filter(element) {
        var value = $(element).val();

        $(".row > div").each(function() {
            if ($(this).text().search(value) > -1) {
                $(this).show();
            }
            else {
                $(this).hide();
            }
        });
    }
</script>




