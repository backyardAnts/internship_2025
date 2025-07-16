<div class="border-top">
    <div class=" d-flex justify-content-between align-items-center flex-wrap border-bottom">

        <div class="d-flex align-items-center gap-2">
            <div id="menu-toggle-react"></div>
        </div>

        <div class="d-flex justify-content-center align-items-center gap-4 flex-wrap ">
            <img src="{{ asset('images/war.webp') }}" alt="Iran-Israel" style="height: 30px;">
            <div id="hovering-arrow-react"></div>
            <div class = "nav-in-react"></div>
        </div>

        <div class="d-flex align-items-center gap-2 me-3">
  <button id="search-toggle-btn" class="btn btn-light border-0">
    <i class="fa-solid fa-magnifying-glass me-1"></i>
    <span>Rechercher</span>
  </button>
</div>
    </div>
    <div class = "container-search" id="search-container">
  <div class = "d-flex justify-content-center">
    <input
    type="text"
    placeholder="Tapez ici votre recherche"/>
  <button class = "research-button" >Rechercher</button>
  </div>
</div>

</div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('search-toggle-btn');
    const searchContainer = document.getElementById('search-container');

    toggleBtn.addEventListener('click', function () {
      searchContainer.classList.toggle('active');
    });
  });
</script>
