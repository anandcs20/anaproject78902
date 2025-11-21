<div class="flex items-center gap-1 select-none">
    <input type="checkbox"
           {{ $attributes->merge(['class' => '']) }} />
    <x-label for="{{ $for }}"
             class="pt-1 font-spline_sans text-sm leading-none text-gray-900 dark:text-dark-text cursor-pointer">{{ $labelname }}</x-label>
</div>
