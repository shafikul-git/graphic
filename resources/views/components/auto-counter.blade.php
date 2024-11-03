{{ $data }}
<div class="container">
    <div class="counter" id="counterContainer">
        <h1 id="counterValue">{{ $data->before }} 0 {{ $data->after }}</h1>
    </div>
</div>
<script>
    const totalDuration = {{ $data->total_duration * 1000 }};
    const totalCount = {{ $data->total_count }};
    const incrementDuration = totalDuration / totalCount;
    const action = "{{ $data->action }}";
    const dbCurrentTime = {{ $data->count_start }};

    let currentCount = action === 'increment' ? dbCurrentTime : totalCount;
    let countingStarted = false;

    function updateCounter() {
        if ((action === 'increment' && currentCount < totalCount) || (action === 'decrement' && currentCount > 0)) {
            currentCount = action === 'increment' ? currentCount + 1 : currentCount - 1;
            document.getElementById('counterValue').innerText =
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

    observer.observe(document.getElementById('counterContainer'));
</script>
