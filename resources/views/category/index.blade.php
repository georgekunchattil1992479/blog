@extends('admin.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
             <!-- Page Content -->
            <h1 class="page-header">
                 Category Control
                <small>Sub Heading</small>
            </h1>

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Blank Page</li>
            </ol>

            <nav class="navbar navbar-inverse">
                <ul class="nav navbar-nav">
                    <li><a href="">View All Category</a></li>
                    <li><a href="">Create New Category</a></li>
                 </ul>
            </nav>
        </div>
    </div>
@endsection