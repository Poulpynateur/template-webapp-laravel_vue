<template>
  <div id="main-menu">
    <div>
      <a class="btn btn-link text-gray" href="/">Nicolas DE GHESELLE</a>
    </div>
    <div>
      <div class="dropdown dropdown-right">
        <a href="#" class="btn btn-link dropdown-toggle" tabindex="0" disabled>
          <i class="icon icon-more-horiz"></i>
        </a>
    
        <ul class="menu">
          <li class="menu-item">
            <a class="btn btn-link float-right" href="/about">About<i class="icon ml-2 icon-emoji"></i></a>
          </li>
          <li class="menu-item">
            <a class="btn btn-link float-right" href="/login">Login<i class="icon ml-2 icon-people"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "MainMenu",
  props: ['home', 'about', 'login']
};
</script>