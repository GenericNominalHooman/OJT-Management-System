@extends('layouts.able')
@section('content')


<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h6>Student Deployment</h6>
                <span>
                    Distribution of OJT students across
                </span>
                <span class="text-c-blue d-block">Learn more..</span>
                <div class="row d-flex justify-content-center align-items-center">

                    <div class="col">
                        <div id="deployment-chart" style="height:200px;"></div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-md-12">
                <div class="card social-res-card">
                    <div class="card-header">
                        <h5>Facebook Source</h5>
                    </div>
                    <div class="card-body">
                        <p class="m-b-10">Page Profile</p>
                        <div class="progress m-b-25">
                            <div class="progress-bar bg-c-blue" style="width:25%"></div>
                        </div>
                        <p class="m-b-10">Favorite</p>
                        <div class="progress m-b-25">
                            <div class="progress-bar bg-c-blue" style="width:85%"></div>
                        </div>
                        <p class="m-b-10">Like Story</p>
                        <div class="progress">
                            <div class="progress-bar bg-c-blue" style="width:65%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="card social-res-card">
                    <div class="card-header">
                        <h5>Twitter Source</h5>
                    </div>
                    <div class="card-body">
                        <p class="m-b-10">Wall Profile</p>
                        <div class="progress m-b-25">
                            <div class="progress-bar bg-c-red" style="width:85%"></div>
                        </div>
                        <p class="m-b-10">Favorite</p>
                        <div class="progress m-b-25">
                            <div class="progress-bar bg-c-red" style="width:25%"></div>
                        </div>
                        <p class="m-b-10">Like Tweets</p>
                        <div class="progress">
                            <div class="progress-bar bg-c-red" style="width:65%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- [ Main Content ] end -->
@endsection

@section('scripts')
    <script src="{{ asset('able/js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('able/js/pages/dashboard-help.js') }}"></script>
    
@endsection