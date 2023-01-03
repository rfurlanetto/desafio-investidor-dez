<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0" style="margin-left: auto!important;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('crud-noticia')}}">CADASTRAR NOTICIAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('list-noticia')}}">EXIBIR NOTICIAS</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" id="search" placeholder="Search" aria-label="Search">
      </form>
    </div>
  </div>
</nav>