<div class="relative">
    <input type="password"
           {{ $attributes->merge(['class' => 'form-input px-4 py-3.5 rounded-lg border w-full pr-10']) }}class="form-input px-4 py-3.5 rounded-lg">
    <label for="toggleInputType"
           class="size-8 rounded-md flex-center hover:bg-gray-200 dark:hover:bg-dark-icon foucs:bg-gray-200 dark:foucs:bg-dark-icon position-center left-[95%]">
        <input type="checkbox"
               id="toggleInputType"
               class="inputTypeToggle peer/it"
               hidden>
        <i class="ri-eye-off-line text-gray-500 dark:text-dark-text peer-checked/it:before:content-['\ecb5']"></i>
    </label>
</div>
