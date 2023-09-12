<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>The Symbolic Journal</title>
        <link rel="stylesheet" href="css/main.css" />
        <script src="vue/main.vue"></script>
    </head>

    <body>
        <header id="gamburger-notopen">
            <a>
                <img
                    class="leftside-menu-icons"
                    src="images/gamburger-light.png"
                />
            </a>
        </header>
        <header
            id="gamburger-open"
            style="
                background: url('images/leftside-menu.png') top center no-repeat;
            "
        >
            <!-- <img class="leftside-menu" src="images/leftside-menu.png" /> -->
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
        <section>
            <img class="top-banner" src="images/top-banner.png" />
            <section class="banners-place">
                <div class="firstsecond-main__category">
                    <div class="banner-box">
                        <a href="#">
                            <img
                                class="first-banner"
                                src="images/first-banner.png"
                            />
                            <p class="banner-script">Politics</p>
                        </a>
                    </div>
                    <hr />
                    <div class="banner-box">
                        <a href="#">
                            <img
                                class="second-banner"
                                src="images/second-banner.png"
                            />
                            <p class="banner-script">Food</p>
                        </a>
                    </div>
                </div>
                <hr />
                <div class="third-main__category">
                    <div class="banner-box">
                        <a href="">
                            <img
                                class="third-banner"
                                src="images/third-banner.png"
                            />
                            <p class="banner-script">Travelling</p>
                        </a>
                    </div>
                </div>
            </section>
        </section>
        <footer></footer>
    </body>
</html>
