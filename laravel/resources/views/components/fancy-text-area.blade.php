@props(['disabled' => false])

<textarea @disabled($disabled) {{ $attributes->merge(['class' => 'border-t-0 border-l-0 border-r-0 focus:ring-0 border-b border-b-outline focus:border-b-primary resize-none']) }} rows="3" ></textarea>
