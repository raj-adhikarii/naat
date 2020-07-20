<!DOCTYPE html>
<html lang="en">
@include('front.includes.header')
@yield('styles')
<body>
<div class="body-inner">
    @include('front.includes.bar')

    @include('front.includes.navbar')

    @yield('content')

    @include('front.includes.footer')

    <div id="modalApplyOnlineForm" class="modal no-padding" style="max-width: 1000px;">
        <div class="row">
            <div class="col-md-5" style="background: url({{asset('public/img/apply-online-900x350.jpg') }}) no-repeat; background-size: cover;
                    background-position: center top;"></div>
            <div class="col-md-7">
                <div class="p-20">
                    <h3>Apply Online</h3>
                    <p>Apply for your interested course now.</p>
                    <form class="form-grey-fields" method="POST" action="{{ route('apply.online') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Name *</label>
                                <input placeholder="Your name" class="form-control" name="name" type="text" value="{{ old('name') }}" required/>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Location *</label>
                                <input placeholder="Your location" class="form-control" name="location" type="text" value="{{ old('location') }}" required/>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email *</label>
                                <input placeholder="Your email" class="form-control" name="email" type="email" value="{{ old('email') }}" required/>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Mobile *</label>
                                <input placeholder="Your Mobile number" class="form-control" name="mobile" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="{{ old('mobile') }}" required/>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Telephone</label>
                                <input placeholder="Your telephone number" class="form-control" name="telephone" type="text" value="{{ old('telephone') }}" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Course Interested *</label>
                                <select class="form-control" name="course" required>
                                    <option value="Cabin Crew Training" @if( old('course') == 'Cabin Crew Training' ) selected @endif>Cabin Crew Training</option>
                                    <option value="Airport Ground Handling" @if( old('course') == 'Airport Ground Handling' ) selected @endif>Airport Ground Handling</option>
                                    <option value="Pilot Training" @if( old('course') == 'Pilot Training' ) selected @endif>Pilot Training</option>
                                    <option value="Aircraft Maintenance Engineering" @if( old('course') == 'Aircraft Maintenance Engineering' ) selected @endif>Aircraft Maintenance Engineering</option>
                                    <option value="Flight Dispatcher" @if( old('course') == 'Flight Dispatcher' ) selected @endif>Flight Dispatcher</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Date of birth *</label>
                                <input placeholder="Your DOB" class="form-control" name="dob" type="date" value="{{ old('dob') }}" required/>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Height (in cm) *</label>
                                <input placeholder="Your Height in cm" class="form-control" name="height" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="{{ old('height') }}" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Gender *</label>
                                <label class="custom-control custom-radio" style="display: inline-block;">
                                    <input name="gender" type="radio" class="custom-control-input" value="Male" checked="">
                                    <span class="custom-control-label">Male</span>
                                </label>
                                <label class="custom-control custom-radio" style="display: inline-block;margin-left:25px;">
                                    <input name="gender" type="radio" class="custom-control-input" value="Female" @if( old('gender') == 'Female') checked @endif>
                                    <span class="custom-control-label">Female</span>
                                </label>
                            </div>
                            <div class="form-group col-md-8">
                                <label>Message</label>
                                <textarea placeholder="Any message" class="form-control" name="message" rows="2" style="resize: none">{{ old('message') }}</textarea>
                            </div>
                        </div>
                        <div class="text-left">
                            <button class="btn btn-grad" style="color: white;padding: 14px 20px;border-radius:5px;" type="submit">Apply Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<a id="scrollTop"><i class="icon-chevron-up1"></i><i class="icon-chevron-up1"></i></a>
<script src="{{ asset('public/front/js/jquery.js') }}"></script>
<script src="{{ asset('public/front/js/plugins.js') }}"></script>

<script src="{{ asset('public/front/js/functions.js') }}"></script>
<script src="{{ asset('public/front/js/sweetalert.min.js') }}"></script>
@include('sweet::alert')
@yield('scripts')
</body>
</html>
