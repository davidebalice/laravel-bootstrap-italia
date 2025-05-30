<!-- resources/views/components/navbar.blade.php -->
<div class="it-header-slim-wrapper">
  <div class="container-xxl">
    <div class="row">
      <div class="col-12">
        <div class="it-header-slim-wrapper-content">
          <a class="d-none d-lg-block navbar-brand" href="#">Ente appartenenza</a>
          <div class="nav-mobile">
            <nav aria-label="Navigazione accessoria">
              <a class="it-opener d-lg-none" data-bs-toggle="collapse" href="#menu1a" role="button" aria-expanded="false" aria-controls="menu4">
                <span>Ente appartenenza</span>
                <svg class="icon" aria-hidden="true"><use href="/vendor/bootstrap-italia/svg/sprites.svg#it-expand"></use></svg>
              </a>
              <div class="link-list-wrapper collapse" id="menu1a">
                <ul class="link-list">
                  <li><a class="dropdown-item list-item" href="#">Link 1</a></li>
                  <li><a class="list-item active" href="#" aria-current="page">Link 2 (Attivo)</a></li>
                </ul>
              </div>
            </nav>
          </div>
          <div class="it-header-slim-right-zone">
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Selezione lingua: lingua selezionata</span>
                <span>ITA</span>
                <svg class="icon d-none d-lg-block"><use href="/vendor/bootstrap-italia/svg/sprites.svg#it-expand"></use></svg>
              </a>
              <div class="dropdown-menu">
                <div class="row">
                  <div class="col-12">
                    <div class="link-list-wrapper">
                      <ul class="link-list">
                        <li><a class="dropdown-item list-item" href="#"><span>ITA <span class="visually-hidden">selezionata</span></span></a></li>
                        <li><a class="dropdown-item list-item" href="#"><span>ENG</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="it-access-top-wrapper">
              <a class="btn btn-primary btn-sm" href="/login">Accedi</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>