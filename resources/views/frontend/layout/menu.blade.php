<ul class="main-menu">
  <li class="active">
    <a href="{{ $detail ? asset('/') : '#home'}}" class="nav-anim">
      <span class="menu-icon lnr lnr-home"></span>
      <span class="link-text">Home</span>
    </a>
  </li>
  <li>
    <a href="{{ $detail ? asset('/') . '#about-me' : '#about-me'}}" class="nav-anim">
      <span class="menu-icon lnr lnr-user"></span>
      <span class="link-text">About Me</span>
    </a>
  </li>
  <li>
    <a href="{{ $detail ? asset('/') . '#resume' : '#resume'}}" class="nav-anim">
      <span class="menu-icon lnr lnr-graduation-hat"></span>
      <span class="link-text">Resume</span>
    </a>
  </li>
  <li>
    <a href="{{ $detail ? asset('/') . '#portfolio' : '#portfolio'}}" class="nav-anim">
      <span class="menu-icon lnr lnr-briefcase"></span>
      <span class="link-text">Portfolio</span>
    </a>
  </li>
  {{-- <li>
    <a href="#blog" class="nav-anim">
      <span class="menu-icon lnr lnr-book"></span>
      <span class="link-text">Blog</span>
    </a>
  </li> --}}
  <li>
    <a href="{{ $detail ? asset('/') . '#contact' : '#contact'}}" class="nav-anim">
      <span class="menu-icon lnr lnr-envelope"></span>
      <span class="link-text">Contact</span>
    </a>
  </li>
</ul>