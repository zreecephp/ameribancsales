@extends('appAdmin')

@section('page-styles')

    <link href="/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/jtable.2.4.0/themes/metro/blue/jtable.css" rel="stylesheet" type="text/css" />

@endsection

@section('page-scripts')

    <script src="/assets/plugins/jtable.2.4.0/jquery.jtable.js" type="text/javascript"></script>

    <script type="text/javascript">

        $(document).ready(function () {

            $('#UserTableContainer').jtable({
                title: 'Active Users',
                paging: true, //Enable paging
                pageSize: 10, //Set page size (default: 10)
                sorting: true, //Enable sorting
                defaultSorting: 'name ASC', //Set default sorting
                actions: {
                    listAction: '/reports/getUsers'
                },
                fields: {
                    id: {
                        key: true,
                        create: false,
                        edit: false,
                        list: false
                    },
                    username: {
                        title: 'Username',
                        width: '23%'
                    },
                    name: {
                        title: 'Name',
                        width: '23%'
                    },
                    email: {
                        title: 'Email address',
                        width: '23%'
                    }
                }
            });

            //Load list from server
//            $('#UserTableContainer').jtable('load');
        });

    </script>
@endsection

@section('content')

<div class="row">
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-10">

                <div id="UserTableContainer"></div>

            </div>
		</div>
	</div>
</div>

@endsection
