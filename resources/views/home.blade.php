@extends('layouts.app')

@section('title', 'Daftar Universitas | Beranda')

@section('styles')
    {{-- CSS Khusus untuk Kartu Universitas --}}
    <style>
        .university-card {
            background: #fff;
            margin-bottom: 20px;
            border-radius: 0;
            border: 1px solid #ddd; 
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05); 
            overflow: hidden;
        }
        .university-image {
            width: 100%;
            height: 250px; 
            object-fit: cover; 
            display: block;
        }
        .university-content {
            padding: 15px;
            text-align: center;
        }
        .university-content h3 {
            margin-top: 0;
            margin-bottom: 5px;
            color: #333;
        }
        .description-text {
            color: #666;
            font-size: 0.9em;
            text-align: left;
            margin: 0 auto 10px;
            max-width: 800px;
            line-height: 1.4em;
        }
        .truncated {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            height: 2.8em; 
        }
        .read-more-link {
            cursor: pointer;
            display: inline-block;
            color: orange; 
            text-decoration: none;
            margin-top: 10px;
            font-weight: bold;
            font-size: 0.9em;
        }
    </style>
@endsection

@section('content')
    <div class="content-container" style="max-width: 100%;">
        @foreach ($universities as $university)
            <div class="university-card">
                <img src="{{ asset('images/' . $university['image_url']) }}"
                     alt="{{ $university['name'] }} - Gambar Rektorat"
                     class="university-image">

                <div class="university-content">
                    <h3>{{ $university['name'] }}</h3>
                    
                    <p id="desc-{{ $loop->index }}" class="description-text truncated">
                        {{ $university['description'] }}
                    </p>
                    
                    <a id="link-{{ $loop->index }}" class="read-more-link" 
                       onclick="toggleDescription({{ $loop->index }})">
                        Read More
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('scripts')
    {{-- JavaScript untuk fungsi Read More/Show Less --}}
    <script>
        function toggleDescription(index) {
            const descriptionElement = document.getElementById('desc-' + index);
            const linkElement = document.getElementById('link-' + index);

            descriptionElement.classList.toggle('truncated');

            if (descriptionElement.classList.contains('truncated')) {
                linkElement.textContent = 'Read More';
                descriptionElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
            } else {
                linkElement.textContent = 'Show Less';
            }
        }
    </script>
@endsection