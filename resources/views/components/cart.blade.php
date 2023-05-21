@props(['size' => 40,'color'=>'gray'])

@php
    switch($color){
        case 'gray':
            $col = "#374151";
            break;
        case 'white':
            $col ="#ffffff";
            break;

        default:
            $col = "#374151";
            break;
    }    

@endphp

<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="{{$size}}" height="{{$size}}" viewBox="0,0,256,256"
    style="fill:#000000;">
    <g fill="{{$col}}" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"
        stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
        <g transform="scale(5.12,5.12)">
            <path
                d="M1,3v12h2v33h44v-33h2v-12zM3,5h44v8h-44zM5,15h40v31h-40zM17.5,19c-1.92187,0 -3.5,1.57813 -3.5,3.5c0,1.92188 1.57813,3.5 3.5,3.5h15c1.92188,0 3.5,-1.57812 3.5,-3.5c0,-1.92187 -1.57812,-3.5 -3.5,-3.5zM17.5,21h15c0.83984,0 1.5,0.66016 1.5,1.5c0,0.83984 -0.66016,1.5 -1.5,1.5h-15c-0.83984,0 -1.5,-0.66016 -1.5,-1.5c0,-0.83984 0.66016,-1.5 1.5,-1.5z">
            </path>
        </g>
    </g>
</svg>
