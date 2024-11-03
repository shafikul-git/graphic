<div class="container">
    <div class="counter" id="counterContainer{{ $data->id }}"
         data-total-duration="{{ $data->total_duration * 1000 }}"
         data-total-count="{{ $data->total_count }}"
         data-action="{{ $data->action }}"
         data-current-count="{{ $data->current_count }}">
        <h1 id="counterValue{{ $data->id }}">{{ $data->before }} 0 {{ $data->after }}</h1>
    </div>
</div>

<script>
    (function() {
        const counterElements = document.querySelectorAll('[id^="counterContainer"]'); // All counters

        counterElements.forEach(counterElement => {
            const totalDuration = parseInt(counterElement.getAttribute('data-total-duration'));
            const totalCount = parseInt(counterElement.getAttribute('data-total-count'));
            const action = counterElement.getAttribute('data-action');
            const dbCurrentTime = parseInt(counterElement.getAttribute('data-current-count'));
            const counterValueElement = counterElement.querySelector('h1');

            const incrementDuration = totalDuration / totalCount;
            let currentCount = action === 'increment' ? dbCurrentTime : totalCount;
            let countingStarted = false;

            function updateCounter() {
                if ((action === 'increment' && currentCount < totalCount) ||
                    (action === 'decrement' && currentCount > dbCurrentTime)) {
                    currentCount = action === 'increment' ? currentCount + 1 : currentCount - 1;
                    counterValueElement.innerText =
                        `{{ $data->before }} ${currentCount} {{ $data->after }}`;
                    setTimeout(updateCounter, incrementDuration);
                }
            }

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !countingStarted) {
                        countingStarted = true;
                        updateCounter();
                    }
                });
            });

            observer.observe(counterElement);
        });
    })();
</script>
