<li @if (count($category['children']) > 0)
    class="dropdown"
        @endif
><a href="{{ URL::to('/') }}/category/{{ $category['item']->seo_name }}"
    @if (count($category['children']) > 0)
    class="dropdown-toggle" data-toggle="dropdown"
            @endif
    >
        {{ $category['item']->name }}</a>
    @if (count($category['children']) > 0)
        <ul class="dropdown-menu">
            @each('partials.menu-item', $category['children'], 'category')
        </ul>
    @endif</li>
