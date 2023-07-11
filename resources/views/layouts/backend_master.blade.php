<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Outdor 5" />

    <title>Outdor 5</title>

    <link rel="stylesheet" href="{{asset('/css/styles.css')}}" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/32f82e1dca.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body onload="showGreeting()">
    <aside class="sidebar offcanvas-lg offcanvas-start">
      <div class="d-flex justify-content-end m-4 d-block d-lg-none">
        <button
          data-bs-dismiss="offcanvas"
          data-bs-target=".sidebar"
          class="btn p-0 border-0 fs-4"
          aria-label="Button Close"
        >
          <i class="fas fa-close"></i>
        </button>
      </div>
      <div class="logo-brand mt-lg-5">
        <img
          src="{{asset('assets/images/logo.png')}}"
          alt="Logo Shoso"
          width="52"
          height="50"
        />
        <div>
          <h6 class="title-store">Outdor 5</h6>
          <p class="tagline-store">Rent Outdor tools</p>
        </div>
      </div>
      <hr />
      <nav class="menu flex-fill">
        <div class="section-menu">
          <a href="{{url('/index-produk')}}" class="item-menu {{ Request::is('index-produk')? "active":"" }}" onclick="handleClickMenu(this)">
            <svg fill="currentColor">
              <path
                d="M6 2.5C3.79086 2.5 2 4.29086 2 6.5V10.5C2 11.6046 2.89543 12.5 4 12.5H5.5C6.32843 12.5 7 11.8284 7 11V10.5C7 9.94772 7.44772 9.5 8 9.5C8.55228 9.5 9 9.94772 9 10.5V10.8333C9 11.7538 9.74619 12.5 10.6667 12.5H12.3333C13.2538 12.5 14 11.7538 14 10.8333V10.5C14 9.94772 14.4477 9.5 15 9.5C15.5523 9.5 16 9.94772 16 10.5V11C16 11.8284 16.6716 12.5 17.5 12.5H19C20.1046 12.5 21 11.6046 21 10.5V6.5C21 4.29086 19.2091 2.5 17 2.5H6ZM3 14.75C3.41421 14.75 3.75 15.0858 3.75 15.5V18.5C3.75 20.2949 5.20507 21.75 7 21.75H16C17.7949 21.75 19.25 20.2949 19.25 18.5V15.5C19.25 15.0858 19.5858 14.75 20 14.75C20.4142 14.75 20.75 15.0858 20.75 15.5V18.5C20.75 21.1234 18.6234 23.25 16 23.25H7C4.37665 23.25 2.25 21.1234 2.25 18.5V15.5C2.25 15.0858 2.58579 14.75 3 14.75ZM9 16.75C9 16.3358 9.33579 16 9.75 16H13.25C13.6642 16 14 16.3358 14 16.75C14 17.1642 13.6642 17.5 13.25 17.5H9.75C9.33579 17.5 9 17.1642 9 16.75Z"
                fill="currentColor"
              />
            </svg>
            <p>Produk</p>
          </a>
      
          <a href="{{url('kategori')}}" class="item-menu {{ Request::is('kategori')? "active":"" }}" onclick="handleClickMenu(this)">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16"> <path fill="currentColor" fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/> </svg>

            <p>Kategori</p>
        </a>
        <a href="{{url('users')}}" class="item-menu {{ Request::is('users')? "active":"" }}" onclick="handleClickMenu(this)">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16"> <path fill="currentColor" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/> <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/> <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/> </svg>
            <p>Users</p>
          </a>
          <a href="{{url('index-transaksi')}}" class="item-menu {{ Request::is('index-transaksi')? "active":"" }}" onclick="handleClickMenu(this)">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path fill="currentColor" d="M96 96C96 60.65 124.7 32 160 32H576C611.3 32 640 60.65 640 96V320C640 355.3 611.3 384 576 384H160C124.7 384 96 355.3 96 320V96zM160 320H224C224 284.7 195.3 256 160 256V320zM160 96V160C195.3 160 224 131.3 224 96H160zM576 256C540.7 256 512 284.7 512 320H576V256zM512 96C512 131.3 540.7 160 576 160V96H512zM368 128C323.8 128 288 163.8 288 208C288 252.2 323.8 288 368 288C412.2 288 448 252.2 448 208C448 163.8 412.2 128 368 128zM48 360C48 399.8 80.24 432 120 432H520C533.3 432 544 442.7 544 456C544 469.3 533.3 480 520 480H120C53.73 480 0 426.3 0 360V120C0 106.7 10.75 96 24 96C37.25 96 48 106.7 48 120V360z"/></svg>

            <p>List Transaksi Peminjaman</p>
          </a>
         
      </nav>
      <footer>
        <div class="d-flex gap-3 align-items-center mb-4">
          <img src="{{asset('assets/icons/ic_mode.svg')}}" alt="Mode Display" />
          <p id="label-mode" class="flex-fill label-mode">Light Mode</p>
          <div>
            <input
              id="checkbox"
              type="checkbox"
              class="toggle-theme"
              aria-label="Toggle Theme"
            />
            <label for="checkbox" class="label-toggle">
              <img
                src="{{asset('assets/icons/ic_moon.svg')}}"
                width="50%"
                class="ic-theme"
                id="ic-dark"
                alt="Icon Dark"
              />
              <img
                src="{{asset('assets/icons/ic_sun.svg')}}"
                width="50%"
                class="ic-theme"
                id="ic-light"
                alt="Icon Light"
              />
            </label>
          </div>
        </div>
        <p>©2022 Shoe Store. All rights reserved.</p>
      </footer>
    </aside>
    <main class="content flex-fill">
      <section>
        <button
          aria-controls="sidebar"
          data-bs-toggle="offcanvas"
          data-bs-target=".sidebar"
          aria-label="Button Hamburger"
          class="sidebarOffcanvas mb-5 btn p-0 border-0 d-flex d-lg-none"
        >
          <i class="fa-solid fa-bars"></i>
        </button>
        <nav class="nav-content gap-5">
          <div class="d-flex gap-3 align-items-center">
   
            <div>
              @yield('greeting')
              @if (auth()->check())
                  <h4 class="title-store">{{auth()->user()->name}}</h4>
              @endif
                    <script>
    function showGreeting() {
      var date = new Date();
      var hour = date.getHours();

      var greeting = "";

      if (hour >= 0 && hour < 12) {
        greeting = "Selamat Pagi";
      } else if (hour >= 12 && hour < 16) {
        greeting = "Selamat Siang";
      } else if (hour >= 16 && hour < 18){
        greeting = "Selamat Sore";
      }
       else{
        greeting = "Selamat Malam" ;
       }
       
      document.getElementById("greeting").textContent = greeting;
    }
  </script>
</p>
            </div>
          </div>
          <div class="search-wrapper">
            <div class="search-bar flex-fill">
              <form method="POST" action="{{url('search')}}" class="form-control">
                @csrf
              <input
                class="form-control"
                type="text"
                placeholder="Cari Alat" name="cari"
              />
              </form>
            </div>
            @if (!auth()->user())
                          <a href="{{url('login')}}">
        <button class="buy-product button btn-rounded active">
                  Login
                </button>
                </a>
             @else
              <a href="{{url('logout')}}">
        <button class="buy-product button btn-rounded active">
                  Logout
                </button>
                </a>   
            @endif
          </div>
        </nav>
      </section>

      
      @yield('kontent')
     
    </main>

    <script src="{{asset('/js/index.js')}}"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
