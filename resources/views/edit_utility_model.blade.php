<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="{{asset('cssmd/ionicons.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css')}}">
        -->
    <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('cssmd/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/dd.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<style>
    .butn {
        margin-left: 1000px;
        margin-top: -10px;

    }


</style>
<body>


<section class="container-fluid">
    <div class="container">
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
    </div>
    </div>
</section>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center"
                        data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="ion-ios-close"></span>
                </button>
            </div>
            <div class="row">
                <div class="col-md mb-md-0 mb-5">
                    <div class="modal-body p-0">
                        <h3 class="mb-4">Sign In</h3>
                        <form action="{{url('store')}}" method="post" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <label for="item_id">Item ID</label>
                                <input class="form-control" type="text" name="item_id" required>
                            </div>
                            <div class="form-group">
                                <label for="item_name">Item Name</label>
                                <input class="form-control" type="text" name="item_name" required>
                            </div>
                            <div class="form-group">
                                <label for="item_price">Item Price</label>
                                <input class="form-control" type="text" name="item_price" required>
                            </div>
                            <div class="form-group">
                                <label for="item_quantity">Item Quantity</label>
                                <input class="form-control" type="text" name="item_quantity" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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
                        <button type="button" class="btn btn-primary btn-xs" style="background-color: #00b05c">delete</button>
                        <i class="fa fa-trash-o fa-2x"></i>
                    </a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>




<!--
<script src="{{url('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous')}} "></script>
<script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous')}}"></script>
-->


<script>{{asset('js/jj.js')}}</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


<!-- Latest compiled JavaScript -->
<script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}"></script>


<!-- jQuery library -->
<script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>


<script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>

<!--  <script src="{{asset('js/main.js')}}"></script> -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!--  <script src="{{asset('js/popper.js')}}"></script> -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>


</body>
</html>






