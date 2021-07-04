@extends('backend.layouts.master')

@section('title')

@endsection


@section('css')

@endsection

@section('content')
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">71,503</h2>
                        <p>Online Signups</p>
                        <div class="chartjs-wrapper">
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini  mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">9,503</h2>
                        <p>New Visitors Today</p>
                        <div class="chartjs-wrapper">
                            <canvas id="dual-line"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">71,503</h2>
                        <p>Monthly Total Order</p>
                        <div class="chartjs-wrapper">
                            <canvas id="area-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">9,503</h2>
                        <p>Total Revenue This Year</p>
                        <div class="chartjs-wrapper">
                            <canvas id="line"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Recent Order Table -->
                <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between">
                        <h2>Recent Orders</h2>
                        <div class="date-range-report ">
                            <span></span>
                        </div>
                    </div>
                    <div class="card-body pt-0 pb-5">
                        <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Product Name</th>
                                    <th class="d-none d-md-table-cell">Units</th>
                                    <th class="d-none d-md-table-cell">Order Date</th>
                                    <th class="d-none d-md-table-cell">Order Cost</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>24541</td>
                                    <td>
                                        <a class="text-dark" href=""> Coach Swagger</a>
                                    </td>
                                    <td class="d-none d-md-table-cell">1 Unit</td>
                                    <td class="d-none d-md-table-cell">Oct 20, 2018</td>
                                    <td class="d-none d-md-table-cell">$230</td>
                                    <td>
                                        <span class="badge badge-success">Completed</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                                id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdown-recent-order1">
                                                <li class="dropdown-item">
                                                    <a href="#">View</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>24541</td>
                                    <td>
                                        <a class="text-dark" href=""> Toddler Shoes, Gucci Watch</a>
                                    </td>
                                    <td class="d-none d-md-table-cell">2 Units</td>
                                    <td class="d-none d-md-table-cell">Nov 15, 2018</td>
                                    <td class="d-none d-md-table-cell">$550</td>
                                    <td>
                                        <span class="badge badge-warning">Delayed</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                                id="dropdown-recent-order2" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdown-recent-order2">
                                                <li class="dropdown-item">
                                                    <a href="#">View</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>24541</td>
                                    <td>
                                        <a class="text-dark" href=""> Hat Black Suits</a>
                                    </td>
                                    <td class="d-none d-md-table-cell">1 Unit</td>
                                    <td class="d-none d-md-table-cell">Nov 18, 2018</td>
                                    <td class="d-none d-md-table-cell">$325</td>
                                    <td>
                                        <span class="badge badge-warning">On Hold</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                                id="dropdown-recent-order3" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdown-recent-order3">
                                                <li class="dropdown-item">
                                                    <a href="#">View</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>24541</td>
                                    <td>
                                        <a class="text-dark" href=""> Backpack Gents, Swimming Cap Slin</a>
                                    </td>
                                    <td class="d-none d-md-table-cell">5 Units</td>
                                    <td class="d-none d-md-table-cell">Dec 13, 2018</td>
                                    <td class="d-none d-md-table-cell">$200</td>
                                    <td>
                                        <span class="badge badge-success">Completed</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                                id="dropdown-recent-order4" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdown-recent-order4">
                                                <li class="dropdown-item">
                                                    <a href="#">View</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>24541</td>
                                    <td>
                                        <a class="text-dark" href=""> Speed 500 Ignite</a>
                                    </td>
                                    <td class="d-none d-md-table-cell">1 Unit</td>
                                    <td class="d-none d-md-table-cell">Dec 23, 2018</td>
                                    <td class="d-none d-md-table-cell">$150</td>
                                    <td>
                                        <span class="badge badge-danger">Cancelled</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                                id="dropdown-recent-order5" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdown-recent-order5">
                                                <li class="dropdown-item">
                                                    <a href="#">View</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6">
                <!-- To Do list -->
                <div class="card card-default todo-table" id="todo" data-scroll-height="550">
                    <div class="card-header justify-content-between">
                        <h2>To Do List</h2>
                        <a class="btn btn-primary btn-pill" id="add-task" href="#" role="button"> Add task
                        </a>
                    </div>
                    <div class="card-body slim-scroll">
                        <div class="todo-single-item d-none" id="todo-input">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Todo" autofocus>
                                </div>
                            </form>
                        </div>
                        <div class="todo-list" id="todo-list">
                            <div class="todo-single-item d-flex flex-row justify-content-between finished">
                                <i class="mdi"></i>
                                <span>Finish Dashboard UI Kit update</span>
                                <span class="badge badge-primary">Finished</span>
                            </div>
                            <div class="todo-single-item d-flex flex-row justify-content-between current">
                                <i class="mdi"></i>
                                <span>Create new prototype for the landing page</span>
                                <span class="badge badge-primary">Today</span>
                            </div>
                            <div class="todo-single-item d-flex flex-row justify-content-between ">
                                <i class="mdi"></i>
                                <span> Add new Google Analytics code to all main files </span>
                                <span class="badge badge-danger">Yesterday</span>
                            </div>

                            <div class="todo-single-item d-flex flex-row justify-content-between ">
                                <i class="mdi"></i>
                                <span>Update parallax scroll on team page</span>
                                <span class="badge badge-success">Dec 15, 2018</span>
                            </div>

                            <div class="todo-single-item d-flex flex-row justify-content-between ">
                                <i class="mdi"></i>
                                <span>Update parallax scroll on team page</span>
                                <span class="badge badge-success">Dec 15, 2018</span>
                            </div>
                            <div class="todo-single-item d-flex flex-row justify-content-between ">
                                <i class="mdi"></i>
                                <span>Create online customer list book</span>
                                <span class="badge badge-success">Dec 15, 2018</span>
                            </div>
                            <div class="todo-single-item d-flex flex-row justify-content-between ">
                                <i class="mdi"></i>
                                <span>Lorem ipsum dolor sit amet, consectetur.</span>
                                <span class="badge badge-success">Dec 15, 2018</span>
                            </div>

                            <div class="todo-single-item d-flex flex-row justify-content-between mb-1">
                                <i class="mdi"></i>
                                <span>Update parallax scroll on team page</span>
                                <span class="badge badge-success">Dec 15, 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3"></div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- area chart -->
                <div class="card card-default">
                    <div class="card-header d-block d-md-flex justify-content-between">
                        <h2>World Wide Customer </h2>
                        <div class="dropdown show d-inline-block widget-dropdown ml-auto">
                            <a class="dropdown-toggle" href="#" role="button" id="world-dropdown" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-display="static">
                                World Wide
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="world-dropdown">
                                <li class="dropdown-item"><a href="#">Continetal chart</a></li>
                                <li class="dropdown-item"><a href="#">Sub-continental</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body vector-map-world">
                        <div id="world" style="height: 100%; width: 100%;"></div>
                    </div>
                    <div class="card-footer d-flex flex-wrap bg-white p-0">
                        <div class="col-6">
                            <div class="p-4">
                                <ul class="d-flex flex-column justify-content-between">
                                    <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                            style="color: #29cc97"></i>America <span class="float-right">5k</span></li>
                                    <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                            style="color: #4c84ff "></i>Australia <span class="float-right">3k</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-4 border-left">
                                <ul class="d-flex flex-column justify-content-between">
                                    <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                            style="color: #ffa128"></i>Europe <span class="float-right">4k</span></li>
                                    <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                            style="color: #fe5461"></i>Africa <span class="float-right">2k</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
@endsection

@section('script')

@endsection
