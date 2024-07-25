@extends('admin.admin_dashboard')

@section('admin')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Member</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Member</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Create</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Create Member</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('members.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="name">Company Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Company Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email2">Email Address</label>
                                        <input type="email" name="email" class="form-control" id="email2" placeholder="Enter Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="PAN">Company PAN</label>
                                        <input type="text" name="pan" class="form-control" id="PAN" placeholder="Enter Company PAN" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="number">Member Unique Number</label>
                                        <input type="text" name="companyNumber" class="form-control" id="number" placeholder="Unique Number" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card-action">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
