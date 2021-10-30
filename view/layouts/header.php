<nav class="py-2 bg-light border-bottom mb-4">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
        <li class="nav-item"><a href="/home" class="nav-link link-dark px-2 active" aria-current="page">Home</a></li>
        <!-- <li class="nav-item"><a href="<?php //getURL('about'); ?>" class="nav-link link-dark px-2">About</a></li> -->
      </ul>
      <ul class="nav">
        <?php if(\app\models\Auth::check()) { ?>
          <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://ui-avatars.com/api/?name=<?php echo \app\models\Auth::user()->name; ?>" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>
        </div>
        <?php } else { ?>
          <li class="nav-item"><a href="/login" class="nav-link link-dark px-2">Login</a></li>
          <li class="nav-item"><a href="/register" class="nav-link link-dark px-2">Sign up</a></li>
        <?php } ?>
      </ul>
    </div>
  </nav>