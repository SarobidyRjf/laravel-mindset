@props(['active' => true])

<li>
    <a {{ $attributes }} class="active"  style="{{ $active === true ? 'font-weight: bold;' : '' }}">
    {{ $slot }}
</a>
</li>