@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row mt-4 mb-4">
                        <div class="col-xl-6 mb-3">
                            <div class="card text-white bg-red o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                </div>
                            <div class="mr-10">Add Studymoment</div>
                            </div>
                            <a class="card-footer text-white clearfix z-1" href="{{ route('studymoment.create') }}">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right "></i>
                                </span>
                            </a>
                            </div>
                        </div>

                        <div class="col-xl-6 mb-3">
                            <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                </div>
                            <div class="mr-10">Add Course</div>
                            </div>
                            <a class="card-footer text-white clearfix z-1" href="{{ route('course.create') }}">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right "></i>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 mb-3">
                            <div class="card text-white bg-yellow o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                </div>
                            <div class="mr-10">Show Studymoments</div>
                            </div>
                            <a class="card-footer text-white clearfix z-1" href="{{ route('studymoment.index') }}">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right "></i>
                                </span>
                            </a>
                            </div>
                        </div>

                        <div class="col-xl-6 mb-3">
                            <div class="card text-white bg-green o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                </div>
                            <div class="mr-10">Show Courses</div>
                            </div>
                            <a class="card-footer text-white clearfix z-1" href="{{ route('course.index') }}">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right "></i>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 mb-3">
                            <div class="card text-white bg-purple o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                </div>
                            <div class="mr-10">Summary</div>
                            </div>
                            <a class="card-footer text-white clearfix z-1" href="{{ route('home.summary') }}">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right "></i>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-header">Today</div>
                    <div class="card-body">
                    <center>
                        <div id="study-time">{{ $today }}</div>
                    </center>
                    </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Self Study (Week)</div>
                    <div class="card-body">
                    <center>
                        <div id="study-time">{{ $self_study }}</div>
                    </center>
                    </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Courses Study (Week)</div>
                    <div class="card-body">
                    <center>
                        <div id="study-time"> {{ $les }}</div>
                    </center>
                    </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Previous Week</div>
                    <div class="card-body">
                    <center>
                        <div id="study-time"> {{ $previous_week }}</div>
                    </center>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
