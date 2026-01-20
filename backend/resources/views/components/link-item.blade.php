@props(['active' => false])

<li>
    <a {{ $attributes }}
        class="inline-flex items-center justify-center rounded-md px-4 py-2 text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50
       {{ $active ? 'bg-secondary text-secondary-foreground shadow-sm' : 'text-muted-foreground hover:bg-accent hover:text-accent-foreground' }}">
        {{ $slot }}
    </a>
</li>