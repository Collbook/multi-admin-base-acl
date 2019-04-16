@extends('admin.layouts.app')
@section('css')
<link rel="stylesheet"
  href="{{ asset('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

@endsection
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Table With Full Features</h3>
            @can('posts.create', Auth::user())
            <div class="card-tools">
              <a href="{{ route("post.create") }}" class="btn btn-sm btn-primary">Create Post</a>
            </div>
            @endcan
          </div>

          <!-- /.card-header -->
          <div class="card-body">
            @include('includes.messages')
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Title</th>
                  <th>Created_at</th>
                  <th>Updated_at</th>
                  @can('posts.update', Auth::user())
                  <th>Updated</th>
                  @endcan

                  @can('posts.delete', Auth::user())
                  <th>Delete</th>
                  @endcan



                </tr>
              </thead>
              <tbody>
                @foreach ($posts as $key => $post)
                <tr>
                  <td>{{ ++$key }}</td>
                  <td>
                    {{ $post->title }}
                  </td>
                  <td>{{ $post->created_at }}</td>
                  <td> {{ $post->updated_at }}</td>
                  @can('posts.update', Auth::user())
                  <td>
                    <a href="{{ route('post.edit',$post->id) }}"><i class="fa fa-edit"></i></a>
                  </td>
                  @endcan

                  @can('posts.delete', Auth::user())
                  <td>

                    <form id="delete-form-{{ $post->id }}" method="post" action="{{ route('post.destroy',$post->id) }}"
                      style="display: none">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                    </form>
                    <a href="" onclick="
                    if(confirm('Are you sure, You Want to delete this?'))
                        {
                          event.preventDefault();
                          document.getElementById('delete-form-{{ $post->id }}').submit();
                        }
                        else{
                          event.preventDefault();
                        }"><i class="fa fa-trash"></i>
                    </a>
                  </td>
                  @endcan
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>

                  @can('posts.update', Auth::user())
                  <th>Updated </th>
                  @endcan

                  @can('posts.delete', Auth::user())
                  <th>Delete </th>
                  @endcan

                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@endsection

@section('js')
<!-- DataTables -->
<script src="{{ asset('assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endsection