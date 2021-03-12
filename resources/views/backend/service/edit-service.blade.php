@extends('backend.layouts.app')

@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Service</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Service</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            @include('validation')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Edit Service

                    </h3>
                    <a href="{{ route('service.view') }}" class="btn btn-primary btn-sm float-right"><i class="fas fa-list"></i> Service List</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('service.update', $service->id) }}" method="POST" id="myForm">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title"  value="{{ $service->title }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="sub_title">Sub Title</label>
                                <textarea type="text" name="sub_title" class="form-control" rows="6" >{{ $service->sub_title }}</textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="submit" name="submit" class="btn btn-success" value="Update">
                            </div>
                        </div>
                    </form>
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
