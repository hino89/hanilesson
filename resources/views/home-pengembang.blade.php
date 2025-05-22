
@section('pengembang-card')
<style>
.pengembang-card {
  padding: 0rem;
  border-radius: 8px;
  color: #3E3F5B;
}

.pengembang-card h2 {
  margin-bottom: 1rem;
  font-size: 1.5rem;
}

.developer-list {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
  justify-content: center;
}

.developer-card {
  border: 1px solid #000;
  border-radius: 10px;
  padding: 0.75rem;
  width: 200px;
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  background-color: #f9f9f9;
}

.developer-card img {
  width: 100%;
  height: auto;
  border-radius: 6px;
  margin-bottom: 0.5rem;
}

.developer-card p {
  margin: 1rem;
  
}
.pdd {
    font-size: small;
}

/* Optional: Hover effect */
.developer-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

</style>

<div class="pengembang-card" style="z-index: 10">
  <div class="developer-list">
    <div class="developer-card">
      <img src="{{ asset('storage/images/hani.jpg') }}" alt="Nama 1">
      <p>Hani Alifah</p>
      <p class="pdd">Pendidikan Tari Universitas Lampung 2023</p>
    </div>
    <div class="developer-card">
      <img src="{{ asset('storage/images/della.jpg') }}" alt="Nama 2">
      <p>Della Andriyana</p>
      <p class="pdd">Pendidikan Tari Universitas Lampung 2023</p>
    </div>
    <div class="developer-card">
      <img src="{{ asset('storage/images/puspa.jpg') }}" alt="Nama 3">
      <p>Puspa Damar Pinasti</p>
      <p class="pdd">Pendidikan Tari Universitas Lampung 2023</p>
    </div>
    <!-- Tambah lagi jika perlu -->
  </div>
</div>

@endsection