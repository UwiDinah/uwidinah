@extends('layouts.master')
@section('contents')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="header text-center">
                        <h3 class="title">Paper Dashboard</h3>
                        <p class="category">Are you looking for more components? Please check our Premium Version of Paper Dashboard Pro.</p>
                        <br>
                    </div>
                    <div class="content table-responsive table-full-width table-upgrade">
                        <table class="table">
                            <thead>
                                <th></th>
                                <th class="text-center">Free</th>
                                <th class="text-center">PRO</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Components</td>
                                    <td>16</td>
                                    <td>160</td>
                                </tr>
                                <tr>
                                    <td>Plugins</td>
                                    <td>4</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <td>Example Pages</td>
                                    <td>4</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>Documentation</td>
                                    <td><i class="fa fa-times text-danger"></i></td>
                                    <td><i class="fa fa-check text-success"></td>
                                </tr>
                                <tr>
                                    <td>SASS Files</td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td><i class="fa fa-check text-success"></td>
                                </tr>
                                <tr>
                                    <td>Login/Register/Lock Pages</td>
                                    <td><i class="fa fa-times text-danger"></i></td>
                                    <td><i class="fa fa-check text-success"></td>
                                </tr>
                                <tr>
                                    <td>Premium Support</td>
                                    <td><i class="fa fa-times text-danger"></i></td>
                                    <td><i class="fa fa-check text-success"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Free</td>
                                    <td>Just $39</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <a href="#" class="btn btn-round btn-fill btn-default disabled">Current Version</a>
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.creative-tim.com/product/paper-dashboard-pro/?ref=pdfree-upgrade-archive" class="btn btn-round btn-fill btn-info">Upgrade to PRO</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
