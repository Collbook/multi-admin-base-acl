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
                    @include('includes.messages')
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form role="form" action="{{ route('user.update',$user->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">User Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="User Name"
                                            value="@if (old('name')){{ old('name') }}@else{{ $user->name }}@endif">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="email"
                                            value="@if (old('email')){{ old('email') }}@else{{ $user->email }}@endif">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="phone"
                                            value="@if (old('phone')){{ old('phone') }}@else{{ $user->phone }}@endif">
                                    </div>

                                    <div class="form-group">
                                        <label for="confirm_passowrd">Status</label>
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="status" @if (old('status')==1 ||
                                                    $user->status == 1)
                                                checked
                                                @endif value="1">Status</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Assign Role</label>
                                            <div class="row">
                                                @foreach ($roles as $role)
                                                <div class="col-lg-4">
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="role[]" value="{{ $role->id }}"
                                                                @foreach ($user->roles as $user_role)
                                                            @if ($user_role->id == $role->id)
                                                                checked
                                                            @endif
                                                            @endforeach> {{ $role->name }}</label>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <a href='{{ route('user.index') }}' class="btn btn-warning">Back</a>
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