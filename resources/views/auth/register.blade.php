@extends('layouts.default')

@section('title', 'Register')

@section('content')

    <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="divider bg-lighter">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-push-3">
                                <form name="reg-form" class="register-form form-transparent" enctype="multipart/form-data"
                                    method="post" action="{{ route('registerrunner') }}">
                                    @csrf
                                    <div class="icon-box mb-0 p-0">
                                        <a href="#"
                                            class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                                            <i class="pe-7s-users"></i>
                                        </a>
                                        <h4 class="text-gray pt-10 mt-0 mb-30">Runner Registration</h4>
                                    </div>
                                    <hr>
                                    <p class="text-gray">Halo, Pelari Hebat!
                                        <br>
                                        <br>
                                        Terima kasih sudah mengunjungi website kami. Kami sangat senang menyambut Anda untuk
                                        bergabung dalam komunitas penuh semangat ini.
                                        <br>
                                        <br>
                                        Silakan isi formulir di bawah ini dengan data yang benar dan lengkap. Kami tidak
                                        sabar untuk melihat langkah-langkah hebat Anda. Selamat bergabung dan sampai jumpa
                                        di garis start!
                                    </p>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="form_runner_id">Runner ID / Runner Number</label>
                                            <input id="form_runner_id" name="runner_no" class="form-control" type="text"
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
                                            <small>The name written above will be used for submission verification. Please
                                                fill with the name which you use for race registration.
                                            </small>
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
                                        <div class="form-group col-md-12">
                                            <label for="form_password">Password</label>
                                            <input id="form_password" name="password" class="form-control" type="password">
                                            <small>Password must be at least 8 characters long.</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="form_dob">Date of Birth</label>
                                            <input id="form_dob" name="birthdate" class="form-control" type="date">
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
                                            <select id="form_city" name="city" class="form-control">
                                                <option value="" disabled selected>Select City</option>
                                                @foreach ($items as $item)
                                                    <option value="{{ $item->city_name }}">{{ $item->city_name }}</option>
                                                @endforeach
                                            </select>
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
                                            <input id="form_attachment" name="pic_profile" class="file" type="file"
                                                data-show-upload="false" data-show-caption="true">
                                            <small>Maximum upload file size: 12 MB</small>
                                            <div class="form-group">
                                                <img id="preview_image" src="#" alt="Preview"
                                                    style="max-width: 200px; display: none;" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="form_terms"
                                                    name="terms">
                                                <label class="form-check-label" for="form_terms">
                                                    I have read and agree to the terms and conditions
                                                </label>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <button class="btn btn-dark btn-lg btn-block mt-15" type="submit">Register
                                            Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <script>
        document.getElementById('form_attachment').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const preview = document.getElementById('preview_image');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }

                reader.readAsDataURL(file);
            }
        });
    </script>

@endsection
