<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container mt-5">
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <form method="post" action="{{ route('contact.store') }}">
            @csrf
            {{-- user details --}}
        <div class="row">
        <div class="col-5">
            <h3>User Section</h3><br>
            <div class="form-group">
                <label>Owner</label>
                <input type="text" class="form-control {{ $errors->has('Owner') ? 'error' : '' }}" name="Owner" id="Owner">
                <!-- Error -->
                @if ($errors->has('Owner'))
                <div class="error">
                    {{ $errors->first('Owner') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Source</label>
                <input type="text" class="form-control {{ $errors->has('Source') ? 'error' : '' }}" name="Source" id="Source">
                <!-- Error -->
                @if ($errors->has('Source'))
                <div class="error">
                    {{ $errors->first('Source') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control {{ $errors->has('First_Name') ? 'error' : '' }}" name="First_Name" id="First_Name">
                <!-- Error -->
                @if ($errors->has('First_Name'))
                <div class="error">
                    {{ $errors->first('First_Name') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control {{ $errors->has('Last_Name') ? 'error' : '' }}" name="Last_Name" id="Last_Name">
                <!-- Error -->
                @if ($errors->has('Last_Name'))
                <div class="error">
                    {{ $errors->first('Last_Name') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control {{ $errors->has('Email') ? 'error' : '' }}" name="Email" id="Email">
                @if ($errors->has('Email'))
                <div class="error">
                    {{ $errors->first('Email') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control {{ $errors->has('Title') ? 'error' : '' }}" name="Title" id="Title">
                @if ($errors->has('Title'))
                <div class="error">
                    {{ $errors->first('Title') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control {{ $errors->has('Phone') ? 'error' : '' }}" name="Phone" id="Phone">
                @if ($errors->has('Phone'))
                <div class="error">
                    {{ $errors->first('Phone') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control {{ $errors->has('Mobile') ? 'error' : '' }}" name="Mobile" id="Mobile">
                @if ($errors->has('Mobile'))
                <div class="error">
                    {{ $errors->first('Mobile') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea class="form-control {{ $errors->has('Address') ? 'error' : '' }}" name="Address" id="Address"
                    rows="4"></textarea>
                @if ($errors->has('Address'))
                <div class="error">
                    {{ $errors->first('Address') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control {{ $errors->has('City') ? 'error' : '' }}" name="City"
                    id="City">
                @if ($errors->has('City'))
                <div class="error">
                    {{ $errors->first('City') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>State</label>
                <input type="text" class="form-control {{ $errors->has('State') ? 'error' : '' }}" name="State"
                    id="State">
                @if ($errors->has('State'))
                <div class="error">
                    {{ $errors->first('State') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Country</label>
                <input type="text" class="form-control {{ $errors->has('Country') ? 'error' : '' }}" name="Country"
                    id="Country">
                @if ($errors->has('Country'))
                <div class="error">
                    {{ $errors->first('Country') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Zip_Code</label>
                <input type="text" class="form-control {{ $errors->has('Zip_Code') ? 'error' : '' }}" name="Zip_Code"
                    id="Zip_Code">
                @if ($errors->has('Zip_Code'))
                <div class="error">
                    {{ $errors->first('Zip_Code') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Facebook</label>
                <input type="text" class="form-control {{ $errors->has('Facebook') ? 'error' : '' }}" name="Facebook"
                    id="Facebook">
                @if ($errors->has('Facebook'))
                <div class="error">
                    {{ $errors->first('Facebook') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Twitter</label>
                <input type="text" class="form-control {{ $errors->has('Twitter') ? 'error' : '' }}" name="Twitter"
                    id="Twitter">
                @if ($errors->has('Twitter'))
                <div class="error">
                    {{ $errors->first('Twitter') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Linkedin</label>
                <input type="text" class="form-control {{ $errors->has('Linkedin') ? 'error' : '' }}" name="Linkedin"
                    id="Linkedin">
                @if ($errors->has('Linkedin'))
                <div class="error">
                    {{ $errors->first('Linkedin') }}
                </div>
                @endif
            </div>
        </div>
        {{-- end user details --}}
        <div class="col-2"><div class="vl"></div></div>
        {{-- company details --}}
        <div class="col-5">
            <h3>Company Section</h3><br>
            <div class="form-group">
                <label>Company Name</label>
                <input type="text" class="form-control {{ $errors->has('Company_Name') ? 'error' : '' }}" name="Company_Name" id="Company_Name">
                <!-- Error -->
                @if ($errors->has('Company_Name'))
                <div class="error">
                    {{ $errors->first('Company_Name') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Company Email</label>
                <input type="email" class="form-control {{ $errors->has('Company_Email') ? 'error' : '' }}" name="Company_Email" id="Company_Email">
                @if ($errors->has('Company_Email'))
                <div class="error">
                    {{ $errors->first('Company_Email') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Company Phone</label>
                <input type="text" class="form-control {{ $errors->has('Company_Phone') ? 'error' : '' }}" name="Company_Phone" id="Company_Phone">
                @if ($errors->has('Company_Phone'))
                <div class="error">
                    {{ $errors->first('Company_Phone') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Company Mobile</label>
                <input type="text" class="form-control {{ $errors->has('Company_Mobile') ? 'error' : '' }}" name="Company_Mobile" id="Company_Mobile">
                @if ($errors->has('Company_Mobile'))
                <div class="error">
                    {{ $errors->first('Company_Mobile') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Company Address</label>
                <textarea class="form-control {{ $errors->has('Company_Address') ? 'error' : '' }}" name="Company_Address" id="Company_Address"
                    rows="4"></textarea>
                @if ($errors->has('Company_Address'))
                <div class="error">
                    {{ $errors->first('Company_Address') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Company City</label>
                <input type="text" class="form-control {{ $errors->has('Company_City') ? 'error' : '' }}" name="Company_City"
                    id="Company_City">
                @if ($errors->has('Company_City'))
                <div class="error">
                    {{ $errors->first('Company_City') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Company State</label>
                <input type="text" class="form-control {{ $errors->has('Company_State') ? 'error' : '' }}" name="Company_State"
                    id="Company_State">
                @if ($errors->has('Company_State'))
                <div class="error">
                    {{ $errors->first('Company_State') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Company_Country</label>
                <input type="text" class="form-control {{ $errors->has('Company_Country') ? 'error' : '' }}" name="Company_Country"
                    id="Company_Country">
                @if ($errors->has('Company_Country'))
                <div class="error">
                    {{ $errors->first('Company_Country') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Company ZipCode</label>
                <input type="text" class="form-control {{ $errors->has('Company_ZipCode') ? 'error' : '' }}" name="Company_ZipCode"
                    id="Company_ZipCode">
                @if ($errors->has('Company_ZipCode'))
                <div class="error">
                    {{ $errors->first('Company_ZipCode') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Company Website</label>
                <input type="text" class="form-control {{ $errors->has('Company_Website') ? 'error' : '' }}" name="Company_Website"
                    id="Company_Website">
                @if ($errors->has('Company_Website'))
                <div class="error">
                    {{ $errors->first('Company_Website') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Company Facebook</label>
                <input type="text" class="form-control {{ $errors->has('Company_Facebook') ? 'error' : '' }}" name="Company_Facebook"
                    id="Company_Facebook">
                @if ($errors->has('Company_Facebook'))
                <div class="error">
                    {{ $errors->first('Company_Facebook') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Company Twitter</label>
                <input type="text" class="form-control {{ $errors->has('Company_Twitter') ? 'error' : '' }}" name="Company_Twitter"
                    id="Company_Twitter">
                @if ($errors->has('Company_Twitter'))
                <div class="error">
                    {{ $errors->first('Company_Twitter') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Company Linkedin</label>
                <input type="text" class="form-control {{ $errors->has('Company_Linkedin') ? 'error' : '' }}" name="Company_Linkedin"
                    id="Company_Linkedin">
                @if ($errors->has('Company_Linkedin'))
                <div class="error">
                    {{ $errors->first('Company_Linkedin') }}
                </div>
                @endif
            </div>
        </div>
        </div>
            <input type="submit" class="btn btn-dark btn-block">
        </form>
    </div>
</body>
</html>