@extends('layouts.master')

@section('breadcumb','Department Title')

@section('contents')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Create Job Title</h4>
                        </div>
                        <div class="content">
                            <form action="/job_title/update/{{ $availableJobs->id }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input id="title" type="text" class="form-control border-input" value="{{$availableJobs->job_title_name  }}" name="job" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <input id="title" type="text" class="form-control border-input" value="{{$availableJobs->description  }}" name="description" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Save title</button>
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
