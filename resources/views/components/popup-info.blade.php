<div class="popup-info position-fixed top-0.5 right-0.5 z-40" type-{{ $type }}>
    @php
        $icons = [
            'success' => 'bi-check-circle-fill text-success',
            'info' => 'bi-info-circle-fill text-info',
            'error' => 'bi-exclamation-circle-fill text-danger',
        ];
    @endphp

    <i class="bi {{ $icons[$type] ?? 'bi-info-circle' }}"></i>
    <section>
        <p>{{ $message }}</p>
    </section>
</div>
