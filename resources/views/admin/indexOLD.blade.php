@extends('appAdmin')

@section('page-styles')
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/smoothness/jquery-ui.css">
    <link href="/assets/plugins/jtable.2.4.0/themes/metro/blue/jtable.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
		.usermanagtab{
			text-decoration:underline;
			font-weight:bold;	
		}
	</style>
@endsection

@section('page-scripts')

    <script src="/assets/plugins/jtable.2.4.0/jquery.jtable.js"></script>

    <script type="text/javascript">

        $(document).ready(function () {

            $('#UserTableContainer').jtable({
                title: 'Users',
                paging: true, //Enable paging
                pageSize: 25, //Set page size (default: 10)
                sorting: true, //Enable sorting
                ajaxSettings: {
                    type: 'GET',
                    dataType: 'json'
                },
                actions: {
                    listAction: '/admin/getUsers'
                },

                fields: {
                    id: {
                        key: true,
                        create: false,
                        edit: false,
                        list: false
                    },
                    name: {
                        title: 'Name',
                        width: '15%',
                        display: function (data) {
                            return $('<a href="/admin/userDetail/' + data.record.id + '">' + data.record.name + '</a>');
                        }
                    },
                    email: {
                        title: 'Email address',
                        width: '20%'
                    },
                    roleName: {
                        title: 'Role Name',
                        width: '10%'
                    },
                    repid: {
                        title: 'Rep Id',
                        width: '10%'
                    },
                    active: {
                        title: 'Active',
                        width: '10%'
                    },
                    created_at: {
                        title: 'Date Created',
                        width: '15%',
                        type: 'date',
                        displayFormat: 'mm.dd.yy'
                    },
					countdownlist: {
                        title: 'Countdown',
                        width: '12%'
                    },
					wealthlist: {
                        title: 'Wealth',
                        width: '8%'
                    }
                }
            });

            //Load student list from server
            $('#UserTableContainer').jtable('load');
        });

    </script>
@endsection

@section('content')

    <div class="container">
        <div class="page-header">
            <h2>User Management</h2>
        </div>

        <!-- .row start -->
        <div class="row">
            <div class="col-sm-10">
                <div class="row">
                    <div id="UserTableContainer"></div>
                </div>
            </div>
        </div>
    </div>


@endsection
