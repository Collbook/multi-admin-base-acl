@extends('admin.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

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
              <div class="card-tools">
                  <a href="{{ route("user.create") }}" class="btn btn-sm btn-primary">Create user</a>
              </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              @include('includes.messages')

              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>User Name</th>
                    <th>Assigned Roles</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($users as $user)
                    <tr>
                      <td>{{ $loop->index + 1 }}</td>
                      <td>{{ $user->name }}</td>
                      <td>
                        @foreach ($user->roles as $role)
                          {{ $role->name }},
                        @endforeach
                      </td>
                      <td>{{ $user->status? 'Active' : 'Not Active' }}</td>
                        <td><a href="{{ route('user.edit',$user->id) }}"><i class="fa fa-edit"></i></a></td>
                        <td>
                          <form id="delete-form-{{ $user->id }}" method="post" action="{{ route('user.destroy',$user->id) }}" style="display: none">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                          </form>
                          <a href="" onclick="
                          if(confirm('Are you sure, You Want to delete this?'))
                              {
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $user->id }}').submit();
                              }
                              else{
                                event.preventDefault();
                              }" ><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                    </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>S.No</th>
                    <th>User Name</th>
                    <th>Assigned Roles</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
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