@props([
    'items' => [],
])

<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-custom-icon">
        @foreach ($items as $item)
            @if (!$loop->last && empty($item['active']))
                <li class="breadcrumb-item">
                    <a href="{{ $item['url'] ?? 'javascript:void(0);' }}">
                        {{ $item['label'] }}
                    </a>
                    @if (!$loop->last)
                        <i class="breadcrumb-icon icon-base bx bx-chevron-right align-middle"></i>
                    @endif
                </li>
            @else
                @if ($item['member_of'])
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $item['member_of'] }}
                        <i class="breadcrumb-icon icon-base bx bx-chevron-right align-middle"></i>
                    </li>
                @endif
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $item['label'] }}

                    @if (!$loop->last)
                        <i class="breadcrumb-icon icon-base bx bx-chevron-right align-middle"></i>
                    @endif
                </li>
            @endif
        @endforeach
    </ol>
</nav>
