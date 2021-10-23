<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('cssmd/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/dd.css')}}">




</head>
<style>
    .butn {
        margin-left: 1000px;
        margin-top: -10px;

    }


</style>
<body>


<section class="container-fluid">
    {{-- <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="butn">
                     <button type="button" class="btn btn-primary py-3 px-4" data-toggle="modal"
                             data-target="#exampleModalCenter">
                         Products
                     </button>
                 </div>

                 <!-- Modal -->
             </div>
         </div>
     </div>--}}


    <div class="container">
        <div class="row">

            <div class="col-lg-10">

            </div>
            <div class="col-lg-2">
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Open Modal</button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                                <p>Some text in the modal.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@includeIf('utility_modal_form')

<!--for demo wrap-->
<h1 style="margin-top: -100px">Fixed Table header</h1>
<div class="tbl-header">
    <table>
        <thead>
        <tr style="border-style: dashed">
            <th>item_id</th>
            <th>item_name</th>
            <th>item_price</th>
            <th>item_quantity</th>
            <th>Modify</th>

        </tr>
        </thead>
    </table>
</div>
<div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
        <tbody>

        @foreach($items as $item)
            <tr>
                <td>{{$item->item_id}}</td>
                <td>{{$item->item_name}}</td>
                <td>{{$item->item_price}}</td>
                <td>{{$item->item_quantity}}</td>
                <td>

                    <a href="{{url('delete_item/'.$item->id)}}">
                        <button type="button" class="btn btn-primary btn-xs" style="background-color: #00b05c">delete
                        </button>
                        <i class="fa fa-trash-o fa-2x"></i>
                    </a>


                    <button type="button" onclick="getMyItem('{{$item->id}}')" class="btn btn-primary btn-xs"
                            data-toggle="modal" data-target="#exampleModalCenter" style="background-color: #00b05c">edit
                    </button>


                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>



<script src="{{asset('js/jj.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<!-- Latest compiled JavaScript -->
<script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}"></script>
<!-- jQuery library -->
<script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
<script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>--}}
{{--<script src="{{asset('js/jquery.min.js')}}"></script>--}}
{{--<script src="{{asset('js/bootstrap.min.js')}}"></script>--}}



<script>
    function getMyItem(id) {
        $.ajax({
            type: 'GET',
            url: "{{url('edit_item')}}/" + id,
            success: function (data) {
                $('#itemId').val(data.id);
                $('#item_id').val(data.item_id);
                $('#item_name').val(data.item_name);
                $('#item_price').val(data.item_price);
                $('#item_quantity').val(data.item_quantity);
            }
        });
    }
</script>
<script>
    function editFunction(){
        var updatedata;
        updatedata = $('#editform').serialize();
        $.ajax({
            type: 'Post',
            url: "update_item",
            data: updatedata,
            success: function (data){
            },
        });
        /*$('#myModal').removeClass('show');*/
    }

</script>

</body>
</html>






