@props(['employer', 'width' => 90])


<img src="{{ asset($employer->logo ? 'storage/'.$employer->logo : 'storage/default-logo.png') }}" alt="" class="rounded-xl" width="{{ $width }}">

