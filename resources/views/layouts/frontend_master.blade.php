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
          <a href="{{url('/')}}" class="item-menu {{ Request::is('/')? "active":"" }}" onclick="handleClickMenu(this)">
            <svg fill="currentColor">
              <path
                d="M6 2.5C3.79086 2.5 2 4.29086 2 6.5V10.5C2 11.6046 2.89543 12.5 4 12.5H5.5C6.32843 12.5 7 11.8284 7 11V10.5C7 9.94772 7.44772 9.5 8 9.5C8.55228 9.5 9 9.94772 9 10.5V10.8333C9 11.7538 9.74619 12.5 10.6667 12.5H12.3333C13.2538 12.5 14 11.7538 14 10.8333V10.5C14 9.94772 14.4477 9.5 15 9.5C15.5523 9.5 16 9.94772 16 10.5V11C16 11.8284 16.6716 12.5 17.5 12.5H19C20.1046 12.5 21 11.6046 21 10.5V6.5C21 4.29086 19.2091 2.5 17 2.5H6ZM3 14.75C3.41421 14.75 3.75 15.0858 3.75 15.5V18.5C3.75 20.2949 5.20507 21.75 7 21.75H16C17.7949 21.75 19.25 20.2949 19.25 18.5V15.5C19.25 15.0858 19.5858 14.75 20 14.75C20.4142 14.75 20.75 15.0858 20.75 15.5V18.5C20.75 21.1234 18.6234 23.25 16 23.25H7C4.37665 23.25 2.25 21.1234 2.25 18.5V15.5C2.25 15.0858 2.58579 14.75 3 14.75ZM9 16.75C9 16.3358 9.33579 16 9.75 16H13.25C13.6642 16 14 16.3358 14 16.75C14 17.1642 13.6642 17.5 13.25 17.5H9.75C9.33579 17.5 9 17.1642 9 16.75Z"
                fill="currentColor"
              />
            </svg>
            <p>Semua Produk</p>
          </a>
          <a href="{{url('jaket')}}" class="item-menu {{ Request::is('jaket')? "active":"" }}" onclick="handleClickMenu(this)">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path fill="currentColor" d="M6.5 20h-1v-6a1 1 0 0 0-1-1H2v-1a3 3 0 0 1 3-3h1V8a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v2h1a3 3 0 0 1 3 3v1h-2a1 1 0 0 0-1 1v6h-1a1 1 0 0 1-1-1v-5h-1v5a1 1 0 0 1-1 1h-2v-1a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1h-2a1 1 0 0 1-1-1v-5H7v5a1 1 0 0 1-1 1zm8-14a1 1 0 0 1 1 1v1h1a1 1 0 0 0 1-1V6.5a2 2 0 0 0-2-2h-2v1a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V4H9a2 2 0 0 0-2 2V8h10zm2 6H5V8a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v4zm-3 3h-4v1h4v-1zm-6 0H8v1h1v-1zm-1-5h1v-1H8v1zm2 0h4v-1H10v1zm-2 2h8v-1H8v1z"/>
            </svg>
            <p>Jaket</p>
          </a>
          <a href="{{url('matras')}}" class="item-menu {{ Request::is('matras')? "active":"" }}" onclick="handleClickMenu(this)">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
  <path fill="currentColor" d="M20 4V3a1 1 0 0 0-1-1h-3a1 1 0 0 0-1 1v1H9V3a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v1H3a1 1 0 0 0-1 1v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V5a1 1 0 0 0-1-1zM5 5h2v4H5V5zm0 6h2v2H5v-2zm0 4h2v2H5v-2zm4-10h6v10H9V5zm8 10h2v2h-2v-2zm0-4h2v2h-2v-2zm0 4h2v2h-2v-2z"/>
</svg>

            <p>Matras</p>
        </a>
        <a href="{{url('sleepingbag')}}" class="item-menu {{ Request::is('sleepingbag')? "active":"" }}" onclick="handleClickMenu(this)">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
  <path d="M5.5 5.5c-.276 0-.5.224-.5.5v9c0 .276.224.5.5.5h13c.276 0 .5-.224.5-.5v-9c0-.276-.224-.5-.5-.5h-13zm0 2h13v4h-13v-4zm1 5h11v6h-11v-6zm12.5-4c.827 0 1.5.673 1.5 1.5v9c0 .827-.673 1.5-1.5 1.5h-13c-.827 0-1.5-.673-1.5-1.5v-9c0-.827.673-1.5 1.5-1.5h13zm0 1h-13c-.276 0-.5.224-.5.5v9c0 .276.224.5.5.5h13c.276 0 .5-.224.5-.5v-9c0-.276-.224-.5-.5-.5z" fill="currentColor"/>
</svg>

            <p>Sleeping Bag</p>
          </a>
          <a href="{{url('kompor')}}" class="item-menu {{ Request::is('kompor')? "active":"" }}" onclick="handleClickMenu(this)">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
  <path d="M12 2c-3.037 4.916-4.976 9.244-6.22 13h12.439c-1.244-3.756-3.183-8.084-6.22-13zm0 2c1.496 2.422 2.631 4.694 3.418 7h-6.836c.787-2.306 1.922-4.578 3.418-7zm0 2c-.42.67-.822 1.392-1.199 2.146h2.398c-.377-.754-.779-1.476-1.199-2.146zm0 3c-.51.744-.939 1.547-1.294 2.383h2.588c-.355-.836-.784-1.639-1.294-2.383zm-6 6c.445.836.989 1.638 1.615 2.382h2.77c.626-.744 1.17-1.546 1.615-2.382h-5zm2.218-4c-.416.89-.727 1.79-.935 2.692h4.434c-.208-.902-.52-1.802-.934-2.692h-2.565zm1.347-4c-.1.827-.172 1.657-.217 2.488h2.826c-.045-.831-.118-1.661-.218-2.488h-2.391z" fill="currentColor"/>
</svg>

            <p>Kompor Portable</p>
          </a>
          <a href="{{url('carier')}}" class="item-menu {{ Request::is('carier')? "active":"" }}" onclick="handleClickMenu(this)">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path fill="currentColor" d="M92,60h72a48,48,0,0,1,48,48V220a8,8,0,0,1-8,8H52a8,8,0,0,1-8-8V108A48,48,0,0,1,92,60Z"  stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><path d="M84,228V152a16,16,0,0,1,16-16h56a16,16,0,0,1,16,16v76" fill="curentColor"  stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><path d="M96,60V36a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V60" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><line x1="108" y1="100" x2="148" y2="100" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><line x1="84" y1="172" x2="172" y2="172" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><line x1="140" y1="172" x2="140" y2="188" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/></svg>


            <p>Tas Carier</p>
          </a>
          <a href="{{url('tenda')}}" class="item-menu {{ Request::is('tenda')? "active":"" }}" onclick="handleClickMenu(this)">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path fill="currentColor" d="M396.6 6.546C408.1-2.182 423.9-2.182 435.4 6.546L603.4 134.5C610 139.6 614.4 147 615.6 155.3L639.6 315.3C641 324.5 638.3 333.8 632.2 340.9C626.2 347.9 617.3 352 608 352H461.5L455.3 310.5C452.8 294 444 279.2 430.8 269.1L262.8 141.1C254.6 134.9 245.4 130.9 235.8 129.1L396.6 6.546zM411.4 294.5C418 299.6 422.4 307 423.6 315.3L447.6 475.3C449 484.5 446.3 493.8 440.2 500.9C434.2 507.9 425.3 512 416 512H319.1L223.1 352V512H32C22.68 512 13.83 507.9 7.753 500.9C1.674 493.8-1.028 484.5 .3542 475.3L24.35 315.3C25.59 307 29.98 299.6 36.61 294.5L204.6 166.5C216.1 157.8 231.9 157.8 243.4 166.5L411.4 294.5z"/></svg>

            <p>Tenda</p>
          </a>
        </div>
        @if (auth()->user())
               <div class="section-menu">
          <p class="fs-18 fw-500 mb-2">My Account</p>
          <a href="{{url('keranjang')}}" class="item-menu {{ Request::is('keranjang')? "active":"" }}" onclick="handleClickMenu(this)">
            <svg fill="none">
              <path
                d="M15.4559 6.58621V7.08621H15.9559H17.496C18.3534 7.08621 19.0124 7.67074 19.0966 8.36425L19.0966 8.36425L19.0973 8.36975L20.4776 18.7744C20.7115 20.7152 19.0442 22.5 16.7797 22.5H7.22014C4.95566 22.5 3.28838 20.7152 3.52228 18.7743L4.90258 8.36975L4.90261 8.36975L4.90328 8.36425C4.98747 7.67074 5.64646 7.08621 6.50387 7.08621H8.04397H8.54397V6.58621V5.62069C8.54397 3.93794 10.0487 2.5 11.9999 2.5C13.9512 2.5 15.4559 3.93794 15.4559 5.62069V6.58621ZM14.8735 8.03448V7.53448H14.3735H9.62636H9.12636V8.03448V10.4483C9.12636 10.5313 9.03859 10.6724 8.83516 10.6724C8.63174 10.6724 8.54397 10.5313 8.54397 10.4483V8.03448V7.53448H8.04397H6.50387C6.01844 7.53448 5.54941 7.87337 5.48368 8.40043L4.1033 18.8056L4.10327 18.8056L4.1026 18.8111C3.88702 20.5869 5.3988 22.0517 7.22014 22.0517H16.7797C18.6011 22.0517 20.1129 20.5869 19.8973 18.8111L19.8973 18.8111L19.8966 18.8056L18.5162 8.40048C18.4505 7.87339 17.9815 7.53448 17.496 7.53448H15.9559H15.4559V8.03448V10.4483C15.4559 10.5313 15.3681 10.6724 15.1647 10.6724C14.9613 10.6724 14.8735 10.5313 14.8735 10.4483V8.03448ZM14.3735 7.08621H14.8735V6.58621V5.62069C14.8735 4.104 13.5444 2.94828 11.9999 2.94828C10.4555 2.94828 9.12636 4.104 9.12636 5.62069V6.58621V7.08621H9.62636H14.3735ZM9.33516 16C9.33516 15.917 9.42294 15.7759 9.62636 15.7759H14.3735C14.5769 15.7759 14.6647 15.917 14.6647 16C14.6647 16.083 14.5769 16.2241 14.3735 16.2241H9.62636C9.42293 16.2241 9.33516 16.083 9.33516 16Z"
                stroke="currentColor"
              />
            </svg>
            <p class="flex-fill">Keranjang</p>
            <div class="circle-notif rounded-circle">
              <p>{{$total}}</p>
            </div>
          </a>
          <a href="{{url('listresi')}}" class="item-menu {{ Request::is('listresi')? "active":"" }}" onclick="handleClickMenu(this)">
            <svg fill="none">
              <path
                d="M5.69331 9.17202C4.80139 5.38137 7.67749 1.75 11.5717 1.75H12.4283C16.3225 1.75 19.1986 5.38137 18.3067 9.17202C18.2441 9.438 18.2734 9.71732 18.3897 9.96454L19.0683 9.6452L18.3897 9.96454L19.9699 13.3225C20.1544 13.7144 20.25 14.1422 20.25 14.5754C20.25 15.7607 19.5509 16.7382 18.5105 16.9941C16.9986 17.3659 14.7669 17.75 12 17.75C9.23306 17.75 7.00142 17.3659 5.48952 16.9941C4.44915 16.7382 3.75 15.7607 3.75 14.5754C3.75 14.1422 3.84563 13.7144 4.03005 13.3225L5.61029 9.96454C5.72663 9.71731 5.75589 9.43799 5.69331 9.17202Z"
                stroke="currentColor"
                stroke-width="1.5"
              />
              <path
                d="M14.5 21C14.4001 21.156 14.2369 21.3228 13.9972 21.4777C13.758 21.6324 13.4583 21.7647 13.1108 21.8578C12.7639 21.9507 12.3858 22 12 22C11.6142 22 11.2361 21.9507 10.8892 21.8578C10.5417 21.7647 10.242 21.6324 10.0028 21.4777C9.76312 21.3228 9.59994 21.156 9.5 21"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
              />
            </svg>
            <p class="flex-fill">List Peminjaman (Resi)</p>
            <div class="circle-notif rounded-circle">
              <p>{{$totalresi}}</p>
            </div>
          </a>
          
         
        </div>
        @endif
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
