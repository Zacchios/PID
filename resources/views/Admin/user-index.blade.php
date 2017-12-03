@extends('layouts.admin')

@section('nav')
    @include('Admin.navadmin')
@endsection

@section('left')
    @include('Admin.Leftpanel')
@endsection

@section('right')





            <h2>Users list</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Firstname</th>
                        <th>email</th>
                        <th>Role</th>
                    </tr>
                    </thead>
                    <tbody>


                        @include('admin/users-table',compact('$users'))


                    </tbody>
                </table>
            </div>

@endsection
