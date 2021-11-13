@extends('layouts.admin')
@section('content')
@can('secured_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success mt-2" href="{{ route('admin.secureds.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.secured.title_singular') }}
            </a>
            <button class="btn btn-warning mt-2" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Secured', 'route' => 'admin.secureds.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.secured.title_singular') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Secured">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.secured.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.secured.fields.kecamatan') }}
                        </th>
                        <th>
                            {{ trans('cruds.secured.fields.communal') }}
                        </th>
                        <th>
                            {{ trans('cruds.secured.fields.individual') }}
                        </th>
                        <th>
                            {{ trans('cruds.secured.fields.mck_user') }}
                        </th>
                        <th>
                            {{ trans('cruds.secured.fields.qty_sr_pdpal') }}
                        </th>
                        <th>
                            {{ trans('cruds.secured.fields.year') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($secureds as $key => $secured)
                        <tr data-entry-id="{{ $secured->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $secured->id ?? '' }}
                            </td>
                            <td>
                                {{ $secured->kecamatan->name ?? '' }}
                            </td>
                            <td>
                                {{ $secured->communal ?? '' }}
                            </td>
                            <td>
                                {{ $secured->individual ?? '' }}
                            </td>
                            <td>
                                {{ $secured->mck_user ?? '' }}
                            </td>
                            <td>
                                {{ $secured->qty_sr_pdpal ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Secured::YEAR_SELECT[$secured->year] ?? '' }}
                            </td>
                            <td>
                                @can('secured_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.secureds.show', $secured->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('secured_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.secureds.edit', $secured->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan


                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection


@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  
  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Secured:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
