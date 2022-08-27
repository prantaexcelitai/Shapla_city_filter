@extends('admin.adminMaster')
@section('admin')
<div class="content-wrapper">

            <center>
            <h1>Building Details</h1>
            </center>

                <div class="row m-2">
                    <div class="col-4">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Building Name</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="AsTec">
                      </div>
                    </div>
                    <div class="col-1"><div class="form-group">
                        <label for="exampleInputEmail1">Road No. </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="4A">

                      </div>
                    </div>
                    <div class="col-2"><div class="form-group">
                        <label for="exampleInputEmail1">Building No. </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="54" value=54>

                      </div>
                    </div>
                    <div class="col-3"><div class="form-group">
                        <label for="exampleInputEmail1">Building Face Direction</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="North-east">

                      </div>
                    </div>
                    <div class="col-2"><div class="form-group">
                        <label for="exampleInputEmail1">Building location</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="North-east">

                      </div>
                    </div>


                    <div class="col-2"><div class="form-group">

                        <label for="exampleInputEmail1">Filter By</label>
                        <input type="seacrh" class="form-control" id="search" name=""  aria-describedby="emailHelp">
                        <button type="submit" id="as" class="btn btn-primary" >Filter</button>



                      </div>
                    </div>
                            <div class="col-sm-12 mt-5">
                                <table id="mytable" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Customer country</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Customer Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Customer Id</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">File No.</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Flat Number</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Flat floor No.</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Flat Face Direction</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Flat Size</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Sell Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="alldata">

                                        @foreach($details as $item)

                                                <tr>
                                                    <td>{{$item->Customer_country}}</td>
                                                    <td>{{$item->Customer_name}}</td>
                                                    <td>{{$item->Customers_id}}</td>
                                                    <td>{{$item->Flate_no}}</td>
                                                    <td>{{$item->Flate_no}}</td>
                                                    <td>{{$item->Floor_no}}</td>
                                                    <td>{{$item->Flate_direction}}</td>
                                                    <td>{{$item->Size}}</td>
                                                    <td>{{$item->Sell_status}}</td>
                                                </tr>
                                             @endforeach

                                    </tbody>
                                    <tbody id="filterappend" class="searchdata">

                                    </tbody>
                                </table>


                            </div>

                </div>

</div>


@endsection
@section('script')
<script>

    $('#as').on('click',function(e)
    {
        e.preventDefault();
     let value= document.querySelector("#search").value;
    //    alert(value);

        // $value=$(this).val();

        if(value)
        {
            $('.alldata').hide();
            $('.searchdata').show();
        }
        else
        {
            $('.alldata').show();
            $('.searchdata').data();
        }
        $.ajax({
            type:'GET',
            url:'/filters/search',
            data:{'sea':value},

            success:function(data)
            {

                    // $("#filterappend").empty();\
                    $('#filterappend').html(data);
                // console.log(data,'here');

                // window.reload();
            }

        });
    })



</script>
@endsection


