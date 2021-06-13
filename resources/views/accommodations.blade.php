
@extends('layouts.app')
@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
<head>
<style>
.row {
  display: flex;
}

.column {
  flex: 33.33%;
  padding: 5px;
}
@media screen and (max-width: 500px) {
  .column {
    width: 100%;
  }
}
}
</style>
</head>
<div class="container">
    <div class="row">
        <img src="{{  url('https://www.hawaii-guide.com/images/made/kauai-accommodations_1_2100_750_85_s_c1_c_c_0_0.jpg') }}" width="100%" height="300px" alt="foto" >
        @if (count($accommodations)==0)
<p color='red'> There are no records in the database!</p>
@else
<div class="row">
  <div class="column">
    @foreach ($accommodations as $accommodation)
    <td> accommodation_name </td>
    <td> {{ $accommodation->accommodation_name }} </td>
    <img src="{{ url('https://lh5.googleusercontent.com/p/AF1QipN8LC6vPsv4TSHgYM8cQ6Tfe4PjDeW-afWge9nQ=w600-h485-p-k-no') }}" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <td> accommodation_name </td>
    <td> {{ $accommodation->accommodation_name }} </td>
    <img src="{{ url('https://cf.bstatic.com/images/hotel/max1024x768/475/47561092.jpg') }}" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <td> accommodation_name </td>
    <td> {{ $accommodation->accommodation_name }} </td>
    <img src="{{ url('https://liepaja.travel/app/uploads/2019/05/dsc08789-800x450.jpg') }}" alt="Mountains" style="width:100%">
  </div>
  <div class="column">
    <td> accommodation_name </td>
    <td> {{ $accommodation->accommodation_name }} </td>
    <img src="{{ url('https://liepaja.travel/app/uploads/2019/05/dsc08789-800x450.jpg') }}" alt="Mountains" style="width:100%">
  </div>
  <div class="column">
    <td> accommodation_name </td>
    <td> {{ $accommodation->accommodation_name }} </td>
    <img src="{{ url('https://liepaja.travel/app/uploads/2019/05/dsc08789-800x450.jpg') }}" alt="Mountains" style="width:100%">
  </div>
  <div class="column">
    <td> accommodation_name </td>
    <td> {{ $accommodation->accommodation_name }} </td>
    <img src="{{ url('https://liepaja.travel/app/uploads/2019/05/dsc08789-800x450.jpg') }}" alt="Mountains" style="width:100%">
  </div>
</div>
<td>
</td>
@endforeach
</table>
@endif
<p> <input type="button" value="New Accommodation"> </p>
    </div>
</div>
@endsection
