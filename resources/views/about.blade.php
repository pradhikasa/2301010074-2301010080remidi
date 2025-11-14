@extends('layouts.app')

@section('title', 'About')

@section('content')

<style>
    /* Styling khusus untuk card profile di halaman About */
    .profile-grid {
        display: flex;
        flex-wrap: wrap; 
        gap: 20px;
        justify-content: center; 
    }
    .profile-card {
        width: 100%;
        max-width: 400px;
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        /* Tinggi card minimal sama */
        min-height: 350px; 
    }
    .profile-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        display: block;
    }
    .profile-info {
        padding: 15px;
        text-align: left;
    }
    .profile-info h4 {
        margin-top: 0;
        margin-bottom: 5px;
        font-size: 1.1em;
        font-weight: bold;
    }
    .profile-info p {
        margin: 2px 0;
        font-size: 0.9em;
        color: #666;
    }
    .profile-info .tagline {
        color: #333;
        font-style: italic;
        margin-bottom: 10px;
    }
</style>

<div class="content-container">
    <div class="profile-grid">
        @foreach ($teamMembers as $member)
            <div class="profile-card">
                {{-- Gambar Profil (Pastikan julhadi.jpg dan imam.jpg ada di public/images) --}}
                <img src="{{ asset('images/' . $member['image_url']) }}" 
                     alt="{{ $member['name'] }}" 
                     class="profile-image">

                <div class="profile-info">
                    {{-- Nama --}}
                    <h4>{{ $member['name'] }}</h4>
                    
                    {{-- Tagline/Deskripsi --}}
                    <p class="tagline">{{ $member['tagline'] }}</p>

                    {{-- NIM --}}
                    <p>{{ $member['nim'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection