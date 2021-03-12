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
                        Vission List

                    </h3>
                    @if($vission_count < 1)
                    <a href="{{ route('vission.add') }}" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus-circle"></i> Add Vission</a>
                    @endif
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($all_vission as $vission)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ Str::words($vission->title,  50, '...') }}</td>
                                <td><img src="{{ ($vission->image) ? URL::to('upload/vission_images/'.$vission->image) :  URL::to('upload/no-image-found.png')}}" alt="" width="50px" width="50px"></td>
                                <td>
                                    <a href="{{ route('vission.edit', $vission->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                    <a id="user_delete" href="{{ route('vission.delete', $vission->id) }}"   class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
