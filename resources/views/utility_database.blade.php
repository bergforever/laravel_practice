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
        </div>
    </div>
</div>


<!--for demo wrap-->
<h1 style="margin-top: -100px">Fixed Table header</h1>
<div class="tbl-header">
    <table>
        <thead>
        <tr style="border-style: dashed">
            <th>Commodity Id</th>
            <th>commodity name</th>
            <th>commodity price</th>
            <th>commodity_quantity</th>
            <th>modify</th>


        </tr>
        </thead>
    </table>
</div>

<div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
        <tbody>
        @foreach($utility_stores as $utility_store)
            <tr>
                <td>{{$utility_store->commodity_id}}</td>
                <td>{{$utility_store->commodity_name}}</td>
                <td>{{$utility_store->commodity_price}}</td>
                <td>{{$utility_store->commodity_quantity}}</td>

                <td>
                    <a href="{{url('delete_commodity/'.$utility_store->id)}}">
                        <button type="button" class="btn btn-primary btn-xs" style="background-color: #00b05c">delete</button>
                    </a>

                    <a href="{{url('edit_commodity/'.$utility_store->id)}}">
                        <button type="button" class="btn btn-primary btn-xs" style="background-color: #00b05c">edit</button>
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





