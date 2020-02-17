<ul class="list-group list-group-flush bg-transparent">
    <li class="list-group-item @if(request()->url() == url('admin/global_settings'))active @endif">
        <a href="{{ url('admin/global_settings') }}">@lang('admin.global_settings.title')</a>
    </li>
</ul>
