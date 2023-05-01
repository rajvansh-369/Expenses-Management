<div
        {{ $attributes->merge([
            'class' => 'mt-4 bg-dark dark:bg-black-800 rounded-lg border border-black-200 dark:border-black-800'.
            ($attributes->get('shadowless') ? ' ' : ' shadow-lg')
            ]) }}
>
    @if(isset($header))
        <div class="bg-black-50 dark:bg-black-800 rounded-t-lg p-4 border-b border-black-200 dark:border-black-800">
            {{ $header }}
        </div>
    @endif
    <div class="p-4">
        {{ $slot }}
    </div>
    @if(isset($footer))
        <div class="bg-black-50 dark:bg-black-800 rounded-b-lg p-2 border-t border-black-200 dark:border-black-800">
            {{ $footer }}
        </div>
    @endif
</div>
