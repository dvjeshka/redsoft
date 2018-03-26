<?
//TODO: для титульной нужен доп класс:
$GLOBALS["bodyClass"] = "page-main";
include_once("_inc_header.php");?>


    <nav  class="fp-menu">
        <ul class="fp-menu__list" >
            <li class="fp-menu__item active" data-menuanchor="section-main"><a class="fp-menu__link" href="#section-main"></a></li>
            <li class="fp-menu__item" data-menuanchor="section-season"><a class="fp-menu__link" href="#section-season"></a></li>
            <li class="fp-menu__item" data-menuanchor="section-gallery"><a class="fp-menu__link" href="#section-gallery"></a></li>
            <li class="fp-menu__item" data-menuanchor="section-reviews"><a class="fp-menu__link" href="#section-reviews"></a></li>
        </ul>
    </nav>


    <div class="fullpage-wrap">
    <section class="section section-main d-pr is-play-section-main" data-anchor="section-main">
        <div class="section-main__img-wrapper d-pos">
            <div class="section-main__img-back d-bgi d-pos d-pos_b"></div>
            <div class="section-main__img section-main__img_left d-bgi d-pos d-pos_b section-main__trans"></div>
            <div class="section-main__img section-main__img_right d-bgi d-pos d-pos_b section-main__trans"></div>

            <div class="section-main__img_wrap-top d-pos">
                <div class="section-main__img section-main__img_top d-bgi d-pos d-pos_b"></div>
            </div>

            <div class="section-main__wheel d-bgi d-ib section-main__trans"></div>
        </div>
        <div class="d-grid" >
            <div class="slider slider-main__slider " data-slick='{"slidesToShow": 1, "slidesToScroll": 1,"dots": false, "fade": true,"arrows":true,"responsive": [{"breakpoint": 767,"settings":{"arrows": false}}]}'>
                <div>
                    <div class="d-col_md_6 section-main__text trans">
                        <h1 class="d-mb_2">NITTO <svg class="d-ib" xmlns="http://www.w3.org/2000/svg" width="200" height="10" viewBox="0 0 200 10"><rect width="200" height="10"/></svg>
                            <br> Шины, которые <span class="d-clr_1">меняют всё!</span></h1>
                        <div class="h3 d-mb_8">Переворот в представлении <br>об устойчивости при скоростном <br>
                            маневрировании</div>
                    </div>
                </div>
                <div>
                    <div class="d-col_md_6 section-main__text trans">
                        <h1 class="d-mb_2">Текст</h1>
                        <div class="h3 d-mb_8">Текст</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="select-main-wrap d-pos">
            <div class="d-grid">
                <div class="select-main">
                    <div class="select-main__title d-fw_5 d-mb_3">Подберите подходящие шины для вашего автомобиля:</div>
                    <form action="?" class="select-main__btns d-table d-col_xs_12">
                        <div class="d-table__cell">
                            <div class="switch d-wsnw">
                                <label class="switch__item d-ib switch__left">
                                    <input type="radio" class="switch__input" name="switch" checked>
                                    <span class="switch__btn d-db btn trans btn_br_l">По авто</span>

                                </label>
                                <label class="switch__item d-ib switch__right">
                                    <input type="radio" class="switch__input" name="switch">
                                    <span class="switch__btn d-db btn trans">По размеру</span>
                                </label>
                            </div>
                        </div>
                        <div class="d-table__cell">
                            <select data-select class="d-col_xs_12">
                                <option>Ширина колес</option>
                                <option>Ширина колес</option>
                            </select>
                        </div>
                        <div class="d-table__cell">
                            <select data-select class="d-col_xs_12">
                                <option>Высота профиля</option>
                                <option>Высота профиля</option>
                            </select>
                        </div>
                        <div class="d-table__cell">
                            <select data-select class="d-col_xs_12">
                                <option>Диаметр</option>
                                <option>Диаметр</option>
                            </select>
                        </div>
                        <div class="d-table__cell">
                            <input class="btn_br_r d-col_xs_12" type="submit" value="Подобрать шины">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <section class="section section-season" data-anchor="section-season">
      <div class="js-twentytwenty twentytwenty-container trans_hb trans_ha" >
            <figure class="d-bgi twentytwenty-container__item twentytwenty-container__item_right js-tw-img d-pos trans_hb" style="background-image:url(img/bg-tw_2_r.jpg)"></figure>
            <figure class="d-bgi twentytwenty-container__item twentytwenty-container__item_left js-tw-img d-pos trans_hb" style="background-image:url(img/bg-tw_1_r.jpg)"></figure>
        </div>

        <div class="section-season__names">
            <div class="section-season__item d-pos section-season__item_right d-table trans">
                <div class="d-table__cell"> <div class="h2">Зима</div></div>
            </div>
            <div class="section-season__item d-pos section-season__item_left d-table trans">
                <div class="d-table__cell"> <div class="h2">Лето</div></div>
            </div>
        </div>

    </section>

    <section class="section section-gallery" data-anchor="section-gallery">
        <div class="scrollbar-inner" data-scrollbar>
            <div class="section-gallery__list d-wsnw">
                <div class="section-gallery__slide d-ib">
                    <div class="section-gallery__col d-col_md_3 d-col">
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_1_1.jpg)"></figure>
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_1_2.jpg)"></figure>
                    </div>
                    <div class="section-gallery__col d-col_md_3 d-col">
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_1_3.jpg)"></figure>
                        <div class="section-gallery__item d-bgi d-pos_b trans_hb section-gallery__item_text" style="background-image:url(img/icon-section-gallery__item_1.png)">
                            <div class="h3 d-lhi">Мы создаем шины <span class="d-clr_1">для тех, <br>
                                    кто в восторге от своих автомобилей</span></div>
                            <div>Nitto Tire движет страсть и инновации.
                                Мы создаем шины для тех,
                                кто в восторге от своих автомобилей.
                                Мы всегда стремимся предвидеть и управлять потребительским тенденциям путем поддержки развивающихся рынков, прежде чем они станут мейнстримом, помогая им расти и двигая рынок вперед.</div>
                        </div>
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_1_4.jpg)"></figure>
                    </div>
                    <div class="section-gallery__col d-col_md_3 d-col">
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_1_5.jpg)"></figure>
                    </div>
                    <div class="section-gallery__col d-col_md_3 d-col">
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_1_6.jpg)"></figure>
                        <div class="section-gallery__item d-bgi d-pos_b trans_hb section-gallery__item_video" style="background-image:url(upload/section-gallery__item_1_7.jpg)">
                            <div class="icon-play d-pos d-bgi" data-colorbox='{"href":"https://www.youtube.com/embed/P5EG9A26tL8","iframe":"true","height":500,"width":750}'></div>
                        </div>
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_1_8.jpg)"></figure>
                    </div>
                </div>
                <div class="section-gallery__slide d-ib">
                    <div class="section-gallery__col d-col_md_3 d-col">
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_2_1.jpg)"></figure>
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_2_2.jpg)"></figure>
                    </div>
                    <div class="section-gallery__col d-col_md_3 d-col">
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_2_2-1.jpg)"></figure>
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_2_3.jpg)"></figure>
                        <div class="section-gallery__item d-bgi d-pos_b trans_hb section-gallery__item_text" style="background-image:url(img/icon-section-gallery__item_2.png)">
                            <div class="h3 d-lhi">Удовлетворенность клиента</div>
                            <div>Наша цель — сделать так, чтобы клиенты оставались полностью довольны качеством продукции и сервиса и снова обращались в магазины за покупкой шин NITTO</div>
                        </div>
                    </div>
                    <div class="section-gallery__col d-col_md_3 d-col">
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_2_4.jpg)"></figure>
                    </div>
                    <div class="section-gallery__col d-col_md_3 d-col">
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_2_5.jpg)"></figure>
                        <div class="section-gallery__item d-bgi d-pos_b trans_hb section-gallery__item_video" style="background-image:url(upload/section-gallery__item_2_6.jpg)">
                            <div class="icon-play d-pos d-bgi" data-colorbox='{"href":"https://www.youtube.com/embed/P5EG9A26tL8","iframe":"true","height":500,"width":750}'></div>
                        </div>
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_2_7.jpg)"></figure>
                    </div>
                </div>
                <div class="section-gallery__slide d-ib">
                    <div class="section-gallery__col d-col_md_3 d-col">
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_3_1.jpg)"></figure>
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_3_2.jpg)"></figure>
                    </div>
                    <div class="section-gallery__col d-col_md_3 d-col">
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_3_3.jpg)"></figure>
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_3_4.jpg)"></figure>
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_3_5.jpg)"></figure>
                    </div>
                    <div class="section-gallery__col d-col_md_3 d-col">
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_3_6.jpg)"></figure>
                    </div>
                    <div class="section-gallery__col d-col_md_3 d-col">
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_3_7.jpg)"></figure>
                        <div class="section-gallery__item d-bgi d-pos_b trans_hb section-gallery__item_text" style="background-image:url(img/icon-section-gallery__item_4.png)">
                            <div class="h3 d-lhi">Безопасность</div>
                            <div>Мы предъявляем высокие требования к безопасности продукции и ставим ее во главу угла при создании новых шин.</div>
                        </div>
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_3_8.jpg)"></figure>
                    </div>
                </div>
                <div class="section-gallery__slide d-ib">
                    <div class="section-gallery__col d-col_md_3 d-col">
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_4_1.jpg)"></figure>
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_4_2.jpg)"></figure>
                    </div>
                    <div class="section-gallery__col d-col_md_3 d-col">
                        <div class="section-gallery__item d-bgi d-pos_b trans_hb section-gallery__item_text" style="background-image:url(img/icon-section-gallery__item_3.png)">
                            <div class="h3 d-lhi">Удовлетворенность клиента</div>
                            <div>Наша цель — сделать так, чтобы клиенты оставались полностью довольны качеством продукции и сервиса и снова обращались в магазины за покупкой шин NITTO</div>
                        </div>
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_4_3.jpg)"></figure>
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_4_4.jpg)"></figure>
                    </div>
                    <div class="section-gallery__col d-col_md_3 d-col">
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_4_5.jpg)"></figure>
                    </div>
                    <div class="section-gallery__col d-col_md_3 d-col">
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_4_6.jpg)"></figure>
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb section-gallery__item_video" style="background-image:url(upload/section-gallery__item_4_7.jpg)">
                            <div class="icon-play d-pos d-bgi" data-colorbox='{"href":"https://www.youtube.com/embed/P5EG9A26tL8","iframe":"true","height":500,"width":750}'></div>
                        </figure>
                        <figure class="section-gallery__item d-bgi d-pos_b trans_hb" style="background-image:url(upload/section-gallery__item_4_8.jpg)"></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-reviews js-section-reviews fp-auto-height" data-anchor="section-reviews">
        <div class="section-reviews__content">
            <div class="d-grid">
                <div class="d-row">
                    <div class="d-col d-col_md_6">
                        <h2>Обзоры</h2>
                        <div class="reviews-list scrollbar-outer" data-scrollbar>
                            <ul class="reviews-list__list">
                                <li class="reviews-list__item d-cp d-table d-mb_2 reviews-list__item_active" data-youtube='{"src":"https://www.youtube.com/embed/yrPfDF_mDeY?rel=0&amp;controls=1&amp;showinfo=0;autoplay=1"}'>
                                    <img src="upload/reviews-video_1.jpg" alt="" class="reviews-list__img-hide d-hidden">
                                    <div class="reviews-list__image d-table__cell">
                                        <figure class="reviews-list__img d-bgi trans" style="background-image:url(upload/reviews-list__item_1.png)"></figure>
                                    </div>
                                    <div class="reviews-list__descr trans">
                                        <div class="reviews-list__name h3">Обзор. Грязевые шины.</div>
                                        <div class="reviews-list__text h5 d-ttn">Trail Grappler M/T</div>
                                    </div>
                                </li>
                                <li class="reviews-list__item d-cp d-table d-mb_2" data-youtube='{"src":"https://www.youtube.com/embed/yrPfDF_mDeY?rel=0&amp;controls=1&amp;showinfo=0;autoplay=1"}'>
                                    <img src="https://www.1zoom.ru/big2/87/210483-2807.jpg" alt="" class="reviews-list__img-hide d-hidden">
                                    <div class="reviews-list__image d-table__cell">
                                        <figure class="reviews-list__img d-bgi trans" style="background-image:url(upload/reviews-list__item_2.png)"></figure>
                                    </div>
                                    <div class="reviews-list__descr trans">
                                        <div class="reviews-list__name h3">5 звёзд Nitto.</div>
                                        <div class="reviews-list__text h5 d-ttn">Тест-драйв Nitto NT 420 S</div>
                                    </div>
                                </li>
                                <li class="reviews-list__item d-cp d-table d-mb_2 reviews-list__item_active" data-youtube='{"src":"https://www.youtube.com/embed/yrPfDF_mDeY?rel=0&amp;controls=1&amp;showinfo=0;autoplay=1"}'>
                                    <img src="upload/reviews-video_1.jpg" alt="" class="reviews-list__img-hide d-hidden">
                                    <div class="reviews-list__image d-table__cell">
                                        <figure class="reviews-list__img d-bgi trans" style="background-image:url(upload/reviews-list__item_1.png)"></figure>
                                    </div>
                                    <div class="reviews-list__descr trans">
                                        <div class="reviews-list__name h3">Обзор. Грязевые шины.</div>
                                        <div class="reviews-list__text h5 d-ttn">Trail Grappler M/T</div>
                                    </div>
                                </li>
                                <li class="reviews-list__item d-cp d-table d-mb_2" data-youtube='{"src":"https://www.youtube.com/embed/yrPfDF_mDeY?rel=0&amp;controls=1&amp;showinfo=0;autoplay=1"}'>
                                    <img src="https://www.1zoom.ru/big2/87/210483-2807.jpg" alt="" class="reviews-list__img-hide d-hidden">
                                    <div class="reviews-list__image d-table__cell">
                                        <figure class="reviews-list__img d-bgi trans" style="background-image:url(upload/reviews-list__item_2.png)"></figure>
                                    </div>
                                    <div class="reviews-list__descr trans">
                                        <div class="reviews-list__name h3">5 звёзд Nitto.</div>
                                        <div class="reviews-list__text h5 d-ttn">Тест-драйв Nitto NT 420 S</div>
                                    </div>
                                </li>
                                <li class="reviews-list__item d-cp d-table d-mb_2 reviews-list__item_active" data-youtube='{"src":"https://www.youtube.com/embed/yrPfDF_mDeY?rel=0&amp;controls=1&amp;showinfo=0;autoplay=1"}'>
                                    <img src="upload/reviews-video_1.jpg" alt="" class="reviews-list__img-hide d-hidden">
                                    <div class="reviews-list__image d-table__cell">
                                        <figure class="reviews-list__img d-bgi trans" style="background-image:url(upload/reviews-list__item_1.png)"></figure>
                                    </div>
                                    <div class="reviews-list__descr trans">
                                        <div class="reviews-list__name h3">Обзор. Грязевые шины.</div>
                                        <div class="reviews-list__text h5 d-ttn">Trail Grappler M/T</div>
                                    </div>
                                </li>
                                <li class="reviews-list__item d-cp d-table d-mb_2" data-youtube='{"src":"https://www.youtube.com/embed/yrPfDF_mDeY?rel=0&amp;controls=1&amp;showinfo=0;autoplay=1"}'>
                                    <img src="https://www.1zoom.ru/big2/87/210483-2807.jpg" alt="" class="reviews-list__img-hide d-hidden">
                                    <div class="reviews-list__image d-table__cell">
                                        <figure class="reviews-list__img d-bgi trans" style="background-image:url(upload/reviews-list__item_2.png)"></figure>
                                    </div>
                                    <div class="reviews-list__descr trans">
                                        <div class="reviews-list__name h3">5 звёзд Nitto.</div>
                                        <div class="reviews-list__text h5 d-ttn">Тест-драйв Nitto NT 420 S</div>
                                    </div>
                                </li>
                                <li class="reviews-list__item d-cp d-table d-mb_2 reviews-list__item_active" data-youtube='{"src":"https://www.youtube.com/embed/yrPfDF_mDeY?rel=0&amp;controls=1&amp;showinfo=0;autoplay=1"}'>
                                    <img src="upload/reviews-video_1.jpg" alt="" class="reviews-list__img-hide d-hidden">
                                    <div class="reviews-list__image d-table__cell">
                                        <figure class="reviews-list__img d-bgi trans" style="background-image:url(upload/reviews-list__item_1.png)"></figure>
                                    </div>
                                    <div class="reviews-list__descr trans">
                                        <div class="reviews-list__name h3">Обзор. Грязевые шины.</div>
                                        <div class="reviews-list__text h5 d-ttn">Trail Grappler M/T</div>
                                    </div>
                                </li>
                                <li class="reviews-list__item d-cp d-table d-mb_2" data-youtube='{"src":"https://www.youtube.com/embed/yrPfDF_mDeY?rel=0&amp;controls=1&amp;showinfo=0;autoplay=1"}'>
                                    <img src="https://www.1zoom.ru/big2/87/210483-2807.jpg" alt="" class="reviews-list__img-hide d-hidden">
                                    <div class="reviews-list__image d-table__cell">
                                        <figure class="reviews-list__img d-bgi trans" style="background-image:url(upload/reviews-list__item_2.png)"></figure>
                                    </div>
                                    <div class="reviews-list__descr trans">
                                        <div class="reviews-list__name h3">5 звёзд Nitto.</div>
                                        <div class="reviews-list__text h5 d-ttn">Тест-драйв Nitto NT 420 S</div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="section-reviews__video d-pos">
                    <iframe class="section-reviews__iframe d-pos" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <div class="section-reviews__video-info d-pos trans">
                        <figure class="d-bgi d-pos section-reviews__image trans"></figure>
                        <div class="icon-play d-bgi d-pos d-cp"></div>
                        <div class="section-reviews__video-name h1 d-clr_2 d-pos d-mb_0"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <footer id="d-footer" class="footer section h6 d-fw_3 section fp-auto-height">
        <div class="d-grid">
            <div class="d-row">
                <div class="d-col d-col_md_4">
                    <a href="/" class="footer__logo d-ib d-mb_6">
                        <figure><img src="img/logo.png" alt=""></figure>
                    </a>
                    <div class="d-mb_7">
                        Nitto Tires © 2017
                    </div>
                    <div class="footer__dev">
                        Разработка сайта: <br> Redsoft
                    </div>
                </div>
                <div class="d-col d-col_md_3">
                    <div class="d-fw_5 d-mb_3">Каталог</div>
                    <nav class="footer-nav">
                        <ul class="footer-nav__list">
                            <li class="footer-nav__item d-mb_2"><a class="footer-nav__link" href="#">Зимние</a></li>
                            <li class="footer-nav__item d-mb_2"><a class="footer-nav__link" href="#">Летние</a></li>
                            <li class="footer-nav__item d-mb_2"><a class="footer-nav__link" href="#">Подбор шин</a></li>
                            <li class="footer-nav__item d-mb_2"><a class="footer-nav__link" href="#"><span class="icon-address d-ib"></span> Найти магазин</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="d-col d-col_md_3">
                    <div class="d-fw_5 d-mb_3">Информация</div>
                    <nav class="footer-nav">
                        <ul class="footer-nav__list">
                            <li class="footer-nav__item d-mb_2"><a class="footer-nav__link" href="#">Инструкции</a></li>
                            <li class="footer-nav__item d-mb_2"><a class="footer-nav__link" href="#">О бренде</a></li>
                            <li class="footer-nav__item d-mb_2"><a class="footer-nav__link" href="#">Новости</a></li>
                            <li class="footer-nav__item d-mb_2"><a class="footer-nav__link" href="#">Контакты</a></li>
                            <li class="footer-nav__item d-mb_2"><a class="footer-nav__link" href="#">Политика конфиденциальности</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="d-col d-col_md_2">
                    <div class="d-fw_5 d-mb_3">Мы в соцсетях:</div>
                    <ul class="soc-link d-table">
                        <li class="soc-link__item d-table__cell"><a target="_blank" class="soc-link__link soc-link__link_vk d-db" href="#"></a></li>
                        <li class="soc-link__item d-table__cell"><a target="_blank" class="soc-link__link soc-link__link_inst d-db" href="#"></a></li>
                        <li class="soc-link__item d-table__cell"><a target="_blank" class="soc-link__link soc-link__link_you d-db" href="#"></a></li>
                        <li class="soc-link__item d-table__cell"><a target="_blank" class="soc-link__link soc-link__link_fa d-db" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>


   


<?include_once("_inc_footer.php");?>