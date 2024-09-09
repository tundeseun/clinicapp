<div class="text-end d-flex gap-3 align-items-center">
@hasPermission('edit_encounter') 
    <button type="button" class="btn text-success p-0 fs-5" data-crud-id="{{ $data->id }}" title="{{ __('messages.edit') }} " data-bs-toggle="tooltip"> <i class="ph ph-pencil-simple-line"></i> </button>
    @endhasPermission
    @hasPermission('delete_encounter')
    <a href="{{route("backend.problems.destroy", $data->id)}}" id="delete-{{$module_name}}-{{$data->id}}" class="btn text-danger p-0 fs-5" data-type="ajax" data-method="DELETE" data-token="{{csrf_token()}}" data-bs-toggle="tooltip" title="{{__('Delete')}}" data-confirm="{{ __('messages.are_you_sure?') }}"><i class="ph ph-trash"></i></a>
    @endhasPermission
</div>
