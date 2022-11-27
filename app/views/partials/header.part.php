<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/"  class="logo">
                        <img style="width: 100%; height: 95%;" src="assets/images/logo3.png">
                    </a>
                    <!-- ***** Logo End ***** -->
                    
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                    <li><a href="/" class="<?php echo comprobarActiva('index')?'active':'' ;?>">Home</a></li>
                        <li><a href="/libros" class="<?php echo comprobarActiva('libros')?'active':'' ;?>">Libros</a></li>
                        <li><a href="/administracion" class="<?php echo comprobarActiva('administracion')?'active':''; ?>">Administracion</a></li>
                        <li><a href="/contacto" class="<?php echo comprobarActiva('contacto')?'active':''; ?>">Contacto</a></li>
                        <li><a href="/personal" class="<?php echo comprobarActiva('personal')?'active':''; ?>">Personal</a></li>
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