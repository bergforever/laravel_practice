<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Booking Form HTML Template</title>

    <!-- Google font -->
    <link href="{{url('http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css')}}" />
    <link href="{{url('http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css')}}" />

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->

</head>

<body>
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="booking-bg">
                        <div class="form-header">
                            <h2 style="margin-top: 200px">Add Your Product</h2>
                        </div>
                    </div>
                    <form action="{{url('store2')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">id</span>
                                    <input class="form-control" type="text" name="name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">name</span>
                                    <input class="form-control" type="text" name="price"  required>
                                </div>
                            </div>
                        </div>


                        <div class="form-btn">
                            <button class="submit-btn" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="{{url('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
<script src="{{url('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
</body>

</html>
