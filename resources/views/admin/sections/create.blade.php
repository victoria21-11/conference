@extends('admin.layouts.app')

@section('content')

<sections-create inline-template>
    <div class="card">
        <div class="card-header">
            {{ $title }}
        </div>
        <div class="card-body">

            @component('admin.components.text', [
                'lang' => 'admin.sections.columns.title',
                'model' => 'form.title',
            ])
            @endcomponent
            @component('admin.components.text', [
                'lang' => 'admin.sections.columns.coordinator_id',
                'model' => 'form.coordinator_id',
            ])
            @endcomponent
            @component('admin.components.select', [
                'lang' => 'admin.sections.columns.conference_id',
                'model' => 'form.conference_id',
                'options' => $conferences,
            ])
            @endcomponent
            @component('admin.components.boolean', [
                'lang' => 'admin.sections.columns.published',
                'model' => 'form.published',
            ])
            @endcomponent


            <div class="text-right">
                <button type="button" class="btn btn-success" @click="store">@lang('admin.save')</button>
            </div>
        </div>
    </div>
</sections-create>
@endsection
