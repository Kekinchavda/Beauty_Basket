<!-- Start Breadcrumb Section -->
<div class="breadcrumb-section">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">

                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Home</a>
                </li>

                @foreach ($breadcrumbs as $breadcrumb)
                    @if ($loop->last)
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $breadcrumb['title'] }}
                        </li>
                    @else
                        <li class="breadcrumb-item">
                            <a href="{{ $breadcrumb['url'] }}">
                                {{ $breadcrumb['title'] }}
                            </a>
                        </li>
                    @endif
                @endforeach

            </ol>
        </nav>
    </div>
</div>
<!-- End Breadcrumb Section -->
