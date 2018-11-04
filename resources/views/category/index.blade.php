@extends('admin.main')

@section('content')
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

    <!-- Page Content -->
      <h1>Category Control</h1>
      <hr>
      <p>This is a great starting point for new custom pages.</p>
@endsection