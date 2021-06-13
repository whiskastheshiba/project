
@extends('layouts.app')
@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
<div class="container">
    <div class="row">
        <img src="{{  url('https://www.hawaii-guide.com/images/made/kauai-accommodations_1_2100_750_85_s_c1_c_c_0_0.jpg') }}" width="100%" height="300px" alt="foto" >
        @if (count($accommodations)==0)
<p color='red'> There are no records in the database!</p>
@else
<table style="border: 1px solid black">
<tr>
  <td> accommodation_id </td>
<td> accommodation_name </td>
<td> accommodation_city </td>
<td> accommodation_address </td>
<td> accommodation_price </td>
<td> accommmodation_description </td>
<td> </td>
</tr>
@foreach ($accommodations as $accommodation)
<tr>
<td> {{ $accommodation->id }} </td>
<td> {{ $accommodation->accommodation_name }} </td>
<td> {{ $accommodation->accommodation_city }} </td>
<td> {{ $accommodation->accommodation_address }} </td>
<td> {{ $accommodation->accommodation_price }} </td>
<td> {{ $accommodation->accommmodation_description }} </td>
 <td> </td>
</td>
@endforeach
</table>
@endif
<p> <input type="button" value="New Accommodation"> </p>
    </div>
</div>
@endsection
