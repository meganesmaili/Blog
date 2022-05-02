<header class="colorBack">
        <div class="container">
            <div class="row align-items-center">
                <div class="col titlePosition">
                    <a href="#" title="Livres" class="titleColor">Books.</a>
                </div>
                <div class="col hamburgerTest d-lg-none">
                  <button id="menuHamburgerButton" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'));navOnClick()" aria-label="Main Menu">
                      <svg width="50" height="50" viewBox="0 0 100 100">
                        <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                        <path class="line line2" d="M 20,50 H 80" />
                        <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                      </svg>
                    </button>
  
                    <div id="menuWrapped">
                      <ul class="menuWrappedList">
                          <li class="menuWrappedTitle"><a class="menuWrappedTitleReference" href="#" onclick="navOnClick()">Home</a></li>
                          <li class="menuWrappedTitle"><a class="menuWrappedTitleReference" href="#" onclick="navOnClick()">Catégories</a></li>
                          <li class="menuWrappedTitle"><a class="menuWrappedTitleReference" href="#" onclick="navOnClick()">Styles</a></li>
                          <li class="menuWrappedTitle"><a class="menuWrappedTitleReference" href="#" onclick="navOnClick()">About</a></li>
                          <li class="menuWrappedTitle"><a class="menuWrappedTitleReference" href="#" onclick="navOnClick()">Contact</a></li>
                      </ul>
                  </div>
                  
              </div>
            </div>
            <nav class="my-3">
                <ul class="nav justify-content-center">
                        <li class="nav-item">
                        <a class="nav-link menuTextColor" aria-current="page" href="../pagesAccueil/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link menuTextColor" href="#">Categories</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link menuTextColor" href="#">Styles</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link menuTextColor" href="#">Contact</a>
                        </li> 
                        <?php if (isset($_SESSION['user'])): ?>
                        <li class="nav-item">
                        <a class="nav-link menuTextColor" title ="Déconnexion"href="../admin/logout.php">Déconnexion</a>
                        </li>
                        <?php else:?>
                          <li class="nav-item">
                        <a class="nav-link menuTextColor" title="Connexion" href="../admin/login.php">Connexion</a>
                        </li>
                        <?php endif; ?>
                      <?php if(isset($_SESSION['user']) && $_SESSION['user']['role'] === 'ROLE_ADMIN'):?>
                        <li class="nav-item">
                        <a class="nav-link menuTextColor" href="../admin/index.php" title=" Administration" class="text danger text-decoration-none">Admin</a>
                      </li>
                      
                        <?php endif; ?>
                  </ul>
            </nav>

            <?php if($_SERVER['SCRIPT_NAME']=== '/pagesAccueil/index.php'): ?>

            <div class="row align-items-center carousel slide" id="myCarousel">
                <div class="col left carousel-control leftArrow" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
                  </svg>
                </div>
                <div class="col carousel">
                  <img src="../images/Godsofmen.jpg" alt="" class="sizeImg godsOfMen">
                </div>
                <div class="col right carousel-control rightArrow" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
                      </svg>
                </div>
            </div>
            <?php endif ?>
        </div>
    </header>
    <div class="pinkBar"></div>