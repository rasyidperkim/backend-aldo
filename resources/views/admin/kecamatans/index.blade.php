@extends('layouts.admin')
@section('content')
@can('kecamatan_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.kecamatans.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.kecamatan.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.kecamatan.title_singular') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Kecamatan">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.kecamatan.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.kecamatan.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.kecamatan.fields.color') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kecamatans as $key => $kecamatan)
                        <tr data-entry-id="{{ $kecamatan->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $kecamatan->id ?? '' }}
                            </td>
                            <td>
                                {{ $kecamatan->name ?? '' }}
                            </td>
                            <td style="background-color: {{ $kecamatan->color ?? '' }}">
                                {{ $kecamatan->color ?? '' }}
                            </td>
                            <td>
                                @can('kecamatan_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.kecamatans.show', $kecamatan->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('kecamatan_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.kecamatans.edit', $kecamatan->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('kecamatan_delete')
                                    <form action="{{ route('admin.kecamatans.destroy', $kecamatan->id) }}" method="POST" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger show_confirm" value="{{ trans('global.delete') }}">
                                    </form>
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
@can('kecamatan_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.kecamatans.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Kecamatan:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

  
})


</script>
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          Swal.fire({
              title: '{{ trans('global.areYouSure') }}',
              icon: "warning",
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: '{{ trans('global.yesDelete') }}'
          }).then((willDelete) => {
            if (willDelete.isConfirmed) {
              form.submit();

              Swal.fire(
                'Terhapus !',
                'Data Kamu Berhasil Dihapus',
                'success'
                )
            }
          });
      });
</script>
@endsection
