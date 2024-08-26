@extends('masterPage')

@section('content')
{{-- <link rel="stylesheet" href="{{ asset('css/ramiusertyleinpage.css')}}">

<link rel="stylesheet" href="{{ asset('css/userramistyle.css')}}" />
    <!-- Demo CSS (No need to include it into your project) -->
    <link rel="stylesheet" href="{{ asset('css/userramidemo.css')}}" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet" /> --}}


<div class="breadcrumb-bar">
    <div class="container">
    <div class="row align-items-center text-center">
    <div class="col-md-12 col-12">
    <h2 class="breadcrumb-title">{{$user->name }} Cars </h2>
    <nav aria-label="breadcrumb" class="page-breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index-2.html">Home/</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $user->name }} User Information
    </li>
    </ol>
    </nav>
    </div>
    </div>
    </div>
    </div>
<div class="container">
<div class="dashboard-nav">
            <ul class="nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('user/user-info') ? 'active' : '' }}" href="{{ route('user.user-info') }}">Edit Profile</a>
            </li>
            <li class="nav-item">
                {{-- <a class="nav-link {{ request()->is('user/rental-request-center') ? 'active' : '' }}" href="{{ route('user.rental-request-center') }}">Rental Requests</a> --}}
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('user/rental-history-center') ? 'active' : '' }}" href="{{ route('user.rental-history-center') }}">Rental History</a>
            </li>


            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Log-out</a>
                </li> --}}
            </ul>
        </div>
</div>

<div class="container mt-5">
    <h2>User Information</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
                <form action="{{ route('user.user-info.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image">Profile Image</label>
                        <div class="mb-3">
                            <img src="{{url("/user_images/".$user->image) }}" alt="Profile Image" class="img-thumbnail"
                                width="150">
                        </div>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>

                    <div class="form-group mt-3">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"
                            required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}"
                            required>
                    </div>



                    <div class="form-group mt-3">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                    </div>



                    <button type="submit" class="btn btn-primary mt-4">Save Changes</button>
                </form>
    
        <!-- Start DEMO HTML (Use the following code into your project)-->
        {{-- <div class="profile-page">
            <div class="content">
                <div class="content__cover" style="position: relative">
                    <div class="my_user_image"></div>
                    <div class="content__bull">
                        <span></span><span></span><span></span><span></span><span></span>
                    </div>
                </div>
                <div class="content__actions">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path fill="currentColor"
                                d="M192 256A112 112 0 1 0 80 144a111.94 111.94 0 0 0 112 112zm76.8 32h-8.3a157.53 157.53 0 0 1-68.5 16c-24.6 0-47.6-6-68.5-16h-8.3A115.23 115.23 0 0 0 0 403.2V432a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48v-28.8A115.23 115.23 0 0 0 268.8 288z">
                            </path>
                            <path fill="currentColor"
                                d="M480 256a96 96 0 1 0-96-96 96 96 0 0 0 96 96zm48 32h-3.8c-13.9 4.8-28.6 8-44.2 8s-30.3-3.2-44.2-8H432c-20.4 0-39.2 5.9-55.7 15.4 24.4 26.3 39.7 61.2 39.7 99.8v38.4c0 2.2-.5 4.3-.6 6.4H592a48 48 0 0 0 48-48 111.94 111.94 0 0 0-112-112z">
                            </path>
                        </svg>
                        <span>Wishlist</span>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                                d="M208 352c-41 0-79.1-9.3-111.3-25-21.8 12.7-52.1 25-88.7 25a7.83 7.83 0 0 1-7.3-4.8 8 8 0 0 1 1.5-8.7c.3-.3 22.4-24.3 35.8-54.5-23.9-26.1-38-57.7-38-92C0 103.6 93.1 32 208 32s208 71.6 208 160-93.1 160-208 160z">
                            </path>
                            <path fill="currentColor"
                                d="M576 320c0 34.3-14.1 66-38 92 13.4 30.3 35.5 54.2 35.8 54.5a8 8 0 0 1 1.5 8.7 7.88 7.88 0 0 1-7.3 4.8c-36.6 0-66.9-12.3-88.7-25-32.2 15.8-70.3 25-111.3 25-86.2 0-160.2-40.4-191.7-97.9A299.82 299.82 0 0 0 208 384c132.3 0 240-86.1 240-192a148.61 148.61 0 0 0-1.3-20.1C522.5 195.8 576 253.1 576 320z">
                            </path>
                        </svg>
                        <span>Rental History</span>
                    </a>
                </div>
                <div style="margin-bottom: 0.1rem;
  font-size: 2.4rem;" class="content__title">
                    <h1 style="color: black;">{{ $user->name }}</h1>
                </div>
                <form action="{{ route('user.user-info.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image">Profile Image</label>
                        <div class="mb-3">
                            <img src="{{url("/user_images/".$user->image) }}" alt="Profile Image" class="img-thumbnail"
                                width="150">
                        </div>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>

                    <div class="form-group mt-3">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"
                            required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}"
                            required>
                    </div>



                    <div class="form-group mt-3">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                    </div>



                    <button type="submit" class="btn btn-primary mt-4">Save Changes</button>
                </form>
            </div>
            <div class="bg">
                <div>
                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
            </div>
        </div> --}}

    

    {{-- @vite(['resources/css/userramidemo.css'])
    @vite(['resources/css/ramiusertyleinpage.css'])
    @vite(['resources/css/userramistyle.css']) --}}


    {{-- <script>
        (() => {

  'use-strict'

  const themeSwiter = {

    init: function() {
      this.wrapper = document.getElementById('theme-switcher-wrapper')
      this.button = document.getElementById('theme-switcher-button')
      this.theme = this.wrapper.querySelectorAll('[data-theme]')
      this.themes = ['theme-orange', 'theme-purple', 'theme-green', 'theme-blue']
      this.events()
      this.start()
    },
    
    events: function() {
      this.button.addEventListener('click', this.displayed.bind(this), false)
      this.theme.forEach(theme => theme.addEventListener('click', this.themed.bind(this), false))
    },

    start: function() {
      let theme = this.themes[Math.floor(Math.random() * this.themes.length)]
      document.body.classList.add(theme)
    },

    displayed: function() {
      (this.wrapper.classList.contains('is-open'))
        ? this.wrapper.classList.remove('is-open')
        : this.wrapper.classList.add('is-open')
    },

    themed: function(e) {
      this.themes.forEach(theme => {
        if(document.body.classList.contains(theme))
          document.body.classList.remove(theme)
      })
      return document.body.classList.add(`theme-${e.currentTarget.dataset.theme}`)
    }

  }

  themeSwiter.init()

})()
        </script> --}}
</div>
@endsection
