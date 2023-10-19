@extends('admin.layouts.layout')

@section('content')


      <section class="section">
        <div class="section-header">
          <h1>Dashboard</h1>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-primary">
                <i class="fas fa-blog"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total Blogs</h4>
                </div>
                <div class="card-body">
                  {{$blogCount}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-danger">
                <i class="fas fa-thumbs-up"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total Skills</h4>
                </div>
                <div class="card-body">
                  {{$skilCount}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-warning">
                <i class="far fa-file"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total Portfolios</h4>
                </div>
                <div class="card-body">
                  {{$portfolioCount}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-success">
                <i class="fas fa-star"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total Feedback</h4>
                </div>
                <div class="card-body">
                  {{$feedbackCount}}
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

@endsection
