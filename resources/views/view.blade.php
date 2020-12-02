@extends('layouts.app2')
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
        	<h1>Customer List</h1>
        	<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>HP No</th>
                <th>Name</th>
                <th>Total Finance</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($registers as $register)
            <tr>
                <td>{{$register->hp_number}}</td>
                <td>{{$register->hire_name}}</td>
                <td>{{$register->total_finance}}</td>
                <td>{{$register->date}}</td>
                <td rowspan="2">
                    <div class="mb-3">
                        <button type="button" data-toggle="collapse" href="#collapseExample123" class="btn btn-primary">Toggle</button>              
                    </div>

                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="collapse" id="collapseExample123">
                                
                            </div>

                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
<!-- DivTable.com -->

</div>





    </div>
@endsection