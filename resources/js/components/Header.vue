<template>
  <header id="gamburger-notopen">
            <a>
                <img
                    class="leftside-menu-icons"
                    src="images/gamburger-light.png"
                />
            </a>
        </header>
        <header id="gamburger-open" style="background: url('images/leftside-menu.png') top center no-repeat;">
          <img class="leftside-menu" src="images/leftside-menu.png" />
             <a href=""> 
                <img
                    class="leftside-menu-icons"
                    src="images/gamburger-light.png"
                />
            </a>
            <a href="">
                <img class="leftside-menu-icons" src="images/fix-light.png" />
            </a>
            <a href="">
                <img class="leftside-menu-icons" src="images/alarm-light.png" />
            </a>
            <a href="">
                <img class="leftside-menu-icons" src="images/save-light.png" />
            </a>
            <a href="">
                <img class="leftside-menu-icons" src="images/user-light.png" />
            </a>
        </header>
</template>
<script>
export default {
  name: 'header',
}
</script>