<ul class="list-group list-group-flush bg-transparent">
    <li class="list-group-item @if(request()->url() == url('admin/global_settings'))active @endif">
        <a href="{{ url('admin/global_settings') }}">@lang('admin.global_settings.title')</a>
    </li>
    <li class="list-group-item @if(request()->url() == url('admin/conferences'))active @endif">
        <a href="{{ url('admin/conferences') }}">@lang('admin.conferences.title')</a>
    </li>
    <li class="list-group-item @if(request()->url() == url('admin/sections'))active @endif">
        <a href="{{ url('admin/sections') }}">@lang('admin.sections.title')</a>
    </li>
</ul>
