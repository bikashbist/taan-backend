@extends('user.user_dashboard')
@section('content')
    <section class="about-us mt-lg-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="login  register">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="p-lg-5">
                                    <h3>Apply for Membership</h3>
                                    {{-- <p>Welcome Back! Please inter your details.</p> --}}
                                    <form class="row" action="{{ route('members.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-lg-6 mb-3">
                                            <label for="company_name" class="form-label"> Name</label>
                                            <input type="text" id="company_name" name="company_name" class="form-control"
                                                placeholder=" Name" required>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="company_email" class="form-label"> Email</label>
                                            <input type="email" id="company_email" name="company_email"
                                                class="form-control" placeholder="Email" required>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="phone_number" class="form-label">Phone Number</label>
                                            <input type="text" id="phone_number" name="phone" class="form-control"
                                                placeholder=" Phone Number" required>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="c_pan" class="form-label">Upload PAN </label>
                                            <input class="form-control" type="file" name="c_pan" id="c_pan"
                                                required>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="c_register" class="form-label">Upload Company Register File</label>
                                            <input class="form-control" type="file" name="c_register" id="c_register"
                                                required>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="t_clearanc" class="form-label">Tax Clearance Certificate</label>
                                            <input class="form-control" type="file" name="t_clearanc" id="t_clearanc"
                                                required>
                                        </div>
                                        <br>
                                        <div class="col-lg-6">
                                            <button type="submit" class="btn btn-login w-100">Apply Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-5">

                                <img width="100%" height="100%" src="{{ asset('user/images/hikin.png') }}"
                                    alt="img">

                            </div>

                        </div>



                    </div>
                </div>
                {{-- <div class="col-lg-5">
                    <div class="login p-lg-5">
                        <h3>Become a Member</h3>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="company_name" class="form-label">Company Name</label>
                                <input type="text" id="company_name" name="company_name" class="form-control" placeholder="Company Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="company_email" class="form-label">Company Email</label>
                                <input type="email" id="company_email" name="company_email" class="form-control" placeholder="Company Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="c_pan" class="form-label">Upload PAN Number</label>
                                <input class="form-control" type="file" name="c_pan" id="c_pan"  required>
                            </div>
                            <div class="mb-3">
                                <label for="c_register" class="form-label">Upload Company Register File</label>
                                <input class="form-control" type="file" name="c_register" id="c_register" required>
                            </div>

                            <div class="">
                                <button type="submit" class="btn btn-login w-100">Apply Now</button>
                            </div>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="container py-lg-5 py-3">
            <div class="row">
                <div class="col-lg-12 mx-auto">

                    <p><span><strong>For Membership</strong></span></p>

                    <p><strong>General Members:</strong> All trekking agencies registered with the Government of Nepal
                        (GoN)
                        can apply for the general membership of Trekking Agencies' Association of Nepal (TAAN).
                        <strong>TAAN
                            levies a fee of Rs 12,000 for general membership which has to be renewed every year by
                            paying
                            renewal fee of Rs 5,000.</strong> Interested companies are required to submit following
                        documents:
                    </p>

                    <ul>
                        <li>Official request letter in the letter pad of the agency signed by the key person and with
                            stamp.
                        </li>
                        <li>License to operate trekking business issued by the Department of Tourism (DoT) under the
                            Ministry of Culture, Tourism and Civil Aviation</li>
                        <li>Business registration certificate issued by the Department of Small and Cottage Industries.
                        </li>
                        <li>PAN/VAT Registration Certificate</li>
                        <li>Certificate of Incorporation of Company issued by the Office of the Company Registrar.</li>
                        <li>Copies of Artilces of Association (Prabandhapatra) and Articles of Memorandum (Niyamabali).
                        </li>
                        <li>Copy of license issued by Nepal Rastra Bank for foreign exchange transactions.</li>
                        <li>Citizenship certificates and PP photographs of shareholders</li>
                    </ul>

                    <p><em>TAAN executive committee will approve the membership after going through the documents.</em>
                    </p>

                    <p><strong>Associate Members:</strong> Organizations (both local and international) can apply for
                        associate membership of TAAN. Associate members, however, will not have voting right in the
                        association. <strong>TAAN levies a fee of Rs 8,000 for associate membership for organizations
                            registered under the Government of Nepal which has to be renewed every year by paying
                            renewal
                            fee of Rs 3,000.</strong> <strong>Similarly, foreign organizations need to pay US$ 100
                            annually.</strong><br>
                        Interested organizations are required to submit following documents:</p>

                    <ul>
                        <li>&nbsp;&nbsp;&nbsp; Official request letter in the letter pad of the organization.</li>
                        <li>&nbsp;&nbsp;&nbsp; Copies of registration and other supporting document issued by their
                            respective countries.</li>
                    </ul>

                    <p>TAAN Executive Committee, however, can reject the application without showing any reason
                        whatsoever.
                    </p>

                    <p><strong>Honorary Members:</strong> TAAN can confer honorary membership on personalities (both
                        Nepalis
                        and foreigners) or organizations (both local and international) making significant contribution
                        for
                        the promotion of Nepal's tourism industry for a period of one year. However, it has to be
                        endorsed
                        by two-third majority of the association's executive committee.</p>



                </div>
            </div>
            
        </div>
    </section>
@endsection
