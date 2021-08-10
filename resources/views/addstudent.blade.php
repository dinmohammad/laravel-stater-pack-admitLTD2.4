@extends('layouts/layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Student
        <small>Entry</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Add Student</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Student</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="{{url('/student-data-handler')}}" method="POST">
                    @csrf
                        <div class="box-body">
                            <div class="form-group col-md-4">
                                <label for="">Full Name</label>
                                <input type="text" name="fullName"  id="title" class="form-control" placeholder="Enter Full Name">
                            
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Mail</label>
                                <input type="text" name="mail" class="form-control" placeholder="Enter your mail address">
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection