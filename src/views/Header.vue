<template>
    <div class="header home">
        
        <div class="header-top bg-primary text-uppercase">
            <div class="container">

                <div class="header-right  header-dropdowns ml-0 ml-sm-auto">
                    <p class="top-message mb-0 d-none d-sm-block">Bienvenido a Azatrade</p>
                    <div class="header-dropdown dropdown-expanded mr-3">
                        <a href="#">Links</a>
                        <div class="header-menu">
                            <ul>
                                <li class="text-white"><Router-Link to="/">Inicio</Router-Link></li>
                                <li><a>Exportadores</a></li>
                                <li><Router-Link to="/importaciones">Importadores</Router-Link></li>
                                <li><a>Reg&iacute;strate</a></li>
                                <li><a class="">Ingresar</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="separator"></span>

                    <div class="social-icons">
                        <a href="#" class="social-icon social-facebook icon-facebook ml-0" target="_blank"></a>
                        <a href="#" class="social-icon social-twitter icon-twitter ml-0" target="_blank"></a>
                        <a href="#" class="social-icon social-instagram icon-instagram ml-0" target="_blank"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle text-dark sticky-header">
            <div class="container">
                <div class="header-left col-lg-2 w-auto pl-0">
                    <button class="mobile-menu-toggler mr-2" type="button">
                        <i class="fas fa-bars"></i>
                    </button>
                    <a href="./"><img src="../assets/images/logoaza.png" alt="AZATRADE"></a>
                </div>

                <div class="header-right w-lg-max pl-2">
                    <div class="header-search header-icon header-search-inline header-search-category w-lg-max">
                        <div class="header-search-wrapper_x">
                        </div>
                    </div>
                    <div class="header-contact d-none d-lg-flex align-items-center pr-xl-5 mr-5 mr-xl-3 ml-5">
                        <i class="icon-phone-2"></i>
                        <h6 class="pt-1 line-height-1">LLamanos al<a href="tel:+51978037200"
                                class="d-block text-dark ls-10 pt-1">+51 978 037 200</a></h6>
                    </div>
                    <a href="login" class="header-icon header-icon-user"><i class="icon-user-2"></i></a>
                </div>
            </div>

        </div>

        <div class="tabs tabs-simple">
            <ul class="nav nav-tabs justify-content-center" role="tablist">
                <li class="nav-item" v-for="tab in tabs" :key="tab">
                    <a class="nav-link" :class="{ 'active': tab === activeTab }" id="tab-customer" data-toggle="tab"
                        role="tab" aria-controls="customer-content" aria-selected="true" @click="handleTabClick(tab)">{{ tab
                        }}</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active text-center" id="customer-content" role="tabpanel"
                    aria-labelledby="tab-customer" v-if="ProductosSelectVisible === true">
                    <div class="container">
                        <div class="header-right w-lg-max pl-2">
                            <div class="header-searchp header-iconp header-search-inlinep header-search-categoryp w-lg-max"
                                style="display: flex; justify-content: center;">
                                <div class="header-search-wrappep">
                                    <input type="hidden" id="buscasql" name="buscasql" value="produ">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="buscar...">
                                    <div class="select-customp">
                                        <select id="year" name="year">
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                        </select>
                                    </div>
                                    <a href="login" class="btn icon-magnifier"></a>
                                </div>
                            </div>
                            <div class="header-contact d-none d-lg-flex align-items-center pr-xl-5 mr-5 mr-xl-3 ml-5">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade show active text-center" id="customer-content" role="tabpanel"
                    aria-labelledby="tab-customer" v-if="MercadosSelectVisible === true">
                    <div class="container">
                        <div class="header-right w-lg-max pl-2">
                            <div class="header-searchp header-iconp header-search-inlinep header-search-categoryp w-lg-max"
                                style="display: flex; justify-content: center;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="header-search-wrappep">
                                            <input type="hidden" id="buscasql2" name="buscasql2" value="merca">
                                            <div class="">
                                                <select id='cate2' name="cate2" lang="es"
                                                    style="border-radius: 80px 20px 5px 90px; background-color:#F4F4F4;">
                                                    <option value=''>- Buscar Mercado -</option>
                                                </select>
                                            </div>
                                            <div class="select-customp">
                                                <select id="year2" name="year2" v-if="MercadosSelectVisible">
                                                    <option value="2023">2023</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2012">2012</option>
                                                </select>
                                            </div>
                                            <a href="login" class="btn icon-magnifier"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade show active text-center" id="customer-content" role="tabpanel"
                    aria-labelledby="tab-customer" v-if="EmpresasSelectVisible === true">
                    <div class="container">
                        <div class="header-left col-lg-2 w-auto pl-0">
                        </div>
                        <div class="header-right w-lg-max pl-2">
                            <div class="header-searchp header-iconp header-search-inlinep header-search-categoryp w-lg-max"
                                style="display: flex; justify-content: center;">
                                <div class="header-search-wrappep">
                                    <input type="hidden" id="buscasql3" name="buscasql3" value="empre">
                                    <div class="">
                                        <select id='cate2' name="cate2" lang="es"
                                            style="border-radius: 80px 20px 5px 90px; background-color:#F4F4F4;">
                                            <option value=''>- Buscar Empresa-</option>
                                        </select>
                                    </div>
                                    <div class="select-customp">
                                        <select id="year3" name="year3">
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                        </select>
                                    </div>
                                    <a href="login" class="btn icon-magnifier"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active text-center" id="customer-content" role="tabpanel"
                    aria-labelledby="tab-customer" v-if="PartidasSelectVisible === true">

                    <div class="container">
                        <div class="header-left col-lg-2 w-auto pl-0">
                        </div>
                        <div class="header-right w-lg-max pl-2">
                            <div class="header-searchp header-iconp header-search-inlinep header-search-categoryp w-lg-max"
                                style="display: flex; justify-content: center;">
                                <div class="header-search-wrappep">
                                    <input type="hidden" id="buscasqlp" name="buscasqlp" value="partida">
                                    <select class="form-select" aria-label="Default select example" id='qp' name="qp"
                                        lang="es"
                                        style="border-radius: 80px 20px 5px 90px; background-color:#F4F4F4; height: 40px;">
                                        <option value=''>- Buscar Partida -</option>
                                    </select>
                                    <div class="select-customp">
                                        <select id="yearp" name="yearp">
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                        </select>
                                    </div>
                                    <a href="login" class="btn icon-magnifier"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active text-center" id="customer-content" role="tabpanel"
                    aria-labelledby="tab-customer" v-if="RegionesSelectVisible === true">
                    <div class="container">
                        <div class="header-left col-lg-2 w-auto pl-0">
                        </div>
                        <div class="header-right w-lg-max pl-2">
                            <div class="header-searchp header-iconp header-search-inlinep header-search-categoryp w-lg-max"
                                style="display: flex; justify-content: center;">
                                <div class="header-search-wrappep">
                                    <input type="hidden" id="buscasql4" name="buscasql4" value="regio">
                                    <div class="select-customp">
                                        <select id="cate4" name="cate4"
                                            style="border-radius: 80px 20px 5px 90px; background-color:#F4F4F4;">
                                            <option value='01'>AMAZONAS </option>
                                            <option value='02'>ANCASH </option>
                                            <option value='03'>APURIMAC </option>
                                            <option value='04'>AREQUIPA </option>
                                            <option value='05'>AYACUCHO </option>
                                            <option value='06'>CAJAMARCA </option>
                                            <option value='08'>CUZCO</option>
                                            <option value='09'>HUANCAVELICA </option>
                                            <option value='10'>HUANUCO </option>
                                            <option value='11'>ICA </option>
                                            <option value='12'>JUNIN </option>
                                            <option value='13'>LA LIBERTAD </option>
                                            <option value='14'>LAMBAYEQUE </option>
                                            <option value='15'>LIMA </option>
                                            <option value='16'>LORETO </option>
                                            <option value='17'>MADRE DE DIOS </option>
                                            <option value='18'>MOQUEGUA </option>
                                            <option value='19'>PASCO </option>
                                            <option value='20'>PIURA </option>
                                            <option value='07'>PROV. CONST. DEL CALLAO </option>
                                            <option value='21'>PUNO </option>
                                            <option value='22'>SAN MARTIN </option>
                                            <option value='23'>TACNA </option>
                                            <option value='24'>TUMBES </option>
                                            <option value='25'>UCAYALI </option>
                                        </select>
                                    </div>
                                    <div class="select-customp">
                                        <select id="year4" name="year4">
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                        </select>
                                    </div>
                                    <a href="login" class="btn icon-magnifier"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active text-center" id="customer-content" role="tabpanel"
                    aria-labelledby="tab-customer" v-if="SectoresSelectVisible === true">
                    <div class="container">
                        <div class="header-left col-lg-2 w-auto pl-0">
                        </div>
                        <div class="header-right w-lg-max pl-2">
                            <div class="header-searchp header-iconp header-search-inlinep header-search-categoryp w-lg-max"
                                style="display: flex; justify-content: center;">
                                <div class="header-search-wrappep">
                                    <input type="hidden" id="buscasql5" name="buscasql5" value="sector">
                                    <div class="select-customp">
                                        <select id="cate5" name="cate5"
                                            style="border-radius: 80px 20px 5px 90px; background-color:#F4F4F4;">
                                            <option value='No tradicionalAgropecuario'>No tradicional - Agropecuario
                                            </option>
                                            <option value='No tradicionalArtesanías'>No tradicional - Artesanías</option>
                                            <option value='No tradicionalMaderas y papeles'>No tradicional - Maderas y
                                                papeles
                                            </option>
                                            <option value='No tradicionalMetal mecánico'>No tradicional - Metal mecánico
                                            </option>
                                            <option value='No tradicionalMinería no metálica'>No tradicional - Minería no
                                                metálica</option>
                                            <option value='No tradicionalNo identificado'>No tradicional - No identificado
                                            </option>
                                            <option value='No tradicionalPesquero'>No tradicional - Pesquero</option>
                                            <option value='No tradicionalPieles y cueros'>No tradicional - Pieles y cueros
                                            </option>
                                            <option value='No tradicionalQuímico'>No tradicional - Químico</option>
                                            <option value='No tradicionalSidero metalúrgico'>No tradicional - Sidero
                                                metalúrgico
                                            </option>
                                            <option value='No tradicionalTextil'>No tradicional - Textil</option>
                                            <option value='No tradicionalVarios (Inc. joyería)'>No tradicional - Varios
                                                (Inc.
                                                joyería)</option>
                                            <option value='TradicionalAgrícolas'>Tradicional - Agrícolas</option>
                                            <option value='TradicionalMineros'>Tradicional - Mineros</option>
                                            <option value='TradicionalPesquero'>Tradicional - Pesquero</option>
                                            <option value='TradicionalPetróleo y gas natural'>Tradicional - Petróleo y gas
                                                natural</option>
                                        </select>
                                    </div>
                                    <div class="select-customp">
                                        <select id="year5" name="year5">
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                        </select>
                                    </div>
                                    <a href="login" class="btn icon-magnifier"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
@import "../assets/css/global.css";

.header-search-wrappep {
    position: absolute;
    margin-top: 10px;
}

.header-search-wrappep {
    position: absolute;
    right: -2.3rem;
    z-index: 999;
    margin-top: 10px;
    color: #8d8d8d;
    height: 40px;
}

.header-search-wrappep select:focus {
    outline: none
}

.header-search-wrappep .btn {
    position: relative;
    padding: 0 0 3px 0;
    border: 0;
    border-left: 1px solid #e7e7e7;
    min-width: 48px;
    color: #606669;
    font-size: 16px;
    background: #f7f7f7
}

.header-search-wrappep {
    display: flex;
    display: -ms-flex;
    position: static;
    margin: 0;
    border-width: 0
}

.header-search-wrappep {
    left: 15px;
    right: 15px
}

.header-search-inlinep.header-searchp {
    margin-right: 62.3rem
}

.header-search-inlinep.header-searchp {
    margin-right: 62.3rem
}

.header-bottom.fixed .header-search-inlinep.header-searchp i {
    font-size: 2.3rem
}

.header-bottom.fixed .header-search-inlinep.header-searchp .header-search-wrappep {
    position: absolute;
    margin-top: 20px;
}

.header-searchp {
    position: relative
}

.header-searchp form {
    margin: 0
}

.header-searchp .form-control,
.header-searchp select {
    margin: 0;
    border: 0;
    color: inherit;
    font-size: 1.3rem;
    height: 100%;
    box-shadow: none
}

.header-searchp .form-control,
.header-searchp .select-customp {
    background: #f7f7f7
}

@media (-ms-high-contrast:active),
(-ms-high-contrast:none) {
    .header-searchp .form-control {
        flex: 1
    }
}

.header-searchp .form-control::placeholder {
    color: #a8a8a8
}

.header-searchp:not(.header-search-categoryp) .form-control {
    border-radius: 5rem
}

.header-searchp:not(.header-search-categoryp) .btn {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    background: transparent;
    border: 0;
    padding: 0 0.8em;
    color: #333
}

.search-togglep:after {
    position: absolute;
    right: calc(50% - 10px);
    bottom: -10px;
    border: 0px solid transparent;
    border-bottom-color: #08c
}

.header-search-categoryp .form-control {
    border-radius: 5rem 0 0 5rem
}

.header-search-categoryp .btn {
    border-radius: 0 5rem 5rem 0
}

.header-search-wrappep {
    position: absolute;
    z-index: 999;
    margin-top: 10px;
    color: #8d8d8d;
    height: 40px;
    border-radius: 5rem;
    border: 0px solid #08c
}

.header-search-wrappep:after {
    clear: both;
    content: ""
}

.header-search-wrapper .btn {
    position: relative;
    padding: 0 0 3px 0;
    border: 0;
    border-left: 1px solid #e7e7e7;
    min-width: 48px;
    color: #606669;
    font-size: 16px;
    background: #f7f7f7
}

.header-search-wrappep .btn:before {
    margin-top: 5px;
    font-weight: 800
}

.header-search-popup .form-control {
    min-width: 266px;
    padding: 4px 22px;
    font-size: 1.4rem;
    line-height: 20px
}

.header-search-popupp .form-control:focus {
    border: #e7e7e7
}

.header-search-inlinep .form-control {
    min-width: 21rem;
    padding: 1rem 2rem
}

@media (min-width:992px) {

    .header-search-inlinep .btn:after,
    .header-search-inlinep .search-togglep {
        display: none
    }

    .header-search-inlinep.header-searchp .header-search-wrappep {
        display: flex;
        display: -ms-flex;
        position: static;
        margin: 0;
        border-width: 0
    }
}

@media (max-width:767px) {
    .header-searchp .form-control {
        min-width: 17rem
    }
}

@media (max-width:575px) {
    .header-search-wrappep {
        left: 15px;
        right: 15px
    }
}

.header-right {
    display: flex;
    justify-content: flex-end;
}

.header-rightp {
    padding-right: 22.6rem
}

.tabs .active {
    color: blue;
}
</style>
<script>
import { RouterLink } from 'vue-router'

export default {
    data() {
        return {
            tabs: ['Productos', 'Partidas', 'Mercados', 'Empresas', 'Regiones', 'Sectores'],
            activeTab: 'Productos',
            ProductosSelectVisible: true,
            MercadosSelectVisible: false,
            PartidasSelectVisible: false,
            RegionesSelectVisible: false,
            SectoresSelectVisible: false,
            EmpresasSelectVisible: false,
        };
    },
    methods: {
        handleTabClick(tab) {
            this.activeTab = tab;
            this.ProductosSelectVisible = false;
            this.MercadosSelectVisible = false;
            this.PartidasSelectVisible = false;
            this.RegionesSelectVisible = false;
            this.SectoresSelectVisible = false;
            this.EmpresasSelectVisible = false;
            if (tab === 'Productos') {
                this.ProductosSelectVisible = true;
                this.activeTab == 'Productos';
            }
            if (tab === 'Mercados') {
                this.MercadosSelectVisible = true;
                this.activeTab == 'Mercados';
            }
            if (tab === 'Empresas') {
                this.EmpresasSelectVisible = true;
                this.activeTab == 'Empresas';
            }
            if (tab === 'Partidas') {
                this.PartidasSelectVisible = true;
                this.activeTab == 'Partidas';
            }
            if (tab === 'Regiones') {
                this.RegionesSelectVisible = true;
                this.activeTab == 'Regiones';
            }
            if (tab === 'Sectores') {
                this.SectoresSelectVisible = true;
                this.activeTab = 'Sectores';
            }
            console.log("tab" + tab + "...." + this.activeTab);
            console.log("tab" + this.ProductosSelectVisible);
            console.log("tab" + this.MercadosSelectVisible);
            console.log("tab" + this.PartidasSelectVisible);
            console.log("tab" + this.RegionesSelectVisible);
            console.log("tab" + this.SectoresSelectVisible);
            console.log("tab" + this.EmpresasSelectVisible);
        }
    },
    components: { RouterLink }
}
</script>