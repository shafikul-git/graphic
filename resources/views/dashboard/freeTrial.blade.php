@extends('layouts.contentNavbarLayout')
@section('title', 'Sample')

@section('content')
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>Details</th>
                <th>Sample Details</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="allSample">
            <!-- all sample -->
        </tbody>
    </table>
@endsection

@include('components.createDynamicRoute')
<script>
    const url = createDynamicRoute('freeTrialSample');

    document.addEventListener('DOMContentLoaded', function() {
        const allSample = document.querySelector('#allSample');

        (async () => {
            try {
                const getDataResult = await getData(url);
                console.log(getDataResult);
                getDataResult.data.forEach(allData => {

                    allSample.innerHTML += `
                     <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                                    style="width: 45px; height: 45px" class="rounded-circle" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">${allData.name}</p>
                                    <p class="text-muted mb-0">${allData.email}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1">${allData.category}</p>
                           <p class="text-muted mb-0 w-20 ">${truncateInstruction(allData.instruction)}</p>
                        </td>
                        <td>
                            <span class="">${formatCreatedAt(allData.created_at)}</span>
                        </td>
                        <td class="">
                             <div class="d-flex gap-4 justify-content-center align-items-center">
                                <i class="fa-regular fa-eye" title="Preview"></i>
                                <i class="fa-solid fa-download" title="Download File"></i>
                                <i class="fa-solid fa-paper-plane" title="Send File"></i>
                            </div>
                        </td>
                    </tr>
                    `
                });

            } catch (error) {
                console.error('Error fetching data:', error);
            }
        })();

        function formatCreatedAt(dateTime) {
            const date = new Date(dateTime);
            const now = new Date();
            const seconds = Math.floor((now - date) / 1000);

            if (seconds < 60) return `${seconds}s ago`;
            if (seconds < 3600) return `${Math.floor(seconds / 60)}m ago`;
            if (seconds < 86400) return `${Math.floor(seconds / 3600)}h ago`;
            return `${Math.floor(seconds / 86400)}d ago`;
        }

        function truncateInstruction(instruction) {
            const words = instruction.split(' ');
            if (words.length > 4) {
                return words.slice(0, 4).join(' ') + '...';
            }
            return instruction;
        }
    });
</script>
