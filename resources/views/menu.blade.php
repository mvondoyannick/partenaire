<ul class="nav">
    <li class="active">
        <a href="{{url('/')}}">
            <i class="pe-7s-graph"></i>
            <p>Accueil</p>
        </a>
    </li>
    <li>
        <a href="{{route('search')}}">
            <i class="pe-7s-search"></i>
            <p>Rechercher</p>
        </a>
    </li>
    <li>
        <a href="{{route('new')}}">
            <i class="pe-7s-add-user"></i>
            <p>Nouveau compte</p>
        </a>
    </li>
    <li>
        <a href="{{route('credit')}}">
            <i class="pe-7s-upload"></i>
            <p>Crediter</p>
        </a>
    </li>
    <li>
        <a href="{{route('debit')}}">
            <i class="pe-7s-download"></i>
            <p>Debiter</p>
        </a>
    </li>
    <li>
        <a href="{{route('activate')}}">
            <i class="pe-7s-network"></i>
            <p>Activer</p>
        </a>
    </li>
    <li>
        <a href="{{route('lock')}}">
            <i class="pe-7s-lock"></i>
            <p>Bloquer</p>
        </a>
    </li>
    <li class="active-pro">
        <a href="{{route('unlock')}}">
            <i class="pe-7s-unlock"></i>
            <p>Debloquer</p>
        </a>
    </li>
    <li class="active-pro">
        <a href="{{route('history')}}">
            <i class="pe-7s-timer"></i>
            <p>Historique</p>
        </a>
    </li>
    <li class="active-pro">
        <a href="{{route('logs')}}">
            <i class="pe-7s-album"></i>
            <p>Journal</p>
        </a>
    </li>
    @include('admin-menu')

</ul>