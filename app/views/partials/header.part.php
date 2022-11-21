<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/"  class="logo">
                        <img style="width: 40%; height: 80%;" src="assets/images/logo2.png">
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
                    <li><a href="/" class="<?php echo comprobarActiva('index')?'active':'' ;?>">Home</a></li>
                        <li><a href="/libros" class="<?php echo comprobarActiva('libros')?'active':'' ;?>">Libros</a></li>
                        <li><a href="/colaboradores" class="<?php echo comprobarActiva('colaboradores')?'active':''; ?>">Colaboladores</a></li>
                        <li><a href="/contacto" class="<?php echo comprobarActiva('contacto')?'active':''; ?>">Contacto</a></li>
                        <li><a href="/personal" class="<?php echo comprobarActiva('personal')?'active':''; ?>">Personal</a></li>
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