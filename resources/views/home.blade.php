<!-- resources/views/home.blade.php -->
@extends('components.layouts.app-layout')

@section('title', 'Home')

@section('content')

<!-- hero -->
<div class="it-hero-wrapper it-dark it-overlay it-bottom-overlapping-content">
    <!-- - img-->
    <div class="img-responsive-wrapper">
      <div class="img-responsive">
        <div class="img-wrapper">
          <img src="https://animals.sandiegozoo.org/sites/default/files/2016-08/animals_hero_mountains.jpg" title="titolo immagine" alt="descrizione immagine" />
        </div>
      </div>
    </div>
    <!-- - texts-->
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="it-hero-text-wrapper bg-dark">
            <span class="it-category">Titolo occhiello</span>
            <h1>Esempio di sito informativo di un ente pubblico italiano</h1>
            <p class="d-none d-lg-block">
              Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras. Dictum sit amet justo donec enim diam vulputate ut. Eu nisl
              nunc mi ipsum faucibus.
            </p>
            <div class="it-btn-container">
              <a class="btn btn-sm btn-secondary" href="#">Label button</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card-wrapper card-space">
          <div class="card card-bg">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1">
                  <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor…</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor
                    sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                  <a class="read-more" href="#">
                    <span class="text">Leggi di più</span>
                    <span class="visually-hidden">su Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor…</span>
                    <svg class="icon"><use href="/vendor/bootstrap-italia/svg/sprites.svg#it-arrow-right"></use></svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end hero -->


   <x-section title="Benvenuto nel portale" bg="light" icon="it-info-circle">
        <!-- contenuto di esempio START -->
        <div class="container white-color">
            <div class="row mb-3">
            <div class="col-12">
                <h2 id="titleEx3">Morbi fermentum amet</h2>
            </div>
            </div>
            <div class="row">
            <div class="col-12 col-lg-6 col-xl-4 pe-0 pe-md-5 mb-3 font-serif">Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras. Dictum sit amet justo donec enim diam vulputate ut. Eu nisl nunc mi ipsum faucibus.</div>
            <div class="col-12 col-lg-6 col-xl-4 pe-0 pe-md-5 mb-3 font-serif">Eget egestas purus viverra accumsan. Diam maecenas ultricies mi eget mauris pharetra et. Etiam dignissim diam quis enim. Eu nisl nunc mi ipsum faucibus.</div>
            <div class="col-12 col-lg-6 col-xl-4 pe-0 pe-md-5 font-serif">Euismod lacinia at quis risus sed vulputate. Scelerisque purus semper eget duis at tellus at urna condimentum. Mattis enim ut tellus elementum sagittis.</div>
            </div>
        </div>
        <!-- contenuto di esempio END -->
    </x-section>




  <x-section2 title="Benvenuto nel portale" bg="light" icon="it-info-circle">
     <!-- contenuto di esempio START -->
     <div class="container">
        <div class="row mb-3">
          <div class="col-12">
            <h2 id="titleEx2">Morbi fermentum amet</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-6 col-xl-4 pe-0 pe-md-5 mb-3 font-serif">Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras. Dictum sit amet justo donec enim diam vulputate ut. Eu nisl nunc mi ipsum faucibus.</div>
          <div class="col-12 col-lg-6 col-xl-4 pe-0 pe-md-5 mb-3 font-serif">Eget egestas purus viverra accumsan. Diam maecenas ultricies mi eget mauris pharetra et. Etiam dignissim diam quis enim. Eu nisl nunc mi ipsum faucibus.</div>
          <div class="col-12 col-lg-6 col-xl-4 pe-0 pe-md-5 font-serif">Euismod lacinia at quis risus sed vulputate. Scelerisque purus semper eget duis at tellus at urna condimentum. Mattis enim ut tellus elementum sagittis.</div>
        </div>
      </div>
      <!-- contenuto di esempio END -->
    </x-section2>

    












    <!-- carousel -->
    <div class="it-carousel-wrapper splide it-carousel-landscape-abstract-three-cols-arrow-visible" data-bs-carousel-splide>
        <div class="container mb-4">
            <div class="splide__track">
                <ul class="splide__list">
            <li class="splide__slide lined_slide">
              <div class="it-single-slide-wrapper">
                <div class="card-wrapper">
                  <div class="card">
                    <div class="card-body">
                      <div class="category-top">
                        <a class="category" href="#">Categoria</a>
                        <span class="data">10/12/2025</span>
                      </div>
                      <h3 class="card-title big-heading h5 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit…</h3>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <span class="card-signature">di Federico De Paolis</span>
                      <a class="read-more" href="#">
                        <span class="text">Leggi di più <span class="visually-hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit…</span></span>
                        <svg class="icon"><use href="/vendor/bootstrap-italia/svg/sprites.svg#it-arrow-right"></use></svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="splide__slide lined_slide">
              <div class="it-single-slide-wrapper">
                <div class="card-wrapper">
                  <div class="card">
                    <div class="card-body">
                      <div class="category-top">
                        <a class="category" href="#">Categoria</a>
                        <span class="data">10/12/2025</span>
                      </div>
                      <h3 class="card-title big-heading h5 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit…</h3>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <span class="card-signature">di Federico De Paolis</span>
                      <a class="read-more" href="#">
                        <span class="text">Leggi di più <span class="visually-hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit…</span></span>
                        <svg class="icon"><use href="/vendor/bootstrap-italia/svg/sprites.svg#it-arrow-right"></use></svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="splide__slide lined_slide">
              <div class="it-single-slide-wrapper">
                <div class="card-wrapper">
                  <div class="card">
                    <div class="card-body">
                      <div class="category-top">
                        <a class="category" href="#">Categoria</a>
                        <span class="data">10/12/2025</span>
                      </div>
                      <h3 class="card-title big-heading h5 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit…</h3>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <span class="card-signature">di Federico De Paolis</span>
                      <a class="read-more" href="#">
                        <span class="text">Leggi di più <span class="visually-hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit…</span></span>
                        <svg class="icon"><use href="/vendor/bootstrap-italia/svg/sprites.svg#it-arrow-right"></use></svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="splide__slide lined_slide">
              <div class="it-single-slide-wrapper">
                <div class="card-wrapper">
                  <div class="card">
                    <div class="card-body">
                      <div class="category-top">
                        <a class="category" href="#">Categoria</a>
                        <span class="data">10/12/2025</span>
                      </div>
                      <h3 class="card-title big-heading h5 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit…</h3>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <span class="card-signature">di Federico De Paolis</span>
                      <a class="read-more" href="#">
                        <span class="text">Leggi di più <span class="visually-hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit…</span></span>
                        <svg class="icon"><use href="/vendor/bootstrap-italia/svg/sprites.svg#it-arrow-right"></use></svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
     </div>
    </div>
    <!-- end carousel -->


















  <script>
    bootstrap.loadFonts('/vendor/bootstrap-italia/fonts')
  </script><!-- Notification per tornare alla pagina principale -->
  <div class="notification dismissable with-icon" role="alert" id="notification-esempi"
    aria-labelledby="notification-esempi-title">
    <h5 id="notification-esempi-title">
      <svg class="icon">
        <use href="/vendor/bootstrap-italia/svg/sprites.svg#it-info-circle"
          xlink:href="/vendor/bootstrap-italia/svg/sprites.svg#it-info-circle"></use>
      </svg>
      Esempio di utilizzo
    </h5>
    <p>
      <a href="/bootstrap-italia/docs/esempi/">Torna alla pagina principale degli esempi</a>
    </p>
    <button type="button" class="btn notification-close">
      <svg class="icon">
        <use href="/vendor/bootstrap-italia/svg/sprites.svg#it-close"
          xlink:href="/vendor/bootstrap-italia/svg/sprites.svg#it-close"></use>
      </svg>
      <span class="visually-hidden">Chiudi notifica: Titolo notification</span>
    </button>
  </div>
  
  <script>
    /*$(document).ready(function () {
      notificationShow('notification-esempi')
    })*/
  </script><script>
    /**
     * Aggiungo il bottone copia negli elementi di esempio codice
     */
    document
      .querySelectorAll('figure.highlight, pre.highlight')
      .forEach(function (node) {
        const button = document.createElement('button'),
          divContainer = document.createElement('div');
        divContainer.classList.add('copy-button-container');
        button.type = 'button';
        button.ariaLabel = 'Copia il codice negli appunti';
        button.innerText = 'Copia';
        button.classList.add('btn', 'btn-primary', 'btn-xs');
        button.setAttribute('type', 'button');
        button.addEventListener('click', function () {
          const code = node.querySelector('code td[class="code"] pre') ?? node.querySelector('code td[class="rouge-code"] pre');
          navigator.clipboard.writeText(code.innerText.trim());
          button.innerText = 'Copiato';
          button.classList.remove('btn-primary');
          button.classList.add('btn-success');
          setTimeout(() => {
            button.classList.remove('btn-success');
            button.classList.add('btn-primary');
            button.innerText = 'Copia';
          }, 5000);
        });
        divContainer.appendChild(button);
        /**
         * Snippet
         * <div class="bd-example">
         * </div><figure class="highlight"><pre><code class="language-html" data-lang="html"><table class="rouge-table"><tbody><tr><td class="gutter gl"><pre class="lineno">1
  </pre></td><td class="code"><pre>       * 
  </pre></td></tr></tbody></table></code></pre></figure>  
         */
        if (node.nodeName == 'FIGURE') {
          node.insertBefore(divContainer, node.querySelector('pre'));
        }
        /*
        * Snippet
        * ```html
        * ```
        */
        else if (node.nodeName == 'PRE') {
          node.classList.remove("highlight");
          node.insertAdjacentElement('beforebegin', divContainer);
        }
      });
  </script>

@endsection


