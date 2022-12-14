@extends('layouts.admin')

@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">New Food Items </h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/admin/food-items" class="breadcrumb-link">All Food Items</a></li>
                            <li class="breadcrumb-item active" aria-current="page">New Food Items</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== --> 
    <div class="row">
        <!-- ============================================================== -->
        <!-- basic form -->
        <!-- ============================================================== -->
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header"> Create a new item </h5>
                <div class="card-body">
                    <form action="#" id="basicform" data-parsley-validate="">
                        <div class="form-group">
                            <label for="inputItem"> Item Name </label>
                            <input id="inputItem" type="text" name="title" data-parsley-trigger="change" required="" placeholder="Enter item name" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputItem"> Price </label>
                            <input id="inputItem" type="text" name="price" data-parsley-trigger="change" required="" placeholder="Enter item price" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputItemImageUrl"> Item Image URL </label>
                            <input id="inputItemImageUrl" type="text" name="image_url" data-parsley-trigger="change" required="" placeholder="http://www.reds.com/img/burgers.jpg" autocomplete="off" class="form-control">
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                
                            </div>
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                    <button type="submit" class="btn btn-space btn-primary"> Submit </button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end basic form -->
        <!-- ============================================================== -->            
    </div>
</div>
@endsection



