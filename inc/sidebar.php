<button class="btn btn-primary mb-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fas fa-angle-double-right fs-4 fw-bold"></i></button>

<div class="offcanvas offcanvas-start secondaryB" style="max-width: 18rem;" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
<button type="button" class="d-flex justify-content-end mt-3 me-3" data-bs-dismiss="offcanvas" style="border: none; outline: none; background-color: transparent;"><i class="fas fa-times"></i></button>
   
<div class="offcanvas-header pt-2">
        <div class="d-flex mx-4 mb-3" id="offcanvasScrollingLabel">
            <i class="fas fa-user fs-1"></i>
            <h6 class="fw-bold text-white fs-4"><?= $_SESSION['username'] ?> <br>
                <a href="./" class="ms-5 fs-6 fw-semibold">
                    LA<span class="tartiaryC">MARK</span>
                </a>
            </h6>
        </div>
    </div>
    <div class="offcanvas-body d-flex flex-column">
    <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 active text-white" aria-current="page" href="./user">
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 text-white" href="./orders">
                Orders
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 text-white" href="./notification">
                Notification
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 text-white" href="">
                Bookmark
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 text-white" href="">
                
                Reports
              </a>
            </li>
           
          </ul>
          <hr class="my-4 border-info">

<ul class="nav flex-column mb-auto">
  <li class="nav-item">
    <a class="nav-link d-flex align-items-center gap-2 text-white" href="#">
      
      Settings
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link d-flex align-items-center gap-2 text-white" href="#">
      
      Sign out
    </a>
  </li>
</ul>
    </div>
</div>


<!-- <button type="button" class="border-0 outline-o" style="background-color: transparent;" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"><i class="fas fa-bars"></i></button>
      <div class="offcanvas-md offcanvas-end " tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel"><a href="./" class="ms-5 fs-6 fw-semibold">
                    LA<span class="tartiaryC">MARK</span>
                </a></h5>
        </div>
        <div class="offcanvas-body d-flex flex-column">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 active text-white" aria-current="page" href="./user">
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 text-white" href="./orders">
                Orders
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 text-white" href="./notification">
                Notification
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 text-white" href="">
                Bookmark
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 text-white" href="">
                
                Reports
              </a>
            </li>
           
          </ul>

          <hr class="my-3 border-info">

          <ul class="nav flex-column mb-auto">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 text-white" href="#">
                
                Settings
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 text-white" href="#">
                
                Sign out
              </a>
            </li>
          </ul>
        </div>
      </div>
   -->