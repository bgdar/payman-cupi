<div class="popup-info position-fixed top-0.5 right-0.5 z-40" message="{{ $type }}" type-{{ $type }}>
    @php
        $icons = [
            'success' => 'bi-check-circle-fill text-success',
            'info' => 'bi-info-circle-fill text-info',
            'error' => 'bi-exclamation-circle-fill text-danger',
        ];
    @endphp

    <i class="bi {{ $icons[$type] ?? 'bi-info-circle' }}"></i>
    <div class="message d-inline-block ms-2">
        <p>{{ $message }}</p>
    </div>
</div>


<script defer>
    // setTimeout(() => {
    //     const popup = document.querySelector('.popup-info');
    //     if (popup) {
    //         popup.classList.add('d-none');
    //     }
    // }, 5000);
    setTimeout(()=>{
        $(".popup-info").hide()
    },5000)
</script>
