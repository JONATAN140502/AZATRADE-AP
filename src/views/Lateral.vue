<template>
<aside class="col-md-3">
    <div class="widget widget-banners px-3 pb-3 text-center">
      <div class="owl-carousel owl-theme dots-small">
        <div style="overflow-y: auto; height:450px;" 
        >
          <h4 align="center"><b><u>Sectores</u></b></h4>
          <nav class="side-nav">
            <ul class="">
              <li class='nav-link' v-bind="{listStyle: 'none'}">
                <a href='sectores?dat=No%20tradicional&amp;year=Agropecuario' target='_blank' class=''>Agro</a>
              </li>
              <li class='item'>
                <a href='sectores?dat=No%20tradicional&amp;year=Artesan%C3%ADas' target='_blank' class='nombres'>Artesanías</a>
              </li>
              <li class='item'>
                <a href='sectores?dat=No%20tradicional&amp;year=Maderas%20y%20papeles' target='_blank' class='nombres'>Maderas y papeles</a>
              </li>
              <li class='item'>
                <a href='sectores?dat=No%20tradicional&amp;year=Metal%20mec%C3%A1nico' target='_blank' class='nombres'>Metal mecánico</a>
              </li>
              <li class='item'>
                <a href='sectores?dat=No%20tradicional&amp;year=Miner%C3%ADa%20no%20met%C3%A1lica' target='_blank' class='nombres'>Minería no metálica</a>
              </li>
              <li class='item'>
                <a href='sectores?dat=No%20tradicional&amp;year=Pesquero' target='_blank' class='nombres'>Pesquero</a>
              </li>
              <li class='item'>
                <a href='sectores?dat=No%20tradicional&amp;year=Pieles%20y%20cueros' target='_blank' class='nombres'>Pieles y cueros</a>
              </li>
              <li class='item'>
                <a href='sectores?dat=No%20tradicional&amp;year=Qu%C3%ADmico' target='_blank' class='nombres'>Químico</a>
              </li>
              <li class='item'>
                <a href='sectores?dat=No%20tradicional&amp;year=Sidero%20metal%C3%BArgico' target='_blank' class='nombres'>Sidero metalúrgico</a>
              </li>
              <li class='item'>
                <a href='sectores?dat=No%20tradicional&amp;year=Textil' target='_blank' class='nombres'>Textil</a>
              </li>
              <li class='item'>
                <a href='sectores?dat=No%20tradicional&amp;year=Varios%20(Inc.%20joyer%C3%ADa)' target='_blank' class='nombres'>Varios (Inc. joyería)</a>
              </li>
              <li class='item'>
                <a href='sectores?dat=Tradicional&amp;year=Agr%C3%ADcolas' target='_blank' class='nombres'>Agrícolas</a>
              </li>
              <li class='item'>
                <a href='sectores?dat=Tradicional&amp;year=Mineros' target='_blank' class='nombres'>Mineros</a>
              </li>
              <li class='item'>
                <a href='sectores?dat=Tradicional&amp;year=Pesquero' target='_blank' class='nombres'>Pesquero</a>
              </li>
              <li class='item'>
                <a href='sectores?dat=Tradicional&amp;year=Petr%C3%B3leo%20y%20gas%20natural' target='_blank' class='nombres'>Petróleo y gas natural</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="widget widget-banners px-3 pb-3 text-center">
      <div class="owl-carousel owl-theme dots-small">
        <div class="banner d-flex flex-column align-items-center">
          <a href="perfiles"><img class="img-fluid" src="../assets/images/Perfiles.png" alt="Perfiles"></a><br>
          <a href="perfiles" class="btn btn-dark">Ver Perfiles</a>
        </div>
      </div>
    </div>
    <div class="widget widget-newsletters bg-gray text-center">
      <h3 class="widget-title text-uppercase m-b-3">Conversa con Nosotros</h3>
      <p class="mb-2">Estamos en linea para atender tus requerimientos.</p>
      <p align="center"><a href="https://wa.link/tp206k" target="_blank"><img class="img-fluid" src="../assets/images/boton-whatsapp.png" alt="boton-whatsapp"></a></p>
    </div>
  </aside>
</template>