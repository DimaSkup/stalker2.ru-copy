@extends('base')

@section('content')
    <div class="news-wrapper">
        <div class="news-col">
            <div class="news-categories">
                <a href="#">Инсайды</a>
                <div class="line"></div>
                <a href="#">Моддинг</a>
                <div class="line"></div>
                <a href="#">Комьюнити</a>
                <div class="line"></div>
                <a href="#">Слухи</a>
                <div class="line"></div>
                <a href="#">От разработчиков</a>
            </div>
            {{-- <section class="news-latest">
                <a class="news-item" href="#">
                    <img src="{{ asset('images/STALKER2.jpg') }}" title="">
                    <div class="description">
                        <h2>Лучший фанатский трейлер S.T.A.L.K.E.R. 2</h2>
                    </div>
                </a>
                <a class="news-item" href="#">
                    <img src="{{ asset('images/STALKER2.jpg') }}" title="">
                    <div class="description">
                        <h2>Григорович рассказал о деталях разработки: о артефактах и НПС</h2>
                    </div>
                </a>
                <a class="news-item" href="#">
                    <img src="{{ asset('images/STALKER2.jpg') }}" title="">
                    <div class="description">
                        <h2>Лучший фанатский трейлер S.T.A.L.K.E.R. 2</h2>
                    </div>
                </a>
            </section> --}}


            {{-- IMPORTANT NEWS --}}
            <section class="news-feauted">
                <a class="news-item link-block" href="#">
                    <div class="news-info-wrapper">
                        <div class="news-tag">Важное</div>
                        <div class="news-title">
                            <span class="link-text">Совсем скоро мы увидим нечто новое!</span>
                        </div>
                        <div class="news-description">Компания SGC представила трейлер на презентации Xbox, показав все возможности движка</div>
                    </div>
                    <div class="news-img-wrapper" style="
                        background-image: url({{ asset('images/chn.png') }});
                        margin-top: 20px;
                        background-size: cover;
                    "></div>
                </a>
            </section>

            {{-- VIDEO NEWS --}}
            <section class="news-video">
                <h2>Видео новости</h2>
                <div class="news-block-wrapper">
                    {{-- ONE VIDEO NEWS BLOCK --}}
                   @foreach ($videoNews as $singleVideoNews)

                        <a class="news-item link-block" href="#">
                            <div class="news-img-wrapper" style="background-image: url({{ asset('images/STALKER2.jpg') }});"></div>
                            <div class="news-info-wrapper">
                                <div class="news-views">{{ $singleVideoNews->views }}</div>
                                <h3 class="link-text">{{ $singleVideoNews->title }}</h3>
                            </div>
                        </a>
                   @endforeach



                    <a class="news-item link-block" href="#">
                        <div class="news-img-wrapper" style="background-image: url({{ asset('images/STALKER2.jpg') }});"></div>
                        <div class="news-info-wrapper">
                            <div class="news-views">12,544</div>
                            <h3 class="link-text">В сеть слили новые ассеты игры: ботинки и батон</h3>
                        </div>
                    </a>
                    <a class="news-item link-block" href="#">
                        <div class="news-img-wrapper" style="background-image: url({{ asset('images/STALKER2.jpg') }});"></div>
                        <div class="news-info-wrapper">
                            <div class="news-views">12,544</div>
                            <h3 class="link-text">В сеть слили новые ассеты игры: ботинки и батон</h3>
                        </div>
                    </a>
                </div>
            </section>

            {{-- POPULAR NEWS --}}
            <section class="news-block">
                <h2>Популярные новости</h2>
                <div class="news-block-wrapper">
                    <a class="news-item link-block" href="#">
                        <div class="news-img-wrapper" style="background-image: url({{ asset('images/STALKER2.jpg') }});"></div>
                        <div class="news-info-wrapper">
                            <div class="news-tag">Моддинг</div>
                            <div class="news-description link-text">
                                Первые моды S.T.A.L.K.E.R 2 появятся спустя неделю от релиза
                            </div>
                        </div>
                    </a>
                    <a class="news-item link-block" href="#">
                        <div class="news-img-wrapper" style="background-image: url({{ asset('images/STALKER2.jpg') }});"></div>
                        <div class="news-info-wrapper">
                            <div class="news-tag">Инсайды</div>
                            <div class="news-description link-text">
                                Скриншоты оружия были слиты на этой неделе: Калашников и СВД
                            </div>
                        </div>
                    </a>
                    <a class="news-item link-block" href="#">
                        <div class="news-img-wrapper" style="background-image: url({{ asset('images/STALKER2.jpg') }});"></div>
                        <div class="news-info-wrapper">
                            <div class="news-tag">Инсайды</div>
                            <div class="news-description link-text">
                                Скупейко: новый разработчик низкоуровневой архитектуры игры
                            </div>
                        </div>
                    </a>
                </div>
            </section>

            {{-- THE BEST ARRODING TO THE EDITORIAL BOARD --}}
            <section class="news-block">
                <h2>Лучшее по мнению редакции</h2>
                <div class="news-block-wrapper">
                    <a class="news-item link-block" href="#">
                        <div class="news-img-wrapper" style="background-image: url({{ asset('images/STALKER2.jpg') }});"></div>
                        <div class="news-info-wrapper">
                            <div class="news-tag">Комьюнити</div>
                            <div class="news-description link-text">
                                Скриншоты оружия были слиты на этой неделе: Калашников и СВД
                            </div>
                        </div>
                    </a>
                    <a class="news-item link-block" href="#">
                        <div class="news-img-wrapper" style="background-image: url({{ asset('images/STALKER2.jpg') }});"></div>
                        <div class="news-info-wrapper">
                            <div class="news-tag">Слухи</div>
                            <div class="news-description link-text">
                                Первые моды S.T.A.L.K.E.R 2 появятся спустя неделю от релиза
                            </div>
                        </div>
                    </a>
                    <a class="news-item link-block" href="#">
                        <div class="news-img-wrapper" style="background-image: url({{ asset('images/STALKER2.jpg') }});"></div>
                        <div class="news-info-wrapper">
                            <div class="news-tag">От разработчиков</div>
                            <div class="news-description link-text">
                                Григорович утонул в собственных доходах, поиск трупа прошел неудачно
                            </div>
                        </div>
                    </a>
                </div>
            </section>
        </div>
        @include('news._time-point-block')
    </div>
    @include('news._subscribe-block')
@endsection
