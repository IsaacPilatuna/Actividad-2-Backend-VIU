<?php
use App\ErrorSession;
?>
@if(Session::has(ErrorSession::SUCCESS_COD))
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="alert alert-success alert-dismissible" role="alert">
                    <strong>{{__('alerts.successful_message')}}</strong> {{ Session::get(ErrorSession::SUCCESS_COD) }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
@endif

@if(Session::has(ErrorSession::INFO_COD))
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="alert alert-info alert-dismissible" role="alert">
                    <strong>{{__('alerts.info_message')}}</strong> {{ Session::get(ErrorSession::INFO_COD) }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
@endif

@if(Session::has(ErrorSession::WARNING_COD))
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <strong>{{__('alerts.warning_message')}}</strong> {{ Session::get(ErrorSession::WARNING_COD) }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
@endif

@if(Session::has(ErrorSession::ERROR_COD))
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <strong>{{__('alerts.error_message')}}</strong> {{ Session::get(ErrorSession::ERROR_COD) }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
@endif
@if ($errors->any())
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <strong>{{__('alerts.error_message')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif
