<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/index.php" class="logo">
                        <img src="assets/images/logo.png">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                    <li><a href="/index.php" class="<?php echo comprobarActiva('index.php')?'active':'' ;?>">Home</a></li>
                        <li><a href="/libros.php" class="<?php echo comprobarActiva('libros.php')?'active':'' ;?>">Libros</a></li>
                        <li><a href="/colaboradores.php" class="<?php echo comprobarActiva('colaboladores.php')?'active':''; ?>">Colaboladores</a></li>
                        <li><a href="/contacto.php" class="<?php echo comprobarActiva('contacto.php')?'active':''; ?>">Contacto</a></li>
                        <li><a href="/personal.php" class="<?php echo comprobarActiva('personal.php')?'active':''; ?>">Personal</a></li>
                    </ul>   
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>