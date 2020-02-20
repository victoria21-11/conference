@extends('admin.layouts.app')

@section('content')

<conferences-edit :data="{{ $data }}" inline-template>
    <div class="card">
        <div class="card-header">
            {{ $title }}
        </div>
        <div class="card-body">

            @component('admin.components.text', [
                'lang' => 'admin.conferences.columns.title',
                'model' => 'form.title',
            ])
            @endcomponent
            @component('admin.components.editor', [
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
            @component('admin.components.boolean', [
                'lang' => 'admin.conferences.columns.active',
                'model' => 'form.active',
            ])
            @endcomponent
            @component('admin.components.boolean', [
                'lang' => 'admin.conferences.columns.registration',
                'model' => 'form.registration',
            ])
            @endcomponent

            <div class="text-right">
                <button type="button" class="btn btn-success" @click="update">@lang('admin.save')</button>
            </div>
        </div>
    </div>
</conferences-edit>
@endsection
