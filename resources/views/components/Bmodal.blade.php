@props([
    'static' => false,
    'MId' => '',
    'title' => '',
    'submitBTN' => ''
])
<!-- Modal -->
<div class="modal fade" id="{{ $MId }}" @if ($static) data-bs-backdrop="static" @endif
    tabindex="-1" {{ $attributes }}>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $MId }}Title">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">Close</button>
                @if ($submitBTN)
                    {!! $submitBTN !!}
                @endif
            </div>
        </div>
    </div>
</div>

@if ($errors->any())
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var errorModal = new bootstrap.Modal(document.getElementById('{{ $MId }}'));
        errorModal.show();
    });
</script>
@endif