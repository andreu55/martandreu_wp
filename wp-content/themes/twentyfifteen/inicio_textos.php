<?php

$nombre = '<span class="logo_first">Google, </span><span class="logo_second">luego existo</span>';
$nombre_plano = 'Google, luego existo';

$descripcion = get_bloginfo('description', 'display');

$social = [
  [
    'icon' => 'fab fa-facebook-f',
    'url' => 'https://facebook.com'
  ],[
    'icon' => 'fab fa-twitter',
    'url' => 'https://twitter.com'
  ],[
    'icon' => 'fab fa-linkedin-in',
    'url' => 'https://www.linkedin.com'
  ],[
    'icon' => 'fas fa-rss',
    'url' => 'https://www.rss.com'
  ]
];

$contacto = 'Contacto';
$ult_entradas = 'Últimas entradas';

$que_hacemos = '¿Qué hacemos?';
$que_hacemos_text = '<p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas luctus at sem quis varius.<br>
  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus iaculis magna sagittis elit sagittis, at hendrerit lorem venenatis. Morbi accumsan iaculis blandit. Cras ultrices hendrerit nisl.
</p>
<p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas luctus at sem quis varius.
</p>';

$quienes_somos = 'Quienes somos';
$quienes_somos_text = '<p>Praesent at feugiat est, at faucibus ipsum. Aenean condimentum mauris vel malesuada pulvinar. <br>Vestibulum sit amet hendrerit leo, quis vehicula mi.</p>';

$getInTouch = 'Contacto';
$getInTouch_text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

$escribenos = '¡Escríbenos aquí!';

$send = 'Enviar';

$proyectos = [
  [
    'titulo' => 'Moon',
    'modal_id' => 'holi',
    'active' => 1,
    'img' => 'img-06.jpg',
    'descr' => '<p>
      Sed id tellus in risus pre
      tium imperdiet eu lobortis dolor. Sed pellentesque, urna ac viverra lacinia, erat mauris venenatis purus, mollis egestas urna purus ac ex.
      Aenean nunc sem, lobortis at elit non, lobortis laoreet nibh. Maecenas at mi ipsum.
    </p>
    <p>
      Quisque tempor, ligula pharetra luctus elementum, arcu nisl suscipit ante, pharetra commodo dui est et enim. Sed eu vestibulum elit. Donec ut libero non.
    </p>',
    'url' => 'project.html'
  ],[
    'titulo' => 'Lbortis',
    'modal_id' => 'chaito',
    'active' => 0,
    'img' => 'img-07.jpg',
    'descr' => '<p>
      Pre id tellus in risus pre
      tium imperdiet eu lobortis dolor. Sed pellentesque, urna ac viverra lacinia, erat mauris venenatis purus, mollis egestas urna purus ac ex.
      Aenean nunc sem, lobortis at elit non, lobortis laoreet nibh. Maecenas at mi ipsum.
    </p>
    <p>
      Quisque tempor, ligula pharetra luctus elementum, arcu nisl suscipit ante, pharetra commodo dui est et enim. Sed eu vestibulum elit. Donec ut libero non.
    </p>',
    'url' => 'project.html'
  ],[
    'titulo' => 'Anchonio',
    'modal_id' => 'chaito',
    'active' => 0,
    'img' => 'img-07.jpg',
    'descr' => '<p>
      Anchonio id tellus in risus pre
      tium imperdiet eu lobortis dolor. Sed pellentesque, urna ac viverra lacinia, erat mauris venenatis purus, mollis egestas urna purus ac ex.
      Aenean nunc sem, lobortis at elit non, lobortis laoreet nibh. Maecenas at mi ipsum.
    </p>
    <p>
      Quisque tempor, ligula pharetra luctus elementum, arcu nisl suscipit ante, pharetra commodo dui est et enim. Sed eu vestibulum elit. Donec ut libero non.
    </p>',
    'url' => 'project.html'
  ]
];

$testimonios = [
  [
    'nombre' => 'Aroa Fernández',
    'modal_id' => 'slider_1',
    'active' => 1,
    'img' => 'marta.png',
    'descr' => 'Marta es una profesional excelente, tanto por su dedicación a los proyectos en los que se embarca, como en eficacia y rapidez. El trabajo de edición que ha realizado para nuestra empresa ha sido más de lo que nosotros teníamos pensado y nos ha ayudado a replantear algunos aspectos de nuestra web y nos ha permitido adecuarla a nuestras actuales necesidades.',
    'url' => 'aroafernandez.com'
  ],[
    'nombre' => 'Isabel Llano',
    'modal_id' => 'slider_2',
    'active' => 0,
    'img' => 'andreu.png',
    'descr' => 'A veces desconocemos el valor de algunas profesiones. Con el afán de estar al día y aunar criterios contactamos con Marta Tornero para que nos hiciera una revisión de los textos, sobre los que aportó otra mirada y trabajó de manera exhaustiva. Gracias a ella me di cuenta de todo lo que podíamos mejorar y he aprendido a valorar esa otra visión: la que aporta un profesional.',
    'url' => 'Instituto Valenciano de Terapias Naturales'
  ]
];

// Quienes somos
$nosotros = [
  [
    'id' => 'foto-marta',
    'nombre' => 'Marta Tornero',
    'img' => 'marta.png',
    'img-mobile' => 'marta-arriba.png',
    'alt' => 'Marta Tornero',
    'funcion' => 'Copywriter & Community Manager',
    'descr' => 'Sed elementum vehicula nisl, a egestas velit rhoncus nec.Cras vel sapien tincidunt, lacinia risus vel, imperdiet neque.',
    'social' => [
      [
        'icon' => 'fab fa-facebook-f',
        'url' => 'https://facebook.com'
      ],[
        'icon' => 'fab fa-twitter',
        'url' => 'https://twitter.com'
      ],[
        'icon' => 'fab fa-linkedin-in',
        'url' => 'https://www.linkedin.com'
      ],[
        'icon' => 'fas fa-rss',
        'url' => 'https://www.linkedin.com'
      ]
    ]
  ],[
    'id' => 'foto-andreu',
    'nombre' => 'Andreu García',
    'img' => 'andreu.png',
    'img-mobile' => 'andreu-abajo.png',
    'alt' => 'Andreu Garcia',
    'funcion' => 'Full Stack Developer',
    'descr' => 'Sed elementum vehicula nisl, a egestas velit rhoncus nec.Cras vel sapien tincidunt, lacinia risus vel, imperdiet neque.',
    'social' => [
      [
        'icon' => 'fab fa-facebook-f',
        'url' => 'https://facebook.com'
      ],[
        'icon' => 'fab fa-twitter',
        'url' => 'https://twitter.com'
      ],[
        'icon' => 'fab fa-linkedin-in',
        'url' => 'https://www.linkedin.com'
      ],[
        'icon' => 'fas fa-rss',
        'url' => 'https://www.linkedin.com'
      ]
    ]
  ]
];
