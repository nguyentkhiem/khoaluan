@extends('backend.Master.master')
@section('title', 'Danh sách Admin')
@section('main')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Ảnh đại diện</th>
                <th>Cấp độ</th>
              </tr>
            </thead>
            <tbody>
                @foreach($admins as $admin)
                  <tr>
                    <td>{{ $admin->user_id }}</td>
                    <td>{{ $admin->user_name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td><img src="{{asset('storage/avatar/'.$admin->user_img)}}" class="img-thumbnail"></td>
                    <th>Quản trị viên</th>
                  </tr>
                @endforeach
            </tbody>
          </table>
                </div>
            </div>
        </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->

@stop
 