<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link @if(Request::is('home')) @else collapsed @endif" href="/home">
          <i class="bi bi-grid"></i>
          <span>Accueil</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
      
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
            <i class="bi bi-journal-text"></i><span>Utilisateurs</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav" style="">
            <li>
                <a href="forms-elements.html">
                    <i class="bi bi-circle"></i><span>Abonnées</span>
            </a>
          </li>
          <li>
              <a href="forms-layouts.html">
                  <i class="bi bi-circle"></i><span>Entraineurs</span>
                </a>
            </li>
        </ul>
    </li>
    
    <li class="nav-item">
      <a class="nav-link @if(Request::is('test')) @else collapsed @endif" href="/home">
        <i class="bi bi-grid"></i>
        <span>Salles</span>
      </a>
    </li><!-- End Dashboard Nav -->
    <li class="nav-item">
      <a class="nav-link @if(Request::is('test')) @else collapsed @endif" href="/home">
        <i class="bi bi-grid"></i>
        <span>Activités</span>
      </a>
    </li><!-- End Dashboard Nav -->
    <li class="nav-item">
      <a class="nav-link @if(Request::is('test')) @else collapsed @endif" href="/home">
        <i class="bi bi-grid"></i>
        <span>Catégories</span>
      </a>
    </li><!-- End Dashboard Nav -->
    <li class="nav-item">
      <a class="nav-link @if(Request::is('test')) @else collapsed @endif" href="/home">
        <i class="bi bi-grid"></i>
        <span>Séances</span>
      </a>
    </li><!-- End Dashboard Nav -->
    <li class="nav-item">
      <a class="nav-link @if(Request::is('test')) @else collapsed @endif" href="/home">
        <i class="bi bi-grid"></i>
        <span>Abonnements</span>
      </a>
    </li><!-- End Dashboard Nav -->
    <li class="nav-item">
      <a class="nav-link @if(Request::is('test')) @else collapsed @endif" href="/home">
        <i class="bi bi-grid"></i>
        <span>Compétitions</span>
      </a>
    </li><!-- End Dashboard Nav -->
    

      

      

      

      

      

      

      

      

      

      <!-- End Blank Page Nav -->

    </ul>

  </aside>