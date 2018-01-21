@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <a href="/match/create">Submit a new result</a>
                        <br>
                        Recent results:
                        <table class="table table-bordered">
                            <thead>
                            <th>
                                <td>Opponent</td>
                                <td>Win/Loss</td>
                                <td>Games won</td>
                                <td>Games lost</td>
                            </th>
                            </thead>
                        </table>
                </div>
            </div>
        </div>
        <div class="card-columns">
            <div class="card">
                <div class="card-header">Overall Win Rate</div>
                <div class="card-text"><img src="{{ URL::asset('images/pie-placeholder.png') }}" alt="pie chart"></div>
            </div>
            <div class="card">
                <div class="card-header">Most Common Opponent: Jund</div>
                <div class="card-text"><img src="{{ URL::asset('images/pie-placeholder.png') }}" alt="pie chart"></div>

            </div>
            <div class="card">
                <div class="card-header">Overall Win Rate</div>
                <div class="card-text"><img src="{{ URL::asset('images/pie-placeholder.png') }}" alt="pie chart"></div>

            </div>
        </div>
    </div>
</div>
@endsection
