<div class="sidebar-main">

    <div class="sidebar-widget">
        <div class="search-main">
            <form action="" id="search-form" method="get">

                <input name='s' class="search-txt" type="text" value="Поиск" onBlur="if(this.value=='')this.value='Поиск'" onFocus="if(this.value=='Поиск')this.value=''" />
                <input type="image" src="<?php bloginfo('template_url') ?>/images/search-btn.jpg" />

            </form>
        </div>
    </div>

    <?php if (!dynamic_sidebar('sidebar')): ?>
        <p>Здесь виджеты сайдбара</p>
    <?php endif; ?>

    <div class="sidebar-widget">
        <div class="facebook">
            <img src="<?php bloginfo('template_url') ?>/images/facebook.jpg" alt="" />
        </div>
    </div>

</div>