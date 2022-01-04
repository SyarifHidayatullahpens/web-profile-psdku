<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images\pens.png') }}" width="30" height="30"
                class="d-inline-block align-top" alt="">
           <b class="text-primary"style="font-size: 23px">PSDKU SUMENEP</b> 
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="/">Home</a></li>
                <li class="dropdown"><a href="#hero"><span>Program Studi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('ti/kurikulum') }}">Kurikulum</a></li>
                        <li><a href="{{ url('ti/jadwal') }}">Jadwal Kuliah</a></li>
                        <li><a href="{{ url('ti/visi-misi') }}">Visi & Misi</a></li>
                        <li><a href="https://drive.google.com/drive/folders/11e-XAFxL1PEWTzc4Mfi7tTsboIGDraoP?usp=sharing">RPS Prodi</a></li>
                        <li><a href="{{ url('ti/capaian-pembelajaran') }}">Capaian Pembelajaran</a></li>
                        <li><a href="https://drive.google.com/drive/folders/1kGrtH0yLg6UR_Kz4QFv5c-3Ld4suZh_-">Pandauan PA</a></li>
                        <li><a href="https://drive.google.com/drive/folders/19L4JQRVw3R8TRZolY4tVY98nWZHXkUNJ">Pandauan KP</a></li>

                    </ul>
                </li>
                <li class="dropdown"><a href="#hero"><span>Departements</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('/departement/ti') }}">Teknik Informatika</a></li>
                        <li><a href="{{ url('/departement/mmb') }}">Multimedia Broadcasting</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#hero"><span>PMB</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('pmb/snmpn') }}">SNMPN</a></li>
                        <li><a href="{{ url('pmb/sbmpn') }}">SBMPN</a></li>
                        <li><a href="{{ url('pmb/simandiri') }}">SIMANDIRI</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>