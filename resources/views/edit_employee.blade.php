@extends('layouts.master')

@section('prince',' Employees Register')

@section('contents')
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-8 col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit employees</h4>
                    </div>
                    <div class="content">
                        <form action="{{ url('employees/update/'.$employeeToEdit->id) }}" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>FirstName</label>
                                        <input type="text" class="form-control border-input" value="{{ $employeeToEdit->firstname }}" name="firstname">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Lastname</label>
                                        <input type="text" class="form-control border-input" value="{{ $employeeToEdit->lastname }}" name="lastname">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Date of Birth</label>
                                        <input type="date" class="form-control border-input" value="{{ $employeeToEdit->date_of_birth }}" name="date_of_birth">
                                    </div>
                                </div>
                            </div>


                            <div class="row">

                                {{-- @foreach ($job as $key=> $job_title) --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Job Title </label>
                                        <select class ="form-control border-input" value="{{ $employeeToEdit->job_title_id}}" name="job_title">
                                            <option value=""> select job title </option>
                                            @if (!is_null($jobs))
                                                @foreach ($jobs as $job_row )
                                                    @if($job_row->id == $employeeToEdit->job_title_id)
                                                        <option selected="selected" value="{{ $job_row->id }}">
                                                        {{ $job_row->job_title_name }}</option>
                                                    @else
                                                        <option value="{{ $job_row->id }}">
                                                        {{ $job_row->job_title_name }}</option>
                                                    @endif

                                                @endforeach

                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Department  </label>
                                        <select class ="form-control border-input" value="{{ $employeeToEdit->department_id }}" name="department">
                                            <option value=""> select department </option>
                                            @if (!is_null($depart))
                                            @foreach ($depart as $dep_row )
                                            @if($dep_row->id == $employeeToEdit->department_id)
                                            <option selected="selected" value="{{ $dep_row->id }}">
                                            {{ $dep_row->department_name }}</option>
                                        @else
                                            <option value="{{ $dep_row->id }}">
                                            {{ $dep_row->department_name }}</option>
                                        @endif
                                            @endforeach

                                            @endif
                                        </select>

                                    </div>
                                </div>

                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Update changes</button>
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
