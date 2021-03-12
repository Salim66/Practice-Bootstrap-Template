@extends('backend.layouts.app')

@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Slider</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Slider</li>
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
                        Slider List

                    </h3>
                    <a href="{{ route('slider.add') }}" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus-circle"></i> Add Slider</a>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($all_slider as $slider)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $slider->title }}</td>
                                <td>{{ $slider->sub_title }}</td>
                                <td><img src="{{ ($slider->image) ? URL::to('upload/slider_images/'.$slider->image) :  URL::to('upload/no-image-found.png')}}" alt="" width="50px" width="50px"></td>
                                <td>
                                    <a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                    <a id="user_delete" href="{{ route('slider.delete', $slider->id) }}"   class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
