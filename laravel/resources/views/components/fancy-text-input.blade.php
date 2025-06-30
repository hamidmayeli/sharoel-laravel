@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-t-0 border-l-0 border-r-0 focus:ring-0 border-b border-b-outline focus:border-b-primary']) }}>
