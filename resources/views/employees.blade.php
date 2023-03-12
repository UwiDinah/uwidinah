@extends('layouts.master')

@section('prince',' Employees Register')

@section('contents')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">List of Employee</h4>
                    </div>
                    <div class="content">
                        <table class="table table-responsive">
                             <tr>
                                <th>id</th>
                                <th>first name</th>
                                <th>last name</th>
                                <th> date of birth</th>
                                <th>job title</th>
                                <th>department</th>
                                <th>action</th>
                            </tr>
                            <tbody>
                                @foreach ($employee as $emp_row )
                                @if(!is_null($emp_row->department_id))
                                    <tr>
                                        <td>{{ $emp_row->id }}</td>
                                        <td>{{ $emp_row->firstname }}</td>
                                        <td>{{ $emp_row->lastname }}</td>
                                        <td>{{ $emp_row->date_of_birth }}</td>
                                        <td>@if(!is_null($emp_row->job_title_id))
                                            {{ $emp_row->getJobTitleName->job_title_name }}
                                        @endif</td>
                                        <td>@if($emp_row->department_id)
                                            {{ $emp_row->getDepartmentName->department_name}}
                                        @endif</td>
                                        <td>
                                            <div style="display:inline-flex;">
                                             <a href="{{ url('/employees/edit/'.$emp_row->id) }}" class="btn btn-sm btn-primary" style="margin-right:.3rem">edit</a>
                                             <a href="{{ url('/employees/delete/'.$emp_row->id) }}" class="btn btn-sm btn-danger">delete</a>

                                            </div>
                                         </td>
                                    </tr>
                                @endif

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="header">
                        <h4 class="title">List of Employee on waiting list</h4>
                    </div>
                    <div class="content">
                        <table class="table ">
                             <tr>
                                <th>id</th>
                                <th>first name</th>
                                <th>last name</th>
                                <th> date of birth</th>
                                <th>job title</th>
                                <th>department</th>
                                <th>action</th>
                            </tr>
                            <tbody>
                                @foreach ($employee as $emp_row )
                                @if(is_null($emp_row->department_id))
                                    <tr>
                                        <td>{{ $emp_row->id }}</td>
                                        <td>{{ $emp_row->firstname }}</td>
                                        <td>{{ $emp_row->lastname }}</td>
                                        <td>{{ $emp_row->date_of_birth }}</td>
                                        <td>{{ $emp_row->job_title }}</td>
                                        <td>{{ $emp_row->department_id}}</td>
                                        <td>
                                           <div style="display:inline-flex;">
                                            <a href="{{ url('/employees/edit/'.$emp_row->id) }}" class="btn btn-sm btn-primary" style="margin-right:.3rem">edit</a>
                                            <a href="{{ url('/employees/delete/'.$emp_row->id) }}" class="btn btn-sm btn-danger">delete</a>

                                           </div>
                                        </td>
                                    </tr>
                                @endif

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Employee Register</h4>
                    </div>
                    <div class="content">
                        <form action="employees/save" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>FirstName</label>
                                        <input type="text" class="form-control border-input" name="firstname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Lastname</label>
                                        <input type="text" class="form-control border-input" name="lastname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Date of Birth</label>
                                        <input type="date" class="form-control border-input" name="date_of_birth">
                                    </div>
                                </div>
                            </div>


                            <div class="row">

                                {{-- @foreach ($job as $key=> $job_title) --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Job Title </label>
                                        <select class ="form-control border-input" name="job_title">
                                            <option value=""> select job title </option>
                                            @if (!is_null($jobs))
                                            @foreach ($jobs as $job_row )
                                            <option value="{{ $job_row->id }}">
                                                {{ $job_row->job_title_name }}</option>

                                            @endforeach

                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Department  </label>
                                        <select class ="form-control border-input" name="department">
                                            <option value=""> select department </option>
                                            @if (!is_null($jobs))
                                            @foreach ($depart as $dep_row )
                                            <option value="{{ $dep_row->id }}">
                                                {{ $dep_row->department_name }}</option>

                                            @endforeach

                                            @endif
                                        </select>

                                    </div>
                                </div>

                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Add Employee</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
