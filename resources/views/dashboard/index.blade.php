@extends('layout.master')


@section('content')

    <!-- Reports -->
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



                <form action="{{ route('admin_dashboard') }}" method="POST">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="form-group" style="margin: 1rem;">
                                    <label for="user">User</label>
                                    <select class="form-select" aria-label="Default select example" name="user"
                                        id="user">
                                        <option selected value="">Select User</option>
                                        @foreach ($data as $item)
                                            <option value="{{ $item->user_id }}">
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group" style="margin: 1rem;">
                                    <label for="usertype">User Role</label>
                                    <select class="form-select" aria-label="Default select example" name="usertype"
                                        id="usertype">
                                        <option selected value="">User Type</option>
                                        @foreach ($data as $item)
                                            <option value="{{ $item->usertype }}">
                                                @if ($item->usertype == 'A')
                                                    <td>Admin</td>
                                                @elseif($item->usertype == 'E')
                                                    <td>Editor</td>
                                                @else
                                                    <td>User</td>
                                                @endif
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>








                    <button style="margin: 1rem;" type="submit" class="btn btn-primary">Submit</button>
                </form>


                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>UserType</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                @if ($item->usertype == 'A')
                                    <td>Admin</td>
                                @elseif($item->usertype == 'E')
                                    <td>Editor</td>
                                @else
                                    <td>User</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div><!-- End Reports -->


@endsection
