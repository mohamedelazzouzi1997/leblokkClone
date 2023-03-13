@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'border-gray-300 focus:border-indigo-500 text-black focus:ring-indigo-500 px-3 py-1 border border-slate-400 rounded-md shadow-sm',
]) !!}>
