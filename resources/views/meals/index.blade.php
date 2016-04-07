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

                    <form class="form-horizontal" action="{{ url('meals') }}" method="post">
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
                                <input type="date" name="day" id="meal-day" class="form-control">
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
            <!-- Current Tasks -->
            @if (count($meals) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Meals
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">

                            <!-- Table Headings -->
                            <thead>
                                <th>Day</th>
                                <th>Meal</th>
                                <th>&nbsp;</th>
                            </thead>

                            <!-- Table Body -->
                            <tbody>
                                @foreach ($meals as $meal)
                                    <tr>
                                        <td class="table-text">
                                            <div>{{ $meal->day }}</div>
                                        </td>

                                        <td class="table-text">
                                            <div>{{ $meal->name }}</div>
                                        </td>

                                        <td>
                                            <form action="{{ url('meals/'.$meal->id) }}" method="POST">
                                                {!! csrf_field() !!}
                                                {!! method_field('DELETE') !!}

                                                <button type="submit" id="delete-meal-{{ $meal->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection
