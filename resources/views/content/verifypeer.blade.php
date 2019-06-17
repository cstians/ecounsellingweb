@extends('master_layout')

@section('page_title','Admin | Verify Peer Counsellors')

@section('main_content')
   <!-- MAIN CONTENT-->
   <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">List of Peer Counsellor Request</h2>
                        </div>
                    </div>
                </div>
                <div class="row m-t-25">
                    <div class="col-sm-6 col-lg-12">
                        <p>Please verify the following registration request by the peer counsellors. If the details provided by the peer counsellors do not match your records, kindly discard the request by clicking on the discard button</p>
                    </div>

                    <div class="table-responsive table-responsive-data2">
                             <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>Sl. No</th>
                                            <th colspan="2">Name</th>
                                            <th>Email</th>
                                            <th>yPeer ID</th>
                                            <th>CID</th>
                                            <th>Gender</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tr-shadow">
                                            <td>1</td>
                                            <td colspan="2">Doten Dorji</td>
                                            <td>
                                                <span class="block-email">doten@gmail.com</span>
                                            </td>
                                            <td class="desc">1234567</td>
                                            <td>12001223456</td>
                                            <td>Male</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Verify">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="tr-shadow">
                                                <td>2</td>
                                                <td colspan="2">Sonam Lhendup</td>
                                                <td>
                                                    <span class="block-email">sonaml@gmail.com</span>
                                                </td>
                                                <td class="desc">1455345</td>
                                                <td>11805000221</td>
                                                <td>Female</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Verify">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                </table>   
                            </div>
                </div>
@endsection