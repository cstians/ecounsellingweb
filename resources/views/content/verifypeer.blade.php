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
                        <a href="{{ url('displaypeers') }}">List all Peer Counsellors</a>
                        </div>
                    </div>
                </div>
                <br/>
                @if(Session::has('message'))
                    <div class="sufee-alert alert with-close alert-success alert-dismissable fade show">
                    <span class="badge badge-pill badge-success">Success</span>
                    {{ Session::get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    @endif
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
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($unv_peer as $peer)
                                        <tr class="tr-shadow">
                                            <td>{{ $peer->id }}</td>
                                            <td colspan="2">{{ $peer->name }}</td>
                                            <td>
                                                <span class="block-email">{{ $peer->email }}</span>
                                            </td>
                                            <td class="desc">{{ $peer->peer_id}}</td>
                                            <td>{{ $peer->id_card }}</td>
                                            <td>Male</td>
                                            <td>
                                                <div class="table-data-feature">
                                                <form action="{{ route('approve_peer') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="pid" value="{{ $peer->id }}"/>
                                                    <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Verify">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button>
                                                </form>
                                                <form action="{{ route('delete_approval') }}" method="post">
                                                @csrf
                                                    <input type="hidden" name="_method" value="DELETE"/>
                                                <input type="hidden" name="pid" value="{{ $peer->id }}"/>
                                                    <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                </table>   
                            </div>
                </div>
@endsection