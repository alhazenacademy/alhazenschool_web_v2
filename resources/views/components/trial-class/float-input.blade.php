@props([
    'id',
    'model' => '',
    'type' => 'text',
    'label' => 'Label',
    'placeholder' => ' ',
    'required' => false,
    'for' => ""
])

<input id="{{ $id }}" type="{{ $type }}" x-model="{{ $model }}" placeholder="{{ $placeholder }}" @if($required) required @endif
    class="peer w-full rounded-xl border border-[var(--color-neutral)] px-4 pt-6 pb-2 outline-none bg-white focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent" />
<label for="{{ $for }}" class="font-semibold pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 transition-all duration-20 text-[color-mix(in_oklab,var(--color-neutral)_60%,#000)]
peer-focus:top-2 peer-focus:translate-y-0 peer-focus:text-xs
peer-not-placeholder-shown:top-2 peer-not-placeholder-shown:translate-y-0 peer-not-placeholder-shown:text-xs
peer-focus:text-[var(--color-primary)]
peer-not-placeholder-shown:text-[var(--color-primary)]
peer-[&:-webkit-autofill]:top-2 peer-[&:-webkit-autofill]:translate-y-0 peer-[&:-webkit-autofill]:text-xs peer-[&:-webkit-autofill]:text-[var(--color-primary)]">
    {{ $label }}
</label>
