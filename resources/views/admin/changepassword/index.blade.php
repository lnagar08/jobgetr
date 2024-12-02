@extends('layouts.admin')
@section('title', 'change Password')
@section('content')
<style>
    .user-work {
        margin: 0px auto;
        position: relative;
        top: -6px;
    }

    .cursor-pointer {
        cursor: pointer;
    }

    .error-message {
        color: red;
        margin-top: 5px;
    }
</style>
<!-- BEGIN CONTENT AREA -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="page-header">
            <div class="page-title">
                <h3>Change Password</h3>
            </div>
        </div>

        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="general-info section general-infomain">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
                <form action="{{ url('admin/change-password/update/' . auth()->guard('admin')->user()->id) }}" method="post"
                    id="changePasswordForm">
                    @csrf
                            <div class="form-group">
                                <label>Old Password</label>
                                <input type="password" required class="form-control" name="oldPassword" placeholder="old password" id="oldPassword">
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" required class="form-control" name="newPassword" placeholder="new password" id="newPassword">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" required class="form-control" name="confirmPassword" placeholder="confirm password" id="confirmPassword">
                                <div class="error-message" id="errorMessage"></div>
                            </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function () {
        $(".toggle-password").click(function () {
            var passwordField = $($(this).attr("toggle"));
            var icon = $(this).find("i");

            if (passwordField.attr("type") == "password") {
                passwordField.attr("type", "text");
                icon.removeClass("fa-eye").addClass("fa-eye-slash");
            } else {
                passwordField.attr("type", "password");
                icon.removeClass("fa-eye-slash").addClass("fa-eye");
            }
        });

        // Client-side validation
        $("#changePasswordForm").submit(function (e) {
            var newPassword = $("#newPassword").val();
            var confirmPassword = $("#confirmPassword").val();

            if (newPassword !== confirmPassword) {
                $("#errorMessage").text("New password and confirm password do not match.");
                e.preventDefault(); // Prevent the form from submitting
            } else {
                $("#errorMessage").text(""); // Clear the error message if the passwords match
            }
        });
    });
</script>
@endsection
