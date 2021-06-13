
@extends('layouts.app')
@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
<head>
<style>
body{
background-color: #F0FFF0;

}
.gallery{
  display: flex;
  width: 900px;
  margin: auto;
  justify-content: space-between;
  flex-wrap: wrap;
}
figure{
  width: 200px;
  margin: 0;
  margin-bottom: 15px;
  border: 1px solid #777;
  padding: 8px;
  box-sizing: border-box;
  background-color: #FFE4C4;
}
figure img{
  width: 100%;
}
figure figcaption{
  text-align: center;
  padding: 8px 4px;
}
#search {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
}

#view {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
}
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <img src="{{  url('https://www.hawaii-guide.com/images/made/kauai-accommodations_1_2100_750_85_s_c1_c_c_0_0.jpg') }}" width="100%" height="300px" alt="foto" >
  <form id="search" action="/action_page.php">
  <label for="fname">Search by tags:</label>
  <input type="text" id="fname" name="fname">
  <input type="submit" value="Go!">
</form>
</div>
</div>
        @if (count($accommodations)==0)
<p color='red'> Unfortunately, there are no accommodations available for now!</p>
@else
@foreach ($accommodations as $accommodation)
<div class="gallery">
    <figure>
    <figcaption>{{ $accommodation->accommodation_name }}</figcaption>
    <img src="{{ url('https://lh5.googleusercontent.com/p/AF1QipN8LC6vPsv4TSHgYM8cQ6Tfe4PjDeW-afWge9nQ=w600-h485-p-k-no') }}" alt="Snow" style="width:100%">
    <figcaption>{{ $accommodation->accommodation_price }}<p>EUR</p></figcaption>
    <button id="view">View</button>
    </figure>
  <figure>
    <figcaption>{{ $accommodation->accommodation_name }}</figcaption>
    <img src="{{ url('https://cf.bstatic.com/images/hotel/max1024x768/475/47561092.jpg') }}" alt="Forest" style="width:100%">
    <figcaption>{{ $accommodation->accommodation_price }}<p>EUR</p></figcaption>
    <button id="view">View</button>
  </figure>
  <figure>
    <figcaption>{{ $accommodation->accommodation_name }}</figcaption>
    <img src="{{ url('https://liepaja.travel/app/uploads/2019/05/dsc08789-800x450.jpg') }}" alt="Mountains" style="width:100%">
<figcaption>{{ $accommodation->accommodation_price }}<p>EUR</p></figcaption>
<button id="view">View</button>
  </figure>
    <figure>
      <figcaption>{{ $accommodation->accommodation_name }}</figcaption>
    <img src="{{ url('https://liepaja.travel/app/uploads/2019/05/dsc08789-800x450.jpg') }}" alt="Mountains" style="width:100%">
<figcaption>{{ $accommodation->accommodation_price }}<p>EUR</p></figcaption>
<button id="view">View</button>
  </figure>
    <figure>
      <figcaption>{{ $accommodation->accommodation_name }}</figcaption>
    <img src="{{ url('https://liepaja.travel/app/uploads/2019/05/dsc08789-800x450.jpg') }}" alt="Mountains" style="width:100%">
<figcaption>{{ $accommodation->accommodation_price }}<p>EUR</p></figcaption>
<button id="view">View</button>
  </figure>
    <figure>
      <figcaption>{{ $accommodation->accommodation_name }}</figcaption>
    <img src="{{ url('https://liepaja.travel/app/uploads/2019/05/dsc08789-800x450.jpg') }}" alt="Mountains" style="width:100%">
<figcaption>{{ $accommodation->accommodation_price }}<p>EUR</p></figcaption>
<button id="view">View</button>
</figure>
<figure>
<figcaption>{{ $accommodation->accommodation_name }}</figcaption>
<img src="{{ url('https://liepaja.travel/app/uploads/2019/05/dsc08789-800x450.jpg') }}" alt="Mountains" style="width:100%">
<figcaption>{{ $accommodation->accommodation_price }}<p>EUR</p></figcaption>
<button id="view">View</button>
</figure>
<figure>
<figcaption>{{ $accommodation->accommodation_name }}</figcaption>
<img src="{{ url('https://liepaja.travel/app/uploads/2019/05/dsc08789-800x450.jpg') }}" alt="Mountains" style="width:100%">
<figcaption>{{ $accommodation->accommodation_price }}<p>EUR</p></figcaption>
<button id="view">View</button>
</figure>
<figure>
  <figcaption>{{ $accommodation->accommodation_name }}</figcaption>
<img src="{{ url('https://liepaja.travel/app/uploads/2019/05/dsc08789-800x450.jpg') }}" alt="Mountains" style="width:100%">
<figcaption>{{ $accommodation->accommodation_price }}<p>EUR</p></figcaption>
<button id="view">View</button>
</figure>
<figure>
  <figcaption>{{ $accommodation->accommodation_name }}</figcaption>
<img src="{{ url('https://liepaja.travel/app/uploads/2019/05/dsc08789-800x450.jpg') }}" alt="Mountains" style="width:100%">
<figcaption>{{ $accommodation->accommodation_price }}<p>EUR</p></figcaption>
<button id="view">View</button>
</figure>
</div>
<td>
</td>
@endforeach
@endif
</body>
@endsection
