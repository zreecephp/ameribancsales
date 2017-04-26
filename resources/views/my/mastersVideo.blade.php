@extends('appAdmin')

@section('page-styles')
<style type="text/css">
		.masterstab{
			text-decoration:underline;
			font-weight:bold;	
		}
	</style>
@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>{{ $adminModel['pageTitle'] }}</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                <iframe width="420" height="315" src="{{ $videoUrl }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

    <br>

</section>
</div>


@endsection
