@extends('layout.master')

@section('content')
    <div class="col-12">
        <div class="card">


            <div class="card-body">
                <h5 class="card-title">Reports <span>/Today</span></h5>
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif



                <form
                    @if (isset($editable_data)) action="{{ route('editArticle', ['article_id' => $editable_data->article_id]) }}"
                @else
                action="{{ route('manageArticles') }}" @endif
                    method="POST">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group" style="margin: 1rem;">
                                    <label for="article">Article Name</label>
                                    <input type="text" name="article" id="article" class="form-control"
                                        @if (isset($editable_data)) value="{{ $editable_data->article_name }}" @endif>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group" style="margin: 1rem;">
                                    <label for="content">Content</label>
                                    <textarea class="form-control" name="content" id="content" cols="30" rows="10">
                                    @if (isset($editable_data))
{{ $editable_data->content }}
@endif
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                    <button style="margin: 1rem;" type="submit" class="btn btn-primary">Submit</button>
                </form>


                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Article</th>
                            <th>content</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td><a href="{{ route('deleteArticle', ['article_id' => $item->article_id]) }}">Delete</a>
                                    <a href="{{ route('editArticle', ['article_id' => $item->article_id]) }}">Edit</a>
                                </td>
                                <td>{{ $item->article_name }}</td>
                                <td>{{ $item->content }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection


@section('js_content')
    <script>
        CKEDITOR.replace('content')
    </script>
@endsection
