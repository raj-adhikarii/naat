<footer id="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="widget">
                        <div><b>NAAT</b></div>
                        <p class="mb-5">Northern Light Academy of Aviation and Technology Pvt. Ltd. &nbsp;&nbsp;<br>New Baneshwor, Panchakumari Marga, Kathmandu, Nepal<br>
                            Phone: +977 1 4488991, 4489868 <br>
                            Business Hours: 10 am - 6 pm (Sunday - Friday)<br>
                            Email: info@naat147.com</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="widget">
                                <div><b>About Us</b></div>
                                <ul class="list">
                                    <li><a href="{{ route('about') }}">Why NAAT? </a></li>
                                    <li><a href="{{ route('about.who') }}">Who we are?</a></li>
                                    <li><a href="{{ route('about.our_team') }}">Our Team</a></li>
                                    <li><a href="{{ route('about.mission') }}">Mission and Vision</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="widget">
                                <div><b>Training</b></div>
                                <ul class="list">
                                    <li><a href="{{ route('cabincrew') }}">Cabin Crew Training</a></li>
                                    <li><a href="{{ route('airport') }}">Airport Ground Handling</li>
                                    <li><a href="{{ route('pilot') }}">Pilot Training</a></li>
                                    <li><a href="{{ route('aircraft') }}">Aircraft Maintenance Engineering</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-content">
        <div class="container">
            <div class="copyright-text text-center" style="color: white;">&copy; {{date('Y')}} NAAT - Northern Light Academy of Aviation and Technology Pvt. Ltd.</div>
        </div>
    </div>
</footer>
