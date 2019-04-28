@extends('grid.one-column')

@section('content')
    <div class="controller">
        <div class="row">
            <div class="col">
                <div class="flex">
                    <div class="flex-1 self-center">
                        <h2>{{ $message }}</h2>
                        <p class="text-right">Invalid role permissions or not valid to access.</p>
                    </div>
                    <div class="flex-1">
                        <img src="https://images.vexels.com/media/users/3/143473/isolated/preview/6a4a5a7dd733d452adfd328c32f50d3e-stop-sign-icon-hand-by-vexels.png"
                             alt="database page error skit.">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection