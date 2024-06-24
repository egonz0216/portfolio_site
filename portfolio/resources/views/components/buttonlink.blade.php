<a 
    href="{{$href}}"    
    target="{{$target}}" 
    {{
        $attributes->class([
            'py-4 px-6 md:px-9 lg:px-6 xl:px-9 rounded leading-normal border inline-block transititon', 
            'hover:bg-primary hover:border-primary hover:text-white' => $variant === 'outline-primary',
            'hover:bg-red-700 hover:border-red-700 hover:text-white' => $variant === 'outline-red',
            'bg-red-700 border-red-700 text-white hover:bg-red-800' => $variant === 'red',
            'bg-gray-900 border-gray-900 text-white hover:bg-gray-800' => $variant === 'gray',
            'bg-primary border-primary text-white hover:bg-opacity-80' => $variant === 'primary',
        ])
    }}">
    {{$slot}}
</a>