@extends('backend.layouts.app')

@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Vission</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vission</li>
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
                        Edit Vission

                    </h3>
                    <a href="{{ route('vission.view') }}" class="btn btn-primary btn-sm float-right"><i class="fas fa-list"></i> Vission List</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('vission.update', $vission->id) }}" method="POST" id="myForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="title">Title</label>
                                <textarea type="text" name="title" class="form-control" rows="6">{{ $vission->title }}</textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="address">Upload Image</label>
                                <input type="file" name="image" class="form-control" id="vission_image" >
                            </div>
                            <div class="form-group col-md-4">
                                <img id="vission_image_src" src="{{ ($vission->image) ? URL::to('upload/vission_images/'.$vission->image) :  URL::to('upload/no-image-found.png')}}" style="border: 1px solid #000; width:100px; height:100px" alt="">
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
