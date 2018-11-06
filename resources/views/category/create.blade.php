@extends('admin.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
             <!-- Page Content -->
            <h1 class="page-header">
                 Create New Category
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
                    <li><a href="category/create">Create New Category</a></li>
                 </ul>
            </nav>

            @if(Session::has('category_create'))
            <div class="alert alert-success">
                  <em>{!! session('category_create') !!} </em>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times</span></button>
            </div>

            <div class="panel-body">

                  {!! Form::open(array('url'=>'category'))!!}

                  {!! Form::label('name', 'Name:') !!}
                  {!! Form::text('name', null, array('class'=>'form-control')) !!}

                  {!! Form::submit('Create Category', array('class'=>'secondary-cart-btn')) !!}
                  {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection