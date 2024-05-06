<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-primary rounded-md font-semibold text-xs text-foreground uppercase tracking-widest hover:bg-muted active:bg-gray-900 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
