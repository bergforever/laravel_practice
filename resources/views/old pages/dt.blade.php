<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{url('fonts/icomoon/style.css')}}">


    <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">


    <!-- Style -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('https://cdn.datatables.net/v/bs5/dt-1.11.0/datatables.min.css')}}"/>

    <title>Table #8</title>
</head>
<body>

    <div class="content">

        <div class="container">
            <h2 class="mb-5">Database Table</h2>


            <div class="table-responsive custom-table-responsive">

                <table class="table custom-table" id="datatable" style="border-style: groove">
                    <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">gro_id</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quality</th>
                        <th scope="col">Quantity</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($groceries as $grocery)
                    <tr>
                        <td>{{$grocery->name}}</td>
                        <td>{{$grocery->gro_id}}</td>
                        <td>{{$grocery->Price}}</td>
                        <td>{{$grocery->Quality}}</td>
                        <td>{{$grocery->Quantity}}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>

<script src="{{url('js/popper.min.js')}}"></script>

<script src="{{url('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('https://cdn.datatables.net/v/bs5/dt-1.11.0/datatables.min.js')}}"></script>

<script src="{{url('js/main.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#datatable').DataTable({
            "paging": false,
            "searching": true,
            "ordering": false,
            "info": false,
            "autoWidth": false,
            "responsive": false
        });
    });
</script>
</body>
</html>

