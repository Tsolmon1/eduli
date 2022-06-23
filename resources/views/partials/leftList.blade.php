<ul class="list-group">
    <a href="/allArticles" >
        <li class="list-group-item {{ Request::is('allArticles') ? 'active' : '' }}">
            <span class="badge">14</span>Нийтлэл
        </li>
    </a>
    <a href="/categories">
        <li class="list-group-item {{ Request::is('categories') ? 'active' : '' }}">
            <span class="badge">14</span>Ангилал
        </li>
    </a>
    <a href="/photos">
        <li class="list-group-item {{ Request::is('photos') ? 'active' : '' }}">
            <span class="badge">14</span>Зураг
        </li>
    </a>
    <a href="/schools">
        <li class="list-group-item {{ Request::is('schools') ? 'active' : '' }}">
            <span class="badge">14</span>Сургууль
        </li>
    </a>
    <a href="/albums">
        <li class="list-group-item {{ Request::is('albums') ? 'active' : '' }}">
            <span class="badge">14</span>Фото цомог
        </li>
    </a>
    <a href="/items">
        <li class="list-group-item {{ Request::is('items') ? 'active' : '' }}">
            <span class="badge">14</span>item
        </li>
    </a>
    <a href="/settings">
        <li class="list-group-item {{ Request::is('settings') ? 'active' : '' }}">
            <span class="badge">14</span>Тохиргоо
        </li>
    </a>
    <br>
    <a class="back-to-top" href="#top">Дээш шилжих</a>
</ul>