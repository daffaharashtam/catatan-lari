@extends('layouts.default')

@section('title', 'Edit Profile')

@section('content')

    <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="divider bg-lighter">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-push-3">
                                <form name="reg-form" class="register-form form-transparent" method="post">
                                    <hr>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="form_runner_id">Runner ID / Runner Number</label>
                                            <input id="form_runner_id" name="runner_id" class="form-control" type="text"
                                                pattern="(?=.*[A-Z])(?=.*[0-9])[A-Z0-9]{6}" maxlength="6"
                                                oninput="this.value = this.value.toUpperCase()">
                                            <small>Enter a 6-character Runner ID (e.g., RUN001). Use uppercase letters and
                                                numbers only.</small>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="form_name">Name</label>
                                            <input id="form_name" name="name" class="form-control" type="text">
                                            <small>The name written above will be used for submission verification.</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="form_email">Email</label>
                                            <input id="form_email" name="email" class="form-control" type="email">
                                            <small>Please enter a valid email address.</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="form_dob">Date of Birth</label>
                                            <input id="form_dob" name="date_of_birth" class="form-control" type="date">
                                            <small>Enter your birth date.</small>
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="form_gender">Gender</label>
                                            <select id="form_gender" name="gender" class="form-control">
                                                <option value="" disabled selected>Select Gender</option>
                                                <option value="1">Male</option>
                                                <option value="0">Female</option>
                                            </select>
                                            <small>Please select your gender.</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="form_city">City</label>
                                            <input id="form_city" name="city" class="form-control" type="text">
                                            <small>Enter the city where you currently live.</small>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="form_status">Status</label>
                                            <small> (public / private)</small>
                                            <select id="form_status" name="status" class="form-control">
                                                <option value="1">Public</option>
                                                <option value="0">Private</option>
                                            </select>
                                            <small>Choose whether your profile is public or private.</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="form_attachment">Profile Picture</label>
                                            <small>(Ratio 1:1)</small>
                                            <input id="form_attachment" name="profile_picture" class="file" type="file"
                                                data-show-upload="false" data-show-caption="true">
                                            <small>Maximum upload file size: 12 MB</small>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-dark btn-lg btn-block mt-15" type="submit">Edit
                                            Profile</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6 col-md-push-3">
                                <form name="change-password-form" class="register-form form-transparent" method="post">
                                    <hr>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="current_password">Current Password</label>
                                            <input id="current_password" name="current_password" class="form-control"
                                                type="password">
                                            <small>Enter your current password.</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="new_password">New Password</label>
                                            <input id="new_password" name="new_password" class="form-control"
                                                type="password">
                                            <small>Password must be at least 8 characters long.</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="confirm_password">Confirm New Password</label>
                                            <input id="confirm_password" name="confirm_password" class="form-control"
                                                type="password">
                                            <small>Re-enter your new password for confirmation.</small>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-dark btn-lg btn-block mt-15" type="submit">Change
                                            Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
