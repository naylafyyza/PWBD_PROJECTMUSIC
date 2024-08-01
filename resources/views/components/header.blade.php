<nav class="navbar navbar-expand-md  sticky-top mynavbar">
    <div class="container">
      <div class="header-logo">
        <img class="logo" src="img/logo oke.png">
      </div>
      <div class="wrap-input-17">
        <div class="search-box">
            <button class="btn-search">🔍</button>
            <input type="text" class="input-search" placeholder="Type to Search...">
        </div>
      </div>
     <div class="header-info">
            <li><a href="/about" class="login">☆.｡.:*</a></li>
     </div>
    </div>
</nav>
<script>
    const stickyTop = document.querySelector('.sticky-top');
    const offcanvas = document.querySelector('.offcanvas');

    offcanvas.addEventListener('show.bs.offcanvas', function() {
      stickyTop.style.overflow = 'visible';
    });

    offcanvas.addEventListener('hidden.bs.offcanvas', function() {
      stickyTop.style.overflow = 'hidden';
    });
  </script>