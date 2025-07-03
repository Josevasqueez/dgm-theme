<?php

/**
 * Template Name: Dónde comprar
 *
 */
get_header();
?>
<section class="max-w-5xl mx-auto px-8 md:px-16 my-20 text-center">
  <?php
  dgm_feature_basico(
    'Encontrá repuestos y accesorios originales en todo el país',
    'Contamos con una red de agentes comerciales y talleres oficiales en todo Uruguay. Accedé a repuestos originales, accesorios Chevrolet y repuestos ACDelco con respaldo de General Motors y disponibilidad inmediata.',
    'max-w-2xl md:max-w-3xl'
  );
  ?>
</section>

<div class="bg-gray-100">
  <section class="max-w-4xl mx-auto px-8 md:px-16 py-20">
    <div class="md:flex gap-10 items-center justify-center pb-16 border-b border-gray-300 text-center">
      <div class="mb-8 md:mb-0">
        <h2 class="text-3xl md:text-4xl text-secondary font-semibold">
          Agentes Comerciales
        </h2>
        <p class="text-base">Compra de repuestos originales y productos ACDelco.</p>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/dgm_agente.svg" class="w-20 md:w-28 mx-auto md:mx-0" alt="Agentes comerciales DGM">
    </div>
    <?php
    $agentes = [
      [
        'nombre' => 'Feyvi',
        'direccion' => 'Yaguaron 1881,',
        'ciudad' => 'Montevideo',
        'telefono' => '2924 1100',
        'map_link' => 'https://www.google.com/maps/place/Feyvi+S.A./data=!4m2!3m1!1s0x0:0x7d15c83dbbce4c8a?sa=X&ved=1t:2428&ictx=111'
      ],
      [
        'nombre' => 'Feyvi',
        'direccion' => 'Giannattasio 1503 km 21,',
        'ciudad' => 'Ciudad de la Costa, Canelones',
        'telefono' => '2924 1100',
        'map_link' => 'https://www.google.com/maps/place/Feyvi+Ciudad+de+la+Costa/@-34.8423755,-55.9978891,17z/data=!3m1!4b1!4m6!3m5!1s0x959f89da813a80ad:0x98d89e5aac415eca!8m2!3d-34.8423799!4d-55.9953142!16s%2Fg%2F11h_6lggqk?entry=ttu&g_ep=EgoyMDI1MDYxNi4wIKXMDSoASAFQAw%3D%3D'
      ],
      [
        'nombre' => 'Yaguaron',
        'direccion' => 'Miguelete 1502,',
        'ciudad' => 'Montevideo',
        'telefono' => '2908 1136',
        'map_link' => 'https://www.google.com/maps/place/Yaguaron+Repuestos/@-34.8976303,-56.1875206,16z/data=!3m1!4b1!4m6!3m5!1s0x959f8031645e0839:0x79583f3ddc21236e!8m2!3d-34.8976347!4d-56.1849457!16s%2Fg%2F1ttpj1t3?entry=ttu&g_ep=EgoyMDI1MDYxNi4wIKXMDSoASAFQAw%3D%3D'
      ],
      [
        'nombre' => 'Mirvic',
        'direccion' => 'Cerro Largo 1241',
        'ciudad' => 'Montevideo',
        'telefono' => '2900 1465',
        'map_link' => 'https://www.google.com/maps/place/MIRVIC+LTDA./@-34.9009871,-56.1925422,17z/data=!3m1!4b1!4m6!3m5!1s0x959f80322ddb1afd:0xc0062795c2a4649f!8m2!3d-34.9009915!4d-56.1899673!16s%2Fg%2F11bwfxwqxr?entry=ttu&g_ep=EgoyMDI1MDYxNi4wIKXMDSoASAFQAw%3D%3D'
      ],
      [
        'nombre' => 'Italur',
        'direccion' => 'Paraguay 1631',
        'ciudad' => 'Montevideo',
        'telefono' => '2903 2323',
        'map_link' => 'https://www.google.com/maps/place/ITALUR+S.A/@-34.9008251,-56.1957185,17z/data=!3m1!4b1!4m6!3m5!1s0x959f802e0fb0d7d1:0x15d48752e4bd6d6b!8m2!3d-34.9008295!4d-56.1931436!16s%2Fg%2F11c49_x_yn?entry=ttu&g_ep=EgoyMDI1MDYxNi4wIKXMDSoASAFQAw%3D%3D'
      ],
    ];
    ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-16">
      <?php foreach ($agentes as $agente): ?>
        <div class="text-sm">
          <h4 class="font-bold text-base"><?php echo $agente['nombre']; ?></h4>
          <p><?php echo $agente['direccion']; ?></p>
          <p><?php echo $agente['ciudad']; ?></p>
          <p>Teléfono: <?php echo $agente['telefono']; ?></p>
          <?php if (!empty($agente['map_link'])): ?>
            <a href="<?php echo $agente['map_link']; ?>" target="_blank" class="inline-flex items-center text-secondary hover:text-secondary-dark text-sm mt-2">
              <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-1.447-.894L15 4m0 13V4m-6 3l6-3"></path>
              </svg>
              Ver en mapa
            </a>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</div>

<section class="max-w-5xl mx-auto px-8 md:px-16 my-20">
  <div class="text-center mb-12">
    <h2 class="text-3xl md:text-4xl text-secondary font-semibold">
      Talleres oficiales
    </h2>
    <p class="text-base">Mantenimiento y reparación de vehículos e instalación de accesorios.</p>
  </div>
  <?php
  // Array de talleres por departamento
  $talleres_por_departamento = [
    // 'Artigas' => [],
    'Canelones' => [
      ['nombre' => 'Silca Las Piedras', 'direccion' => 'Ruta 48 y Camino Pattarino', 'telefono' => '2400 4078', 'map_link' => 'https://www.google.com/maps/dir/-34.7214,-56.24444/@-34.7213723,-56.3268411,12z?entry=ttu&g_ep=EgoyMDI1MDYxNi4wIKXMDSoASAFQAw%3D%3D'],
    ],
    'Cerro Largo' => [
      ['nombre' => 'Chevrolet Del Este', 'direccion' => 'Agustín de la Rosa 667', 'telefono' => '4642 3607', 'map_link' => 'https://www.google.com/maps?daddr=-32.36983,-54.17095'],
    ],
    'Colonia' => [
      ['nombre' => 'Silca Colonia', 'direccion' => 'Treinta y Tres 333', 'telefono' => '4542 2333', 'map_link' => 'https://www.google.com/maps?daddr=-34.45865,-57.83825'],
      ['nombre' => 'Silca Carmelo', 'direccion' => 'Natalio Vadel 316', 'telefono' => '4542 3333', 'map_link' => 'https://www.google.com/maps?daddr=-33.98205,-58.28207'],
    ],
    'Durazno' => [
      ['nombre' => 'Autos Lamont', 'direccion' => '19 de Abril 1134', 'telefono' => '4362 2802', 'map_link' => 'https://www.google.com/maps/dir/-33.3727,-56.52308/@-33.3726728,-56.6054812,12z?entry=ttu&g_ep=EgoyMDI1MDYxNi4wIKXMDSoASAFQAw%3D%3D'],
    ],
    'Flores' => [
      ['nombre' => 'Chevrolet Flores', 'direccion' => 'Leandro Gomez 270', 'telefono' => '9848 9899', 'map_link' => 'https://www.google.com/maps/dir/-33.51073,-56.90707/@-33.5107027,-56.9894712,12z?entry=ttu&g_ep=EgoyMDI1MDYyMi4wIKXMDSoASAFQAw%3D%3D'],
      ['nombre' => 'Autonorte', 'direccion' => 'Batlle y Ordóñez 718', 'telefono' => '4352 4417', 'map_link' => 'https://www.google.com/maps/dir/-33.51897,-56.89547/@-33.5189427,-56.9778712,12z?entry=ttu&g_ep=EgoyMDI1MDYxNi4wIKXMDSoASAFQAw%3D%3D'],
    ],
    'Florida' => [
      ['nombre' => 'Chevrolet Florida', 'direccion' => 'Aparicio Saravia 275', 'telefono' => '4352 4417', 'map_link' => 'https://www.google.com/maps/dir/-34.09967,-56.20623/@-34.0996425,-56.2886312,12z?entry=ttu&g_ep=EgoyMDI1MDYxNi4wIKXMDSoASAFQAw%3D%3D'],
    ],
    'Lavalleja' => [
      ['nombre' => 'Chevrolet Del Este', 'direccion' => 'Av. Artigas SN', 'telefono' => '4443 3233', 'map_link' => 'https://www.google.com/maps?daddr=-34.37107,-55.24398'],
    ],
    'Maldonado' => [
      ['nombre' => 'Fontes', 'direccion' => 'Rincón 637', 'telefono' => '4434 9102', 'map_link' => 'https://www.google.com/maps/dir/-34.77705,-55.22652/@-34.7770222,-55.3089211,12z?entry=ttu&g_ep=EgoyMDI1MDYxNi4wIKXMDSoASAFQAw%3D%3D'],
      ['nombre' => 'Fontes', 'direccion' => 'Av Sta Teresa y Florida', 'telefono' => '4222 3331', 'map_link' => 'https://www.google.com/maps/dir/-34.90805,-54.95334/@-34.9080222,-55.0357411,12z?entry=ttu&g_ep=EgoyMDI1MDYxNi4wIKXMDSoASAFQAw%3D%3D'],
      ['nombre' => 'Fontes', 'direccion' => '18 de Julio 0988', 'telefono' => '4266 9017', 'map_link' => 'https://www.google.com/maps/place/FONTES+San+Carlos/data=!4m2!3m1!1s0x0:0x8d4ef066bcaed55?sa=X&ved=1t:2428&ictx=111'],
    ],
    'Montevideo' => [
      ['nombre' => 'Silca', 'direccion' => 'Gral Pagola 2333', 'telefono' => '2400 4078', 'map_link' => 'https://www.google.com/maps/dir/-34.88967,-56.16531/@-34.8896422,-56.2477111,12z?entry=ttu&g_ep=EgoyMDI1MDYxNi4wIKXMDSoASAFQAw%3D%3D'],
      ['nombre' => 'Fontes', 'direccion' => 'Av Rivera 3068', 'telefono' => '2628 3805', 'map_link' => 'https://www.google.com/maps/dir/-34.90305,-56.14935/@-34.9030222,-56.2317511,12z?entry=ttu&g_ep=EgoyMDI1MDYxNi4wIKXMDSoASAFQAw%3D%3D'],
      ['nombre' => 'Silca Express', 'direccion' => 'Bolivar Baliña 2612', 'telefono' => '2400 4078', 'map_link' => 'https://www.google.com/maps/dir/-34.92515,-56.15656/@-34.9251222,-56.2389611,12z?entry=ttu&g_ep=EgoyMDI1MDYxNi4wIKXMDSoASAFQAw%3D%3D'],
      ['nombre' => 'Carper', 'direccion' => 'Paysandú 1521', 'telefono' => '2901 4011', 'map_link' => 'https://www.google.com/maps/dir/-34.90154,-56.18545/@-34.9015122,-56.2678511,12z?entry=ttu&g_ep=EgoyMDI1MDYxNi4wIKXMDSoASAFQAw%3D%3D'],
      ['nombre' => 'Carper', 'direccion' => 'Br Artigas 2959', 'telefono' => '2901 4011', 'map_link' => 'https://www.google.com/maps/dir/-34.87291,-56.16736/@-34.8728822,-56.2497611,12z?entry=ttu&g_ep=EgoyMDI1MDYxNi4wIKXMDSoASAFQAw%3D%3D'],
      ['nombre' => 'Cristofano', 'direccion' => 'Av Millan 4369', 'telefono' => '2304 4067', 'map_link' => 'https://www.google.com/maps/dir/Chevrolet+R.+Cristofano/-34.844,-56.20565/@-34.8444977,-56.2053933,18.04z/data=!4m8!4m7!1m5!1m1!1s0x95a1d5330236f577:0x1803187d197bbfe0!2m2!1d-56.2055781!2d-34.8442103!1m0?entry=ttu&g_ep=EgoyMDI1MDYxNi4wIKXMDSoASAFQAw%3D%3D'],
      ['nombre' => 'Chevrolet Montevideo', 'direccion' => 'Giannattasio 50 y Tacuari', 'telefono' => '2604 1632', 'map_link' => 'https://www.google.com/maps/dir/-34.874,-56.03221/@-34.8739722,-56.1146111,12z?entry=ttu&g_ep=EgoyMDI1MDYxNi4wIKXMDSoASAFQAw%3D%3D'],
    ],
    'Paysandú' => [
      ['nombre' => 'Chevrolet Paysandú', 'direccion' => 'Av. España 1490', 'telefono' => '4723 5698', 'map_link' => 'https://www.google.com/maps?daddr=-32.31829,-58.07483'],
    ],
    // 'Río Negro' => [],
    'Rivera' => [
      ['nombre' => 'Chevrolet Rivera', 'direccion' => 'Sarandí 758', 'telefono' => '4624 6428', 'map_link' => 'https://www.google.com/maps/place/Chevrolet+Rivera/data=!4m2!3m1!1s0x0:0x98e64de40d082063?sa=X&ved=1t:2428&ictx=111'],
    ],
    // 'Rocha' => [],
    'Salto' => [
      ['nombre' => 'Chevrolet Salto', 'direccion' => 'Av. José Batlle y Ordóñez 2210', 'telefono' => '4733 5597', 'map_link' => 'https://www.google.com/maps/dir/-31.38488,-57.94518/@-31.3848537,-58.0275813,12z?entry=ttu&g_ep=EgoyMDI1MDYxNi4wIKXMDSoASAFQAw%3D%3D'],
    ],
    'San José' => [
      ['nombre' => 'Silca San José', 'direccion' => 'Av. José Pedro Varela 1009', 'telefono' => '4342 2149', 'map_link' => 'https://www.google.com/maps?daddr=-34.33144,-56.72542'],
    ],
    'Soriano' => [
      ['nombre' => 'Chevrolet Mercedes', 'direccion' => 'Lavalleja 265', 'telefono' => '4533 3966', 'map_link' => 'https://www.google.com/maps?daddr=-33.24754,-58.02188'],
    ],
    'Tacuarembó' => [
      ['nombre' => 'Autos Lamont', 'direccion' => 'Ituzaingó 305', 'telefono' => '4633 2850', 'map_link' => 'https://www.google.com/maps?daddr=-31.71494,-55.978'],
    ],
    'Treinta y Tres' => [
      ['nombre' => 'Chevrolet Del Este', 'direccion' => 'Manuel Melendez 1252', 'telefono' => '4452 4266', 'map_link' => 'https://www.google.com/maps?daddr=-33.22981,-54.38373'],
    ],
  ];
  $departamentos = array_keys($talleres_por_departamento);
  ?>
  <div class="max-w-md mx-auto mb-8">
    <label class="relative block">
      <span class="absolute inset-y-0 left-0 flex items-center pl-3">
        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <circle cx="11" cy="11" r="8" />
          <line x1="21" y1="21" x2="16.65" y2="16.65" />
        </svg>
      </span>
      <input id="buscador-departamento" type="text" placeholder="Buscá por departamento" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white" />
    </label>
  </div>
  <div id="departamentos-lista">
    <?php foreach ($departamentos as $dep): ?>
      <div class="mb-3">
        <button type="button" id="btn-<?php echo $dep; ?>" class="w-full text-left px-6 py-4 border border-secondary rounded-md font-medium flex justify-between items-center transition" onclick="toggleCollapse('<?php echo $dep; ?>')">
          <span><?php echo $dep; ?></span>
          <svg id="icon-<?php echo $dep; ?>" class="h-5 w-5 transform transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div id="collapse-<?php echo $dep; ?>" class="hidden bg-white border-secondary px-4 py-6">
          <?php if (!empty($talleres_por_departamento[$dep])): ?>
            <div class="grid md:grid-cols-3 gap-6">
              <?php foreach ($talleres_por_departamento[$dep] as $taller): ?>
                <div>
                  <h4 class="font-bold"><?php echo $taller['nombre']; ?></h4>
                  <p><?php echo $taller['direccion']; ?></p>
                  <p>Teléfono: <?php echo $taller['telefono']; ?></p>
                  <?php if (!empty($taller['map_link'])): ?>
                    <a href="<?php echo $taller['map_link']; ?>" target="_blank" class="inline-flex items-center text-secondary hover:text-secondary-dark text-sm mt-2">
                      <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-1.447-.894L15 4m0 13V4m-6 3l6-3"></path>
                      </svg>
                      Ver en mapa
                    </a>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </div>
          <?php else: ?>
            <p class="text-gray-500">No hay talleres registrados en este departamento.</p>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <script>
    // Collapse
    function toggleCollapse(dep) {
      var content = document.getElementById('collapse-' + dep);
      var icon = document.getElementById('icon-' + dep);
      var btn = document.getElementById('btn-' + dep);
      if (content.classList.contains('hidden')) {
        document.querySelectorAll('[id^="collapse-"]').forEach(function(el) {
          el.classList.add('hidden');
        });
        document.querySelectorAll('[id^="icon-"]').forEach(function(el) {
          el.classList.remove('rotate-180');
        });
        document.querySelectorAll('[id^="btn-"]').forEach(function(el) {
          el.classList.remove('bg-secondary', 'text-white');
          el.classList.add('bg-white');
        });
        content.classList.remove('hidden');
        icon.classList.add('rotate-180');
        btn.classList.remove('bg-white');
        btn.classList.add('bg-secondary', 'text-white');
      } else {
        content.classList.add('hidden');
        icon.classList.remove('rotate-180');
        btn.classList.remove('bg-secondary', 'text-white');
        btn.classList.add('bg-white');
      }
    }
    // Buscador
    document.getElementById('buscador-departamento').addEventListener('input', function(e) {
      var filtro = e.target.value.toLowerCase();
      document.querySelectorAll('#departamentos-lista > div').forEach(function(div) {
        var texto = div.querySelector('button span').textContent.toLowerCase();
        div.style.display = texto.includes(filtro) ? '' : 'none';
      });
    });
  </script>
</section>

<?php get_footer(); ?>