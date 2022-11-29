
@if ($errors->any())
@php
    $i = 1;
@endphp
    @foreach ($errors->all() as $item)

      <div id="alert-{{ $i }}" class="m-3" data-dismiss-target="#alert-{{ $i }}">
        <div class="alert alert-info">
          <div>
            <span>{{ $item }}</span>
          </div>
        </div>
      </div>
        @php
            $i++;
        @endphp
        
    @endforeach

@endif
