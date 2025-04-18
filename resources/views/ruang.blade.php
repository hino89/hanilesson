@extends('materi-layout')

@section('title','TERUWA | Ruang')
@section('materi-title', 'Ruang')

@section('images')
<style>
    .card-video {
        position: relative;
        height: 100%;
        width: 100%;
    }

    .card[for="c0"] {
        
    }
    .card[for="c1"] {
        background-image: url('./img1.jpeg');
    }
    .card[for="c2"] {
        background-image: url('./img2.jpeg');
    }
    .card[for="c3"] {
        background-image: url('./img3.jpeg');
    }
    .card[for="c4"] {
        background-image: url('./img4.jpeg');
    }
    .card[for="c5"] {
        background-image: url('./img5.jpeg');
    }

    .card[for="c6"] {
        background-image: url('./img1.jpeg');
    }
    .card[for="c7"] {
        background-image: url('./img2.jpeg');
    }
    .card[for="c8"] {
        background-image: url('./img3.jpeg');
    }
    .card[for="c9"] {
        background-image: url('./img4.jpeg');
    }
    .card[for="c10"] {
        background-image: url('./img5.jpeg');
    }
</style>
@endsection

@section('content-0')
<input type="radio" id="c0" checked>
    <label for="c0" class="card">
        <div class="row">
            <div class="icon">0</div>
            <div class="description">
                <h4>Ruang</h4>
                <p>test</p>
            </div>
        </div>
    </label>
@endsection

@section('content-1')
<input type="radio" name="slide" id="c1" checked>
    <label for="c1" class="card">
        <video controls muted loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Ruang-Lurus-Tari-Pendet.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">1</div>
            <div class="description">
                <h4>Ruang Lurus</h4>
                <p>Gerakan tari yang dilakukan secara vertikal atau horizontal tanpa perubahan
                    arah yang mendalam.</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c2" >
    <label for="c2" class="card">
        <video controls muted loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Ruang-Lingkaran-Tari-Kecak.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">2</div>
            <div class="description">
                <h4>Ruang Lingkaran</h4>
                <p>Gerakan tari yang dilakukan dalam bentuk lingkaran atau melingka</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c3" >
    <label for="c3" class="card">
        <div class="row">
            <div class="icon">3</div>
            <div class="description">
                <h4>Globalization</h4>
                <p>Help people all over the world</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c4" >
    <label for="c4" class="card">
        <div class="row">
            <div class="icon">4</div>
            <div class="description">
                <h4>New technologies</h4>
                <p>Space engineering becomes
                    more and more advanced</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c5" >
    <label for="c5" class="card">
        <div class="row">
            <div class="icon">5</div>
            <div class="description">
                <h4>New technologies</h4>
                <p>Space engineering becomes
                    more and more advanced</p>
            </div>
        </div>
    </label>
@endsection

@section('content-2')
<input type="radio" name="slide" id="c6">
    <label for="c6" class="card">
        <div class="row">
            <div class="icon">6</div>
            <div class="description">
                <h4>Winter</h4>
                <p>Winter has so much to offer -
                    creative activities</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c7" >
    <label for="c7" class="card">
        <div class="row">
            <div class="icon">7</div>
            <div class="description">
                <h4>Digital Technology</h4>
                <p>Gets better every day -
                    stay tuned</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c8" >
    <label for="c8" class="card">
        <div class="row">
            <div class="icon">8</div>
            <div class="description">
                <h4>Globalization</h4>
                <p>Help people all over the world</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c9" >
    <label for="c9" class="card">
        <div class="row">
            <div class="icon">9</div>
            <div class="description">
                <h4>New technologies</h4>
                <p>Space engineering becomes
                    more and more advanced</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c10" >
    <label for="c10" class="card">
        <div class="row">
            <div class="icon">10</div>
            <div class="description">
                <h4>New technologies</h4>
                <p>Space engineering becomes
                    more and more advanced</p>
            </div>
        </div>
    </label>
@endsection