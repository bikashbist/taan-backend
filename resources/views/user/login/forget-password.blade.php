@extends('user.user_dashboard')
@section('content')
    <section class="mt-lg-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="login ">
                        <div class="login__form w-100  p-lg-5">
                            <h3>Change Password</h3>
                            <p> Please enter your details.</p>
                            <form action="" method="POST">


                                <div class="mb-3">
                                    <label class="py-2" for="password">Old Password</label>
                                    <input type="password" name="password" class="form-control " id="password"
                                        placeholder="Password" required>

                                </div>
                                <div class="mb-3">
                                    <label class="py-2" for="password">New Password</label>
                                    <input type="password" name="password" class="form-control " id="password"
                                        placeholder="Password" required>

                                </div>


                                <div class="mb-3">
                                    <label class="py-2" for="password">Confirm Password</label>
                                    <input type="password" name="password" class="form-control " id="password"
                                        placeholder="Password" required>

                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-login w-100">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
