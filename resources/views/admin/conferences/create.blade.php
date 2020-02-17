@extends('admin.layouts.app')

@section('content')

<conferences-create inline-template>
    <div class="card">
        <div class="card-header">
            {{ $title }}
        </div>
        <div class="card-body">

            @component('admin.components.text', [
    'lang' => 'admin.conferences.columns.id',
    'model' => 'form.id',
])
@endcomponent
@component('admin.components.text', [
    'lang' => 'admin.conferences.columns.title',
    'model' => 'form.title',
])
@endcomponent
@component('admin.components.textarea', [
    'lang' => 'admin.conferences.columns.description',
    'model' => 'form.description',
])
@endcomponent
@component('admin.components.date', [
    'lang' => 'admin.conferences.columns.start_date',
    'model' => 'form.start_date',
])
@endcomponent
@component('admin.components.date', [
    'lang' => 'admin.conferences.columns.end_date',
    'model' => 'form.end_date',
])
@endcomponent
@component('admin.components.text', [
    'lang' => 'admin.conferences.columns.active',
    'model' => 'form.active',
])
@endcomponent
@component('admin.components.text', [
    'lang' => 'admin.conferences.columns.registration',
    'model' => 'form.registration',
])
@endcomponent
@component('admin.components.date', [
    'lang' => 'admin.conferences.columns.created_at',
    'model' => 'form.created_at',
])
@endcomponent
@component('admin.components.date', [
    'lang' => 'admin.conferences.columns.updated_at',
    'model' => 'form.updated_at',
])
@endcomponent

            
            <div class="text-right">
                <button type="button" class="btn btn-success" @click="store">@lang('admin.save')</button>
            </div>
        </div>
    </div>
</conferences-create>
@endsection
