@extends('layouts.app')
@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
<div class="container">
    <div class="row">
        <img src="{{  url('https://www.hawaii-guide.com/images/made/kauai-accommodations_1_2100_750_85_s_c1_c_c_0_0.jpg') }}" width="100%" height="300px" alt="foto" >
    </div>
        @if (count($vacations)==0)
<p color='red'> There are no records in the database!</p>
        @else
    <div class="row">

    <br>
<table style="border: 1px solid black">
<tr>
  <td> package_id </td>
<td> package_name </td>
<td> package_city </td>
<td> package_address </td>
<td> package_price </td>
<td> package_description </td>
<td> </td>
</tr>
@foreach ($vacations as $vacation)
<tr>
<td> {{ $vacation->id }} </td>
<td> {{ $vacation->package_name }} </td>
<td> {{ $vacation->package_city }} </td>
<td> {{ $vacation->package_address }} </td>
<td> {{ $vacation->package_price }} </td>
<td> {{ $vacation->package_description }} </td>
 <td> </td>
</td>
@endforeach
</table>
@endif
<p> <input type="button" value="New Accommodation"> </p>
    </div>
</div>
@endsection
