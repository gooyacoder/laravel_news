@extends('master')

@section('sidebar')
	@parent
	<p>This is About Page sidebar.</p>

@endsection

@section('component')
	<h1>About Us Page</h1>
	@php
	$name = "Amirhosein";
	echo "<i>$name</i>";
@endphp
@endsection

