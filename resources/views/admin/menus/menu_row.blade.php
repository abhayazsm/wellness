<tr>
    <td>
        {!! str_repeat('&mdash; ', $level) !!}{{ $menu->title }}
    </td>
    <td>
        <a href="{{ $menu->url }}" target="_blank" class="text-decoration-none">{{ $menu->url }}</a>
    </td>
    <td>{{ $menu->parent_id ? $menu->parent->title : 'None' }}</td>
    <td class="text-center">
        <a href="{{ route('admin.menus.edit', $menu->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        <form action="{{ route('admin.menus.destroy', $menu->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this menu?');"><i class="fa fa-trash" aria-hidden="true"></i></button>
        </form>
    </td>
</tr>

@foreach ($menu->children as $child)
    @include('admin.menus.menu_row', ['menu' => $child, 'level' => $level + 1])
@endforeach
