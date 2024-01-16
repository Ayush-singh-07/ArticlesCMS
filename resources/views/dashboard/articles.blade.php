@extends('layout.master')

@section('content')
    <div class="col-12">
        <div class="card">


            <div class="card-body">

                <h1>Articles</h1>
                @foreach ($data as $item)
                    <div class="card">
                        <div class="card-body">
                            {!! $item->content !!}
                        </div>
                    </div>
                @endforeach



            </div>

        </div>
    </div>
@endsection
