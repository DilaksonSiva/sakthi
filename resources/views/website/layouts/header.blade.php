<div class="row">
    <div class="col-md-12">
        <nav class="">
            {!! link_to_route('#', 'home', [], ['class' => '' . (preg_match('/^(\/)/i', Request::path()) ? 'active' : '') ]) !!}
            <span class="menu-separator">|</span>
            {!! link_to_route('#', 'about us', [], ['class' => '' . (preg_match('/^(about-us)/i', Request::path()) ? 'active' : '') ]) !!}
            <span class="menu-separator">|</span>
            {!! link_to_route('#', 'contact us', [], ['class' => '' . (preg_match('/^(contact-us)/i', Request::path()) ? 'active' : '') ]) !!}
            <span class="menu-separator">|</span>
            {!! link_to_route('#', 'careers', [], ['class' => '' . (preg_match('/^(careers)/i', Request::path()) ? 'active' : '') ]) !!}
            <span class="menu-separator">|</span>
            {!! link_to_route('#', 'events', [], ['class' => '' . (preg_match('/^(events)/i', Request::path()) ? 'active' : '') ]) !!}
            <span class="menu-separator">|</span>
            {!! link_to_route('#', 'news', [], ['class' => '' . (preg_match('/^(news)/i', Request::path()) ? 'active' : '') ]) !!}
        </nav>
    </div>
</div>