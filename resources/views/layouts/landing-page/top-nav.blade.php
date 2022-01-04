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