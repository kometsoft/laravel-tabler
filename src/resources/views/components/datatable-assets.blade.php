<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/searchpanes/2.0.2/css/searchPanes.bootstrap5.min.css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/searchpanes/2.0.2/js/dataTables.searchPanes.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/searchpanes/2.0.2/js/searchPanes.bootstrap5.min.js"></script>
<script src="{{ asset('/vendor/datatables/buttons.server-side.js') }}"></script>

<style>
    table.dataTable {
        margin-top: 0;
        margin-bottom: 0;
    }

    .table.dataTable {
        clear: both;
        margin-top: 6px;
        margin-bottom: 6px;
        max-width: none;
        border-collapse: separate;
        border-spacing: 0;
    }

    div.dataTables_wrapper div.dataTables_info {
        padding-top: 0;
    }

    div.dt-button-collection {
        padding: 0.25rem 0 0.25rem 0;
    }
</style>

<script>
    var locale = '{{ config('app.locale') == 'en' ? 'en-GB' : 'ms' }}'

    $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn btn-ghost-primary btn-sm'

    $.extend( DataTable.ext.classes, {
        sTable: 'table card-table text-nowrap',
    })

    $.extend($.fn.dataTable.defaults, {
        dom: `
        <"card"
            <"card-body border-bottom py-3"
                <"row d-flex align-items-center"
                    <"col-sm-12 col-md-5 text-muted"l>
                    <"col-sm-12 col-md-7 mt-2 mt-md-0 text-muted"f>
                >
            >
            <"table-responsive"tr>
            <"card-footer"
                <"row d-flex align-items-center"
                    <"col-sm-12 col-md-5 text-muted"i>
                    <"col-sm-12 col-md-7 mt-2 mt-md-0"p>
                >
            >
        >`,
        autoWidth: false,
        pagingType: 'full_numbers',
        pageLength: 10,
        language: {
            url: `https://cdn.datatables.net/plug-ins/1.12.1/i18n/${locale}.json`,
        },
        initComplete: function (settings, json) {
            console.log('DT Loaded!')
        },
    })
</script>