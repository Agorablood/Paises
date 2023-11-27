<body>
    <?php
    $inicio = '';
    $japon = '';
    $italia = '';
    $grecia = '';
    $korea = '';
    if ($seleccionado == 'inicio') {
        $inicio = 'active';
    } elseif ($seleccionado =='japon') {
        $japon = 'active';
    } elseif ($seleccionado == 'italia') {
        $italia = 'active';
    } elseif ($seleccionado== 'grecia' ) {
        $grecia = 'active';
    } elseif ($seleccionado =='korea') {
        $korea = 'active';
    }


    ?>
    <div class="row">
        <div class="col-2 p-5 text-white bg-dark" style="min-height: 100vh; height: 'auto';">
            <a href="<?php echo base_url(); ?>paises/inicio" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white nav-link <?php echo $inicio ?>">
                <svg class="bi me-2" width="40" height="32">
                </svg>
                <span class="fs-4">Inicio</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>paises/japon" class="nav-link <?php echo $japon ?> text-white">
                        🇯🇵 Japón ⛩
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>paises/italia" class="nav-link <?php echo $italia ?> text-white">
                        🇮🇹 Italia 🍕
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>paises/grecia" class="nav-link <?php echo $grecia ?> text-white">

                        🇬🇷 Grecia 🏛️
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>paises/korea" class="nav-link <?php echo $korea ?> text-white">

                        🇰🇷 Korea 🫰🏻
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://i.pinimg.com/736x/64/34/4e/64344e345245a2085b9fe3b361e23e3b.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>Agora</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">Nuevo Proyecto</a></li>
                    <li><a class="dropdown-item" href="#">Ajustes</a></li>
                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Salir</a></li>
                </ul>
            </div>
        </div>