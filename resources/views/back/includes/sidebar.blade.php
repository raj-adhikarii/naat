<div class="sidebar" data-color="purple" data-image="{{ asset('public/img/sidebar-5.jpg') }}">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ route('admin.home') }}" class="simple-text">
                    {{ config('app.name') }}
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{ route('admin.home') }}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li>
                    <a href="{{ route('events.index') }}">
                        <i class="pe-7s-display1"></i>
                        <p>Events</p>
                    </a>
                </li>

                <li>
                    <a href="{{ route('albums.index') }}">
                        <i class="pe-7s-photo-gallery"></i>
                        <p>Gallery</p>
                    </a>
                </li>

                <li>
                    <a href="{{ route('contactqueries.index') }}">
                        <i class="pe-7s-comment"></i>
                        <p>Contact</p>
                    </a>
                </li>

                <li>
                    <a href="{{ route('testimonials.index') }}">
                        <i class="pe-7s-ticket"></i>
                        <p>Testimonials</p>
                    </a>
                </li>

                <li>
                    <a href="{{ route('online_applications') }}">
                        <i class="pe-7s-id"></i>
                        <p>Online Applications</p>
                    </a>
                </li>

                <li>
                    <a href="{{ route('stories.index') }}">
                        <i class="pe-7s-smile"></i>
                        <p>Success Stories</p>
                    </a>
                </li>

                <li>
                    <a href="{{ route('teams.index') }}">
                        <i class="pe-7s-users"></i>
                        <p>Team</p>
                    </a>
                </li>

                <li>
                    <a href="{{ route('logout') }}">
                        <i class="pe-7s-angle-left"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
