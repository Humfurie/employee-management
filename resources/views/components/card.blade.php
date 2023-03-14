<div class="card">
    @isset($header)
        <div class="card-header">
            {{ $header }}
        </div>
    @endisset

    @isset($body)
        <div class="card-body">
            {{ $body }}
        </div>
    @endisset

    @isset($footer)
        <div class="card-footer">
            {{ $footer }}
        </div>
    @endisset
</div>
