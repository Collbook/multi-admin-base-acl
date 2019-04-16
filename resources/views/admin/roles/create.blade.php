@extends('admin.layouts.app')
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
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            @include('includes.messages')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('role.store') }}" method="post">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="col-lg-offset-3 col-lg-6">
                  <div class="form-group">
                    <label for="name">Role title</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="role Title">
                  </div>

                  <div class="row">
                    <div class="col-lg-4">
                      <label for="name">Posts Permissions</label>
                      @foreach ($permissions as $permission)
                      @if ($permission->for == 'post')
                      <div class="checkbox">
                        <label><input type="checkbox" name="permission[]"
                            value="{{ $permission->id }}">{{ $permission->name }}</label>
                      </div>
                      @endif
                      @endforeach
                    </div>
                    <div class="col-lg-4">
                      <label for="name">User Permissions</label>
                      @foreach ($permissions as $permission)
                      @if ($permission->for == 'user')
                      <div class="checkbox">
                        <label><input type="checkbox" name="permission[]"
                            value="{{ $permission->id }}">{{ $permission->name }}</label>
                      </div>
                      @endif
                      @endforeach
                    </div>

                    <div class="col-lg-4">
                      <label for="name">Other Permissions</label>
                      @foreach ($permissions as $permission)
                      @if ($permission->for == 'other')
                      <div class="checkbox">
                        <label><input type="checkbox" name="permission[]"
                            value="{{ $permission->id }}">{{ $permission->name }}</label>
                      </div>
                      @endif
                      @endforeach
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href='{{ route('role.index') }}' class="btn btn-warning">Back</a>
                  </div>

                </div>

              </div>

            </form>
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