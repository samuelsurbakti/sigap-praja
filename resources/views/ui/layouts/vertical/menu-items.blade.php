@props(['menu'])

<li class="menu-item{{ request()->segment(2) == $menu->url ? ' active' : '' }}">
    <a href="{{ $menu->get_child->count() != 0 ? 'javascript:void(0);' : 'https://kuesioner.samuelsurbakti.my.id/manage/'.$menu->url}}" class="menu-link {{ $menu->get_child->count() != 0 ? 'menu-toggle' : '' }}">
        <i class="menu-icon icon-base {{ $menu->icon }}"></i>
        <div data-i18n="{{ $menu->title }}">{{ $menu->title }}</div>
    </a>
    @if($menu->get_child->count() != 0)
        <ul class="menu-sub">
            @foreach ($menu->get_child as $child)
                <li class="menu-item">
                    <a href="{{ 'https://kuesioner.samuelsurbakti.my.id/manage/'.$child->url }}" class="menu-link">
                        <div data-i18n="{{ $child->title }}">{{ $child->title }}</div>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</li>
