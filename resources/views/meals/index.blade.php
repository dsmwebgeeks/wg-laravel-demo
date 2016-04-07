@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Meals</div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <form class="form-horizontal" action="{{ url('meal') }}" method="post">
                        {!! csrf_field() !!}

                        <!-- Meal Name -->
                        <div class="form-group">
                            <label for="meal-name" class="col-sm-3 control-label">Meal</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="meal-name" class="form-control">
                            </div>
                        </div>

                        <!-- Meal Day -->
                        <div class="form-group">
                            <label for="meal-day" class="col-sm-3 control-label">Day</label>

                            <div class="col-sm-6">
                                <input type="text" name="day" id="meal-day" class="form-control">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-plus"></i> Add Meal
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
