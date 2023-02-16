@extends('admin.layouts.app')

@section('content-admin')
    <div class="content">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Change Password</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Change Password</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            @include('admin.layouts._message')
                            <form id="quickForm" method="post" action="{{ route('upatePassword', $admin->id) }}">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Old Password</label>
                                        <input type="password" class="form-control" id="current_password" placeholder="Enter Current Password" name="current_password" >
                                        <p id="correct_password"></p>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1"> New Password</label>
                                        <input type="password" class="form-control" id="pass_confirmation" placeholder="Enter New Password" name="password">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1"> Confirm Password</label>
                                        <input type="password" class="form-control" id="pass" placeholder="Confirm Password" name="pass_confirmation" >
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update password</button>
                                </div>
                            </form>
                        </div>

                    </div>


                    <div class="col-md-6">
                    </div>

                </div>

            </div>
        </section>

    </div>

@endsection
@section('js')
    <script>
        $("#current_password").keyup( function () {
            var current_password = $("#current_password").val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: 'check-password',
                data: {
                    current_password:current_password},
                success: function (resp) {
                    if(resp =="true"){
                        $("#correct_password").text("Current Password Matches").css("color", "green");
                    } else if (resp =="false"){
                        $("#correct_password").text("Password Does Not Match").css("color", "rgb(185, 74, 72)");
                    }
                }, error: function (resp) {
                    alert("Error");
                }
            });
        });
    </script>
@endsection






