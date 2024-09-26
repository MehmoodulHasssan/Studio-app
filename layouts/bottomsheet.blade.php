<nav id="bottom_navbar" style="display: none;" class="navbar navbar-expand fixed-bottom navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav w-100 justify-content-between align-items-center">
                <li class="nav-item">
                    <a class="nav-link active" href="../dashboard.html">
                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6.5 6.5a.5.5 0 1 0 .708.708l.646-.646V15.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-8.293l.646.646a.5.5 0 1 0 .708-.708l-6.5-6.5z" />
                            <path fill-rule="evenodd" d="M13.5 2.5v2.646l-4-4-4 4V2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5z" />
                        </svg>
                        <!-- Text -->
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user_profile_view') }}">
                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM8 9a5.978 5.978 0 0 0-4.217 1.784C3.389 12.213 4.844 14 7 14s3.611-1.787 3.217-3.216A5.978 5.978 0 0 0 8 9z" />
                        </svg>
                        <!-- Text -->
                        <span>Profile</span>
                    </a>
                </li>
                <li class="nav-item center-button">
                    <a class="nav-link" href="{{ route('create_project_view') }}">
                        <!-- Plus Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 7.5V1.5a.5.5 0 0 1 1 0v6h6a.5.5 0 0 1 0 1h-6v6a.5.5 0 0 1-1 0v-6h-6a.5.5 0 0 1 0-1h6z" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('faq_view') }}">
                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                            <path d="M8 16a8 8 0 1 1 0-16 8 8 0 0 1 0 16zm0-1a7 7 0 1 0 0-14 7 7 0 0 0 0 14z" />
                            <path d="M5.255 5.786a1.042 1.042 0 1 1 1.49-1.45c.298.33.401.604.41.935.016.606-.265 1.053-.808 1.477-.42.318-.625.63-.625 1.095a.5.5 0 1 1-1 0c0-1.209.937-1.763 1.49-2.057zm1.38 5.18a.5.5 0 1 1-.995 0 .5.5 0 0 1 .995 0z" />
                        </svg>
                        <!-- Text -->
                        <span>FAQ</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact_view') }}">
                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1h12a1 1 0 0 1 1 1v.2L8 8.69 1 4.2V4a1 1 0 0 1 1-1zm-.982 2.58L5.423 8.67l-4.403-3.09A.5.5 0 0 0 1 5h-.983z" />
                            <path d="M1 11h14a1 1 0 0 0 1-1v-.6l-7.573 5.282a1 1 0 0 1-1.117 0L1 9.4V10a1 1 0 0 0 1 1z" />
                        </svg>
                        <!-- Text -->
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>