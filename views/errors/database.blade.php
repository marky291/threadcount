@extends('grid.one-column')

@section('content')
    <div class="controller">
        <div class="row">
            <div class="col">
                <div class="flex">
                    <div class="flex-1 self-center"> }}
                        <h2>{{ $message }}</h2>
                        <p class="text-right">Database broke. Luckily its only college.</p>
                    </div>
                    <div class="flex-1">
                        <img src="https://png2.kisspng.com/sh/a443b94fe7174d710f842c6a00686dae/L0KzQYm3UsA4N6t7j5H0aYP2gLBuTfNwdaFmeAY2ZHn2c37qjPlxNZJ3jJ9rcnBudbA0hQZlNWZmT9RqZkK1Q7O7hMU6NmE3UKQ9NUS2QYa4WMA2PWM1SqQ9MkmxgLBu/kisspng-compact-disc-clip-art-broken-dvd-5a7baf223b4d59.0282454315180552022429.png"
                             alt="database page error skit.">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection